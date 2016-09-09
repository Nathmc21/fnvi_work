<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
if (isset($_POST['submit']) && !empty($_POST['submit'])):
    if (isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])):
        //your site secret key
        $secret = '6LfXwikTAAAAAMyEKreIm8rrCO142IFQX6lui0qK';
        //get verify response data
        $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret=' . $secret . '&response=' . $_POST['g-recaptcha-response']);
        $responseData = json_decode($verifyResponse);
        if ($responseData->success):

            //contact form submission code
            $name = !empty($_POST['name']) ? $_POST['name'] : '';
            $email = !empty($_POST['email']) ? $_POST['email'] : '';
            $message = !empty($_POST['message']) ? $_POST['message'] : '';

            $to = 'josh@fnvi.co.uk';
            $subject = 'New message from FNVi Contact Form';
            $htmlContent = "
                <h1>Contact request details</h1>
                <p><b>Name: </b>" . $name . "</p>
                <p><b>Email: </b>" . $email . "</p>
                <p><b>Message: </b>" . $message . "</p>
            ";
            // Always set content-type when sending HTML email
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
            // More headers
            $headers .= 'From:' . $name . ' <' . $email . '>' . "\r\n";
            //send email
            @mail($to, $subject, $htmlContent, $headers);

            $succMsg = '<div class="alert alert-success"><strong>Success!</strong> Your messsage has successfully been delivered!</div>';

        else:
            $errMsg = '<div class="alert alert-danger"><strong>Error!</strong> Robot verification failed, please try again.</div>';
        endif;
    else:
        $errMsg = '<div class="alert alert-danger"><strong>Error!</strong> Please click on the reCAPTCHA box.</div>';
    endif;
else:
    $errMsg = '';
    $succMsg = '';
endif;
?>
<?php include 'header.php' ?>
</header><!--/header-->
<section id="main-slider" class="no-margin">
    <div class="carousel slide">
        <div class="carousel-inner">
            <div class="item active img-responsive" style="background-image: url(http://cdn1.editmysite.com/uploads/7/0/8/6/70866019/background-images/177987637.jpg)">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="carousel-content centered">

                            </div>
                        </div>
                    </div>
                </div>
            </div><!--/.item-->

        </div><!--/.carousel-inner-->
    </div><!--/.carousel-->
</section><!--/#main-slider-->
<div class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <?php echo $errMsg ?> 
                <?php echo $succMsg ?>
                <form class="form-horizontal" role="form" action="" method="POST">
                    <div class="form-group">
                        <input placeholder="First and Last Name" name="name" type="text" class="form-control">
                    </div>
                    <div class="form-group">
                        <input placeholder="E-mail" type="email" name="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <textarea placeholder="Your Message" rows="5" name="message" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <span>Captcha should appear below here...</span>
                    </div>
                    <div class="form-group">
                        <div class="g-recaptcha" data-sitekey="6LfXwikTAAAAAK2FYn4s3Sv_rbqlV5sKgeVQaLwA"></div>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-default" type="submit" name="submit" value="SUBMIT">Submit</button>
                    </div>
                </form>
            </div>
            <div class="col-md-6">
                <h3>Email Address</h3>
                <a href="mailto:">nathanmcglade@email.com</a>
                <h3>Telephone Number</h3>
                <a href="tel:">123-456-7890</a>
                <h3>Physical Address</h3>
                <p>11 Fake Street</p>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9248.998270190794!2d-1.2341344113159183!3d54.58197647360214!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x8fa1bd92be1e5f16!2sMiddlesbrough+College!5e0!3m2!1sen!2suk!4v1471001584820" frameborder="0" style="border:0" allowfullscreen class="img-responsive"></iframe>

            </div>
        </div>
    </div>
</div>
<hr>
<?php include 'footer.php' ?>