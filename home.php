<?php
  $username = "Alastor Radio";
  $fulltimenow = date("d.m.Y H:i:s");
  $hournow = date("H");
  $partofday = "lihtsalt aeg";
  if($hournow < 7){
       $partofday = "uneaeg";
  }
  if($hournow >= 8 and $hournow < 18){
	  $partofday = "akadeemilise aktiivsuse aeg";
  }
  
  //vaatame semestri kulgemist
  $semesterstart = new DateTime("2020-8-31");
  $semesterend = new DateTime("2020-12-13");
  //selgitame välja nende vahe ehk erinevuse
  $semesterduration = $semesterstart->diff($semesterend);
  //leiame selle päevade arvuna
  $semesterdurationdays = $semesterduration->format("%r%a");
  
  //tänane päev
  $today = new DateTime("now");
  //if($fromsemestarstartdays  < 0)(semester pole peale hakanud)
  
?>
<!DOCTYPE HTML PUBLIC>
<html lang="et">
<head>
   <meta charset="utf-8">
   <title><?php echo $username; ?> programmeerib veebi</title>

</head>
<body>
  <h1><?php echo $username; ?></h1>
  <p>See veebileht on loodud õppetöö kaigus ning ei sisalda mingit tõsiseltvõetavat sisu! Niisiis naudi seda lehte!</p>
  <p>Lehel on olemas oma tekst kui seda välja mõelda! Digitaalsed mõtted lähevad tuult mööda ja naudi siin <a href="http://www.tlu.ee">koolis</a> 
  enda reaalsust!</p>
  <p>Õnnelikuks teeb meid see, et me oleme üksteisele olemas. Aitame kui on probleeme, anname head nõu rasketel küsimustel, vahetame teadmisi 
  arenemiseks ning soovime alati kõike paremat. See oleks justkui perekond ja nii ka ongi. Sõpradega koos olles tekibki tunne nagu oleksid kõik 
  koos teine perekond üksteisele. Perekonnana saavadki kõik sõbrad olla rohkem koos. Tegevusi jätkub küllaga üksteisele. Mängitakse sõbralikke 
  mänge, jutustatakse jutte ja hoolitsetakse üksteise eest. Oleme siis ikka õnnelikud!
  <p>On levimas kuulujutte uuest arvutimängust, mis võib muuta maailma. Selle nimeks on "PRIME Empire". See on mäng, kus mängijad saavad enda
  tegelaskuju luua ja seda modifitseerida just oma tahtmisele. Mängu alguses viiakse mängija lihtsatele tasemetele, kus pole palju vaja mõelda ega
  ka keskenduda. Kuid juba pärast 13. taset hakkab juba selline seiklus, mida ei suudaks keegi kunagi välja nuputada. Sellel uskumatusel on olemas
  oma "aga". Selleks, et edasi minna peab mängija nõustuma Prime Empire sisenemisega. Kas Sa julgeksid Prime Empire siseneda?</p>
  <p>Lehe avamise hetkel oli: <?php echo $fulltimenow; ?>.</p>
  <p><?php echo "Parajasti on " .$partofday ."."; ?></p>

</body>
</html>