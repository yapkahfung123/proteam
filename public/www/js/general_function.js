$(document).ready(function(){ 
	
	//********************************   MENU  ******************************** 
	// Open Menu
	$('.btn-menu').click(function() {
		$('#menu').css({'height':'100%'});
	});
    
	// Close Menu
	$('.closebtn-menu, .menu-overlay').click(function() {
		$('#menu').css({'height':'0'});
	});
	//******************************  END MENU  ******************************* 
	

	//**************************   SMOOTH SCROLL  ***************************** 
	// Add smooth scrolling to all links
	$("a").click(function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
		// Prevent default anchor click behavior
		event.preventDefault();

		// Store hash
		var hash = this.hash;

		// Using jQuery's animate() method to add smooth page scroll
		// The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
		$('html, body').animate({
			scrollTop: $(hash).offset().top
		}, 800, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
		});
    } // End if
	});
	//**************************   END SMOOTH SCROLL  ************************** 
	

	// Start about us.
	// Left side - What define us. at mobile_cbpSplitLayout.js got add show modal for well functioning.
	$('#side-left').click(function() {
		$('#side-left-modal').show();
		$('#left-content').hide();
	});
	
	$('#side-left-close').click(function() {
		$('#side-left-modal').hide();
		$('#left-content').show();
	});

	// Right side - How we work. at mobile_cbpSplitLayout.js got add show modal for well functioning.
	$('#side-right').click(function() {
		$('#side-right-modal').show();
		$('#right-content').hide();
	});
	
	$('#side-right-close').click(function() {
		$('#side-right-modal').hide();
		$('#right-content').show();
	});


	// How we work that section got bug, cant close. so manually close it.
	var num = 0;
	$('#splitlayout_right').on('click touchstart', function() {		
		if (num%2 == 0) {
			// Show modal and content			
			$('#side-right-modal').show();
			$('#right-content').hide();
			$('#splitlayout_right').removeClass('close-right').addClass('open-right');
			num++;
		} else {
			$('#side-right-modal').hide();
			$('#right-content').show();
			$('#splitlayout_right').removeClass('open-right').addClass('close-right');
			num++;
		}		
	});
	// End about us.


	//********************************   MODAL  ******************************** 
	$('#ba').click(function() {
		$('#ba-modal').show();
		$('#platform-content').hide();
	});
	
	$('#ba-close').click(function() {
		$('#ba-modal').hide();
		$('#platform-content').show();
	});
		
	$('#web').click(function() {
		$('#web-modal').show();
		$('#platform-content').hide();
	});
	
	$('#web-close').click(function() {
		$('#web-modal').hide();
		$('#platform-content').show();
	});
		
	$('#dg').click(function() {
		$('#dg-modal').show();
		$('#platform-content').hide();
	});
	
	$('#dg-close').click(function() {
		$('#dg-modal').hide();
		$('#platform-content').show();
	});


	// Api call to get all active category code.
	$(window).load(function() {

		// Remove the effect after first time.
		$('#ba-box, #wd-box, #dc-box').addClass('wow-removed').removeClass('wow');

		$.ajax({
	      type: 'GET',
	      url: '/apis/category'
	    }).done(function (data) {
	      	// Loop each data in array. 
	    	$.each(data, function(i,obj){
	    		// Below three are event management jquery.
				$('#'+obj.code).click(function() {
					$('#'+obj.code+'-modal').show();
					$('#expertise-content').hide();
				});
				
				$('#'+obj.code+'-close').click(function() {
					$('#'+obj.code+'-modal').hide();
					$('#expertise-content').show();
				});
	    	});

	    }).error(function (response) {
	      console.log(response);
	    });
	});	
	//******************************  END MODAL  ******************************* 
});

