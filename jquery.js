document.addEventListener('DOMContentLoaded', function(){
console.log('DOM loaded');
	
    var maxfields = 5; //maximum input boxes allowed
	var wrapper   		= $(".epi-wrapper"); //Fields wrapper
	var add_button      = $(".add-field"); //Add button ID
	
	var x = 1; //initlal text box count
    $(add_button).on('click', function(e){ //on add input button click
        console.log('jag funkar');
		e.preventDefault();
		if(x < maxfields){ //max input box allowed
			x++; //text box increment
			$(wrapper).append('<div><input type="text" name="EpiTitles[]"><a href="#" class="remove-btn">-</a></div>'); //add input box
		}
	});
	
	$(wrapper).on("click",".remove-btn", function(e){ //user click on remove text
        e.preventDefault(); 
        $(this).parent('div').remove(); 
        x--;
	})
});