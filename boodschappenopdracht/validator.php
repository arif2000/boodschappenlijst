<?php
class Validator {
    public static function string($value, $min = 1, $max = INF)
    {
        $value = trim($value);
        return strlen($value) > $min && strlen($value) < $max;
    }

    public static function integer($value, $min = 1, $max = INF)
    {
        $value = trim($value);
        return strlen($value) > $min && strlen($value) < $max;
    }

    public static function decimal($value, $min = 1, $max = INF)
    {
        $value = trim($value);
        return strlen($value) > $min && strlen($value) < $max;
    }
}
?>