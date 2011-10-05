/* ---------------------------------------------
http://adipalaz.com/experiments/jquery/generated_tabs.html
Requires: jQuery v1.3+
When using this script, please keep this notice intact.
------------------------------------------------ */

(function($) {
$.fn.gTabs = function(options) {
    var defaults = {
        section : 'div', // the container element of the individual sections
        head : 'h3', // the section heading
        prefix : 'section', // the prefix of the hash
        def : 1, // the section to be shown by default
        hideHead : 'true' // whether to show or to hide the section headings
    };
    var o = $.extend({}, defaults, options);
    
    return this.each(function() {
        var container = $(this),
            prefixLength = o.prefix.length,
            num = location.hash.slice(prefixLength + 1) || o.def;
        
        // insert 'ul' before the the element that contains the sections:
        container.before('<ul id="tabs"></ul>');

        // the 'link text' in each tab is generated using the heading of the corresponding section:
        container.find('>' + o.section).each(function(i){
          $('#tabs').append('<li><a class="tab" href="#' + o.prefix + (i+1) + '">' + $(this).prev(o.head).text() + '</a></li>');
          if(o.hideHead) $(this).prev(o.head).hide();
        });
        
        // hide all sections except the current(or default) one, and add class='active' to the current(or default) tab:
        container.find('>' + o.section + ':not(:eq(' + (num -1) + '))').hide().end()
        .prev('#tabs').find('a:eq(' + (num -1) + ')').addClass('active');

        $('#tabs a').click(function(thisTab) {
              var thisTab = $(this).closest('#tabs').find('a').index(this);
              $(this).addClass('active').parent().siblings('li').find('a.active').removeClass('active');
              $(this).closest('#tabs').next(container).find('>' + o.section + ':eq(' + thisTab + ')').fadeIn(400).siblings(o.section + ':visible').hide();
        });
    });
};
})(jQuery);// JavaScript Document