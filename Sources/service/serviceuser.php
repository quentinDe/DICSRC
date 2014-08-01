<?php
namespace Service;

/*
  Dans les méthode de la classe, notre service fait appel aux méthode de son DAO
  afin de remplir son contrat.
  */
class ServiceUser implements iServiceUser {
  private $userDAO;
  private $user;

  public function __construct($userDAO) {
    $this->userDAO = $userDAO;
  }

  public function get($key) {
    return $this->userDAO->get($key);
  }

  public function getUser() {
    return $this->userDAO->getUser();
  }

  public function register($nom, $prenom, $age) {
    $this->userDAO->register($nom, $prenom, $age);
    return $this;
  }

  public function set($key, $value) 
  {
    $this->userDAO->set($key, $value);
    return $this;
  }

  public function fullName() 
  {
    $user = $this->userDAO->getUser();
    return $user->getPrenom() . ' ' . $user->getNom();
  }


  public function birthyear()
  {
    return date("Y") - $this->getUser()->getAge();
  }
}
