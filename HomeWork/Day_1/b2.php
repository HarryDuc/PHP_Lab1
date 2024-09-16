<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <form action="" method="post">
  <input type="number" name="namnhuan" id="">
  <input type="submit" value="Xac nhan">
  </form>

  <?php
    if (isset($_POST['namnhuan'])) {
      if (ctype_digit($_POST['namnhuan'])) { //kiem tra dau vao co phai so hay khong
        $namnhuan = (int) $_POST['namnhuan'];
        if ($namnhuan % 4 == 0 && $namnhuan % 100 == 0 && $namnhuan % 400 == 0) {
          echo "$namnhuan la nam nhuan.";
        }else {
          echo "$namnhuan khong phai la nam nhuan.";
        }
      }
    }
  ?>
</body>

</html>