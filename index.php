<?php

require_once('persona.php');
require_once('impiegato.php');
require_once('impiegato_salariato.php');
require_once('impiegato_a_ore.php');
require_once('impiegato_su_commissione.php');

try {

    $impiegato1 = new Impiegato('Giuseppe','Verdi', 'GSPVRD1050VS501Z',13123);

    $impiegato1->to_string();

    $impiegatoSalariato1 = new ImpiegatoSalariato('Francesco','Rossi', 'GSPVRD1050VS501Z','54321',10, 10);
    
    $impiegatoSalariato1->to_string();
    
    $impiegatoAOre1 = new ImpiegatoAOre('Pinco','Pallino', 'GSPVRD1050VS501Z','54321',20, 10);
    
    $impiegatoAOre1->to_string();
    
    $ImpiegatoSuCommissione1 = new ImpiegatoSuCommissione('Jordan','Vieri', 'GSPVRD1050VS501Z','54321',"casa", 300);
    
    $ImpiegatoSuCommissione1->to_string();
    
    } catch (Exception $e) {

    echo 'Eccezione: ' . $e->getMessage();

    }




?>