<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <title>PHP Time Functions</title>
</head>

<body>
    <div class="container mt-4">
        <?php
        // this is for hours
        echo 'Hour is '. date('h') . '<br>';
        echo 'Hour is '. date('H') . '<br>';
        echo 'Hour is '. date('g') . '<br>';
        echo 'Hour is '. date('G') . '<br>';
        
        // this is for minutes
        echo 'Minute is '. date('i') . '<br>';
        
        // this is for seconds
        echo 'Sec is '. date('s') . '<br>';
        
        // this is for meridiem
        echo 'Meridiem is '. date('a') . '<br>';
        echo 'Meridiem is '. date('A') . '<br>';
        
        // this is totle for time
        echo 'this is totle for time '. date('h:i:sa e') . '<br>';
        echo 'this is totle for time '. date('d-m-Y h:i:sa e') . '<br>';
        echo  date_default_timezone_set('Asia/Kolkata');
        echo 'this is totle for time '. date('d-m-Y h:i:sa e') . '<br>';

        // maketime date
        echo 'Time & Date'. date('d-m-Y h:i:sa e') . '<br>';
        echo date("l", mktime(0,0,0,6, 14, 1999));
        echo date(" d-m-Y ", mktime(0,0,0,6, 14, 1999));
        
        //  date_create
        $date = date_create("2023-03-15 22:25:00", timezone_open("Asia/kolkata"));
        echo date_format($date, "d/m/Y H:i:s");
        
        echo checkdate(2,29,1999);
        $date1 = date_create("1999-06-14");
        $date2 = date_create("2000-09-20");
         
        $diffrent = date_diff($date1, $date2);
        echo  $diffrent->days;
        echo '<pre>';
        print_r($diffrent);
      

        ?>
    </div>
</body>

</html>
