<?php

class Link {

    private $url;
    private $txt;
    private $target;
    private $class;

    function Link($pUrl,$pTxt,$pTarget,$pClass){
        $this->url = $pUrl;
        $this->txt = $pTxt;
        $this->target = $pTarget;
        $this->class = $pClass;
    }

    function getLink(){
        echo'<a href="'.$this->url
            .'" target="'.$this->target
            .'" class="'.$this->class.'">
            '.$this->txt.'</a>';
        }

    function __toString(){
        echo'<a href="'.$this->url
            .'" target="'.$this->target
            .'" class="'.$this->class.'">
            '.$this->txt.'</a>';
        }

}