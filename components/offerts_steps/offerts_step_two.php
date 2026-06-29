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
            <h1 class="summary-table__title">
              Nazwa oferty lorem ipsum dolor sit amet
            </h1>
          </td>
          <td>Oferta</td>
          <td><span class="status-badge">Wysłana</span></td>
          <td>PO</td>
          <td>Nazwa kontrahenta</td>
          <td>1.04.2026</td>
          <td><span class="summary-table__price">1 000,00</span></td>
        </tr>
      </tbody>

    </table>
  </div>

  <!-- ================= NAV ================= -->
  <div class="nav-tabs">
    <span class="nav-tabs__item">1. Produkty</span>
    <span class="nav-tabs__item nav-tabs__item--active">2. Znakowanie</span>
    <span class="nav-tabs__item">3. Ustal ceny</span>
    <span class="nav-tabs__item">4. Opis i ustawienia</span>
    <span class="nav-tabs__item">5. Nagłówek i warunki</span>
  </div>

  <!-- ================= WORKSPACE ================= -->
  <main class="workspace-area">

    <div class="table-scroll">
      <table class="marking-table">

        <thead>
          <tr>
            <th>Lp.</th>
            <th>Produkt</th>
            <th>Liczba szt.</th>
            <th>Opcja</th>
            <th></th>
          </tr>
        </thead>

        <tbody>

          <!-- PRODUCT 1 (EXPANDED) -->
          <tr class="is-expanded">
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

            <td>
              <label class="checkbox-field">
                <input type="checkbox" checked>
                <span class="checkbox-field__checkmark"></span>
                <span class="checkbox-field__label">Ze znakowaniem</span>
              </label>
            </td>

            <td class="col-actions">
              <button class="icon-btn"><i class="fa-regular fa-copy"></i></button>
              <button class="icon-btn"><i class="fa-regular fa-trash-can"></i></button>
            </td>
          </tr>

          <!-- LOGOTYPE PANEL (FULL ROW SPAN) -->
          <tr class="logotype-wrapper">
            <td colspan="5">

              <div class="logotype-panel">

                <div class="logotype-panel__header">
                  <div>Nazwa logotypu</div>
                  <div>Sposób</div>
                  <div>L. kolorów</div>
                  <div>Rozmiar (cm)</div>
                  <div>Miejsce</div>
                  <div>Plik</div>
                  <div>Uwagi</div>
                  <div></div>
                </div>

                <!-- ROW 1 -->
                <div class="logotype-panel__row">
                  <div><input class="input-box" type="text" value="Przód logo klubu"></div>
                  <div>
                    <select class="select-box">
                      <option>Haft</option>
                      <option>Sitodruk</option>
                      <option>DTF</option>
                    </select>
                  </div>
                  <div>
                    <select class="select-box select-box--sm">
                      <option>3</option>
                    </select>
                  </div>
                  <div>
                    <select class="select-box select-box--sm">
                      <option>10x5</option>
                    </select>
                  </div>
                  <div>
                    <select class="select-box">
                      <option>Lewa pierś</option>
                    </select>
                  </div>
                  <div><span class="file-name">logo.jpg</span></div>
                  <div><input class="input-box" type="text" value="Czerwony"></div>
                  <div class="logotype-panel__actions">
                    <button class="btn btn--sm">Zmień plik</button>
                  </div>
                </div>

                <!-- COST -->
                <div class="logotype-panel__cost-row">
                  <span>Koszt: <strong>10,00 PLN</strong></span>
                  <span>Szt.: <strong>150,00 PLN</strong></span>
                </div>

                <!-- ROW 2 -->
                <div class="logotype-panel__row">
                  <div><input class="input-box" type="text" value="Sponsor"></div>
                  <div>
                    <select class="select-box">
                      <option>DTF</option>
                    </select>
                  </div>
                  <div><select class="select-box select-box--sm"><option>-</option></select></div>
                  <div><select class="select-box select-box--sm"><option>5x5</option></select></div>
                  <div><select class="select-box"><option>Prawa pierś</option></select></div>
                  <div><span class="file-missing">Brak pliku</span></div>
                  <div><input class="input-box" type="text" value="Pantone 485"></div>
                  <div class="logotype-panel__actions">
                    <button class="btn btn--primary btn--sm">Dodaj plik</button>
                  </div>
                </div>

                <!-- SUMMARY -->
                <div class="logotype-panel__summary">
                  <span>Suma kosztów: <strong>360,00 PLN</strong></span>
                  <button class="btn btn--primary">Nowy logotyp +</button>
                </div>

                <!-- TECH -->
                <div class="tech-requirements">
                  <label class="checkbox-field">
                    <input type="checkbox" checked>
                    <span class="checkbox-field__checkmark"></span>
                    <span class="checkbox-field__label checkbox-field__label--blue">
                      Wymagania techniczne
                    </span>
                  </label>

                  <div class="tech-requirements__content">
                    <p>Pliki produkcyjne do 5 maja 2026</p>
                  </div>
                </div>

              </div>

            </td>
          </tr>

          <!-- PRODUCT 2 -->
          <tr>
            <td class="text-bold">2.</td>
            <td>
              <div class="media-object">
                <div class="media-object__thumb">
                  <img src="https://www.heavytools.pl/upload_files/products_thumb_big/thumb_big_1776816601_t16024s2501_e.jpg" alt="">
                </div>
                <div class="media-object__content">
                  <div class="media-object__title">Kamizelka odblaskowa</div>
                  <div class="media-object__meta">9288808</div>
                </div>
              </div>
            </td>
            <td><input class="input-box" type="text" value="15"></td>
            <td>
              <label class="checkbox-field">
                <input type="checkbox">
                <span class="checkbox-field__checkmark"></span>
                <span class="checkbox-field__label">Ze znakowaniem</span>
              </label>
            </td>
            <td class="col-actions">
              <button class="icon-btn"><i class="fa-regular fa-copy"></i></button>
              <button class="icon-btn"><i class="fa-regular fa-trash-can"></i></button>
            </td>
          </tr>

        </tbody>

      </table>
    </div>

    <!-- FOOTER -->
    <footer class="summary-footer summary-footer--simple">
      <div class="bulk-item">
        <span class="bulk-item__label">Liczba sztuk</span>
        <div class="bulk-item__widget">
          <input class="bulk-item__input" value="10">
          <button class="bulk-item__action">Zastosuj</button>
        </div>
      </div>

      <div class="summary-footer__total">
        <span>Suma:</span>
        <strong>1 130,30 PLN</strong>
      </div>
    </footer>

  </main>
</div>