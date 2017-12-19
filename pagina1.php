<!DOCTYPE html>
<html>
<head>
<style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

li {
    float: left;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover {
    background-color: #111;
}
</style>
</head>
<body>
<?php $dondeEstamos="pagina1.php"?>
<ul>
  <li><a class="<?php if ($dondeEstamos=="holapaco.php") {
    echo "active";
  }  ?>" href="holapaco.php">Hola Paco</a></li>

  <li><a class="<?php if ($dondeEstamos=="pagina1.php") {
    echo "active";
  }  ?> " href="pagina1.php">PAGINA 1</a></li>

  <li><a class="<?php if ($dondeEstamos=="pagina2.php") {
    echo "active";
  }  ?> " href="pagina2.php">PAGINA 2</a></li>

</ul>



</body>
</html>
