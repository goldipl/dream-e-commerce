/**
 * Cart configuration modal
 * Opens a bootbox dialog (built on Bootstrap 5 .modal) using the
 * markup from #cart-modal-template, then wires up steppers,
 * live row/grand totals, and color-swatch selection.
 *
 * Append to ./js/script.js
 */
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
      recalcGrandTotal($modal);

      $modal.find(".cart-modal__submit").on("click", function () {
        // TODO: hook into actual add-to-cart / AJAX submit logic
        dialog.modal("hide");
      });
    });
  }

  function bindSteppers($modal) {
    $modal.on("click", ".qty-stepper__btn", function () {
      const $btn = $(this);
      const $row = $btn.closest("tr");
      const $input = $row.find(".qty-stepper__input");
      let value = parseInt($input.val(), 10) || 0;

      value = $btn.hasClass("qty-stepper__btn--plus")
        ? value + 1
        : Math.max(0, value - 1);

      $input.val(value);
      updateRowTotal($row);
      recalcGrandTotal($modal);
    });

    $modal.on("input change", ".qty-stepper__input", function () {
      const $input = $(this);
      let value = parseInt($input.val(), 10);
      if (isNaN(value) || value < 0) value = 0;
      $input.val(value);

      const $row = $input.closest("tr");
      updateRowTotal($row);
      recalcGrandTotal($modal);
    });
  }

  function updateRowTotal($row) {
    const price = parseFloat($row.data("price")) || 0;
    const qty = parseInt($row.find(".qty-stepper__input").val(), 10) || 0;
    const total = price * qty;

    $row.find(".row-total").text(formatPLN(total));
  }

  function recalcGrandTotal($modal) {
    let grandTotal = 0;

    $modal.find("tbody tr").each(function () {
      const price = parseFloat($(this).data("price")) || 0;
      const qty = parseInt($(this).find(".qty-stepper__input").val(), 10) || 0;
      grandTotal += price * qty;
    });

    $modal.find(".cart-modal__grand-total").text(formatPLN(grandTotal));
  }

  function bindSwatches($modal) {
    $modal.on("click", ".swatch-btn", function () {
      const $btn = $(this);
      $modal.find(".swatch-btn").removeClass("swatch-btn--active");
      $btn.addClass("swatch-btn--active");

      const colorName = $btn.data("color");
      $modal
        .find(".cart-modal__colors-label strong")
        .text(colorName);
    });
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