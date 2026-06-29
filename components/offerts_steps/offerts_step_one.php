<div class="offer-view">
  <!-- ================= TOP SUMMARY ================= -->
  <div class="table-scroll">
    <table class="summary-table">
      <thead>
        <tr>
          <th>Nazwa</th>
          <th>Typ</th>
          <th>Status</th>
          <th>Utworzył</th>
          <th>Kontrahent</th>
          <th>Utworzona</th>
          <th>Wartość PLN</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>
            <h1 class="summary-table__title"> Nazwa oferty lorem ipsum dolor sit amet </h1>
          </td>
          <td>Oferta</td>
          <td>
            <span class="status-badge">Wysłana</span>
          </td>
          <td>PO</td>
          <td>Nazwa kontrahenta</td>
          <td>1.04.2026</td>
          <td>
            <span class="summary-table__price">1 000,00</span>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
  <!-- ================= NAV TABS ================= -->
  <div class="nav-tabs">
    <span class="nav-tabs__item nav-tabs__item--active">1. Produkty</span>
    <span class="nav-tabs__item">2. Znakowanie</span>
    <span class="nav-tabs__item">3. Ustal ceny</span>
    <span class="nav-tabs__item">4. Opis i ustawienia</span>
    <span class="nav-tabs__item">5. Nagłówek i warunki</span>
  </div>
  <!-- ================= WORKSPACE ================= -->
  <main class="workspace-area">
    <div class="table-scroll">
      <table class="data-table">
        <thead>
          <tr>
            <th>Lp.</th>
            <th>Produkt</th>
            <th>Liczba szt.</th>
            <th>Cena zakupu PLN</th>
            <th>Rabat dodatkowy</th>
            <th>Cena po d. rabacie PLN</th>
            <th>Wartość netto PLN</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          <!-- ROW 1 -->
          <tr>
            <td class="text-bold">1.</td>
            <td>
              <div class="media-object">
                <div class="media-object__thumb">
                  <img src="https://www.heavytools.pl/upload_files/products_thumb_big/thumb_big_1776816601_t16024s2501_e.jpg" alt="">
                </div>
                <div class="media-object__content">
                  <div class="media-object__title">T-shirt męski 141g/m2</div>
                  <div class="media-object__meta">150090006</div>
                </div>
              </div>
            </td>
            <td>
              <div class="input-box">
                <input type="text" value="50">
              </div>
            </td>
            <td>12,15</td>
            <td>
              <div class="input-box">
                <input type="text" value="18%">
              </div>
            </td>
            <td>
              <div class="input-box">
                <input type="text" value="9,96" readonly>
              </div>
            </td>
            <td class="text-bold">498,15</td>
            <td class="col-actions">
              <button class="icon-btn">
                <span class="tooltip">Kopiuj</span>
                <i class="fa-regular fa-copy"></i>
              </button>
              <button class="icon-btn">
                <span class="tooltip">Usuń</span>
                <i class="fa-regular fa-trash-can"></i>
              </button>
            </td>
          </tr>
          <!-- ROW 2 -->
          <tr>
            <td class="text-bold">2.</td>
            <td>
              <div class="media-object">
                <div class="media-object__thumb">
                  <img src="https://www.heavytools.pl/upload_files/products_thumb_big/thumb_big_1776816601_t16024s2501_e.jpg" alt="">
                </div>
                <div class="media-object__content">
                  <div class="media-object__title">Kamizelka odblaskowa dla dzieci</div>
                  <div class="media-object__meta">9288808</div>
                </div>
              </div>
            </td>
            <td>
              <div class="input-box">
                <input type="text" value="15">
              </div>
            </td>
            <td>15,00</td>
            <td>
              <div class="input-box">
                <input type="text" value="5%">
              </div>
            </td>
            <td>
              <div class="input-box">
                <input type="text" value="14,25" readonly>
              </div>
            </td>
            <td class="text-bold">213,75</td>
            <td class="col-actions">
              <button class="icon-btn">
                <span class="tooltip">Kopiuj</span>
                <i class="fa-regular fa-copy"></i>
              </button>
              <button class="icon-btn">
                <span class="tooltip">Usuń</span>
                <i class="fa-regular fa-trash-can"></i>
              </button>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
    <!-- ================= SUMMARY FOOTER ================= -->
    <div class="summary-footer">
      <div class="bulk-item bulk-item--qty">
        <span class="bulk-item__label">Liczba sztuk.</span>
        <div class="bulk-item__widget">
          <input type="text" value="10" class="bulk-item__input">
          <button class="bulk-item__action">Zastosuj <br>do wszystkich </button>
        </div>
      </div>
      <div class="bulk-item bulk-item--discount">
        <span class="bulk-item__label">Rabat dodatkowy</span>
        <div class="bulk-item__widget">
          <input type="text" value="7%" class="bulk-item__input">
          <button class="bulk-item__action">Zastosuj <br>do wszystkich </button>
        </div>
      </div>
      <div class="summary-footer__total">
        <span class="summary-footer__total-label">Suma:</span>
        <span class="summary-footer__total-sum">1 130,30 PLN</span>
      </div>
    </div>
    <!-- ================= ACTION ROW ================= -->
    <div class="action-row">
      <button class="action-row__btn action-row__btn--solid">Dodaj produkt +</button>
      <button class="action-row__btn action-row__btn--outline">Znakowanie →</button>
    </div>
  </main>
</div>