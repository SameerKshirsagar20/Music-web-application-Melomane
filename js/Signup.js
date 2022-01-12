
  
function funpass()
{
    var name=document.getElementById("name").value;
    var user=document.getElementById("user").value;
    var email=document.getElementById("email").value;
    var phone=document.getElementById("phone").value;
    var pass=document.getElementById("pass").value;
    var pass1=document.getElementById("pass1").value;
    var g = document.getElementById("gender").value;
    
    

    

    
    
    
    if(name==""||user==""||email==""||phone==""||pass==""||pass1==""||g=="")
        {
            alert("please fill entire form.");
            return false;
        }
    else if(isNaN(name)==false)
    {
            alert("please enter characters only!");
        return false;
    }
    else if(isNaN(user)==false)
    {
            alert("please enter characters only!");
            return false;
    }
    else if(pass!=pass1)
        {
            alert("password dosent match!");
            return false;
        }
    else if(user.length<=3||user.length>=10)
        {
            alert("please enter username more than 3 and upto 10 characters.");
        }
    else if(phone.length<10 || phone.length>10)
        {
             alert("phone number should be of 10 digits!");
        }
    else
        {
            alert("successfully registered.");
            document.location="./Login.php";
            return true;
            
        }
    
   
    
}
