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
            display:block;
            float:left;
            color:white;
            text-decoration-line:none;
            text-align:center;
            padding:1%;
            font-size:2em;
            font-family:Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
        }
        #sms a
        {
            display:block;
            float:left;
            color:white;
            text-decoration-line:none;
            text-align:center;
            padding:1%;
            font-size:2em;
            font-family:Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
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
    </style>
</head>
<body>

    <?php include("header.php");?>
     <div id="Menu">
     <div id="leftMenu">
                <table>
                    <tr><td class="listItems" id="dashboard"><a href="socMemDashboard.html">Your Profile</a></td></tr>
                    <tr><td class="listItems" id="complaint"><a href="socMemFileComplaint.html">Register Complaint</a></td></tr>
                    <tr><td class="listItems" id="meetings"><a href="meetings.html">Meetings/Notices</a></td></tr>
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
    
</body>
</html>