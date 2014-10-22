

$( "#users" ).validate({
  rules: {
    numPeople: {
    	required: true,
      range: [1,100]
    }
  },
  messages: {
  	numPeople: {
  		range: "Please choose a number between 1 and 100." 
  	}
  },
  errorPlacement: function(error,element) {
	    error.insertAfter("#insertError");
  } 
});

