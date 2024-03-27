<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>My Profile</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="stylesheet" href="../../src/css/style_myprofile.css" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Marcellus&family=Source+Code+Pro&display=swap" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Lexend+Exa:wght@100..900&family=Marcellus&family=Source+Code+Pro&display=swap" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Lexend+Exa:wght@100..900&family=Marcellus&family=Readex+Pro:wght@160..700&family=Source+Code+Pro&display=swap" rel="stylesheet">
    <script src="../js/cookie.js"></script>
    <script>
      document.addEventListener('DOMContentLoaded', function() {
        displayUserInfo();
      });
    </script>
</head>
<body>
    <?php require('./components/headerLogged.php');?>
        <div class="boxMenu">
          <h1><span class="clear">Clear</span>Pay</h1>
            <div class="menuContainer">
              <div class="optionContainer">
                <img src="../../img/note.png" alt=""> <p>Active Contracts</p>
                <p class="contractsNumber">5</p>
              </div>
              <div class="optionContainer">
                <img src="../../img/calc.png" alt=""> <p>CarbCalc</p>
              </div>
              <div class="optionContainer">
                <img src="../../img/new contract.png" alt=""> <p>New Contract</p>
              </div>

              <div class="line"></div>

              <div class="optionContainer">
                <img src="../../img/user.png" alt="">
                <div class="userInfo">
                  <p id="userName"></p>
                  <p id="userEmail"></p>
                </div>
              </div>
              <div class="optionContainer">
                <img src="../../img/exit.png" alt=""> <p>Logout</p>
              </div>
          </div>
        </div>
        <div class="allThingsContainer">
          <div class="welcomeContainer">
            <h2><span class="clear">Welcome,</span> <span id="userInfos"></span></h2>
            <p>to your ClearPay portal, here, you can check your <br> active plans and consumes.</p>
          </div>
          <div class="activeContracts">
            <h2><span class="clear">Active</span> Contracts</h2>
            <div class="line"></div>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.0/chart.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/chartjs-plugin-annotation/1.0.2/chartjs-plugin-annotation.min.js"></script>
            <script src="../js/smallgraph.js"></script>
            <?php require('./components/contract.php');?>
            <?php require('./components/contract.php');?>
            <?php require('./components/contract.php');?>
            <?php require('./components/contract.php');?>
            <?php require('./components/contract.php');?>
            <div class="closing_line"></div>
          </div>
          <div class="carbCalc">
            <h2><span class="clear">Carb</span> Calc</h2>
            <p>Your one-stop solution for effortlessly <br> calculating your carbon footprint."</p>
            <div class="selctContainer">
            <select name="piano" id="selectPlan" class="selectionBox" onchange="displayPlan()">
              <option value="" disabled selected hidden>SELECT A PLAN</option>
              <option value="option1">----------------</option>
              <option value="option1">Option 1</option>
              <option value="option2">Option 2</option>
              <option value="option3">Option 3</option>
            </select>
            </div>
            <?php require('./components/contract.php');?>
            <div class="buttonsContainer">
              <button class="contractAction" id="button1">EDIT CONTRACT</button>
              <button class="contractAction" id="button2" >DELETE SUBSCRIPTION</button>
            </div>
          </div>
          <div class="payBills">
            <div class="closing_line"></div>
            <h2><span class="clear">Pay yo</span>ur Bills</h2>
            <p>Select a plan below to pay for, if you wish <br>
            not to pay here, all your plans fees will be charged on the <br> 
            last day on the month, an email by the system will be sent to <br> 
            your account's email address.</p>
            <div class="selctContainer">
            <select name="piano" id="selectPlan" class="selectionBox" onchange="displayPlan()">
              <option value="" disabled selected hidden>SELECT A PLAN</option>
              <option value="option1">----------------</option>
              <option value="option1">Option 1</option>
              <option value="option2">Option 2</option>
              <option value="option3">Option 3</option>
            </select>
            </div>
            <?php require('./components/contract.php');?>
            <div class="buttonPayContainer">
              <button class="pay">Pay</button>
            </div>
          </div>
        </div>
        
</body>
</html>
