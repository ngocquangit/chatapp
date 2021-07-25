<?php 
  session_start();
  if(isset($_SESSION['unique_id'])){
    header("location: users.php");
  }
?>

<?php include_once "header.php"; ?>
<body>
  <div class="wrapper">
    <section class="form signup">
      <header>Quang Chat</header>
      <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text"></div>
        <div class="name-details">
          <div class="field input">
            <label>Họ và đệm</label>
            <input type="text" name="fname" placeholder="Họ và đệm" required>
          </div>
          <div class="field input">
            <label>Tên</label>
            <input type="text" name="lname" placeholder="Tên" required>
          </div>
        </div>
        <div class="field input">
          <label>Mail</label>
          <input type="text" name="email" placeholder="Mail" required>
        </div>
        <div class="field input">
          <label>Mật khẩu</label>
          <input type="password" name="password" placeholder="Mật khẩu" required>
          <i class="fas fa-eye"></i>
        </div>
        <div class="field image">
          <label>Ảnh đại diện</label>
          <input type="file" name="image" accept="image/x-png,image/gif,image/jpeg,image/jpg" required>
        </div>
        <div class="field button">
          <input type="submit" name="submit" value="Đăng ký">
        </div>
      </form>
      <div class="link">Bạn đã có tài khoản? <a href="login.php">Đăng nhập</a></div>
    </section>
  </div>

  <script src="javascript/pass-show-hide.js"></script>
  <script src="javascript/signup.js"></script>

</body>
</html>
