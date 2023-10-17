<?php
if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message">
         <span>'.$message.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}
?>

<header class="header">

   <div class="flex">

      <a href="admin_page.php" class="logo">Yönetici<span>Paneli</span></a>

      <nav class="navbar">
         <a href="admin_page.php">anasayfa</a>
         <a href="admin_products.php">ürünler</a>
         <a href="admin_orders.php">siparişler</a>
         <a href="admin_users.php">kullanıcılar</a>
         <a href="admin_contacts.php">mesajlar</a>
      </nav>

      <div class="icons">
         <div id="menu-btn" class="fas fa-bars"></div>
         <div id="user-btn" class="fas fa-user"></div>
      </div>

      <div class="account-box">
         <p>kullanıcı adı : <span><?php echo $_SESSION['admin_name']; ?></span></p>
         <p>email : <span><?php echo $_SESSION['admin_email']; ?></span></p>
         <a href="logout.php" class="delete-btn">çıkış yap</a>
         <div>yeni <a href="login.php">giriş</a> | <a href="register.php">kayıt ol</a></div>
      </div>

   </div>

</header>