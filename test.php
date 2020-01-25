<?php


 var_dump( $_POST);

//if(!empty($_POST)){





$connect= mysqli_connect('localhost','root','','pakbuy');
    
if($connect){
    echo"contected";
    
    $query = "SELECT * FROM `admins`";
    
        $run = mysqli_query($connect,$query);
    
    if($run){
        
        
        
          $fetch_array = mysqli_fetch_assoc ( $run );
        
        var_dump( $fetch_array);
    
        
        
        
        
    
    
    
    if($fetch_array["email"]==$_POST["email"] && $fetch_array["password"]==$_POST["password"]){
        
        header('location:admin_pannel.php');
       
    }
    else{
        
       $error="invalid email or password";
        
       echo $error;
        
    }
    
        
        
    }
    
  
}


//}

?>


