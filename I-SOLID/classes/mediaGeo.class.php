<?php 
require_once('media.class.php');

interface mediaGeometrica extends Media{

    public function getMediaGeo();
    
}

class mediaGeo {
    public function getMediaGeo():float {
        return sqrt($this->nota1 * $this->nota2);
    } 
}