<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SCAN QR-CODE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script type="text/javascript" src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script>
</head>

<body>
    <div class="container">
        <h1 class="text-center text-dark">SCAN NOW!</h1>

        <hr><br>
        <div class="row">
            <div class="col-md-6">

                <video src="" id="preview" width="100%"></video>
            </div>
            <div class="col-md-6">
                <form action="insert.php" method="POST" class="form-horizontal">
                <br><br><label for="">Scan QR to get Clue!</label>
                <input type="text" name="clue" id="text" readonly="" class="form-control">
                </form>
                
            </div>
        </div>
    </div>


    <script type="text/javascript">
        let scanner = new Instascan.Scanner({
            video: document.getElementById('preview')
        });
        scanner.addListener('scan', function(content) {
            document.getElementById('text').value = content;
        });
        Instascan.Camera.getCameras().then(function(camera) {
            if (camera.length > 0) {
                scanner.start(camera[0]);
            } else {
                alert('No camera found.');
            }
        }).catch(function(e) {
            console.error(e);
        });

        scanner.addListener('scan', function(c) {
            document.getElementById('text').value = c;
            document.forms[0].submit();
       });

    </script>
</body>

</html>

<?php
// error_reporting(0);
// $conn = mysqli_connect('localhost', 'root', '', 'svit');

// if (isset($_POST['clue'])) {
//     $clue = $_POST['clue'];
//     $sql = "INSERT INTO game(clue) VALUES('$clue')";
//     if ($conn->query($sql) === TRUE) {
//         echo "Your Clue is" . $clue;
//         // echo '<script>alert("nikal loude")</script>'; 
//         // header("location:index.php");
// }
//     } else {
//         echo " " . $sql . "<br>" . $conn->error;
//     }
    
// $conn->close();
?>