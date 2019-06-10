
<?php

$array = [ 'one', 'two', 'three', 'four', 'five' ];

foreach( $array as $value ){
    if( $value == '55555' ){
        echo "Number three was found!";
        break;
    }else{
        echo "!!!!!";
    }
}

?>