'use strict';

function enableSeoExpand () {
  const showSeoButton = $('[data-control=show-seo]');

  if (showSeoButton.length) {
    showSeoButton.click(expandSeo)
  }

  function expandSeo () {
    const self = $(this);
    const seoContent = $('.main__seo-content');
    const currentHeight = seoContent.height();
    const expandedHeight = seoContent.css('height', 'auto').height();

    self.hide();
    seoContent.height(currentHeight);

    seoContent.stop().animate({height: expandedHeight}, 500);
  }
}

enableSeoExpand();
