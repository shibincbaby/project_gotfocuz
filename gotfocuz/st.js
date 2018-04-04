$('body').on('click','#serch',function() {


$abc=$('ddlstudio').val();

alert($abc);

$.ajax({
type:'post',
url: '',
data: {},

success: function (response)

{
	
$('').html(response);

}




});


});