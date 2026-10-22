$(function () {
  const $table = $(".cart-table");

  if (!$table.length) return;

  // ---------------------------------------------------------------------
  // Quantity steppers (+ / - change the amount by 1, row total follows)
  // ---------------------------------------------------------------------
  $table.on("click", ".qty-stepper__btn", function () {
    const $btn = $(this);
    const $input = $btn.siblings(".qty-stepper__input");
    const current = parseInt($input.val(), 10) || 0;
    const next = $btn.hasClass("qty-stepper__btn--plus") ? current + 1 : current - 1;

    $input.val(Math.max(0, next)).trigger("change");
  });

  $table.on("input change", ".qty-stepper__input", function (e) {
    const $input = $(this);
    const raw = $input.val();

    // Let the user clear the field while typing; normalize on "change"
    if (e.type === "input" && raw === "") return;

    let qty = parseInt(raw, 10);
    if (isNaN(qty) || qty < 0) qty = 0;
    if (e.type === "change") $input.val(qty);

    renderRow($input.closest(".cart-row"), qty);
  });

  function renderRow($row, qty) {
    const price = parsePLN($row.find(".col-price").text());
    $row.find(".row-total").text(formatPLN(price * qty));
  }

  // ---------------------------------------------------------------------
  // Delivery info tooltip (same look as in the product card cart modal)
  // Rendered once on <body> so the overflow-x table wrapper can't clip it.
  // ---------------------------------------------------------------------
  const $tip = $(
    '<div class="cart-tooltip" role="tooltip" hidden></div>'
  ).appendTo("body");

  function showTooltip($btn) {
    const rawDeliveries = $btn.data("deliveries");
    const deliveries = Array.isArray(rawDeliveries) ? rawDeliveries : [];

    $tip.empty();
    $tip.append(
      $('<strong class="cart-tooltip__title"></strong>').text(
        "Dostawa do magazynu dostawcy"
      )
    );

    if (deliveries.length) {
      deliveries.forEach(function (delivery) {
        $tip.append(
          $('<span class="cart-tooltip__date"></span>').text(
            delivery.date + " · " + delivery.qty + " szt."
          )
        );
      });
    } else {
      $tip.append(
        $('<span class="cart-tooltip__date"></span>').text(
          "Termin kolejnej dostawy nieznany"
        )
      );
    }

    $tip.append(
      $('<p class="cart-tooltip__note"></p>').text(
        "To nie jest termin dostawy do Ciebie."
      )
    );

    $tip.prop("hidden", false);

    const iconRect = $btn[0].getBoundingClientRect();
    const tipWidth = $tip.outerWidth();
    const viewportWidth = document.documentElement.clientWidth;

    let left = iconRect.right + 10;
    if (left + tipWidth > viewportWidth) {
      left = iconRect.left - tipWidth - 10;
    }

    $tip.css({
      left: Math.max(8, left) + window.scrollX,
      top: iconRect.top - 4 + window.scrollY,
    });
  }

  function hideTooltip() {
    $tip.prop("hidden", true);
  }

  $table.on("mouseenter focusin", ".info-tip", function () {
    showTooltip($(this));
  });
  $table.on("mouseleave focusout", ".info-tip", hideTooltip);
  $(".cart-table-wrapper").on("scroll", hideTooltip);

  function parsePLN(text) {
    return parseFloat(text.replace(/\s/g, "").replace(",", ".")) || 0;
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
