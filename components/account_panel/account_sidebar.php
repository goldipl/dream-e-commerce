<?php
// Expects $activeAccountPage to be set before include: 'dane' | 'zamowienia' | 'rozliczenia' | 'adresy'
$activeAccountPage = $activeAccountPage ?? '';

function account_link_class($key, $active) {
    return 'account-sidebar__link' . ($key === $active ? ' account-sidebar__link--active' : '');
}
?>
<div class="account-sidebar">
  <h1 class="account-sidebar__title">Panel klienta</h1>
  <p class="account-sidebar__subtitle">Konto firmowe</p>

  <nav class="account-sidebar__nav">
    <a href="./my-data.php" class="<?php echo account_link_class('dane', $activeAccountPage); ?>">Moje dane</a>
    <a href="./my-orders.php" class="<?php echo account_link_class('zamowienia', $activeAccountPage); ?>">Moje zamówienia</a>
    <a href="./my-billing.php" class="<?php echo account_link_class('rozliczenia', $activeAccountPage); ?>">Moje rozliczenia</a>
    <a href="./my-addresses.php" class="<?php echo account_link_class('adresy', $activeAccountPage); ?>">Moje adresy</a>
  </nav>
</div>
