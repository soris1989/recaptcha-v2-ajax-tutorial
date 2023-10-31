<?php
require_once __DIR__ . '/./vendor/autoload.php';
require_once __DIR__ . '/./inc/constant.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recaptcha V2 Tutorial</title>

    <link rel="stylesheet" href="./public/css/style.css?v=" . <?= time() ?>">
</head>
<body>
    <div id="central">
        <div class="content">
            <h1>Contact Form</h1>
            <p>Send your comments through this form and we will get back to you. </p>
            <div id="message">
            <form id="frmContact" action="" method="POST" novalidate="novalidate">
                <div class="label">Name:</div>
                <div class="field">
                    <input type="text" id="name" name="name" placeholder="enter your name here" title="Please enter your name" class="required" aria-required="true" required>
                </div>
                <div class="label">Email:</div>
                <div class="field">			
                    <input type="text" id="email" name="email" placeholder="enter your email address here" title="Please enter your email address" class="required email" aria-required="true" required>
                </div>
                <div class="label">Phone Number:</div>
                <div class="field">			
                    <input type="text" id="phone" name="phone" placeholder="enter your phone number here" title="Please enter your phone number" class="required phone" aria-required="true" required>
                </div>
                <div class="label">Comments:</div>
                <div class="field">			
                    <textarea id="comment-content" name="content" placeholder="enter your comments here"></textarea>			
                </div>
                <div class="g-recaptcha" data-sitekey="<?php echo SITE_KEY; ?>"></div>			
                <div id="mail-status"></div>			
                <button type="Submit" id="send-message" style="clear:both;">Send Message</button>
            </form>
            <div id="loader-icon" style="display:none;"><img src="./public/img/loader.gif" /></div>
            </div>		
        </div><!-- content -->
    </div><!-- central -->	

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://www.google.com/recaptcha/api.js"></script>	
    <script src="./public/js/index.js?v=" . <?= time() ?>></script>
  </script>
</body>
</html>