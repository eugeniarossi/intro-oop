<?php
// definisco una classe
class User
{
    public $nome; 
    public $email = 'EmailUser@gmail'; // valore di default
}

// creo una nuova istanza
$massimiliano = new User();
// assegno un valore all'attributo nome
$massimiliano->nome = 'Massimiliano';
// assegno un valore all'attributo email
$massimiliano->email = 'mass@gmail.com';

var_dump($massimiliano);


$gaetano = new User();

$gaetano->nome = 'Gaetano';

var_dump($gaetano);

// leggo solo l'attributo nome
var_dump($gaetano->nome);

//-----------------------------------------------------------

// definisco una classe
class Utente
{
    public $nome; 
    private $sconto = 0; // valore di default

    public function setSconto($value){ // SETTER
        $this->sconto = $value;
    }

    public function getSconto(){ // GETTER
        return $this->sconto;
    }
}

// creo una nuova istanza
$sara = new Utente();
// assegno un valore all'attributo nome
$sara->nome = 'sara';

$sara->setSconto(50);
echo $sara->getSconto();

var_dump($sara->nome);

/* 
un attributo private non può essere letto
usare un setter per modificare l'attributo
e un getter per leggerlo

setter e getter possono essere privati o pubblici
*/

//-----------------------------------------------------------

// definisco una classe
class UtenteNuovo
{
    public $nome = 'User Name'; 
    private $sconto = '0';

    // COSTRUTTORE
    public function __construct($_nome, $_sconto) // underscore per differenziare dagli attributi normali
    {
        $this->nome = $_nome;
        $this->sconto = $_sconto;
    }
    
}

// creo una nuova istanza
$giulia = new UtenteNuovo('Giulia', 10);

var_dump($giulia);

?>