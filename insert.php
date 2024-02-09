<?php
error_reporting(0);
$conn = mysqli_connect('localhost', 'root', '', 'svit');

if (isset($_POST['clue'])) {
    $clue = $_POST['clue'];
    $sql = "INSERT INTO game(clue) VALUES('$clue')";
    if ($conn->query($sql) === TRUE) {
        echo "<center><h1>Your Clue is " . $clue . "</h1></center>";
        // echo '<script>alert("nikal loude")</script>'; 
        // header("location:index.php");
}
    } else {
        echo " " . $sql . "<br>" . $conn->error;
    }
    
$conn->close();
?>







