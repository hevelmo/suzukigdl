$(document).ready(function() {

    $("#header-panel").resize(function(){
        var _this = $(this);
        $('#header-spacer').stop().animate({height: _this.height()}, 300);
    });

    /* ------------------------------------------------------ *\
     [METHOS Control] Serialize Form
    \* ------------------------------------------------------ */

    //This method change a form into a JSON
    $.fn.serializeFormJSON = function() {
        var o = {};
        var a = this.serializeArray();
        $.each(a, function() {
            if (o[this.name]) {
                if (!o[this.name].push) {
                    o[this.name] = [o[this.name]];
                }
                o[this.name].push(this.value || '');
            } else {
                o[this.name] = this.value || '';
            }
        });
        return o;
    };


    /* ------------------------------------------------------ *\
     [METHOS Control] Currency Format
    \* ------------------------------------------------------ */

    Number.prototype.format = function(n, x) {
        var re = '(\\d)(?=(\\d{' + (x || 3) + '}) + ' + (n > 0 ? '\\.' : '$') + ')';
        return this.toFixed(Math.max(0, ~~n)).replace(new RegExp(re, 'g'), '$1,');
    };

    /* ------------------------------------------------------ *\
        EVENT CONTROL
    \* ------------------------------------------------------ */

    // GENERAL CLICK RADIO & CHECKBOX
    $(":checkbox").on('change', changeInputsMethods.clickChangeCheckbox);
    $(".label-radio").on('click', changeInputsMethods.clcikChangeRadio);

    $('body').on('click', "#header-mobile i", is_mobileMethods.clickHeaderMobile);
    $('body').on('click', "#mobile-menu a", is_mobileMethods.clickMobileMenuLink);
    $('body').on('click', "#footer-content .row-1 .footer-column", is_mobileMethods.clickFooterContent);
    $('body').on('click', ".header-column", is_mobileMethods.clickHeaderColumn);
    $('body').on('click', ".back-list-arrow", is_mobileMethods.clickBackListArrow);

    $('body').on('click', ".scroll-up", up.init);

    // HEADER PANEL
    $('body').on('click', 'a.expand-header', openPanelMenuMethods.clickPanel_general);
    //$('#footer-wrapper').on('click', domEl.header_models_button, openPanelMenuMethods.clickPanel_general);

    // EVENT CLICK GO OWNERS
    $('body').on('click', '#header-owners-button', openPanelMenuMethods.clickOwnersPanel);
    // EVENT CLICK GO BEFORE BYU
    $('body').on('click', '#header-before-buy-button', openPanelMenuMethods.clickBeforeByPanel);
    
    $('body').on('click', '#header-catalog-button', openPanelMenuMethods.clickCatalogPanel);

    // EVENT CLICK GO CLOSE PANEL
    //$('body').on('click', domEl.button_close_model_panel_menu, closePanelMenuMethods.closePanelModels);
    //$('body').on('click', domEl.button_close_financing_panel_menu, closePanelMenuMethods.closePanelFinancing);
    $('body').on('click', '#close-owners-panel', closePanelMenuMethods.closePanelOwners);
    $('body').on('click', '#close-before-buy-panel', closePanelMenuMethods.closePanelBeforeBuy);
    $('body').on('click', '#close-catalog-panel', closePanelMenuMethods.closePanelCatalog);

    //smooth scroll to top
    $("body").on('click', '.cd-top', scrolltotop.init);
    // 
    $('#suk_model_newsletter').on('click', newsletter.news);

    // VALIDATE FORM ITEMS
    $('body').on('focusout', '.validate-required', function() { $.validate_input( $(this) ) });

    // TEST DRIVE FORM
    $('body').on("click", '.testdrive-form-send', testDriveForm.clickSend);
    // FINANCING FORM
    $('body').on("click", '.financing-form-send', financingForm.clickSend);
    // CONTACT FORM
    $('body').on("click", '.contact-form-send', contactForm.clickSend);

    /*
    $('#top-bar a.catalogo-dropdown').hover(
        function () {
            //mostra sottomenu
            $('ul.list-dropdown', this).stop(true, true).delay(50).slideDown(100);
 
        }, 
        function () {
            //nascondi sottomenu
            $('ul.list-dropdown', this).stop(true, true).slideUp(200);        
        }
    );
    $('body').on('click', 'a.catalogo-dropdown', dropdown_methods.dropdown);
    $('a.catalogo-dropdown','#header-spacer').on('click', openMenuMethods.clickOpenCatalog);
    */
    $('a.catalogo-dropdown').hover(function(e) {
         $('.inner-menu').find('div.list-catalog ul.list-dropdown').stop(true, true).delay(50).slideDown(100).css({overflow: "visible"});
    },
    function(e) {
         $('.inner-menu').find('div.list-catalog ul.list-dropdown').stop(true, true).slideUp(200).css({overflow: "hidden"});
    });
});
