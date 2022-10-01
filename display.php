<?php
    include 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Operation</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <button class="btn btn-primary my-5">
            <a href="user.php" class="text-light">Add User</a>
        </button>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">NIM</th>
                    <th scope="col">Operation</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $sql = "Select * from `crud`";
                    $result = mysqli_query($con, $sql);
                    $number =1;
                    if($result) {
                        while($row = mysqli_fetch_assoc($result)){
                            $id = $row['id'];
                            $name = $row['name'];
                            $nim = $row['nim'];

                            echo '
                            <tr>
                                <th scope="row">'.$number.'</th>
                                <td>'.$name.'</td>
                                <td>'.$nim.'</td>
                                <td>
                                    <button 
                                        class = "btn btn-primary">
                                        <a href="update.php?updateid='.$id.'" 
                                        class="text-light">Edit</a>
                                    </button>
                                    <button 
                                        class = "btn btn-danger">
                                        <a href="delete.php?deleteid='.$id.'" 
                                        class="text-light">Delete</a>
                                    </button>
                                </td>
                            </tr>
                            ';
                            $number++;
                        }
                    }
                ?>
            </tbody>
        </table>
    </div>
    
</body>

</html>