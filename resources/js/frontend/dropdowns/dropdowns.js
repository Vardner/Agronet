'use strict';

function enableDropdowns () {
  const dropdownElements = $('[data-dropdown=toggle]');

  if (dropdownElements.length) {
    dropdownElements.click(showDropdown)
  }

  function showDropdown (e) {
    const shadow = $('#shadow');
    const dropdown = $(this);
    const dropdownContent = dropdown.find('[data-dropdown=target]');

    if (e.target.closest('[data-dropdown=target]')) {
      return;
    }

    shadow.toggleClass('active');
    dropdownContent.slideToggle(500);

    shadow.click(
        () => {
          shadow.removeClass('active');
          dropdownContent.removeClass('active');
          dropdownContent.slideUp(500);
        }
    )
  }
}

enableDropdowns();