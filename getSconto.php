<?php
trait GetSconto {
    public $sconto;

    public function setSconto($age) {
        if($age > 70){
            $this->sconto = 30;
        } else if( $age < 15){
            $this->sconto = 15;
        }
    }
    
    public function getSconto() {
        return $this->sconto;
    }
}