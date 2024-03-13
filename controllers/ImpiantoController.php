<?php
    use Psr\Http\Message\ResponseInterface as Response;
    use Psr\Http\Message\ServerRequestInterface as Request;
    require_once('Impianto.php');
    require_once("Rilevatore.php");
    class ImpiantoController {

    public function lista(Request $request, Response $response, array $args) {
        $impianto = new Impianto("impianto", 120, 130);
    
        $response->getBody()->write(json_encode($impianto));
        return $response->withHeader('Content-Type', 'application/json');
    }

    public function rilevatoriUmidita(){
        $impianto = new Impianto('impianto', 120,130);
        $response->getBody()->write(json_encode($impianto->getRUmidita()));
        return $response->withHeader('Content-Type','application/json');
    }
    public function getRilUmById(Request $request, Response $response, array $args) {
        $impianto = new Impianto('impianto', 120,130);
        $Ril = $impianto->getRUById(($args["identificativo"]));
        if (is_null($Ril)) {
            $response->getBody()->write("Errore");
            return $response->withStatus(400);  
        } else {
            $response->getBody()->write(json_encode($Ril, JSON_PRETTY_PRINT));
            return $response->withHeader("Content-Type", "application/json");
        }
    }
    
    public function createRilUm(Request $request, Response $response, array $args){
        $body = $request -> getBody()->getContents();
        $parsedBody = json_decode($body, true);
        $nome =$parsedBody['nome'];
        $latitudine =$parsedBody['latitudine'];
        $longitudine =$parsedBody['longitudine'];
        $ril= new RilevatoreDiUmidita($nome, $latitudine, $longitudine);
        $response ->getBody()-> write(json_encode($ril));
        return $response->withHeader('Content-type', 'application/json')->withStatus(201);
    }
    public function rilevatoriTemperatura(){
        $impianto = new Impianto('impianto', 120,130);
        $response->getBody()->write(json_encode($impianto->getRTemp()));
        return $response->withHeader('Content-Type','application/json');
    }
}
