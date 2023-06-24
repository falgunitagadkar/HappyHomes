<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="socMemFileComplaint.css">
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="leftMenuSM.css">
    
    <script>
        function complaint()
        {
            alert("Your complaint has been registered successfully!");
        }
    </script>
    <style>
        /* @import url("https://fonts.google.com/specimen/Roboto"); */
        #header
        {
        background-color:midnightblue;
        height:60px;
        }
        #sms a
        {
            padding:1%;
            font-size:2em;
            
        }
        #logo{
            mix-blend-mode:multiply;
            height:60px;
            width:80px;
            margin-top:0px;
            float:left;
            margin:0px;
            padding:0px;

        }
        #leftMenu
        {
            margin-top:60px;
        }
        #complaint
        {
            background-color:midnightblue;
        }
        #complaint a{
            color:white;
        }
        #mess 
        {
            font-size: 2em; 
            font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            height:40%;
            width:100%;
            color:midnightblue;
        }
        
        #fieldTopic
        {
            margin-left:10px;
            margin-top:50px;
            margin-bottom:10px;
            height:80px;
            width:400px;
            font-size:80px;
            border-bottom:1px solid black;
        }
        #title 
        {
            border:none;
            outline:none;
            border-bottom:2px solid black;
            font-size:2em;
            font-weight:bold;
        }
        #text
        {
            border:none;
            outline:none;
        }
        #submit
        {
            background-color:midnightblue;
            margin-left:30%;
            margin-top:6%;
        }
        #reset{
            background-color:midnightblue;
            margin-top:6%;
        }
    </style>
</head>
<body>
    <?php include("header.php");?>
     <div id="content">
     <div id="leftMenu">
        <table>
            <tr><td class="listItems" id="dashboard"><a href="socMemDashboard.php">Your Profile</a></td></tr>
            <tr><td class="listItems" id="complaint"><a href="socMemFileComplaint.php">Register Complaint</a></td></tr>
            <tr><td class="listItems" id="meetings"><a href="meetings.php">Meetings/Notices</a></td></tr>
        </table>
    </div>
    <div id="rightMenu">
        <form action="socMemFileComplaint.html" onsubmit="complaint()">
            <div id="mess">We are Sorry for the inconvenience!
                Please mention your complain with <strong>Title</strong>.
                We would look forward to resolve your problem ASAP if found valid!
            </div>
            <div class="fieldTopic"><textArea id="title" rows="1" cols="25" placeholder="Enter title here"></textarea></div>
            <div class="field" id="problem"><textarea id="text" rows="12" cols="93"></textarea></div>
            <div id="submitAndLast"><input type="submit" id="submit" value="Submit"><input id="reset" type="reset" value="Clear"></div>
        </form>
    </div>
    </div>
    <?php include("footer.php");?>
</body>
</html>