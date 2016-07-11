<?php
$images = ['1.jpg', '2.jpg', '3.jpg'];

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


<?php foreach ($images as $image) { ?>
    <div class="photo">
        <a href="/pthoto/image.php?file=<?php echo $image; ?>">Фото</a>
<img src="/img/<?php echo $image; ?>">
</div>
<?php } ?>




</body>
</html>
