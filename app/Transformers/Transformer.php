<?php

namespace App\Transformers;

class Transformer {

    /**
     * Turns the model or array into an array with camel casing.
     *
     * @param $item
     * @return array
     */
    public static function transform($item)
    {
        if (!is_array($item)) {
            $item = $item->toArray();
        }
        $renamed = [];
        foreach($item as $key => $value){
            if (is_array($value)) {
                $renamed[camel_case($key)] = self::transform($value);
            } else {
                $renamed[camel_case($key)] = $value;
            }
        }
        return $renamed;
    }

    public static function array_insert_before($key, array &$array, $new_key, $new_value) {
        if (array_key_exists($key, $array)) {
            $new = array();
            foreach ($array as $k => $value) {
                if ($k === $key) {
                    $new[$new_key] = $new_value;
                }
                $new[$k] = $value;
            }
            return $new;
        }
        return false;
    }

}