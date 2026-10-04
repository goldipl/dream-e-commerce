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
    <a href="./individual-my-orders.php" class="account-filters__clear">Wyczyść filtry</a>

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
        <th>Wartość brutto</th>
        <th>Status</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>-</td>
        <td>03.08.2026</td>
        <td>FANSTORE - BIAŁY</td>
        <td>Albert Kamus</td>
        <td>123 000,00 PLN</td>
        <td>Złożone</td>
        <td class="data-table__action"><a href="./individual-order-details.php">Podgląd</a></td>
      </tr>
      <tr>
        <td>-</td>
        <td>03.08.2026</td>
        <td>FANSTORE - BIAŁY</td>
        <td>Albert Kamus</td>
        <td>123 000,00 PLN</td>
        <td>Oczekuje na przyjęcie</td>
        <td class="data-table__action"><a href="./individual-order-details.php">Podgląd</a></td>
      </tr>
      <tr>
        <td>ZL/1140/2026</td>
        <td>03.08.2026</td>
        <td>PANSTORE - BIAŁY</td>
        <td>Albert Kamus</td>
        <td>123 000,00 PLN</td>
        <td>Przyjęte</td>
        <td class="data-table__action"><a href="./individual-order-details.php">Podgląd</a></td>
      </tr>
      <tr>
        <td>ZL/1141/2026</td>
        <td>03.08.2026</td>
        <td>ICE CREAM</td>
        <td>Albert Kamus</td>
        <td>61 500,00 PLN</td>
        <td>Wstrzymane</td>
        <td class="data-table__action"><a href="./individual-order-details.php">Podgląd</a></td>
      </tr>
      <tr>
        <td>ZL/1144/2026</td>
        <td>03.08.2026</td>
        <td>FANSTORE - BIAŁY</td>
        <td>Albert Kamus</td>
        <td>123 000,00 PLN</td>
        <td>Częściowo wysłane</td>
        <td class="data-table__action"><a href="./individual-order-details.php">Podgląd</a></td>
      </tr>
      <tr>
        <td>ZL/1145/2026</td>
        <td>03.08.2026</td>
        <td>FANSTORE - BIAŁY</td>
        <td>Albert Kamus</td>
        <td>123 000,00 PLN</td>
        <td>Wysłane</td>
        <td class="data-table__action"><a href="./individual-order-details.php">Podgląd</a></td>
      </tr>
      <tr>
        <td>ZL/1146/2026</td>
        <td>03.08.2026</td>
        <td>MYLADY</td>
        <td>Albert Kamus</td>
        <td>123 000,00 PLN</td>
        <td>W realizacji</td>
        <td class="data-table__action"><a href="./individual-order-details.php">Podgląd</a></td>
      </tr>
      <tr>
        <td>ZL/1148/2026</td>
        <td>02.08.2026</td>
        <td>MACHO#1</td>
        <td>Albert Kamus</td>
        <td>123 000,00 PLN</td>
        <td>Anulowane</td>
        <td class="data-table__action"><a href="./individual-order-details.php">Podgląd</a></td>
      </tr>
      <tr>
        <td>ZL/1149/2026</td>
        <td>01.08.2026</td>
        <td>BARCA - ZIELONY</td>
        <td>Albert Kamus</td>
        <td>231,24 PLN</td>
        <td>Zrealizowane</td>
        <td class="data-table__action"><a href="./individual-order-details.php">Podgląd</a></td>
      </tr>
    </tbody>
  </table>
</div>

<div class="account-pagination">
  <span class="account-pagination__summary">1–9 z 9 zamówień</span>

  <div class="pagination">
    <a href="#" class="pagination__arrow" aria-label="Poprzednia strona">
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
        <path d="M3.175 8.56846L9.175 14.3886L8 15.5204L0 7.76019L8 0L9.175 1.13178L3.175 6.95192L16 6.95192V8.56846L3.175 8.56846Z" fill="#001C5E"/>
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
      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
        <path d="M12.825 6.9518L6.825 1.13165L8 -0.000119888L16 7.76007L8 15.5203L6.825 14.3885L12.825 8.56834L-1.28081e-06 8.56834L-1.13512e-06 6.9518L12.825 6.9518Z" fill="#001C5E"/>
      </svg>
    </a>
  </div>
</div>
