function f(){

	 var val_fname= /^[A-Za-z]{3,20}$/;
	 $fname= document.getElementById('username').value;

	 if(!val_fname.test($fname)){

      alert("Name Must be Alphabets Only or lack of sufficient characters");
	   document.getElementById('fname').value='';
	   $("#fname").focus();
      return false;
    }

}
function s(){

 var val_sname= /^[A-Za-z]+$/;
 $sname= document.getElementById('sname').value;

 if(!val_sname.test($sname)){

    alert("Last Name Must be Alphabets Only");
   document.getElementById('sname').value='';
   $("#sname").focus();
    return false;
  }

}
function p(){

	  var val_phone= /^[0-9]{9,12}$/;
	 $phone= document.getElementById('phone').value;

	 if(!val_phone.test($phone)){

      alert("enter valid phone number or lack of sufficient digits");
	   document.getElementById('phone').value='';
	   $("#phone").focus();
      return false;
    }

}
function h(){

 var val_hname= /^[A-Za-z]{4,20}$/;
 $hname= document.getElementById('hname').value;

 if(!val_hname.test($hname)){

    alert("House Name Must be Alphabets Only or lack of sufficient characters");
   document.getElementById('hname').value='';
   $("#hname").focus();
    return false;
  }

}
function c(){

 var val_cname= /^[A-Za-z]{4,20}$/;
 $cname= document.getElementById('cname').value;

 if(!val_cname.test($cname)){

    alert("City Name Must be Alphabets Only or lack of sufficient characters");
   document.getElementById('cname').value='';
   $("#cname").focus();
    return false;
  }

}
function d(){

 var val_district= /^[A-Za-z]{4,20}$/;
 $district= document.getElementById('district').value;

 if(!val_district.test($hname)){

    alert("House Name Must be Alphabets Only or lack of sufficient characters");
   document.getElementById('district').value='';
   $("#district").focus();
    return false;
  }

}
function u(){

	  var val_uadhar= /^[0-9]{11,12}$/;
	 $uadhar= document.getElementById('uadhar').value;

	 if(!val_uadhar.test($uadhar)){

      alert("enter valid aadhar number or lack of sufficient digits");
	   document.getElementById('uadhar').value='';
	   $("#uadhar").focus();
      return false;
    }

}
function q(){

	  var val_phone= /^[0-9]{12,12}$/;
	 $accno= document.getElementById('accno').value;

	 if(!val_phone.test($accno)){

      alert("enter valid phone number or lack of sufficient digits");
	   document.getElementById('accno').value='';
	   $("#accno").focus();
      return false;
    }

}

function a(){

				var val_pass=/(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}/;
				 $pass= document.myform.password.value;
				if (!val_pass.test($pass)){

					  alert("Required atleast one number, one lowercase and one uppercase letter, atleast six characters");
						document.myform.password.value
					$("#pass").focus();
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
