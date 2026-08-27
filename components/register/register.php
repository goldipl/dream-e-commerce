<div class="register-page">
  <div class="register-page__header">
    <div class="register-page__intro">
      <h1 class="register-page__title">Rejestracja</h1>
      <p class="register-page__big-subtitle">Chcesz zamawiać online?</p>
      <p class="register-page__subtitle">Załóż konto w kilka chwil i zyskaj dostęp do pełnej oferty!</p>
    </div>

    <div class="register-page__nip-check">
      <span class="register-page__nip-check-hint">Możliwe, że masz już konto, sprawdź przed rejestracją.</span>
      <div class="nip-check-row">
        <input type="text" class="text-input" id="nip-check-input" placeholder="NIP*">
        <button type="button" class="btn-outline-blue" id="nip-check-btn">Sprawdź</button>
      </div>
    </div>
  </div>

  <form class="register-page__body" id="register-form" novalidate>
    <!-- 1. Typ zakupu -->
    <section class="checkout-panel">
      <div class="checkout-panel__body">
        <span class="form-section-label">1. Na początek wybierz, jak kupujesz:</span>
        <div class="purchase-type-options">
          <label class="purchase-type-option">
            <input type="radio" name="purchase-type" value="business" class="purchase-type-option__radio" checked>
            <span class="purchase-type-option__label">Kupuję na potrzeby mojej firmy</span>
          </label>
          <label class="purchase-type-option">
            <input type="radio" name="purchase-type" value="reseller" class="purchase-type-option__radio">
            <span class="purchase-type-option__label">Kupuję odzież do dalszej sprzedaży</span>
          </label>
          <label class="purchase-type-option">
            <input type="radio" name="purchase-type" value="retail" class="purchase-type-option__radio" >
            <span class="purchase-type-option__label">Kupuję detalicznie.</span>
          </label>
        </div>
      </div>
    </section>

    <!-- 2–4. Dane do logowania / Dane firmowe / Osoba kontaktowa -->
    <section class="checkout-panel">
      <div class="checkout-panel__body register-details">
        <!-- Dane do logowania -->
        <div class="register-details__block">
          <span class="form-section-label">2. Dane do logowania</span>
          <div class="register-grid register-grid--3col">
            <input type="email" class="text-input" name="email" placeholder="E-mail*" required>
            <input type="password" class="text-input" name="password" placeholder="Hasło*" required>
            <input type="password" class="text-input" name="password_confirm" placeholder="Powtórz hasło*" required>
          </div>
        </div>

        <!-- Dane firmowe — tylko dla zakupów firmowych -->
        <fieldset class="register-details__block register-fieldset" id="company-data-block">
          <span class="form-section-label">3. Dane firmowe</span>
          <div class="register-grid register-grid--2col">
            <input type="text" class="text-input" name="company_name" placeholder="Nazwa firmy*" required>
            <input type="text" class="text-input" name="company_nip" placeholder="NIP*" required>
          </div>
          <div class="register-grid register-grid--4col">
            <input type="text" class="text-input" name="company_address" placeholder="Adres*" required>
            <input type="text" class="text-input" name="company_city" placeholder="Miasto*" required>
            <input type="text" class="text-input" name="company_country" placeholder="Państwo*" required>
            <input type="text" class="text-input" name="company_postcode" placeholder="Kod pocztowy*" required>
          </div>
          <div class="register-grid register-grid--2col">
            <input type="email" class="text-input" name="company_email" placeholder="Firmowy e-mail*" required>
            <input type="text" class="text-input" name="company_www" placeholder="Adres strony WWW">
          </div>
        </fieldset>

        <!-- Osoba kontaktowa — tylko dla zakupów firmowych -->
        <fieldset class="register-details__block register-fieldset" id="contact-person-block">
          <span class="form-section-label">4. Osoba kontaktowa</span>
          <div class="register-grid register-grid--3col">
            <input type="text" class="text-input" name="contact_name" placeholder="Imię i Nazwisko*" required>
            <input type="tel" class="text-input" name="contact_phone" placeholder="Telefon*" required>
            <input type="email" class="text-input" name="contact_email" placeholder="E-mail*" required>
          </div>
        </fieldset>
      </div>
    </section>

    <div class="register-page__footer">
      <button type="submit" class="btn-primary-cta register-page__submit">
        <span>Zarejestruj się</span>
      </button>
    </div>
  </form>
