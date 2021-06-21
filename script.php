<?php
    $enable = 21;
    $in1 = 20;
    $in2 = 16;

    system("gpio -g mode $enable out");
    system("gpio -g mode $in1 out");
    system("gpio -g mode $in2 out");
    system("gpio -g write $enable 0");
    
    if($_POST['executer'] == 'ON')
    {
        system("gpio -g write $enable 0");
        system("gpio -g write $in1 1");
        system("gpio -g write $in2 0");
        system("gpio -g write $enable 1");
    }
    else 
    {
        system("gpio -g write $enable 0");
        system("gpio -g write $in1 0");
        system("gpio -g write $in2 1");
        system("gpio -g write $enable 1");
    }
// var_dump($_REQUEST)
 header('Location: index.php');
    
?>
