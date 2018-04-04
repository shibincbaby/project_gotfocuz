function fn(){

	 var valfname= /^[A-Za-z\s]{2,15}$/;
	 $fname= document.getElementById('f_name').value;

	 if(!valfname.test($fname)){

      alert("ENTER VALID FIRST NAME");
	   document.getElementById('f_name').value='';
	   $("#f_name").focus();
      return false;
    }

}
function lfn(){

	 var val_lname=/^[A-Za-z\s]{2,15}$/;
	 $l_name= document.getElementById('l_name').value;

	 if(!val_lname.test($l_name)){

      alert("ENTER VALID LAST NAME");
	   document.getElementById('l_name').value='';
	   $("#l_name").focus();
      return false;
    }

}
function phone(){

	  var valphone= /^[0-9]{9,12}$/;
	 $mobile= document.getElementById('mobno').value;

	 if(!valphone.test($mobile)){

      alert("enter valid phone number");
	   document.getElementById('mobno').value='';
	   $("#mobno").focus();
      return false;
    }

}
function adfn(){

	 var valad= /^[A-Za-z]+$/;
	 $l_name= document.getElementById('address').value;

	 if(!valad.test($l_name)){

      alert("Address Must be Alphabets Only");
	   document.getElementById('address').value='';
	   $("#address").focus();
      return false;
    }

}

function efn(){

	 var valemail= /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;;
	 $l_email= document.getElementById('email').value;

	 if(!valemail.test($l_email)){

      alert("Enter Valid EMAIL address");
	   document.getElementById('email').value='';
	   $("#email").focus();
      return false;
    }

}
function disfn(){

	 var valfname= /^[A-Za-z]+$/;
	 $fname= document.getElementById('l_district').value;

	 if(!valfname.test($fname)){

      alert("District Must be Alphabets Only");
	   document.getElementById('l_district').value='';
	   $("#l_district").focus();
      return false;
    }

}
function sfn(){

	 var val_seqans= /^[A-Za-z]+$/;
	 $seqans= document.getElementById('seqans').value;

	 if(!val_seqans.test($seqans)){

      alert("ENTER VALID INPUT");
	   document.getElementById('seqans').value='';
	   $("#seqans").focus();
      return false;
    }

}


      function isNumber(evt) {
        var iKeyCode = (evt.which) ? evt.which : evt.keyCode
        if (iKeyCode != 46 && iKeyCode > 31 && (iKeyCode < 48 || iKeyCode > 57))
            return false;

        return true;
        }
        function onlyAlphabets(e,t) {
            try {
                if (window.event) {
                    var charCode = window.event.keyCode;
                }
                else if (e) {
                    var charCode = e.which;
                }
                else { return true; }
                if ((charCode > 64 && charCode < 91) || (charCode > 96 && charCode < 123) || (charCode ==8))
                    return true;
                else
                    return false;
            }
            catch (err) {
                alert(err.Description);
            }
        }
			  function mob()
{
        var x = document.getElementById('phone').value;
	 // var x=document.phone.value;
        if(isNaN(x)|| x.indexOf(" ")!=-1){
              alert("Enter numeric value");return false; }
        if (x.length > 10 || x.length < 10 ){
                alert("enter 10  digits"); return false;
           }
       // if (x.charAt(0)!="9" || x.charAt(0)!="2"){
               // alert("it should start with 9 or 2 ");
                //return false
           //}
}
function confirmpassword()
{
	var a=document.getElementById("pas").value;
	var b=document.getElementById("conpas").value;
	if(a!=b)
	{
		alert("password mismatch");
	}


}




function al()
{
	alert("sdfg");
}
