<?php

//if (session_status() !== PHP_SESSION_ACTIVE) {session_start();} for php 5.4 and above

if(session_id() == '' || !isset($_SESSION)){session_start();}


?>

<!DOCTYPE html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tentang Bekas.co</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <link rel="shortcut icon" href="images/favicon.png" />
    <script src="js/vendor/modernizr.js"></script>
  </head>
  <body>

    <nav class="top-bar" data-topbar role="navigation">
      <ul class="title-area">
        <li class="name">
          <h1><a href="index.php">Bekas.co</a></h1>
        </li>
        <li class="toggle-topbar menu-icon"><a href="#"><span></span></a></li>
      </ul>

      <section class="top-bar-section">
      <!-- Right Nav Section -->
        <ul class="right">
          <li class="active"><a href="about.php">Tentang</a></li>
          <li><a href="products.php">Produk</a></li>
          <li><a href="cart.php">Lihat Keranjang</a></li>
          <li><a href="orders.php">Pesanan Saya</a></li>
          <li><a href="contact.php">Kontak</a></li>
          <?php
    
          if(isset($_SESSION['username'])){
            echo '<li><a href="account.php">My Account</a></li>';
            echo '<li><a href="logout.php">Log Out</a></li>';
          }
          else{
            echo '<li><a href="login.php">Log In</a></li>';
            echo '<li><a href="register.php">Register</a></li>';
          }
          ?>
        </ul>
      </section>
    </nav>




    <div class="row" style="margin-top:30px;">
      <div class="small-12">
        <p>Bekas.co adalah platform E-Commerce yang bergerak di bidang Jual/Beli barang bekas secara online sebagai sarana permudah transaksi
        <a href="contact.php" target="_blank" rel="noopener noreferrer" title="Ternak Koding">R.M.A Solution</a>.</p>

        <p>Mengapa harus transaksi di Bekas.co ? Karena Bekas.co akan mempermudah kegiatan transaksi jual beli barang bekas, Kebutuhan anda, dll. Dan akan mendapat garansi 100% jika barang yang di terima tidak sesuai keinginan.</p>

        <p></p>
        <p>PROFILE PENGEMBANG</p>
        <footer>
           <p style="text-align:center; font-size:0.8em;">&copy; Bekas.co . All Rights Reserved.</p>
        </footer>

      </div>
    </div>









    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>
