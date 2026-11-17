<!-- Comparison table: 5 products (max). Rows without a value for every product are left out. -->
<div class="compare-toolbar">
  <div class="compare-toggles" role="group" aria-label="Zakres porównania">
    <label class="compare-toggle">
      <input type="checkbox" class="compare-toggle__input" value="important" checked>
      <span class="compare-toggle__box" aria-hidden="true"></span>
      Najważniejsze
    </label>
    <label class="compare-toggle">
      <input type="checkbox" class="compare-toggle__input" value="all">
      <span class="compare-toggle__box" aria-hidden="true"></span>
      Wszystkie parametry
    </label>
    <label class="compare-toggle">
      <input type="checkbox" class="compare-toggle__input" value="diff">
      <span class="compare-toggle__box" aria-hidden="true"></span>
      Tylko różnice
    </label>
  </div>
  <div class="compare-toolbar__actions">
    <a href="./compare-empty.php" class="btn-primary-cta btn-next-step" data-compare-clear>Wyczyść porównanie</a>
    <a href="./category.php" class="btn-primary-cta">Katalog produktów</a>
  </div>
</div>

<div class="compare-table-wrapper">
  <table class="compare-table" style="--compare-cols: 5" aria-label="Porównanie parametrów wybranych produktów">
    <colgroup>
      <col class="compare-table__label-col">
      <col>
      <col>
      <col>
      <col>
      <col>
    </colgroup>

    <thead>
      <tr>
        <th scope="row" class="compare-table__label compare-table__label--product">
          <span class="compare-table__label-title">Produkt</span>
          <span class="compare-table__label-hint">Zdjęcie i dane rodziny produktu</span>
        </th>
        <!-- T-shirt Classic 150 -->
        <td class="compare-product" data-brand="Marka A" data-dx-code="DX-TS-150" data-supplier-code="CL150" data-price="25,00 zł" data-unit="szt.">
          <button type="button" class="compare-product__remove" aria-label="Usuń T-shirt Classic 150 z porównania">
            <span aria-hidden="true">×</span> Usuń
          </button>
          <a href="./product-card.php" class="compare-product__image" tabindex="-1" aria-hidden="true">
            <img src="https://www.heavytools.pl/upload_files/products_thumb_big/thumb_big_1776816601_t16024s2501_e.jpg" alt="" loading="lazy">
          </a>
          <a href="./product-card.php" class="compare-product__name">T-shirt Classic 150</a>
          <ul class="compare-product__meta">
            <li>Marka: Marka A</li>
            <li>Kod rodziny DX: DX-TS-150</li>
            <li>Kod dostawcy: CL150</li>
            <li>Tekstylia i BHP</li>
          </ul>
        </td>
        <!-- T-shirt Organic 180 -->
        <td class="compare-product" data-brand="Marka C" data-dx-code="DX-TS-180" data-supplier-code="OR180" data-price="39,00 zł" data-unit="szt.">
          <button type="button" class="compare-product__remove" aria-label="Usuń T-shirt Organic 180 z porównania">
            <span aria-hidden="true">×</span> Usuń
          </button>
          <a href="./product-card.php" class="compare-product__image" tabindex="-1" aria-hidden="true">
            <img src="https://picsum.photos/id/1027/400/500" alt="" loading="lazy">
          </a>
          <a href="./product-card.php" class="compare-product__name">T-shirt Organic 180</a>
          <ul class="compare-product__meta">
            <li>Marka: Marka C</li>
            <li>Kod rodziny DX: DX-TS-180</li>
            <li>Kod dostawcy: OR180</li>
            <li>Tekstylia i BHP</li>
          </ul>
        </td>
        <!-- Plecak miejski 20 l -->
        <td class="compare-product" data-brand="Marka D" data-dx-code="DX-GF-B20" data-supplier-code="BP20" data-price="89,00 zł" data-unit="szt.">
          <button type="button" class="compare-product__remove" aria-label="Usuń Plecak miejski 20 l z porównania">
            <span aria-hidden="true">×</span> Usuń
          </button>
          <a href="./product-card.php" class="compare-product__image" tabindex="-1" aria-hidden="true">
            <img src="https://picsum.photos/id/1062/400/500" alt="" loading="lazy">
          </a>
          <a href="./product-card.php" class="compare-product__name">Plecak miejski 20 l</a>
          <ul class="compare-product__meta">
            <li>Marka: Marka D</li>
            <li>Kod rodziny DX: DX-GF-B20</li>
            <li>Kod dostawcy: BP20</li>
            <li>Gadżety</li>
          </ul>
        </td>
        <!-- Butelka termiczna 500 ml -->
        <td class="compare-product" data-brand="Marka E" data-dx-code="DX-GF-T500" data-supplier-code="BT500" data-price="65,00 zł" data-unit="szt.">
          <button type="button" class="compare-product__remove" aria-label="Usuń Butelka termiczna 500 ml z porównania">
            <span aria-hidden="true">×</span> Usuń
          </button>
          <a href="./product-card.php" class="compare-product__image" tabindex="-1" aria-hidden="true">
            <img src="https://picsum.photos/id/1080/400/500" alt="" loading="lazy">
          </a>
          <a href="./product-card.php" class="compare-product__name">Butelka termiczna 500 ml</a>
          <ul class="compare-product__meta">
            <li>Marka: Marka E</li>
            <li>Kod rodziny DX: DX-GF-T500</li>
            <li>Kod dostawcy: BT500</li>
            <li>Gadżety</li>
          </ul>
        </td>
        <!-- Folia flex matowa -->
        <td class="compare-product" data-brand="Marka F" data-dx-code="DX-FL-F50" data-supplier-code="FX50" data-price="24,00 zł" data-unit="mb">
          <button type="button" class="compare-product__remove" aria-label="Usuń Folia flex matowa z porównania">
            <span aria-hidden="true">×</span> Usuń
          </button>
          <a href="./product-card.php" class="compare-product__image" tabindex="-1" aria-hidden="true">
            <span class="compare-image-placeholder">Zdjęcie produktu niedostępne</span>
          </a>
          <a href="./product-card.php" class="compare-product__name">Folia flex matowa</a>
          <ul class="compare-product__meta">
            <li>Marka: Marka F</li>
            <li>Kod rodziny DX: DX-FL-F50</li>
            <li>Kod dostawcy: FX50</li>
            <li>Folie</li>
          </ul>
        </td>
      </tr>
    </thead>

    <!-- Podstawowe informacje -->
    <tbody class="compare-group-head">
      <tr>
        <th colspan="6" scope="colgroup" class="compare-group-head__cell">
          <span class="compare-group-head__toggle compare-group-head__toggle--static">
            <span class="compare-group-head__label">Podstawowe informacje</span>
          </span>
        </th>
      </tr>
    </tbody>
    <tbody class="compare-group-body" id="compare-group-basic">
      <tr class="compare-row">
        <th scope="row" class="compare-table__label">Cena jednostkowa netto</th>
        <td class="compare-cell">
          <strong class="compare-price">25,00 zł</strong>
          <span class="compare-price__unit">za 1 szt.</span>
        </td>
        <td class="compare-cell">
          <strong class="compare-price">39,00 zł</strong>
          <span class="compare-price__unit">za 1 szt.</span>
        </td>
        <td class="compare-cell">
          <strong class="compare-price">89,00 zł</strong>
          <span class="compare-price__unit">za 1 szt.</span>
        </td>
        <td class="compare-cell">
          <strong class="compare-price">65,00 zł</strong>
          <span class="compare-price__unit">za 1 szt.</span>
        </td>
        <td class="compare-cell">
          <strong class="compare-price">24,00 zł</strong>
          <span class="compare-price__unit">za metr bieżący</span>
        </td>
      </tr>
      <tr class="compare-row">
        <th scope="row" class="compare-table__label">Dostępność</th>
        <td class="compare-cell">
          <div class="compare-availability">
            <span>24h: 48 szt.<br>2–3 dni: 0 szt.<br>Przyszłe: 5 szt. / 28.11.2026</span>
            <button type="button" class="compare-availability__info" aria-label="Informacje o przyszłych dostawach" data-deliveries="[{&quot;date&quot;:&quot;28.11.2026&quot;,&quot;qty&quot;:&quot;5 szt.&quot;}]">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none" aria-hidden="true"><circle cx="8" cy="8" r="6.17" stroke="currentColor" stroke-width="1.33"/><path d="M7.33 11.33h1.34v-4H7.33v4Zm.67-5.33a.65.65 0 0 0 .67-.67.65.65 0 0 0-.67-.66.65.65 0 0 0-.67.66.65.65 0 0 0 .67.67Z" fill="currentColor"/></svg>
            </button>
          </div>
        </td>
        <td class="compare-cell">
          <div class="compare-availability">
            <span>24h: 30 szt.<br>2–3 dni: 200 szt.<br>Przyszłe: 100 szt.<br>Termin: brak informacji</span>
            <button type="button" class="compare-availability__info" aria-label="Informacje o przyszłych dostawach" data-deliveries="[]">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none" aria-hidden="true"><circle cx="8" cy="8" r="6.17" stroke="currentColor" stroke-width="1.33"/><path d="M7.33 11.33h1.34v-4H7.33v4Zm.67-5.33a.65.65 0 0 0 .67-.67.65.65 0 0 0-.67-.66.65.65 0 0 0-.67.66.65.65 0 0 0 .67.67Z" fill="currentColor"/></svg>
            </button>
          </div>
        </td>
        <td class="compare-cell">
          <div class="compare-availability">
            <span>24h: 40 szt.<br>2–3 dni: 120 szt.<br>Przyszłe: 03.12.2026<br>Ilość: brak informacji</span>
            <button type="button" class="compare-availability__info" aria-label="Informacje o przyszłych dostawach" data-deliveries="[{&quot;date&quot;:&quot;03.12.2026&quot;,&quot;qty&quot;:&quot;ilość nieznana&quot;}]">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none" aria-hidden="true"><circle cx="8" cy="8" r="6.17" stroke="currentColor" stroke-width="1.33"/><path d="M7.33 11.33h1.34v-4H7.33v4Zm.67-5.33a.65.65 0 0 0 .67-.67.65.65 0 0 0-.67-.66.65.65 0 0 0-.67.66.65.65 0 0 0 .67.67Z" fill="currentColor"/></svg>
            </button>
          </div>
        </td>
        <td class="compare-cell">
          <div class="compare-availability">
            <span>24h: 75 szt.<br>2–3 dni: 250 szt.<br>Przyszłe: 150 szt. / 02.12.2026</span>
            <button type="button" class="compare-availability__info" aria-label="Informacje o przyszłych dostawach" data-deliveries="[{&quot;date&quot;:&quot;02.12.2026&quot;,&quot;qty&quot;:&quot;150 szt.&quot;}]">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none" aria-hidden="true"><circle cx="8" cy="8" r="6.17" stroke="currentColor" stroke-width="1.33"/><path d="M7.33 11.33h1.34v-4H7.33v4Zm.67-5.33a.65.65 0 0 0 .67-.67.65.65 0 0 0-.67-.66.65.65 0 0 0-.67.66.65.65 0 0 0 .67.67Z" fill="currentColor"/></svg>
            </button>
          </div>
        </td>
        <td class="compare-cell">
          <div class="compare-availability">
            <span>24h: 80 mb<br>2–3 dni: 120 mb<br>Przyszłe: 200 mb / 03.12.2026</span>
            <button type="button" class="compare-availability__info" aria-label="Informacje o przyszłych dostawach" data-deliveries="[{&quot;date&quot;:&quot;03.12.2026&quot;,&quot;qty&quot;:&quot;200 mb&quot;}]">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none" aria-hidden="true"><circle cx="8" cy="8" r="6.17" stroke="currentColor" stroke-width="1.33"/><path d="M7.33 11.33h1.34v-4H7.33v4Zm.67-5.33a.65.65 0 0 0 .67-.67.65.65 0 0 0-.67-.66.65.65 0 0 0-.67.66.65.65 0 0 0 .67.67Z" fill="currentColor"/></svg>
            </button>
          </div>
        </td>
      </tr>
      <tr class="compare-row">
        <th scope="row" class="compare-table__label">Klasa jakości</th>
        <td class="compare-cell">Standardowa</td>
        <td class="compare-cell">Premium</td>
        <td class="compare-cell">Standardowa</td>
        <td class="compare-cell">Premium</td>
        <td class="compare-cell">Standardowa</td>
      </tr>
      <tr class="compare-row">
        <th scope="row" class="compare-table__label">Przeznaczenie</th>
        <td class="compare-cell">Odzież firmowa, eventy<br>Sezon: cały rok</td>
        <td class="compare-cell">Fashion, odzież wizerunkowa<br>Sezon: wiosna, lato</td>
        <td class="compare-cell">Codziennego użytku<br>Praca, podróż<br>Sezon: cały rok</td>
        <td class="compare-cell">Codziennego użytku<br>Sport, podróż<br>Sezon: cały rok</td>
        <td class="compare-cell">Znakowanie odzieży<br>Bawełna, poliester i mieszanki</td>
      </tr>
      <tr class="compare-row">
        <th scope="row" class="compare-table__label">Materiał</th>
        <td class="compare-cell">100% bawełna<br>splot jersey</td>
        <td class="compare-cell">100% bawełna organiczna</td>
        <td class="compare-cell">Poliester 600D</td>
        <td class="compare-cell">Stal nierdzewna</td>
        <td class="compare-cell">Poliuretan (PU)</td>
      </tr>
      <tr class="compare-row">
        <th scope="row" class="compare-table__label">Dostępne kolory</th>
        <td class="compare-cell">
          <ul class="compare-colors">
            <li><span class="compare-colors__swatch" style="background-color: #ffffff"></span>01 Biały</li>
            <li><span class="compare-colors__swatch" style="background-color: #001c5e"></span>02 Granat</li>
            <li><span class="compare-colors__swatch" style="background-color: #0b0f19"></span>03 Czarny</li>
          </ul>
        </td>
        <td class="compare-cell">
          <ul class="compare-colors">
            <li><span class="compare-colors__swatch" style="background-color: #7d9488"></span>22 Szałwiowy</li>
            <li><span class="compare-colors__swatch" style="background-color: #ffffff"></span>01 Biały</li>
            <li><span class="compare-colors__swatch" style="background-color: #0b0f19"></span>03 Czarny</li>
          </ul>
        </td>
        <td class="compare-cell">
          <ul class="compare-colors">
            <li><span class="compare-colors__swatch" style="background-color: #0b0f19"></span>03 Czarny</li>
            <li><span class="compare-colors__swatch" style="background-color: #001c5e"></span>02 Granat</li>
          </ul>
        </td>
        <td class="compare-cell">
          <ul class="compare-colors">
            <li><span class="compare-colors__swatch" style="background-color: #0b0f19"></span>03 Czarny</li>
            <li><span class="compare-colors__swatch" style="background-color: #aab4c8"></span>07 Srebrny</li>
          </ul>
        </td>
        <td class="compare-cell">
          <ul class="compare-colors">
            <li><span class="compare-colors__swatch" style="background-color: #ffffff"></span>01 Biały</li>
            <li><span class="compare-colors__swatch" style="background-color: #0b0f19"></span>03 Czarny</li>
            <li><span class="compare-colors__swatch" style="background-color: #d0021b"></span>04 Czerwony</li>
          </ul>
        </td>
      </tr>
      <tr class="compare-row">
        <th scope="row" class="compare-table__label">Cechy szczególne</th>
        <td class="compare-cell">Odrywalna metka<br>Wzmocnione szwy</td>
        <td class="compare-cell">Bez metki głównej<br>Wykończenie prane</td>
        <td class="compare-cell">Kieszeń na laptop<br>Regulowane szelki</td>
        <td class="compare-cell">Podwójne ścianki<br>Szczelna zakrętka</td>
        <td class="compare-cell">Elastyczna<br>Nośnik odklejany na ciepło</td>
      </tr>
      <tr class="compare-row">
        <th scope="row" class="compare-table__label">Możliwość znakowania</th>
        <td class="compare-cell">DTF, sitodruk, haft</td>
        <td class="compare-cell">DTF, sitodruk, haft</td>
        <td class="compare-cell">Transfer, haft</td>
        <td class="compare-cell">Grawer laserowy, tampodruk</td>
        <td class="compare-cell">Ploter / termotransfer</td>
      </tr>
    </tbody>

    <!-- Rozmiary i wersje produktu -->
    <tbody class="compare-group-head">
      <tr>
        <th colspan="6" scope="colgroup" class="compare-group-head__cell">
          <button type="button" class="compare-group-head__toggle" aria-expanded="false" aria-controls="compare-group-sizes">
            <span class="compare-group-head__label">Rozmiary i wersje produktu</span>
            <span class="compare-group-head__count">2 parametry</span>
            <span class="compare-group-head__chevron">
              <svg xmlns="http://www.w3.org/2000/svg" width="14" height="8" viewBox="0 0 14 8" fill="none" aria-hidden="true"><path d="M1 1l6 6 6-6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </span>
          </button>
        </th>
      </tr>
    </tbody>
    <tbody class="compare-group-body" id="compare-group-sizes" hidden>
      <tr class="compare-row">
        <th scope="row" class="compare-table__label">Wersje produktu</th>
        <td class="compare-cell">
          Męska
          <br><a href="#" class="compare-cell__link">Classic 150 damski</a>
          <br><a href="#" class="compare-cell__link">Classic 150 dziecięcy</a>
        </td>
        <td class="compare-cell">
          Unisex
          <br><a href="#" class="compare-cell__link">Organic 180 dziecięcy</a>
        </td>
        <td class="compare-cell"><span class="compare-cell__empty">Nie dotyczy</span></td>
        <td class="compare-cell"><span class="compare-cell__empty">Nie dotyczy</span></td>
        <td class="compare-cell"><span class="compare-cell__empty">Nie dotyczy</span></td>
      </tr>
      <tr class="compare-row">
        <th scope="row" class="compare-table__label">Dostępne rozmiary</th>
        <td class="compare-cell">S / M / L / XL / XXL / 3XL</td>
        <td class="compare-cell">XS / S / M / L / XL / XXL</td>
        <td class="compare-cell"><span class="compare-cell__empty">Nie dotyczy</span></td>
        <td class="compare-cell"><span class="compare-cell__empty">Nie dotyczy</span></td>
        <td class="compare-cell"><span class="compare-cell__empty">Nie dotyczy</span></td>
      </tr>
    </tbody>

    <!-- Budowa i parametry produktu -->
    <tbody class="compare-group-head">
      <tr>
        <th colspan="6" scope="colgroup" class="compare-group-head__cell">
          <button type="button" class="compare-group-head__toggle" aria-expanded="false" aria-controls="compare-group-build">
            <span class="compare-group-head__label">Budowa i parametry produktu</span>
            <span class="compare-group-head__count">2 parametry</span>
            <span class="compare-group-head__chevron">
              <svg xmlns="http://www.w3.org/2000/svg" width="14" height="8" viewBox="0 0 14 8" fill="none" aria-hidden="true"><path d="M1 1l6 6 6-6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </span>
          </button>
        </th>
      </tr>
    </tbody>
    <tbody class="compare-group-body" id="compare-group-build" hidden>
      <tr class="compare-row">
        <th scope="row" class="compare-table__label">Gramatura</th>
        <td class="compare-cell">150 g/m²</td>
        <td class="compare-cell">180 g/m²</td>
        <td class="compare-cell"><span class="compare-cell__empty">Nie dotyczy</span></td>
        <td class="compare-cell"><span class="compare-cell__empty">Nie dotyczy</span></td>
        <td class="compare-cell"><span class="compare-cell__empty">Nie dotyczy</span></td>
      </tr>
      <tr class="compare-row">
        <th scope="row" class="compare-table__label">Wygląd i opis</th>
        <td class="compare-cell">Prosty krój, krótki rękaw,<br>okrągły dekolt.<br>Bez zapięcia.</td>
        <td class="compare-cell">Luźny krój, krótki rękaw,<br>okrągły dekolt.<br>Bez zapięcia.</td>
        <td class="compare-cell">Plecak z przednią kieszenią.<br>Zapięcie: suwak.<br>Pojemność: 20 l<br>Interfejs: USB-A<br>(port zewnętrzny)</td>
        <td class="compare-cell">Butelka z zakrętką.<br>Matowe wykończenie.<br>Pojemność: 500 ml</td>
        <td class="compare-cell">Gładkie, matowe wykończenie.<br>Do cięcia ploterowego.</td>
      </tr>
    </tbody>

    <!-- Właściwości i środowisko -->
    <tbody class="compare-group-head">
      <tr>
        <th colspan="6" scope="colgroup" class="compare-group-head__cell">
          <button type="button" class="compare-group-head__toggle" aria-expanded="false" aria-controls="compare-group-properties">
            <span class="compare-group-head__label">Właściwości i środowisko</span>
            <span class="compare-group-head__count">2 parametry</span>
            <span class="compare-group-head__chevron">
              <svg xmlns="http://www.w3.org/2000/svg" width="14" height="8" viewBox="0 0 14 8" fill="none" aria-hidden="true"><path d="M1 1l6 6 6-6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </span>
          </button>
        </th>
      </tr>
    </tbody>
    <tbody class="compare-group-body" id="compare-group-properties" hidden>
      <tr class="compare-row">
        <th scope="row" class="compare-table__label">Właściwości użytkowe</th>
        <td class="compare-cell"><span class="compare-cell__empty">Brak danych</span></td>
        <td class="compare-cell">Miękki i oddychający materiał</td>
        <td class="compare-cell"><span class="compare-cell__empty">Nie dotyczy</span></td>
        <td class="compare-cell"><span class="compare-cell__empty">Nie dotyczy</span></td>
        <td class="compare-cell"><span class="compare-cell__empty">Nie dotyczy</span></td>
      </tr>
      <tr class="compare-row">
        <th scope="row" class="compare-table__label">Cechy środowiskowe</th>
        <td class="compare-cell"><span class="compare-cell__empty">Brak danych</span></td>
        <td class="compare-cell">Bawełna organiczna</td>
        <td class="compare-cell">Materiał z recyklingu</td>
        <td class="compare-cell">Produkt wielokrotnego użytku</td>
        <td class="compare-cell"><span class="compare-cell__empty">Brak danych</span></td>
      </tr>
    </tbody>

    <!-- Certyfikaty -->
    <tbody class="compare-group-head">
      <tr>
        <th colspan="6" scope="colgroup" class="compare-group-head__cell">
          <button type="button" class="compare-group-head__toggle" aria-expanded="false" aria-controls="compare-group-certificates">
            <span class="compare-group-head__label">Certyfikaty</span>
            <span class="compare-group-head__count">1 parametr</span>
            <span class="compare-group-head__chevron">
              <svg xmlns="http://www.w3.org/2000/svg" width="14" height="8" viewBox="0 0 14 8" fill="none" aria-hidden="true"><path d="M1 1l6 6 6-6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </span>
          </button>
        </th>
      </tr>
    </tbody>
    <tbody class="compare-group-body" id="compare-group-certificates" hidden>
      <tr class="compare-row">
        <th scope="row" class="compare-table__label">Certyfikaty i normy</th>
        <td class="compare-cell">OEKO-TEX® STANDARD 100</td>
        <td class="compare-cell">OCS · zakres certyfikacji</td>
        <td class="compare-cell"><span class="compare-cell__empty">Brak danych</span></td>
        <td class="compare-cell"><span class="compare-cell__empty">Brak danych</span></td>
        <td class="compare-cell"><span class="compare-cell__empty">Brak danych</span></td>
      </tr>
    </tbody>

    <!-- Pielęgnacja -->
    <tbody class="compare-group-head">
      <tr>
        <th colspan="6" scope="colgroup" class="compare-group-head__cell">
          <button type="button" class="compare-group-head__toggle" aria-expanded="false" aria-controls="compare-group-care">
            <span class="compare-group-head__label">Pielęgnacja</span>
            <span class="compare-group-head__count">1 parametr</span>
            <span class="compare-group-head__chevron">
              <svg xmlns="http://www.w3.org/2000/svg" width="14" height="8" viewBox="0 0 14 8" fill="none" aria-hidden="true"><path d="M1 1l6 6 6-6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </span>
          </button>
        </th>
      </tr>
    </tbody>
    <tbody class="compare-group-body" id="compare-group-care" hidden>
      <tr class="compare-row">
        <th scope="row" class="compare-table__label">Pielęgnacja i trwałość</th>
        <td class="compare-cell">Pranie: 40°C<br>Suszenie: naturalne<br>Prasowanie: do 150°C<br>Czyszczenie chemiczne: nie</td>
        <td class="compare-cell">Pranie: 30°C<br>Suszenie: naturalne<br>Prasowanie: do 110°C<br>Czyszczenie chemiczne: nie</td>
        <td class="compare-cell">Czyścić wilgotną ściereczką.<br>Nie prać w pralce.<br>Nie suszyć bębnowo.<br>Nie prasować.</td>
        <td class="compare-cell">Myć ręcznie.<br>Nie myć w zmywarce.<br>Nie używać w mikrofalówce.</td>
        <td class="compare-cell">Pranie na lewej stronie.<br>Nie stosować wybielaczy.<br>Nie prasować bezpośrednio<br>po znakowaniu.</td>
      </tr>
    </tbody>

    <!-- Parametry techniczne folii -->
    <tbody class="compare-group-head">
      <tr>
        <th colspan="6" scope="colgroup" class="compare-group-head__cell">
          <button type="button" class="compare-group-head__toggle" aria-expanded="false" aria-controls="compare-group-film">
            <span class="compare-group-head__label">Parametry techniczne folii</span>
            <span class="compare-group-head__count">7 parametrów</span>
            <span class="compare-group-head__chevron">
              <svg xmlns="http://www.w3.org/2000/svg" width="14" height="8" viewBox="0 0 14 8" fill="none" aria-hidden="true"><path d="M1 1l6 6 6-6" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
            </span>
          </button>
        </th>
      </tr>
    </tbody>
    <tbody class="compare-group-body" id="compare-group-film" hidden>
      <tr class="compare-row">
        <th scope="row" class="compare-table__label">Szerokość folii</th>
        <td class="compare-cell"><span class="compare-cell__empty">Nie dotyczy</span></td>
        <td class="compare-cell"><span class="compare-cell__empty">Nie dotyczy</span></td>
        <td class="compare-cell"><span class="compare-cell__empty">Nie dotyczy</span></td>
        <td class="compare-cell"><span class="compare-cell__empty">Nie dotyczy</span></td>
        <td class="compare-cell">50 cm</td>
      </tr>
      <tr class="compare-row">
        <th scope="row" class="compare-table__label">Długość folii</th>
        <td class="compare-cell"><span class="compare-cell__empty">Nie dotyczy</span></td>
        <td class="compare-cell"><span class="compare-cell__empty">Nie dotyczy</span></td>
        <td class="compare-cell"><span class="compare-cell__empty">Nie dotyczy</span></td>
        <td class="compare-cell"><span class="compare-cell__empty">Nie dotyczy</span></td>
        <td class="compare-cell">25 m / rolka</td>
      </tr>
      <tr class="compare-row">
        <th scope="row" class="compare-table__label">Rodzaj kleju / nośnika</th>
        <td class="compare-cell"><span class="compare-cell__empty">Nie dotyczy</span></td>
        <td class="compare-cell"><span class="compare-cell__empty">Nie dotyczy</span></td>
        <td class="compare-cell"><span class="compare-cell__empty">Nie dotyczy</span></td>
        <td class="compare-cell"><span class="compare-cell__empty">Nie dotyczy</span></td>
        <td class="compare-cell">Klej termoaktywny / nośnik PET</td>
      </tr>
      <tr class="compare-row">
        <th scope="row" class="compare-table__label">Czas i temperatura transferu</th>
        <td class="compare-cell"><span class="compare-cell__empty">Nie dotyczy</span></td>
        <td class="compare-cell"><span class="compare-cell__empty">Nie dotyczy</span></td>
        <td class="compare-cell"><span class="compare-cell__empty">Nie dotyczy</span></td>
        <td class="compare-cell"><span class="compare-cell__empty">Nie dotyczy</span></td>
        <td class="compare-cell">150°C / 12 s</td>
      </tr>
      <tr class="compare-row">
        <th scope="row" class="compare-table__label">Odporność na pranie folii</th>
        <td class="compare-cell"><span class="compare-cell__empty">Nie dotyczy</span></td>
        <td class="compare-cell"><span class="compare-cell__empty">Nie dotyczy</span></td>
        <td class="compare-cell"><span class="compare-cell__empty">Nie dotyczy</span></td>
        <td class="compare-cell"><span class="compare-cell__empty">Nie dotyczy</span></td>
        <td class="compare-cell">Do 40°C, po 24 h</td>
      </tr>
      <tr class="compare-row">
        <th scope="row" class="compare-table__label">Grubość folii</th>
        <td class="compare-cell"><span class="compare-cell__empty">Nie dotyczy</span></td>
        <td class="compare-cell"><span class="compare-cell__empty">Nie dotyczy</span></td>
        <td class="compare-cell"><span class="compare-cell__empty">Nie dotyczy</span></td>
        <td class="compare-cell"><span class="compare-cell__empty">Nie dotyczy</span></td>
        <td class="compare-cell">90 µm</td>
      </tr>
      <tr class="compare-row">
        <th scope="row" class="compare-table__label">Bloker migracyjny</th>
        <td class="compare-cell"><span class="compare-cell__empty">Nie dotyczy</span></td>
        <td class="compare-cell"><span class="compare-cell__empty">Nie dotyczy</span></td>
        <td class="compare-cell"><span class="compare-cell__empty">Nie dotyczy</span></td>
        <td class="compare-cell"><span class="compare-cell__empty">Nie dotyczy</span></td>
        <td class="compare-cell">Nie</td>
      </tr>
    </tbody>
  </table>
</div>
