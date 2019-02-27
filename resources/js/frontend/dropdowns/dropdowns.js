'use strict';

function enableDropdowns() {
    const dropdownElements = $('[data-dropdown=toggle]');

    if (dropdownElements.length) {
        dropdownElements.click(showDropdown)
    }

    function showDropdown(e) {
        const shadow = $('#shadow');
        const dropdownToggle = $(this);
        const dropdownContainer = dropdownToggle.closest('[data-dropdown=container]');
        const dropdownContent = dropdownContainer.find('[data-dropdown=menu]');


        if (!dropdownContent && !dropdownContainer) {
            throw Error('Html error, missing required data attributes');
        }

        if (e.target.closest('[data-dropdown=menu]')) {
            return;
        }

        dropdownContent.toggleClass('expanded');
        dropdownContainer.toggleClass('active');
        shadow.toggleClass('active');
        dropdownContent.slideToggle(500);

        shadow.one('click',
            () => {
                shadow.removeClass('active');
                dropdownContent.removeClass('expanded');
                dropdownContainer.removeClass('active');
                dropdownContent.slideUp(500);
            }
        )
    }
}

$(document).ready(enableDropdowns);
