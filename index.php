<?php

class User
{

  public $username;
  private $email;

  public function __construct($username, $email)
  {
    $this->username = $username;
    $this->email = $email;
  }

  public function addFriend()
  {
    return "$this->email added a new friend";
  }

  // getters
  public function getEmail()
  {
    return $this->email;
  }

  // setters
  public function setEmail($email)
  {
    if (strpos($email, '@') > -1) {

      $this->email = $email;
    }
  }
}

class AdminUser extends User
{
  public $level;

  public function __construct($username, $email, $level)
  {
    $this->level = $level;
    parent::__construct($username, $email);
  }
}

$userOne = new User('mario', 'mario@thenetninja.co.uk');
$userTwo = new User('luigi', 'luigi@thenetninja.co.uk');
$userThree = new AdminUser('yoshi', 'yoshi@thenetninja.co.uk', 5);

echo $userThree->username . '<br />';
echo $userThree->getEmail() . '<br />';
echo $userThree->level . '<br />';





?>

<!DOCTYPE html>
<html>

<head>
  <title>Object Oriented PHP</title>
</head>

<body>

</body>

</html>