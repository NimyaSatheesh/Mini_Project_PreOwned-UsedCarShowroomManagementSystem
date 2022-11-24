$(".toggle-password").click(function() {

   $(this).toggleClass("fa-eye fa-eye-slash");
   var input = $($(this).attr("toggle"));
   if (input.attr("type") == "password") {
     input.attr("type", "text");
   } else {
     input.attr("type", "password");
   }
 });
   function Register(){
      var isValid=true;
		var first_name = document.forms.RegForm.first_name.value;
      var last_name = document.forms.RegForm.last_name.value;
      // var regadrex=/d{1,5}\s\w.\s(\b\w*\b\s){1,2}\w*/.;
      var email = document.forms.RegForm.email.value;
      var phone = document.forms.RegForm.phone.value;
		var password = document.forms.RegForm.password.value;
      var cpassword = document.forms.RegForm.cpassword.value;
      var district = document.forms.RegForm.district.value;
      var state = document.forms.RegForm.state.value;
      // var cpassword = document.forms.RegForm.cpassword.value;
		var regemail=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/g;  //Javascript reGex for Email Validation.
      var regphone=/^\d{10}$/;
      var password=/^(?=.*\d)(?=.*[A-Z]).{3,}/;
      var nameCityPattern =  /\d+$/g;

      
    //   $('#password, #cpassword').on('keyup', function () {
    //     if ($('#password').val() == $('#cpassword').val()) {
    //       $('#message').html('Matching').css('color', 'green');
    //     } else 
    //       $('#message').html('Not Matching').css('color', 'red');
    // });
      if (first_name == "" || nameCityPattern.test(first_name)) {
        window.alert("Please enter your First Name.");
      
        isValid=false;
        
      }
      if (last_name == "" || nameCityPattern.test(last_name)) {
        window.alert("Please enter your Last Name.");
      
        isValid=false;
      }
      if (address == "") {
        window.alert("Please enter your address.");
      
        isValid=false;
      }
      if (phone == "" || !regphone.test(phone)) {
        alert("Please enter valid phone number.");
        
        isValid=false;
      }
      if (email == "" || !regemail.test(email)) {
        window.alert("Please enter a valid e-mail address.");
       
        isValid=false;
      }
      // if (password == "" || cpassword=="") {
      //   alert("Please enter password.");
      
      //   isValid=false;
      // }
      // else if(password!=cpassword){
      //   alert("Please enter same password.");
       
      //   isValid=false;
      // }
      // else{
      //   return isValid;
      // }
      if(district== "" || nameCityPattern.test(district)){
        alert("Please enter district.");
       
        isValid=false;
      }
      if(state== "" || nameCityPattern.test(state)){
        alert("Please enter Your state.");
       
        isValid=false;
      }

      return isValid;
      
                  
		}
//validate first name with various conditions
function fnameValidate(first_name){
 var first_name = document.getElementById("first_name").value;
 var pattern =  /^[a-zA-Z]+$/;
 isValid=true;
 if(first_name.match(pattern)){
    document.getElementById("fnameValidate").innerHTML="";
 }
 else if(!first_name){
    document.getElementById("fnameValidate").innerHTML="First Name Required";
    isValid=false;
 }
 else{
    document.getElementById("fnameValidate").innerHTML="Only characters are acceptable";
    isValid=false;
 }
 return isValid;
}

//validate last name with various conditions
function lnameValidate(){
 var last_name = document.getElementById("last_name").value;
 var pattern =  /^[a-zA-Z]+$/;
 isValid=true;
 if(last_name.match(pattern)){
    document.getElementById("lnameValidate").innerHTML="";
 }
 else if(!last_name){
    document.getElementById("lnameValidate").innerHTML="Last Name Required";
    isValid=false;
 }
 else{
    document.getElementById("lnameValidate").innerHTML="Only characters are acceptable";
    isValid=false;
 }
 return isValid;
}


//validate last name with various conditions
function addrValidate(){
   var addr_Validate = document.getElementById("address").value;
   var pattern =  /[,#-\/\s\!\@\$.....]/gi;
   isValid=true;
   if(addr_Validate.match(pattern)){
      document.getElementById("addrValidate").innerHTML="";
   }
   else if(!addr_Validate){
      document.getElementById("addrValidate").innerHTML="Address Required";
      isValid=false;
   }
   else{
      document.getElementById("addrValidate").innerHTML="Address Required";
      isValid=false;
   }
   return isValid;
}

//validate email with various conditions
function emailValidate(){
 var email = document.getElementById("email").value;
 var pattern = /^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$/;
 isValid=true;
 if(email.match(pattern)){
    document.getElementById("emailValidate").innerHTML="";
  }
  else if(!email){
    document.getElementById("emailValidate").innerHTML="Email Required";
    isValid=false;
 }
  else{
    document.getElementById("emailValidate").innerHTML="Invalid email";
    isValid=false;
  }
  return isValid;
}

//validate contact with various conditions
function cnoValidate(){
   var cno = document.getElementById("phone").value;
   var pattern = /^(\+91[\-\s]?)?[0]?(91)?[789]\d{9}$/;
   isValid=true;
   if(cno.match(pattern)){
      document.getElementById("cnoValidate").innerHTML="";
   }
   else if(!cno){
      document.getElementById("cnoValidate").innerHTML="Number required";
      isValid=false;
   }
   else{
      document.getElementById("cnoValidate").innerHTML="Invalid Contact Number";
      isValid=false;
   }
   return isValid;
   
}

function cpasswordValidate(){
 var cpassword = document.getElementById("cpassword").value;
 var password = document.getElementById("password").value;
 isValid=true;
 if(cpassword!=password){
    document.getElementById("cpasswordValidate").innerHTML="Enter same password";
 }
 else if(!cpassword){
    document.getElementById("cpasswordValidate").innerHTML="Password Required";
    isValid=false;
 }
 else{
     document.getElementById("cpasswordValidate").innerHTML="";
    isValid=false;
 }
 return isValid;

}

function passwordValidate(){
 var password = document.getElementById("password").value;
 var pattern=/^(?=.*\d)(?=.*[A-Z]).{6,}/;
 isValid=true;
 if(password.match(pattern)){
    document.getElementById("passwordValidate").innerHTML="";  
 }
 else if(!password){
    document.getElementById("passwordValidate").innerHTML="Password Required";
    isValid=false;
 }
 else{
    isValid=false;
 }
 return isValid;
 
}

// function validatecity(){
//  var city = document.getElementById("city").value;
//  var pattern =  /^[a-zA-Z]+$/;
//  isValid=true;
//  if(city.match(pattern)){
//     document.getElementById("cityValidate").innerHTML="";
//  }
//  else if(!city){
//     document.getElementById("cityValidate").innerHTML="City Required";
//     isValid=false;
//  }
//  else{
//     document.getElementById("cityValidate").innerHTML="Invalid city";
//     isValid=false;
//  }
//  return isValid;
// }
