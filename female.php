<?php

class FeMale extends Human implements JsonSerializable {

      public function __construct() {
            $this->gender =  "Female";
      }

      public function getGender() {
            return $this->gender;
      }

      public function jsonSerialize(){
          return
                [
                    'personalId'   => $this->getPersonalId(),
                    'firstName' => $this->getFirstName(),
                    'lastName' => $this->getLastName(),
                    'birthDate' => $this->getBirthDate(),
                    'gender' => $this->getGender(),
                ];
      }

      public static function Insert($females){

              $json = json_encode($females);

              $db = new PDO('mysql:host=localhost;dbname=human', 'root', '');

              $data = json_decode($json, true);

              $stmt =$db->prepare("INSERT INTO object (personalId, firstName, lastName, birthDate, gender) VALUES (?,?,?,?,?)");

              foreach($data as $row){

                  $stmt->bindParam(1, $row['personalId']);
                  $stmt->bindParam(2, $row['firstName']);
                  $stmt->bindParam(3, $row['lastName']);
                  $stmt->bindParam(4, $row['birthDate']);
                  $stmt->bindParam(5, $row['gender']);

                  $stmt->execute();
              }
    }


}
?>
