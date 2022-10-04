<?php
  include 'database.php';
  $id=$_GET['updateid'];
  $sql="Select * from `crud` where id=$id";
  $result = mysqli_query($con, $sql);
  $row = mysqli_fetch_assoc($result);
  $name = $row['name'];
  $nim = $row['nim'];


  if (isset($_POST['update'])) {
    $name = $_POST['name'];
    $nim = $_POST['nim'];

    $sql = "update `crud` set id='$id', name='$name', nim='$nim' where id=$id ";
    $result = mysqli_query($con,$sql);

    if ($result) {
      header('location:display.php');
    } else {
      die(mysqli_error($con));
    }
  }

?>



<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">

  <title>CRUD Operation</title>
</head>

<body>
  <div class="container my-5">
    <form method="post">
      <div class="form-group">
        <label>Nama</label>
        <input 
            type="text" 
            class="form-control" 
            placeholder="Masukkan Nama Lengkap" 
            name="name" 
            value=<?php echo $name;?>>
      </div>
      <div class="form-group">
        <label>NIM</label>
        <input 
            type="text" 
            class="form-control" 
            placeholder="Masukkan NIM Anda" 
            name="nim"
            value=<?php echo $nim;?>>
      </div>

      <button type="submit" class="btn btn-primary" name="update">
        Update
      </button>
    </form>
  </div>
</body>

</html>