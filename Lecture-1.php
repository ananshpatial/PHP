<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>arrays</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    <?php
    #-------------------------------array----------------------------------------------------------------------------
       $cars = array("Volvo", "BMW", "Toyota");
       echo "<pre>";
       #echo count($cars);
       echo "<br>".$cars[0]."<br>"; //accessing 0 index value of array 
       print_r($cars);
    #---------------------------associative array-------------------------------------------------------------------
       $std = array(
        'name' => 'anansh',
        'age' => 22,
       );
               echo "<br>".$std['name']."<br>";//accessing value of key name 
    #----------------------------------------------------------------------------------------------------------------
    $students = array(
        "MCA" => array(
            array(
            'name' => 'anansh',
            'age' => 22
            ),
            array(
            'name' => 'ayush',
            'age' => 22
            )
            ),
        "BCA" => array(
            array(
            'name' => 'ansh',
            'age' => 22
            ),
            array(
            'name' => 'aneesh',
            'age' => 22
            )
            )   
            );
            print_r($students);
            foreach ($students as $key => $value){  //
               # echo $key."<br>";
               foreach($value as $k => $val)
               {
              /*  echo "<pre>";
                print_r($val); */
                foreach($val as $ky => $v)
                {
                    echo "<br>".$v."<br>";
                }
               }
            }
        
    ?>
</body>
</html>
