<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="" method="post">
    <input type="number" name="a">
    <input type="number" name="b">
    <input type="number" name="c">
    <input type="submit" value="Xac nhan">
  </form>
  <?php
    if (isset($_POST['a'], $_POST['b'], $_POST['c'])) {
      $a = $_POST['a'];
      $b = $_POST['b'];
      $c = $_POST['c'];
      $delta = ($b * $b) - (4 * $a * $c);
      if ($delta == 0) {
        echo 'Phuong trinh co nghiem kep x1 = x2 = ', ((-$b)/($a * 2));
      }else {
        if ($delta < 0) {
          echo 'Phuong trinh vo nghiem.';
        }else {
          echo'Phuong trinh co 2 nghiem phan biet la x1 = ', (((-$b + sqrt($delta))/($a * 2))), '   ', 'x2 = ', (((-$b - sqrt($delta))/($a * 2)));
        }
      }
  }

  ?>
</body>
</html>