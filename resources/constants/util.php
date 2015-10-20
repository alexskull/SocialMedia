<?php

class Util {
    static function string_format() {
        $args = func_get_args();
        if (count($args) == 0) {
            return;
        }
        if (count($args) == 1) {
            return $args[0];
        }
        $str = array_shift($args);
        $str = preg_replace_callback('/\\{(0|[1-9]\\d*)\\}/', create_function('$match', '$args = '.var_export($args, true).'; return isset($args[$match[1]]) ? $args[$match[1]] : $match[0];'), $str);
        return $str;
    }
    static function to_object($array) {
        if (!is_array($array)) {
            return $array;
        }

        $object = new stdClass();
        if (is_array($array) && count($array) > 0) {
            foreach ($array as $name=>$value) {
                $name = strtolower(trim($name));
                if (isset($name)) {
                    $object->$name = Utilitario::to_object($value);
                }
            }
            return $object;
        }
        else {
            return FALSE;
        }
    }
}