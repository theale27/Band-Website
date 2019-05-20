<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="favicon.png" type="image/png">
    <title>Skeletonwitch - Homepage</title>
    <link href="css/style.css" type="text/css" rel="StyleSheet" media="screen" />
    <link href="css/print.css" type="text/css" rel="StyleSheet" media="print" />
</head>

<body>
    <?php
    include ('header.php');
    include ('config.php'); // load the config file
    include ('connect.php'); // load the connection instructions

    $message = false; // define this variable "false" as default
    $website_title = "Skeletonwitch"; // define this variable so we can use it later!

    if (isset($_POST['submit'])){ // check that the submit button has been clicked (sent in the $_POST data)
        // when the form is submitted correctly, get the name and email from the post data and save them to variables:
        $new_name = $_POST['name'];
        $new_email = $_POST['email'];

        $sql = "INSERT INTO signups (name, email)
    VALUES ('$new_name', '$new_email')"; // create the SQL statement, using the name and email variables from above

        if (mysqli_query($conn, $sql)) {
            // if successful, define $message variable with this success text.
            $message = "Thank you! You will now be in touch with our latest news.";
        } else {
            // otherwise define the $message variable with the error that happened.
            $message = "Error: Duplicate Credentials Detected, please try again";
        }

        mysqli_close($conn); // close $conn as good practice (security)
    }
    ?>
    <img class="skeletonwitch-logo" src="/img/Skeletonwitch_Logo.png" alt="Skeletonwitch Logo">
    <div id="push-top"></div>
    <section id="main">
        <div class="col-1">
            <form role="form" id="feedbackForm" class="feedbackForm-col1" method="post">
                <div class="form-group">
                    <p>Sign up to get the latest Skeletonwitch news!</p>
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" placeholder=" Name"><br>
                    <span class="help-block">Please enter your name.</span>
                    <label for="email">E-Mail:</label>
                    <input type="email" class="" id="email" name="email" placeholder=" Email Address">
                </div>
                <button type="submit" name="submit" id="feedbackSubmit"> Sign up!</button>
            </form>

            <?php
            // the $message variable is false by default so this only shows what's inside here when the form is submitted
            if($message): ?>
            <div class="container">
                <div class="alert alert-info">
                    <?php echo $message; ?>
                </div>
            </div><br><!-- /.container -->
            <?php endif; ?>

            <div class="post">
                <h1>UPCOMING AUSTRALIAN TOUR!</h1><br>
                <p>We're happy to announce our upcoming Australian tour.<br>
                    Check out our <a href="tour_dates.php">tour dates</a> page for details.</p>
            </div>
            <div class="post">
                <h1>UPCOMING AUSTRALIAN TOUR!</h1><br>
                <p>We're happy to announce our upcoming Australian tour.<br>
                    Check out our <a href="tour_dates.php">tour dates</a> page for details.</p>
            </div>
            <div class="post">
                <h1>UPCOMING AUSTRALIAN TOUR!</h1><br>
                <p>We're happy to announce our upcoming Australian tour.<br>
                    Check out our <a href="tour_dates.php">tour dates</a> page for details.</p>
            </div>
        </div>
        <div class="col-2">
            <div class="social-media">
                <a href="http://www.facebook.com/skeletonwitch"><img src="/img/Logo-Red_Facebook.png" alt="Skeletonwitch Facebook"></a>
                <a href="http://www.instagram.com/skeletonwitch"><img src="/img/Logo-Red_Instagram.png" alt="Skeletonwitch Facebook"></a>
                <a href="http://www.twitter.com/Skeletonwitch"><img src="/img/Logo-Red_Twitter.png" alt="Skeletonwitch Facebook"></a>
            </div><br>

            <form role="form" id="feedbackForm" class="feedbackForm-col2" method="post">
                <div class="form-group">
                    <p>Sign up to get the latest Skeletonwitch news!</p>
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" placeholder=" Name"><br>
                    <span class="help-block">Please enter your name.</span>
                    <label for="email">E-Mail:</label>
                    <input type="email" class="" id="email" name="email" placeholder=" Email Address">
                </div>
                <button type="submit" name="submit" id="feedbackSubmit"> Sign up!</button>
            </form>

            <?php
            // the $message variable is false by default so this only shows what's inside here when the form is submitted
            if($message): ?>
            <div class="container">
                <div class="alert alert-info">
                    <?php echo $message; ?>
                </div>
            </div><br><!-- /.container -->
            <?php endif; ?>

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
