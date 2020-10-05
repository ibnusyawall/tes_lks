<?php
    /** Remove Duplicate Array
     *  $data {Array} data array
     *  $unik {Function} sort unique array
     */
    $data = array(
        1, 2, 2, 3, 1, '3'
    );

    $unik = array_unique($data);

    print_r($unik);
?>
