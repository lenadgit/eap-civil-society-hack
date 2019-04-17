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
        return \Illuminate\Support\Str::words(strip_tags($value), $words, $end);
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

if (! function_exists('reading_time')) {
    function reading_time($text)
    {
        if (! $text) {
            return null;
        }
        $words = str_word_count(strip_tags($text));
        $minutes = floor($words / 120);
        $seconds = floor($words % 120 / (120 / 60));

        if (1 <= $minutes) {
            $estimated_time = $minutes . ' min' . ($minutes == 1 ? '' : 's');
            //. ', ' . $seconds . ' sec' . ($seconds == 1 ? '' : 's')
        } else {
            $estimated_time = $seconds . ' sec' . ($seconds == 1 ? '' : 's');
        }

        return $estimated_time;
    }
}





