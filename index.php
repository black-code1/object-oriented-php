<?php

class User
{

  // properties methods
  public $username = 'ryu';
  public $email = 'ryu@thenetninja.co.uk';

  public function addFriend()
  {
    return "$this->email added a new friend";
  }
}

$userOne = new User();
$userTwo = new User();

echo $userOne->username . '<br />';
echo $userOne->email . '<br />';
echo $userOne->addFriend() . '<br />';


$userTwo->username = 'yoshi';
$userTwo->email = 'yoshi@thenetninja.co.uk';

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