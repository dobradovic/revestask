<?php
include("human.php");
include("male.php");
include("female.php");

          $male1 = new Male();
          $male1->setPersonalId(11);
          $male1->setFirstName("Dejan");
          $male1->setLastName("Obradovic");
          $male1->setBirthDate("22-06-1993");
          $male1->setBeard(false);

          $male2 = new Male();
          $male2->setPersonalId(223);
          $male2->setFirstName("Vlade");
          $male2->setLastName("Divac");
          $male2->setBirthDate("22-10-1960");
          $male2->setBeard(true);

          $female1=new Female();
          $female1->setPersonalId(432);
          $female1->setFirstName("Ana");
          $female1->setLastName("Misic");
          $female1->setBirthDate("22-10-1995");

          $female2=new Female();
          $female2->setPersonalId(531);
          $female2->setFirstName("Kaca");
          $female2->setLastName("Petrusic");
          $female2->setBirthDate("22-10-1993");

          

          $maleArray = array($male1, $male2);
          $femaleArray = array($female1, $female2);

          Male::Insert($maleArray);
          Female::Insert($femaleArray);


 ?>
