<section class="contact-page">

  <div class="contact-header">
    <h1 class="contact-header__title">Skontaktuj się z nami</h1>
    <a href="mailto:pomoc.b2b@dreamtex.pl" class="contact-header__email">pomoc.b2b@dreamtex.pl</a>
  </div>

  <div class="contact-form">
    <form id="contact-form">
      <div class="contact-form__row">

        <!-- REASON (radio options) -->
        <div class="contact-form__options">
          <label class="radio-field">
            <input type="radio" name="contact-reason" value="problem" checked>
            <span class="radio-field__dot"></span>
            <span class="radio-field__label">Mam problem</span>
          </label>
          <label class="radio-field">
            <input type="radio" name="contact-reason" value="suggestion">
            <span class="radio-field__dot"></span>
            <span class="radio-field__label">Mam sugestię</span>
          </label>
          <label class="radio-field">
            <input type="radio" name="contact-reason" value="other">
            <span class="radio-field__dot"></span>
            <span class="radio-field__label">Inne</span>
          </label>
        </div>

        <!-- FIELDS -->
        <div class="contact-form__fields">
          <input class="input-field" type="text" name="full_name" placeholder="* Imię i Nazwisko" required>
          <input class="input-field" type="email" name="email" placeholder="* Email" required>
          <input class="input-field" type="text" name="company" placeholder="* Nazwa firmy" required>
          <input class="input-field" type="text" name="order_number" id="order-number-field" placeholder="* Numer zamówienia" required>
        </div>

        <!-- MESSAGE -->
        <div class="contact-form__message">
          <textarea class="textarea-field contact-form__textarea" name="message" placeholder="* Treść wiadomości" required></textarea>
        </div>

      </div>

      <div class="contact-form__footer">
        <label class="checkbox-field">
          <input type="checkbox" name="consent" checked required>
          <span class="checkbox-field__checkmark"></span>
          <span class="checkbox-field__label">Cras euismod ante ut ante porta posuere. Aenean accumsan nisl sed congue sodales.</span>
        </label>
        <button type="submit" class="btn btn--filled">Wyślij</button>
      </div>
    </form>
  </div>

  <?php include "./components/contact_page/contact_showroom.php"; ?>

</section>

<script>
  (function () {
    var reasonInputs = document.querySelectorAll('input[name="contact-reason"]');
    var orderField = document.getElementById('order-number-field');

    if (!reasonInputs.length || !orderField) {
      return;
    }

    function updateOrderField() {
      var selected = document.querySelector('input[name="contact-reason"]:checked');
      var showOrderField = selected && selected.value === 'problem';

      orderField.style.display = showOrderField ? '' : 'none';
      orderField.required = !!showOrderField;
    }

    reasonInputs.forEach(function (input) {
      input.addEventListener('change', updateOrderField);
    });

    updateOrderField();
  })();
</script>