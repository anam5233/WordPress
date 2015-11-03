;
(function($){
	$(document).ready(function(){
		$("#postsubmit").on('click', function( e ){
			e.preventDefault();
			var status = $("#status").val();

			var nonce = $("#nonce").val();
			var file = $(" #image ").get(0).files[0];
			console.log(status, file);


			var params = {
				s: status, 
				n: nonce, 
				action: "status"
			};
		});
	});
})(jQuery)