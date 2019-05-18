$(document).ready(function(){
    $(".col-2 button").click(function(){

        $(".col-2 button").removeClass('currently-playing');
        $(this).addClass('currently-playing');

        var YT_VideoURL = $(this).attr('value');
        console.log( YT_VideoURL );

        var YouTubeVideo = $(this).closest(".album").children(".col-3").children('iframe').attr('src'); //Current YouTube Video URL
        console.log( "Current YouTube Video URL: " + YouTubeVideo );

        //Destroy iFrame
        $(this).closest(".album").children(".col-3").children('iframe').remove();
        //Recreate iFrame
        $(this).closest(".album").children(".col-3").append('<iframe width="100%" height="250px" src="' + YT_VideoURL + '" frameborder="0"></iframe>');
    });
});
