<?php
/**
 * @package View
 * @license MIT License
 * @link    http://denis909.spb.ru
 */
namespace denis909\view;

class Html
{

    public static function escape($string, $encoding = 'utf-8', $specialCharsFlags = null)
    {
        if (!$specialCharsFlags)
        {
            $specialCharsFlags = ENT_QUOTES | ENT_SUBSTITUTE;
        }

        return htmlspecialchars($string, $specialCharsFlags, $encoding);
    }

}