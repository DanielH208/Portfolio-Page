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



function regexPassOrFail(regex, input, field) {
    if (regex.test(input)) {
        field.css("border-color", "transparent");
    } else {
        field.css("border-color", "red");
    }
}

function empty(input, field) {
    if (input == "") {
        field.css("border-color", "red");
    } else {
        field.css("border-color", "transparent");
    }
}

$("#submit-button").click((event) => {
    event.preventDefault(); 

    let userEmailInput = $("#form-email").val();
    let emailField = $("#form-email");
    const emailRegex = new RegExp(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/);
    regexPassOrFail(emailRegex, userEmailInput, emailField);


    const nameRegex = new RegExp(/^[A-Za-z]+$/);
    let firstNameInput= $("#form-firstname").val();
    let firstNameField = $("#form-firstname");
    
    let lastNameInput= $("#form-lastname").val();
    let lastNameField = $("#form-lastname");

    let textareaInput = $("#form-textarea").val();
    let textareaField = $("#form-textarea");

    empty(firstNameInput, firstNameField);
    empty(lastNameInput, lastNameField);
    empty(textareaInput, textareaField);
    regexPassOrFail(nameRegex, firstNameInput, firstNameField);
    regexPassOrFail(nameRegex, lastNameInput, lastNameField);
})

$("#slides").slick({
    slidesToShow: 2,
    slidesToScroll: 2,
    arrows: false,
    draggable: false,
    dots: true,
    responsive: [
        {
          breakpoint: 1200,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
          }
        }
    ]
})