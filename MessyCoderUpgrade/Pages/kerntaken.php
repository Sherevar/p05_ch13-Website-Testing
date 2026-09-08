<?php
  $pathToKerntakenDirectory = "../kerntaken/";
?>

<!DOCTYPE html>
<html lang="nl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lorenzo von Matterhorn - Portofolio</title>
  <link rel="stylesheet" href="../CSS/stylesheet.css">

</head>
<body>
  <button class="dark-toggle" onclick="toggleDarkMode()"></button>
  <header>
    <?php require_once("../Includes/header.php"); ?>
  </header>

  <main>
    <h1>Kerntaken</h1>
    <h2>Realiseert Software</h2>
    <ul>
      <li><a href="<?php print $pathToKerntakenDirectory; ?>b1k1w1.php">B1-K1-W1 - Stemt opdracht af, plant werkzaamheden en bewaakt de voortgang</a></li>
      <li><a href="<?php print $pathToKerntakenDirectory; ?>b1k1w2.php">B1-K1-W2 - Maakt een technisch ontwerp voor software</a></li>
      <li><a href="<?php print $pathToKerntakenDirectory; ?>b1k1w3.php">B1-K1-W3 - Realiseert (onderdelen van) software</a></li>
      <li><a href="<?php print $pathToKerntakenDirectory; ?>b1k1w4.php">B1-K1-W4 - Test software</a></li>
      <li><a href="<?php print $pathToKerntakenDirectory; ?>b1k1w5.php">B1-K1-W5 - Doet verbetervoorstellen voor de software</a></li>
    </ul>
    <h2>Voert ICT-projecten uit</h2>
    <ul>
      <li><a href="<?php print $pathToKerntakenDirectory; ?>b1k2w1.php">B1-K2-W1 - Werkt samen in een projectteam</a></li>
      <li><a href="<?php print $pathToKerntakenDirectory; ?>b1k2w2.php">B1-K2-W2 - Presenteert het opgeleverde werk</a></li>
      <li><a href="<?php print $pathToKerntakenDirectory; ?>b1k2w3.php">B1-K2-W3 - Evalueert de samenwerking</a></li>
    </ul>
  </main>

    <script src="../Scripts/darkmode.js"></script>
  <footer>
    <?php require_once("../Includes/footer.php"); ?>
  </footer>

</body>
</html>
