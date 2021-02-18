<?php

    class html {

        private $lang;
        private $array_tags = array();

        public function __construct($lang) {
            $this->lang = $lang;
        }

        public function arrayElements($array) {
            $this->array_tags[] = $array;
        }

        public function __toString() {

            $html = '</doctype html>';
            $html = '<html lang="'.$this->lang.'">';

            foreach ($this->array_tags as $tags) {
                $html .= $tags;
            }
        
            $html .= "</html>";

            return $html;
        }
    }