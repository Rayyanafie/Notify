<?php

session_start();

if (!isset($_SESSION['Username'])) {
  header("Location: Landing.php");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Home</title>
  <link rel="stylesheet" href="Asset/home.css" />
  <link href="https://fonts.googleapis.com/css?family=Gelasio" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Gabriela" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Newsreader" rel="stylesheet" />
</head>

<body>
  <div class="container">
    <div class="garis">
      <div class="garis1"></div>
      <div class="garis2"></div>
      <div class="header">
        <div class="dekor">
          <div class="garis3"></div>
          <div class="lingkaran"></div>
        </div>
        <h1>Notify</h1>
        <div class="dekor">
          <div class="lingkaran"></div>
          <div class="garis4"></div>
        </div>
        <button class="profile" onclick="showPopup()">
          <span class="profile-text">Profile</span>
          <img src="Asset/profile.jpg" alt="Foto Profil" class="profile-image" />
        </button>
      </div>
    </div>

    <div class="reminder-history-describe">
      <a href="desc.php" class="describe">
        <div>
          <h1><span>D</span>escribe</h1>
          <p>Make your task more manageable using this feature.</p>
          <p>Easier your life with us.</p>
        </div>
        <img src="Asset/gambar3.png" alt="gambar3" />
      </a>
    </div>
    <div class="reminder-history-describe">
      <a href="rem.php" class="reminder">
        <div>
          <h1><span>R</span>eminder</h1>
          <p>Make sure you don&apos;t miss anything about your task.</p>
          <p>Set your reminder through this feature.</p>
        </div>
        <div class="kanan">
          <div class="lingkaran">
            <div></div>
          </div>
        </div>
      </a>
      <a href="History.php" class="history">
        <div>
          <h1><span>H</span>istory</h1>
          <p>Want to know how hard you work on assignments.</p>
          <p>Find it here.</p>
        </div>
        <div class="kanan">
          <div class="lingkaran">
            <div></div>
          </div>
        </div>
      </a>
    </div>
    <div class="garis">
      <div class="garis2"></div>
      <div class="garis1"></div>
    </div>
  </div>

  <div id="overlay" onclick="hidePopup()"></div>

  <div id="popup">
    <button class="close-button" onclick="hidePopup()">x</button>
    <div class="profile-form">
      <h3>Profile</h3>
      <div class="profile-header">
        <img src="Asset/profile.jpg" alt="Foto Profil" />
        <span class="username">Username</span>
      </div>
      <div class="garis5"></div>
    </div>
    <form action="" method="POST" class="login-email">
      <?php echo "<h1>Selamat Datang, " . $_SESSION['Username'] . "!" . "</h1>"; ?>

      <div class="form-profile">
        <a href="logout.php" class="btn">Logout</a>
      </div>
    </form>
  </div>
  <script>
    function showPopup() {
      document.getElementById("overlay").style.display = "block";
      document.getElementById("popup").style.display = "block";
    }

    function hidePopup() {
      document.getElementById("overlay").style.display = "none";
      document.getElementById("popup").style.display = "none";
    }
  </script>
</body>

</html>