$(function () {
  const $trigger = $(".action-buttons-row__cta .add-to-cart");

  $trigger.on("click", function (e) {
    e.preventDefault();
    openCartModal();
  });

  function openCartModal() {
    const $template = $("#cart-modal-template");

    if (!$template.length) {
      console.error(
        "cart-modal.js: #cart-modal-template not found in the DOM. Check that cart_modal.php is included on this page."
      );
      return;
    }

    const templateHtml = $template.html();

    if (!templateHtml || !templateHtml.trim()) {
      console.error("cart-modal.js: #cart-modal-template is present but empty.");
      return;
    }

    const dialog = bootbox.dialog({
      message: templateHtml,
      className: "cart-modal-dialog",
      closeButton: true,
      centerVertical: true,
      onEscape: true,
      backdrop: true,
    });

    dialog.init(function () {
      const $modal = dialog.find(".cart-modal");
      bindSteppers($modal);
      bindSwatches($modal);
      bindTooltips($modal);

      $modal.find(".cart-modal__row-group").each(function () {
        renderRow($(this));
      });
      recalcSummary($modal);

      $modal.find(".cart-modal__submit").on("click", function () {
        // TODO: hook into actual add-to-cart / AJAX submit logic
        dialog.modal("hide");
      });
    });
  }

  // ---------------------------------------------------------------------
  // Row data (read from data-* on <tbody class="cart-modal__row-group">)
  // limit = 24h + 2-3 dni + suma dostaw przyszłych
  // ---------------------------------------------------------------------
  function getRowData($row) {
    const stockExpress = parseInt($row.data("stockExpress"), 10) || 0;
    const stockStandard = parseInt($row.data("stockStandard"), 10) || 0;
    const rawDeliveries = $row.data("deliveries");
    const deliveries = Array.isArray(rawDeliveries) ? rawDeliveries : [];
    const future = deliveries.reduce(function (sum, d) {
      return sum + (parseInt(d.qty, 10) || 0);
    }, 0);

    return {
      price: parseFloat($row.data("price")) || 0,
      stockExpress: stockExpress,
      stockStandard: stockStandard,
      deliveries: deliveries,
      future: future,
      immediate: stockExpress + stockStandard,
      max: stockExpress + stockStandard + future,
    };
  }

  function getQty($row) {
    return parseInt($row.find(".qty-stepper__input").val(), 10) || 0;
  }

  // Sets quantity, clamps it to the size limit and remembers the
  // originally requested value (used for the "Zmieniliśmy ilość" message).
  function setQty($row, requested) {
    const d = getRowData($row);
    let qty = Math.max(0, requested);
    let clampedFrom = null;

    if (qty > d.max) {
      clampedFrom = qty;
      qty = d.max;
    }

    $row.data("clampedFrom", clampedFrom);
    $row.find(".qty-stepper__input").val(qty);
    renderRow($row);
  }

  function renderRow($row) {
    const d = getRowData($row);
    const qty = getQty($row);
    const futureUsed = Math.max(0, qty - d.immediate);
    const atMax = qty >= d.max;
    const clampedFrom = $row.data("clampedFrom");

    $row.find(".row-total").text(formatPLN(d.price * qty));

    // Stepper state: plus disappears at the limit
    $row
      .find(".qty-stepper__btn--plus")
      .toggleClass("is-hidden", atMax)
      .prop("disabled", atMax);

    $row
      .find(".qty-stepper__input")
      .attr("max", d.max)
      .toggleClass("is-future", futureUsed > 0)
      .toggleClass("is-max", atMax);

    // Notes under the row
    let infoText = "";
    let alertText = "";

    if (clampedFrom) {
      infoText =
        "Możesz zamówić maksymalnie " +
        d.max +
        " szt. tego rozmiaru. Zmieniliśmy ilość z " +
        clampedFrom +
        " na " +
        d.max +
        " szt.";
    }

    if (atMax) {
      alertText =
        "Dostawy przyszłe: " +
        d.future +
        " szt. Limit: " +
        d.max +
        " szt. (" +
        d.stockExpress +
        " + " +
        d.stockStandard +
        " + " +
        d.future +
        ")";
    } else if (futureUsed > 0) {
      alertText = "W tym " + futureUsed + " szt. z przyszłej dostawy";
    }

    const hasNote = !!(infoText || alertText);
    $row.find(".cart-modal__note--info").text(infoText).prop("hidden", !infoText);
    $row.find(".cart-modal__note--alert").text(alertText).prop("hidden", !alertText);
    $row.find(".cart-modal__note-row").prop("hidden", !hasNote);
    $row.toggleClass("has-note", hasNote);
  }

  // ---------------------------------------------------------------------
  // Steppers
  // ---------------------------------------------------------------------
  function bindSteppers($modal) {
    $modal.on("click", ".qty-stepper__btn", function () {
      const $btn = $(this);
      const $row = $btn.closest(".cart-modal__row-group");
      const current = getQty($row);

      setQty($row, $btn.hasClass("qty-stepper__btn--plus") ? current + 1 : current - 1);
      recalcSummary($modal);
    });

    $modal.on("input change", ".qty-stepper__input", function (e) {
      const $input = $(this);
      const raw = $input.val();

      // Let the user clear the field while typing; normalize on "change"
      if (e.type === "input" && raw === "") return;

      let value = parseInt(raw, 10);
      if (isNaN(value) || value < 0) value = 0;

      const $row = $input.closest(".cart-modal__row-group");
      setQty($row, value);
      recalcSummary($modal);
    });
  }

  // ---------------------------------------------------------------------
  // Summary (grand total, "w tym dostawy przyszłe", selected-color count)
  // ---------------------------------------------------------------------
  function recalcSummary($modal) {
    let grandTotal = 0;
    let totalQty = 0;
    let futureTotal = 0;

    $modal.find(".cart-modal__row-group").each(function () {
      const $row = $(this);
      const d = getRowData($row);
      const qty = getQty($row);

      grandTotal += d.price * qty;
      totalQty += qty;
      futureTotal += Math.max(0, qty - d.immediate);
    });

    $modal.find(".cart-modal__grand-total").text(formatPLN(grandTotal));

    $modal
      .find(".cart-modal__selected-note")
      .text("w tym dostawy przyszłe: " + futureTotal + " szt.")
      .prop("hidden", futureTotal === 0);

    updateSelectedSwatch($modal, totalQty);
  }

  function updateSelectedSwatch($modal, totalQty) {
    const $active = $modal.find(".swatch-btn--active");
    if (!$active.length) return;

    const color = $active.data("color");
    let $item = $modal.find(".selected-swatch-item").filter(function () {
      return $(this).attr("data-color") === color;
    });

    if (!$item.length) {
      $item = $(
        '<span class="selected-swatch-item">' +
          '<span class="selected-swatch-dot"></span>' +
          '<span class="selected-swatch-count"></span>' +
          "</span>"
      ).attr("data-color", color);
      $item
        .find(".selected-swatch-dot")
        .css("background-color", $active.css("background-color"));
      $modal.find(".cart-modal__selected-swatches").prepend($item);
    }

    $item.find(".selected-swatch-count").text(totalQty);
  }

  // ---------------------------------------------------------------------
  // Swatches
  // ---------------------------------------------------------------------
  function bindSwatches($modal) {
    $modal.on("click", ".swatch-btn", function () {
      const $btn = $(this);
      $modal.find(".swatch-btn").removeClass("swatch-btn--active");
      $btn.addClass("swatch-btn--active");

      const colorName = $btn.data("color");
      $modal.find(".cart-modal__colors-label strong").text(colorName);

      // TODO: load stock/deliveries for the selected color, then re-render rows
      recalcSummary($modal);
    });
  }

  // ---------------------------------------------------------------------
  // Delivery info tooltip
  // Rendered once inside .cart-modal (not inside the table) so the
  // overflow-x wrapper of the table can't clip it.
  // ---------------------------------------------------------------------
  function bindTooltips($modal) {
    const $tip = $(
      '<div class="cart-modal__tooltip" role="tooltip" hidden></div>'
    ).appendTo($modal);

    function show($btn) {
      const d = getRowData($btn.closest(".cart-modal__row-group"));

      $tip.empty();
      $tip.append(
        $('<strong class="cart-modal__tooltip-title"></strong>').text(
          "Dostawa do magazynu dostawcy"
        )
      );

      if (d.deliveries.length) {
        d.deliveries.forEach(function (delivery) {
          $tip.append(
            $('<span class="cart-modal__tooltip-date"></span>').text(
              delivery.date + " · " + delivery.qty + " szt."
            )
          );
        });
      } else {
        $tip.append(
          $('<span class="cart-modal__tooltip-date"></span>').text(
            "Termin kolejnej dostawy nieznany"
          )
        );
      }

      $tip.append(
        $('<p class="cart-modal__tooltip-note"></p>').text(
          "To nie jest termin dostawy do Ciebie."
        )
      );

      $tip.prop("hidden", false);

      const modalRect = $modal[0].getBoundingClientRect();
      const iconRect = $btn[0].getBoundingClientRect();
      const tipWidth = $tip.outerWidth();

      let left = iconRect.right - modalRect.left + 10;
      if (left + tipWidth > modalRect.width) {
        left = iconRect.left - modalRect.left - tipWidth - 10;
      }

      $tip.css({
        left: left,
        top: iconRect.top - modalRect.top - 4,
      });
    }

    function hide() {
      $tip.prop("hidden", true);
    }

    $modal.on("mouseenter focusin", ".info-tip", function () {
      show($(this));
    });
    $modal.on("mouseleave focusout", ".info-tip", hide);
    $modal.find(".cart-modal__table-wrapper").on("scroll", hide);
  }

  function formatPLN(amount) {
    return (
      amount.toLocaleString("pl-PL", {
        minimumFractionDigits: 2,
        maximumFractionDigits: 2,
      }) + " PLN"
    );
  }
});