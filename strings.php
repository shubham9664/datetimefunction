<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <title>PHP Strings</title>
</head>

<body>
    <div class="container mt-4">
        <?php
        // $name = 'shubham sahu';
        // $newArray = ucwords($name);
        // echo $newArray;

        $str = "Hello World";
        $newString = convert_uuencode($str);
        echo  $newString;

         ?>
    </div>
</body>

</html>