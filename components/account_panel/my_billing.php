<?php
// Sample account data — in production these would come from the backend.
$creditLimit = 150000.00;
$usedCredit = 50000.00;
$freeCredit = $creditLimit - $usedCredit;

$invoices = [
    [
        'number' => 'FV260540549', 'kseef' => '9521866652-20260910-8960F500000E-D0',
        'order' => 'ZL/1140/2026', 'net' => '802,40', 'vat' => '184,55', 'gross' => '986,95',
        'date' => '10.09.2026', 'due_date' => '25.09.2026', 'days_overdue' => 0, 'paid' => false,
    ],
    [
        'number' => 'FV260540550', 'kseef' => '9521866699-20260905-8960F500000E-D0',
        'order' => 'ZL/1141/2026', 'net' => '20 000,00', 'vat' => '4 600,00', 'gross' => '24 600,00',
        'date' => '05.09.2026', 'due_date' => '20.09.2026', 'days_overdue' => 5, 'paid' => false,
    ],
];

$overdueInvoiceCount = count(array_filter($invoices, function ($inv) { return $inv['days_overdue'] > 0; }));
$hasLongOverdueInvoice = count(array_filter($invoices, function ($inv) { return $inv['days_overdue'] > 10; })) > 0;

// Credit-line banner state, derived from account data — mirrors the three
// Figma states: active / limit exceeded / overdue payment.
if ($usedCredit > $creditLimit) {
    $bannerVariant = 'limit-exceeded';
    $bannerTitle = 'Linia kredytowa zablokowana: przekroczony limit';
    $bannerText = 'Limit został przekroczony o ' . number_format($usedCredit - $creditLimit, 2, ',', ' ') . ' PLN. Skontaktuj się z nami w sprawie rozliczenia.';
} elseif ($hasLongOverdueInvoice) {
    $bannerVariant = 'overdue';
    $bannerTitle = 'Linia kredytowa zablokowana: zaległa płatność';
    $bannerText = 'Masz fakturę nieopłaconą od ponad 10 dni po terminie. Skontaktuj się z księgowością.';
} else {
    $bannerVariant = 'active';
    $bannerTitle = 'Linia kredytowa aktywna';
    $bannerText = 'Możesz korzystać z dostępnego limitu zgodnie z warunkami płatności.';
}
?>
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
        <span class="info-card__value"><?php echo number_format($creditLimit, 2, ',', ' '); ?> PLN</span>
      </div>
      <div class="info-card__field">
        <span class="info-card__label">Wykorzystano</span>
        <span class="info-card__value"><?php echo number_format($usedCredit, 2, ',', ' '); ?> PLN</span>
      </div>
      <div class="info-card__field">
        <span class="info-card__label">Wolne środki</span>
        <span class="info-card__value"><?php echo number_format($freeCredit, 2, ',', ' '); ?> PLN</span>
      </div>
    </div>
  </div>
</div>

<div class="credit-banner credit-banner--<?php echo $bannerVariant; ?>">
  <p class="credit-banner__title"><?php echo $bannerTitle; ?></p>
  <p class="credit-banner__text"><?php echo $bannerText; ?></p>
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
      <?php foreach ($invoices as $inv): ?>
      <tr data-overdue="<?php echo $inv['days_overdue'] > 0 ? '1' : '0'; ?>" data-paid="<?php echo $inv['paid'] ? '1' : '0'; ?>">
        <td><a href="#"><?php echo $inv['number']; ?></a></td>
        <td><?php echo $inv['kseef']; ?></td>
        <td><a href="./my-order-details.php"><?php echo $inv['order']; ?></a></td>
        <td><?php echo $inv['net']; ?></td>
        <td><?php echo $inv['vat']; ?></td>
        <td class="text-bold"><?php echo $inv['gross']; ?></td>
        <td><?php echo $inv['date']; ?></td>
        <td><?php echo $inv['due_date']; ?></td>
        <td><?php echo $inv['days_overdue']; ?></td>
        <td><span class="text-danger"><?php echo $inv['paid'] ? 'Zapłacona' : 'Niezapłacona'; ?></span></td>
      </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>

<p class="account-pagination__summary" id="invoices-count"><?php echo count($invoices); ?> faktury</p>

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
