<?php

if (!function_exists('cutWords')) {
    /**
     * Limit the number of words in a string.
     *
     * @param  string $value
     * @param  int $words
     * @param  string $end
     * @return string
     */
    function cutWords($value, $words = 100, $end = '...')
    {
        return \Illuminate\Support\Str::words($value, $words, $end);
    }
}

if (!function_exists('getCurrentUrl')) {

    /**
     * @param $url
     * @param bool $argument
     * @param bool $value
     * @return bool
     */
    function getCurrentUrl($url, $argument = false, $value = false)
    {
        if ($argument and \Route::current()->action['as'] == $url) {
            if ($argument == 'class') {
                echo 'class=' . $value;
            } else {
                echo 'style="' . $argument . ':' . $value . '"';
            }
        } else {
            return \Route::current()->action['as'] == $url;
        }
    }

}





