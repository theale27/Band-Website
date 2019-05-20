<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="favicon.png" type="image/png">
    <title>Skeletonwitch - Tour Dates</title>
    <link href="css/style.css" type="text/css" rel="StyleSheet" media="screen" />
    <link href="css/print.css" type="text/css" rel="StyleSheet" media="print" />
    <link href="css/style_aussie.css" type="text/css" rel="StyleSheet" />
</head>

<body>
    <?php include ('header.php'); ?>
    <img class="skeletonwitch-logo" src="/img/Skeletonwitch_Logo_Aussie.png" alt="Skeletonwitch Aussie Logo">
    <div id="push-top"></div>
    <section id="main">
        <div class="track-artist">
            <a href="http://www.bandsintown.com/track/Skeletonwitch?came_from=176">
                <div class="track-btn">Track Skeletonwitch</div>
                <div class="track-notify"><strong>Notify Me</strong> when Skeletonwitch comes to town.</div>
            </a>
        </div>
        <table id="tour-table">
            <tr>
                <th>DATE</th>
                <th>VENUE</th>
                <th>LOCATION</th>
                <th colspan="2">TICKETS</th>
            </tr>
            <tr>
                <td>Jan 01</td>
                <td>Venue Name</td>
                <td>State, City</td>
                <td><a class="buy-tix" href="#">Tickets</a></td>
                <td><button type="button" class="RSVP-btn">RSVP</button></td>
            </tr>
            <tr>
                <td>Jan 02</td>
                <td>Venue Name</td>
                <td>State, City</td>
                <td><a class="buy-tix" href="#">Tickets</a></td>
                <td><button type="button" class="RSVP-btn">RSVP</button></td>
            </tr>
            <tr>
                <td>Jan 03</td>
                <td>Venue Name</td>
                <td>State, City</td>
                <td><a class="buy-tix" href="#">Tickets</a></td>
                <td><button type="button" class="RSVP-btn">RSVP</button></td>
            </tr>
        </table>
        <div class="col-2">
        </div>
    </section>
    <?php include ('footer.php'); ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="js/include.js"></script>
</body>
</html>
