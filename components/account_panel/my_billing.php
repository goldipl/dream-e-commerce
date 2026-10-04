<div class="account-section-header">
  <h1 class="account-content__title">Moje rozliczenia</h1>
  <span class="account-sample-date">Dane przykładowe: 25.09.2026</span>
</div>

<div class="info-card">
  <div class="info-card__header">Linia kredytowa</div>
  <div class="info-card__body">
    <div class="info-card__row">
      <div class="info-card__field">
        <span class="info-card__label">Limit kredytu</span>
        <span class="info-card__value">150 000,00 PLN</span>
      </div>
      <div class="info-card__field">
        <span class="info-card__label">Wykorzystano</span>
        <span class="info-card__value">50 000,00 PLN</span>
      </div>
      <div class="info-card__field">
        <span class="info-card__label">Wolne środki</span>
        <span class="info-card__value">100 000,00 PLN</span>
      </div>
    </div>
  </div>
</div>

<div class="credit-banner credit-banner--active">
  <p class="credit-banner__title">Linia kredytowa aktywna</p>
  <p class="credit-banner__text">Możesz korzystać z dostępnego limitu zgodnie z warunkami płatności.</p>
</div>

<h2 class="account-section-title">Lista faktur</h2>

<div class="invoice-filters">
  <label class="checkbox-field" id="filter-overdue-wrap">
    <input type="checkbox" id="filter-overdue">
    <span class="checkbox-field__checkmark"></span>
    <span class="checkbox-field__label">Po terminie</span>
  </label>
  <label class="checkbox-field" id="filter-unpaid-wrap">
    <input type="checkbox" id="filter-unpaid">
    <span class="checkbox-field__checkmark"></span>
    <span class="checkbox-field__label checkbox-field__label--danger">Niezapłacone</span>
  </label>
</div>

<div class="table-scroll">
  <table class="data-table" id="invoices-table">
    <thead>
      <tr>
        <th>Numer FV</th>
        <th>Numer FV KSeF</th>
        <th>Zamówienie</th>
        <th>Netto PLN</th>
        <th>VAT PLN</th>
        <th>Brutto PLN</th>
        <th>Data FV</th>
        <th>Termin płatności</th>
        <th>Dni po terminie</th>
        <th>Status</th>
      </tr>
    </thead>
    <tbody>
      <tr data-overdue="0" data-paid="0">
        <td><a href="#">FV260540549</a></td>
        <td>9521866652-20260910-8960F500000E-D0</td>
        <td><a href="./my-order-details.php">ZL/1140/2026</a></td>
        <td>802,40</td>
        <td>184,55</td>
        <td class="text-bold">986,95</td>
        <td>10.09.2026</td>
        <td>25.09.2026</td>
        <td>0</td>
        <td><span class="text-danger">Niezapłacona</span></td>
      </tr>
      <tr data-overdue="1" data-paid="0">
        <td><a href="#">FV260540550</a></td>
        <td>9521866699-20260905-8960F500000E-D0</td>
        <td><a href="./my-order-details.php">ZL/1141/2026</a></td>
        <td>20 000,00</td>
        <td>4 600,00</td>
        <td class="text-bold">24 600,00</td>
        <td>05.09.2026</td>
        <td>20.09.2026</td>
        <td>5</td>
        <td><span class="text-danger">Niezapłacona</span></td>
      </tr>
    </tbody>
  </table>
</div>

<p class="account-pagination__summary" id="invoices-count">2 faktury</p>

<div class="info-grid info-grid--billing">
  <div class="info-card">
    <div class="info-card__header">Dane do przelewu</div>
    <div class="info-card__body">
      <p class="info-card__value">Dreamtex Sp. z o.o.</p>
      <p class="info-card__value info-card__value--account" id="bank-account-number">39 1500 1012 1210 1017 7769 0000</p>
      <button type="button" class="info-card__link info-card__link--button" id="copy-account-number">Kopiuj numer konta</button>
    </div>
  </div>

  <div class="info-card">
    <div class="info-card__header">Kontakt w sprawie rozliczeń</div>
    <div class="info-card__body">
      <p class="info-card__value info-card__value--regular">Rozliczenia, zwroty, kompensaty i płatności przeterminowane.</p>
      <a href="mailto:ksiegowosc@dreamtex.pl" class="info-card__link">ksiegowosc@dreamtex.pl</a>
    </div>
  </div>
</div>

<script>
  (function () {
    var overdueCheckbox = document.getElementById('filter-overdue');
    var unpaidCheckbox = document.getElementById('filter-unpaid');
    var rows = document.querySelectorAll('#invoices-table tbody tr');
    var countLabel = document.getElementById('invoices-count');

    if (!overdueCheckbox || !unpaidCheckbox || !rows.length) {
      return;
    }

    function applyFilters() {
      var showOverdueOnly = overdueCheckbox.checked;
      var showUnpaidOnly = unpaidCheckbox.checked;
      var visibleCount = 0;

      rows.forEach(function (row) {
        var isOverdue = row.getAttribute('data-overdue') === '1';
        var isPaid = row.getAttribute('data-paid') === '1';
        var visible = (!showOverdueOnly || isOverdue) && (!showUnpaidOnly || !isPaid);

        row.hidden = !visible;
        if (visible) {
          visibleCount++;
        }
      });

      if (countLabel) {
        if (showOverdueOnly && !showUnpaidOnly) {
          countLabel.textContent = visibleCount + ' faktura po terminie';
        } else {
          countLabel.textContent = visibleCount + ' faktury';
        }
      }
    }

    overdueCheckbox.addEventListener('change', applyFilters);
    unpaidCheckbox.addEventListener('change', applyFilters);
  })();

  (function () {
    var copyBtn = document.getElementById('copy-account-number');
    var accountEl = document.getElementById('bank-account-number');
    if (!copyBtn || !accountEl) {
      return;
    }
    copyBtn.addEventListener('click', function () {
      var accountNumber = accountEl.textContent.replace(/\s+/g, '');
      if (navigator.clipboard) {
        navigator.clipboard.writeText(accountNumber);
      }
    });
  })();
</script>
