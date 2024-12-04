<?php
/**
 * Program memanfaatkan Program 10.2 untuk membuat form inputan sederhana.
 **/

 include("form.php");

 echo "<html><head><title>Mahasiswa</title></head><body";
 $form = new Form("", "Input Form");
 $form->addField("txtnim", "NIM");
 $form->addField("txtnama", "Nama");
 $form->addField("txtkelas", "Kelas");
 $form->addField("txtalamt", "Alamat");
 echo "<h2>Program PHP OOP Form Input</h2>";
 echo "<h3>Silahkan isi form berikut ini : </h3>";
 $form->displayForm();
 echo "</body></html>";

 ?>