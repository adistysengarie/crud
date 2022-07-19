<?php
include'koneksi.php';
    
    $lists = array();
    $sql = "SELECT * from adiss";
    $exc = $koneksi->query($sql); if ($exc->num_rows > 0) { while ($row = $exc->
fetch_assoc()){ $lists[] = $row; } } $koneksi->close(); ?>

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
        background-image: url("https://img3.goodfon.com/wallpaper/nbig/c/eb/tekstura-polosy-sinii-chernyi-zelenyi-color.jpg");
      }
    </style>
  </head>
  <body>

    <!-- Form -->
    <div class="container p-5 my-5 mx-auto bg-dark rounded-2">
      <h3 class="text-center text-white">Input Mahasiswa</h3>
      <form action="create.php" method="post" class="text-white">
        <div class="mb-3">
          <label>NIM :</label>
          <input
            type="text"
            class="form-control"
            name="nim"
            required
            placeholder="e.g 16975854"
          />
        </div>
        <div class="mb-3">
          <label>Nama :</label>
          <input
            type="text"
            class="form-control"
            name="nama"
            required
            placeholder="Masukkan Nama Lengkap"
          />
        </div>
        <div class="mb-3">
          <label>Kelas :</label>
          <input
            type="text"
            class="form-control"
            name="kelas"
            required
            placeholder="e.g SI.4A"
          />
        </div>

        <button type="submit" class="btn btn-success">Submit</button>
      </form>
    </div>

    <!-- Table -->
    <div class="container">
      <table class="table table-bordered text-center table-dark">
        <thead>
          <tr>
            <th scope="col">NIM</th>
            <th scope="col">Nama</th>
            <th scope="col">Kelas</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          <?php
foreach ($lists as $list){
    ?>
          <tr>
            <th scope="row"><?php echo $list["NIM"]; ?></th>
            <td><?php echo $list["NAMA"]; ?></td>
            <td><?php echo $list["KELAS"]; ?></td>
            <td>
              <a
                class="btn btn-success"
                href="edit.php"
                >Edit</a
              >
              <a
                class="btn btn-danger"
                href="delete.php"
              >
                Delete</a
              >
            </td>
          </tr>
          <?php
}
    ?>
        </tbody>
      </table>
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