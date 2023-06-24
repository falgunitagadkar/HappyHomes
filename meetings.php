<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="leftMenuSM.css">
    <link rel="stylesheet" href="meetings.css">
    <script>
        function meet()
        {
            
            var n=document.getElementById("notice");
            var m=document.getElementById("meet");
            n.setAttribute("style","color:black; background-color:none");
            m.setAttribute("style","background-color:midnightblue; color:white");

            var c=document.getElementById("content");
            var t=document.createElement("table");
            t.innerHTML="<tr><td>On Diwali Celebration<td><td>9/9/2022</td></tr><tr><td>Regarding Increase of Maintenance<td><td>7/8/2022</td></tr>";
            t.setAttribute("style","border:1px solid black; border:collapse; font-size:18px;");
            t.setAttribute("id","meetingsTable");

            c.appendChild(t);
        }

        function notice()
        {
            var n=document.getElementById("notice");
            var m=document.getElementById("meet");
            m.setAttribute("style","color:black; background-color:none");
            n.setAttribute("style","background-color:midnightblue; color:white");

            
            var c=document.getElementById("content");
            var t=document.createElement("table");
            var temp=document.getElementById("meetingsTable");
            t.innerHTML="<tr><td><h1>NOTICE</h1></br>Topic:Meeting for Parking Management</br></br>This is the notice to inform all society members regarding the meeting that has been held on 17/1/2023 on discussing about the parking issues.<br><br>Venue:Society Club<br>Timings:8:30pm-9:00pm</td></tr>";
            t.setAttribute("style","border:none; font-size:18px");
            t.setAttribute("id","noticeBoard");

            c.replaceChild(t,temp);
        }


    </script>
    <style>
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
            width:17%;
        }
        #meetings
        {
            background-color:midnightblue;
        }
        #meetings a{
            color:white;
        }
        #rightMenu
        {
            margin-top:60px;
        }
    
    </style>
</head>
<body>
    <?php include("header.php");?>
    <div id="Menu">
        <div id="leftMenu">
           <table>
               <tr><td class="listItems" id="dashboard"><a href="socMemDashboard.php">Your Profile</a></td></tr>
               <tr><td class="listItems" id="complaint"><a href="socMemFileComplaint.php">Register Complaint</a></td></tr>
               <tr><td class="listItems" id="meetings"><a href="meetings.php">Meetings/Notices</a></td></tr>
           </table>
       </div>
       <div id="rightMenu">
           <table>
            <tr>
                <td id="meet" onclick="meet()">
                    Past Meetings
                </td>
                <td id="notice" onclick="notice()">
                    Notice Board
                </td>
            </tr>
           </table>
           <div id="content">
           </div>
       </div>
       </div>
       <?php include("footer.php");?>
</body>
</html>