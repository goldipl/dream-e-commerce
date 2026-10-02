<?php
$cart_modal_info_icon = '<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none" aria-hidden="true"><path d="M7.33325 11.3333H8.66658V7.33331H7.33325V11.3333ZM7.99992 5.99998C8.18881 5.99998 8.34714 5.93609 8.47492 5.80831C8.6027 5.68053 8.66658 5.5222 8.66658 5.33331C8.66658 5.14442 8.6027 4.98609 8.47492 4.85831C8.34714 4.73054 8.18881 4.66665 7.99992 4.66665C7.81103 4.66665 7.6527 4.73054 7.52492 4.85831C7.39714 4.98609 7.33325 5.14442 7.33325 5.33331C7.33325 5.5222 7.39714 5.68053 7.52492 5.80831C7.6527 5.93609 7.81103 5.99998 7.99992 5.99998ZM7.99992 14.6666C7.0777 14.6666 6.21103 14.4916 5.39992 14.1416C4.58881 13.7916 3.88325 13.3166 3.28325 12.7166C2.68325 12.1166 2.20825 11.4111 1.85825 10.6C1.50825 9.78887 1.33325 8.9222 1.33325 7.99998C1.33325 7.07776 1.50825 6.21109 1.85825 5.39998C2.20825 4.58887 2.68325 3.88331 3.28325 3.28331C3.88325 2.68331 4.58881 2.20831 5.39992 1.85831C6.21103 1.50831 7.0777 1.33331 7.99992 1.33331C8.92214 1.33331 9.78881 1.50831 10.5999 1.85831C11.411 2.20831 12.1166 2.68331 12.7166 3.28331C13.3166 3.88331 13.7916 4.58887 14.1416 5.39998C14.4916 6.21109 14.6666 7.07776 14.6666 7.99998C14.6666 8.9222 14.4916 9.78887 14.1416 10.6C13.7916 11.4111 13.3166 12.1166 12.7166 12.7166C12.1166 13.3166 11.411 13.7916 10.5999 14.1416C9.78881 14.4916 8.92214 14.6666 7.99992 14.6666ZM7.99992 13.3333C9.48881 13.3333 10.7499 12.8166 11.7833 11.7833C12.8166 10.75 13.3333 9.48887 13.3333 7.99998C13.3333 6.51109 12.8166 5.24998 11.7833 4.21665C10.7499 3.18331 9.48881 2.66665 7.99992 2.66665C6.51103 2.66665 5.24992 3.18331 4.21659 4.21665C3.18325 5.24998 2.66659 6.51109 2.66659 7.99998C2.66659 9.48887 3.18325 10.75 4.21659 11.7833C5.24992 12.8166 6.51103 13.3333 7.99992 13.3333Z" fill="#001C5E"/></svg>';

$cart_modal_sizes = [
  ['size' => 'S',    'price' => 12.50, 'stock_express' => 20, 'stock_standard' => 0, 'qty' => 22, 'deliveries' => [['date' => '15.10.2026', 'qty' => 5]]],
  ['size' => 'M',    'price' => 12.50, 'stock_express' => 20, 'stock_standard' => 0, 'qty' => 5,  'deliveries' => []],
  ['size' => 'L',    'price' => 12.50, 'stock_express' => 20, 'stock_standard' => 0, 'qty' => 3,  'deliveries' => []],
  ['size' => 'XL',   'price' => 12.50, 'stock_express' => 20, 'stock_standard' => 0, 'qty' => 2,  'deliveries' => []],
  ['size' => 'XXL',  'price' => 12.50, 'stock_express' => 20, 'stock_standard' => 0, 'qty' => 3,  'deliveries' => []],
  ['size' => 'XXXL', 'price' => 12.50, 'stock_express' => 20, 'stock_standard' => 0, 'qty' => 2,  'deliveries' => []],
];

$cart_modal_fmt = function ($value) {
  return number_format($value, 2, ',', "\u{00A0}") . ' PLN';
};

