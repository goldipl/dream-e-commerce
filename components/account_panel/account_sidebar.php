<?php
// Expects:
// $activeAccountPage — 'dane' | 'zamowienia' | 'rozliczenia' | 'adresy'
// $accountType        — 'business' (default) | 'individual'
//                        Individual accounts have no credit line, so the
//                        "Moje rozliczenia" link is hidden, the sidebar
//                        subtitle differs, and pages live under an
//                        "individual-" filename prefix.
$activeAccountPage = $activeAccountPage ?? '';
$accountType = $accountType ?? 'business';
$pagePrefix = $accountType === 'individual' ? 'individual-' : '';
$sidebarSubtitle = $accountType === 'individual' ? 'Konto indywidualne' : 'Konto firmowe';

function account_link_class($key, $active) {
    return 'account-sidebar__link' . ($key === $active ? ' account-sidebar__link--active' : '');
}
?>
<div class="account-sidebar">
  <h1 class="account-sidebar__title">Panel klienta</h1>
  <p class="account-sidebar__subtitle"><?php echo $sidebarSubtitle; ?></p>

  <nav class="account-sidebar__nav">
    <a href="./<?php echo $pagePrefix; ?>my-data.php" class="<?php echo account_link_class('dane', $activeAccountPage); ?>">Moje dane</a>
    <a href="./<?php echo $pagePrefix; ?>my-orders.php" class="<?php echo account_link_class('zamowienia', $activeAccountPage); ?>">Moje zamówienia</a>
    <?php if ($accountType !== 'individual'): ?>
    <a href="./my-billing.php" class="<?php echo account_link_class('rozliczenia', $activeAccountPage); ?>">Moje rozliczenia</a>
    <?php endif; ?>
    <a href="./<?php echo $pagePrefix; ?>my-addresses.php" class="<?php echo account_link_class('adresy', $activeAccountPage); ?>">Moje adresy</a>
  </nav>
</div>
