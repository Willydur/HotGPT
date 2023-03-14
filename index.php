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
  <title>Hot GPT</title>

  <style>
    body {
      background-color: #343541;
      color: white;
    }

    h1 {
      font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
      font-size: 45px;
    }

    center {
      color: #FFACAC;
    }

    /* css pour la barre de saisis */
    input[type="text"] {
      width: 70%;
      padding: 12px 20px;
      margin: 8px 0;
      box-sizing: border-box;
      border: 2px solid #40414f;
      margin-right: 2%;
      background-color: #40414f;
      color: white;
      box-shadow: 0 0 10px black;
    }

    .input>form {
      display: flex;
      justify-content: center;
      align-items: center;
      position: fixed;
      bottom: 20px;
      left: 5%;
      width: 90%;
    }

    button {
      background-color: #FFACAC;
      color: white;
      padding: 14px 20px;
      margin: 8px 0;
      border: none;
      cursor: pointer;
      width: 10%;
    }

    button:hover {
      opacity: 0.8;
    }

    center>.dialogue {
      disdisplay: flex;
      justify-content: center;
      align-items: center;
    }
  </style>
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