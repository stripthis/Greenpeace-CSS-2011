/*************************************************************************
 * MAIN.JS -  Common Javascript Features                     ♥  
 * @copyright (c) 2011 Greenpeace International               ` _☮)
 * @updated   2011-05-10                                       _(\)
 *************************************************************************/
/**
 * Greenpeace Javascript API 
 */
jQuery(function($) {
  /**
   * Search Box Behavior
   * @param 'colorActive' text color when active
   * @param 'colorInactive' text color when inactive
   * @param 'value' input text field value
   * @return this (because some like to chain to things)
   */
  $.fn.jSearch = function(o) { 
    // configuable elements
    o = $.extend({
      'colorActive' : '#000',   // text color when active
      'colorInactive' : '#AAA', // text color when inactive
      'value' : 'search'        // value in input textfield 
    }, o || {});

    return this.each(function() {
      // Init
      {
        if($(this).val() != '' && o.value == '') {
         o.value = $(this).val();
        }
        $(this).val(o.value).css('color',o.colorInactive);
      }
      // Bind events behavior
      $(this)
        .click(function(){
          if($(this).val() == o.value) {
            $(this).val('').css('color',o.colorActive);
          }
        })
       .blur(function(){
         if($(this).val() == '' || $(this).val() == o.value) {
            $(this).css('color', o.colorInactive).val(o.value);
         }
       });
    });
  }

  /**
   * Country Selector
   */
  $.fn.jCountrySelector = function(o) {
    // configurable elements
    o = $.extend({      
    }, o || {});
    // chainable
    return this.each(function() {
    });
  }
});
/**
 * Main
 */
$(function() {
  $('.search .text input').jSearch();
});
