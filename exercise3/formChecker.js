function reset()
{
  document.getElementById("username").value="";
	document.getElementById("password").value="";
	document.getElementById("clayNum").value="";
	document.getElementById("engNum").value="";
	document.getElementById("concNum").value="";
	document.getElementById("shippingOption1").checked = false;
	document.getElementById("shippingOption2").checked = false;
document.getElementById("shippingOption3").checked = false;
}

function validate()
{
  if(document.getElementById("username").value == "" ||
     document.getElementById("password").value == "" ||
     document.getElementById("clayNum").value  == "" ||
     document.getElementById("engNum").value   == "" ||
     document.getElementById("concNum").value  == "" ||
     (document.getElementById("shippingOption1").checked == false &&
   	document.getElementById("shippingOption2").checked == false &&
   document.getElementById("shippingOption3").checked == false)){
     alert("Form is incomplete. Try again.");
     return false;
   }
   else if ((document.getElementById("clayNum").value < 0) || (document.getElementById("engNum").value < 0) || (document.getElementById("concNum").value < 0)) {
     alert("Quantities cannot be less than zero.");
     return false;
   }
   /*https://www.w3resource.com/javascript/form/email-validation.php*/
   else if(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(document.getElementById("username").value)){
     return true;
   }
   
  else{
     alert("Username is not an email");
     return false;
   }
   return true;
}