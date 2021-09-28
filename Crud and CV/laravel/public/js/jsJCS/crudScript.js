//DOCUMENTATION
// Swal.fire({
	// title:
	// text:
	// html:
	// icon:
	// confirmButtonText:
	// footer:
	// width:
	// padding:
	// background:
	// grow:
	// backdrop:
	// timer:
	// timerProgressBar:
	// toast:
	// position:
	// allowOutsideClick:
	// allowEscapeKey:
	// allowEnterKey:
	// stopKeydownPropagation:

	// input:
	// inputPlaceholder:
	// inputValue:
	// inputOptions:
	
	//  customClass:
	// 	container:
	// 	popup:
	// 	header:
	// 	title:
	// 	closeButton:
	// 	icon:
	// 	image:
	// 	content:
	// 	input:
	// 	actions:
	// 	confirmButton:
	// 	cancelButton:
	// 	footer:	

	// showConfirmButton:
	// confirmButtonColor:
	// confirmButtonAriaLabel:

	// showCancelButton:
	// cancelButtonText:
	// cancelButtonColor:
	// cancelButtonAriaLabel:
	
	// buttonsStyling:
	// showCloseButton:
	// closeButtonAriaLabel:


	// imageUrl:
	// imageWidth:
	// imageHeight:
	// imageAlt:
//});

// Scripts HOME

var reproductor = document.getElementById("myAudio");
const alertMessaggeStart = document.getElementById("alertMessage");
var goCrud =document.getElementById("button-3");

function playAudio() {
    reproductor.play();
}

function pauseAudio() {
    reproductor.pause();
}
function deleteSection() {
    goCrud.className = 'd-none';
}

//Event Listeners buttons

if(goCrud.addEventListener){
    goCrud.addEventListener("click", deleteSection,false);
}

if(alertMessaggeStart.addEventListener){
    alertMessaggeStart.addEventListener("click", alertMesagge,false);
}



jQuery(function ($) {
    $(window).on("load", function () {
        // Pureba jquery
        console.log("cargado JQUERY");
        //funcion confirmar contraseña

        console.log("cargado DATA TABLE");

        $("#pass2").keyup(function () {
            var pass1 = $("#pass1").val();
            var pass2 = $("#pass2").val();

            if (pass2 != pass1) {
                $("#errorPass").text("No coinciden").css("color", "red");
                document.getElementById("enviarFormulario").disabled = true;
            } else if (pass1 == "") {
                function soloLectura() {
                    document.getElementById("#enviarFormulario").type =
                        "button";
                }
            } else {
                $("#errorPass").text("Coinciden").css("color", "green");
                document.getElementById("enviarFormulario").disabled = false;
            }
            if (pass2 == "") {
                $("#errorPass")
                    .text("Confirme la contraseña")
                    .css("color", "orange");
                document.getElementById("enviarFormulario").disabled = true;
            }
        });
    });
});

jQuery(function ($) {
    var myInput = document.getElementById("pass1");
    var myInput2 = document.getElementById("pass2");
    var letter = document.getElementById("letter");
    var capital = document.getElementById("capital");
    var number = document.getElementById("number");
    var length = document.getElementById("length");

    // When the user clicks on the password field, show the message box
    myInput.onfocus = function () {
        document.getElementById("message").style.display = "block";
    };

    // When the user clicks outside of the password field, hide the message box
    myInput.onblur = function () {
        document.getElementById("message").style.display = "none";
    };

    // When the user starts to type something inside the password field
    myInput.onkeyup = function () {
        // Validate lowercase letters
        var lowerCaseLetters = /[a-z]/g;
        if (myInput.value.match(lowerCaseLetters)) {
            letter.classList.remove("invalid");
            letter.classList.add("valid");
        } else {
            letter.classList.remove("valid");
            letter.classList.add("invalid");
        }

        // Validate capital letters
        var upperCaseLetters = /[A-Z]/g;
        if (myInput.value.match(upperCaseLetters)) {
            capital.classList.remove("invalid");
            capital.classList.add("valid");
        } else {
            capital.classList.remove("valid");
            capital.classList.add("invalid");
        }

        // Validate numbers
        var numbers = /[0-9]/g;
        if (myInput.value.match(numbers)) {
            number.classList.remove("invalid");
            number.classList.add("valid");
        } else {
            number.classList.remove("valid");
            number.classList.add("invalid");
        }

        // Validate length
        if (myInput.value.length >= 8) {
            length.classList.remove("invalid");
            length.classList.add("valid");
        } else {
            length.classList.remove("valid");
            length.classList.add("invalid");
        }
    };
    //INPUT 2.....💫

    // When the user clicks on the password field, show the message box
    myInput2.onfocus = function () {
        document.getElementById("message").style.display = "block";
    };

    // When the user clicks outside of the password field, hide the message box
    myInput2.onblur = function () {
        document.getElementById("message").style.display = "none";
    };

    // When the user starts to type something inside the password field
    myInput2.onkeyup = function () {
        // Validate lowercase letters
        var lowerCaseLetters = /[a-z]/g;
        if (myInput2.value.match(lowerCaseLetters)) {
            letter.classList.remove("invalid");
            letter.classList.add("valid");
        } else {
            letter.classList.remove("valid");
            letter.classList.add("invalid");
        }

        // Validate capital letters
        var upperCaseLetters = /[A-Z]/g;
        if (myInput2.value.match(upperCaseLetters)) {
            capital.classList.remove("invalid");
            capital.classList.add("valid");
        } else {
            capital.classList.remove("valid");
            capital.classList.add("invalid");
        }

        // Validate numbers
        var numbers = /[0-9]/g;
        if (myInput2.value.match(numbers)) {
            number.classList.remove("invalid");
            number.classList.add("valid");
        } else {
            number.classList.remove("valid");
            number.classList.add("invalid");
        }

        // Validate length
        if (myInput2.value.length >= 8) {
            length.classList.remove("invalid");
            length.classList.add("valid");
        } else {
            length.classList.remove("valid");
            length.classList.add("invalid");
        }
    };
});

//Eventos contraseña viewer
jQuery(function ($) {
    var passwordEvent = document.getElementById("show_password");
    var passwordEvent_confirm = document.getElementById(
        "show_password_confirm"
    );

    passwordEvent.onclick = function () {
        var cambio = document.getElementById("pass1");
        if (cambio.type == "password") {
            cambio.type = "text";
            $("#p1").removeClass("fa fa-eye-slash").addClass("fa fa-eye");
        } else {
            cambio.type = "password";
            $("#p1").removeClass("fa fa-eye").addClass("fa fa-eye-slash");
        }
    };
    passwordEvent_confirm.onclick = function () {
        var cambio2 = document.getElementById("pass2");
        if (cambio2.type == "password") {
            cambio2.type = "text";
            $("#p2").removeClass("fa fa-eye-slash").addClass("fa fa-eye");
        } else {
            cambio2.type = "password";
            $("#p2").removeClass("fa fa-eye").addClass("fa fa-eye-slash");
        }
    };
});

//SCRIPT TABLA
