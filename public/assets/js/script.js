// Onclick of .sites__list__item, add .active to this one and remove from others

jQuery(document).ready(function() {
    jQuery('.sites__list__item').click(function() {
        jQuery('.sites__list__item').removeClass('active');
        jQuery(this).addClass('active');

        // Get data-name and replace site__header__info h2 with it
        var siteName = jQuery(this).data('name');
        var siteUrl = jQuery(this).data('url');
        jQuery('.site__header__info h2').text(siteName);
        jQuery('.site__header__info span').text(siteUrl);
    });

    jQuery('.tabs__labels__label').click(function() {
        jQuery('.tabs__labels__label').removeClass('active');
        jQuery(this).addClass('active');

        // Get the data-tabid
        var tabId = jQuery(this).data('tabid');
        jQuery('.tabs__content__item').removeClass('active');
        jQuery('.tabs__content__item[data-tabid="' + tabId + '"]').addClass('active');
    });

    // On typing of sites__search input, we're going to filter the list by the input value compared to the data-name
    jQuery('.sites__search input').keyup(function() {
        var searchValue = jQuery(this).val().toLowerCase();
        jQuery('.sites__list__item').each(function() {
            var siteName = jQuery(this).data('name').toLowerCase();
            if(siteName.indexOf(searchValue) > -1) {
                jQuery(this).show();
            } else {
                jQuery(this).hide();
            }
        });
    });
});