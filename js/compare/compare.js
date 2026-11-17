$(function () {
  const $page = $("[data-compare]");

  if (!$page.length) return;

  const maxProducts = Number($page.data("max")) || 5;
  const $table = $page.find(".compare-table");
  const $wrapper = $page.find(".compare-table-wrapper");
  const $toggles = $page.find(".compare-toggle__input");
  const $count = $page.find("[data-compare-count]");

  // ---------------------------------------------------------------------
  // Helpers
  // ---------------------------------------------------------------------

  // Polish plural for "parametr" (1 parametr, 2-4 parametry, 5+ parametrów)
  function paramsLabel(count) {
    if (count === 1) return "1 parametr";
    const mod10 = count % 10;
    const mod100 = count % 100;
    const word =
      mod10 >= 2 && mod10 <= 4 && (mod100 < 12 || mod100 > 14) ? "parametry" : "parametrów";
    return count + " " + word;
  }

  function productsCount() {
    return $table.find("thead .compare-product").length;
  }

  function currentMode() {
    return $page.attr("data-mode");
  }

  function showState(state) {
    $page.find("[data-compare-state]").each(function () {
      this.hidden = this.getAttribute("data-compare-state") !== state;
    });
    $count.prop("hidden", state !== "table");
  }

  function cellText(cell) {
    return $(cell).text().replace(/\s+/g, " ").trim();
  }

  // ---------------------------------------------------------------------
  // Row analysis
  //  - a row is hidden when no product has a value (only placeholders)
  //  - a row is "same" when every product shows the same value
  //  - each group gets its number of rows and of rows with differences
  // ---------------------------------------------------------------------
  function analyzeRows() {
    $table.find(".compare-group-body").each(function () {
      const $body = $(this);
      const $head = $body.prev(".compare-group-head");
      let count = 0;
      let diffCount = 0;

      $body.find(".compare-row").each(function () {
        const $cells = $(this).children(".compare-cell");
        const empty = $cells.toArray().every(function (cell) {
          return $(cell).find(".compare-cell__empty").length > 0;
        });
        const values = $cells.toArray().map(cellText);
        const same = values.every(function (value) {
          return value === values[0];
        });

        $(this).toggleClass("is-empty", empty).attr("data-same", same ? "" : null);

        if (!empty) {
          count += 1;
          if (!same) diffCount += 1;
        }
      });

      $body.add($head).attr({ "data-count": count, "data-diff-count": diffCount });
    });
  }

  function setGroupOpen($button, open) {
    $button.attr("aria-expanded", open ? "true" : "false");
    $("#" + $button.attr("aria-controls")).prop("hidden", !open);
  }

  // ---------------------------------------------------------------------
  // View modes
  //  important - only "Podstawowe informacje", other groups collapsed
  //  all       - every group expanded
  //  diff      - identical rows hidden, groups with differences expanded
  //  custom    - user opened / closed groups by hand (no option checked)
  // ---------------------------------------------------------------------
  function setMode(mode, applyGroups) {
    $page.attr("data-mode", mode);
    $toggles.each(function () {
      this.checked = this.value === mode;
    });

    $table.find(".compare-group-head__toggle[aria-controls]").each(function () {
      const $button = $(this);
      const $head = $button.closest(".compare-group-head");
      const diffCount = Number($head.attr("data-diff-count"));
      const count = Number($head.attr("data-count"));

      $button
        .find(".compare-group-head__count")
        .text(paramsLabel(mode === "diff" ? diffCount : count));

      if (!applyGroups) return;
      if (mode === "important") setGroupOpen($button, false);
      if (mode === "all") setGroupOpen($button, true);
      if (mode === "diff") setGroupOpen($button, diffCount > 0);
    });
  }

  // The three options behave like radios; unchecking the active one keeps
  // the current layout and only drops the filter.
  $toggles.on("change", function () {
    if (this.checked) {
      setMode(this.value, true);
    } else {
      setMode("custom", false);
    }
  });

  $table.on("click", ".compare-group-head__toggle[aria-controls]", function () {
    const $button = $(this);
    setGroupOpen($button, $button.attr("aria-expanded") !== "true");

    // Opening a group by hand leaves the preset; "Tylko różnice" is a filter, so it stays
    if (currentMode() === "important" || currentMode() === "all") {
      setMode("custom", false);
    }
  });

  // ---------------------------------------------------------------------
  // Removing products
  // ---------------------------------------------------------------------
  function fillSingleCard($product) {
    const $card = $page.find('[data-compare-state="single"] .compare-single');
    const $name = $product.find(".compare-product__name");
    const $img = $product.find(".compare-product__image img");
    const $image = $card.find(".compare-single__image");

    $image.attr("href", $name.attr("href")).empty();
    if ($img.length) {
      $image.append($('<img alt="" loading="lazy">').attr("src", $img.attr("src")));
    } else {
      $image.append('<span class="compare-image-placeholder">Zdjęcie produktu niedostępne</span>');
    }

    $card.find(".compare-single__name").attr("href", $name.attr("href")).text($name.text());
    $card
      .find(".compare-single__meta")
      .text(
        "Marka: " +
          $product.data("brand") +
          " / " +
          $product.data("dx-code") +
          " / " +
          $product.data("supplier-code")
      );
    $card
      .find(".compare-single__price")
      .text($product.data("price") + " netto / " + $product.data("unit"));
  }

  function removeProduct($product) {
    hideTooltip();

    // Column index of the product (0 = labels column)
    const index = $product.index();

    $table.find("tr").each(function () {
      const $cells = $(this).children("th, td");
      if ($cells.length === 1) {
        // Group header: one cell spanning the whole table
        $cells.attr("colspan", Number($cells.attr("colspan")) - 1);
      } else {
        $cells.eq(index).remove();
      }
    });
    $table.find("col").eq(index).remove();

    const count = productsCount();
    $table[0].style.setProperty("--compare-cols", count);
    $count.text(count + " z " + maxProducts + " produktów");

    if (count === 1) {
      fillSingleCard($table.find("thead .compare-product"));
      showState("single");
      return;
    }

    analyzeRows();
    const mode = currentMode();
    setMode(mode, mode === "diff");
  }

  $table.on("click", ".compare-product__remove", function () {
    removeProduct($(this).closest(".compare-product"));
  });

  // "Wyczyść porównanie" / "Usuń z porównania" (links to the empty page without JS)
  $page.on("click", "[data-compare-clear]", function (event) {
    event.preventDefault();
    hideTooltip();
    showState("empty");
  });

  // ---------------------------------------------------------------------
  // Future deliveries tooltip (same look as in the cart).
  // Rendered once on <body> so the overflow-x wrapper can't clip it.
  // ---------------------------------------------------------------------
  const $tip = $(
    '<div class="cart-tooltip" role="tooltip" id="compare-tooltip" hidden></div>'
  ).appendTo("body");

  function showTooltip($btn) {
    const rawDeliveries = $btn.data("deliveries");
    const deliveries = Array.isArray(rawDeliveries) ? rawDeliveries : [];

    $tip
      .empty()
      .append(
        $('<strong class="cart-tooltip__title"></strong>').text("Dostawa do magazynu dostawcy")
      );

    if (deliveries.length) {
      deliveries.forEach(function (delivery) {
        $tip.append(
          $('<span class="cart-tooltip__date"></span>').text(delivery.date + " · " + delivery.qty)
        );
      });
    } else {
      $tip.append(
        $('<span class="cart-tooltip__date"></span>').text("Termin kolejnej dostawy nieznany")
      );
    }

    $tip.append(
      $('<p class="cart-tooltip__note"></p>').text("To nie jest termin dostawy do Ciebie.")
    );

    $tip.prop("hidden", false);
    $btn.attr("aria-describedby", "compare-tooltip");

    const iconRect = $btn[0].getBoundingClientRect();
    const tipWidth = $tip.outerWidth();
    const viewportWidth = document.documentElement.clientWidth;

    let left = iconRect.right + 10;
    if (left + tipWidth > viewportWidth) {
      left = iconRect.left - tipWidth - 10;
    }

    $tip.css({
      left: Math.max(8, left) + window.scrollX,
      top: iconRect.top - 4 + window.scrollY,
    });
  }

  function hideTooltip() {
    $tip.prop("hidden", true);
    $page.find(".compare-availability__info").removeAttr("aria-describedby");
  }

  $table.on("mouseenter focusin", ".compare-availability__info", function () {
    showTooltip($(this));
  });
  $table.on("mouseleave focusout", ".compare-availability__info", hideTooltip);
  $wrapper.on("scroll", hideTooltip);
  $(document).on("keydown", function (event) {
    if (event.key === "Escape") hideTooltip();
  });

  // ---------------------------------------------------------------------
  // Group headers stay readable while the table scrolls sideways (mobile):
  // their content is sticky and as wide as the visible part of the table.
  // ---------------------------------------------------------------------
  function updateViewportWidth() {
    $wrapper[0].style.setProperty("--compare-viewport", $wrapper[0].clientWidth + "px");
  }

  $(window).on("resize", updateViewportWidth);

  // ---------------------------------------------------------------------
  // Init - starting view can be set with ?mode=important|all|diff
  // ---------------------------------------------------------------------
  const requestedMode = new URLSearchParams(window.location.search).get("mode");
  const startMode = ["important", "all", "diff"].indexOf(requestedMode) > -1 ? requestedMode : "important";

  analyzeRows();
  setMode(startMode, true);
  updateViewportWidth();
});
