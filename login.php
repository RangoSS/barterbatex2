<?php
 include "hedds.php"
?>

<link rel="stylesheet" type="text/css" href="css/login2Style.css">

<!--<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>-->
     <div class="container bg-white " >
    <div class="" id="login" style="background-color: #4863A0" >
       
        <div class="container" id="login" >
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form shadow-lg p-3 mb-5 rounded" action="" method="post">
                            <h3 class="text-center text-info">Login</h3>
                            <div class="form-control errors" style=" background-color: #8E2121;display: none">
                            <span style="color: red;">error! check if your username or password is correct</span>
                            </div>
                            <div class="form-group">
                                <label for="Email" class="text-info">Email:</label><br>
                                <input type="email" name="email2" id="email2" class="form-control">
                                <span class="error_password" style="display: none;color: red">put correct email</span>
                            </div>
                            <div class="form-group">
                                <label for="passwords" class="text-info">Password:</label><br>
                                <input type="password" name="pwp" id="pwp" class="form-control">
                                <span class="error_password" style="display: none;color: red">put the correct passwors</span>
                            </div>
                            
                            <div class="form-group">
                                <label for="remember-me" class="text-info"><span>Remember me</span> <span><input id="remember-me" name="remember-me" type="checkbox"></span></label><br>
                                <input type="button" name="submit" class="btn btn-info btn-md" value="submit" onclick="login();">
                            </div>
                            <div id="register-link" class="text-right">
                                <a href="#" class="text-info" id="goToRegister" onclick="$('#login2').show();$('#login').hide()">Register here</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
    <script type="text/javascript">
      //  $(document).ready(function(){
      //   $("#goToRegister").click(function(){
     //       location.href="register.php";
     //    });
    //    });
    </script>
<br>
<div class="container" style="background-color: #4863A0">
    <div id="login2" style="color: brown;display: none;">
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12" style="height: auto;">
                        <form id="login-form" class="form mb-2" action="" method="post" style="height: auto;">
                            <input type="submit"name="submit" class="btn btn-info btn-md" value="Back" style="padding-top: 5%;" />
                            <h3 class="text-center text-info">Registration</h3>
                            <!--serial number div-->
                             <div class="form-group">
                               
                            </div>
                            <div class="form-group">
                                <label for="first_name" class="text-info">First Name:<span style="color: red;display: none">fill name*</span></label><br>
                                <input type="text" name="first_name" id="first_name" class="form-control">
                            </div>
                            
                            <div class="form-group">
                                <label for="last_name" class="text-info">Last Name:<span style="color: red;display: none">fill last name*</span></label><br>
                                <input type="text" name="last_name" id="last_name" class="form-control stringed">
                            </div>
                            <div class="form-group">
                                <label for="gender" class="text-info">Gender:</label><br>
                                <input type="radio" class="radio-inline" name="gender" id="gender" value="male" class="form-control">Male
                                <input type="radio" class="radio-inline" name="gender" id="gender" value="female" class="form-control">Female
                            </div>
                            
   
                            <div class="form-group">
                                <label for="username" class="text-info">Email:<span style="color: red;display: none">fill email*</span></label><br>
                                <input type="email" name="user_email" id="user_email" class="form-control stringed">
                            </div>
                            <div class="form-group">
                                <label for="p_password" class="text-info">Passwords:<span style="color: red;display: none">fill Password*</span></label><br>
                                <input type="password" name="p_password" id="p_password" class="form-control stringed">
                            </div>
                    
                            <div class="form-group">
                                <label for="home_address" class="text-info">Home Address:<span style="color: red;display: none">fill address*</span></label><br>
                                <input type="text" name="home_address" id="home_address" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="postal_address" class="text-info"> Postal Address:<span style="color: red;display: none">fill address*</span></label><br>
                                <input type="text" name="postal_address" id="postal_address" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="contact" class="text-info">Contact:<span style="color: red;display: none">fill Contact*</span></label><br>
                                <input type="text" name="cellphone" id="cellphone" class="form-control numbers">
                            </div>
                             <div class="form-group">
                                <label for="contact" class="text-info">locations:<span style="color: red;display: none">fill Location*</span></label><br>
                                <input type="text" name="locations" id="locations" class="form-control numbers">
                            </div> 
                            
                            <div class="form-group">
                                <label for="user_type" class="text-info">Occupation:</label><br>
                                <input type="radio" class="radio-inline" name="user_type" id="user_type" value="student" class="form-control" >Student
                                <input type="radio" class="radio-inline" name="user_type" id="user_type" value="employee" class="form-control">Employee
                            </div>
                            <div class="file-field">
                           <div class="btn btn-outline-info waves-effect btn-sm float-left">
                           <span>Upload profile Image</span>
                           <input id="file" name="file" type="file">
                           </div><br><br>
                            <div class="form-group">
                                
                                <input type="submit" id="regis" name="submit" class="btn btn-info btn-md" value="submit" onclick="validateAfter();" />
                                <input type="button" id="display" name="display" class="btn btn-info btn-md" value="display" onclick="displayAlls();"  />
                                
                                <input type="reset" id="regis" name="submit" class="btn btn-info btn-md" value="Reset"  />
                                
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--ends of forms-->
    <div id="displayForm" style="margin-right: 10%;border-style: solid;border-left-width: red;width: 40%;margin-top: -36%;float: right;color: white;background-color: grey;padding:5%;display: none;">
        <h1>Check if u entered correct Values</h1>
        <div class="displayme"></div>
    </div>
    </div>

