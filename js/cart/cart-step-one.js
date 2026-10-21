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
