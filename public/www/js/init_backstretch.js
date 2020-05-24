$(document).ready(function(){
	
	// $(window).load(function() {
	// 	// Once finish load, remove the default background image.
	// 	$('#home').removeAttr('style');
	//
	// 	$.ajax({
	//       type: 'GET',
	//       url: '/apis/banner'
	//     }).done(function (data) {
	//       	// Loop each data in array.
	//       	var banner = [];
	//     	$.each(data, function(i,obj){
	//     		banner.push('infradesign/common/storage/banner/'+obj.image);
	//     	});
	//     	// Set active banner to background.
	//     	$(".fullscreen-static-image").backstretch(banner, {duration: 5000, fade:1500, centeredX:true, centeredY:true});
	//
	//     	// Set active banner to background.
	// 	    $('#next').click(function(x) {
	// 	        x.preventDefault();
	// 	        $('.fullscreen-static-image').data('backstretch').next();
	// 	    });
	//
	// 	    $('#prev').click(function(x) {
	//             x.preventDefault();
	//             $('.fullscreen-static-image').data('backstretch').prev();
	//         });
	//     }).error(function (response) {
	//       console.log(response);
	//     });
	// });

  // 20160930 Use dynamic banner, remove hardcode one.
  // $(".fullscreen-static-image").backstretch(["infradesign/www/img/promo_block/header-BG-1.jpg"]); 
  
	document.getElementById('file').onchange = uploadOnChange;
	    
	function uploadOnChange() {
	    var filename = this.value;
	    var lastIndex = filename.lastIndexOf("\\");
	    if (lastIndex >= 0) {
	        filename = filename.substring(lastIndex + 1);
	    }
	    document.getElementById('name-of-file').innerHTML = filename;
	}

});