</body>


<script>

//////////////////////////////////////////////

$(document).ready(function(){
   

$("#first_name").keypress(function (e) {
            var keyCode = e.keyCode || e.which;
 
            //Regex for Valid Characters i.e. Alphabets.
            var regex = /^[A-Za-z]+$/;
 
            //Validate TextBox value against the Regex.
            var isValid = regex.test(String.fromCharCode(keyCode));
            if (!isValid) {
                //this refers to current input
                $(this).css("border-color","red");
            }
            else{

               $(this).css("border-color","grey");
            }
 
            
        });

$("#last_name").keypress(function (e) {
            var keyCode = e.keyCode || e.which;
 
            //Regex for Valid Characters i.e. Alphabets.
            var regex = /^[A-Za-z]+$/;
 
            //Validate TextBox value against the Regex.
            var isValid = regex.test(String.fromCharCode(keyCode));
            if (!isValid) {
                //this refers to current input
                $(this).css("border-color","red");
            }
            else{

               $(this).css("border-color","grey");
            }
 
            
        });

$("#home_address").keypress(function (e) {
            var keyCode = e.keyCode || e.which;
 
            //Regex for Valid Characters i.e. Alphabets.
            var regex = /^[A-Za-z]+$/;
 
            //Validate TextBox value against the Regex.
            var isValid = regex.test(String.fromCharCode(keyCode));
            if (!isValid) {
                //this refers to current input
                $(this).css("border-color","red");
            }
            else{

               $(this).css("border-color","grey");
            }
 
            
        });
$("#postal_address").keypress(function (e) {
            var keyCode = e.keyCode || e.which;
 
            //Regex for Valid Characters i.e. Alphabets.
            var regex = /^[A-Za-z]+$/;
 
            //Validate TextBox value against the Regex.
            var isValid = regex.test(String.fromCharCode(keyCode));
            if (!isValid) {
                //this refers to current input
                $(this).css("border-color","red");
            }
            else{

               $(this).css("border-color","grey");
            }
 
            
        });
$("#cellphone").keypress(function (e) {
           if(event.which != 8 && isNaN(String.fromCharCode(event.which))){
           event.preventDefault(); //stop character from entering input
           $(this).css("border-color","red");
           alert("please enter number");
       }else{

          $(this).css("border-color","grey");
       }
   
            
        });
     });
/*on key press is done then we validate on submit*/
function validateAfter(){

	var formData = new FormData();
	var fileUpload = $("#file").get(0);
	var files = fileUpload.files[0];
	
    
     formData.append('first_name',$("#first_name").val());
     formData.append('last_name',$("#last_name").val());
     formData.append('user_email',$('#user_email').val());
     formData.append('p_password',$('#p_password').val());
     formData.append('home_address',$("#home_address").val());
     formData.append('postal_address',$("#postal_address").val());
     formData.append('cellphone',$("#cellphone").val());
     formData.append('locations',$("#locations").val());
     formData.append('user_type',$('#user_type').val());//radio
     formData.append('gender',$("#gender").val());//radio
     formData.append('file',files);   
     formData.append('action','insertuser'); //action calling Insert function
       
   
   $.ajax({
        url:'back_end.php',
        method:'POST',
         data:formData,
         contentType:false,
         cache:false,
         processData:false,
        data:formData,
          async: true,
        success: function (response) {
           
             console.log(response);

   
}
});

}

function displayAlls(){
          
      $.ajax({
              url:"http://localhost/BAXTERBATER2/back_end.php?action=displayAll",
              method:"GET",
            
              success:function(response)
              {
                  // var ret = JSON.parse(response)
                 // $('#display_records').html(response);
                 // console.log(ret);
                  console.log(response);
              }
             })
  
}

////////////////////////////////////////////////////////////////////////////////////////////////////////////////
function login(){
  var emailt=$("#email2").val();
  var pwp=$("#pwp").val();
     
     console.log(emailt);
     console.log(pwp);
     
  $.ajax({

      url:"login_back_end.php",
      method:"POST",
      async:false,
      data:{action:"login",
            emailt:emailt,
            pwp:pwp },
     success:function(response){
         
          if(response.indexOf('.php') !== -1 )
          {
            window.location.href=response;//then here we go to that page
          }
          else
          {
           $('.errors').show();
            //alert(response);
          }
       console.log(response);
     }
  });
}

</script>


<script type="text/javascript">
/*$('.numbers').keypress(function(event){

       if(event.which != 8 && isNaN(String.fromCharCode(event.which))){
           event.preventDefault(); //stop character from entering input
           $(this).css("border-color","red");
           alert("please enter number");
       }else{

          $(this).css("border-color","grey");
       }
    });



});
*/

