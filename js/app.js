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

$("#submit-button").click((event) => {
    alert("click");
    event.preventDefault(); 
    let userInput = $("#form-email").val();
    alert(userInput);
    //let userInput = "john.smith@gmail.com";
    let field = $("#form-email");
    const regex = new RegExp(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/);
    if (regex.test(userInput)) {
        alert("done");
        field.css("border-color", "transparent");
        return true;
    }
    else {
        field.css("border-color", "red");
        alert("false");
        return false;
    }
})
