'use strict';

// All select must have data-dropdown=toggle nad have child data-dropdown=target
function enableDropdowns () {
  const customSelectMenus = $('[data-select=menu]');
  const shadow = $('#shadow');
  // debugger;

  if (customSelectMenus.length) {
    customSelectMenus.click(setText);
  }

  function setText (e) {
    const self = $(this);
    const target = $(e.target);
    const selectContainer = self.closest('[data-select=container]');
    const selectTextField = selectContainer.find('[data-select=field]');
    const selectHiddenInput = selectContainer.find('input[hidden]');
    const selectMenu = selectContainer.find('[data-select=menu]');

    selectTextField.text(target.text());
    selectHiddenInput.val(target.text());
    selectMenu.slideUp(500);
    shadow.removeClass('active');
  }
}

enableDropdowns();