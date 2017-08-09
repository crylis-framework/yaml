<?php
/**
 *
 * Copyright (c), all rights reserved GlacialS.
 * Project started in 2017.
 * Crylis Framework for Php.
 *
 */
namespace Crylis\Yaml\Parser;


class YamlParser
{
    private $_file;

    public function __construct($file){

    }

    public function parse(){
        echo "dd";
    }

    private function _parse(){

    }

    private function _controlfile(){
        if (file_exists($this->_file)){
            if ($this->_controlsyntax()){
                return true;
            }
            return false;
        }
        return false;
    }

    private function _controlsyntax(){
        return true;
    }

}