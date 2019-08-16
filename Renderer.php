<?php
/**
 * @package View
 * @license MIT License
 * @link    http://denis909.spb.ru
 */
namespace denis909\view;

class Renderer
{

    use RenderFileTrait;

    public $viewPath;

    public function __construct($viewPath = null)
    {
        $this->viewPath = $viewPath;
    }

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