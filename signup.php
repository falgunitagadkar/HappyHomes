<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="signup.css">
    <style>
        #logo{
            mix-blend-mode:multiply;
            height:60px;
            width:80px;
            margin-top:0px;
            float:left;
            margin:0px;
            padding:0px;

        }
        #form{
            height:70%;
            margin-bottom:5%;
        }
        #submitButton
        {
            background-color:midnightblue;
            border-radius:7px;
            color:white;
        }
    </style>
    <script>
        function checkPwd()
        {
            var p1=document.getElementById("createPwd").value;
            var p2=document.getElementById("cnfPwd").value;
            if(p1!=p2)
            {
                alert("Your Confirm Password doesn't match with password you entered");
                var f=document.forms[0];
                f.setAttribute("action","http://localhost/de/signup.html");
            }
        }
    </script>
</head>
<body>    
    <div id="header" style="background-color:midnightblue; height:60px;">
        <img id="logo" src="assets/logo.png"/>  
        <div id="sms"><a href="index.html" style="padding:1%; font-size:2em">Society Management System</a></div>
        <div id="menu"><ul type="none">
                        <li><a href="index.html">Home </a></li>&nbsp;&nbsp;
                        <li><a href="contact.html">Contact </a></li>&nbsp;&nbsp;
                        <li><a href="about.html">About</a></li>
        </ul></div>
     </div>

    <div id="form">
        <form action="http://localhost/de/index.php" method="post">
            <h1>Enter your details!</h1>
            <div class="field">
                <label for="username">Username:</label><input type="text" name="username" id="username">
            </div>

            <div class="field">
                <label for="contactNo">Contact No:</label><input type="text" name="contactNo" id="contactNo">
            </div>

            <div class="field">
                <label for="email">Email:</label><input type="email" name="email" id="email">
            </div>

            <div class="field"><!--Make this a primary key-->
                <label for="flatNo">Flat no:</label><input type="text" name="flatNo" id="flatNo">
            </div>

            <div class="field"><!-- add soc name in the list if required-->
                <label for="socName">Society Name:</label> <select name="socName" id="socName">
                                                                <option value="empty">--SELECT YOUR SOCIETY--</option>
                                                                <option value="Scarlet Heights">Scarlet Heights</option>
                                                                <option value="Venus Appartments">Venus Appartments</option>
                                                            </select>
            </div>

            <div class="field">
                <label for="createPwd">Create Password:</label><input type="password" name="createPwd" id="createPwd">
            </div>

            <div class="field">
                <label for="confirmPwd">Confirm Password:</label><input type="password" name="confirmPwd" id="confirmPwd">
            </div>
            </fieldset>

            <div class="field" id="submit">
                <input id="submitButton" type="submit" value="submit" onclick="checkPwd()">
            </div>
        </form>
    </div>
    <?php include("footer.php");?>
</body>
</html>