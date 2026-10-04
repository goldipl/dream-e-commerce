<h1 class="account-content__title">Moje adresy</h1>

<div class="info-card">
  <div class="info-card__header">Dodaj adres dostawy</div>
  <div class="info-card__body">
    <form id="address-form">
      <div class="form-row">
        <div class="form-field">
          <label class="field-label">Nazwa adresu</label>
          <input class="input-field" type="text" name="name" value="" required>
        </div>
        <div class="form-field">
          <label class="field-label">Imię i nazwisko odbiorcy</label>
          <input class="input-field" type="text" name="recipient" value="" required>
        </div>
      </div>
      <div class="form-row">
        <div class="form-field">
          <label class="field-label">Firma (opcjonalnie)</label>
          <input class="input-field" type="text" name="company" value="">
        </div>
        <div class="form-field">
          <label class="field-label">Ulica i numer</label>
          <input class="input-field" type="text" name="street" value="" required>
        </div>
      </div>
      <div class="form-row">
        <div class="form-field">
          <label class="field-label">Kod pocztowy</label>
          <input class="input-field" type="text" name="postal_code" value="" required>
        </div>
        <div class="form-field">
          <label class="field-label">Miejscowość</label>
          <input class="input-field" type="text" name="city" value="" required>
        </div>
        <div class="form-field">
          <label class="field-label">Państwo</label>
          <input class="input-field" type="text" name="country" value="Polska" required>
        </div>
        <div class="form-field">
          <label class="field-label">Telefon</label>
          <input class="input-field" type="text" name="phone" value="" required>
        </div>
      </div>

      <label class="checkbox-field">
        <input type="checkbox" name="is_default">
        <span class="checkbox-field__checkmark"></span>
        <span class="checkbox-field__label">Ustaw jako domyślny adres dostawy</span>
      </label>

      <div class="form-actions">
        <a href="./individual-my-addresses.php" class="btn">Anuluj</a>
        <button type="submit" class="btn btn--filled">Zapisz adres</button>
      </div>
    </form>
  </div>
</div>
