<?php

/**
 * Class
 */
class User
{
  public $name;
  public $email;
  public $password;

  function __construct(string $name, string $email, string $password)
  {
    $this->name = $name;
    $this->email = $email;
    $this->password = $password;
  }
}

$user = new User('Juan', 'eatteer@gmail.com', 'lovewony');

/**
 * Inheritance
 */
class Employee extends User
{
  public $title;

  function __construct(string $name, string $email, string $password, string $title)
  {
    parent::__construct($name, $email, $password);
    $this->title = $title;
  }
}

$employee = new Employee('Sara', 'sara@gmail.com', '123', 'Manager');
echo $employee->email;
