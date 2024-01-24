<!--
Sahaaya Hasth
Alpha
Automation Alliances
Agriscape
P Vamshi Krishna Team
Elit
Adeptus Mechanicus
Mrityunjaya
Electro-Port
-->

<?php
    $login=false;
    $servername="localhost";
    $username="id21662121_raksha";
    $password="Pragathi@12";
    $database="id21662121_voting";

$conn = mysqli_connect($servername,$username,$password,$database);
    //die if connection was not successfull
    if(!$conn)
    {
        die("Sorry we failed to connect: ".mysqqli_connect_error($conn));
    }
    else
    {
        
    }
    $test=array();
    $count=0;
    $res=mysqli_query($conn,"select * from graph");
    while($row=mysqli_fetch_array($res))
    {
        $test[$count]["label"]=$row["p_name"];
        $test[$count]["y"]=$row["count"];
        $count=$count+1;
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet"> <!-- monteserrat font -->
    <script>
    window.onload = function() {
  
    var chart = new CanvasJS.Chart("chartContainer", {
    animationEnabled: true,
    backgroundColor: 'rgba(0, 0, 0, 0)', // Transparent background color
    borderColor: 'rgba(75, 192, 192, 1)',
    borderWidth: 1,
    theme: "dark",
    title:{
        //text: "Results",
        //fontWeight: 'normal', 
        //fontFamily: 'Arial, sans-serif'
    },
    axisY: {
        //title: "count",
    },
    data: [{
        type: "column",
        yValueFormatString: "#,##0.## votes",
        dataPoints: <?php echo json_encode($test, JSON_NUMERIC_CHECK); ?>
    }]
    });
    chart.render(); 

    // After the chart is rendered, change the color of column names
    var labels = document.querySelectorAll('.canvasjs-chart-credit');
    labels.forEach(function(label) {
        label.style.fill = 'white'; // Set the color to white
    });
    }

 </script>

    <script>
        function isValidEmail(email) {
        // Regular expression for a simple email validation
        var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return emailRegex.test(email);
        }

        function func1()
        {
            // Use AJAX to send a request to the server to execute the SQL query
            var email = prompt("Please enter your email:");
            if (email == "" || email==null)
            {
                alert("Please enter your email id to vote");
            }
            else if (email !== null && isValidEmail(email))
            {
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() 
            {
                if (this.readyState == 4) 
                {
                    if (this.status == 200) 
                    {
                        if (this.responseText === "Success") 
                        {
                            alert("Thank You for Voting for Sahaaya Hasth");
                        } 
                        else 
                        {
                            alert("Voting with this email is aldready done");
                        }
                    } 
                    else 
                    {
                        // The request had an error, show an alert with the error message
                        alert("Error: " + this.responseText);
                    }
                }
            };
            var url = "InsertVote1.php?email=" + encodeURIComponent(email);
            xmlhttp.open("GET", url, true);
            xmlhttp.send();
            }
            else
            {
                alert("Please enter a valid email id");
            }
        }

        function func2()
        {
            // Use AJAX to send a request to the server to execute the SQL query
            var email = prompt("Please enter your email:");
            if (email == "" || email==null)
            {
                alert("Please enter your email id to vote");
            }
            else if (email !== null && isValidEmail(email))
            {
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() 
            {
                if (this.readyState == 4) 
                {
                    if (this.status == 200) 
                    {
                        if (this.responseText === "Success") 
                        {
                            alert("Thank You for Voting for Alpha");
                        } 
                        else 
                        {
                            alert("Voting with this email is aldready done");
                        }
                    } 
                    else 
                    {
                        // The request had an error, show an alert with the error message
                        alert("Error: " + this.responseText);
                    }
                }
            };
            var url = "InsertVote2.php?email=" + encodeURIComponent(email);
            xmlhttp.open("GET", url, true);
            xmlhttp.send();
            }
            else
            {
                alert("Please enter a valid email id");
            }
        }

        function func3()
        {
            // Use AJAX to send a request to the server to execute the SQL query
            var email = prompt("Please enter your email:");
            if (email == "" || email==null)
            {
                alert("Please enter your email id to vote");
            }
            else if (email !== null && isValidEmail(email))
            {
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() 
            {
                if (this.readyState == 4) 
                {
                    if (this.status == 200) 
                    {
                        if (this.responseText === "Success") 
                        {
                            alert("Thank You for Voting for Automation Alliances");
                        } 
                        else 
                        {
                            alert("Voting with this email is aldready done");
                        }                       
                    } 
                    else 
                    {
                        // The request had an error, show an alert with the error message
                        alert("Error: " + this.responseText);
                    }
                }
            };
            var url = "InsertVote3.php?email=" + encodeURIComponent(email);
            xmlhttp.open("GET", url, true);
            xmlhttp.send();
            }
            else
            {
                alert("Please enter a valid email id");
            }
        }

        function func4()
        {
            // Use AJAX to send a request to the server to execute the SQL query
            var email = prompt("Please enter your email:");
            if (email == "" || email==null)
            {
                alert("Please enter your email id to vote");
            }
            else if (email !== null && isValidEmail(email))
            {
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() 
            {
                if (this.readyState == 4) 
                {
                    if (this.status == 200) 
                    {
                        if (this.responseText === "Success") 
                        {
                            alert("Thank You for Voting for Team Agriscape");
                        } 
                        else 
                        {
                            alert("Voting with this email is aldready done");
                        }
                    } 
                    else 
                    {
                        // The request had an error, show an alert with the error message
                        alert("Error: " + this.responseText);
                    }
                }
            };
            var url = "InsertVote4.php?email=" + encodeURIComponent(email);
            xmlhttp.open("GET", url, true);
            xmlhttp.send();
            }
            else
            {
                alert("Please enter a valid email id");
            }
        }

        function func5()
        {
            // Use AJAX to send a request to the server to execute the SQL query
            var email = prompt("Please enter your email:");
            if (email == "" || email==null)
            {
                alert("Please enter your email id to vote");
            }
            else if (email !== null && isValidEmail(email))
            {
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() 
            {
                if (this.readyState == 4) 
                {
                    if (this.status == 200) 
                    {
                        if (this.responseText === "Success") 
                        {
                            alert("Thank You for Voting for P Vamshi Krishna Team");
                        } 
                        else 
                        {
                            alert("Voting with this email is aldready done");
                        }
                        
                    } 
                    else 
                    {
                        // The request had an error, show an alert with the error message
                        alert("Error: " + this.responseText);
                    }
                }
            };
            var url = "InsertVote5.php?email=" + encodeURIComponent(email);
            xmlhttp.open("GET", url, true);
            xmlhttp.send();
            }
            else
            {
                alert("Please enter a valid email id");
            }
        }

        function func6()
        {
            // Use AJAX to send a request to the server to execute the SQL query
            var email = prompt("Please enter your email:");
            if (email == "" || email==null)
            {
                alert("Please enter your email id to vote");
            }
            else if (email !== null && isValidEmail(email))
            {
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() 
            {
                if (this.readyState == 4) 
                {
                    if (this.status == 200) 
                    {
                        if (this.responseText === "Success") 
                        {
                            alert("Thank You for Voting for Elit");
                        } 
                        else 
                        {
                            alert("Voting with this email is aldready done");
                        }
                        
                    } 
                    else 
                    {
                        // The request had an error, show an alert with the error message
                        alert("Error: " + this.responseText);
                    }
                }
            };
            var url = "InsertVote6.php?email=" + encodeURIComponent(email);
            xmlhttp.open("GET", url, true);
            xmlhttp.send();
            }
            else
            {
                alert("Please enter a valid email id");
            }
        }

        function func7()
        {
            // Use AJAX to send a request to the server to execute the SQL query
            var email = prompt("Please enter your email:");
            if (email == "" || email==null)
            {
                alert("Please enter your email id to vote");
            }
            else if (email !== null && isValidEmail(email))
            {
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() 
            {
                if (this.readyState == 4) 
                {
                    if (this.status == 200) 
                    {
                        if (this.responseText === "Success") 
                        {
                            alert("Thank You for Voting for Adeptus Mechanicus");
                        } 
                        else 
                        {
                            alert("Voting with this email is aldready done");
                        }
                        
                    } 
                    else 
                    {
                        // The request had an error, show an alert with the error message
                        alert("Error: " + this.responseText);
                    }
                }
            };
            var url = "InsertVote7.php?email=" + encodeURIComponent(email);
            xmlhttp.open("GET", url, true);
            xmlhttp.send();
            }
            else
            {
                alert("Please enter a valid email id");
            }
        }

        function func8()
        {
            // Use AJAX to send a request to the server to execute the SQL query
            var email = prompt("Please enter your email:");
            if (email == "" || email==null)
            {
                alert("Please enter your email id to vote");
            }
            else if (email !== null && isValidEmail(email))
            {
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() 
            {
                if (this.readyState == 4) 
                {
                    if (this.status == 200) 
                    {
                        if (this.responseText === "Success") 
                        {
                            alert("Thank You for Voting for Mrityunjaya");
                        } 
                        else 
                        {
                            alert("Voting with this email is aldready done");
                        }
                        
                    } 
                    else 
                    {
                        // The request had an error, show an alert with the error message
                        alert("Error: " + this.responseText);
                    }
                }
            };
            var url = "InsertVote8.php?email=" + encodeURIComponent(email);
            xmlhttp.open("GET", url, true);
            xmlhttp.send();
            }
            else
            {
                alert("Please enter a valid email id");
            }
        }

        function func9()
        {
            // Use AJAX to send a request to the server to execute the SQL query
            var email = prompt("Please enter your email:");
            if (email == "" || email==null)
            {
                alert("Please enter your email id to vote");
            }
            else if (email !== null && isValidEmail(email))
            {
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() 
            {
                if (this.readyState == 4) 
                {
                    if (this.status == 200) 
                    {
                        if (this.responseText === "Success") 
                        {
                            alert("Thank You for Voting for Electro-Port");
                        } 
                        else 
                        {
                            alert("Voting with this email is aldready done");
                        }   
                    } 
                    else 
                    {
                        // The request had an error, show an alert with the error message
                        alert("Error: " + this.responseText);
                    }
                }
            };
            var url = "InsertVote9.php?email=" + encodeURIComponent(email);
            xmlhttp.open("GET", url, true);
            xmlhttp.send();
            }
            else
            {
                alert("Please enter a valid email id");
            }
        }
        
        function func10()
        {
            // Use AJAX to send a request to the server to execute the SQL query
            var email = prompt("Please enter your email:");
            if (email == "" || email==null)
            {
                alert("Please enter your email id to vote");
            }
            else if (email !== null && isValidEmail(email))
            {
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() 
            {
                if (this.readyState == 4) 
                {
                    if (this.status == 200) 
                    {
                        if (this.responseText === "Success") 
                        {
                            alert("Thank You for Voting for Future Drive");
                        } 
                        else 
                        {
                            alert("Voting with this email is aldready done");
                        }   
                    } 
                    else 
                    {
                        // The request had an error, show an alert with the error message
                        alert("Error: " + this.responseText);
                    }
                }
            };
            var url = "InsertVote10.php?email=" + encodeURIComponent(email);
            xmlhttp.open("GET", url, true);
            xmlhttp.send();
            }
            else
            {
                alert("Please enter a valid email id");
            }
        }
    </script>
    <style>
        body {
            
            font-family: 'Palatino Linotype', 'Book Antiqua', Palatino, serif;
            /*font-family: 'Montserrat', sans-serif; */
        }
        .display-4{
            font-family: "Copperplate", "Copperplate Gothic Light", sans-serif;
        }
        .project {
            color: #021425;
            margin-bottom: 40px;
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease-in-out;
            background-color: rgba(2, 20, 37, 0.1);
            /*backdrop-filter: blur(5px);
            background-color: rgba(255, 255, 255, 0.1);*/
        }
        
        p{
            text-align: justify;
        }
        .project:hover {
            transform: scale(1.05);
        }

        .project img {
            max-width: 100%;
            border-radius: 12px;
            margin-bottom: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .vote-button {
            background-color: #021425; /*#5fedf5*/
            color:#ffffff ;
            padding: 12px 24px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-size: 18px;
            transition: background-color 0.3s ease-in-out;
        }
        .vote-button {
            background-color: #021425; /*#5fedf5*/
            color:#ffffff ;
            padding: 12px 24px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-size: 18px;
            transition: background-color 0.3s ease-in-out;
        }

        .vote-button:hover {
            background-color: #063562;
        }
        dialog {
  position: fixed;
  top: 90%;
  left: 50%;
  transform: translate(-50%, -50%);
  padding: 20px;
  background: #fff;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
  border-radius: 20px;
  max-width: 80%; /* Set a maximum width for the dialog */
  overflow-y: auto; /* Add a vertical scrollbar if the content overflows */
  max-height: 80vh; /* Set a maximum height for the dialog */
}

@media (max-width: 768px) {
  dialog {
    width: 90%; /* Adjust the width for smaller screens */
    padding: 10px; /* Adjust the padding for smaller screens */
  }
}
    </style>
</head>
<body>
    <div class="row justify-content-center">
        <div class="col-12 col-sm-2 pt-10 text-center text-sm-end">
        <img src="ps.png" alt="ps logo" width="150px" height="150px">
        </div>
        <div class="display-4 col-12 col-sm-10 pt-5 text-center text-sm-start" style="color: #021425;">
        Vote For Your Favourite Project!
        </div>
    </div><br/><br/>

    
    <div class="container">
    <div class="row justify-content-center">
    <div class="card col project m-2 w-30">
        <h4 class="card-title text-center">Sahaaya Hasth</h4>
        <div class="row justify-content-center">
        <button type="submit" class="vote-button col-5 w-46 m-1 " onclick="func1()"> Vote Here</button>
        <button type="button" class="vote-button col-5 w-50 m-1" onclick="openDialog1()"> View Discription </button>
        </div>
    </div>

    <div class="card col project m-2 w-30">
        <h4 class="card-title text-center">Alpha</h4>
        <div class="row justify-content-center">
        <button type="submit" class="vote-button col-5 w-46 m-1" onclick="func2()"> Vote Here</button>
        <button type="button" class="vote-button col-5 w-50 m-1" onclick="openDialog2()"> View Discription </button>
        </div>
    </div>

    <div class="card col project m-2 w-30">
        <h4 class="card-title text-center">Automation Alliances</h4>
        <div class="row justify-content-center">
        <button type="submit" class="vote-button col-5 w-46 m-1" onclick="func3()"> Vote Here</button>
        <button type="button" class="vote-button col-5 w-50 m-1" onclick="openDialog3()"> View Discription </button>
        </div>
    </div>
    </div>
    </div>

    <div class="container">
    <div class="row justify-content-center">
    <div class="card col project m-2 w-30">
        <h4 class="card-title text-center">Agriscape</h4>
        <div class="row justify-content-center">
        <button type="submit" class="vote-button col-5 w-46 m-1" onclick="func4()"> Vote Here</button>
        <button type="button" class="vote-button col-5 w-50 m-1" onclick="openDialog4()"> View Discription </button>
        </div>
    </div>
    <div class="card col project m-2 w-30">
        <h4 class="card-title text-center">Future Drive</h4>
        <div class="row justify-content-center">
        <button type="submit" class="vote-button col-5 w-46 m-1" onclick="func10()"> Vote Here</button>
        <button type="button" class="vote-button col-5 w-50 m-1" onclick="openDialog10()"> View Discription </button>
        </div>
    </div>
    <div class="card col project m-2 w-30">
        <h4 class="card-title text-center">Elit</h4>
        <div class="row justify-content-center">
        <button type="submit" class="vote-button col-5 w-46 m-1" onclick="func6()"> Vote Here</button>
        <button type="button" class="vote-button col-5 w-50 m-1" onclick="openDialog6()"> View Discription </button>
        </div>
    </div>
    </div>
    </div>

    <div class="container">
    <div class="row justify-content-center">
    <div class="card col project m-2 w-30">
        <h4 class="card-title text-center">Adeptus Mechanicus</h4>
        <div class="row justify-content-center">
        <button type="submit" class="vote-button col-5 w-46 m-1" onclick="func7()"> Vote Here</button>
        <button type="button" class="vote-button col-5 w-50 m-1" onclick="openDialog7()"> View Discription </button>
        </div>
    </div>
    <div class="card col project m-2 w-30">
        <h4 class="card-title text-center">Mrityunjaya</h4>
        <div class="row justify-content-center">
        <button type="submit" class="vote-button col-5 w-46 m-1" onclick="func8()"> Vote Here</button>
        <button type="button" class="vote-button col-5 w-50 m-1" onclick="openDialog8()"> View Discription </button>
        </div>
    </div>
    <div class="card col project m-2 w-30">
        <h4 class="card-title text-center">Electro-Port</h4>
        <div class="row justify-content-center">
        <button type="submit" class="vote-button col-5 w-46 m-1" onclick="func9()"> Vote Here</button>
        <button type="button" class="vote-button col-5 w-50 m-1" onclick="openDialog9()"> View Discription </button>
        </div>
    </div>
    </div>
    </div>
    

    <div class="container">
    <div class="row justify-content-center">
    <div class="col m-2 w-30">
        <h4 class="card-title text-center"></h4>
        <div class="row justify-content-center">
        </div>
    </div>
    <div class="card col project m-2 w-30">
        <h4 class="card-title text-center">P Vamshi Krishna Team</h4>
        <div class="row justify-content-center">
        <button type="submit" class="vote-button col-5 w-46 m-1" onclick="func5()"> Vote Here</button>
        <button type="button" class="vote-button col-5 w-50 m-1" onclick="openDialog5()"> View Discription </button>
        </div>
    </div>
    <div class="col m-2 w-30">
        <h4 class="card-title text-center"></h4>
        <div class="row justify-content-center">
        </div>
    </div>
    </div>
    </div>
    
    <br/><br/>
    <div id="chartContainer" style="height: 370px; width: 100%;"></div>
    <script src="https://cdn.canvasjs.com/canvasjs.min.js"></script><br/><br/> <!-- graph -->

<dialog id="myDialog1">
  <h2>Sahaaya Hasth</h2>
  <p>In Sanskrit “Sahaaya” means help and “Hasth” means hand, So we adopted the name Sahaaya Hasth. In this Project work prosthetic arm and multi purpose glove is designed to help industrial Robotic, Biomedical and Automation applications.
The robot body was prepared mechanically and electrical components were chosen to be suitable to be used as a robotic arm. The robot is controlled using Arduino Uno as the brain of the robot, connected to the Bluetooth via HC05 Bluetooth module as the interface for Arduino Uno to the Bluetooth. Arduino is an open-source electronics prototyping platform based on flexible, easy-to-use hardware and software. The movement of the robot is controlled by inputting the desired degree of movement of the robotic arm and then the robotic arm will move to the desired movement that has been inputted. There is also a pre-programmed movement of the robotic arm with the input from controller glove. The glove can control multiple application in stimulated time.
Requirements: Socket , extension box with at least 2 plug point , good WIFI connection and enough space to place our model.</p>
  <button class="vote-button" onclick="closeDialog1()">Close</button>
</dialog>

<dialog id="myDialog2">
  <h2>Alpha</h2>
  <p>Our project aims to address the rural internet connectivity problem in India by introducing a model that makes internet services available to users of basic feature phones.
The prototype we have built so far helps bring artificial intelligence to feature phones without using the internet.
Thus people who cannot afford expensive internet capable devices can be given access to the wonders of AI as well. 
We do this using automation and web scraping, there is zero additional installation or adjustments on the user end, and any device capable of sending or receiving sms messages can use our project.</p>
  <button class="vote-button" onclick="closeDialog2()">Close</button>
</dialog>

<dialog id="myDialog3">
  <h2>Automation Alliances</h2>
  <p>Creating a gesture-based robot communication system can be a valuable tool to facilitate communication for individuals who are deaf or mute, eliminating discrimination based on their condition. This technology can empower these individuals to express themselves effectively and interact with others more easily.

Utilize advanced gesture recognition technology that can interpret hand movements, to translate these gestures into meaningful communication.
Develop a robot or a digital interface equipped with a screen that can display the interpreted gestures in real-time. By providing them with a reliable and efficient means of expression and communication in various social and professional settings.</p>
  <button class="vote-button" onclick="closeDialog3()">Close</button>
</dialog>

<dialog id="myDialog4">
  <h2>Agriscape</h2>
  <p>An integrated machine which serves dual functioning of both spraying pesticides to the arecanut trees as well as harvesting of arecanut.Combining a detachable, electric motor-driven sprayer and harvester offers versatility and efficiency in areca nut farming. The detachable feature allows farmers to use each component independently when needed. The electric motor ensures a cleaner and more sustainable operation. To optimize usability, ensure a user-friendly attachment and detachment mechanism for seamless transitions between spraying and harvesting modes.</p>
  <button class="vote-button" onclick="closeDialog4()">Close</button>
</dialog>

<dialog id="myDialog5">
  <h2>P Vamshi Krishna Team</h2>
  <p>Advancement in the field of bio medical and providing awareness to the people about the advantage of therapeutic electric treadmill can help in decreasing the rates of walking disabilities and people can help themselves by working out to strengthen their legs and correcting their body posture.
Therapeutic treadmill and moveable footrest can be widely adopted to assist kids from 5-10 years in learning to walk and improve their walking posture. This project is low cost, highly efficient and easy to handle. Therapeutic treadmills are versatile exercise products used for stationary walking or running that can assist patients to improve muscle strength, endurance and recover proper walking gait. Moveable footrest helps in relaxing the leg joints and muscles by placing the foot on it, which also helps in correcting their walking posture.</p>
  <button class="vote-button" onclick="closeDialog5()">Close</button>
</dialog>

<dialog id="myDialog6">
  <h2>Elit</h2>
  <p>Decentralized voting with facial recognition integrates blockchain technology for secure and transparent elections. By employing facial recognition, the system enhances identity verification, ensuring the integrity of each vote. This innovative approach not only strengthens the authenticity of participants but also fosters a more efficient and trustworthy electoral process</p>
  <button class="vote-button" onclick="closeDialog6()">Close</button>
</dialog>

<dialog id="myDialog7">
  <h2>Adeptus Mechanicus</h2>
  <p>The Global Burden of Disease project has shown that skin diseases continue to be the 4th leading cause of nonfatal disease burden worldwide. These conditions are often the presenting face of more severe systemic illnesses, including HIV and neglected tropical diseases (NTD). such as elephantiasis and other lymphedema-causing diseases. Additionally, skin disorders pose a significant threat to patients' well-being, mental health, ability to function, and social participation. However, it is very difficult to provide better dermatological care to under-served or resource-poor regions in a cost-effective manner owing to unavailability of efficient diagnostic tools, lack of connectivity, and poor laboratory infrastructure etc. Moreover, there is also a scarcity of physicians with dermatological training. Even, preliminary screening of a dermatological manifestation seems to be an arduous task. Thus, developing an Artificial intelligence-based tool (through Image processing technique) for preliminary diagnosis of numerous dermatological conditions will prove to be a boon in the health care system.</p>
  <button class="vote-button" onclick="closeDialog7()">Close</button>
</dialog>

<dialog id="myDialog8">
  <h2>Mrityunjaya</h2>
  <p>India faces a daunting road safety crisis with 1.5 lakh annual fatalities, equating to 1130 accidents and 422 deaths daily, stemming from poorly designed infrastructure and hazardous road conditions. Our proposed solution aims to tackle this by providing real-time alerts, precise speed monitoring, and vehicle distance tracking. In emergencies, it aids ambulances, connects vehicles, and swiftly alerts authorities. Contributing 11% of global fatalities annually, these accidents claim over 1,50,000 lives and incur a staggering economic impact of nearly $58 billion, amounting to 3% of India's GDP.

Our system focuses on proactive safety measures, alerting drivers to upcoming hazards, emphasizing caution in accident-prone zones, and facilitating the swift passage of ambulances to potentially save lives. Its non-intrusive design, utilizing vibration, touch, and voice alerts, minimizes distractions and ensures reliability through timely analysis and alerts.</p>
  <button class="vote-button" onclick="closeDialog8()">Close</button>
</dialog>

<dialog id="myDialog9">
  <h2>Electro-Port</h2>
  <p>The project mainly aims at designing a cost-effective low maintenance and high offering 3-wheel passenger vehicle which will replace the conventional gasoline vehicles and therefore reduce the pollutants in the atmosphere
        <br/>
        • It’s a semi-autonomous fully electric vehicle <br/>
• On-board high-speed charging unit<br/>
• User interface / User experience for driver assistance<br/>
• Collision avoidance with advanced vehicle monitoring system.<br/>
• Integrated with solar power<br/>
• Non-metallic scratch proof body<br/>
• Design below RTO specifications<br/>
• No License required<br/>
• A prototype of regenerative braking system has also been designed </p>
  <button class="vote-button" onclick="closeDialog9()">Close</button>
</dialog>

<dialog id="myDialog10">
  <h2>Future Drive</h2>
  <p>In the realm of education, where innovation meets academia, a groundbreaking creation has emerged to revolutionize the traditional classroom experience. Allow us to introduce the Digital Assistant Robot, a remarkable prototype designed to enhance the learning environment while maintaining the irreplaceable presence of teachers. With its cutting-edge technology and a plethora of features tailored specifically for educational settings, this robot represents a novel approach that is set to captivate the academic fraternity.</p>
  <button class="vote-button" onclick="closeDialog10()">Close</button>
</dialog>

<script>
  // Function to open the dialog
  function openDialog1() {
    var dialog = document.getElementById('myDialog1');
    if (!dialog.showModal) {
      dialogPolyfill.registerDialog(dialog);
    }
    dialog.showModal();
  }
  function openDialog2() {
    var dialog = document.getElementById('myDialog2');
    if (!dialog.showModal) {
      dialogPolyfill.registerDialog(dialog);
    }
    dialog.showModal();
  }
  function openDialog3() {
    var dialog = document.getElementById('myDialog3');
    if (!dialog.showModal) {
      dialogPolyfill.registerDialog(dialog);
    }
    dialog.showModal();
  }
  function openDialog4() {
    var dialog = document.getElementById('myDialog4');
    if (!dialog.showModal) {
      dialogPolyfill.registerDialog(dialog);
    }
    dialog.showModal();
  }
  function openDialog5() {
    var dialog = document.getElementById('myDialog5');
    if (!dialog.showModal) {
      dialogPolyfill.registerDialog(dialog);
    }
    dialog.showModal();
  }
  function openDialog6() {
    var dialog = document.getElementById('myDialog6');
    if (!dialog.showModal) {
      dialogPolyfill.registerDialog(dialog);
    }
    dialog.showModal();
  }
  function openDialog7() {
    var dialog = document.getElementById('myDialog7');
    if (!dialog.showModal) {
      dialogPolyfill.registerDialog(dialog);
    }
    dialog.showModal();
  }
  function openDialog8() {
    var dialog = document.getElementById('myDialog8');
    if (!dialog.showModal) {
      dialogPolyfill.registerDialog(dialog);
    }
    dialog.showModal();
  }
  function openDialog9() {
    var dialog = document.getElementById('myDialog9');
    if (!dialog.showModal) {
      dialogPolyfill.registerDialog(dialog);
    }
    dialog.showModal();
  }
  function openDialog10() {
    var dialog = document.getElementById('myDialog10');
    if (!dialog.showModal) {
      dialogPolyfill.registerDialog(dialog);
    }
    dialog.showModal();
  }

  // Function to close the dialog
  function closeDialog1() {
    var dialog = document.getElementById('myDialog1');
    dialog.close();
  }
  function closeDialog2() {
    var dialog = document.getElementById('myDialog2');
    dialog.close();
  }
  function closeDialog3() {
    var dialog = document.getElementById('myDialog3');
    dialog.close();
  }
  function closeDialog4() {
    var dialog = document.getElementById('myDialog4');
    dialog.close();
  }
  function closeDialog5() {
    var dialog = document.getElementById('myDialog5');
    dialog.close();
  }
  function closeDialog6() {
    var dialog = document.getElementById('myDialog6');
    dialog.close();
  }
  function closeDialog7() {
    var dialog = document.getElementById('myDialog7');
    dialog.close();
  }
  function closeDialog8() {
    var dialog = document.getElementById('myDialog8');
    dialog.close();
  }
  function closeDialog9() {
    var dialog = document.getElementById('myDialog9');
    dialog.close();
  }
  function closeDialog10() {
    var dialog = document.getElementById('myDialog10');
    dialog.close();
  }
</script>


</body>
</html>