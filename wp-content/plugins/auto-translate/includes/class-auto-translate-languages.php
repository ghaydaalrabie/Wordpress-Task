<?php

class Auto_Translate_Languages {

    public static function get_lang_country($lang_code, $i = 0) {
        global $languages_countries;
        return $languages_countries[$lang_code]['countries'][$i];
    }

    public static function get_lang_name($lang_code) {
        global $languages_countries;
        return $languages_countries[$lang_code]['lang_name'];
    }

    public static function get_country_code($lang_code, $i = 0) {
        $country = self::get_lang_country($lang_code, $i);
        return $country['country_code'];
    }

    public static function get_languages_data($lang_code_list) {
        $languages_data = array();
        foreach ($lang_code_list as $lang_code) {
            $languages_data[$lang_code] = array(
                'lang_name' => self::get_lang_name($lang_code),
                'lang_code' => $lang_code,
                'country_code' => self::get_country_code($lang_code)
            );
        }
        return $languages_data;
    }

}