<?php
   $user_cookie_exists = isset($_COOKIE['user_info']) && !empty($_COOKIE['user_info']);
   ?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>My Profile</title>
      <link rel="preconnect" href="https://fonts.googleapis.com" />
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
      <link rel="stylesheet" href="../../src/css/style_myprofile.css" />
      <link rel="stylesheet" href="../css/style_components.css" />
      <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Marcellus&family=Source+Code+Pro&display=swap" rel="stylesheet" />
      <link rel="preconnect" href="https://fonts.googleapis.com" />
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
      <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Lexend+Exa:wght@100..900&family=Marcellus&family=Source+Code+Pro&display=swap" rel="stylesheet" />
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Lexend+Exa:wght@100..900&family=Marcellus&family=Readex+Pro:wght@160..700&family=Source+Code+Pro&display=swap" rel="stylesheet">
      <link href="https://fonts.cdnfonts.com/css/mona-sans" rel="stylesheet">
      <script src="../js/cookie.js"></script>
      <script>
         document.addEventListener('DOMContentLoaded', function() {
           displayUserInfo();
         });
      </script>
   </head>
   <body>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.0/chart.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/chartjs-plugin-annotation/1.0.2/chartjs-plugin-annotation.min.js"></script>
      <script src="../js/smallgraph.js"></script>
      <div class="bodyContainer">
         <div class="profileandboxes">
            <?php require('./components/headerLoggedProfile.php');?>
            <div class="welcomePar">
               <div class="welcomeText">
                  <h1>Welcome <span id="userName"></span></h1>
                  <p>to your ClearPay portal, here, you can check your active plans and consumes.</p>
               </div>
               <div class="userInfo">
                  <div class="userText">
                     <p id="userEmail">lucagalli05@gmail.com</p>
                     <div class="flagtext">
                        <img src="../../img/italy.png" alt="">
                        <p id="userLocation"><span id="city">Verona, </span> <span id="country">Italia</span></p>
                     </div>
                  </div>
                  <div class="imgContainer">
                     <img src="../../img/persone/Luca Galli.png"></img>
                  </div>
               </div>
            </div>
            <div class="menuContainer">
               <div class="menuItems">
                  <h1 style="margin-top:40px;">Menu</h1>
                  <div class="topSection">
                     <div class="contractDetails">
                        <h1>Contract Details</h1>
                        <div class="blackSeparator"></div>
                        <?php require('./components/contract.php');?>
                        <div class="arrowContainer">
                           <button>←</button>
                           <button>→</button>
                        </div>
                        <div class="ButtonContainer">
                           <button class="selectContract">Select Contract</button>
                           <button class="deleteContract">Delete Contract</button>
                        </div>
                     </div>
                     <div class="contractInfo">
                        <div class="info">
                           <img src="../../img/new contract.png" alt="">
                           <h1>20/03/2024</h1>
                           <h2>Signed</h2>
                           <p>Expiring: <span>20/06/2026</span></p>
                        </div>
                        <div class="info">
                           <img src="../../img/new contract.png" alt="">
                           <h1>£15</h1>
                           <h2>Last Instalment</h2>
                           <p>Previous: <span>£20</span></p>
                        </div>
                        <div class="info">
                           <img src="../../img/new contract.png" alt="">
                           <h1>40 KW/H</h1>
                           <h2>Last Consumption</h2>
                           <p>Previous Month: <span>30 KW/H</span></p>
                        </div>
                        <div class="info">
                           <img src="../../img/new contract.png" alt="">
                           <h1>400 KW/H</h1>
                           <h2>Total Consumption</h2>
                           <p>Provider: <span>Eni</span></p>
                        </div>
                        <div class="info">
                           <img src="../../img/new contract.png" alt="">
                           <h1>1932743943</h1>
                           <h2>Migration Code</h2>
                           <p>Provider: <span>Eni</span></p>
                        </div>
                        <div class="info">
                           <img src="../../img/new contract.png" alt="">
                           <h1>£0.25 - 60 min</h1>
                           <h2>Migration Code</h2>
                           <p>Provider: <span>Eni</span></p>
                        </div>
                     </div>
                  </div>
                  <div class="calendarContainer">
                     <div class="leftSide">
                        <h1>September 2024</h1>
                        <h2>Change Month</h2>
                        <div class="buttonCalContainer">
                           <button><</button>
                           <button>></button>
                        </div>
                        <h1>Change Year</h1>
                        <select name="" id="yearSelect">
                        </select>
                     </div>
                     <div class="daysContainer">
                        <div class="rightSide"> 
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </body>
   <script>
      const selectElement = document.getElementById("yearSelect");
      for (let year = 2024; year <= 2080; year++) {
         const option = document.createElement("option");
         option.value = year;
         option.textContent = year;
         selectElement.appendChild(option);
      }
   </script>
   <script>
      const rightSide = document.querySelector(".rightSide");
      // Array of days of the week
      const daysOfWeek = ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'];

      // Create divs for days of the week
      for (let day of daysOfWeek) {
         const dayElement = document.createElement("div");
         dayElement.classList.add("casellaCalendario", "dayOfWeek");
         dayElement.textContent = day;
         rightSide.appendChild(dayElement);
      }

      // Create divs for numbers 1 to 30
      for (let i = 1; i <= 30; i++) {
         const gridItem = document.createElement("div");
         gridItem.classList.add("casellaCalendario");
         gridItem.textContent = i;
         rightSide.appendChild(gridItem);
      }
   </script>
</html>