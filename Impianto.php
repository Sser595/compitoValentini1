<?php
include 'RilevatoreDiUmidita.php';
include 'RilevatoreDitemperatura.php';
class Impianto implements JsonSerializable{
    protected $nome;
    protected $longitudine;
    protected $latitudine;
    protected $rilevatori = [];
    public function __construct($nome, $latitudine, $longitudine){
        $this -> nome = $nome;
        $this ->latitudine = $latitudine;
        $this ->logintudine = $longitudine;
        $this ->rilevatori = array(new RilevatorediUmidita(1, "abc1", "%","terra"), new RilevatoreDiTemperatura(2, "abc2", "°C", "acqua"));
    }

    public function jsonSerialize() {
        $a =  [
            'nome'=>$this->nome,
            'latitudine'=>$this->latitudine,
            'longitudine'=>$this->longitudine,
        ];
        return $a;
    }

    public function getRUmidita(){
        $a = []; 
        foreach ($rilevatori as $i) {
            if ($i instanceof RilevatoreDiUmidita) {
                array_push($a, $i);
            }

        return $a;
    }
}
    public function getRUById($id){
        return getById($id);
    }

    public function getRTemp(){
        $a = []; 
        foreach ($rilevatori as $i) {
            if ($i instanceof RilevatoreDitemperatura) {
                array_push($a, $i);
            }

        return $a;
    }
}
}






?>