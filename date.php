<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <title>PHP Date Functions</title>
</head>

<body>
    <div class="container mt-4">
        <?php
        // this is all date function
        echo 'Today is '. date('d') . '<br>';
        echo 'Today is '. date('jS') . '<br>';
        echo 'Month is '. date('F') . '<br>';
        echo 'Month is '. date('m') . '<br>';
        echo 'Month is '. date('n') . '<br>';
        echo 'Month is '. date('M') . '<br>';
        
        // this is all year function
        echo 'Full date is '. date('d/m/Y') . '<br>';
        echo 'Full date is '. date('d-m-Y') . '<br>';
        echo 'Full date is '. date('Y-d-m') . '<br>';
        echo 'Full date is '. date('Y-d-M') . '<br>';
        echo 'Full date is '. date('Y-dS-F') . '<br>';
        
        // this is all week function
        echo 'Week day is '. date('D') . '<br>';
        echo 'Week day is '. date('l') . '<br>';
        echo 'Week day is '. date('N') . '<br>';
        echo 'Week day is '. date('w') . '<br>';
        // this is year days count
        echo 'Day is in year calculation '. date('z') . '<br>';
        
        // this is week days count
        echo 'Week is in year calculation '. date('W') . '<br>';

        // this is numbers of the month
        echo 'This is numbers of the month '. date('t') . '<br>';
        
        // is this a leap year?
        echo 'Is this a leap year? '. date('L') . '<br>';
        ?>
    </div>
</body>

</html>