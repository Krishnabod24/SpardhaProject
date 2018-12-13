function validate()
{
	var username=document.getElementById('username').value;
	var password=document.getElementById('pwd').value;
	var unm = /^[A-Za-z0-9]{4,30}$/;			
	var pd = /^[A-Za-z0-9\@\#\$\.]{4,30}$/;
	if(username == "") 
	{ 
		alert("UserName should not be Empty!"); 
		return false;
	}
	if(!unm.test(username)) 
	{ 
		alert("Invalid UserName! Name should contain only characters & digits.\nIt should contain a minimum of 4 characters & maximum of 30 characters"); 
		return false;
	}
	if(password == "") 
	{ 
	alert("Password should not be Empty!"); 
	return false;
	}			   
	if(!pd.test(password))
	{
		alert("Password should contain only characters, digits and some special characters such as '@,#,$' only");
		return false;
	}			   	
}