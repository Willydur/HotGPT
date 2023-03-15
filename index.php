<?php
if (!isset($_GET['discution'])) {
  $discution = array();
  if (isset($_GET['text'])) {
    $discution[] = $_GET['text'];
  }
} else {
  $discution = $_GET['discution'];
  $discution[] = $_GET['text'];
}
var_dump($discution);
?>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="style.css">
  <title>Hot GPT</title>
</head>

<body>
  <div class="dialogue">
    <?php
    $text = $_GET['text'];
    foreach ($discution as $text) {
      echo "<p class='user-reponse'>" . $text . "</p>";
    }
    echo "<p class='user-reponse'>" . $text . "</p>";
    ?>
  </div>

  <center>
    <div class="input">
      <form action="index.php" method="GET">
        <input type="hidden" name="discution" value="<?php echo implode(',', $discution); ?>" />
        <input type="text" name="text" placeholder="mangez des fruits et des legumes" />
        <button>Send</button>
      </form>
    </div>
  </center>
  <h4></h4>
</body>

</html>