<?php
  $user_cookie_exists = isset($_COOKIE['user_info']) && !empty($_COOKIE['user_info']);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="stylesheet" href="../../src/css/style_us.css" />
    <link rel="stylesheet" href="../css/style_components.css" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Marcellus&family=Source+Code+Pro&display=swap" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Lexend+Exa:wght@100..900&family=Marcellus&family=Source+Code+Pro&display=swap" rel="stylesheet" />
  </head>
  <body>
    <?php if ($user_cookie_exists): ?>
      <?php require('./components/headerLogged.php');?>
    <?php else: ?>
      <?php require('./components/headerUs.php');?>
    <?php endif; ?>
    <div class="divImmagine">
      <h1 class="aboutUs"><span class="clear">About</span> our Team</h1>
      <p class="usParagraph">
        We're a team of four IT students from the same <br />
        class, 5GI, passionate about technology and <br />
        working together to innovate. 
      </p>
    </div>
    <div class="projectManager">
      <h1 class="theTeam"><span class="clear">The</span> Team</h1>
      <img src="../../img/persone/Luca Galli.png" alt="" width="150" style="padding-top: 20px;">
      <h2 class="pj"><span class="clear">Project</span>Manager</h2>
      <p class="Luca">Luca Galli</p>
      <div class="personContact">
        <img src="../../img/mail.png" alt="" width="35" style="padding-right: 30px;">
        <a href="mailto:19413@studenti.marconiverona.edu.it">19413@studenti.marconiverona.edu.it</a>
      </div>
      <div class="green-line"></div>
    </div>

    <div class="titoloAreaTecnica">
      <h1>Area Tecnica</h1>
    </div>

    <div class="areaTecnica">
      <div class="personContainerArea">
        <img src="../../img/persone/user to add.svg" alt="" width="150" style="padding-top: 20px;">
        <h2 class="pj"><span class="clear">Product</span> Manager</h2>
        <p class="Luca">Gabriele Massella</p>
        <div class="personContact">
          <img src="../../img/mail.png" alt="" width="35" style="padding-right: 15px;">
          <a href="mailto:19471@studenti.marconiverona.edu.it">19471@studenti.marconiverona.edu.it</a>
        </div>
      </div>
      <div class="personContainerArea">
        <img src="../../img/persone/user to add.svg" alt="" width="150" style="padding-top: 20px;">
        <h2 class="pj"><span class="clear">Sviluppatore</span> Software</h2>
        <p class="Luca">Riccardo Sporis</p>
        <div class="personContact">
          <img src="../../img/mail.png" alt="" width="35" style="padding-right: 15px;">
          <a href="mailto:19598@studenti.marconiverona.edu.it">19598@studenti.marconiverona.edu.it</a>
        </div>
      </div>
      <div class="personContainerArea">
        <img src="../../img/persone/user to add.svg" alt="" width="150" style="padding-top: 20px;">
        <h2 class="pj"><span class="clear">Design Archite</span>ttura Applicativa</h2>
        <p class="Luca">Alessandro Bonfante</p>
        <div class="personContact">
          <img src="../../img/mail.png" alt="" width="35" style="padding-right: 15px;">
          <a href="mailto:18549@studenti.marconiverona.edu.it">18549@studenti.marconiverona.edu.it</a>
        </div>
      </div>
      <div class="personContainerArea">
        <img src="../../img/persone/user to add.svg" alt="" width="150" style="padding-top: 20px;">
        <h2 class="pj"><span class="clear">Test & </span>Development</h2>
        <p class="Luca">Amir Pecora</p>
        <div class="personContact">
          <img src="../../img/mail.png" alt="" width="35" style="padding-right: 15px;">
          <a href="mailto:21029@studenti.marconiverona.edu.it">21029@studenti.marconiverona.edu.it</a>
        </div>
      </div>

    </div>
  </body>
</html>