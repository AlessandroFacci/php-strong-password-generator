<?php 

//# FUNZIONE PER GENERARE PASSWORD
function random_password( int $lenght, string $possible_chars){
  // dichiaro  password
  $password = '';
  // var_dump($password);
  
  // ciclo per la lunghezza ricevuta
  for ($i=0; $i < $lenght; $i++) { 
  
  // genero randomicamente dei caratteri per la lunghezza
    $random = rand(0, strlen($possible_chars) - 1);
    // var_dump($random);
  
  // inserico il risultato
    $password = $password.$possible_chars[$random];
    // var_dump($password);
  }
  // ritorno il risultato
  return $password;
  };
?>