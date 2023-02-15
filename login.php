<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <?php
    // require_once 'koneksi.php';
    // //memanggil config database
    // //jika button submit di klik
    // if (isset($_POST['submit'])){
    //     $email = strip_tags($_POST['email']);
    //     $password = strip_tags($_POST['password']);
    // }

    // //membuat sebuah validasi
    // if (empty($email) || empty($password)){
    // }  elseif (count((array) $connect->query('select email from users where email = "$email"')->fetch_array()) > 1){
    //     echo 'email tidak terdaftar';
    //    } else {
    //         $user = $connect->query('select email, password from users')->fetch_assoc();
    //         //jika user ada / benar
    //         if(password_verify($password, $user['password'])){
    //             $_SESSION['is_login'] = true;
    //             $_SESSION['nama'] = $user['nama'];
    //             header('location: halamanutama.php');
    //         //jika user salah    
    //         } else {
    //             echo 'salah eh';
    //         }
    //    }

       // memangil config database
       include 'koneksi.php';
       // menambahkan error list
       error_reporting(0);
       // membuat sebuah sesi
       session_start();

       // membuat sebuah validasi login jika  sesi nama ada, maka bisa login
      //  if (isset($_SESSION['nama'])) {
      //     header('location: halamanutama.php');
      //  }

       // membuat sebuah validasi mencocokan email password di database
       if (isset($_POST['submit'])) {
          $email = $_POST['email'];
          $password = md5($_POST['password']);

          $query = "select * from users where email = '$email' and password = '$password'";
          $hasil = mysqli_query($connect, $query);
          // jikalau data login ada / sukses
          if ($hasil->num_rows > 0){
            $baris = mysqli_fetch_assoc($hasil);
            $_SESSION['nama'] = $baris['nama'];
            $_SESSION['email'] = $baris['email'];
            $_SESSION['username']  = $baris['username'];
            header('location: halamanutama.php');
          } else {
            echo "<script>alert('Email atau Password anda salah !')</script>";
          }
       }

    ?>
    <!-- method post untuk mengirim data
    <form method="post">
        <input type="email" name="email" placeholder="masukkan email..">
        <br>
        <input type="password" name="password" placeholder="masukkan password..">
        <br>
        <button type="submit" name="submit">Login</button>
    </form> -->
    <section class="text-center">
  <!-- Background image -->
  <div class="p-5 bg-image" style="
        background-image: url('https://mdbootstrap.com/img/new/textures/full/171.jpg');
        height: 300px;
        "></div>
  <!-- Background image -->

  <div class="card mx-4 mx-md-5 shadow-5-strong" style="
        margin-top: -100px;
        background: hsla(0, 0%, 100%, 0.8);
        backdrop-filter: blur(30px);
        ">
    <div class="card-body py-5 px-md-5">

      <div class="row d-flex justify-content-center">
        <div class="col-lg-8">
          <h2 class="fw-bold mb-5">Login</h2>
          <form method="post">
            <!-- Email input -->
            <div class="form-outline mb-4">
              <input type="email" id="form3Example3" name="email" autocomplete="off" class="form-control" />
              <label class="form-label" for="form3Example3">Email address</label>
            </div>

            <!-- Password input -->
            <div class="form-outline mb-4">
              <input type="password" id="form3Example4" name="password" autocomplete="off" class="form-control" />
              <label class="form-label" for="form3Example4">Password</label>
            </div>

            <!-- Submit button -->
            <button type="submit" name="submit" class="btn btn-primary btn-block mb-4">
              Login
            </button>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>