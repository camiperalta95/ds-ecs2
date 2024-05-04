<?php


if(isset($_GET['year1'])&& isset($_GET['year2'])&&isset($_GET['year3'])&&isset($_GET['year4'])&& isset($_GET['year5'])){
    $mensajeMuroBerlin = 'Los años menores al año de la caída del muro de Berlín son; ';
    if (isset($_GET['year1']) <= 1989) {
        $mensajeMuroBerlin = $mensajeMuroBerlin . ', '. $_GET['year1'];
    }
    if (isset($_GET['year2']) <= 1989) {
        $mensajeMuroBerlin = $mensajeMuroBerlin . ', '. $_GET['year2'];
    }
    if (isset($_GET['year3']) <= 1989) {
        $mensajeMuroBerlin = $mensajeMuroBerlin . ', '. $_GET['year3'];
    }
    if (isset($_GET['year4']) <= 1989) {
        $mensajeMuroBerlin = $mensajeMuroBerlin . ', '. $_GET['year4'];
    }
    
    if (isset($_GET['year5']) <=1989) {
        $mensajeMuroBerlin = $mensajeMuroBerlin . ', '. $_GET['year5'];
    }
    
}
else {
    echo  'Debe indicar todos los años, del 1 al 5';
}




















  

            

