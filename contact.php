<?php  session_start();
include("header.php");
//5.Connecting to DB
// Check for empty fields
if ($_SERVER["REQUEST_METHOD"] == "POST") {
if(empty($_POST['name'])      ||
   empty($_POST['email'])     ||
   empty($_POST['phone'])     ||
   empty($_POST['message'])   ||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
   echo "No arguments Provided!";
   return false;
   }
   
$name = strip_tags(htmlspecialchars($_POST['name']));
$email_address = strip_tags(htmlspecialchars($_POST['email']));
$phone = strip_tags(htmlspecialchars($_POST['phone']));
$message = strip_tags(htmlspecialchars($_POST['message']));
   
// Create the email and send the message
$to = 'bharatborude23@gmail.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "Website Contact Form:  $name";
$email_body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email_address\n\nPhone: $phone\n\nMessage:\n$message";
$headers = "From: bharatsb23@gmail.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Reply-To: $email_address";   
mail($to,$email_subject,$email_body,$headers);
return true;         
  }

?>





  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <h2>संपर्क</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="row">
          <div class="col-lg-6">
            <a href="https://maps.app.goo.gl/AX5E1GnAefKy7i6w9">
            <div class="info-box mb-4">
              <i class="bx bx-map"></i>
              <h3>आमचा पत्ता</h3>
              <p>Shree Renuka Devi Temple, Belgaon, <br>Tal. Ashti, Dist. Beed - 414203, India</p>
            </div>
            </a>
          </div>

          <div class="col-lg-3 col-md-6">
            <a href="mailto:mayuripokale1412@gmail.com">
            <div class="info-box  mb-4">

              <i class="bx bx-envelope"></i>
              <h3>आम्हाला ईमेल करा</h3>
              <p>info@example.com</p>
            </div>
            </a>
          </div>

          <div class="col-lg-3 col-md-6">
            
            <div class="info-box  mb-4">
            <a tel="+919876543210">
              <i class="bx bx-phone-call"></i>
              <h3>आम्हाला कॉल करा</h3>
              <p>+91 9876543210</p></a>
            </div>

          </div>

        </div>

        <div class="row">

          <div class="col-lg-6 ">
          <h3>गुगल नकाशा</h3>
            <iframe class="mb-4 mb-lg-0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d17959.488448337586!2d75.17100816231263!3d18.86411588657507!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x9d0e17a5f30d0f97!2sRenuka%20Mandir!5e0!3m2!1sen!2sin!4v1626455844323!5m2!1sen!2sin" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
          </div>

          <div class="col-lg-6">
          
          <form name="sentMessage" id="contactForm" novalidate method="POST">

          <h3>आम्हाला एक संदेश पाठवा</h3>
            <div class="control-group form-group">
              <div class="controls">
                <label for="name">पूर्ण नाव :</label>
                <input type="text" class="form-control" id="name" required data-validation-required-message="Please enter your name.">
                <p class="help-block"></p>
              </div>
            </div>
            <div class="control-group form-group">
              <div class="controls">
                <label>फोन नंबर :</label>
                <input type="tel" class="form-control" id="phone" required data-validation-required-message="Please enter your phone number.">
              </div>
            </div>
            <div class="control-group form-group">
              <div class="controls">
                <label>ईमेल पत्ता :</label>
                <input type="email" class="form-control" id="email" required data-validation-required-message="Please enter your email address.">
              </div>
            </div>
            <div class="control-group form-group">
              <div class="controls">
                <label>संदेश:</label>
                <textarea rows="5" cols="100" class="form-control" id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
              </div>
            </div>
            <div id="success"></div>
            <!-- For success/fail messages -->
            <button type="submit" class="btn btn-primary" id="sendMessageButton">संदेश पाठवा</button>
          </form>
          </div>

        </div>


      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->





<?php include("footer.php");?>
    <!-- Contact form JavaScript -->
    <!-- Do not edit these files! In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>