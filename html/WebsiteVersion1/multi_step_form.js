//HTML - force page scroll position to top at page refresh
$(document).ready(function(){
    $(this).scrollTop(0);
});


// When the user scrolls down 25px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 25 || document.documentElement.scrollTop > 25){
        document.getElementById("myBtn").style.display = "block";
    } else {
        document.getElementById("myBtn").style.display = "none";
    }
    
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}



/*------------Validation Function-----------------*/
var count = 0; // To count blank fields.

function validation(event) {
	var radio_check = document.getElementsByName('gender'); // Fetching radio button by name.
	var input_field = document.getElementsByClassName('text_field'); // Fetching all inputs with same class name text_field and an html tag textarea.
	var text_area = document.getElementsByTagName('textarea');
	
// Validating radio button.
	if (radio_check[0].checked == false && radio_check[1].checked == false) {
		var y = 0;
	}
	else {
		var y = 1;
	}
	// For loop to count blank inputs.
	for (var i = input_field.length; i > count; i--) {
		if (input_field[i - 1].value == '' || text_area.value == '') {
			count = count + 1;
		} 
		else {
			count = 0;
		}
	}
	if (count != 0 || y == 0) {
		alert("*All Fields are mandatory*"); // Notifying validation
		event.preventDefault();
	} 
	else {
		return true;
	}
}


/*---------------------------------------------------------*/

// Function that executes on click of zeroth next button.
function next_step0() {
// When the user clicks on the button, scroll to the top of the document
topFunction();

document.getElementById("zeroth").style.display = "none";
document.getElementById("first").style.display = "block";
document.getElementById("active1").style.color = "#FFFFFF";
}

// Function that executes on click of first next button.
function next_step1() {
// When the user clicks on the button, scroll to the top of the document
topFunction();

document.getElementById("first").style.display = "none";
document.getElementById("second").style.display = "block";
document.getElementById("active2").style.color = "#FFFFFF";
}
// Function that executes on click of first previous button.
function prev_step1() {
topFunction();
document.getElementById("first").style.display = "block";
document.getElementById("second").style.display = "none";
document.getElementById("active1").style.color = "#FFFFFF";
document.getElementById("active2").style.color = "#696969";
}


// Function that executes on click of second next button.
function next_step2() {
topFunction();
document.getElementById("second").style.display = "none";
document.getElementById("third").style.display = "block";
document.getElementById("active3").style.color = "#FFFFFF";
}
// Function that executes on click of second previous button.
function prev_step2() {
topFunction();
document.getElementById("third").style.display = "none";
document.getElementById("second").style.display = "block";
document.getElementById("active2").style.color = "#FFFFFF";
document.getElementById("active3").style.color = "#696969";
}


// Function that executes on click of third next button.
function next_step3() {
topFunction();
document.getElementById("third").style.display = "none";
document.getElementById("fourth").style.display = "block";
document.getElementById("active4").style.color = "#FFFFFF";
}
// Function that executes on click of third previous button.
function prev_step3() {
topFunction();
document.getElementById("fourth").style.display = "none";
document.getElementById("third").style.display = "block";
document.getElementById("active3").style.color = "#FFFFFF";
document.getElementById("active4").style.color = "#696969";
}


// Function that executes on click of fourth next button.
function next_step4() {
topFunction();
document.getElementById("fourth").style.display = "none";
document.getElementById("fifth").style.display = "block";
document.getElementById("active5").style.color = "#FFFFFF";
}
// Function that executes on click of fourth previous button.
function prev_step4() {
topFunction();
document.getElementById("fifth").style.display = "none";
document.getElementById("fourth").style.display = "block";
document.getElementById("active4").style.color = "#FFFFFF";
document.getElementById("active5").style.color = "#696969";
}


// Function that executes on click of fifth next button.
function next_step5() {

topFunction();

document.getElementById("fifth").style.display = "none";
document.getElementById("sixth").style.display = "block";
document.getElementById("active6").style.color = "#FFFFFF";
}
// Function that executes on click of fifth previous button.
function prev_step5() {

topFunction();

document.getElementById("sixth").style.display = "none";
document.getElementById("fifth").style.display = "block";
document.getElementById("active5").style.color = "#FFFFFF";
document.getElementById("active6").style.color = "#696969";
}


// No function executes on click of sixth next button/Final Submit button. Because with the click of final submit button, validation()
//executes and nothing else happens.(At least at this stage of development)

