<?php
    if(isset($_POST['username']))
    {
        $server="localhost";
        $user="falguni";
        $password="123";
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

        $sql="INSERT INTO userlist(uname,contact,email,flat,soc,pwd,cfpwd) VALUES ('".$uname."',
                                            '".$contact."',
                                            '".$email."',
                                            '".$flat."',
                                            '".$soc."',
                                            '".$pwd."',
                                            '".$cfpwd."')";

        mysqli_query($conn,$sql);
        $conn.close();

    }
?>
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
        function check()
        {
            var uname=document.getElementById("uname").value;
            if(uname=="")
            {
                alert("Username must not be empty");
            }

            var pwd=document.getElementById("pwd").value;
            if(pwd=="")
            {
                alert("Password must not be empty");
            }

            var role=document.getElementById("role").value;
            var patt=/empty/;
            if(patt.test(role))
            {
                alert("Please select role");
            }
            else
            {
                if(/SocietyMember/.test(role))
                {
                    var f=document.forms[0];
                    f.setAttribute("action","socMemDashboard.html");
                }
                else{
                    var f=document.forms[0];
                    f.setAttribute("action","secDashboard.html");
                }
            }

            var soc=document.getElementById("socName").value;
            var patt2=/Venus\sAppartment|Scarlet\sHeights/;
            if(!patt2.test(soc))
            {
                alert("Society name not registered with our website");
            }
        }
        
    </script>
    <style>
        #menu
        {
            margin-top:2%;
        }
    </style>
</head>

<body>
    <div id="header">  
        <div id="sms"><a href="index.html">Society Management System</a></div>
        <div id="menu"><ul type="none">
                        <li><a href="index.html">Home </a></li>&nbsp;&nbsp;
                        <li><a href="contact.html">Contact </a></li>&nbsp;&nbsp;
                        <li><a href="about.html">About</a></li>
        </ul></div>
     </div>
    <div id="loginBox"> 
        <div id="heading">Login</div>
        <form action="socMemDashboard.html">
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
                <div style="text-align:center;"><input type="submit" id="login" value="Submit" onclick="check()"></div>
                <p style="text-align: center;">OR</p>
                <div style="text-align: center;">Don't have an account?<a href="signup.html" method="post"><input id="signup" type="button" value="signup"></a></div>
            </div>
        </form>
    </div>
    <div id="houseImg"><img src="http://localhost/de/assets/apparrtmentVector3.png">
        
    </div>
    
</body>
</html>