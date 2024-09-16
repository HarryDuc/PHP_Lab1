<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="" method="post">
    <input type="number" min="0" name="dtb">
    <input type="submit" value="Xac nhan">
  </form>
  <?php
    if (isset($_POST['dtb'])) {
      $dt = $_POST['dtb'];
      if (is_numeric($dt)) {
        $dtb = $dt;
        if ($dtb < 500000) {
          echo "$dtb la khach hang binh thuong.";
        }else if ($dtb >= 500000 && $dtb <= 1000000) {
          echo "$dtb la khach hang than thiet.";
        }else {
          echo "$dtb la khach hang VIP.";
        }
      }
    }else {
      echo "So tien da nhap khong hop le.";
    }
  ?>
</body>
</html>