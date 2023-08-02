<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="leftMenuSM.css">
    <link rel="stylesheet" href="socMemFileComplaint.css">
    
    <script>
        function complaint()
        {
            alert("Your complaint has been registered successfully!");
        }
    </script>
    <style>
        /* @import url("https://fonts.google.com/specimen/Roboto"); */
        
        table tr
        {
            border-bottom:none;
        }
        
    </style>
</head>
<body>
<?php
        if(isset($_POST['title']))
        {
            $server="localhost";
            $user="root";
            $password="";
            $db="db";

            try{
                $conn=mysqli_connect($server,$user,$password,$db);
                echo "connection successful";
            }
            catch(Exception $e)
            {
                echo $e;
            }

            $title=$_POST['title'];
            $complaint=$_POST['text'];

            
            $sql="INSERT INTO complain(title,complaint) VALUES ('".$title."',
            '".$complaint."')";
            header("location:socMemFileComplaint.php");
            echo "<script type='text/javascript'>alert('Your complaint has been succesfully registered')</script>";
            mysqli_query($conn,$sql);
            echo "Data inserted";

            $conn->close();

        }
    ?> 
    <?php include("header.php");?>
     <?php include("leftMenuSM.php");?>
    <div id="rightMenu">
        <div id="right">
            <form action="SocMemFileComplaint.php" method="post">
                <div style="text-align:center; font-size:30px">COMPLAINT FORUM</div>
                <table>
                    <tr><td><label style="padding:20px">Title:</label></td>
                        <td><input type="text" id="title" name="title"></td>
                    </tr>
                    <tr>
                        <td><label style="padding:20px">Date:</label></td>
                        <td><input type="date" id="date" name="date"></td>
                    </tr>
                    <tr>
                        <td><label style="padding-left:20px">Write Complain here:</label></td>
                        <td><textarea rows="7" cols="45" id="text" name="text"></textarea></td>
                    </tr>
                    <tr>
                        <td><label style="padding-left:20px">Upload photo:</label></td>
                        <td><input type="file" id="photo" name="photo"></td>
                    </tr>
                    <tr id="last">
                        <td><input type="submit" id="submit" value="SUBMIT"></td>
                        <td><input type="reset" id="reset" value="CLEAR"></td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
    <?php include("footer.php");?>
</body>
</html>