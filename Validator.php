<?php

class Validator {
    public static function string($value, $min = 1, $max = INF) {
        $value = trim($value);

        return  is_string($value)
                && strlen($value) >= $min
                && strlen($value) <= $max;
    }

    public static function number($value, $min = 1, $max = INF) {
        $value = trim($value);

        return  is_numeric($value)
                && $value >= $min
                && $value <= $max;
    }
}

?>

<!--
    static function - nevajag izveidot jaunu mainīgo or smt, izmantojot Validator var uzreiz izsaukt funkciju (pats jau ir klase, takā to nevajag)
    parasts function - vajag veidot klasi un mainīgo(myb)
-->