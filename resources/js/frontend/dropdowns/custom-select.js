'use strict';

// All select must have data-dropdown=toggle and have child data-dropdown=target
function enableCustomSelects () {
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
    const selectTextField = selectContainer.find('[data-select=text-field]');
    const selectHiddenInput = selectContainer.find('input[hidden]');
    const selectMenu = selectContainer.find('[data-select=menu]');

    if (!selectContainer && !selectTextField && !selectHiddenInput) {
      throw Error('Html error, missing required data attributes');
    }

    selectTextField.text(target.text());
    selectHiddenInput.val(target.text());
    selectMenu.slideUp(500);
    shadow.removeClass('active');
  }
}

$(document).ready(enableCustomSelects);
