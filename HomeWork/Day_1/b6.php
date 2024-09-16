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
    <select name="pheptoan" id="">
      <option value="+">+</option>
      <option value="-">-</option>
      <option value="*">*</option>
      <option value="/">/</option>
    </select>
    <input type="submit" value="Xac nhan">
  </form>
  <?php
    if (isset($_POST['a'], $_POST['b'])) {
      $a = (float) $_POST['a'];
      $b = (float) $_POST['b'];
      $pt = $_POST['pheptoan'];
      switch ($pt) {
        case '+':
          echo "Ket qua =", $a + $b;
          break;
        case '-':
          echo "Ket qua =", $a - $b;
          break;
        case '*':
          echo "Ket qua =", $a * $b;
          break;
        case '/':
          if ($b != 0) {
            echo "Ket qua =", $a / $b;
          }else {
            echo "Loi, so bi chia phai khac 0.";
          }
          break;
      }
    }
  ?>
</body>
</html>