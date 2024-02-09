<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        table th {
            text-align: center;
        }

        .table {
            margin: auto;
            width: 30% !important;
            text-align: center;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1 class="text-center text-dark">View recored.</h1>
        <hr>

        <form action="" method="POST" class="form-horizontal">
            <table class="table table-bordered">
                <tr>
                    <th scope="row">Clue_no</th>
                    <th scope="row">Clue</th>
                </tr>
                <tbody>
                    <?php
                    $conn = mysqli_connect('localhost', 'root', '', 'svit');

                    $sql = "SELECT clue_no,clue FROM game";
                    $query = $conn->query($sql);
                    while ($row = $query->fetch_assoc()) {


                    ?>
                        <tr>
                            <td><?php echo $row['clue_no']; ?></td>
                            <td><?php echo $row['clue']; ?></td>
                        </tr>
                    <?php
                    }
                    ?>

                </tbody>
            </table>
        </form>
    </div>


</body>

</html>