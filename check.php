<!-- last code check for notice  -->
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
            echo "<script type='text/javascript'>alert('Your complaint has been succesfully registered')</script>";
            mysqli_query($conn,$sql);
            
            header("location:socMemFileComplaint.php");
            $conn->close();

        }
    ?>