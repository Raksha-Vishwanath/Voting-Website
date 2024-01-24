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

    $email = $_GET['email'];
    $sql = "INSERT INTO project2 (email, time) VALUES ('$email', CURRENT_TIMESTAMP)";
    if (mysqli_query($conn, $sql)) 
    {
        $sql="select count(*) as count from project2"; 
        $result=mysqli_query($conn,$sql);
        $row = mysqli_fetch_assoc($result);
        $count=$row['count'];   

        $query="update graph set count= $count where p_id=2";
        $result1=mysqli_query($conn,$query);
        echo "Success";
    } 
    else 
    {
        echo "Error: " . mysqli_error($conn);
    }
?>