<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // h for 12 hour clock H 24 hour format 
    // sa is the seconds and pm or am
    // $hour = date('h:i:sa');
    $hour = date('h');

    // output the hour
    echo $hour;
    echo "<br>";
    // checking if the hour clock is less than 12
    if($hour < 12)
    {
        // output good morning
        echo "Good morning!";
    }
    else
    {   
        // out put good after if the hour is greater than 12
        echo 'Good Afternoon';
    }
    echo "<br>";
    $day = date("D");
    echo $day;
    echo "<br>";
    // giving a random number
    $numb = rand(1,24);
    echo "it is " . $numb . " ";

    // checks if the number is between 1 and 12 
    if ($numb >= 1 && $numb < 12)
    {
        echo "YOOOO GET UP ITS MORNING";
    }
    // less than 16
    elseif ($numb < 16)
    {
       echo "you are on time for lunch"; 
    }
    // less than 19
    elseif ($numb < 19)
    {
       echo "you are on time for Chaiii";
    }
    // it is above 19
    else
    {
        echo "its round the clock dinner time? ";
    }
    echo "<br>";


    // randomizing numbers between 1 and 100
    $magicNumber = rand(1,100);
    // if its a modulus of 3
    if ($magicNumber % 3 == 0 && $magicNumber % 5 != 0){
        // output the number
        echo  $magicNumber . " ";
        // output fizz
        echo "Fizz";
    }
        // modulus of 5
    elseif ($magicNumber % 5 == 0 && $magicNumber % 3 != 0){
        // output the number
        echo  $magicNumber . " ";
        // output Buzz
        echo "Buzz";
    }
    // modulus of 3 and  5
    elseif ($magicNumber % 3 == 0 && $magicNumber % 5 == 0){
        // output the number
        echo  $magicNumber . " ";
        // output FizzBuzz
        echo "FizzBuzz";
    }
    // Not a modulus of 3 and  5
    else{
        // output a string and the magicnumber
        echo  "Its the magic number "  .  $magicNumber;
    }
    ?>
</body>
</html>