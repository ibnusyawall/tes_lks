<?php

    /** Compare 2 array
     * @param {Array} $array1
     * @param {Array} $array2
     */

     function compare_array($array1, $array2) {
         $result = array_diff($array1, $array2);
         return $result;
     }

     // array component
     $array1 = array("green", "red", "blue", "red");
     $array2 = array("green", "red", "yellow");

     // start compare
     print_r(compare_array($array1, $array2));

     /** output:
      * Array
      * (
      *     [2] => blue
      * )
    */

?>
