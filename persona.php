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

?>