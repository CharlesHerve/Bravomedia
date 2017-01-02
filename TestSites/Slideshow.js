$(document).ready(function(){
    
var $carrousel = $('#carrousel'), // targeting caroussel block
    $img = $('#carrousel img'), // targeting images contained in carrousel
    indexImg = $img.length - 1, // defining index of last element
    i = 0, // counter initialised
    $currentImg = $img.eq(i); // targeting current image with index

$img.css('display', 'none'); // hidding image
$currentImg.css('display', 'block'); // displaying current image only


function slideImg(){
    setTimeout(function(){ // use of anonyme function
						
        if(i < indexImg){ // if counter is lower than last index
	    i++; // it is incremented
	}
	else{ // else set to 0
	    i = 0;
	}

	$img.css('display', 'none');

	$currentImg = $img.eq(i);
	$currentImg.css('display', 'block');

	slideImg(); // restarting the function at the end

    }, 2000); // defining an interval of 2 sesonds (2000 milliseconds)
}

slideImg(); // last, fonction is started a first time

});
