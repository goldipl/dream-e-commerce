# Dreamtex E-commerce Website

Dreamtex is a PHP-based e-commerce website project for promotional clothing, merchandise, and related products. It contains server-rendered page templates, reusable PHP components, responsive styles, and front-end interactions for browsing products, working through a shopping flow, and viewing customer-account pages.

The interface content is primarily in Polish. This repository provides website templates and front-end behavior; it should not be treated as a complete production commerce backend.

## Features

- Public and signed-in homepage layouts
- Product category, product detail, news, article, and content pages
- Multi-step cart and offer flows
- Company and individual customer-account page templates
- Contact, registration, and password-reminder pages
- Responsive layouts implemented with SCSS and CSS
- Reusable PHP includes for navigation, page sections, and account content
- Front-end interactions using JavaScript and bundled libraries

## Technology

- PHP templates and includes
- HTML5
- SCSS and CSS
- JavaScript
- Bootstrap
- jQuery
- Swiper
- Select2
- Bootbox

Third-party libraries and assets are included in the repository's `css/`, `js/`, and `webfonts/` directories. Their respective licenses remain applicable; see [Third-party materials](#third-party-materials).

## Requirements

- Apache (or another PHP-capable web server)
- PHP 7.4 or later
- A modern web browser
- XAMPP is a convenient option for local development on Windows

No Composer or npm dependency manifest is included. The project uses the front-end libraries already bundled in the repository.

## Run locally with XAMPP

1. Place the project directory in XAMPP's `htdocs` directory. For example:

   ```text
   C:\xampp\htdocs\DREAMTEXNEW
   ```

2. Start Apache from the XAMPP Control Panel.
3. Open the local homepage in a browser:

   ```text
   http://localhost/DREAMTEXNEW/
   ```

4. Open any page listed in [Page catalogue](#page-catalogue) by appending its relative path.

The pages use PHP includes and therefore need to be served through Apache/PHP; opening the files directly from the filesystem will not render them correctly. No database setup is documented or supplied with this project. Some screens may display illustrative or sample content and should not be assumed to persist data or complete real transactions.

## Project structure

```text
.
├── assets/                 Images, icons, and other visual assets
├── components/             Reusable PHP page sections, grouped by feature
│   ├── account_panel/
│   ├── article/
│   ├── cart/
│   ├── category/
│   ├── common/
│   ├── main_page/
│   ├── offerts_page/
│   ├── offerts_steps/
│   └── product-card/
├── css/                    Bundled third-party CSS
├── js/                     Front-end scripts and bundled libraries
├── scss/                   Project stylesheets and compiled main.css
├── webfonts/               Font files
├── *.php                   Top-level page entry points
├── LICENSE.md              Project copyright and usage terms
└── README.md
```

Top-level PHP files are page entry points. Most reusable page markup lives under `components/` and is included by those entry points. The stylesheet linked by the pages is `scss/main.css`; its source styles are organized in `scss/`.

## Page catalogue

### Home and catalogue

- Home page: [`index.php`](./index.php)
- Home page for a signed-in user: [`index-logged-user.php`](./index-logged-user.php)
- Product category: [`category.php`](./category.php)
- Empty category results: [`category-empty-result.php`](./category-empty-result.php)
- Product details: [`product-card.php`](./product-card.php)
- Storage page: [`storage.php`](./storage.php)

### Cart

- Cart — products: [`cart-step-one.php`](./cart-step-one.php)
- Cart — delivery and payment: [`cart-step-two.php`](./cart-step-two.php)
- Cart — summary: [`cart-step-three.php`](./cart-step-three.php)

### Offers

- Offers list: [`offerts-list.php`](./offerts-list.php)
- Offer flow — step 1: [`offerts-list-step-one.php`](./offerts-list-step-one.php)
- Offer flow — step 2: [`offerts-list-step-two.php`](./offerts-list-step-two.php)
- Offer flow — step 3: [`offerts-list-step-three.php`](./offerts-list-step-three.php)
- Offer flow — step 4: [`offerts-list-step-four.php`](./offerts-list-step-four.php)
- Offer flow — step 5: [`offerts-list-step-five.php`](./offerts-list-step-five.php)

### Customer account — company

- Personal data: [`my-data.php`](./my-data.php)
- Orders: [`my-orders.php`](./my-orders.php)
- Order details: [`my-order-details.php`](./my-order-details.php)
- Billing: [`my-billing.php`](./my-billing.php)
- Addresses: [`my-addresses.php`](./my-addresses.php)
- Address form: [`my-addresses-form.php`](./my-addresses-form.php)

### Customer account — individual

- Personal data: [`individual-my-data.php`](./individual-my-data.php)
- Orders: [`individual-my-orders.php`](./individual-my-orders.php)
- Order details: [`individual-order-details.php`](./individual-order-details.php)
- Addresses: [`individual-my-addresses.php`](./individual-my-addresses.php)
- Address form: [`individual-my-addresses-form.php`](./individual-my-addresses-form.php)

### Other pages

- Registration: [`register.php`](./register.php)
- Password reminder: [`remind-password.php`](./remind-password.php)
- Contact: [`contact-unlogged.php`](./contact-unlogged.php)
- Contact for signed-in users: [`contact-logged.php`](./contact-logged.php)
- News: [`news.php`](./news.php)
- Article: [`article.php`](./article.php)
- Universal content page: [`universal-page.php`](./universal-page.php)

## Development notes

- Keep reusable page sections in the relevant `components/` subdirectory and include them from the top-level PHP page.
- Organize style changes in the appropriate SCSS source file. Ensure the stylesheet served by the pages, `scss/main.css`, is kept in sync.
- Preserve the existing relative asset paths when adding or moving pages.
- The repository does not currently document an automated build, lint, or test command.

## Third-party materials

The project's custom license applies to original project materials owned by the project copyright holder. It does not replace or override licenses for third-party libraries, fonts, or other materials included in the repository. Review and comply with the applicable license terms for those materials before using them.

## Copyright and license

Original project code and materials are protected by copyright and are **not** released under an open-source or Creative Commons license. All rights are reserved by the project copyright holder. Copying, redistribution, modification, publication, and sublicensing require prior written permission. **Commercial use is prohibited in all cases under these terms.**

See [LICENSE.md](./LICENSE.md) for the full terms. The license does not grant ownership of or rights to third-party materials bundled with the project.
