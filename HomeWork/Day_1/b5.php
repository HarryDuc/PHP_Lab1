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
  $songuyen = null;
  if (isset($_POST['a'], $_POST['b'], $_POST['c'])) {
    $a = $_POST['a'];
    $b = $_POST['b'];
    $c = $_POST['c'];
    if ($a == $b && $b == $c) {
      echo "Day la tam giac deu.";
    }else if ($a == $b || $b == $c || $a == $c) {
      echo "Day la tam giac can";
    }
    else if ($a <= 0 || $b <= 0 || $c <= 0) {
      echo "Tam giac khong co canh bang 0 va nho hon 0.";
    }
    else {
      echo "Day la tam giac thuong.";
    }
  }
  ?>
</body>

</html>