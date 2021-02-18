<?php

    class body {

        private $array_tags = array();

        public function arrayElements($array) {
            $this->array_tags[] = $array;
        }

        public function __toString() {

            $body = '<body class="">';

            foreach ($this->array_tags as $tags) {
                $body .= $tags;
            }
            
            $body .= "</body>";

            return $body;
        }
    }