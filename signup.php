<html>

<head>
  <title>Inscription</title>
  <link rel="stylesheet" href="style.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <style>
    * {
      margin: 0px;
      padding: 0px;
      box-sizing: border-box;
      font-family: 'poppins', sans-serif;
    }

    html {
      background: url(./images/nojomm.jpg);


    }

    body {
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;

    }

    .contrainer {
      background: transparent;
      width: 500px;
      border: 2px solid rgb(255, 255, 255, 0.1);
      box-shadow: 0px 0px 10px rgb(0, 0, 0, 0.1);


    }

    .contrainer h2 {
      font-size: 36px;
      text-align: center;
      color: white;
    }

    .contrainer .input-box {
      position: relative;
      width: 100%;
      height: 50px;
      margin: 30px 0px;
      color: white;
    }

    .input-box input {
      width: 100%;
      height: 100%;
      background: transparent;
      border: none;
      outline: none;
      border: 2px solid rgb(255, 255, 255, 0.2);
      border-radius: 5px;
      font-size: 16px;
      color: white;
      padding: 20px 45px 20px 20px;
    }

    .contrainer .btn {
      width: 100%;
      height: 45px;
      background: white;
      border: none;
      outline: none;
      border-radius: 5px;
      box-decoration-break: 0px 0px 10px rgb(0, 0, 0, 0.1);
    }

    .contrainer .btn a {
      width: 100%;
      height: 45px;
      background: white;
      border: none;
      outline: none;
      border-radius: 5px;
      box-decoration-break: 0px 0px 10px rgb(0, 0, 0, 0.1);


    }
  </style>

</head>

<body>
  <div class="contrainer">
    <h2>Sign-up</h2><br>
    <form id="formulaire_test" action="" method="post" autocomplete="off">
      <div class="input-box">
        <tr>
          <td><label for="text"> Nom:</label></td>
          <td><input type="text" size="30" name="name" id="name"> </td>
        </tr>
      </div>

      <div class="input-box">
        <tr>
          <td><label for="eml"> Email :</label></td>
          <td><input type="text" size="30" name="eml" id="eml"></td>
        </tr>
      </div>

      <div class="input-box">
        <tr>
          <td> <label for="password">password :</label></td>
          <td><input type="password" size="30" name="pass" id="pass"> </td>
        </tr>
      </div>
      <div class="input-box">
        <tr>
          <td><label for="confirmpassword"> confirm password :</label></td>
          <td><input type="password" size="30" name="pass" id="passconfirm"></td>
        </tr>
      </div>
      <button type="submit" class="btn">Sign-up</button>
  </div>
  </form>
  </div>
  <?php
  require "config.php";
  if (isset($_POST['name']) and isset($_POST['eml']) and isset($_POST['pass'])) {
    if (!empty($_POST['name']) and !empty($_POST['eml']) and !empty($_POST['pass'])) {
      try {
        global $bdd;
        $bdd = new PDO('mysql:host=localhost;dbname=inscription;charset=utf8', 'root', '');
      } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
      }
      $sql1 = "select * from utilisateur where email='" . $_POST['eml'] . "'";
      $reponse = $bdd->query($sql1);
      $donnees = $reponse->fetch();

      if (empty($donnees)) {
        $sql2 = "insert into utilisateur(Nom, email, password) values('" . $_POST['name'] . "','" . $_POST['eml'] . "','" . $_POST['pass'] . "')";
        $bdd->exec($sql2);
        echo "<center>Utilisateur " . $_POST['name'] . " est ajouté avec succés</center>";
      } else
        echo "<center>Utilisateur existe déja !!!</center>";
    }
  }

  ?>
</body>

</html>