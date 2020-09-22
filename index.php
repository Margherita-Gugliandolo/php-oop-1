<?php
//GOAL: nell'ottica di quanto visto a lezione, generare una classe User definendo alcune variabili d'istanza che rappresentino alcune informazioni rilevanti nella registrazione di un utente in un qualsiasi sito a vostra scelta. Generare inoltre costruttore e metodo toString nelle modalita' viste in classe. Generare inoltre alcune istanze della classe e stamparne il valore attraverso la toString

class User{

  public $qualifica;
  public $name;
  public $lastname;
  public $password;
  public $mail;

  public function __construct($qualifica, $name, $lastname, $password, $mail){
    $this -> qualifica = $qualifica;
    $this -> name = $name;
    $this -> lastname = $lastname;
    $this -> password = $password;
    $this -> mail = $mail;
  }
  public function __toString(){
    $utente = "USER <br> <br> Figliolo, sono " . $this -> qualifica .
               " " . $this -> name .
               " " . $this -> lastname .
               " " . $this -> password . "<br>" .
               "Mail: " . $this -> mail . "<br>";

    return $utente;
  }
}
    $user = new User("il Capitano", "Jack", "Sparrow.", "Comprendi?", "eihò@beviamoci.su");

    echo $user;
?>
