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
        if (is_array($url)) {
            $ifMatched = in_array(\Route::current()->action['as'], $url);
        } else {
            $ifMatched = \Route::current()->action['as'] == $url;
        }

        if ($argument and $ifMatched) {
            if ($argument == 'class') {
                echo 'class="' . $value . '"';
            } else {
                echo 'style="' . $argument . ':' . $value . '"';
            }
        }

        return $ifMatched;
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

if (! function_exists('removeHttp')) {
    function removeHttp($url)
    {
        $disallowed = ['http://', 'https://', 'http:/', 'htpp://', 'https:/', 'htp://', 'htps://', 'htpp://', 'htpps://'];
        foreach ($disallowed as $d) {
            if (strpos($url, $d) === 0) {
                return str_replace($d, '', $url);
            }
        }

        return $url;
    }
}

if (! function_exists('getDomain')) {
    function getDomain($url)
    {
        $pieces = parse_url('http://' . removeHttp($url));
        $domain = isset($pieces['host']) ? $pieces['host'] : '';

        if (preg_match('/(?P<domain>[a-z0-9][a-z0-9\-]{1,63}\.[a-z\.]{2,6})$/i', $domain, $regs)) {
            return $regs['domain'];
        }

        return false;
    }
}




