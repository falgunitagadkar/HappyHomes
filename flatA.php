<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="leftMenuSM.css">
    <link rel="stylesheet" href="flatA.css">
</head>
<body>
    <?php include("header.php");?>
     <div id="Menu">
        <div id="leftMenu">
            <table>
                <tr><td class="listItems" id="dashboard"><a href="secDashboard.html">Flat Details</a></td></tr>
                <tr><td class="listItems" id="complaint"><a href="resolveComplaints.html">Resolve Complaints</a></td></tr>
                <tr><td class="listItems" id="meetings"><a href="meetingsSec.html">Meetings/Notices</a></td></tr>
            </table>
        </div>
        <div id="rightMenu">
            <table>
                <tr>
                    <th>Owner</th>
                    <th>Flat No</th>
                    <th>Contact No</th>
                    <th>Email Id</th>
                </tr>
                <tr>
                    <td>Mr.Kailash Ahuja</td>
                    <td>A-1</td>
                    <td>9997767564</td>
                    <th>kailashahuja@gmail.com</th>
                </tr>
                <tr>
                    <td>Mr.Priyansh Patel</td>
                    <td>A-2</td>
                    <td>9898767564</td>
                    <th>priyanshpatel@gmail.com</th>
                </tr><tr>
                    <td>Mr.Divyang Shah</td>
                    <td>A-3</td>
                    <td>9875799589</td>
                    <th>divyangshah@gmail.com</th>
                </tr><tr>
                    <td>Mr.Deepak Bhatt</td>
                    <td>A-4</td>
                    <td>9898767564</td>
                    <th>deepakbhatt@gmail.com</th>
                </tr>
                </tr><tr>
                    <td>Ms.Falguni Tagadkar</td>
                    <td>A-5</td>
                    <td>9765788854</td>
                    <th>falgunitagadkar@gmail.com</th>
                </tr>
                </tr><tr>
                    <td>Ms.Neeta Mishra</td>
                    <td>A-6</td>
                    <td>8787546678</td>
                    <th>neetamishra@gmail.com</th>
                </tr>
            </table>
        </div>
     </div>
    <?php include("footer.php");?>
</body>
</html>