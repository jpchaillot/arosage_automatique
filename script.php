<?php
    $enable = 21;
    $in1 = 20;
    $in2 = 16;

    $arosage = array(
        array(21 , 20 , 16),
        array(17 , 27 , 22),
        array(10 , 9 , 11),
        array(5 , 6 , 12),
        array(13 , 19 , 26),
    );

    foreach($arosage as $voie ){
        foreach($voie as $sortie){
            system("gpio -g mode $sortie out");
            system("gpio -g write $sortie 0");
        }
    }

    // system("gpio -g mode $enable out");
    // system("gpio -g mode $in1 out");
    // system("gpio -g mode $in2 out");
    // system("gpio -g write $enable 0");
    
    if ($_REQUEST['voie'] && isset($_REQUEST['sens'])  && isset($arosage[(int)$_REQUEST['voie']]) ) 
    {
        $enable = $arosage[(int)$_REQUEST['voie']][0];
        $in1= $arosage[(int)$_REQUEST['voie']][1];
        $in2 = $arosage[(int)$_REQUEST['voie']][2];

       if($_REQUEST['sens'=='1']) {
        system("gpio -g write $enable 0");
        system("gpio -g write $in1 1");
        system("gpio -g write $in2 0");
        system("gpio -g write $enable 1");
        sleep(1);
        system("gpio -g write $enable 0");

       }

        else {
            system("gpio -g write $enable 0");
            system("gpio -g write $in1 0");
            system("gpio -g write $in2 1");
            system("gpio -g write $enable 1");
            sleep(1);
            system("gpio -g write $enable 0");

        }

    }


//  var_dump($_REQUEST);
//  sleep(10);
//  header('Location: index.php');
    
?>
