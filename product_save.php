<?php

include('inc/common.php');
if (!empty($_FILES['image']['name'])) {
    $file_extension = explode('.', $_FILES['image']['name']);
    $file_extension = array_pop($file_extension);
    $new_filename = md5(time()) . '.' . $file_extension;
//    echo '<pre>';
//    var_dump($new_filename);
//    exit;
    move_uploaded_file($_FILES['image']['tmp_name'], 'uploads/' . $new_filename);
}
$con = newDbConnection();

$sql = $con->prepare('
INSERT INTO product (
  name,
  description,
  price,
  picture,
  stock
) VALUES (?,?,?,?,?)');

$name = utf8_decode($_POST['name']);
$description = utf8_decode($_POST['description']);
$price = str_replace(',', '.', $_POST['price']);
$picture = isset($new_filename) ? $new_filename : '';
$stock = $_POST['stock'];
$sql->bind_param('ssdsi', $name, $description, $price, $picture, $stock);

if (!$sql->execute()) {
    dd($sql->error);
}

header('location:index.php?p=product-form&success=1');
