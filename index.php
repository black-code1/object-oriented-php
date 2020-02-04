<?php

class User
{

  // properties methods
  public $username;
  public $email;

  public function __construct($username, $email)
  {
    $this->username = $username;
    $this->email = $email;
  }

  public function addFriend()
  {
    return "$this->email added a new friend";
  }
}

$userOne = new User('mario', 'mario@thenetninja.co.uk');
$userTwo = new User('luigi', 'luigi@thenetninja.co.uk');

echo $userOne->username . '<br />';
echo $userOne->email . '<br />';
echo $userOne->addFriend() . '<br />';


echo $userTwo->username . '<br />';
echo $userTwo->email . '<br />';
echo $userTwo->addFriend() . '<br />';
// print_r(get_class_vars('User'));
// print_r(get_class_methods('User'));

?>

<!DOCTYPE html>
<html>

<head>
  <title>Object Oriented PHP</title>
</head>

<body>

</body>

</html>