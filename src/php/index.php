
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="stylesheet" href="../../src/css/style_home.css" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Marcellus&family=Source+Code+Pro&display=swap" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Lexend+Exa:wght@100..900&family=Marcellus&family=Source+Code+Pro&display=swap" rel="stylesheet" />
  </head>
  <body>
    <img id="people1" src="../../img/people collaborating home (1).png" alt="" />
    <?php require('./components/headerHome.php');?>
    <div class="banner">
      <h1 class="title"><span class="clear">Clear</span>Pay</h1>
      <h3 class="subtitle">
        Italy's <span class="clear">1#</span> Leading Gas & <br />
        Energy Provider
      </h3>
      <h3 class="subtitle2">
        We are <b>ClearPay SRL</b>, with more than 20 years of experience,<br />
        every year, we are able to deliver the best provision of gas and<br />
        energy across the entire Italian region.
      </h3>
      <div id="divVision">
        <a class="vision" href="vision.html">Explore our vision</a>
        <img id="external_link" src="../../img/external link.png" alt="" />
      </div>
      <div class="collaborators">
        <img id="eni" src="../../img/eni.svg" alt="" />
        <img src="../../img/agsm.png" alt="" />
        <img src="../../img/engie.svg" alt="" />
        <img src="../../img/wekiwi.png" alt="" />
        <img src="../../img/sorgenia.svg" alt="" />
        <img src="../../img/iren.png" alt="" />
      </div>
    </div>
    <div class="second-content" id="second-content">
      <h1 class="goal">
        Our Goal: <br />
        The <span class="highlight">Greener</span> The <span class="highlight">Better</span>
      </h1>
      <p id="goal_p">
        Our company is committed to promoting green energy solutions and <br />
        actively participating in the global effort to mitigate emissions,<br />
        promoting a sustainable future for generations to come.
      </p>
    </div>
    <div class="services-container">
      <div class="third-content">
        <h1 id="services">Our Services</h1>
      </div>
      <div class="provisionContainer">
        <img src="../../img/1 service.jpeg" alt="" id="service1" />
        <div class="separator"></div>
        <p id="provision">
          <b>Gas & Energy Provision:</b><br />
          As a leading provider of energy solutions, <br />
          our company offers comprehensive gas and<br />
          energy provision services, ensuring reliable<br />
          access to essential resources for our<br />
          customers' needs. Energizing Futures:<br />
          <b>Your Trusted Gas and Energy Provider</b>.
        </p>
        
      </div>
      <div class="green-line"></div>
    </div>
     <div class="services-container2">
      <div class="provision2">  
        <p id="CarbonCalc">
          Introducing <b>"CarbonCalc":</b><br />
          Our company offers a personalized<br />
          carbon footprint assessment, <br />empowering individuals to track and <br />reduce their environmental impact<br />
          effectively through intuitive<br />
          graphics.
        </p>
        <div class="separator2"></div>
        <img src="../../img/2 service.jpeg" alt="" id="service2" />
      </div>
      
      <h1 id="example">Example Of A Graphic</h1>
      <div class="green-line2"></div>
      <div id="plot-container"></div>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.0/chart.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/chartjs-plugin-annotation/1.0.2/chartjs-plugin-annotation.min.js"></script>

      <canvas id="myChart" width="950" height="450"></canvas>
      <script src="../js/graph.js"></script>

      <div id="div_contacts">
        <h1 class="title2"><span class="clear">Clear</span>Pay</h1>
        <h2 class="contacts">Contacts</h2>
        <a href="us.php" id="who">Who we are, a brief introduction</a> <img id="external_link2" src="../../img/arrow.png" alt="" />
        <div class="separator3"></div>
        <p class="ourselves">
          During our school days, we worked on this project together, pooling our ideas and skills. <br />
          From brainstorming sessions to late-night coding, we turned our concept into a reality.<br />
          Our project is a product of our dedication and teamwork during our academic years.<br />
          It showcases how education can inspire creative solutions.
        </p>
      </div>
    </div>
  </body>
</html>
