function rebuildList () {
    const toListControl = $('[data-control=catalogToList]');
    const toTileControl = $('[data-control=catalogToTile]');
    const list = $('#searchResult');

    if (toListControl && toTileControl && list) {
        toListControl.click(switchToList);
        toTileControl.click(switchToTile);
    }

    function switchToList() {
        const control = $(this);

        if (control.hasClass('is-active')) {
            return;
        }

        list.addClass('is-list');
        control.addClass('is-active');
        toTileControl.removeClass('is-active');

        rebuildCards();
    }

    function switchToTile() {
        const control = $(this);

        if (control.hasClass('is-active')) {
            return;
        }

        list.removeClass('is-list');
        control.addClass('is-active');
        toListControl.removeClass('is-active');

        rebuildCards();
    }

    function rebuildCards () {
        const cards = list.children();

        showPreloader();

        cards.each((i, el) => {
           $(el).toggleClass('cell-4');
           $(el).toggleClass('cell-12')
        });
    }

    function showPreloader () {
        const preloader = $('#catalogPreloader');
        preloader.addClass('is-active');

        setTimeout(() => preloader.removeClass('is-active'),300);
    }
}

$(document).ready(rebuildList);
