<?php
// Sample data — in production this would come from a database lookup by $_GET['id'].
$sampleAddresses = [
    '1' => [
        'name' => 'Dom',
        'recipient' => 'Albert Kamus',
        'company' => '',
        'street' => 'Andriollego 18',
        'postal_code' => '05-400',
        'city' => 'Otwock',
        'country' => 'Polska',
        'phone' => '500 117 285',
        'is_default' => true,
    ],
];

$addressId = $_GET['id'] ?? null;
$isEdit = $addressId !== null && isset($sampleAddresses[$addressId]);
$address = $isEdit ? $sampleAddresses[$addressId] : [
    'name' => '', 'recipient' => '', 'company' => '', 'street' => '',
    'postal_code' => '', 'city' => '', 'country' => 'Polska', 'phone' => '',
    'is_default' => false,
];

function individual_field_value($value) {
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}
?>
<h1 class="account-content__title">Moje adresy</h1>

<div class="info-card">
  <div class="info-card__header"><?php echo $isEdit ? 'Edytuj adres dostawy' : 'Dodaj adres dostawy'; ?></div>
  <div class="info-card__body">
    <form id="address-form">
      <div class="form-row">
        <div class="form-field">
          <label class="field-label">Nazwa adresu</label>
          <input class="input-field" type="text" name="name" value="<?php echo individual_field_value($address['name']); ?>" required>
        </div>
        <div class="form-field">
          <label class="field-label">Imię i nazwisko odbiorcy</label>
          <input class="input-field" type="text" name="recipient" value="<?php echo individual_field_value($address['recipient']); ?>" required>
        </div>
      </div>
      <div class="form-row">
        <div class="form-field">
          <label class="field-label">Firma (opcjonalnie)</label>
          <input class="input-field" type="text" name="company" value="<?php echo individual_field_value($address['company']); ?>">
        </div>
        <div class="form-field">
          <label class="field-label">Ulica i numer</label>
          <input class="input-field" type="text" name="street" value="<?php echo individual_field_value($address['street']); ?>" required>
        </div>
      </div>
      <div class="form-row">
        <div class="form-field">
          <label class="field-label">Kod pocztowy</label>
          <input class="input-field" type="text" name="postal_code" value="<?php echo individual_field_value($address['postal_code']); ?>" required>
        </div>
        <div class="form-field">
          <label class="field-label">Miejscowość</label>
          <input class="input-field" type="text" name="city" value="<?php echo individual_field_value($address['city']); ?>" required>
        </div>
        <div class="form-field">
          <label class="field-label">Państwo</label>
          <input class="input-field" type="text" name="country" value="<?php echo individual_field_value($address['country']); ?>" required>
        </div>
        <div class="form-field">
          <label class="field-label">Telefon</label>
          <input class="input-field" type="text" name="phone" value="<?php echo individual_field_value($address['phone']); ?>" required>
        </div>
      </div>

      <label class="checkbox-field">
        <input type="checkbox" name="is_default" <?php echo $address['is_default'] ? 'checked' : ''; ?>>
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
