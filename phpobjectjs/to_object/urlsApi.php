<?php

function urlsApi() {
    //Especial Actions
    $new = 'new';
    $del = 'del';
    $set = 'set';
    $get = 'get';
    $snd = "send";
    $add = "add";
    $max = "max";

    //$gdl = 'gdl';
    //$cty = 'country';

    $drv = 'testdrive';
    $fin = 'financiamiento';
    //$srv = "servicio";
    //$rep = "refacciones";
    $cnt = "contacto";

    //Root Api url
    $root = 'api/v1';

    return array(
        // ADD MAX
        //'add_max' => "$root/$add/$max",

        // SEND SERVICES
        //'snd_srv' => "$root/$snd/$srv",

        // SEND REPAIRS
        //'snd_rep' => "$root/$snd/$rep",

        // SEND CONTACT
        'snd_con' => "$root/$snd/$cnt",

        // SEND FINANCING
        'snd_fin' => "$root/$snd/$fin",

        // SEND TESTDRIVE
        'snd_drv' => "$root/$snd/$drv"
    );
}
