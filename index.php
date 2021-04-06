require('User');

$user1 = new User('1','Pippo', '70', 'pippo@email.com');
$user1->setSconto(70);


$user2 = new User('2','Pluto', '25', 'pippo@email.com');
$user2->setSconto(25);


$users = [$user1,$user2];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>OOP 2</title>
</head>
<body>

    <?php 
        dd($user1);

    ?> 
    }
    

</body>
</html>