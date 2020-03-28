
function Submit()
{
	var Name = document.form.name.value,
	    Email = document.form.email.value,
		Subject = document.form.subject.value,
		Message = document.form.message.value;
		
		
		if(Name==""){
			document.form.name.focus() ;
			document.getElementById('error').innerHTML="please enter name";
			
			 return false;
		}
		if(Email==""){
			document.form.email.focus() ;
			document.getElementById('error').innerHTML="please enter email ";
			
			 return false;
		}
		
		if(Subject==""){
			document.form.subject.focus() ;
			document.getElementById('error').innerHTML="please enter subject";
			
			 return false;
		}
		
		if(Message==""){
			document.form.message.focus() ;
			document.getElementById('error').innerHTML="please enter message";
			
			 return false;
		}
		
		alert("success");
		
}

