<?php

class Weather
{
  public static $tempConditions = ['cold', 'mild', 'warm'];

  public static function celsiusToFarenheit($c)
  {
    return $c * 9 / 5 + 32;
  }

  public function determinTempCondition($f)
  {
    if ($f < 40) {
      return self::$tempConditions[0];
    } else if ($f < 70) {
      return self::$tempConditions[1];
    } else {
      return self::$tempConditions[2];
    }
  }
}


// print_r(Weather::$tempConditions);
// echo Weather::celsiusToFarenheit(20);
echo Weather::determinTempCondition(50);

?>

<!DOCTYPE html>
<html>

<head>
  <title>Object Oriented PHP</title>
</head>

<body>

</body>

</html>