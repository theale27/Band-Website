<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="favicon.png" type="image/png">
    <title>Skeletonwitch - Photos</title>
    <link href="css/style.css" type="text/css" rel="StyleSheet" media="screen" />
    <link href="css/print.css" type="text/css" rel="StyleSheet" media="print" />
</head>

<body>
    <?php include ('header.php'); ?>
    <img class="skeletonwitch-logo" src="/assesstwo/img/Skeletonwitch_Logo.png" alt="Skeletonwitch Logo">
    <div id="push-top"></div>
    <section id="main">
        <div class="slideshow">
            <img class="slides" src="/assesstwo/img/photos/skeletonwitch-01.jpg">
            <img class="slides" src="/assesstwo/img/photos/skeletonwitch-02.jpg">
            <img class="slides" src="/assesstwo/img/photos/skeletonwitch-03.jpg">
            <img class="slides" src="/assesstwo/img/photos/skeletonwitch-04.jpg">
            <img class="slides" src="/assesstwo/img/photos/skeletonwitch-05.jpg">

            <div class="arrows">
                <div class="left-arrow" onclick="plusDivs(-1)">&#10094;</div>
                <div class="right-arrow" onclick="plusDivs(1)">&#10095;</div>
            </div>
        </div>
        <div class="gallery">
            <img src="/assesstwo/img/photos/skeletonwitch-small-01.jpg">
            <img src="/assesstwo/img/photos/skeletonwitch-small-02.jpg">
            <img src="/assesstwo/img/photos/skeletonwitch-small-03.jpg">
            <img src="/assesstwo/img/photos/skeletonwitch-small-04.jpg">
            <img src="/assesstwo/img/photos/skeletonwitch-small-05.jpg">
        </div>
        <div id="modal">
            <img id="modal-content">
        </div>
    </section>
    <?php include ('footer.php'); ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="js/include.js"></script>
    <script src="js/photos.js"></script>
</body>
</html>
