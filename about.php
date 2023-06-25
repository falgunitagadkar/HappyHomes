<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="header.css">
    <style>
        #about h1
        {
            text-align:center;
            font-size:3em;
        }

        #about
        {
            padding-top:100px;
        }

        #details
        {
            width:900;
            margin:50px 150px;
            font-size:20px;
        }

        #points li
        {
            display:block;
        }
        dt
        {
            font-weight: bold;
        }

    </style>
</head>
<body>
    <div id="header"> 
        <img id="logo" src="assets/logo.png"/> 
        <div id="sms"><a href="index.html">Society Management System</a></div>
        <div id="menu"><ul type="none">
                        <li><a href="index.html">Home </a></li>&nbsp;&nbsp;
                        <li><a href="contact.html">Contact </a></li>&nbsp;&nbsp;
                        <li><a href="about.html">About</a></li>
    </ul></div>
    <div id="about">
        <h1>About Us</h1>
        <div id="details"><p>This is a project build by <strong>Falguni Tagadkar</strong> and <strong>Saumya Desai</strong> 
                        from SEM-6 currently pursuing <strong>B.E Computer Science</strong>.This project is the Implementation of 
                        Design Engineering Group Project.</p>
                        <p>Our project title is "Society Management System" </p>
                        <p>An Residential Housing Management System is a software application designed to streamline and automate various aspects of managing residential housing complexes or communities. It typically includes features such as a notice board, complaint management, and meeting handling. Here's a breakdown of these functionalities:</p>
                        <div id="points">
                            <ol type="number">
                                <li style="font-weight: bold;">1.Notice Board:</br></br>
                                Centralized platform: The system provides a central place where residents and management can share important notices, announcements, or updates.
                                </li>

                                </br></br>   
                                
                                <li style="font-weight:bold;">2. Complaints Management:</br></br>
                                Submission and tracking: Residents can submit complaints or service requests through the system, providing details such as the nature of the issue, location, and urgency.<br>
                                Status updates: Residents can track the progress of their complaints and receive updates on the status, ensuring transparency and accountability in the resolution process.<br>
                                Communication: The system facilitates communication between residents and management, allowing residents to provide additional information or request clarifications related to their complaints.<br>
                                </li>

                                </br></br>   
                                <li style="font-weight:bold;">3. Meeting Handling:</br></br>
                                Scheduling: The system enables the management to schedule community meetings, such as residents' association meetings or committee meetings, and notify the participants.
                                </li>
                            </ol>
                            
                            Overall, a Residential Housing Management System with these functionalities improves communication, enhances transparency, and streamlines administrative processes, leading to more efficient management of residential housing complexes or communities.
                        </div>
                            
                        </div>
                    </div>
                <?php include("footer.php");?>   
     </body>          
      </html>