jQuery(document).ready(function($) {
    // Enable parent menu item click feature disabled by theme
    jQuery.Event.prototype.preventDefault = (function() {
        var originalFunc = jQuery.Event.prototype.preventDefault;
        return function() {
            if ($(this.target).hasClass('disableDefault')) { return; }
            originalFunc.call(this);
        }
    }());

    $('.main-menu li.dropdown > a').addClass('disableDefault');
});