$(document).ready(function(){
    $("#nav-header").click(function(){ //Toggles expanding the nav menu
        $("nav ul:first").toggleClass("expand");
    });
    $(".nav-submenu").click(function(){ //Toggles expanding the first submenu
        $("nav ul ul").toggleClass("expand");
    });


    //Highlights the link for the current page in the nav menu
    $("nav [href]").each(function() {
        if (this == window.location.href) {
            $(this).parent().addClass("active");
            return(false);
        }
        else if (window.location.href == "http://theale-hastelow.com/") {
            $('#navbar a[href^="index.php"]').parent().addClass("active");
            return(false);
        }
    });
});
