<?php 
$name = $email = $subject = $message = $success_message = $error_message = "";


//new
if( isset($_POST['name']) && isset($_POST['email'])&& isset($_POST['subject']) && isset($_POST['message'])){
	$n = $_POST['name']; // HINT: use preg_replace() to filter the data
	$e = $_POST['email'];
	$s = $_POST['subject'];
    //$u = $_POST['message'];

	$m = nl2br($_POST['message']);
	$to = "mosesdasari13@gmail.com";	
	$from = $e;
	$subject = 'Contact Form Message';
	$message = '<b>Name:</b> '.$n.' <br><b>Email:</b> '.$e.' <br/> <b>Subject</b>'.$s.' <br><b>Message:</b> '.$m.' ';
	$headers = "From: $from\n";
       // $phone = $p;
	$headers .= "MIME-Version: 1.0\n";
	$headers .= "Content-type: text/html; charset=iso-8859-1\n";
        
	if( mail($to, $subject, $message, $headers) ){
        //echo "success";
        $success_message = "message deliverd successfully";
	} else {
		$error_message = "The server failed to send the message. Please try again later.";
	}

}


?>


<?php include_once "include/header.php" ?>
        <div class="row">
          <div class="col-lg-6 col-sm-6 col-md-12 col-xs-12 float-right align-self-center">
            
          <h3 class="display text-center text-white font-weight-bold shadow wow fadeInUp animated slower dealy-2s slower bg-dark p-2">
          Thank you for visiting our websit. We’re here to assist you, and pray for you. Simply contact us via any of the convenient methods below and someone from our team will follow up with you soon.
          </h3>
          </div>
          <div class="col-lg-6 col-sm-6 col-md-12 col-xs-12">
            <img class="img-fluid wow fadeIn animated slower dealy-1s" src="img/prayer-1.png" width="70%" alt="image" />
          </div>
        </div>
      </div>
    </div>
    <!--/header-->
    
  <!--section-1-->
 <div class="section_1">

    <!--Section: Contact v.2-->
<div class="container" >
    <!--Section heading-->
    <h2 class="h1-responsive font-weight-bold text-center my-3 wow animated fadeInUp">
Contact us</h2>
    <!--Section description-->
    <p class="text-center w-responsive mx-auto wow animated fadeInUp">Do you have any questions? Please do not hesitate to contact us directly. Our team will come back to you within
        matter of hours to help you.</p>

    <div class="row">

        <!--Grid column-->
        <div class="col-md-9 mb-md-0 mb-5 wow animated fadeInUp">
            <!--<div id="sendmessage">Your message has been sent. Thank you!</div>-->
            <div id="error"></div>
            <?php echo $success_message; ?>
            <?php echo $error_message; ?>
            <form class="contactForm" name="form"  method="POST" onsubmit = "return Submit();" action= "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?> "  >

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <label for="name" class="">Your name</label>
                            <input type="text"  name="name" class="form-control" data-rule="minlen:4" data-msg="Please enter at least 4 chars" >
                            <div class="validation"></div>
                        </div>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <label for="email" class="">Your email</label>
                            <input type="text"  name="email" class="form-control" data-rule="email" data-msg="Please enter a valid email" >
                            <div class="validation"></div>
                        </div>
                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="md-form mb-0">
                            <label for="subject" class="">Subject</label>
                            <input type="text"  name="subject" class="form-control" >
                            <div class="validation"></div>
                        </div>
                    </div>
                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-12">

                        <div class="md-form">
                            <label for="message" class="">Your message</label>
                            <textarea type="text"  name="message" rows="2" class="form-control md-textarea" data-rule="required" data-msg="Please write something for us" ></textarea>
                            <div class="validation"></div>
                        </div>

                    </div>
                </div>
                <!--Grid row-->
                <br/>
                <div class="text-center text-md-left">
                        <!--<a class="btn btn-primary" onclick="document.getElementById('contact-form').submit();">Send</a>-->
                        <button class="btn btn-warning"    >Submit </button>
                    </div>
            </form>
            <div class="status"></div>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-md-3 text-center">
            <ul class="list-unstyled mb-0">
                <li class="wow animated fadeInUp"><i class="fa fa-map-marker contact-icon-color text-warning font-weight-bold mt-4 fa-2x"></i>
                    <p class=""> 
					Chilukala Building, Shanthi Nagar Colony Vishwa Karma Colony, 
					Balaji Nagar Secunderabad, near Electricity Transformer, 
					Hyderabad, Telangana 500078
					</p>
                </li>
    <li class="wow animated fadeInUp"><i class="fa fa-phone contact-icon-color text-warning font-weight-bold mt-4 fa-2x"></i>
                    <p class="">91 9908020772</p>
                </li>

                <li class="wow animated fadeInUp"><i class="fa fa-envelope contact-icon-color text-warning font-weight-bold mt-4 fa-2x"></i>
                    <p class="">info@gmmoses.com</p>
                </li>
            </ul>
        </div>
        <!--Grid column-->
    </div>
</div>
<!--Section: Contact v.2-->
 </div>
 <!--/section-1-->
     
<?php include_once"include/footer.php"; ?>