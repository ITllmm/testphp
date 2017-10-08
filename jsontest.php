<?php

    /*json_decode  json_encode*/

    $json =  '{"a":1,"b":2,"c":3,"d":4,"e":5}';
    var_dump(json_decode($json));
    echo '<br/>';
    var_dump(json_decode($json,true));

    echo '<hr/>';

    $data='[
    {"Name":"a1","Number":"111","Contno1":"000","QQNo":""},
    {"Name":"a2","Number":"222","Contno2":"000","QQNo":""},
    {"Name":"a3","Number":"333","Contno3":"000","QQNo":""}
    ]';
    var_dump( json_decode( $data ) );
    echo '<br/>';
    $transtData = json_decode( $data );
    $someData = $transtData [1]->Name;
    echo 'someData:'.$someData;

    echo '<hr/>';
    $arr = array( ['name' => '11','sex' => 'm'],['name' => '22','sex'=>'w']);
    var_dump($arr);
    echo '<br/>';
    var_dump(json_encode($arr));// "[{"name":"11","sex":"m"},{"name":"22","sex":"w"}]"


