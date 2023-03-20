<?php
  var_dump($_GET['discution']);
  if(isset($_GET['discution'])){
    $discution = explode("|", $_GET['discution']);
    if(isset($_GET['text'])){
      $discution[] = $_GET['text'];
      $historique = implode("|", $discution);
    }
  }else{
    $discution = array();
  }
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

    /* css pour la liste des messages */
    .comment>p {
      background-color: #40414f;
      color: white;
      padding: 10px;
      margin: 10px;
      border-radius: 10px;
      box-shadow: 0 0 10px black;
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
      background-color: #ffacac;
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
  </style>
</head>

<body>

  <center>
    <div class="header">
      <h1>Hot GPT</h1>
    </div>
  </center>

  <?php
<<<<<<< HEAD
  session_start();

  $discution = array();

  if (isset($_GET['text'])) {
    $text = $_GET['text'];
    array_push($discution, $text);
  }

  $_SESSION['discution'] = $discution;
=======
>>>>>>> 1855ca7a0937321fa0d1a60632c2ee8afbd8f930



  echo '<center><div class="comment"><p>Hummm Parle moi de choses 😏</p></div></center>';


<<<<<<< HEAD
  for ($i = 0; $i < count($discution); $i++) {
    echo '<center>';
    echo '<div class="comment">';
    echo '<p>';
    echo $discution[$i];
    echo '</p>';
    echo '</div>';
    echo '</center>';
=======
  foreach ($discution as $com) {
    echo '<center><div class="comment"><p>';
    echo $com;
    echo '</p></div></center>';
    echo '<center><div class="comment"><p>☺️</p></div></center>';
>>>>>>> 1855ca7a0937321fa0d1a60632c2ee8afbd8f930
  }

  var_dump($discution);
  ?>

<<<<<<< HEAD
  <!-- <center>
    <div class="comment">
      <p>
        test
      </p>
    </div>
  </center> -->

=======
>>>>>>> 1855ca7a0937321fa0d1a60632c2ee8afbd8f930
  <center>
    <div class="input">
      <form action="index.php" method="GET">
        <input type="hidden" name="discution" value="<?php if(isset($historique)){echo $historique;} ?>" />
        <input type="text" name="text" placeholder="mangez des fruits et des legumes" />
        <button>Send</button>
      </form>
    </div>
  </center>
  <h4></h4>
</body>

</html>