function getElement(id)
{
    return document.getElementById(id);
}

function LoginValidation(){
    var hasError=false;
    var username=getElement("username");
    var password=getElement("password");
    var err_username=getElement("err_username");
    var err_pass=getElement("err_pass");
    if(username.value=="")
	{
        hasError=true;
        err_username.innerHTML="* Username Required";
        err_username.focus();
    }
    else if(username.search(" ")!=-1 && username.length<6)
	{
        hasError=true;
        err_username.innerHTML="* Username can not contain spaces and must 6 characters long";
        err_username.focus();
    }
    if(password.value=="")
	{
        hasError=true;
        err_pass.innerHTML="* Password Required";
        err_pass.focus();
    }
    else if(password.length<8)
	{
        hasError=true;
        err_pass.innerHTML="* Password must be 8 characters long";
        err_pass.focus();
    }
    return !hasError;
}

function RegValidation(){
    var hasError=!doLoginValidation();
    var name=getElement("name");
    var email=getElement("email");
    var phone=getElement("phone");
    var err_name=getElement("err_name");
    var err_email=getElement("err_email");
    var err_phone=getElement("err_phone");
    if(name.value=="")
	{
        hasError=true;
        err_name.innerHTML="* Name Required";
        err_name.focus();
    }
    else
	{
		for (i = 0; i < name.length; i++) 
		{
            if (name[i] >= '0' || name[i] <= '9') 
			{
       	        hasError=true;
                err_name.innerHTML="* Name can not contain numbers";
                err_name.focus();
            }
        }
    }
    if(email.value=="")
	{
        hasError=true;
        err_email.innerHTML="* Email Required";
        err_email.focus();
    }
    else if(email.search("@") && email.length<6)
	{
        hasError=true;
        err_email.innerHTML="* Invalid Email";
        err_email.focus();
    }
    if(phone.value=="")
	{
        hasError=true;
        err_phone.innerHTML="* Phone Number Required";
        err_phone.focus();
    }
    else if(phone.length!=11)
	{
        hasError=true;
        err_phone.innerHTML="* Invalid Phone Number";
        err_phone.focus();
    }
    return !hasError;
}