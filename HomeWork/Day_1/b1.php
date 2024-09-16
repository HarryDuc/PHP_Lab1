<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <form action="" method="post">
    <input type="number" name="songuyen">
    <input type="submit" value="Xac nhan">
  </form>
  <?php
  $songuyen = null;
  if (isset($_POST['songuyen'])) { //kiem tra nguoi dung va bien da xac nhan chua
    if (ctype_digit($_POST['songuyen'])) { //kiem tra co bao gom chu chuoi
      $songuyen = (int) $_POST['songuyen']; //gan bien cho gia tri input da nhap
      if ($songuyen % 2 == 0) {
        echo "$songuyen la so chan";
      } else {
        echo "$songuyen la so le";
      }
    } else {
      echo 'Du lieu nhap bi loi';
    }
  }
  ?>
</body>

</html>