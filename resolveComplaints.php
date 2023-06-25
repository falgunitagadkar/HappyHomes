<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="leftMenuSM.css">
    <link rel="stylesheet" href="resolveComplaints.css">
    <script>
        function pending()
        { 
            var p=document.getElementById("pending");
            var r=document.getElementById("resolved");
            r.setAttribute("style","color:black; background-color:none");
            p.setAttribute("style","background-color:midnightblue; color:white");

            var c=document.getElementById("content");
            var t=document.createElement("table");
            t.innerHTML="<tr><td>CCTV Camera issue<td><td>Mr.Kaushal Tandon<td>M-25</td></td></tr>";
            t.setAttribute("style","border:1px solid black; border:collapse; font-size:18px");
            t.setAttribute("id","pendingTable");

            c.appendChild(t);
        }

        function resolved()
        {
            var p=document.getElementById("pending");
            var r=document.getElementById("resolved");
            p.setAttribute("style","color:black; background-color:none");
            r.setAttribute("style","background-color:midnightblue; color:white");

            var c=document.getElementById("content");
            var t=document.createElement("table");
            var temp=document.getElementById("pendingTable");
            t.innerHTML="<tr><td>Parking issue<td><td>Ms.Priya Dave<td><td>F-12</td></tr>";
            t.setAttribute("style","border:1px solid black; border:collapse; font-size:18px");
            t.setAttribute("id","meetingsTable");

            c.replaceChild(t,temp);
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
                    <td id="pending" onclick="pending()">
                        Pending Complaints
                    </td>
                    <td id="resolved" onclick="resolved()">
                        Resolved Complaints
                    </td>
                </tr>
               </table>
            <div id="content"></div>
        </div>
     </div>
     <?php include("footer.php");?>
</body>
</html>