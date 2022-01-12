function logval()
        {
            var a=document.getElementById("user").value;
            var b=document.getElementById("pass").value;

	        
            
            if(a==""||b=="")
                    {
                        alert("please fill login form.");
                        return false;
                    }
            else if(isNaN(a)==false)
            {
                        alert("please enter characters only!");
                        return false;
            }
            else if(a.length<=3||a.length>=10)
                    {
                        alert("please enter username more than 3 and upto 10 characters.");
                        return false;
                    }
            else
                    {
                        alert("you are logged in. Let's listen some music!");
                        document.location="C:\\Users\\kshir\\Music\\SEM1 MINI PROJ\\HTML\\MAINPAGE.html";
                        return true;
                    }
        }