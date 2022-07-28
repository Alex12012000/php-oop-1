<?php 

class Movie {

   public $movieName;
   public $movieYear;
   public $movieGenre;
   public $age;

   public function __construct($_name, $_year, $_genre)
   {
    $this->movieName = $_name;
    $this->movieYear = $_year;
    $this->movieGenre = $_genre;
   }

   public function isOld() {
        if($this->movieYear < 2000) {
            return $this->age = 'No, diversamente giovane..';
        }

        return $this->age = 'No!! È GGGiovane';
   }

};

$titanic = new Movie('Titanic', 1997, 'Drama');
$irishman = new Movie('The Irishman', 2019, 'Gangster');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2><?php echo $titanic->movieName ?></h2>
    <h3><?php echo $titanic->movieYear ?></h3>
    <span>E' vecchio? <?php echo $titanic->isOld() ?>..</span>
    <h3><?php echo $irishman->movieGenre ?></h3>
    <h2><?php echo $irishman->movieName ?></h2>
    <h3><?php echo $irishman->movieYear ?></h3>
    <span>E' vecchio? <?php echo $irishman->isOld() ?>..</span>
    <h3><?php echo $irishman->movieGenre ?></h3>
</body>
</html>