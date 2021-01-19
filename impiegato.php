<?php 

require_once('persona.php');

class Impiegato extends Persona {

    public $codice_impiegato;

    public function __construct($nome, $cognome, $codice_fiscale, $codice_impiegato){

        parent:: __construct($nome, $cognome, $codice_fiscale);
        
        if(!is_numeric($codice_impiegato)){

            throw new Exception('il codice impiegato non è un numero');
            
        }
        $this->codice_impiegato = $codice_impiegato;
        
    }

    public function to_string(){

        echo "Nome: ". $this->nome . "<br>" .
             "Cognome : ". $this->cognome . "<br>" .
             "Codice Fiscale: ". $this->codice_fiscale . "<br>" .
             "Codice Impiegato: ". $this->codice_impiegato . "<br>";
    }

}

?>