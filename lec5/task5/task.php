<?php
var_dump($_POST);
var_dump($_FILES);

$myimage = $_FILES['myimage'];
$ext = ['jpg', 'png', 'jpeg'];

$tmp_name = $myimage['tmp_name'];
$img_size = $myimage['size'];
$img_error = $myimage['error'];
$imgname =uniqid(). $myimage['name'];
$explode = explode('.', $imgname);//array
$end_of = end($explode);
$final_ext = strtolower($end_of);

if (isset($myimage)) {
    if ($img_error !=4) {
        if ($img_size < 2097152) {
            if (in_array($final_ext,$ext)) {
                move_uploaded_file($tmp_name, 'uploads/profileimage/'.$imgname);
            }else {
                echo 'please upload photos with ext jpg or png or jpeg';
            }
        } else {
            echo "size errorr";}
    } else {
        echo " choose filllle";}
}




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="myimage" id="">
        <button>upload</button>

    </form>
</body>
</html>