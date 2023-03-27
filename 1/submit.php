<?php
      $ime = $_POST['ime'];
      $prezime = $_POST['prezime'];
      $email = $_POST['email'];

      $fajl = fopen("podaci.txt", "a"); // otvori fajl za pisanje (dodavanje na kraj)

      $red = $ime . " " . $prezime . " " . $email . "\n"; // formatiraj redak podataka

      fwrite($fajl, $red); // upiši redak podataka u fajl

      fclose($fajl); // zatvori fajl
      return header("Location: index.php"); // vrati se na početnu stranicu
      ?>

