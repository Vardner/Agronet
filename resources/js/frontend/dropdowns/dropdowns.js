'use strict';

function enableDropdowns() {
    const dropdownElements = $('[data-dropdown=toggle]');

    if (dropdownElements.length) {
        dropdownElements.click(showDropdown)
    }

    function showDropdown(e) {
      if (e.target.closest('[data-dropdown=menu]')) {
        return;
      }
        const windowWidth = window.innerWidth;
        const shadow = $('#shadow');
        const dropdownToggle = $(this);
        const dropdownContainer = dropdownToggle.closest('[data-dropdown=container]');
        const dropdownContent = dropdownContainer.find('[data-dropdown=menu]');

        if (!dropdownContent && !dropdownContainer) {
            throw Error('Html error, missing required data attributes');
        }

        if ( windowWidth > 1023) {
          dropdownContent.toggleClass('is-expanded');
          dropdownContainer.toggleClass('is-active');
          shadow.toggleClass('is-active');
          dropdownContent.slideToggle(500);

          shadow.one('click',
              () => {
                shadow.removeClass('is-active');
                dropdownContent.removeClass('is-expanded');
                dropdownContainer.removeClass('is-active');
                dropdownContent.slideUp(500);
              }
          )
        } else {
          dropdownContent.toggleClass('is-expanded');
          dropdownContainer.toggleClass('is-active');
          shadow.toggleClass('is-active is-dark');
        }
    }
}

$(document).ready(enableDropdowns);
