<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="leftMenuSM.css">
    <link rel="stylesheet" href="secDashboard.css">
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
            <div class="flat">
                <a href="flatA.php"><img class="buildingImage" id="blockA" src="http://localhost/de/assets/buildingNew.png" alt="can't load image"></a>
                <h1>Flat A</h1>
            </div>

            <div class="flat">
                <img class="buildingImage" id="blockB" src="http://localhost/de/assets/buildingNew.png" alt="can't load image">
                <h1>Flat B</h1>
            </div>

            <div class="flat">
                <img class="buildingImage" id="blockC" src="http://localhost/de/assets/buildingNew.png" alt="can't load image">
                <h1>Flat C</h1>
            </div>
        </div>
     </div>
     <?php include("footer.php");?>
    
</body>
</html>