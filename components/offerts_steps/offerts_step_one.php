<div class="offer-container">
  <header class="offer-header">
    <div class="offer-header__grid">
      <div class="offer-header__field">
        <span class="offer-header__label">Nazwa</span>
        <h1 class="offer-header__title">Nazwa oferty lorem ipsum dolor sit amet</h1>
      </div>
      <div class="offer-header__field">
        <span class="offer-header__label">Typ</span>
        <span class="offer-header__value">Oferta</span>
      </div>
      <div class="offer-header__field">
        <span class="offer-header__label">Status</span>
        <span class="offer-badge offer-badge--sent">Wysłana</span>
      </div>
      <div class="offer-header__field">
        <span class="offer-header__label">Utworzył</span>
        <span class="offer-header__value">PO</span>
      </div>
      <div class="offer-header__field">
        <span class="offer-header__label">Kontrahent</span>
        <span class="offer-header__value">Nazwa kontrahenta</span>
      </div>
      <div class="offer-header__field">
        <span class="offer-header__label">Utworzona</span>
        <span class="offer-header__value">1.04.2026</span>
      </div>
      <div class="offer-header__field offer-header__field--right">
        <span class="offer-header__label">Wartość PLN</span>
        <span class="offer-header__price">1 000,00</span>
      </div>
    </div>
  </header>

  <nav class="offer-tabs">
    <button class="offer-tabs__item offer-tabs__item--active">1. Produkty</button>
    <button class="offer-tabs__item">2. Znakowanie</button>
    <button class="offer-tabs__item">3. Ustal ceny</button>
    <button class="offer-tabs__item">4. Opis i ustawienia</button>
    <button class="offer-tabs__item">5. Nagłówek i warunki</button>
  </nav>

  <main class="product-manager">
    <div class="product-table">
      <div class="product-table__header">
        <div class="product-table__col col-lp">Lp.</div>
        <div class="product-table__col col-product">Produkt</div>
        <div class="product-table__col col-qty">Liczba szt.</div>
        <div class="product-table__col col-price">Cena zakupu PLN</div>
        <div class="product-table__col col-discount">Rabat dodatkowy</div>
        <div class="product-table__col col-final">Cena po d. rabacie PLN</div>
        <div class="product-table__col col-total">Wartość netto PLN</div>
        <div class="product-table__col col-actions"></div>
      </div>

      <div class="product-table__row product-table__row--focused">
        <div class="product-table__col col-lp">1.</div>
        <div class="product-table__col col-product">
          <div class="product-card">
            <div class="product-card__img-wrapper">
              <img src="https://www.heavytools.pl/upload_files/products_thumb_big/thumb_big_1776816601_t16024s2501_e.jpg" alt="T-shirt męski" class="product-card__img">
            </div>
            <div class="product-card__info">
              <h4 class="product-card__name">T-shirt męski 141g/m2</h4>
              <span class="product-card__sku">150090006</span>
            </div>
          </div>
        </div>
        <div class="product-table__col col-qty">
          <input type="number" class="form-input form-input--interactive" value="50">
        </div>
        <div class="product-table__col col-price">12,15</div>
        <div class="product-table__col col-discount">
          <div class="input-suffix-wrapper">
            <input type="text" class="form-input" value="18%">
          </div>
        </div>
        <div class="product-table__col col-final">
          <input type="text" class="form-input" value="9,96" readonly>
        </div>
        <div class="product-table__col col-total font-weight-bold">498,15</div>
        <div class="product-table__col col-actions">
          <button class="action-btn" title="Kopiuj" aria-label="Kopiuj"><i class="icon-copy">🗐</i></button>
          <button class="action-btn action-btn--danger" title="Usuń" aria-label="Usuń"><i class="icon-trash">🗑</i></button>
        </div>
      </div>

      <div class="product-table__row">
        <div class="product-table__col col-lp">2.</div>
        <div class="product-table__col col-product">
          <div class="product-card">
            <div class="product-card__img-wrapper">
              <img src="https://www.heavytools.pl/upload_files/products_thumb_big/thumb_big_1776816601_t16024s2501_e.jpg" alt="Kamizelka" class="product-card__img">
            </div>
            <div class="product-card__info">
              <h4 class="product-card__name">Kamizelka odblaskowa dla dzieci</h4>
              <span class="product-card__sku">9288808</span>
            </div>
          </div>
        </div>
        <div class="product-table__col col-qty">
          <input type="number" class="form-input" value="15">
        </div>
        <div class="product-table__col col-price">15,00</div>
        <div class="product-table__col col-discount">
          <input type="text" class="form-input" value="5%">
        </div>
        <div class="product-table__col col-final">
          <input type="text" class="form-input" value="14,25" readonly>
        </div>
        <div class="product-table__col col-total font-weight-bold">213,75</div>
        <div class="product-table__col col-actions">
          <button class="action-btn" aria-label="Kopiuj"><i class="icon-copy">🗐</i></button>
          <button class="action-btn action-btn--danger" aria-label="Usuń"><i class="icon-trash">🗑</i></button>
        </div>
      </div>
    </div>

    <footer class="product-footer">
      <div class="product-footer__bulk-actions">
        <div class="bulk-control">
          <span class="bulk-control__label">Liczba szt.</span>
          <div class="bulk-control__field">
            <input type="number" class="form-input" value="10">
            <button class="bulk-control__btn">Zastosuj do wszystkich</button>
          </div>
        </div>
        <div class="bulk-control">
          <span class="bulk-control__label">Rabat dodatkowy</span>
          <div class="bulk-control__field">
            <input type="text" class="form-input" value="7%">
            <button class="bulk-control__btn">Zastosuj do wszystkich</button>
          </div>
        </div>
      </div>

      <div class="product-footer__summary">
        <span class="product-footer__total-label">Suma:</span>
        <span class="product-footer__total-value">1 130,30 PLN</span>
      </div>
    </footer>

    <div class="product-actions-bar">
      <button class="btn btn--primary">Dodaj produkt +</button>
      <button class="btn btn--outline-primary">Znakowanie &rarr;</button>
    </div>
  </main>
</div>