<?php 
require_once('media.class.php');

interface MediaAritmetica extends Media{

    public function getMediaAri();

}

class MediaAri{

    public function getMediaAri():float {
        return ($this->nota1 + $this->nota2) / 2;
    }
}