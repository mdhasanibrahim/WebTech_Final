function getElement(id){
    return document.getElementById(id);
}

function doLoginValidation(){
    refreshLog();
    var hasError=false;
    var username=getElement("username");
    var password=getElement("password");
    var err_username=getElement("err_username");
    var err_password=getElement("err_password");
    if(username.value==""){
        hasError=true;
        err_username.innerHTML="* Username Required";
        err_username.focus();
        
    }
    if(password.value==""){
        hasError=true;
        err_password.innerHTML="* Password Required";
        err_password.focus();
        
    }
    return !hasError;
}

function doStudentValidation(){
    refreshAdd();
    var hasError=false;
    var name=getElement("name");
    var dob=getElement("dob");
    var credit=getElement("credit");
    var cgpa=getElement("cgpa");
    var dept=getElement("dept");
    var err_name=getElement("err_name");
    var err_dob=getElement("err_dob");
    var err_credit=getElement("err_credit");
    var err_cgpa=getElement("err_cgpa");
    var err_dept=getElement("err_dept");
    if(name.value==""){
        hasError=true;
        err_name.innerHTML="* Name Required";
        err_name.focus();
       
        
    }
    else if(name.value.search("1")!=-1 && name.value.search("2")!=-1 && name.value.search("3")!=-1 && name.value.search("4")!=-1 && name.value.search("5")!=-1 && name.value.search("6")!=-1 && name.value.search("7")!=-1 && name.value.search("8")!=-1 && name.value.search("9")!=-1 && name.value.search("0")!=-1){
        hasError=true;
        err_name.innerHTML="* Name Cannot Contain Numbers";
        err_name.focus();
        
    }
    if(dob.value==""){
        hasError=true;
        err_dob.innerHTML="* DOB Required";
        err_dob.focus();
	}
    if(credit.value==""){
        hasError=true;
        err_credit.innerHTML="* Credit Required";
        err_credit.focus();
        
    }
    if(cgpa.value==""){
        hasError=true;
        err_cgpa.innerHTML="* Name Required";
        err_cgpa.focus();
        
    }
    else if(cgpa.value>4 && cgpa.value<0){
        hasError=true;
        err_cgpa.innerHTML="* Range 0-4";
        err_cgpa.focus();
        
    }
    if(dept.value=="Select"){
        hasError=true;
        err_dept.innerHTML="* Name Required";
        err_dept.focus();
       
    }
    return !hasError;
}

function refreshLog(){
    var err_username = getElement("err_username");
    var err_password = getElement("err_password");
	err_username.innerHTML="";
    err_password.innerHTML="";
    
}

function refreshAdd(){
    var err_name=getElement("err_name");
    var err_credit=getElement("err_credit");
    var err_cgpa=getElement("err_cgpa");
    var err_dob=getElement("err_dob");
    var err_dept=getElement("err_dept");
    err_name.innerHTML="";
    err_credit.innerHTML="";
    err_cgpa.innerHTML="";
    err_dob.innerHTML="";
    err_dept.innerHTML="";
    
}