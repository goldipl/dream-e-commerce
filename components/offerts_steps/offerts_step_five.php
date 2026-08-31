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
            <h1 class="summary-table__title">Nazwa oferty lorem ipsum dolor sit amet</h1>
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
    <span class="nav-tabs__item">1. Produkty</span>
    <span class="nav-tabs__item">2. Znakowanie</span>
    <span class="nav-tabs__item">3. Ustal ceny</span>
    <span class="nav-tabs__item">4. Opis i ustawienia</span>
    <span class="nav-tabs__item nav-tabs__item--active">5. Nagłówek i warunki</span>
  </div>
  <!-- ================= WORKSPACE ================= -->
  <main class="workspace-area">
    <div class="header-terms-card">

      <!-- ================= STATUS BAR ================= -->
      <div class="status-bar">
        <span class="status-bar__label">Wybierz status</span>
        <div class="status-bar__controls">
          <select class="select-field">
            <option>Wysłana</option>
            <option selected>Edycja</option>
            <option>Zatwierdzona</option>
            <option>Odrzucona</option>
            <option>Gotowa</option>
          </select>
          <button class="btn btn--filled">Aktualizuj status</button>
        </div>
      </div>

      <!-- ================= SECTION 1 : NAZWA / KONTRAHENT ================= -->
      <div class="form-section">
        <div class="form-row">
          <div class="form-field">
            <label class="field-label">Nazwa oferty/propozycji</label>
            <input class="input-field" type="text" value="Lorem ipsum dolor sit amet">
          </div>
        </div>
        <div class="form-row">
          <div class="form-field">
            <label class="field-label">Kontrahent (firma)</label>
            <input class="input-field" type="text">
          </div>
          <div class="form-field">
            <label class="field-label">Kontrahent (osoba)</label>
            <input class="input-field" type="text">
          </div>
        </div>
        <div class="form-row form-row--tight">
          <a href="#" class="link-inline">Wybierz kontrahenta z bazy</a>
        </div>
      </div>

      <!-- ================= SECTION 2 : REALIZACJA / DOSTAWA ================= -->
      <div class="form-section">
        <div class="form-row">
          <div class="form-field">
            <label class="field-label">Termin realizacji</label>
            <select class="select-field">
              <option value=""></option>
              <option>7 dni roboczych</option>
              <option>14 dni roboczych</option>
              <option>21 dni roboczych</option>
            </select>
          </div>
          <div class="form-field">
            <label class="field-label">Czas realizacji (dni)</label>
            <input class="input-field input-field--highlight" type="text" value="5 dni roboczych">
          </div>
          <div class="form-field form-field--wide">
            <label class="field-label">Uwagi do czasu realizacji</label>
            <input class="input-field" type="text">
          </div>
        </div>
        <div class="form-row">
          <div class="form-field">
            <label class="field-label">Sposób dostawy</label>
            <select class="select-field">
              <option selected>Kurier</option>
              <option>Odbiór osobisty</option>
              <option>Paczkomat</option>
              <option>Poczta</option>
            </select>
          </div>
          <div class="form-field">
            <label class="field-label">Koszt dostawy</label>
            <input class="input-field" type="text" value="0,00">
          </div>
          <div class="form-field form-field--wide form-field--checkbox">
            <label class="checkbox-field">
              <input type="checkbox" checked>
              <span class="checkbox-field__checkmark"></span>
              <span class="checkbox-field__label checkbox-field__label--blue">Cena zawiera koszt transportu</span>
            </label>
          </div>
        </div>
        <div class="form-row">
          <div class="form-field">
            <label class="field-label">Sposób pakowania</label>
            <select class="select-field">
              <option value=""></option>
              <option>Pakowanie zbiorcze</option>
              <option>Pakowanie indywidualne</option>
            </select>
          </div>
        </div>
      </div>

      <!-- ================= SECTION 3 : WARUNKI / TERMINY / HANDLOWIEC ================= -->
      <div class="form-section">
        <div class="form-row">
          <div class="form-field form-field--wide">
            <label class="field-label">Warunki płatności</label>
            <input class="input-field" type="text">
          </div>
          <div class="form-field">
            <label class="field-label">Wartość oferty PLN</label>
            <input class="input-field input-field--highlight" type="text" value="2 500,00">
          </div>
        </div>
        <div class="form-row">
          <div class="form-field">
            <label class="field-label">Termin ważności oferty</label>
            <input
              class="input-field"
              type="date"
              value="2026-04-30"
            >
          </div>

          <div class="form-field">
            <label class="field-label">Data oferty</label>
            <input
              class="input-field"
              type="date"
              value="2026-04-01"
            >
          </div>
        </div>
        <div class="form-row">
          <div class="form-field">
            <label class="field-label">Handlowiec (autor oferty)</label>
            <input class="input-field" type="text">
          </div>
          <div class="form-field">
            <label class="field-label">Handlowiec (kontakt)</label>
            <input class="input-field" type="text">
          </div>
        </div>
        <div class="form-row">
          <div class="form-field">
            <label class="field-label">Uwagi do oferty</label>
            <textarea class="textarea-field textarea-field--tall" rows="5"></textarea>
          </div>
        </div>
      </div>

    </div>

    <!-- ================= NAV BUTTONS ================= -->
    <div class="page-nav">
      <button class="btn btn--nav btn--nav-prev">
        <i class="fa-solid fa-arrow-left"></i> Opis i ustawienia
      </button>
      <div class="page-nav__actions">
        <button class="btn">Wyślij do mnie PDF</button>
        <button class="btn">Pobierz PDF</button>
        <button class="btn btn--filled">Zapisz ofertę</button>
      </div>
    </div>
  </main>
</div>
