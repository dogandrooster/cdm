// Avoid `console` errors in browsers that lack a console.
(function() {
    var method;
    var noop = function noop() {};
    var methods = [
        'assert', 'clear', 'count', 'debug', 'dir', 'dirxml', 'error',
        'exception', 'group', 'groupCollapsed', 'groupEnd', 'info', 'log',
        'markTimeline', 'profile', 'profileEnd', 'table', 'time', 'timeEnd',
        'timeStamp', 'trace', 'warn'
    ];
    var length = methods.length;
    var console = (window.console = window.console || {});

    while (length--) {
        method = methods[length];

        // Only stub undefined methods.
        if (!console[method]) {
            console[method] = noop;
        }
    }
}());

// Place any jQuery/helper plugins in here.

$(function() {
  
  //! CONTROL THE @MEDIA NAVIGATION SHOW/HIDE
  $(document).ready(function(){
	  $('button.btn-tab').click(function(){
		  $('footer').slideToggle();
	  });
  });

  //! CONTROL THE ALERT INFO LINEN SLIDER
  $('button.alertinfo').click(function(){
    $('body').animate({ "top": "+=100px" }, "fast").delay(5000).animate({"top": "-=100px"}, "fast").end();
    $('.notify').fadeIn(10);
  });

});
