<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="leftMenuSM.css">
    <link rel="stylesheet" href="socMemDashboard.css">
    <style>

        #header
        {
        background-color:midnightblue;
        height:60px;
        width:100vw;
        position:absolute;
        top:0px;
        left:0px;
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
        #dashboard
        {
            background-color:midnightblue;
        }
        #dashboard a{
            color:white;
        }
        #memberDetails li
        {
            height:30px;
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
        <div id="image"><img src="http://localhost/de/assets/defaultProfile.jpg"></div>
        <div id="name">Falguni Tagadkar</div>
        <div id="memberDetails">
            <h1>Member Details</h1>
            <ul type="none">
                <li>Contact No: &nbsp;<p id="contactNo"></p>9987454532</p></li>
                <li>EmailId: &nbsp;<p id="emaiId">falgunitagadkar@gmail.com</p></li>
                <li>FlatNo: &nbsp;<p id="flatNo">A-6</p></li>
                <li>SocietyName: &nbsp;<p id="societyName">Venus Appartments</p></li>
                <li>Secretary: &nbsp;<p id="secretary">Mr.Kailash Ahuja</p></li>
            </ul>
        </div>
    </div>
    </div>
    <?php include("footer.php");?>
</body>
</html>