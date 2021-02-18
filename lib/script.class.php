  
<?php

class script {
    private $source;
    private $atributes;

    public function __construct($source, $atributes = []) {
        $this->source = $source;
        $this->atributes = $atributes;
    }

    public function __toString() {
        $script = '<script src="'.$this->source.'" ';

        foreach ($this->atributes as $atribute => $valor) {
            $script .= $atribute . '="' . $valor . '" ';
        }
        
        $script .= "></script>";

        return $script;
    }

}