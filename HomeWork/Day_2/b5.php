<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="" method="post">
    <input type="number" name="a" min="0" max="9" step="1">
    <input type="submit" value="In ra bang cuu chuong">
  </form>
  <?php
    if(isset($_POST['a'])) {
      $a = $_POST['a'];
      for ($i=1; $i <= 10; $i++) {
        $kq = $i * $a;
        echo "$i x $a = $kq";
        echo '<br>';
      }

      do {
        if ($a > 0 && $a <= 10) {
          $flag = true;
          for ($i=0; $i <= 10; $i++) {
            $kq = $i * $a;
            echo "$i x $a = $kq";
            echo '<br>';
          }
        }else {
          $flag = false;
          echo "Nhap sai vui long nhap lai.";
          break;
        }
      }while (!$flag);
    }
  ?>
</body>
</html>