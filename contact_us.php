<!--HEADER-->

<?php



include('header.php');




if(!empty($_POST)){





$connect= mysqli_connect('localhost','root','','pakbuy');
if($connect){
//    echo"contected";
    
    $query = "INSERT INTO contactus (name, email, phone, subject, message) VALUES('".$_POST["name"]."','".$_POST["email"]."',".$_POST["phone"].",'".$_POST["subject"]."', '".$_POST["your-message"]."')";
    
        $run = mysqli_query($connect,$query);
    
    if($run){
        
        header('location:contact_us.php?success=1');
       
    }
    else{
        
        header('location:contact_us.php?success=0');
       
        
    }
    
}


}

?>

<main style="margin-bottom: 233px;">

    <section>

        <div class="container-fluid contact_us">

            <div class="container inner-contactus">

                <h1>Contact Us</h1>

            </div>


        </div>

    </section>



    <section>

        <!--     contact_us_cards-->

        <div class="container-fluid contactUsMain ">


            <div class="container" style="padding-top: 129px;">

                <div class="row">

                    <!--                 card first-->

                    <div class="contactUS_card text-center ">
                        <img src="home_img/Screenshot_2020-01-12%20Contact%20Us.png" />
                        <h1>About</h1>
                        <p>Lorem ipsum dolor sit amet,
                            consectetur adipiscing
                            elit. Suspendisse</p>

                    </div>


                    <!--                 card 2-->

                    <div class="contactUS_card text-center " style="    margin-left: 32px;">
                        <img src="home_img/Screenshot_2020-01-12%20Contact%20Us(1).png" />
                        <h1>E - Mail</h1>
                        <p>03319186108<br />
                            Best support via email<br />
                            PakBuy@gmail.com</p>

                    </div>



                    <!--                 card 3-->

                    <div class="contactUS_card text-center " style="    margin-left: 32px;">
                        <img src="home_img/Screenshot_2020-01-12%20Contact%20Us(2).png" />
                        <h1>Address</h1>
                        <p>The Edwardes collage <br />
                            mall raod peshawar city,<br />
                            Pakistan.</p>

                    </div>

                </div>


            </div>


            <!--                FORM                -->


            <div class="container" style="margin-top: 135px; margin-bottom: 100px;">
                <div class="row">

                    <div id="map"></div>






                    <div class="form">
                        
                        
<!--contactusgetdata.php-->
                        <form  action="" method="post" onsubmit="return validation()" style="margin-left: 15px;">

                            <div class="row" style="margin-left: -30px; margin-bottom: 26px;">




                                <div class="formINput col-lg-12">
                                    <input type="text" class="form-control dd" placeholder="Name" name="name" id="name">
                                    <span class="text-danger text-bold" id="sname"></span>
                                </div>





                                <div class="formINput2 col-lg-12">
                                    <input type="email" class="form-control" placeholder="Email" name="email" id="email">
                                    <span class="text-danger" id="ename"></span>
                                </div>


                            </div>






                            <div class="row" style="margin-left: -30px; margin-bottom: 26px;">

                                <div class="formINputph col-lg-12">
                                    <input type="text" class="form-control pp" placeholder="Phone" name="phone" id="phone">
                                    <span class="text-danger" id="pname"></span>
                                </div>

                            </div>






                            <div class="row" style="margin-left: -30px; margin-bottom: 26px;">

                                <div class="formINputph col-lg-12">
                                    <input type="text" class="form-control pp" placeholder="Subject" name="subject" id="subject">
                                    <span class="text-danger" id="ssname"></span>
                                </div>

                            </div>







                            <div class="row" style="margin-left: -30px; margin-bottom: 26px;">

                                <div class="formINputph col-lg-12">
                                    <textarea name="your-message" cols="40" rows="3" class="form-control" placeholder="Message" id="textarea"></textarea>
                                    <span class="text-danger" id="tname"></span>
                                </div>

                            </div>

                               <?php
                            
                            if(  isset($_GET["success"]) && $_GET["success"]==1  ){
                                ?>
                            <div class="alert alert-success "  id="contectusSuccess"> 
                            
                            <p>FORM SENT</p>
                            </div>
                            
                           
                                
                            <?php
                            }
                            
                            
                            
                            ?>

                            <button type="submit" class="btn  .btn-sm " id="sendNow">Send Now</button>

                        </form>




                    </div>

                </div>
            </div>







        </div>

    </section>







</main>





<!--Footer-->


<?php

    include('footer.php')


?>




<!--    ADDING MAP-->

<script type="text/javascript">
    // function myMap() {
    // 	   	var mapOptions ={
    // 	   	center: new google.maps.LatLng(34.00881, 71.52220),
    // 	   	zoom:4,
    // 	   	mapTypeId: google.maps.MapTypeId.ROADMAP
    // 	   	}
    // 		var map = new google.maps.Map(document.getElementById("map"), mapOptions);
    // 	   }
    function myMap() {
        var positionMap = {
            lat: 34.007224,
            lng: 71.551476
        };
        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 16.5,
            center: positionMap
        });
        var marker = new google.maps.Marker({
            position: positionMap,
            map: map,
            animation: google.maps.Animation.BOUNCE
        });
        var infowindow = new google.maps.InfoWindow({
            content: "Peshawar Saddar "
        });
        infowindow.open(map, marker);


    }





    //        Form validation
    //        


    function validation() {


        var name = document.getElementById("name").value;
        var email = document.getElementById("email").value;
        var phone = document.getElementById("phone").value;
        var subject = document.getElementById("subject").value;
        var textarea = document.getElementById("textarea").value;


        //        
        //        name validation

        if (name == "") {

            document.getElementById("sname").innerHTML = "** Please fill  the name field ** ";
            return false;


        } else if ((name.length <= 1) || (name.length > 20)) {

            document.getElementById("sname").innerHTML = "** Name must contain more than 2 characters and less than 20 ** ";
            return false;

        } else if (!isNaN(name)) {

            document.getElementById("sname").innerHTML = "** Please enter  character not number ** ";
            return false;

        }





        //        email validation




        if (email == "") {

            document.getElementById("ename").innerHTML = "** Please fill the email field ** ";
            return false;


        }

        if (email.indexOf('@') <= 0) {

            document.getElementById("ename").innerHTML = "** Please  correct the postion of @  email ** ";
            return false;


        }


        if ((email.indexOf('.') != email.length - 4) && (email.charAt(email.length - 3) != '.')) {

            document.getElementById("ename").innerHTML = "** Please  correct the postion of .  email ** ";
            return false;


        }









        //        phone validation


        if (phone == "") {

            document.getElementById("pname").innerHTML = "** Please fill the phone field ** ";
            return false;


        } else if (isNaN(phone)) {

            document.getElementById("pname").innerHTML = "** Please enter digits ** ";
            return false;


        } else if (phone.length != 11) {

            document.getElementById("pname").innerHTML = "** Please enter 10 digits phone number ** ";
            return false;


        }






        if (subject == "") {

            document.getElementById("ssname").innerHTML = "** Please fill the subject field ** ";
            return false;


        }




        if (textarea == "") {

            document.getElementById("tname").innerHTML = "** Please fill the textarea field ** ";
            return false;


        }

    }
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCTbYZF_kDxKNopcvej6oh-eVs1z9Xq2J0&callback=myMap"></script>


