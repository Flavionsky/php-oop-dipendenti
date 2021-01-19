<?php

require_once('persona.php');
require_once('impiegato.php');

trait Progetto {
    
    public $nome_progetto;
    public $commissione;

}

class ImpiegatoSuCommissione extends Impiegato {
    
    use Progetto;
    
    public function __construct($nome, $cognome, $codice_fiscale, $codice_impiegato, $nome_progetto, $commissione){
        
        parent:: __construct($nome, $cognome, $codice_fiscale, $codice_impiegato);

        if(!is_string($nome_progetto)){

            throw new Exception('il nome progetto non è una stringa');
            
        }elseif(!is_numeric($commissione)){

            throw new Exception('la commissione non è un numero');
            
        }

        $this->nome_progetto= $nome_progetto;
        $this->commissione= $commissione;
        
    }

    public function calcola_compenso(){
        return $this->commissione;

    }
    public function to_string(){

        echo "Nome: ". $this->nome . "<br>" .
             "Cognome : ". $this->cognome . "<br>" .
             "Codice Fiscale: ". $this->codice_fiscale . "<br>" .
             "Codice Impiegato: ". $this->codice_impiegato . "<br>".
             "Compenso: ". $this->calcola_compenso()."€"."<br>";
    }

}

?>