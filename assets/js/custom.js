// $("#loginbtn").click(function(){
// 	var email = $("#email").val();
// 	var pass = $("#password").val();
// 	var base_url = $("#baseurl").val();


	// $.ajax({
	// 	  type: "POST",
	// 	  url: base_url+"services/login" ,
	// 	  data: { email: email , password: pass}
	// 	   })
	// 	  .done(function( data ) {
	// 	    if(data != 'false'){
	// 	    	$.ajax({
	// 	    		type: "POST",
	// 	    		url:base_url+"services/loadProfile",
	// 	    		data :{username: data}

	// 	    	});
	// 	    }
	// 	  });

	
	
		
	
// });
$(document).ready(function(){
	var base_url="http://caremerge.loc/quaker/services/";

	//function for loading users Wall
	$("#my_wall").click(function()
	{

		$.ajax({
		  type: "GET",
		  url: base_url+"myWall" ,
		  
		   })
		.done(function(data){
			$("#contends").html(data);

		});
	});

	//function for checing users login

	// $(document).on( 'click',"#login_btn", function(e){

	// });

	$("#login_btn").click(function( e)
		{

			var emailToSend = $("#email").val();
			var passToSend = $("#password").val();
			

			$.ajax({
				type : "POST",
				data : {email : emailToSend , password : passToSend},
				url : base_url+"login",
				dataType: 'JSON'

			})
			.done(function(data){
				
					if(data.status == 0)
					{
						
						$(".invalid_info").css("display","block");
					}
					else{

						window.location = base_url+"loadProfile";
						
					}
			});


		});

	


});
