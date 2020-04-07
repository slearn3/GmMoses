<?php include_once "include/headerPrayer.php" ?>
        <div class="row">
          <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12 align-self-center">
           <!-- <h3 class="text-center text-white wow fadeIn animated slower dealy-1s">Prophet GM MOses</h3> -->
          <h1 class="display-4 text-uppercase text-center text-white font-weight-bold wow fadeInUp animated slower dealy-2s slower p-4">Prayer Request</h1>
          </div>
         <!-- <div class="col-lg-6 col-sm-6 col-md-12 col-xs-12">
            <img class="img-fluid wow fadeIn animated slower dealy-1s" src="img/img.png" width="60%" alt="image" />
          </div>-->
        </div>
      </div>
    </div>
    <!--/header-->
    <div class="p-4 clear">
    </div>
    <!--section_1-->
   <div class="section_1">
     <div class="container">
     <div class= "row">
     <div class="col-lg-10 col-sm-10 col-md-10 col-xs-12">
       <h4 class="text-left wow fadeIn animated slower dealy-2s slower"> SUBMIT YOUR PRAYER REQUEST </h4>
       <p class="text-left text-lead wow fadeIn animated slower dealy-1s">We are delighted that you have chosen to visit our website! We welcome you, and pray the Word of God delivered from this ministry becomes a testimony you can share with friends and family.</p>
     <!--form-->
     <div id="error"></div>
            <form class="contactForm" name="form"  Onsubmit="return Submit();" method="POST" action= "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?> "  >

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
            <!--form--end>-->
     </div>
     <div class="col-lg-2 col-sm-2 col-md-2 col-xs-12"></div>
      </div>
      </div>
   </div>
   <!--/section_1-->
   <div class="p-4 clear">
    </div>
<!--section_6-->
<div class="section_6 pb-4">
  <div class="container pb-4">
    <h3 class="text-center"> Join us on Social Media</h3>
    <p class="text-center wow fadeIn animated slower dealy-2s slow"> Find and network with Bethel Tower is a Prophetic Ministry today!</p>
    <div class="icon text-center wow fadeIn animated slower dealy-2s slow">
    <a href=""><i class="fab fa-facebook-f fa-2x p-2"></i></a>
    <a href=""> <i class="fab fa-twitter fa-2x p-2"></i></a>
    <a href=""><i class="fab fa-instagram fa-2x p-2"></i></a>
    <a href=""><i class="fab fa-youtube fa-2x p-2"></i></a>
  </div>
  </div>
</div>
<!--/section_6-->
<?php include_once"include/footer.php"; ?>