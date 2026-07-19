<template id="cart-modal-template">
  <div class="cart-modal">

    <div class="cart-modal__head">
      <div class="cart-modal__thumb">
        <img src="https://www.heavytools.pl/upload_files/products_thumb_big/thumb_big_1776816601_t16024s2501_e.jpg" alt="Męska rozpinana bluza CORE">
      </div>
      <div class="cart-modal__head-info">
        <h3 class="cart-modal__title">T-shirt Asher Green Bay</h3>
        <span class="cart-modal__sku">SD0658-30</span>
        <div class="cart-modal__colors">
          <span class="cart-modal__colors-label">Wybierz kolor: <strong>Ciemny zielony DX</strong></span>
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
            <th class="col-num">Dostawa</th>
            <th class="col-price">Cena netto</th>
            <th class="col-total">Łączna wartość netto</th>
            <th class="col-qty">Liczba sztuk</th>
          </tr>
        </thead>
        <tbody>
          <tr data-size="S" data-price="12.50">
            <td class="col-size"><strong>S</strong></td>
            <td class="col-num">20</td>
            <td class="col-num">0</td>
            <td class="col-num">0</td>
            <td class="col-price">12,50</td>
            <td class="col-total"><strong class="row-total">25,00 PLN</strong></td>
            <td class="col-qty">
              <div class="qty-stepper">
                <button type="button" class="qty-stepper__btn qty-stepper__btn--minus" aria-label="Zmniejsz ilość">−</button>
                <input type="number" class="qty-stepper__input" value="2" min="0" step="1" aria-label="Ilość sztuk rozmiar S">
                <button type="button" class="qty-stepper__btn qty-stepper__btn--plus" aria-label="Zwiększ ilość">+</button>
              </div>
            </td>
          </tr>
          <tr data-size="M" data-price="12.50">
            <td class="col-size"><strong>M</strong></td>
            <td class="col-num">20</td>
            <td class="col-num">0</td>
            <td class="col-num">0</td>
            <td class="col-price">12,50</td>
            <td class="col-total"><strong class="row-total">52,00 PLN</strong></td>
            <td class="col-qty">
              <div class="qty-stepper">
                <button type="button" class="qty-stepper__btn qty-stepper__btn--minus" aria-label="Zmniejsz ilość">−</button>
                <input type="number" class="qty-stepper__input" value="5" min="0" step="1" aria-label="Ilość sztuk rozmiar M">
                <button type="button" class="qty-stepper__btn qty-stepper__btn--plus" aria-label="Zwiększ ilość">+</button>
              </div>
            </td>
          </tr>
          <tr data-size="L" data-price="12.50">
            <td class="col-size"><strong>L</strong></td>
            <td class="col-num">20</td>
            <td class="col-num">0</td>
            <td class="col-num">0</td>
            <td class="col-price">12,50</td>
            <td class="col-total"><strong class="row-total">25,00 PLN</strong></td>
            <td class="col-qty">
              <div class="qty-stepper">
                <button type="button" class="qty-stepper__btn qty-stepper__btn--minus" aria-label="Zmniejsz ilość">−</button>
                <input type="number" class="qty-stepper__input" value="3" min="0" step="1" aria-label="Ilość sztuk rozmiar L">
                <button type="button" class="qty-stepper__btn qty-stepper__btn--plus" aria-label="Zwiększ ilość">+</button>
              </div>
            </td>
          </tr>
          <tr data-size="XL" data-price="12.50">
            <td class="col-size"><strong>XL</strong></td>
            <td class="col-num">20</td>
            <td class="col-num">0</td>
            <td class="col-num">0</td>
            <td class="col-price">12,50</td>
            <td class="col-total"><strong class="row-total">56,00 PLN</strong></td>
            <td class="col-qty">
              <div class="qty-stepper">
                <button type="button" class="qty-stepper__btn qty-stepper__btn--minus" aria-label="Zmniejsz ilość">−</button>
                <input type="number" class="qty-stepper__input" value="2" min="0" step="1" aria-label="Ilość sztuk rozmiar XL">
                <button type="button" class="qty-stepper__btn qty-stepper__btn--plus" aria-label="Zwiększ ilość">+</button>
              </div>
            </td>
          </tr>
          <tr data-size="XXL" data-price="12.50">
            <td class="col-size"><strong>XXL</strong></td>
            <td class="col-num">20</td>
            <td class="col-num">0</td>
            <td class="col-num">0</td>
            <td class="col-price">12,50</td>
            <td class="col-total"><strong class="row-total">32,00 PLN</strong></td>
            <td class="col-qty">
              <div class="qty-stepper">
                <button type="button" class="qty-stepper__btn qty-stepper__btn--minus" aria-label="Zmniejsz ilość">−</button>
                <input type="number" class="qty-stepper__input" value="3" min="0" step="1" aria-label="Ilość sztuk rozmiar XXL">
                <button type="button" class="qty-stepper__btn qty-stepper__btn--plus" aria-label="Zwiększ ilość">+</button>
              </div>
            </td>
          </tr>
          <tr data-size="XXXL" data-price="12.50">
            <td class="col-size"><strong>XXXL</strong></td>
            <td class="col-num">20</td>
            <td class="col-num">0</td>
            <td class="col-num">0</td>
            <td class="col-price">12,50</td>
            <td class="col-total"><strong class="row-total">25,00 PLN</strong></td>
            <td class="col-qty">
              <div class="qty-stepper">
                <button type="button" class="qty-stepper__btn qty-stepper__btn--minus" aria-label="Zmniejsz ilość">−</button>
                <input type="number" class="qty-stepper__input" value="2" min="0" step="1" aria-label="Ilość sztuk rozmiar XXXL">
                <button type="button" class="qty-stepper__btn qty-stepper__btn--plus" aria-label="Zwiększ ilość">+</button>
              </div>
            </td>
          </tr>
        </tbody>
      </table>
    </div>

    <div class="cart-modal__footer">
      <div class="cart-modal__selected">
        <span class="cart-modal__selected-label">Aktualnie wybrano:</span>
        <div class="cart-modal__selected-swatches">
          <span class="selected-swatch-item">
            <span class="selected-swatch-dot" style="background-color:#3b719f;"></span>
            <span class="selected-swatch-count">10</span>
          </span>
          <span class="selected-swatch-item">
            <span class="selected-swatch-dot" style="background-color:#e53e3e;"></span>
            <span class="selected-swatch-count">2</span>
          </span>
          <span class="selected-swatch-item">
            <span class="selected-swatch-dot" style="background-color:#a0aec0;"></span>
            <span class="selected-swatch-count">4</span>
          </span>
          <span class="selected-swatch-item">
            <span class="selected-swatch-dot" style="background-color:#e06d26;"></span>
            <span class="selected-swatch-count">1</span>
          </span>
          <span class="selected-swatch-item">
            <span class="selected-swatch-dot" style="background-color:#38a169;"></span>
            <span class="selected-swatch-count">32</span>
          </span>
          <span class="selected-swatch-item">
            <span class="selected-swatch-dot" style="background-color:#63b3ed;"></span>
            <span class="selected-swatch-count">4</span>
          </span>
        </div>
      </div>
      <div class="cart-modal__summary">
        <span class="cart-modal__summary-label">Łączna kwota netto: <strong class="cart-modal__grand-total">2 352,00 PLN</strong></span>
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