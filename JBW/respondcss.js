function sendMail(params) {
	var tempParams = {
		from_name:document.getElementById("from_email").value,
		to_name:document.getElementById("to_email").value,
		subject:document.getElementById("sub").value,
		message:document.getElementById("msg").value,
	};

	if(from_name == "" || to_name == "" || subject == "" || message == "")
	{
		alert("Please complete the form!");
	}
	else
	{
		var userval = confirm("Are you sure you want to submit?");
		if(userval == true){
			emailjs.send('service_9mzjoac', 'template_110rix7', tempParams)
			.then((message) => alert("Mail sent succesfully"));
	
			document.getElementById("from_email").value = null;
			document.getElementById("to_email").value = null;
			document.getElementById("sub").value = null;
			document.getElementById("msg").value = null;
			
		}
		
	

	}


	}