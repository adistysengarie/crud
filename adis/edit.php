<?php

$server = "localhost";
    $username = "root";
    $password = "";
    $db = "adiss";

    $koneksi = new mysqli($server,$username,$password,$db);

    if($koneksi->connect_error)
    {
        die("Koneksi error: ".$koneksi->connect_error);
    }

    $id         = $_GET['id'];
    $mahasiswa  = mysqli_query($koneksi, "select * from adisss where id='$id'");
    $row        = mysqli_fetch_array($mahasiswa);
    ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Bootstrap CSS v5.2.0-beta1 -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"
      integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor"
      crossorigin="anonymous"
    />

    <style>
      body {
        background-color: black;
      }
    </style>
  </head>
  <body>

    <!-- Form -->
    <div class="container p-5 my-5 mx-auto bg-dark rounded-2">
      <h3 class="text-center text-white">Input Mahasiswa</h3>
      <form action="update.php" method="post" class="text-white">
        <input type="hidden" value="<?php echo $row['ID']; ?>" name="ID">
        <div class="mb-3">
          <label>NIM :</label>
          <input type="text" name="NIM" class="form-control" required value="<?php echo $row["NIM"]; ?>">
        </div>
        <div class="mb-3">
          <label>NAMA :</label>
          <input type="text" name="nama" class="form-control" required value="<?php echo $row["NAMA"]; ?>">
        </div>
        <div class="mb-3">
          <label>KELAS :</label>
          <input type="text" name="kelas" class="form-control" required value="<?php echo $row["KELAS"]; ?>">
        </div>

        <button type="submit" class="btn btn-success">Submit</button>
      </form>
    </div>


    <!-- Bootstrap JavaScript Libraries -->
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
      integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk"
      crossorigin="anonymous"
    ></script>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js"
      integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy"
      crossorigin="anonymous"
    ></script>
  </body>
</html>