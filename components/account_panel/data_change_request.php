<h1 class="account-content__title">Zgłoszenie zmiany danych firmy i użytkownika</h1>

<div class="change-request__meta">
  <a href="./my-data.php" class="account-back-link">Wróć do moich danych</a>
  <span class="change-request__client-no">Numer klienta Dreamtex: 677770</span>
</div>

<div class="change-request__notice">
  Formularz zawiera obecne dane. Zmień tylko te, których dotyczy zgłoszenie. Zmiany, w tym nowy e-mail do logowania, zostaną wprowadzone po zatwierdzeniu przez Dreamtex.
</div>

<form id="data-change-request-form" class="change-request">
  <div class="change-request__grid">

    <!-- PROPONOWANE DANE UŻYTKOWNIKA -->
    <fieldset class="change-request__section">
      <legend class="change-request__header">Proponowane dane użytkownika</legend>
      <div class="change-request__body">
        <div class="form-row">
          <div class="form-field">
            <label class="field-label" for="cr-full-name">Imię i nazwisko</label>
            <input class="input-field" type="text" id="cr-full-name" name="full_name" value="Jan Kowalski" required>
          </div>
        </div>
        <div class="form-row">
          <div class="form-field">
            <label class="field-label" for="cr-email">E-mail do logowania</label>
            <input class="input-field" type="email" id="cr-email" name="email" value="janko@koszulki.com" required>
          </div>
        </div>
        <div class="form-row">
          <div class="form-field">
            <label class="field-label" for="cr-phone">Telefon</label>
            <input class="input-field" type="tel" id="cr-phone" name="phone" value="+48 666 777 666" required>
          </div>
        </div>
        <p class="change-request__hint">Zmiana e-maila do logowania również wymaga zatwierdzenia.</p>
      </div>
    </fieldset>

    <!-- PROPONOWANE DANE FIRMY -->
    <fieldset class="change-request__section">
      <legend class="change-request__header">Proponowane dane firmy</legend>
      <div class="change-request__body">
        <div class="form-row">
          <div class="form-field">
            <label class="field-label" for="cr-company">Nazwa firmy</label>
            <input class="input-field" type="text" id="cr-company" name="company_name" value="Koszulki S.A." required>
          </div>
        </div>
        <div class="form-row">
          <div class="form-field">
            <label class="field-label" for="cr-nip">NIP</label>
            <input class="input-field" type="text" id="cr-nip" name="nip" value="7991119988" inputmode="numeric" required>
          </div>
        </div>
        <div class="form-row">
          <div class="form-field">
            <label class="field-label" for="cr-street">Ulica i numer</label>
            <input class="input-field" type="text" id="cr-street" name="street" value="al. Krakowska 13" required>
          </div>
        </div>
        <div class="form-row">
          <div class="form-field change-request__postal">
            <label class="field-label" for="cr-postal">Kod pocztowy</label>
            <input class="input-field" type="text" id="cr-postal" name="postal_code" value="05-300" required>
          </div>
          <div class="form-field">
            <label class="field-label" for="cr-city">Miejscowość</label>
            <input class="input-field" type="text" id="cr-city" name="city" value="Wrocławek" required>
          </div>
        </div>
      </div>
    </fieldset>

  </div>

  <div class="change-request__body change-request__body--full">
    <div class="form-field">
      <label class="field-label" for="cr-notes">Uwagi do zgłoszenia (opcjonalnie)</label>
      <textarea class="textarea-field change-request__textarea" id="cr-notes" name="notes" placeholder="Np. czego dotyczy zmiana i od kiedy mają obowiązywać nowe dane."></textarea>
    </div>

    <div class="form-actions">
      <a href="./my-data.php" class="btn">Anuluj</a>
      <button type="submit" class="btn btn--filled">Wyślij zgłoszenie</button>
    </div>
  </div>
</form>
