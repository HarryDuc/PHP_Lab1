<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="" method="post">
    <input type="number" step="0.1" min="0" max="10" name="dtb" floatval>
    <input type="submit" value="Xac nhan">
  </form>
  <?php
    if (isset($_POST['dtb'])) {
      $dt = $_POST['dtb'];
      if (is_numeric($dt)) {
        $dtb = $dt;
        if ($dtb < 5) {
          echo "$dtb la diem yeu.";
        }else if ($dtb >= 5 && $dtb <= 6.4 ) {
          echo "$dtb la diem trung binh.";
        }else if ($dtb >= 6.5 && $dtb <= 7.9) {
          echo "$dtb la diem kha";
        }else {
          echo "$dtb la diem gioi.";
        }
      }
    }else {
      echo "Diem da nhap khong hop le.";
    }
  ?>
</body>
</html>