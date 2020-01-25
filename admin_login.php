<!--HEADER-->

<?php

include('header.php');      //  adding header




if(!empty($_POST)){         //!empty checking k leye use hota hai k post[] ki array empty to ni 
                            //isset checking k leye use hota hai k  post variable or specific index["email"] empty to ni


$connect= mysqli_connect('localhost','root','','pakbuy');
    
if($connect){
//    echo"contected";
    
    $query = "SELECT * FROM `admins`";
    
        $run = mysqli_query($connect,$query);
    
    if($run){
        
        
        
          $fetch_array = mysqli_fetch_assoc ( $run );
    
    
    
    
    if($fetch_array['email']==$_POST['email'] && $fetch_array['password']==$_POST['password']){
        
        header('location:Dashboard/dashboard.html');
       
    }
    else{
        
       $error="invalid email or password";
        
       
        
    }
    
        
        
    }
    
  
}


}






?>




















    <main>
    
     <section  style="margin-bottom: 50px;">

            <div class="container-fluid contact_us">

                <div class="container inner-contactus">

                    <h1>Admin Login</h1>

                </div>


            </div>

        </section>
        
        
        
    
<!--    LOGIN SECTION-->
        
        
    <section style="margin-top: 130px; margin-bottom: 150px;">
        
        
        
        <div class="container" >
            
            <div class="row combaine col-lg-12">
            
                
                
                
                
            
            <div class="col-lg-6 leftSideLg text-center">
                
                
                
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
                
                <form  action="" method="post" >
                
                    <h3>ADMIN LOGIN</h3>
                    
                    <span class="text-danger">
                        
                        <?php 
                        
                        if(isset($error)){
                        echo $error;
                        
                        }
                        ?>
                    
                    
                    
                    </span>
                    
                    
             <div class="form-group labinp">
                 
                <label >Username</label>
   
                 <input name="email" type="email" class="form-control" >
                 
                 
                  </div>
                    
                    
                    
                    
                     <div class="form-group labinp" style="margin-top: 30px;">
                 
                <label for="password">Password</label>
   
                 <input  name="password" type="password" class="form-control" >
                 
                 
                  </div>
                
                    
                    
                
                <button type="submit" class="btn  .btn-sm " id="send">Login</button>
                
                
                
                
                
                </form>
                
                
                
                
                
                
                
                </div>
            
            
            
            
            
            
            
            
            </div>
        
        </div>
        
        
        
        
        
        
        
        
        </section>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    </main>
    
    
    
<!--Footer-->



<?php

    include('footer.php')


?>



