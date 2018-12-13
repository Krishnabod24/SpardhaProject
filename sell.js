function validate()
{
	var name=document.getElementById('name').value;
	var username=document.getElementById('username').value;
	var password=document.getElementById('pwd').value;
	var repassword=document.getElementById('repwd').value;
	var number=document.getElementById('number').value;
	var email=document.getElementById('email').value;
	var locate=document.getElementById('location').value;
	var address=document.getElementById('comment').value;
	var nm = /^[A-Za-z ]{4,30}$/;
	var unm = /^[A-Za-z0-9]{4,30}$/;			
	var pd = /^[A-Za-z0-9\@\#\$\. ]{4,30}$/;
	var rpd = /^[A-Za-z0-9\@\#\$\. ]{4,30}$/;
	var mb = /^[0-9]{10}$/;
	var lc = /^[A-Za-z ]{4,30}$/;
	var atpos = email.indexOf("@"); 
	var dotpos = email.lastIndexOf("."); 
			   if(name == "") 
			   { 
			   alert("Name should not be Empty!"); 
			   return false;
			   } 
			   if(!nm.test(name)) 
			   { 
			   alert("Invalid Name! Name should contain only characters & spaces.\nIt should contain a minimum of 4 characters & maximum of 30 characters"); 
			   return false;
			   }
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
			   if(name == username)
			   {
			   alert("Name and UserName should not be equal!");
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
			   if(repassword == "") 
			   { 
			   alert("Password should not be Empty!"); 
			   return false;
			   }
			   if(!rpd.test(repassword))
			   {
			   alert("Password should contain only characters, digits and some special characters such as '@,#,$' only");
			   return false;
			   }
			   if(password != repassword)
			   {
			   alert("Both Password and ReEntered Password should be same");
			   };
			   if(number == "")
			   { 
			   alert("Contact Number should not be Empty!");
			   return false;
			   }
			   if(!mb.test(number))
			   { 
			   alert("Invalid Contact Number! Enter a valid 10 Digit Mobile Number");
			   return false;
			   }
			   if(email == "")
				{ 
				alert("Email should not be Empty!"); 
				return false;
				}
				var atpos = email.indexOf("@"); 
				var dotpos = email.lastIndexOf("."); 
				if (atpos < 2 || dotpos <= atpos+2 || dotpos+2 >= email.length)   
				{
				alert("In-valid E-mail Address!");
				return false;
				}
				if(locate == "") 
			   { 
			   alert("Location should not be Empty!"); 
			   return false;
			   }
			    //Regular Expression to match a value with exactly 12 digits 
			   if(!lc.test(locate)) 
			   { 
			   alert("Invalid Location! "); 
			   return false;
			   }
}