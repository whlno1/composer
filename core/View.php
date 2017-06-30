<?php
namespace core;
class View
{
    protected $file;
    protected $vars = [];

    public function make($file) {
        $this->file = 'view/' . $file . '.html';
        return $this;
    }

    public function with($name,$value) {
        $this->vars = [ $name  => $value ];
        return $this;
    }

    public function __toString() {
        //分配到内存中
        extract($this->vars);
        include $this->file;
        return '';
    }
}