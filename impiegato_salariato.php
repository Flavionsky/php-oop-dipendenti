<?php

require_once('persona.php');
require_once('impiegato.php');

class ImpiegatoSalariato extends Impiegato {

    public $giorni_lavorati;
    public $compenso_giornaliero;
    
    public function __construct($nome, $cognome, $codice_fiscale, $codice_impiegato, $giorni_lavorati, $compenso_giornaliero){
        
        parent:: __construct($nome, $cognome, $codice_fiscale, $codice_impiegato);

        if(!is_numeric($giorni_lavorati)){

            throw new Exception('ore lavorate non è un valore numerico');

        } elseif(!is_numeric($compenso_giornaliero)){

            throw new Exception('il compenso orario non è un valore numerico');
            
        }

        $this->giorni_lavorati = $giorni_lavorati;
        $this->compenso_giornaliero = $compenso_giornaliero;
        
    }
    public function calcola_compenso(){
        return $this->giorni_lavorati * $this->compenso_giornaliero;
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