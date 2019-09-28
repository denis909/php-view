<?php

namespace denis909\view;

use Exception;

class Config
{

    public $templatesPath;

    public function __construct()
    {
        if (!$this->templatesPath)
        {
            throw new Exception('Property: ' . get_called_class() . '::$templatesPath is required.');
        }
    }

}