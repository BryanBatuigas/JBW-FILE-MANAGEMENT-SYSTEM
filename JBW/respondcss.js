function sendMail(params) {
	var tempParams = {
		from_name:document.getElementById("from_email").value,
		to_name:document.getElementById("to_email").value,
		subject:document.getElementById("sub").value,
		message:document.getElementById("msg").value,
	};
	emailjs.send('service_9mzjoac', 'template_110rix7', tempParams)
	.then((message) => alert("Mail sent succesfully"));
	}