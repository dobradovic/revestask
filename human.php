<?php

abstract class Human{

  private  $personalId;
  private  $firstName;
  private  $lastName;
  private  $birthDate;
  protected $gender;

  public function setPersonalId($personalId) {
          $this->personalId = $personalId;
      }
  public function getPersonalId() {
          return $this->personalId;
  }

  public function setFirstName($firstName) {
          $this->firstName = $firstName;
      }
  public function getFirstName() {
          return $this->firstName;
  }

  public function setLastName($lastName) {
          $this->lastName = $lastName;
      }
  public function getLastName() {
          return $this->lastName;
  }

  public function setBirthDate($birthDate) {
          $this->birthDate = $birthDate;
      }
  public function getBirthDate() {
          return $this->birthDate;
  }


  public abstract static function Insert($humans);



}
 ?>
