<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="favicon.png" type="image/png">
    <title>Skeletonwitch - Contact</title>
    <link href="css/style.css" type="text/css" rel="StyleSheet" media="screen" />
    <link href="css/print.css" type="text/css" rel="StyleSheet" media="print" />
</head>

<body>
    <?php include ('header.php'); ?>
    <img class="skeletonwitch-logo" src="/assesstwo/img/Skeletonwitch_Logo.png" alt="Skeletonwitch Logo">
    <div id="push-top"></div>
    <section id="main">
        <div class="col-1">
            <h1>Contact</h1><br>
            <p>Management and Band Contact: Scott Hedrick: </p>
            <a href="mailto:scott@skeletonwitch.com" target="_top">scott@skeletonwitch.com</a>
            <br><br>
            <p>Press Contact: Prosthetic Records: </p>
            <a href="mailto:kelly@prostheticrecords.com" target="_top">kelly@prostheticrecords.com</a>
            <br><br>
            <p>U.S. Booking: Nick Storch at  Artist Group International: </p>
            <a href="mailto:nick.storch@artistgrp.com" target="_top">nick.storch@artistgrp.com</a>
            <br><br>
            <p>European/UK Booking: Marco Walzel at Avocado Booking: </p>
            <a href="mailto:marco@avocado-booking.com" target="_top">marco@avocado-booking.com</a>

            <div id="email-form">
                <form action="MAILTO:skeletonwitch@email.com?Subject=Skeletonwitch" method="post" enctype="text/plain">
                    <h2>Send us an email</h2><br>
                    <label>Your Name:</label><br>
                    <input type="text" name="name" required=""><br>
                    <label>Your Email Address:</label><br>
                    <input type="text" name="email" required=""><br>
                    <label>Your Message:</label><br>
                    <textarea rows="5" cols="40" name="message" required=""></textarea><br>
                    <button type="submit" value="Send">Send Email</button>
                </form>
            </div>
        </div>
        <div class="col-2">
            <div class="social-media">
                <a href="http://www.facebook.com/skeletonwitch"><img src="/assesstwo/img/Logo-Red_Facebook.png" alt="Skeletonwitch Facebook"></a>
                <a href="http://www.instagram.com/skeletonwitch"><img src="/assesstwo/img/Logo-Red_Instagram.png" alt="Skeletonwitch Facebook"></a>
                <a href="http://www.twitter.com/Skeletonwitch"><img src="/assesstwo/img/Logo-Red_Twitter.png" alt="Skeletonwitch Facebook"></a>
            </div><hr><br>
            <div class="twitter-feed">
                <h1>Twitter Feed</h1><br>
                <a class="twitter-timeline" data-lang="en" data-height="500" data-theme="dark" data-link-color="#d0070d" href="https://twitter.com/Skeletonwitch">Loading Twitter Feed...</a>
                <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
            </div>
            <br>
        </div>
    </section>
    <?php include ('footer.php'); ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="js/include.js"></script>
</body>
</html>
