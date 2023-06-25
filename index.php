
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="header.css">
    <script>
        function pwdCheck()
        {
            alert("Your password doesn't match with confirm password\nPlease try again!")
        }
        function check()
        {
            var uname=document.getElementById("uname").value;
            if(uname!="")
            {
                var pwd=document.getElementById("pwd").value;
                if(pwd!="")
                {
                    var role=document.getElementById("role").value;
                    var patt=/empty/;
                    if(!patt.test(role))
                    {
                        if(/SocietyMember/.test(role))
                        {
                            
                            var f=document.forms[0];
                            f.setAttribute("action","socMemDashboard.php");
                        }
                        else{
                            var f=document.forms[0];
                            f.setAttribute("action","secDashboard.php"); 
                        }
                        var soc=document.getElementById("socName").value;
                        var patt2=/Venus\sAppartment|Scarlet\sHeights/;
                        if(patt2.test(soc))
                        {
                            var submitButton=document.createElement("input");
                            submitButton.setAttribute("type","submit");
                            submitButton.setAttribute("id","submit");
                            submitButton.setAttribute("value","Submit");
                            submitButton.setAttribute("style","height: 40px;width:100px;margin:20px;margin-top:0px;background-color:midnightblue;border-radius:7px;font-size: 15px;color:white;");
                            var d=document.getElementById("outerSubmit");
                            var b=document.getElementById("login");
                            d.replaceChild(submitButton,b);
                        }
                        else if(soc=="")
                        {
                            alert("Please enter society name");
                        }
                        else
                        {
                            alert("Sorry!Your society is not yet register with us")
                        }
                    }
                    else
                    {
                        alert("Please select role");
                    }
                }
                else
                {
                    alert("Password must not be empty");
                }
                
            }
            else
            {
                alert("Username must not be empty");
            }
        } 
    </script>
</head>

<body>
    <!-- when new user signup he comes here and using php data is inserted in db  -->
    <?php
        if(isset($_POST['username']))
        {
            $server="localhost";
            $user="root";
            $password="";
            $db="db";

            try{
                $conn=mysqli_connect($server,$user,$password,$db);
            }
            catch(Exception $e)
            {
                echo $e;
            }

            $uname=$_POST['username'];
            $contact=$_POST['contactNo'];
            $email=$_POST['email'];
            $flat=$_POST['flatNo'];
            $soc=$_POST['socName'];
            $pwd=$_POST['createPwd'];
            $cfpwd=$_POST['confirmPwd'];
            if($pwd==$cfpwd)
            {
                $sql="INSERT INTO userlist(uname,contact,email,flat,soc,pwd,cfpwd) VALUES ('".$uname."',
                                                    '".$contact."',
                                                    '".$email."',
                                                    '".$flat."',
                                                    '".$soc."',
                                                    '".$pwd."',
                                                    '".$cfpwd."')";
                mysqli_query($conn,$sql);

            }
            else
            {
                echo "<script type='text/javascript'>pwdCheck()</script>";
            }

            $conn->close();

        }
    ?>
    
    <div id="header"> 
        <img id="logo" src="assets/logo.png"/>
        <div id="sms"><a href="index.php">Society Management System</a></div>
        <div id="menu"><ul type="none">
                        <li><a href="index.php">Home </a></li>&nbsp;&nbsp;
                        <li><a href="contact.html">Contact </a></li>&nbsp;&nbsp;
                        <li><a href="about.php">About</a></li>
        </ul></div>
     </div>
    <div>
    <div id="loginBox"> 
        <div id="heading">Login</div>
        <form>
            <!-- Username -->
            <div id="unameDiv">
                <label for="uname">Username:</label>
                <input id="uname" type="text" name="uname">
            </div>
            
            <!-- password -->
            <div id="pwdDiv">
                <label for="pwd">Password / UniqCode(in case of Secretary):</label>
                <input id="pwd" type="password" name="pwd">
            </div>
            
            <!-- Role -->
            <div id="roleDiv">
                <label for="role">Role:</label>
                <select id="role" name="role">
                    <option value="empty">--SELECT ROLE--</option>
                    <option value="SocietyMember">Society Member</option>
                    <option value="Secretary">Secretary</option>
                </select>
            </div>
            
            <!-- society name  -->
            <div id="socNameDiv">
                <label for="socName">Society Name</label>
                <input id="socName" type="text" name="socName">
            </div>
            
            <!-- loginSignup buttons  -->
            <div id="loginSignup">
                <div style="text-align:center;" id="outerSubmit"><input type="button" id="login" value="Submit" onclick="check()"></div>
                <p style="text-align: center;">OR</p>
                <div style="text-align: center;">Don't have an account?<a href="signup.php" method="post"><input id="signup" type="button" value="signup"></a></div>
            </div>
        </form>
    </div>
    <div id="houseImg"><img src="http://localhost/de/assets/apparrtmentVector3.png">
        
    </div>
</div>
    <?php include("footer.php");?>
</body>
</html>