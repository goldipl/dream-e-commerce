<h1 class="account-content__title">Moje dane</h1>

<div class="info-grid">

  <!-- DANE UŻYTKOWNIKA -->
  <div class="info-card">
    <div class="info-card__header">Dane użytkownika</div>
    <div class="info-card__body">
      <div class="info-card__row">
        <div class="info-card__field">
          <span class="info-card__label">Imię i nazwisko</span>
          <span class="info-card__value">Jan Kowalski</span>
        </div>
      </div>
      <div class="info-card__row">
        <div class="info-card__field">
          <span class="info-card__label">Adres e-mail (login)</span>
          <span class="info-card__value">janko@koszulki.com</span>
        </div>
      </div>
      <div class="info-card__row">
        <div class="info-card__field">
          <span class="info-card__label">Telefon</span>
          <span class="info-card__value">+48 666 777 666</span>
        </div>
      </div>
    </div>
  </div>

  <!-- DANE FIRMY -->
  <div class="info-card">
    <div class="info-card__header">Dane firmy</div>
    <div class="info-card__body">
      <div class="info-card__row">
        <div class="info-card__field">
          <span class="info-card__label">Nazwa firmy</span>
          <span class="info-card__value">Koszulki S.A.</span>
        </div>
      </div>
      <div class="info-card__row">
        <div class="info-card__field">
          <span class="info-card__label">Adres firmy</span>
          <span class="info-card__value">al. Krakowska 13, 05-300 Wrocławek</span>
        </div>
      </div>
      <div class="info-card__row">
        <div class="info-card__field">
          <span class="info-card__label">NIP</span>
          <span class="info-card__value">7991119988</span>
        </div>
        <div class="info-card__field">
          <span class="info-card__label">Numer klienta Dreamtex</span>
          <span class="info-card__value">677770</span>
        </div>
      </div>
      <a href="./zgloszenie-zmiany-danych.php" class="info-card__link">Zgłoszenie zmiany w danych firmy</a>
    </div>
  </div>

  <!-- WARUNKI WSPÓŁPRACY -->
  <div class="info-card">
    <div class="info-card__header">Warunki współpracy</div>
    <div class="info-card__body">
      <div class="info-card__row">
        <div class="info-card__field">
          <span class="info-card__label">Limit kredytu</span>
          <span class="info-card__value">150 000,00 PLN</span>
        </div>
        <div class="info-card__field">
          <span class="info-card__label">Warunki płatności</span>
          <span class="info-card__value">Płatność odroczona: 15 dni</span>
        </div>
      </div>
      <a href="./my-billing.php" class="info-card__link">Przejdź do rozliczeń</a>
    </div>
  </div>

  <!-- TWÓJ OPIEKUN -->
  <div class="info-card">
    <div class="info-card__header">Twój opiekun w Dreamtex</div>
    <div class="info-card__body">
      <div class="advisor">
        <div class="advisor__avatar">
          <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
            <circle cx="12" cy="8" r="3.5" stroke="#001C5E" stroke-opacity="0.4" stroke-width="1.5"/>
            <path d="M4.5 19.5C5.9 16.3 8.6 14.5 12 14.5C15.4 14.5 18.1 16.3 19.5 19.5" stroke="#001C5E" stroke-opacity="0.4" stroke-width="1.5" stroke-linecap="round"/>
          </svg>
        </div>
        <div class="advisor__info">
          <p class="advisor__name">Tomasz Atomek</p>
          <div class="advisor__contact">
            <a href="mailto:atomek@dreamtex.pl">atomek@dreamtex.pl</a>
            <a href="tel:+4855566677">+48 55566677</a>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>

<!-- DOSTAWA I POWIADOMIENIA -->
<div class="info-card">
  <div class="info-card__header">Dostawa i powiadomienia</div>
  <div class="info-card__body">

    <form id="delivery-prefs-form">
      <div class="info-card__delivery-row">
        <div class="info-card__field">
          <span class="info-card__label">Domyślny sposób dostawy</span>

          <span class="info-card__value" id="delivery-method-view">Kurier DHL</span>

          <div class="info-card__delivery-edit" id="delivery-method-edit" hidden>
            <select class="select-field" id="delivery-method-select" name="delivery_method">
              <option value="kurier-dhl" selected>Kurier DHL</option>
              <option value="kurier-inpost">Kurier InPost</option>
              <option value="paczkomat">Paczkomat</option>
              <option value="odbior-osobisty">Odbiór osobisty</option>
            </select>
          </div>
        </div>

        <div class="info-card__delivery-actions">
          <button type="button" class="btn" id="delivery-edit-btn">Edytuj</button>
          <button type="submit" class="btn btn--filled" id="delivery-confirm-btn" hidden>Zatwierdź</button>
          <button type="button" class="btn" id="delivery-cancel-btn" hidden>Anuluj</button>
        </div>
      </div>

      <div class="info-card__checkboxes">
        <label class="checkbox-field">
          <input type="checkbox" name="notify_status" checked>
          <span class="checkbox-field__checkmark"></span>
          <span class="checkbox-field__label">Chcę otrzymywać e-maile o zmianie statusu zamówienia.</span>
        </label>
        <label class="checkbox-field">
          <input type="checkbox" name="notify_marketing">
          <span class="checkbox-field__checkmark"></span>
          <span class="checkbox-field__label">Chcę otrzymywać na podany adres e-mail informacje handlowe od Dreamtex. <a href="#" class="info-card__inline-link">Pokaż więcej</a></span>
        </label>
      </div>

      <p class="info-card__note">Regulamin sprzedaży zaakceptowany podczas rejestracji konta.</p>
      <a href="./regulamin.php" class="info-card__link">Przeczytaj regulamin</a>

      <div class="info-card__footer-actions">
        <button type="submit" class="btn btn--filled">Zapisz zmiany</button>
      </div>
    </form>

  </div>
</div>

<script>
  (function () {
    var editBtn = document.getElementById('delivery-edit-btn');
    var confirmBtn = document.getElementById('delivery-confirm-btn');
    var cancelBtn = document.getElementById('delivery-cancel-btn');
    var view = document.getElementById('delivery-method-view');
    var edit = document.getElementById('delivery-method-edit');

    if (!editBtn || !confirmBtn || !cancelBtn || !view || !edit) {
      return;
    }

    function enterEditMode() {
      view.hidden = true;
      edit.hidden = false;
      editBtn.hidden = true;
      confirmBtn.hidden = false;
      cancelBtn.hidden = false;
    }

    function exitEditMode() {
      view.hidden = false;
      edit.hidden = true;
      editBtn.hidden = false;
      confirmBtn.hidden = true;
      cancelBtn.hidden = true;
    }

    editBtn.addEventListener('click', enterEditMode);
    cancelBtn.addEventListener('click', exitEditMode);

    confirmBtn.addEventListener('click', function (e) {
      e.preventDefault();
      var select = document.getElementById('delivery-method-select');
      view.textContent = select.options[select.selectedIndex].text;
      exitEditMode();
    });
  })();
</script>
