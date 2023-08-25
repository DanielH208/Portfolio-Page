$( "#about-me-content-container" ).click(function() {
    alert( "aaaaaaaaaaaaaaaaaa" );
  });


$("#about-me-info").typewriter({
    waitingTime: 0,
    delay: 70,
    hide: 0,
    cursor:true,

});

// $("#about-me button").on("click", () => {
//     $(".sidenav").show();
//     $("#about-me button").addClass("hamburger hamburger--slider is-active");
//     $("#about-me button").css("margin-left", "130px");
// })
// $("#about-me button").off("click", () => {
//     $(".sidenav").hide();
//     $("#about-me button").removeClass("hamburger hamburger--slider is-active");
//     $("#about-me button").css("margin-left", "0px")
// })

let switchStatus = false;  
$("#about-me button").on('click', function() {  
    if (switchStatus == false) {
        $(".sidenav").show();
        $("#about-me button").addClass("hamburger hamburger--slider is-active");
        $("#about-me button").css("margin-left", "130px");
        $("main").css("filter", "brightness(50%)")
        $("footer").css("filter", "brightness(50%)")
        switchStatus = true;
    }
    else {
        $(".sidenav").hide();
        $("#about-me button").removeClass("hamburger hamburger--slider is-active");
        $("#about-me button").css("position", "absolute");
        $("#about-me button").css("padding", "15px");
        $("#about-me button").css("margin-left", "0px");
        $("main").css("filter", "brightness(100%)")
        $("footer").css("filter", "brightness(100%)")
        switchStatus = false;
    }
});


// $("#about-me button").click(() => {
    
//     $(".sidenav").toggle();
//     // $("#about-me button").slideToggle(() => {
//     //     $("#about-me button").addClass("hamburger hamburger--slider is-active");
//     // });

    


//     // $("#about-me button").css("margin-left", "130px");
//     // $(".sidenav").toggle(() => {
//     //     $("#about-me button").css("margin-left", "0px");
        
//     // });
//     // $("#about-me button").css("margin-left", "0px");
    
// }).addClass("hamburger hamburger--slider is-active");

