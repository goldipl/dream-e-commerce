<div class="account-sidebar" data-active-page="<?php echo htmlspecialchars($activeAccountPage ?? '', ENT_QUOTES, 'UTF-8'); ?>">
  <h1 class="account-sidebar__title">Panel klienta</h1>
  <p class="account-sidebar__subtitle">Konto firmowe</p>

  <nav class="account-sidebar__nav">
    <a href="./my-data.php" class="account-sidebar__link" data-account-page="dane">Moje dane</a>
    <a href="./my-orders.php" class="account-sidebar__link" data-account-page="zamowienia">Moje zamówienia</a>
    <a href="./my-billing.php" class="account-sidebar__link" data-account-page="rozliczenia">Moje rozliczenia</a>
    <a href="./my-addresses.php" class="account-sidebar__link" data-account-page="adresy">Moje adresy</a>
  </nav>
</div>
