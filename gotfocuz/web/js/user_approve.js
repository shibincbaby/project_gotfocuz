  $('body').on('click','#user_approve',function() {
     $aid = $('#user_approve').attr('approve_id');
     $lid = $('#user_approve').attr('ldd');
    
     $.ajax({
        type: 'post',
        url: 'user_approve.php',
        data: {approve_id: $aid ,
        ldd: $lid},
		success: function (response){
			console.log(response);
			if (response.trim() == "saved"){
				alert("User registration has been confirmed Successfully");
			}else if(response.trim() == "failed"){
                            alert("An error occured");
                        }
                        location.reload();
		}
              

         });
				
 });
   $('body').on('click','#studio_approve',function() {
     $aid = $('#studio_approve').attr('approve_id');
     $lid = $('#studio_approve').attr('ldd');
    
     $.ajax({
        type: 'post',
        url: 'studio_approve.php',
        data: {approve_id: $aid ,
        ldd: $lid},
		success: function (response){
			console.log(response);
			if (response.trim() == "saved"){
				alert("Studio has been successfully confirmed");
			}else if(response.trim() == "failed"){
                            alert("An error occured");
                        }
                        location.reload();
		}
              

         });
				
 });