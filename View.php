<?php
/**
 * @package PHP Micro Framework
 * @license MIT License
 * @link    http://denis909.spb.ru
 */
namespace denis909\micro;

class View
{

    use RenderFileTrait;

    public $viewPath;

    public function getViewPath()
    {
        return $this->viewPath;
    }

    public function render($template, $params = [])
    {
        $filename = $this->getViewPath() . '/' . $template . '.php';

        return $this->renderFile($filename, $params);
    }

}