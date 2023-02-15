<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Register Page</title>
</head>
<body>
    <?php
        require_once 'koneksi.php';
        //untuk mengirim data ke table users
        if (isset($_POST['submit'])){
        $username = strip_tags($_POST['username']);
        $email = strip_tags($_POST['email']);
        $nama = strip_tags($_POST['nama']);
        $password = strip_tags($_POST['password']);

        //membuat sebuah validasi
        if (empty($username) || empty($email) || empty($nama) || empty($password)) {
            echo 'data harus di isi !';
            //jika data yang dimasukkan lebih dari 1 atau ada persamaan request
        } elseif (count((array) $connect->query('select username from users where username = "$username"')->fetch_array()) > 1){
            echo 'data sudah ada !';
            //input data ke database
        } else {
            $hashing = md5($password);
            $input = $connect->query("insert into users(nama,username,email,password) values ('$nama','$username','$email','$hashing')");
            if ($input){
                header ('location: login.php');
            } else {
                echo 'gagal maning';
            }
        }
        }
    ?>
    <!-- <form method="post">
        <input type="text" name="username" autocomplete="off" placeholder="isi username.."/>
        <br/>
        <input type="email" name="email" autocomplete="off" placeholder="isi email.."/>
        <br/>
        <input type="text" name="nama" autocomplete="off" placeholder="isi nama lengkap.."/>
        <br/>
        <input type="password" name="password" autocomplete="off" placeholder="isi password.."/>
        <br/>
        <button type="submit" name="submit">Register</button>
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
          <h2 class="fw-bold mb-5">Register your account now</h2>
          <form method="post">
            <!-- Namalengkap input -->
            <div class="form-outline mb-4">
              <input type="text" id="form3Example3" name="nama" autocomplete="off" class="form-control" />
              <label class="form-label" for="form3Example3">Nama Lengkap</label>
            </div>

            <!-- Username input -->
            <div class="form-outline mb-4">
              <input type="text" id="form3Example3" name="username" autocomplete="off" class="form-control" />
              <label class="form-label" for="form3Example3">Username</label>
            </div>

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

            <!-- Checkbox -->
            <!-- <div class="form-check d-flex justify-content-center mb-4">
              <input class="form-check-input me-2" type="checkbox" value="" id="form2Example33" checked />
              <label class="form-check-label" for="form2Example33">
                Subscribe to our newsletter
              </label>
            </div> -->

            <!-- Submit button -->
            <button type="submit" name="submit" class="btn btn-primary btn-block mb-4">
              Register
            </button>

            <!-- Register buttons -->
            <!-- <div class="text-center">
              <p>or sign up with:</p>
              <button type="button" class="btn btn-link btn-floating mx-1">
                <i class="fab fa-facebook-f"></i>
              </button>

              <button type="button" class="btn btn-link btn-floating mx-1">
                <i class="fab fa-google"></i>
              </button>

              <button type="button" class="btn btn-link btn-floating mx-1">
                <i class="fab fa-twitter"></i>
              </button>

              <button type="button" class="btn btn-link btn-floating mx-1">
                <i class="fab fa-github"></i>
              </button>
            </div> -->
          </form>
        </div>
      </div>
    </div>
  </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>