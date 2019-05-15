<?php
include('interfaceMovies.php');

class Movie implements Movies {


  public function addMovie($data) {
    $_SESSION['ar_movies'][]  = $data;
  }
  
  public function presMovie($data) {
  
  }
  
  public static function debug($var){
    echo '<pre>';
    print_r($var);
    echo '</pre>';
  }
  
}
?>
