<?php
    class Rilevatore implements JsonSerializable{
        protected $id;
        protected $misurazioni = [];
        protected $unitaDiMisura;
        protected $codiceSeriale;
        public function __construct($id, $codiceSeriale, $unitaDiMisura, $misurazioni=[]){
            $this->id = $id;
            $this->codiceSeriale = $codiceSeriale;
            $this->unitaDiMisura = $unitaDiMisura;
            $this->misurazioni = $misurazioni; 
        }

        public function aggiungiMisurazione($data, $valore){
            $this->misurazione[$data]= $valore;
            return $misurazione;
        } 
        public function jsonSerialize() {
            $a =  [
                'id'=>$this->id,
                'codice'=>$this->codiceSeriale,
                'unità'=>$this->unitaDiMisura,
                'misurazioni'=>$this->misurazioni
            ];
            return $a;
        }

    }


?>