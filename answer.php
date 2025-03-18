<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="description" content="The address program,in PHP" />
    <meta name="keywords" content="mths, icd2o" />
    <meta name="author" content="Ain Jeong" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./css/style.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.teal-light_blue.min.css" />
    <link rel="apple-touch-icon" sizes="180x180" href="./images/apple-touch-icon.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="./images/favicon-32x32.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="./images/favicon-16x16.png" />
    <link rel="manifest" href="./images/site.webmanifest" />
    <title>The address program,in PHP</title>
  </head>
  <body>
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
      <header class="mdl-layout__header">
        <div class="mdl-layout__header-row">
          <span class="mdl-layout-title">The address program,in PHP</span>
        </div>
      </header>
      <main class="mdl-layout__content">
        <div class="right-image">
          <img src="./images/street.jpg" alt="street image" width="250" />
        </div>
        <div class="page-content-php">
          <div id="address">
            <?php
            $streetName = $_GET["street-name"];
            $streetNumber = $_GET["street-number"];
            echo "<p>Your address is: " . $streetName . ", street number " . $streetNumber . ".</p>";
            ?>
          </div>
        </div>
      </main>
    </div>
  </body>
</html>
