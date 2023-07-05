<?php

if (! function_exists('digits')) {
    function digits($string)
    {
        if (is_null($string)) {
            return null;
        }
        $result = trim(
            preg_replace('/[^0-9]/', '', $string)
        );

        return $result === '' ? null : $result;
    }
}


if (! function_exists('nullstr')) {
    function nullstr($string)
    {
        if (is_null($string)) {
            return null;
        }

        return trim($string) === '' ? null : $string;
    }
}


if (!function_exists('secondsToDuration')) {
    function secondsToDuration(int $duration): string
    {
        return sprintf(
            '%02d:%02d:%02d',
            $duration / 3600,
            ($duration % 3600) / 60,
            ($duration % 3600) % 60
        );
    }
}


if (!function_exists('humanBytes')) {
    function humanBytes(int $bytes)
    {
        $size   = ['B','kB','MB','GB','TB','PB','EB','ZB','YB'];
        $factor = floor((strlen($bytes) - 1) / 3);

        return sprintf("%.2F", $bytes / pow(1024, $factor)) . @$size[$factor];
    }
}


if (! function_exists('percentage')) {
    function percentage($value, $total)
    {
        if ($total == 0) {
            return 0;
        }

        if ($total !== null && $total !== 0) {
            return round(($value / $total) * 100, 2);
        }

        return 0;
    }
}