// Initial summary (cart-modal.js recalculates everything on open)
$cart_modal_total = 0;
$cart_modal_qty = 0;
$cart_modal_future_used = 0;
foreach ($cart_modal_sizes as $s) {
  $immediate = $s['stock_express'] + $s['stock_standard'];
  $cart_modal_total += $s['price'] * $s['qty'];
  $cart_modal_qty += $s['qty'];
  $cart_modal_future_used += max(0, $s['qty'] - $immediate);
}
?>
<template id="cart-modal-template">
  <div class="cart-modal">

    <div class="cart-modal__head">
      <div class="cart-modal__thumb">
        <img src="https://www.heavytools.pl/upload_files/products_thumb_big/thumb_big_1776816601_t16024s2501_e.jpg" alt="Męska rozpinana bluza CORE">
      </div>
      <div class="cart-modal__head-info">
        <h3 class="cart-modal__title">Męska rozpinana bluza CORE</h3>
        <span class="cart-modal__sku">ID0638-30</span>
        <div class="cart-modal__colors">
          <span class="cart-modal__colors-label">Wybierz kolor: <strong>Zielony DX</strong></span>
          <div class="cart-modal__swatch-list">
            <button type="button" class="swatch-btn" style="background-color:#ffffff; border:1px solid #cbd5e1;" data-color="Biały" aria-label="Biały"></button>
            <button type="button" class="swatch-btn" style="background-color:#1a365d;" data-color="Navy" aria-label="Navy"></button>
            <button type="button" class="swatch-btn" style="background-color:#000000;" data-color="Czarny" aria-label="Czarny"></button>
            <button type="button" class="swatch-btn" style="background-color:#a0aec0;" data-color="Szary" aria-label="Szary"></button>
            <button type="button" class="swatch-btn" style="background-color:#5c1d24;" data-color="Bordowy" aria-label="Bordowy"></button>
            <button type="button" class="swatch-btn" style="background-color:#3b719f;" data-color="Niebieski" aria-label="Niebieski"></button>
            <button type="button" class="swatch-btn" style="background-color:#556270;" data-color="Ciemnoszary" aria-label="Ciemnoszary"></button>
            <button type="button" class="swatch-btn" style="background-color:#e53e3e;" data-color="Czerwony" aria-label="Czerwony"></button>
            <button type="button" class="swatch-btn" style="background-color:#3182ce;" data-color="Jasnoniebieski" aria-label="Jasnoniebieski"></button>
            <button type="button" class="swatch-btn" style="background-color:#e06d26;" data-color="Pomarańczowy" aria-label="Pomarańczowy"></button>
            <button type="button" class="swatch-btn swatch-btn--active" style="background-color:#38a169;" data-color="Zielony DX" aria-label="Ciemny zielony DX"></button>
            <button type="button" class="swatch-btn" style="background-color:#63b3ed;" data-color="Błękitny" aria-label="Błękitny"></button>
          </div>
        </div>
      </div>
    </div>

    <div class="cart-modal__table-wrapper">
      <table class="cart-modal__table">
        <thead>
          <tr>
            <th class="col-size">Wybierz rozmiar</th>
            <th class="col-num">24h</th>
            <th class="col-num">2-3 dni</th>
            <th class="col-num">Dostawy przyszłe</th>
            <th class="col-price">Cena netto PLN</th>
            <th class="col-total">Łączna wartość netto</th>
            <th class="col-qty">Liczba sztuk</th>
          </tr>
        </thead>

        <?php foreach ($cart_modal_sizes as $s):
          $future = 0;
          foreach ($s['deliveries'] as $delivery) {
            $future += $delivery['qty'];
          }
          $max = $s['stock_express'] + $s['stock_standard'] + $future;
        ?>
        <tbody class="cart-modal__row-group"
               data-size="<?= htmlspecialchars($s['size'], ENT_QUOTES) ?>"
               data-price="<?= $s['price'] ?>"
               data-stock-express="<?= (int) $s['stock_express'] ?>"
               data-stock-standard="<?= (int) $s['stock_standard'] ?>"
               data-deliveries="<?= htmlspecialchars(json_encode($s['deliveries']), ENT_QUOTES) ?>">
          <tr class="cart-modal__row">
            <td class="col-size"><strong><?= htmlspecialchars($s['size']) ?></strong></td>
            <td class="col-num"><?= (int) $s['stock_express'] ?></td>
            <td class="col-num"><?= (int) $s['stock_standard'] ?></td>
            <td class="col-num col-future">
              <span class="col-future__inner">
                <span class="col-future__value"><?= (int) $future ?></span>
                <button type="button" class="info-tip" aria-label="Informacje o dostawie rozmiar <?= htmlspecialchars($s['size']) ?>"><?= $cart_modal_info_icon ?></button>
              </span>
            </td>
            <td class="col-price"><?= number_format($s['price'], 2, ',', "\u{00A0}") ?></td>
            <td class="col-total"><strong class="row-total"><?= $cart_modal_fmt($s['price'] * $s['qty']) ?></strong></td>
            <td class="col-qty">
              <div class="qty-stepper">
                <button type="button" class="qty-stepper__btn qty-stepper__btn--minus" aria-label="Zmniejsz ilość">−</button>
                <input type="number" class="qty-stepper__input" value="<?= (int) $s['qty'] ?>" min="0" max="<?= (int) $max ?>" step="1" aria-label="Ilość sztuk rozmiar <?= htmlspecialchars($s['size']) ?>">
                <button type="button" class="qty-stepper__btn qty-stepper__btn--plus" aria-label="Zwiększ ilość">+</button>
              </div>
            </td>
          </tr>
          <tr class="cart-modal__note-row" hidden>
            <td colspan="7">
              <div class="cart-modal__note-inner" aria-live="polite">
                <span class="cart-modal__note cart-modal__note--info"></span>
                <span class="cart-modal__note cart-modal__note--alert"></span>
              </div>
            </td>
          </tr>
        </tbody>
        <?php endforeach; ?>
      </table>
    </div>

    <div class="cart-modal__footer">
      <div class="cart-modal__selected">
        <span class="cart-modal__selected-label">Aktualnie wybrano:</span>
        <div class="cart-modal__selected-row">
          <div class="cart-modal__selected-swatches">
            <span class="selected-swatch-item" data-color="Zielony DX">
              <span class="selected-swatch-dot" style="background-color:#38a169;"></span>
              <span class="selected-swatch-count"><?= (int) $cart_modal_qty ?></span>
            </span>
            <span class="selected-swatch-item" data-color="Magenta">
              <span class="selected-swatch-dot" style="background-color:#d100d1;"></span>
              <span class="selected-swatch-count">13</span>
            </span>
            <span class="selected-swatch-item" data-color="Czerwony">
              <span class="selected-swatch-dot" style="background-color:#c0392b;"></span>
              <span class="selected-swatch-count">6</span>
            </span>
          </div>
          <span class="cart-modal__selected-note"<?= $cart_modal_future_used > 0 ? '' : ' hidden' ?>>w tym dostawy przyszłe: <?= (int) $cart_modal_future_used ?> szt.</span>
        </div>
      </div>
      <div class="cart-modal__summary">
        <span class="cart-modal__summary-label">Ten kolor netto: <strong class="cart-modal__grand-total"><?= $cart_modal_fmt($cart_modal_total) ?></strong></span>
        <button type="button" class="btn-primary-cta cart-modal__submit">
          <span>Do koszyka</span>
          <svg xmlns="http://www.w3.org/2000/svg" width="23" height="21" viewBox="0 0 23 21" fill="none">
            <path d="M0.500977 0.509909C1.69272 0.510835 3.06839 0.479583 4.24555 0.523557C4.31664 0.996612 4.45832 1.55863 4.57368 2.03123C4.71365 2.61978 4.86142 3.20651 5.01692 3.79122C5.4632 3.76915 6.04472 3.78317 6.49884 3.78305L9.15027 3.78294L17.2833 3.78322L20.0587 3.78289C20.408 3.7828 21.1876 3.80288 21.501 3.76113C21.4115 4.2717 21.2181 4.95015 21.088 5.46618L20.0868 9.29867L19.3754 12.0536C19.2909 12.3756 19.1328 13.104 18.9917 13.3625C18.5581 13.4135 17.9409 13.3961 17.4895 13.3959L15.1406 13.3949L7.35479 13.3948C7.37378 13.4729 7.39171 13.5619 7.40632 13.6409C7.50443 14.1718 7.67187 14.6937 7.76632 15.224C9.38005 15.2111 11.0677 15.3299 12.6846 15.3758L15.6039 15.4477C16.0585 15.4549 16.5015 15.4324 16.9576 15.4561C17.5661 15.5633 18.0123 15.7008 18.4673 16.1435C19.355 17.0073 19.3423 18.5025 18.4609 19.3662C18.0226 19.7953 17.428 20.0307 16.8121 20.0189C16.1566 20.0117 15.5971 19.8001 15.1371 19.3338C14.7106 18.9088 14.4754 18.3312 14.4849 17.7319C14.4928 17.1895 14.7167 16.5521 15.1107 16.1702C14.605 16.1767 14.0859 16.1544 13.5786 16.1455C12.0266 16.116 10.475 16.0636 8.92446 15.9885C8.9768 16.0269 9.02786 16.0669 9.07757 16.1086C10.6224 17.4279 9.64168 19.8903 7.63918 20.0161C7.02228 20.0575 6.41413 19.8537 5.94906 19.4498C5.4955 19.0576 5.22028 18.501 5.18551 17.9054C5.14511 17.2921 5.35328 16.6881 5.76383 16.2274C6.09774 15.8563 6.55187 15.5913 7.05924 15.5623L4.74889 5.91756L4.07878 3.21576C3.91923 2.57893 3.74109 1.92285 3.64167 1.27327C3.10321 1.24202 2.42277 1.26051 1.87849 1.2547C1.53988 1.25109 0.823496 1.23952 0.502433 1.27154L0.500977 0.509909Z" stroke="white"></path>
          </svg>
        </button>
      </div>
    </div>

  </div>
</template>