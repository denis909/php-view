<?php
/**
 * @package PHP Micro Framework
 * @license MIT License
 * @link    http://denis909.spb.ru
 */
namespace denis909\micro;

use Exception;

trait RenderFileTrait
{

    public function renderFile($filename, array $params = [])
    {
        if (!is_file($filename))
        {
            throw new Exception('File not found: ' . $filename);
        }

        extract($params);

        ob_start();

        include($filename);

        $return = ob_get_contents();

        ob_end_clean();

        return $return;
    }

}