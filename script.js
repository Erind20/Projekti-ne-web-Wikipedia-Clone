// per mi parandalu errorat ne console
(function() {
    var method;
    var noop = function () {};
    var methods = [
        'assert', 'clear', 'count', 'debug', 'dir', 'dirxml', 'error',
        'exception', 'group', 'groupCollapsed', 'groupEnd', 'info', 'log',
        'markTimeline', 'profile', 'profileEnd', 'table', 'time', 'timeEnd',
        'timeline', 'timelineEnd', 'timeStamp', 'trace', 'warn'
    ];
    var length = methods.length;
    var console = (window.console = window.console || {});

    while (length--) {
        method = methods[length];

        
        if (!console[method]) {
            console[method] = noop;
        }
    }
}());

// Hide show paneli

$(document).ready(function(){
	$(".contentsPanel").each(function() {                
		$(this).prepend('<div class="hidePanel">[hide]</div><div class="showPanel">[show]</div>');
	});
	
	
    $(".hidePanel").click(function(){
		$( this ).siblings('ul').hide( 150, function() { 
			$(this).parent().addClass('minimizedPanel');
		});
    });
    $(".showPanel").click(function(){
		$( this ).siblings('ul').show( 150, function() { 
			$(this).parent().removeClass('minimizedPanel');
		});
    });
	
	
});
// modali javascript
 // modali 
 var modal = document.getElementById("myModal"); //butoni qe e hap modalin
  var btn = document.getElementById("myBtn"); 
  var span = document.getElementsByClassName("close")[0]; // butoni qe e mbyll modalin
   btn.onclick = function() { modal.style.display = "block"; } // me mshel modalin 
   span.onclick = function() { modal.style.display = "none"; } // Me mshel modalin nese klikohet jasht tij 
   window.onclick = function(event) { if (event.target == modal) { modal.style.display = "none"; } };


//  log in text change
   const element = document.getElementById("blue");
   element.addEventListener("click", myFunction1);
   function myFunction1() {
       document.getElementById("user").innerHTML = "Ju jeni lloguar "
    //    document.getElementById("user").style.display = none
     }

