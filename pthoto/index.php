<?php

$images = [1 => '1.jpg', 2 => '2.jpg', 3 => '3.jpg'];

?>
<!doctype html>
<html lang="">
<head>
    <meta charset="UTF-8">
    <style>
      .photo img {
          border: 2px solid red;
          width: 300px;
      }

    </style>
    <title>Фото</title>
</head>
<body>
<h3>Фото</h3>


<?php foreach ($images as $number => $image) { ?>
    <div class="photo">
        <a href="/pthoto/image.php?file=<?php echo $number; ?>">Фото</a>
<img src="/img/<?php echo $image; ?>">
</div>
<?php } ?>




</body>
</html>
