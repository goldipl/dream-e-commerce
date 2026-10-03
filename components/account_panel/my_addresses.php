<h1 class="account-content__title">Moje adresy</h1>

<div class="account-section-header">
  <h2 class="account-section-title account-section-title--inline">Zapisane adresy dostawy</h2>
  <a href="./my-addresses-form.php" class="btn btn--filled">Dodaj adres</a>
</div>

<div class="account-search-row">
  <input type="text" class="input-field account-search-row__input" placeholder="Szukaj po nazwie, adresie lub odbiorcy">
  <span class="account-search-row__count">Liczba adresów: 2</span>
</div>

<div class="table-scroll">
  <table class="data-table">
    <thead>
      <tr>
        <th>Nazwa</th>
        <th>Adres</th>
        <th>Odbiorca</th>
        <th>Telefon</th>
        <th>Status</th>
        <th>Akcje</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td class="text-bold">Street Pizza</td>
        <td>Andriollego 18<br>05-400 Otwock, Polska</td>
        <td>Albert</td>
        <td>500 117 285</td>
        <td><span class="account-status-label">Domyślny</span></td>
        <td class="data-table__action"><a href="./my-addresses-form.php?id=1">Edytuj</a></td>
      </tr>
      <tr>
        <td class="text-bold">Koszulki S.A.</td>
        <td>al. Krakowska 13<br>05-300 Wrocławek, Polska</td>
        <td>Jan Kowalski</td>
        <td>666 777 666</td>
        <td><a href="#" class="data-table__link">Ustaw domyślny</a></td>
        <td class="data-table__action">
          <div class="data-table__action-stack">
            <a href="./my-addresses-form.php?id=2">Edytuj</a>
            <a href="#" class="data-table__link--danger">Usuń</a>
          </div>
        </td>
      </tr>
    </tbody>
  </table>
</div>
