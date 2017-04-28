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

    $('body').on('click', "#header-mobile i", is_mobileMethods.clickHeaderMobile);
    $('body').on('click', "#mobile-menu a", is_mobileMethods.clickMobileMenuLink);
    $('body').on('click', "#footer-content .row-1 .footer-column", is_mobileMethods.clickFooterContent);
    $('body').on('click', ".header-column", is_mobileMethods.clickHeaderColumn);
    $('body').on('click', ".back-list-arrow", is_mobileMethods.clickBackListArrow);

});
