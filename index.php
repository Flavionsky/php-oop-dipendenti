<?php
	class Persona {

		public $nome;
        public $cognome;
        public $codice_fiscale;

        public function __construct($nome, $cognome, $codice_fiscale){

			$this->nome = $nome;
            $this->cognome = $cognome;
            $this->codice_fiscale = $codice_fiscale;
            
        }
        
        public function to_string(){
            echo "Nome: ". $this->nome . "<br>" .
                 "Cognome : ". $this->cognome . "<br>" .
                 "Codice Fiscale: ". $this->codice_fiscale . "<br>";
        }

    }
    
$persona1 = new Persona('Giuseppe','Rossi', 'GSPRSS1050VS501Z');

$persona1->to_string();

class Impiegato extends Persona {

    public $codice_impiegato;

    public function __construct($nome, $cognome, $codice_fiscale, $codice_impiegato){

        parent:: __construct($nome, $cognome, $codice_fiscale);
        $this->codice_impiegato = $codice_impiegato;
        
    }

    public function to_string(){

        echo "Nome: ". $this->nome . "<br>" .
             "Cognome : ". $this->cognome . "<br>" .
             "Codice Fiscale: ". $this->codice_fiscale . "<br>" .
             "Codice Impiegato: ". $this->codice_impiegato . "<br>";
    }

}

$impiegato1 = new Impiegato('Giulia','Verdi', 'GSPVRD1050VS501Z','54321');

$impiegato1->to_string();


class ImpiegatoSalariato extends Impiegato {

    public $giorni_lavorati;
    public $compenso_giornaliero;
    
    public function __construct($nome, $cognome, $codice_fiscale, $codice_impiegato, $giorni_lavorati, $compenso_giornaliero){
        
        parent:: __construct($nome, $cognome, $codice_fiscale, $codice_impiegato);

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

$impiegatoSalariato1 = new ImpiegatoSalariato('Giulia','Verdi', 'GSPVRD1050VS501Z','54321',10, 10);

$impiegatoSalariato1->to_string();

class ImpiegatoAOre extends Impiegato {

    public $ore_lavorate;
    public $compenso_orario;
    
    public function __construct($nome, $cognome, $codice_fiscale, $codice_impiegato, $ore_lavorate, $compenso_orario){
        
        parent:: __construct($nome, $cognome, $codice_fiscale, $codice_impiegato);

        $this->ore_lavorate = $ore_lavorate;
        $this->compenso_orario = $compenso_orario;
        
    }
    public function calcola_compenso(){
        return $this->ore_lavorate * $this->compenso_orario;
    }
    public function to_string(){

        echo "Nome: ". $this->nome . "<br>" .
             "Cognome : ". $this->cognome . "<br>" .
             "Codice Fiscale: ". $this->codice_fiscale . "<br>" .
             "Codice Impiegato: ". $this->codice_impiegato . "<br>".
             "Compenso: ". $this->calcola_compenso()."€"."<br>";
    }

}

$impiegatoAOre1 = new ImpiegatoAOre('Giulia','Verdi', 'GSPVRD1050VS501Z','54321',20, 10);

$impiegatoAOre1->to_string();

trait Progetto {
    
    public $nome_progetto;
    public $commissione;

}

class ImpiegatoSuCommissione extends Impiegato {
    
    use Progetto;
    
    public function __construct($nome, $cognome, $codice_fiscale, $codice_impiegato, $nome_progetto, $commissione){
        
        parent:: __construct($nome, $cognome, $codice_fiscale, $codice_impiegato);

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

$ImpiegatoSuCommissione1 = new ImpiegatoSuCommissione('Giulia','Verdi', 'GSPVRD1050VS501Z','54321',"casa", 300);

$ImpiegatoSuCommissione1->to_string();



?>