</div>

<template id="register-success-modal-template">
  <div class="register-success-modal">
    <div class="register-success-modal__head">
      <h3 class="register-success-modal__title">Dziękujemy za rejestrację!</h3>
      <p class="register-success-modal__subtitle">Odkryj nasze kategorie</p>
    </div>
    <div class="register-success-modal__grid">
      <a href="#" class="register-success-modal__card">
        <span class="register-success-modal__badge">Polecana kategoria</span>
        <h4 class="register-success-modal__card-title">Koszulki T-shirt</h4>
        <p class="register-success-modal__card-desc">Quisque tristique justo urna, id pulvinar risus fringilla vitae. Suspendisse vel rutrum quam. Ut vulputate odio purus, sit amet condimentum eros tincidunt quis.</p>
        <span class="register-success-modal__card-btn">Zobacz produkty</span>
      </a>
      <a href="#" class="register-success-modal__card">
        <span class="register-success-modal__badge">Polecana kategoria</span>
        <h4 class="register-success-modal__card-title">Koszulki Polo</h4>
        <p class="register-success-modal__card-desc">Quisque tristique justo urna, id pulvinar risus fringilla vitae. Suspendisse vel rutrum quam. Ut vulputate odio purus, sit amet condimentum eros tincidunt quis.</p>
        <span class="register-success-modal__card-btn">Zobacz produkty</span>
      </a>
      <a href="#" class="register-success-modal__card">
        <span class="register-success-modal__badge">Polecana kategoria</span>
        <h4 class="register-success-modal__card-title">Czapki</h4>
        <p class="register-success-modal__card-desc">Quisque tristique justo urna, id pulvinar risus fringilla vitae. Suspendisse vel rutrum quam. Ut vulputate odio purus, sit amet condimentum eros tincidunt quis.</p>
        <span class="register-success-modal__card-btn">Zobacz produkty</span>
      </a>
      <a href="#" class="register-success-modal__card">
        <span class="register-success-modal__badge">Polecana kategoria</span>
        <h4 class="register-success-modal__card-title">Folie Flex</h4>
        <p class="register-success-modal__card-desc">Quisque tristique justo urna, id pulvinar risus fringilla vitae. Suspendisse vel rutrum quam. Ut vulputate odio purus, sit amet condimentum eros tincidunt quis.</p>
        <span class="register-success-modal__card-btn">Zobacz produkty</span>
      </a>
    </div>
  </div>
</template>

<script>
  document.addEventListener('DOMContentLoaded', function () {
    var form = document.getElementById('register-form');
    if (!form) return;

    var radios = form.querySelectorAll('input[name="purchase-type"]');
    var companyBlock = document.getElementById('company-data-block');
    var contactBlock = document.getElementById('contact-person-block');

    function setFieldsetState(fieldset, visible) {
      if (!fieldset) return;
      fieldset.hidden = !visible;
      fieldset.disabled = !visible;
    }

    function updateView(purchaseType) {
      var isRetail = purchaseType === 'retail';

      setFieldsetState(companyBlock, !isRetail);
      setFieldsetState(contactBlock, !isRetail);

      form.classList.toggle('is-retail', isRetail);
    }

    radios.forEach(function (radio) {
      radio.addEventListener('change', function () {
        updateView(radio.value);
      });
    });

    var initiallyChecked = form.querySelector('input[name="purchase-type"]:checked');
    updateView(initiallyChecked ? initiallyChecked.value : null);

    // Po pomyślnej walidacji formularza pokaż modal "Dziękujemy za rejestrację!"
    form.addEventListener('submit', function (e) {
      e.preventDefault();

      if (!form.checkValidity()) {
        form.reportValidity();
        return;
      }

      // TODO: podłączyć właściwe zapytanie rejestracyjne (fetch/AJAX) tutaj.
      // Modal otwiera się dopiero po udanej rejestracji po stronie backendu.
      showRegisterSuccessModal();
    });

    function showRegisterSuccessModal() {
      var template = document.getElementById('register-success-modal-template');
      if (!template || typeof bootbox === 'undefined') return;

      bootbox.dialog({
        className: 'register-success-dialog',
        message: template.innerHTML,
        closeButton: true,
        backdrop: true
      });
    }
  });
</script>
