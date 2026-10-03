<h1 class="account-content__title">Moje zamówienia</h1>

<form class="account-filters" id="orders-filters-form">
  <div class="form-row">
    <div class="form-field">
      <label class="field-label">Nr zamówienia Dreamtex</label>
      <input class="input-field" type="text" name="order_number">
    </div>
    <div class="form-field">
      <label class="field-label">Nazwa zamówienia</label>
      <input class="input-field" type="text" name="order_name">
    </div>
    <div class="form-field">
      <label class="field-label">Data utworzenia od</label>
      <input class="input-field" type="text" name="date_from" placeholder="dd.mm.rrrr">
    </div>
    <div class="form-field">
      <label class="field-label">Data utworzenia do</label>
      <input class="input-field" type="text" name="date_to" placeholder="dd.mm.rrrr">
    </div>
  </div>

  <div class="account-filters__actions">
    <div class="form-field account-filters__status">
      <label class="field-label">Status</label>
      <select class="select-field" name="status">
        <option selected>Wszystkie</option>
        <option>Złożone</option>
        <option>Oczekuje na przyjęcie</option>
        <option>Przyjęte</option>
        <option>Wstrzymane</option>
        <option>Częściowo wysłane</option>
        <option>Wysłane</option>
        <option>W realizacji</option>
        <option>Anulowane</option>
        <option>Zrealizowane</option>
      </select>
    </div>

    <button type="submit" class="btn btn--filled">Szukaj</button>
    <a href="./my-orders.php" class="account-filters__clear">Wyczyść filtry</a>

    <div class="account-filters__per-page">
      <span class="account-filters__per-page-label">Pokaż na stronie</span>
      <select class="select-field" name="per_page">
        <option selected>10</option>
        <option>25</option>
        <option>50</option>
      </select>
    </div>
  </div>
</form>

<div class="table-scroll">
  <table class="data-table">
    <thead>
      <tr>
        <th>Nr zam. Dreamtex</th>
        <th>Data utworzenia</th>
        <th>Nazwa</th>
        <th>Utworzył</th>
        <th>Wartość netto</th>
        <th>Status</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>-</td>
        <td>03.08.2026</td>
        <td>FANSTORE - BIALY</td>
        <td>Tomasz Wesoły</td>
        <td>100 000,00 PLN</td>
        <td>Złożone</td>
        <td class="data-table__action"><a href="./my-order-details.php">Podgląd</a></td>
      </tr>
      <tr>
        <td>-</td>
        <td>03.08.2026</td>
        <td>FANSTORE - BIALY</td>
        <td>Tomasz Wesoły</td>
        <td>100 000,00 PLN</td>
        <td>Oczekuje na przyjęcie</td>
        <td class="data-table__action"><a href="./my-order-details.php">Podgląd</a></td>
      </tr>
      <tr>
        <td>ZL/1140/2026</td>
        <td>03.08.2026</td>
        <td>PANSTORE - BIAŁY</td>
        <td>Tomasz Wesoły</td>
        <td>100 000,00 PLN</td>
        <td>Przyjęte</td>
        <td class="data-table__action"><a href="./my-order-details.php">Podgląd</a></td>
      </tr>
      <tr>
        <td>ZL/1141/2026</td>
        <td>03.08.2026</td>
        <td>ICE CREAM</td>
        <td>Tomasz Wesoły</td>
        <td>50 000,00 PLN</td>
        <td>Wstrzymane</td>
        <td class="data-table__action"><a href="./my-order-details.php">Podgląd</a></td>
      </tr>
      <tr>
        <td>ZL/1144/2026</td>
        <td>03.08.2026</td>
        <td>FANSTORE - BIALY</td>
        <td>Tomasz Wesoły</td>
        <td>100 000,00 PLN</td>
        <td>Częściowo wysłane</td>
        <td class="data-table__action"><a href="./my-order-details.php">Podgląd</a></td>
      </tr>
      <tr>
        <td>ZL/1145/2026</td>
        <td>03.08.2026</td>
        <td>FANSTORE - BIALY</td>
        <td>Tomasz Wesoły</td>
        <td>100 000,00 PLN</td>
        <td>Wysłane</td>
        <td class="data-table__action"><a href="./my-order-details.php">Podgląd</a></td>
      </tr>
      <tr>
        <td>ZL/1146/2026</td>
        <td>03.08.2026</td>
        <td>MYLADY</td>
        <td>Tomasz Wesoły</td>
        <td>100 000,00 PLN</td>
        <td>W realizacji</td>
        <td class="data-table__action"><a href="./my-order-details.php">Podgląd</a></td>
      </tr>
      <tr>
        <td>ZL/1148/2026</td>
        <td>02.08.2026</td>
        <td>MACHO#1</td>
        <td>Tomasz Wesoły</td>
        <td>100 000,00 PLN</td>
        <td>Anulowane</td>
        <td class="data-table__action"><a href="./my-order-details.php">Podgląd</a></td>
      </tr>
      <tr>
        <td>ZL/1149/2026</td>
        <td>01.08.2026</td>
        <td>BARCA - ZIELONY</td>
        <td>Tomasz Wesoły</td>
        <td>188,00 PLN</td>
        <td>Zrealizowane</td>
        <td class="data-table__action"><a href="./my-order-details.php">Podgląd</a></td>
      </tr>
    </tbody>
  </table>
</div>

<div class="account-pagination">
  <span class="account-pagination__summary">1–9 z 9 zamówień</span>

  <nav class="pagination">
    <a href="#" class="pagination__arrow" aria-label="Poprzednia strona">
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="12" viewBox="0 0 16 12" fill="none">
        <path d="M15 6H1M1 6L5 2M1 6L5 10" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round" />
      </svg>
    </a>
    <a href="#" class="pagination__page">1</a>
    <a href="#" class="pagination__page pagination__page--active">2</a>
    <a href="#" class="pagination__page">3</a>
    <a href="#" class="pagination__page">4</a>
    <a href="#" class="pagination__page">5</a>
    <a href="#" class="pagination__page">6</a>
    <a href="#" class="pagination__page">7</a>
    <a href="#" class="pagination__arrow" aria-label="Następna strona">
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="12" viewBox="0 0 16 12" fill="none">
        <path d="M1 6H15M15 6L11 2M15 6L11 10" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" stroke-linejoin="round" />
      </svg>
    </a>
  </nav>
</div>
