<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="" method="post">
    <input type="number" name="dtb" min="4" floatval>
    <input type="submit" value="Xac nhan">
  </form>
  <?php
    if (isset($_POST['dtb'])) {
        $dtb = (float)$_POST['dtb'];
        if ($dtb <= 50) {
          $dtb = $dtb * 1500;
        }else if ($dtb <= 100) {
          $dtb = (1500 * 50) + (($dtb - 50) * 2000);
        }else if ($dtb <= 200) {
          $dtb = (50*1500) + (50 * 2000) + (($dtb - 100) * 2500);
        }else if ($dtb > 200) {
          $dtb = (50 * 1500) + (50 * 2000) + (100 * 2500) + (($dtb - 200) * 3000);
        }
        echo "$dtb la so tien dien phai tra.";
    }
  ?>
</body>
</html>