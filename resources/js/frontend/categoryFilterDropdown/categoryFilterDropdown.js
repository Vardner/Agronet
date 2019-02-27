function enableFilterDropdowns () {
  const filterDropdowns = $('[data-dropdown-filter=toggle]');

  if (filterDropdowns.length) {
    filterDropdowns.click(toggleDropdown)
  }

  function toggleDropdown () {
    const toggle = $(this);
    const container = toggle.closest('[data-dropdown-filter=container]');
    const dropdown = container.find('[data-dropdown-filter=inner]');

    toggle.toggleClass('is-active');
    dropdown.toggleClass('is-collapsed');
    dropdown.slideToggle('400')
  }
}

$(document).ready(enableFilterDropdowns);