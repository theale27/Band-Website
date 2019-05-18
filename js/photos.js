//Slideshow
var index = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("slides");
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
    }
    index++;
    if (index > x.length){
        index = 1
    }
    x[index-1].style.display = "block";
    setTimeout(carousel, 3000); //Change image every 2 seconds
}

//Slideshow Arrows
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
    showDivs(slideIndex += n);
}

function showDivs(n) {
    var i;
    var x = document.getElementsByClassName("slides");
    if (n > x.length) {slideIndex = 1}
    if (n < 1) {slideIndex = x.length}
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
    }
    x[slideIndex-1].style.display = "block";
}

//Gallery
$(".gallery").each(function(){ //Changes gallery image width to responsively fit
    var itemsCount = 4; //Max items in a row
    checkSize(); //Checks window width on load
    $(window).resize( checkSize ); //Checks window width on resize

    function checkSize(){
        if ( window.innerWidth < 769){ //Portrait Tablet + Mobile
            itemsCount = 2;
        }
        else { //Landscape Tablet and above
            itemsCount = 4;
        }
        imageResize();
    }

    function imageResize(){
        var childrenWidth = ((100 / itemsCount) - 1) + '%';
        $('.gallery').children().css('max-width', childrenWidth);
    }
});

//Gallery Popup
$(".gallery img").click(function(){ //Click on a gallery image to make it bigger
    var img = this;
    var modalImg = document.getElementById("modal-content");

    $("#modal").css('display', 'block');
    modalImg.src = this.src;

    //Click on the image to close it
    $("#modal-content").click(function() {
        $("#modal").css('display', 'none');
    });
});
