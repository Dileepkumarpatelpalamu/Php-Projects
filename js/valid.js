// JavaScript Document
function validation(obj)
{
	if(obj.txtname.value=='')
	{
		alert("Enter Name and try again.");
		obj.txtname.focus();
		return false;
	}
	if(obj.txtemail.value=='')
	{
		alert("Enter email and try again.");
		obj.txtemail.focus();
		return false;
	}
	if(obj.txtmobile.value=='')
	{
		alert("Enter mobile no and try again.");
		obj.txtmobile.focus();
		return false;
	}
	if(obj.txtsubject.value=='')
	{
		alert("Enter subject and try again.");
		obj.txtsubject.focus();
		return false;
	}
	if(obj.txtdesc.value=='')
	{
		alert("Enter subject decription and try again.");
		obj.txtdesc.focus();
		return false;
	}
	return true;
	
}




