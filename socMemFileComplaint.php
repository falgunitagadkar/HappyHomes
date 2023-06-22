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
        <form action="socMemFileComplaint.html" onsubmit="complaint()">
            <div id="mess" style="font-size: 2em; font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">Society is Sorry for the inconvenience!
                Please mention your complain with <strong>Title</strong>.
                We would look forward to resolve your problem ASAP if found valid!
            </div>
            <div class="field"><input id="topic" type="text"></div>
            <div class="field" id="problem"><textarea id="text" rows="12" cols="72"></textarea></div>
            <div><input type="submit" id="submit" value="Submit"><input id="reset" type="reset" value="Clear"></div>
        </form>
    </div>
    </div>

    
    
</body>
</html>