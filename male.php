<?php

class Male extends Human implements JsonSerializable {

  private $beard;

  public function __construct() {
      $this->gender =  "Male";
  }
  public function getGender() {
      return $this->gender;
  }

  public function setBeard($beard) {
      $this->beard = $beard;
  }
  public function getBeard() {
      return $this->beard;
  }


  public function jsonSerialize(){
        return
              [
                  'personalId'   => $this->getPersonalId(),
                  'firstName' => $this->getFirstName(),
                  'lastName' => $this->getLastName(),
                  'birthDate' => $this->getBirthDate(),
                  'gender' => $this->getGender(),
                  'beard' => $this->getBeard()
              ];
    }



      public static function Insert($males){

              $json = json_encode($males);

              $db = new PDO('mysql:host=localhost;dbname=human', 'root', '');

              $data = json_decode($json, true);

              $stmt =$db->prepare("INSERT INTO object (personalId, firstName, lastName, birthDate, gender, beard) VALUES (?,?,?,?,?,?)");

              foreach($data as $row){

                  $stmt->bindParam(1, $row['personalId']);
                  $stmt->bindParam(2, $row['firstName']);
                  $stmt->bindParam(3, $row['lastName']);
                  $stmt->bindParam(4, $row['birthDate']);
                  $stmt->bindParam(5, $row['gender']);
                  $stmt->bindParam(6, $row['beard']);

                  $stmt->execute();
              }
     }


}
?>
