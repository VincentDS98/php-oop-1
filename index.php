<?php 
class Movie {
    
    public $title;
    private $genre;
    public $director;
    public $duration;

    public function __construct(string $title, string $genre,string $director = 'regista', int $duration){
         $this->title = $title;
         $this->setGenre($genre);
         $this->director = $director;
         $this->duration = $duration;
         
    }

    public function getGenre(){
        return $this->genre;
    }

    public function setGenre($genre){
        if(is_string($genre)){
            $this->genre = $genre;
        }
        else{
            echo 'inserisci una stringa';
        }
    }
}

$movione = new Movie('Transformer', 'Azione', 'Steven Spielberg',180);



var_dump($movione);
var_dump($movione->getGenre());


$movitwo = new Movie('The Librarian','Avventura', 'Christopher Nolan',90);

var_dump($movitwo);

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>