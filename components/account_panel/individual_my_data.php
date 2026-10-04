<h1 class="account-content__title">Moje dane</h1>

<form id="profile-form">

  <div class="info-grid">

    <!-- DANE UŻYTKOWNIKA -->
    <div class="info-card">
      <div class="info-card__header">Dane użytkownika</div>
      <div class="info-card__body">
        <div class="info-card__row">
          <div class="form-field">
            <label class="field-label">Imię i nazwisko</label>
            <input class="input-field" type="text" name="full_name" value="Albert Kamus" required>
          </div>
        </div>
        <div class="info-card__row">
          <div class="info-card__field">
            <span class="info-card__label">Adres e-mail (login)</span>
            <span class="info-card__value">janko@koszulki.com</span>
          </div>
        </div>
        <div class="info-card__row">
          <div class="form-field">
            <label class="field-label">Telefon</label>
            <input class="input-field" type="text" name="phone" value="+48 666 777 666" required>
          </div>
        </div>
      </div>
    </div>

    <!-- DOMYŚLNY ADRES DOSTAWY -->
    <div class="info-card">
      <div class="info-card__header">Domyślny adres dostawy</div>
      <div class="info-card__body">
        <div class="info-card__row">
          <div class="info-card__field">
            <span class="info-card__label">Odbiorca</span>
            <span class="info-card__value">Albert Kamus</span>
          </div>
        </div>
        <div class="info-card__row">
          <div class="info-card__field">
            <span class="info-card__label">Adres</span>
            <span class="info-card__value">Andriollego 18, 05-400 Otwock</span>
          </div>
        </div>
        <a href="./individual-my-addresses.php" class="info-card__link">Zarządzaj adresami</a>
      </div>
    </div>

  </div>

  <!-- DOSTAWA I POWIADOMIENIA -->
  <div class="info-card">
    <div class="info-card__header">Dostawa i powiadomienia</div>
    <div class="info-card__body">

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
          <button type="button" class="btn btn--filled" id="delivery-confirm-btn" hidden>Zatwierdź</button>
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
    </div>
  </div>

</form>

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

    confirmBtn.addEventListener('click', function () {
      var select = document.getElementById('delivery-method-select');
      view.textContent = select.options[select.selectedIndex].text;
      exitEditMode();
    });
  })();
</script>
