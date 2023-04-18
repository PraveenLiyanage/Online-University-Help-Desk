Function checkpassword(){
	if(Document.getElementById("pwd").value!=Document.getElementById("Confirmpwd").value
	{
	alert("Incorrect Password");
	return false;
	}
	else
	{
		alert("SUCCESS");
		return true;
	}
	