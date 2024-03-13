<?php
include 'Rilevatore.php';
class RilevatoreDiUmidita extends Rilevatore{
    protected $posizione;
    public function __construct($id , $codiceSeriale, $unitaDiMisura, $posizione){

        parent::__construct($id, $codiceSeriale, $unitaDiMisura);
        $this->posizione = $posizione;
        

    }

    public function getById($id){
        $a=[
            'id' => $this->id,
            'codice seriale' => $this->codiceSeriale,
            'unita di misura' => $this->unitaDiMisura,
            'posizione' => $this->posizione
        ];
        return $a;
    }
}

