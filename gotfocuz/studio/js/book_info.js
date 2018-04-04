 
  $('body').on('click','#approve',function() {
     $bid = $('#approve').attr('bookid');
     
     $.ajax({
        type: 'post',
        url: 'approve_booking.php',
        data: {book_id: $bid},
		success: function (response){
			console.log(response);
			if (response.trim() == "saved"){
				alert("booking has been confirmed Successfully");
			}else if(response.trim() == "failed"){
                            alert("An error occured");
                        }
                        location.reload();
		}
              

         });
				
 });