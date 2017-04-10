/*
    In this section will be added some necessary functions and code when
    the page loads and is ready.
    The manage of the DOM elements events will be here too.
*/

$(document).ready(function() {

    $("#header-panel").resize(function(){
        var _this = $(this);
        $('#header-spacer').stop().animate({height: _this.height()}, 300);
    });
    // Detectamos cuando el usuario desplace la pantalla
    /*window.onscroll = function (){
        var sv = $(document).scrollTop();
        //console.log(+sv);
    }*/
    //$(domEl.div_recurrent).delegate('click', '.catalog_cars_wrapper a.switch-catalog', addDelegatMethods.delegate);
    /*$(domEl.div_recurrent).on('click', '#data-swift-sport', catalogMethods.preventDefault_data_swift_sport);
    $(domEl.div_recurrent).on('click', '#data-swift', catalogMethods.preventDefault_data_swift);
    $(domEl.div_recurrent).on('click', '#data-kizashi', catalogMethods.preventDefault_data_kizashi);
    $(domEl.div_recurrent).on('click', '#data-s-cross', catalogMethods.preventDefault_data_s_cross);
    $(domEl.div_recurrent).on('click', '#data-grand-vitara', catalogMethods.preventDefault_data_grand_vitara);
    $(domEl.div_recurrent).on('click', '#data-ciaz', catalogMethods.preventDefault_data_ciaz);

    $(domEl.div_recurrent_body).on('click', '#data-swift-sport', catalogMethods.footer_preventDefault_data_swift_sport);
    $(domEl.div_recurrent_body).on('click', '#data-swift', catalogMethods.footer_preventDefault_data_swift);
    $(domEl.div_recurrent_body).on('click', '#data-kizashi', catalogMethods.footer_preventDefault_data_kizashi);
    $(domEl.div_recurrent_body).on('click', '#data-s-cross', catalogMethods.footer_preventDefault_data_s_cross);
    $(domEl.div_recurrent_body).on('click', '#data-grand-vitara', catalogMethods.footer_preventDefault_data_grand_vitara);
    $(domEl.div_recurrent_body).on('click', '#data-ciaz', catalogMethods.footer_preventDefault_data_ciaz);*/

    $(domEl.div_recurrent).on('click', '.main-buttons a', warrantyMethods.main_buttons);
    $(domEl.div_recurrent).on('click', 'a.close-warranty-button', warrantyMethods.close_warranty_button);

    // CLICK HOME CROSS
    //$(domEl.div_recurrent).on('click', '#home-scross', financingByModelsMethods.clickGoHomeCross);
    $(domEl.div_recurrent).on('click', '#home-swift-2016', financingByModelsMethods.clickGoHomeSwift_2016);
    $(domEl.div_recurrent).on('click', '#home-kizashi-2016', financingByModelsMethods.clickGoHomeKizashi_2016);
    $(domEl.div_recurrent).on('click', '#go-landing-nueva-vitara', financingByModelsMethods.clickGoHomeNuevaVitara);
    

    // DINAMIC LIST CONCESSIONAIRES
    // CLICK DINAMIC LIST
    //$(domEl.div_recurrent).on('click', '#concessionaires-dynamic-list li.concessionaire, #concessionaires-dynamic-list a', concessionairesMethods.preventDefault_dinamic_list);
    // CLOSE CONCESIONAIRES
    // CLICK CLOSE CONCESSIONAIRES
    //$(domEl.div_recurrent).on('click', 'a.concessionaire-close', concessionairesMethods.preventDefault_concessionaires_close);

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
     [METHOS Control] Currency Page Transition
    \* ------------------------------------------------------ */

    /* ------------------------------------------------------ *\
        EVENT CONTROL
    \* ------------------------------------------------------ */

    // BTN SELECTS
    $(document).on('click', '.btn-select', btnSelectMethod.documentBtn_Select);
    $(document).on('click', btnSelectMethod.documentCloseBtn_Select);

    
    //$(domEl.div_recurrent).on('click', "#home-scross", panelMenuModelsByModel.clickGoNewVitara);

    // GENERAL CLICK RADIO & CHECKBOX
    $(domEl.div_recurrent).on('change', ":checkbox", changeInputsMethods.clickChangeCheckbox);
    $(domEl.div_recurrent).on('click', ".label-radio", changeInputsMethods.clcikChangeRadio);
    // EVENT CLICK GO INDEX
    $(domEl.div_recurrent_body).on('click', domEl.button_return_index, actionMenuBarsMethods.clickReturnIndex);
    // EVENT CLICK GO GROUP
    $(domEl.div_recurrent_body).on('click', domEl.button_go_group, actionMenuBarsMethods.clixkGoGroup);
    // EVENT CLICK GO CONCESONARIES
    $(domEl.div_recurrent_body).on('click', domEl.button_go_concesionaries, actionMenuBarsMethods.clickGoConcesinary);
    // EVENT CLICK GO CATALOGS
    $(domEl.div_recurrent_body).on('click', domEl.button_go_catalogs, actionMenuBarsMethods.clickGoCatalogs);
    //$(domEl.div_recurrent).delegate('a.switch-catalog', 'click', '.catalog_cars_wrapper', addDelegatMethods.preventDefaultCatalogCarsWrapper);
    // EVENT CLICK GO CONTACT US
    $(domEl.div_recurrent_body).on('click', domEl.button_go_contact, actionMenuBarsMethods.clickGoContactUs);
    // FORM CONTACT
    $(domEl.div_recurrent).on('focusout', '#contact_name', validateMethods.validate_input);
    $(domEl.div_recurrent).on('focusout', '#contact_lastname', validateMethods.validate_input);
    $(domEl.div_recurrent).on('focusout', '#contact_email', validateMethods.validate_input);
    $(domEl.div_recurrent).on('change', '#contact_department', validateMethods.validate_input);
    $(domEl.div_recurrent).on('change', '#contact_car_key', validateMethods.validate_input);
    $(domEl.div_recurrent).on('focusout', '#contact_message', validateMethods.validate_input);
    // SEND FORM CONTACT
    $(domEl.div_recurrent).on('keyup', '.con_validate_input', formContactMethods.validate_fields_keyup);
    $(domEl.div_recurrent).on('change', '.con_validate_select', formContactMethods.validate_fields_change);
    $(domEl.div_recurrent).on('click', '#suk_contact_submit', formContactMethods.sendContactForm);
    // FORM TEST DRIVE MODEL
    $(domEl.div_recurrent).on('change', '#test_drive_model_date', validateMethods.validate_input);
    $(domEl.div_recurrent).on('focusout', '#test_drive_model_name', validateMethods.validate_input);
    $(domEl.div_recurrent).on('focusout', '#test_drive_model_lastname', validateMethods.validate_input);
    $(domEl.div_recurrent).on('focusout', '#test_drive_model_email', validateMethods.validate_input);
    $(domEl.div_recurrent).on('focusout', '#test_drive_model_tel', validateMethods.validate_input);
    $(domEl.div_recurrent).on('keypress', '#test_drive_model_tel', inputValMetdods.isIntegerKP);
    // FORM FINANCING GENERAL
    $(domEl.div_recurrent).on('focusout', '#financing_general_name', validateMethods.validate_input);
    $(domEl.div_recurrent).on('focusout', '#financing_general_lastname', validateMethods.validate_input);
    $(domEl.div_recurrent).on('focusout', '#financing_general_email', validateMethods.validate_input);
    $(domEl.div_recurrent).on('focusout', '#financing_general_tel', validateMethods.validate_input);
    $(domEl.div_recurrent).on('keypress', '#financing_general_tel', inputValMetdods.isIntegerKP);
    // FORM FINANCING BY MODEL
    /*$(domEl.div_recurrent).on('focusout', '#financing_by_model_name', validateMethods.validate_input);
    $(domEl.div_recurrent).on('focusout', '#financing_by_model_lastname', validateMethods.validate_input);
    $(domEl.div_recurrent).on('focusout', '#financing_by_model_email', validateMethods.validate_input);
    $(domEl.div_recurrent).on('focusout', '#financing_by_model_tel', validateMethods.validate_input);
    $(domEl.div_recurrent).on('keypress', '#financing_by_model_tel', inputValMetdods.isIntegerKP);
    $(domEl.div_recurrent).on('focusout', '#financing_by_model_message', validateMethods.validate_input);
    $(domEl.div_recurrent).on('focusout', '.fg_validate_input', validateMethods.validate_input);
    */
    // SEND FORM FINANCING GENERAL
    $(domEl.div_recurrent).on('keyup', '.fg_validate_input', formFinancingGeneral.validate_fields_keyup);
    $(domEl.div_recurrent).on('click', '#suk_financing_general_submit', formFinancingGeneral.sendFinancingGeneralForm);

    // SEND FORM FINANCING BY MODEL
    $(domEl.div_recurrent).on('focusout', '.fbm_validate_input', validateMethods.validate_input);
    //$(domEl.div_recurrent).on('change', '.fbm_validate_select', financing_nueva_vitara_method.fbm_validate_select);

    /*
    $(domEl.div_recurrent).on('keyup', '.fbm_validate_input', formFinancingByModelSwiftSport.validate_fields_keyup);
    $(domEl.div_recurrent).on('keyup', '.fbm_validate_input', formFinancingByModelSwift.validate_fields_keyup);
    $(domEl.div_recurrent).on('keyup', '.fbm_validate_input', formFinancingByModelKizashi.validate_fields_keyup);
    $(domEl.div_recurrent).on('keyup', '.fbm_validate_input', formFinancingByModelGrandVitara.validate_fields_keyup);
    $(domEl.div_recurrent).on('keyup', '.fbm_validate_input', formFinancingByModelSCross.validate_fields_keyup);
    $(domEl.div_recurrent).on('keyup', '.fbm_validate_input', formFinancingByModelCiaz.validate_fields_keyup);

    $(domEl.div_recurrent).on('click', '#suk_financing_by_model_submit_swift_sport', formFinancingByModelSwiftSport.sendFinancingByModelForm);
    $(domEl.div_recurrent).on('click', '#suk_financing_by_model_submit_swift', formFinancingByModelSwift.sendFinancingByModelForm);
    $(domEl.div_recurrent).on('click', '#suk_financing_by_model_submit_kizashi', formFinancingByModelKizashi.sendFinancingByModelForm);
    $(domEl.div_recurrent).on('click', '#suk_financing_by_model_submit_grand_vitara', formFinancingByModelGrandVitara.sendFinancingByModelForm);
    $(domEl.div_recurrent).on('click', '#suk_financing_by_model_submit_s_cross', formFinancingByModelSCross.sendFinancingByModelForm);
    $(domEl.div_recurrent).on('click', '#suk_financing_by_model_submit_ciaz', formFinancingByModelCiaz.sendFinancingByModelForm);
    */
    
    // SEND FORM TEST DRIVE MODEL
    $(domEl.div_recurrent).on('keyup', '.tdm_validate_input', formTestDriveMethods.validate_fields_keyup);
    $(domEl.div_recurrent).on('click', '#suk_test_dirve_model_submit', formTestDriveMethods.sendTestDriveForm);
    // FINISH SEND TEST DRIVE MODEL
    $(domEl.div_recurrent).on('click', '#step-2-end', formTestDriveMethods.finchNavigateReturn);
    // FORM NEWSLETTER
    $(domEl.div_recurrent_body).on('focusout', '.news_validate_input', validateMethods.validate_input);
    // EVENT CLICK GO PRIVACY NOTICE
    $(domEl.div_recurrent_body).on('click', domEl.button_go_privacy_notice, actionMenuBarsMethods.clickGoPrivacy);
    // EVENT CLICK GO LEGAL TERMS
    $(domEl.div_recurrent_body).on('click', domEl.button_go_legal_terms, actionMenuBarsMethods.clickGoLegalTerms);
    // HEADER PANEL
    $(domEl.div_recurrent_body).on('click', 'a.expand-header', openPanelMenuMethods.clickPanel_general);
    $('#footer-wrapper').on('click', domEl.header_models_button, openPanelMenuMethods.clickPanel_general);

    // EVENT CLICK GO MODEL
    $(domEl.div_recurrent_body).on('click', domEl.header_models_button, openPanelMenuMethods.clickModelsPanel);
    //$(domEl.div_recurrent_body).on('click', domEl.header_models_button, openPanelMenuMethods.clickModelsPanel);

    $('#mobile-menu').on('click', domEl.mobile_models_button, openPanelMenuMethods.clickModelsPanel);

    // EVENT CLICK GO BY MODEL
    $(domEl.div_recurrent_body).on('click', '#go-model-swift-sport', panelMenuModelsByModel.clickGoSwiftSport);
    $(domEl.div_recurrent_body).on('click', '#go-model-swift', panelMenuModelsByModel.clickGoSwift);
    //$(domEl.div_recurrent_body).on('click', '#go-model-sx4-crossover', panelMenuModelsByModel.clickGoSx4Crossover);
    //$(domEl.div_recurrent_body).on('click', '#go-model-sx4-sedan', panelMenuModelsByModel.clickGoSx4Sedan);
    $(domEl.div_recurrent_body).on('click', '#go-model-kizashi', panelMenuModelsByModel.clickGoKizashi);
    $(domEl.div_recurrent_body).on('click', '#go-model-grand-vitara', panelMenuModelsByModel.clickGoGrandVitara);
    $(domEl.div_recurrent_body).on('click', '#go-model-s-cross', panelMenuModelsByModel.clickGoSCross);
    $(domEl.div_recurrent_body).on('click', '#go-model-ciaz', panelMenuModelsByModel.clickGoCiaz);
    $(domEl.div_recurrent_body).on('click', '#go-model-nueva-vitara', panelMenuModelsByModel.clickGoNuevaVitara);
    // EVENT CLICK GO FINANCING
    $(domEl.div_recurrent_body).on('click', domEl.header_financing_button, openPanelMenuMethods.clickFinnacingPanel);
    $(domEl.div_recurrent).on('click', domEl.go_financing, openPanelMenuMethods.clickFinnacingPanel);

    $('#mobile-menu').on('click', domEl.mobile_financing_button, openPanelMenuMethods.clickFinnacingPanel);

    $(domEl.div_recurrent).on('click', '#tdr_end', formFinancingGeneral.finchNavigateReturn);
    // EVENT CLICK GO FINANCING BY MODELS
    $(domEl.div_recurrent).on('click', '#go-financing-ignis', financingByModelsMethods.clickGoFinancing);
    $(domEl.div_recurrent).on('click', '#go-financing-swift-sport', financingByModelsMethods.clickGoFinancing);
    $(domEl.div_recurrent).on('click', '#go-financing-swift', financingByModelsMethods.clickGoFinancing);
    $(domEl.div_recurrent).on('click', '#go-financing-kizashi', financingByModelsMethods.clickGoFinancing);
    $(domEl.div_recurrent).on('click', '#go-financing-grand-vitara', financingByModelsMethods.clickGoFinancing);
    $(domEl.div_recurrent).on('click', '#go-financing-s-cross', financingByModelsMethods.clickGoFinancing);
    $(domEl.div_recurrent).on('click', '#go-financing-ciaz', financingByModelsMethods.clickGoFinancing);
    $(domEl.div_recurrent).on('click', '#go-financing-nueva-vitara', financingByModelsMethods.clickGoFinancing);
    // EVENT CLICK GO OWNERS
    $(domEl.div_recurrent_body).on('click', domEl.header_owners_button, openPanelMenuMethods.clickOwnersPanel);
    // EVENT CLICK GO BEFORE BYU
    $(domEl.div_recurrent_body).on('click', domEl.header_before_buy_button, openPanelMenuMethods.clickBeforeByPanel);
    // EVENT CLICK GO CLOSE PANEL
    $(domEl.div_recurrent_body).on('click', domEl.button_close_model_panel_menu, closePanelMenuMethods.closePanelModels);
    $(domEl.div_recurrent_body).on('click', domEl.button_close_financing_panel_menu, closePanelMenuMethods.closePanelFinancing);
    $(domEl.div_recurrent_body).on('click', domEl.button_close_owners_panel_menu, closePanelMenuMethods.closePanelOwners);
    $(domEl.div_recurrent_body).on('click', domEl.button_close_before_buy_panel_menu, closePanelMenuMethods.closePanelBeforeBuy);
    // MOBILE MENU
    $(domEl.div_recurrent_body).on('click', "#header-mobile i", is_mobileMethods.clickHeaderMobile);
    $(domEl.div_recurrent_body).on('click', "#mobile-menu a", is_mobileMethods.clickMobileMenuLink);
    $(domEl.div_recurrent_body).on('click', "#footer-content .row-1 .footer-column", is_mobileMethods.clickFooterContent);
    $(domEl.div_recurrent_body).on('click', ".header-column", is_mobileMethods.clickHeaderColumn);
    $(domEl.div_recurrent_body).on('click', ".back-list-arrow", is_mobileMethods.clickBackListArrow);
    // EVENTS CLIK BLOCK BY MODEL
    $(domEl.div_recurrent_body).on('click', '#model-test-drive-flag-link', modelsMenuMethods.preventDefault_flag_link);
    $(domEl.div_recurrent_body).on('click', '#prueba-de-manejo', modelsMenuMethods.preventDefault_test_drive);
    $(domEl.div_recurrent_body).on('click', '#accesorios', modelsMenuMethods.preventDefault_accesories);
    $(domEl.div_recurrent_body).on('click', '#galeria', modelsMenuMethods.preventDefault_galery);
    $(domEl.div_recurrent_body).on('click', '#precios', modelsMenuMethods.preventDefault_prices);
    $(domEl.div_recurrent_body).on('click', '#caracteristicas', modelsMenuMethods.preventDefault_characterics);
    $(domEl.div_recurrent_body).on('click', '.top', modelsMenuMethods.preventDefault_class_top);
    $(domEl.div_recurrent_body).on('click', '#top', modelsMenuMethods.preventDefault_id_top);

    // EVENT SWAP DISPLAY TABLES
    $(domEl.div_recurrent).on('click', 'a.swap-display-tables', modelsMenuMethods.preventDefaultSwapDisplayTables);
    // EVENT CAR COMPARATIVE COL CLOSE
    $(domEl.div_recurrent).on('click', '.car-comparative-col div.close', modelsMenuMethods.carComparativeCol_close);
    // EVENT CAR COMPARATIVE LIST OPEN
    $(domEl.div_recurrent).on('click', '#car-comparative-list a.open', modelsMenuMethods.carComparativeList_open);
    // FANCYBOX
    $(domEl.div_recurrent).on('click', 'a.gallery-box-link', fancyBoxMethods.onClickGalery);
    //Fancybox Trigger in all gallery elements
    $('a.fancybox-thumbs').on('click mouseup', function( e ){
        e.preventDefault();
    }).fancybox({
        arrows    : true,
        autoSize    : false,
        closeBtn  : true,
        fitToView   : false,
        height      : '70%',
        helpers : {
            overlay: {
                locked: false
            },
            title : {
                type : 'over'
            },
            thumbs : {
                width  : 50,
                height : 50
            }
        },
        maxHeight   : 550,
        maxWidth    : 1200,
        nextEffect  : 'none',
        nextClick   : true,
        padding     : 0,
        prevEffect  : 'none',
        width       : '70%'
    });

    //Specifications Slider controls and functionality
    var specifications_i = 0;
    var specifications_total =  $('.specifications-wrapper .specification').length - 1;
    $(domEl.div_recurrent).on('click', domEl.button_specifications_controls, function( e ){
        e.preventDefault();
        var direction, fake_div, copy_div;
        $('.specifications-wrapper .fake_div').remove();
        if( $(this).attr('href') == '#left' ){
            if( specifications_i > 0 ){
                specifications_i--;
            }else{
                specifications_i = specifications_total ;
                fake_div = true;
                copy_div = $('#features-wrapper .specification').eq( 0).clone();
                copy_div.addClass('fake_div');
                $('#features-wrapper').append( copy_div ).css({marginLeft: ( ( specifications_i + 1 ) * -100 )+'%' }).stop().animate({marginLeft: ( specifications_i * -100) + '%' });
            }
        }else{
            if( specifications_i < specifications_total ){
                specifications_i++;
            }else{
                fake_div = true;
                specifications_i = 0;
                copy_div = $('#features-wrapper .specification').eq( specifications_i -1  ).clone();
                $('#features-wrapper').prepend( copy_div ).css({marginLeft: '100%' }).stop();
                copy_div.addClass('fake_div').css({marginLeft:"-99%", position:"absolute", width: "100%"}).stop().animate({marginLeft:'-100%'} );
                $('#features-wrapper').animate({marginLeft: '0'});
            }
        }
        if( !fake_div ){
            $('.specifications-wrapper .specifications').stop().animate({marginLeft: ( specifications_i * -100) + '%' });
        }
    });
    $("#versions-price-table").find(".pdf-download:gt(2)").css("visibility", "hidden");
    var $display_tables = $('.display-tables'), display_vct_class = 'prices';
    function display_versions_comparative(){
        var $div;
        $display_tables.each(function(){
            $div = $(this);
            if( display_vct_class == $div.data('display-table') ){
                $div.fadeOut().fadeIn(1000);
                //modifyHeight("#comparative-space-wrapper .suzuki-table .body .row");
            }else{
                $div.hide();
            }
        });
    }
    $('a.swap-display-tables').on('click', function( e ){
        e.preventDefault();
        display_vct_class = $(this).data('display-table');
        $.scroll_to('precios');
        var timeout = setTimeout(function(){
            display_versions_comparative();
        }, 900 );
    });
    display_versions_comparative();

    // FINANCING BY MODEL
    // VALIDATEION MESSAGE
    $(domEl.div_recurrent).on('focusout', domEl.validate_required, validateMethods.validate_input);
    // INPUTS ENVENTS
    $(domEl.div_recurrent).on('keyup', '.lead-api-input', set_form_leads_method.keyInput);
    // BUTTON FORM LEADS
    $(domEl.div_recurrent).on('click', "#leads_api_save", set_form_leads_method.send_form_leads);
 
    /*var $win = $(window);
    $win.scroll(function () {
        if ($win.scrollTop() == 0) {
            console.log('Scrolled to Page Top');
        } else if ($win.height() + $win.scrollTop() == $(document).height()) {
            console.log('Scrolled to Page Bottom');
        }
    });*/
    var _top = $(window).scrollTop();
    var _direction;
    $(window).scroll(function(){
        var _cur_top = $(window).scrollTop();
        if(_top < _cur_top)
        {
            _direction = _cur_top;
        }
        else
        {
            _direction = _cur_top;
        }
        _top = _cur_top;
        console.log(_direction);
    });
});
