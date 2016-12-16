<?php

if (!function_exists('format')) {
    /**
     * Format the given string by replacing placeholders by the corresponding value
     *
     * @author Jérémy Derussé <jeremy@derusse.com>
     *
     * @param string $message
     * @param array  $replacements
     *
     * @return string
     */
    function format($message, array $replacements)
    {
        foreach ($replacements as $key => $value) {
            $replacements['{'.$key.'}'] = $value;
            unset($replacements[$key]);
        }

        return strtr($message, $replacements);
    }
}
