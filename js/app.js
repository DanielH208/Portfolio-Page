$( "#about-me-content-container" ).click(function() {
    alert( "aaaaaaaaaaaaaaaaaa" );
  });


$("#about-me-info").typewriter({
    waitingTime: 0,
    delay: 70,
    hide: 0,
    cursor:true,

});

let switchStatus = false;  
$("#about-me button").on('click', function() {  
    if (switchStatus == false) {
        $("main").css("filter", "brightness(50%)");
        $("footer").css("filter", "brightness(50%)"); 
        $("#sidenav").addClass(" animate__slideInLeft");
        $("#about-me button").addClass("hamburger hamburger--slider is-active");
        $("#about-me button").removeClass("animate__animated animate__slideOutLeft");
        $("#about-me button").addClass("animate__animated animate__slideInLeft");
        $("#about-me button").css("margin-left", "140px");
        $("#sidenav").show();
        switchStatus = true;
    } 
    else {
        $("main").css("filter", "brightness(100%)");
        $("footer").css("filter", "brightness(100%)");
        $("#sidenav").removeClass(" animate__slideInLeft");
        $("#sidenav").addClass(" animate__slideOutLeft");
        $("#about-me button").removeClass("hamburger hamburger--slider is-active");
        $("#about-me button").css("position", "absolute");
        $("#about-me button").css("padding", "15px");
        $("#about-me button").css("margin", "10px");
        $("#about-me button").css("border-radius", "6px");
        $("#sidenav").slideUp(1000);
        switchStatus = false;
        
        
    }
    $("#sidenav").removeClass(" animate__slideOutLeft");
    
});


