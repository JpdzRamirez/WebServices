
//variables
const alertMessaggeStart = document.getElementById("alertMessage");
var reproductor = document.getElementById("myAudio");


window.onload = function loadingAnimation() {
    const content = document.getElementById("contentShow");
    const load = document.getElementById("loading");
    const coffeload = document.getElementById("coffeeLoading");
    const footerload=document.getElementById("contentFooter");
    setTimeout(() => {
        content.className = 'container';
        footerload.className='container';
        load.className = 'd-none';
        coffeload.remove(); // borramos el span
    }, 1500);
    setTimeout(() => {
       alertMesagge();
    }, 1600);
  };


//Functions

function playAudio() {
            reproductor.play();
        };

function pauseAudio() {
            reproductor.pause();
        };
function alertMesagge(){
    Swal.fire({
        title: 'Alerta con swett',
        
    });
    
};


if(alertMessaggeStart.addEventListener){
    alertMessaggeStart.addEventListener("click", alertMesagge,false);
}

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