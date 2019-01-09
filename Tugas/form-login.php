<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="form-login.css">
  </head>
  <body>
    <div class="form">
    <h1>Login</h1>
  <table>
    <div class="tabel">
      <?php
        if(isset($_GET["login_error"])){
            echo "<h2 style='color:red';>Username atau password salah</h2>";
        }

        // $user = "firdausa";
        // $pass = "123";
        // if ($user == "firdausa" && $pass == "123") {
        //     echo "Login Berhasil";
        //   }
        // else {
        //    echo "Login Gagal";
        //  }
         // $user="";
         // if (!isset($user)) {
         //   echo "Variabel tidak ada/belum terbentuk";
         // } else {
         //   echo "Variabel ada"; }
      ?>
      <div class="form">
        <form class="login-form" action="tugas.php" method="post">
          <input required type="text" name="username" placeholder="username"/>
          <input required type="password" name="password" value="" placeholder="password"/>
          <button type="submit" name="simpan" value="Login" onclick="return">login</button>
          <p class="message">Gak punya akun? <a href="#">Buat dulu dong!</a> Lupa Password? </p>
        </form>
      </div>
    </div>
  </table>
</div>
  </body>
</html>
