<?php
class RilevatoreDitemperatura extends Rilevatore{
    protected $tipologia;
    public function __construct($id , $codiceSeriale, $unitaDiMisura, $tipologia){

        parent::__construct($id, $codiceSeriale, $unitaDiMisura);
            $this->posizione = $posizione;
        

}
}

?>