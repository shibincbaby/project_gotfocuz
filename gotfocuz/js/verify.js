$(document).ready(function() {
	document.getElementById('fname').disabled = true;
	document.getElementById('lname').disabled = true;
	document.getElementById('phone').disabled = true;
	document.getElementById('address').disabled = true;
	document.getElementById('district').disabled = true;
	document.getElementById('city').disabled = true;
$('#save').hide();
$('#cancel').hide();
$('#img').hide();


});

$('body').on('click','#enable',function() {
	document.getElementById('fname').disabled = false;
	document.getElementById('lname').disabled = false;
	document.getElementById('phone').disabled = false;
	document.getElementById('address').disabled = false;
	document.getElementById('district').disabled = false;
	document.getElementById('city').disabled = false;
	
	
	$('#enable').hide();
	$('#save').show();
$('#cancel').show();
$('#img').show();
 $.ajax({
        type: 'post',
        url: 'profile_update.php',
		  success: function (response)

        {

            console.log(response);
            $ar = response.split(",");
            $str = '<option value="-1" selected disabled hidden ></option>';

            if (response.trim() != "")
            {
                $ar = response.split(",");

                for (var i = 0; i < $ar.length; i++)
                {
                    $ar1 = $ar[i].split(":");
                    $str += '<option value="' + $ar1[0] + '">' + $ar1[1] + "</option>";
                }

                $('#place_error').html("");
                $('#place_error').addClass("hide_error");
            } else {
                $('#place_error').html("*Select a valid place");
                $('#place_error').removeClass("hide_error");
            }


            $('#district').html($str);

        }
		});
});
$('body').on('click','#cancel',function() {
	document.getElementById('fname').disabled = true;
	document.getElementById('lname').disabled = true;
	document.getElementById('phone').disabled = true;
	document.getElementById('address').disabled = true;
	document.getElementById('district').disabled = true;
	document.getElementById('city').disabled = true;
	$('#enable').show();
	$('#save').hide();
	$('#cancel').hide();
	$('#img').hide();

	
	$.ajax({
        type: 'post',
        url: 'data_get.php',
		  success: function (response)

        {

            console.log(response);
            $ar = response.split(",");
            $str = '<option value="-1" selected disabled hidden ></option>';

            if (response.trim() != "")
            {
                $ar = response.split(",");

                for (var i = 0; i < $ar.length; i++)
                {
                    $ar1 = $ar[i].split(":");
                    $str += '<option value="' + $ar1[0] + '">' + $ar1[1] + "</option>";
                }

                $('#place_error').html("");
                $('#place_error').addClass("hide_error");
            } else {
                $('#place_error').html("*Select a valid place");
                $('#place_error').removeClass("hide_error");
            }


            $('#district').html($str);

        }
		});
	});

	
	
	$('body').on('click','#fileToUpload',function() {
			$('#enable').hide();
			$('#save').show();
			$('#cancel').show();

	});

$('body').on('click','#save',function() {
	$fname = $('#fname').val();
	$lname = $('#lname').val();
	$phone = $('#phone').val();
	$address = $('#address').val();
	$cityid = $('#city').val();
	$district = $('#district').val();
	$userid = $('#fname').attr('userid');
	$gen_sel = $(".gender_sel:checked").val();

	
 $.ajax({
        type: 'post',
        url: 'profile_update.php',
        data: {fname: $fname,
				lname:$lname,
				phone:$phone,
				address:$address,
				city:$cityid,
				district:$district,
				userid:$userid,
				gene_sel:$gen_sel
		},
		success: function (response){
			console.log(response);
			if (response.trim() == "saved"){
				alert("Changes saved Successfully");
			}
		}
		
		});
	});
	$('body').on('click','#book',function() {
		$sid = $('#book').attr('studioid');
		$.cookie('studio', $sid, {expires: 7});
		
		});
                
                
 $('body').on('click','#disapprove',function() {
     $bid = $('#disapprove').attr('bookid');
     
     $.ajax({
        type: 'post',
        url: 'cancel_booking.php',
        data: {book_id: $bid},
		success: function (response){
			console.log(response);
			if (response.trim() == "saved"){
				alert("Your booking has been cancelled Successfully");
			}else if(response.trim() == "failed"){
                            alert("An error occured");
                        }
                        location.reload();
		}
              

         });
				
 });
