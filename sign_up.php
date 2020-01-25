
<!--HEADER-->

<?php

include('header.php');

?>

    
    
    <main>
    
     <section  style="margin-bottom: 50px;">

            <div class="container-fluid contact_us">

                <div class="container inner-contactus">

                    <h1>Sign Up</h1>

                </div>


            </div>

        </section>
        
        
        
    
<!--    LOGIN SECTION-->
        
        
    <section style="margin-top: 130px; margin-bottom: 150px;">
        
        
        
        <div class="container" >
            
            <div class="row combaine col-lg-12">
            
                
                
                
                
            
            <div class="col-lg-6 leftSideLg text-center" style="padding-top: 90px;">
                
                
                
                <img src="home_img/login.png" />
                
                <p>Find the best matches for you Make the most of high seller scores Experience a joyful journey.</p>
                
                <h1>Demo User Details</h1>
                
                <div class="UserPass">
                
                Username: demo
                
                <br />
                Password : demo_zoacres
                
                </div>
                
                
                </div>
                
                
                
                
                
                
                
            <div class="col-lg-6 RightSideLg">
                
                <form   onsubmit="return validation()" >
                
                    <h3>Sign Up</h3>
                    
                    
             <div class="form-group labinp">
                 
                <label for="text">Username</label>
   
                 <input type="text" class="form-control" id="name">
                   <span class="text-danger text-bold" id="sname"></span>
                 
                 
                  </div>
                    
                      
                    
                    
                     <div class="form-group labinp" style="margin-top: 30px;">
                 
                <label for="email">Email</label>
   
                 <input type="email" class="form-control" id="email" >
                           <span class="text-danger" id="semail"></span>
                 
                 
                  </div>
                    
                    
                        <div class="form-group labinp" style="margin-top: 30px;">
                 
                <label for="password">Password</label>
   
                 <input type="password" class="form-control" id="pass">
                              <span class="text-danger" id="spass"></span>
                 
                 
                  </div>
                    
                    
                    
                    
                        <div class="form-group labinp" style="margin-top: 30px;">
                 
                <label for="email">confirm password</label>
   
                 <input type="password" class="form-control"   id="cpass">
                            
                                <span class="text-danger" id="scpass"></span>
                 
                 
                  </div>
                    
                    
                   
                
                <button type="submit" class="btn  .btn-sm " id="send">Register Now</button>
                
                
                
                
                
                </form>
                
                
                
                
                
                
                
                </div>
            
            
            
            
            
            
            
            
            </div>
        
        </div>
        
        
        
        
        
        
        
        
        </section>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    </main>
    
    
    
    <script type="text/javascript">
    
         function validation(){
        
        
        var name = document.getElementById("name").value;
         var email = document.getElementById("email").value;
         var pass = document.getElementById("pass").value;
        var cpass = document.getElementById("cpass").value;
//                     return false;

             
//             extra variables pr form q send ni hota
         var phone = document.getElementById("phone").value;
             alert(phone);
//         var subject = document.getElementById("subject").value;
//         var textarea = document.getElementById("textarea").value;
//        
//        
//        name validation
      
        if(name == ""){
            
            document.getElementById("sname").innerHTML="** Please fill  the name field ** ";
            return false;
            
            
        }
        
        else if ( (name.length<=2) || (name.length>20) ) {
            
            document.getElementById("sname").innerHTML="** Name must contain more than 2 characters and less than 20 ** ";
            return false;
            
        }
        
        
        else if (!isNaN(name) ) {
            
            document.getElementById("sname").innerHTML="** Please enter  character not number ** ";
            return false;
            
        }
        
        
        
        
        
//        email validation
        
        
        
        
        if(email == ""){
            
            document.getElementById("semail").innerHTML="** Please fill the email field ** ";
            return false;
            
            
        }
        
        if(email.indexOf('@') <=0){
            
            document.getElementById("semail").innerHTML="** Please  correct the postion of @  email ** ";
            return false;
            
            
        }
        
        
       if ((email.indexOf('.') !=email.length-4) && (email.charAt(email.length-3) != '.')){
            
            document.getElementById("semail").innerHTML="** Please  correct the postion of .  email ** ";
            return false;
            
            
        }
        
        
       
        
        
        
        
        
        
        
        
//        
//        password validation
        
        
        if(pass == ""){
            
            document.getElementById("spass").innerHTML="** Please fill  the password field ** ";
            return false;
            
            
        }
        
        else if ( (pass.length<=2) || (pass.length>20) ) {
            
            document.getElementById("spass").innerHTML="** Password must contain more than 2 characters and less than 20 ** ";
            return false;
            
        }
      

        
        
        
             
             
             
             
             
                if(cpass == ""){
            
            document.getElementById("scpass").innerHTML="** Please fill  the confrim password field ** ";
            return false;
            
            
        }
        
        else if ( cpass != pass ) {
            
            document.getElementById("scpass").innerHTML="** confrim password and password does not matche ** ";
            return false;
            
        }
//          
             
             
             
             
             
             
             
             
             

//        
//        
//        if(textarea == ""){
//            
//            document.getElementById("tname").innerHTML="** Please fill the textarea field ** ";
//            return false;
//            
//            
//        }
        
    }    
    </script>

















    
       <!--Footer-->


<?php

    include('footer.php')


?>


    
    
    
