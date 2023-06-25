<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="leftMenuSM.css">
    <link rel="stylesheet" href="meetingsSec.css">
    <script>
        function meetings()
        {     
            var n=document.getElementById("notice");
            var m=document.getElementById("meet");
            n.setAttribute("style","color:black; background-color:none");
            m.setAttribute("style","background-color:midnightblue; color:white");

            var c=document.getElementById("content");
            var t=document.createElement("table");
            t.innerHTML="<tr><td>On Diwali Celebration<td><td>9/9/2022</td></tr><tr><td>Regarding Increase of Maintenance<td><td>7/8/2022</td></tr>";
            t.setAttribute("style","border:1px solid black; border:collapse;font-size:18px;");
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
            var temp=document.getElementById("meetingsTable");
            var t=document.createElement("textarea");
            t.setAttribute("style","border:none; outline:none; height:400px; width:100%; font-size:18px;");
            t.setAttribute("id","noticeBoard");

            var s=document.createElement("button");
            s.setAttribute("id","submit");
            
            c.replaceChild(t,temp);
            c.appendChild(s);
            s.innerText="Post Notice";

        }
    </script>
</head>
<body>
     <?php include("header.php");?>
     <div id="Menu">
        <div id="leftMenu">
            <table>
                <tr><td class="listItems" id="dashboard"><a href="secDashboard.php">Flat Details</a></td></tr>
                <tr><td class="listItems" id="complaint"><a href="resolveComplaints.php">Resolve Complaints</a></td></tr>
                <tr><td class="listItems" id="meetings"><a href="meetingsSec.php">Meetings/Notices</a></td></tr>
            </table>
        </div>
        <div id="rightMenu">
            <table>
                <tr>
                    <td id="meet" onclick="meetings()">
                        Past Meetings
                    </td>
                    <td id="notice" onclick="notice()">
                        Notice Board
                    </td>
                </tr>
               </table>
            <div id="content"></div>
        </div>
     </div>
     <?php include("footer.php");?>
</body>
</html>