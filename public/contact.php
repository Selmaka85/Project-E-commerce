
<!-- Configuration-->
<?php require_once("../resources/config.php"); ?>
<!-- Header-->
<?php include(TEMPLATE_FRONT .  "/header.php");?>
     <!--Navigation -->
         <!-- Contact Section -->
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Contact Us</h2>
                    <h3 class="section-subheading"></h3>
                </div>
            </div>
             <h1 class="text-center bg-warning text-danger"><?php display_message(); ?></h1>
            <div class="row">
                <div class="col-lg-12">
                    <form name="sentMessage" id="contactForm" method="post">
                        <?php contact_us(); ?>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Your Name *" id="name" required data-validation-required-message="Please enter your name." name="name">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Your Email *" id="email" required data-validation-required-message="Please enter your email address." name="email">
                                    <p class="help-block text-danger" ></p>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Your Subject *" id="phone" required data-validation-required-message="Please enter your phone number." name="subject">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Your Message *" id="message" required data-validation-required-message="Please enter a message." name="message"></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button type="submit" class="btn btn-xl" name="submit">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div><br><hr><br>            
                <iframe  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2484.997892857378!2d0.3108304156017882!3d51.47655297963004!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d8b71c6a739d95%3A0x2c74e41089cf4fa1!2s149F+London+Rd%2C+Grays+RM17+5YD!5e0!3m2!1sen!2suk!4v1527949387265" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div>
    <!-- /.container -->
<?php include(TEMPLATE_FRONT .  "/footer.php");?>