<?php
/**
 * @author denis909
 * @license MIT
 */
namespace denis909\view;

abstract class Renderer
{

    use RenderFileTrait;

    protected $_config;

    public function __construct(Config $config)
    {
        $this->_config = $config;
    }

    public function getTemplatesPath()
    {
        return $this->_config->templatesPath;
    }

    public function render($template, $params = [])
    {
        $filename = $this->getTemplatesPath() . '/' . $template . '.php';

        return $this->renderFile($filename, $params);
    }

}