/*
function validateAfter(){
   
   var emaill = $("#email").val();
     var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

     if (!filter.test(emaill)) {
      
         $("#email").css("border-color","red");
        
         emaill.focus;
    } else {
      
       $("#email").css("border-color","grey");
    }
  
  var pswd=document.getElementById("pwp").value;
   //validate the length
if ( pswd== "" || pswd.length < 8) {
    alert("password cannot be emty or less than 8");
}else if(!pswd.match(/[A-z]/)){
    alert("password must contain atleast one small letter");
}else if(! pswd.match(/[A-Z]/)){
   alert("password must contain atleast one capital letter");
}else if( !pswd.match(/\d/)){
   alert("password must contain atleast one Number");
}

}


function login(){
    
    var pwp=document.getElementById("pwp").value;
    var email=document.getElementById("email").value;
  
     if(email ==""){
     $(this).show();
     }
     if (pwp == "" || pwp.length< 8){
         
         $(".error_password").show();
     }
      
     
      

     $.ajax({
        url:'backed.php',
        method:'POST',
        beforeSend:function(){
         console.log("............");
        },

        data:{action:'logining',
             pwp:pwp,
             email:email
          },
          async: true,
        success: function (response) {
            ///////
     }
    console.log(pwp);
    console.log(email);
});

}
/*
       
 else {

      var first_name=document.getElementById("first_name").value;
      var last_name=document.getElementById("last_name").value;
    var cellphone=document.getElementById("cellphone").value;
    var occupant=document.getElementById("occupant").value;
    var emaill=document.getElementById("emaill").value;
    var password=document.getElementById("password").value;
      
        alert(emaill);
    $.ajax({
     url:"dbClass2.php",
  method:"post",
   beforeSend: function()
          {
            console.log("loading insert .......");
          
          },
          
          data:{action:'insertNew',
                first_name:first_name,
                last_name:last_name,
                cellphone:cellphone,
                job:job,
               // emaill:emaill,
                //password:password
                  },
          async: true,

    success:function(response){
     
      console.log(response);
    }
 });
}
}
 
/////////////////////////////ends here////////////////////////////////////////////////////////
function getRed(){  

$.ajax({

    url:"dbClass2.php",
    method:"post",
     beforeSend: function()
          {
            console.log("loading .......");
          
          },
    data:{action:'myResults'},
    async: true,

    success:function(response){
      var ret=JSON.parse(response);
      var ret1=ret.Valid;
      //console.log(ret);
      //console.log(ret1);
     var showme="";
     var result_limit = document.getElementById('selMe').value;
 

for (var i = 0; i < result_limit; i++) {
  
  
     
       showme+="<tr><td> "+ret1[Math.floor(Math.random() * ret1.length )].cellphone+" </td>";
       showme+="<td> "+ret1[Math.floor(Math.random() * ret1.length )].date_logged+" </td>";
      // showme+="<td> "+ret1[2].date_logged+" </td>";

       "</tr>";

     
    }

    console.log(showme);
    
    $("#demo").html(showme);
    
    //return ret1;
}
    
});

} 
///////////////////////////////////////////////////////////////////////////////////////////////////////////
function getWhile(){

 $.ajax({
 url:"dbClass2.php",
  method:"post",
   beforeSend: function()
          {
            console.log("loading .......");
          
          },
  data:{action:'myResults'},
  async: true,

    success:function(response){
      var ret=JSON.parse(response);
      var ret1=ret.Valid;
      //console.log(ret);
      //console.log(ret1);
     var showhile="";
     var result_while = document.getElementById('selwhile').value;
 
    var i=0;
  while(i <= result_while){

     showhile+="<tr><td> "+ret1[Math.floor(Math.random() * ret1.length )].cellphone+" </td>";
       showhile+="<td> "+ret1[Math.floor(Math.random() * ret1.length )].date_logged+" </td>";
      // showme+="<td> "+ret1[2].date_logged+" </td>";

       "</tr>";

       i++;

  }


    console.log(showhile);
    
    $("#listWhile").html(showhile);

    
    //return ret1;
}*/
  
//});

//}  



/* var first_name=document.getElementById("first_name").value;
    var surname=document.getElementById("surname").value;
    var username=document.getElementById("username").value;
    var email=document.getElementById("email").value;
    var contact=document.getElementById("contact").value;
    var occupant=document.getElementById("occupant").value;
    var address=document.getElementById("address").value;
    var pwp=document.getElementById("pwp").value;
    var magenders=document.getElementById("magenders").value;
console.log(first_name);
console.log(surname);
console.log(username);
console.log(contact);
console.log(occupant);
console.log(address);
console.log(pwp);
console.log(magenders);



 var myData{
                 first_name:$('#first_name').val(),
                 surname:$('#surname').val(),
                 username:$('#username').val(),
                 email:$('#email').val(),
                  contact:$('#contact').val(),
                 occupant:$('#occupant').val(),
                 address:$('#address').val(),
                 pwp:$('#pwp').val(),
                 magenders:$('#magenders').val()


      };
*/

</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>




 


