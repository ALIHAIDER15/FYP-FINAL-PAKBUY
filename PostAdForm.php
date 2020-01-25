<!--HEADER-->

<?php

include('header.php');

?>
    
    
    <main>
    
     <section  style="margin-bottom: 50px;">

            <div class="container-fluid contact_us">

                <div class="container inner-contactus">

                    <h1>Post Ad</h1>

                </div>


            </div>

        </section>
        
        
        
    
<!--    LOGIN SECTION-->
        
        
    <section style="margin-top: 130px; margin-bottom: 150px;">
        
        
        
        <div class="container" >
            
            <div class="row combaine  col-lg-12" style="justify-content: center; align-items: center;">
            
                
                
                
                

                
                
                
                
                
            <div class="col-lg-6  RightSideLg">
                
                <form onsubmit="return validation()" >
                
                    <h3 class="text-center">POST YOUR AD</h3>
                    
                    
             <div class="form-group labinp">
                 
                <label for="text">AD TITLE</label>
   
                 <input type="text" class="form-control" id="title" >
                 
                       <span class="text-danger text-bold" id="stitle"></span>
                 
                 
                  </div>
                    
                      
                    
                    
                     <div class="form-group labinp" style="margin-top: 30px;">
                 
                <label for="text" style="margin-bottom: 20px;">DESCRIPTION </label>
   
                 <textarea name="your-message" cols="40" rows="6" class="form-control" id="textarea" ></textarea>
                         
                             <span class="text-danger text-bold" id="stextarea"></span>
                 
                  </div>
                    
                    
                        <div class="form-group labinp" style="margin-top: 30px;">
                 
                <label for="text">SET A PRICE</label>
   
                 <input type="text" class="form-control"  id="price">
                 
                       <span class="text-danger text-bold" id="sprice"></span>
                  </div>
                    
                    
                    
                    
                        <div class="form-group labinp" style="margin-top: 30px;">
                 
                <label for="email">YOUR LOCATION</label>
   
                 <input type="text" class="form-control" id="location" >
                 
                  <span class="text-danger text-bold" id="slocation"></span>
                  </div>
                    
                    
                    
                    
                    
                     <div class="form-group labinp" style="margin-top: 30px;">
                 
                <label for="text">CONTACT NUMBER</label>
   
                 <input type="text" class="form-control" id="contact" >
                         
                    <span class="text-danger text-bold" id="scontact"></span>
                 
                 
                  </div>
                    
                    
                    
                    <div class="ulFile">
                        
                        <label for="file-upload" class="custom-file-upload">
                        <i class="fas fa-cloud-upload-alt"></i> Add Photo </label>
                        
                        
                     <input id="file-upload"  type="file" name="pic" accept="image/*" >
                        
                    <button type="submit" class="btn  .btn-sm " id="upload">Uplaod</button>
                        
                    </div>
                    
                   
                
                <button type="submit" class="btn  .btn-sm " id="send">Submit Ad</button>
                
                
                
                
                
                </form>
                
                
                
                
                
                
                
                </div>
            
            
            
            
            
            
            
            
            </div>
        
        </div>
        
        
        
        
        
        
        
        
        </section>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    </main>
    
    
    <?php

    include('footer.php')


?>
    
    
    
     <script type="text/javascript">
    
         function validation(){
        
        
        var title = document.getElementById("title").value;
         var textarea = document.getElementById("textarea").value;
         var price = document.getElementById("price").value;
        var location = document.getElementById("location").value;
         var location = document.getElementById("location").value;
              var contact = document.getElementById("contact").value;
             
//             extra variables pr form q send ni hota
//         var phone = document.getElementById("phone").value;
//         var subject = document.getElementById("subject").value;
//         var textarea = document.getElementById("textarea").value;
        
        
//        
//        name validation
      
        if(title == ""){
            
            document.getElementById("stitle").innerHTML="** Please fill  the title field ** ";
            return false;
            
            
        }
        
        else if ( (title.length<=2) || (title.length>20) ) {
            
            document.getElementById("stitle").innerHTML="** title must contain more than 2 characters and less than 20 ** ";
            return false;
            
        }
        
        
        else if (!isNaN(title) ) {
            
            document.getElementById("stitle").innerHTML="** Please enter  character not number ** ";
            return false;
            
        }
        
        
        
        
        
//        textarea validation
        
        
        
        
        if(textarea == ""){
            
            document.getElementById("stextarea").innerHTML="** Please fill the textarea  ** ";
            return false;
            
            
        }
        
        
        
        
       
        
        
        
        
        
        
        
        
//        
//        price validation
        
           if(price == ""){
            
            document.getElementById("sprice").innerHTML="** Please enter correct price ** ";
            return false;
            
            
        }
     
             
      else  if(isNaN(price)){
            
            document.getElementById("sprice").innerHTML="** Please enter correct price ** ";
            return false;
            
            
        }
        
             
        
      

        
        
        
             
//             location validation
             
             
             
                if(location == ""){
            
            document.getElementById("slocation").innerHTML="** Please the location ** ";
            return false;
            
            
        }
        
       
              else  if(!isNaN(location)){
            
            document.getElementById("slocation").innerHTML="** Please the location not digit ** ";
            return false;
            
            
        }
        
             
             
             
             
             
             
             
             
             

//        contact validation
        
        if(contact == ""){
            
            document.getElementById("scontact").innerHTML="** Please enter the contact number ** ";
            return false;
            
            
        }
             
             if(contact.length != 10){
            
            document.getElementById("scontact").innerHTML="** Please enter the 10 digit number ** ";
            return false;
            
            
        }
             
          else   if(isNaN(contact)){
            
            document.getElementById("scontact").innerHTML="** Please enter digit not character  ** ";
            return false;
            
            
        }
        
    }    
    </script>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
