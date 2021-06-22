<?php
    $timing =1;

    $arosage = array(
        array(17 , 27 , 22),
        array(21 , 20 , 16),
        array(10 , 9 , 11),
        array(12  ,5 , 6  ),
        array(13 , 19 , 26),
    );

    if($_REQUEST['voie']) $voie= (int)$_REQUEST['voie'] - 1  ;
    
    foreach($arosage as $voie_temp ){
        foreach($voie_temp as $sortie){
            system("gpio -g mode $sortie out");
            system("gpio -g write $sortie 0");
        }
    }

    // system("gpio -g mode $enable out");
    // system("gpio -g mode $in1 out");
    // system("gpio -g mode $in2 out");
    // system("gpio -g write $enable 0");
    
    if ( isset($_REQUEST['sens'])  && isset($arosage[$voie]) ) 
    {
        echo 'daljpc  jpc  ';
        $enable = $arosage[$voie][0];
        $in1= $arosage[$voie][1];
        $in2 = $arosage[$voie][2];

       if($_REQUEST['sens'] =='true') {
        system("gpio -g write $enable 0");
        system("gpio -g write $in1 1");
        system("gpio -g write $in2 0");
        system("gpio -g write $enable 1");
        sleep($timing);
        system("gpio -g write $enable 0");
        system("gpio -g write $in1 0");


       }

        else {
            system("gpio -g write $enable 0");
            system("gpio -g write $in1 0");
            system("gpio -g write $in2 1");
            system("gpio -g write $enable 1");
            sleep($timing);
            system("gpio -g write $enable 0");
            system("gpio -g write $in2 0");


        }

    }

 var_dump($_REQUEST);

//  var_dump($_REQUEST);
//  sleep(10);
//  header('Location: index.php');
    
?>
