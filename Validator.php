<?php
class Validator
{
    public static function string($value, $min = 1, $max = INF)
    {
        $values = strlen(trim($value));
        return $values >= $min && $values <= $max;
    }

    public static function integer($value) {
        $value = is_numeric($value);
        return $value;
    }
}
