<!doctype html>
<html>

<head>
  <title>Inscription</title>
  <link rel="stylesheet" href="style.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<style>
  * {
    margin: 0px;
    padding: 0px;
    box-sizing: border-box;
    font-family: 'poppins', sans-serif;
  }

  body {
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background: url(./images/nojomm.jpg);

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
</style>

<body>
  <div class="contrainer">
    <h2>Sign-in</h2><br>
    <form id="formulaire_test" action="" method="post" autocomplete="off">
      <div class="input-box">
        <tr>
          <td>
            <label for="username"> Nom or Email :</label>
          </td>
          <td> <input type="text" size="30" name="name" id="name"> </td>
        </tr>
      </div>
      <div class="input-box">
        <tr>
          <td>
            <label for="password">password :</label>
          </td>
          <td> <input type="password" size="30" name="pass" id="pass"> </td>
        </tr>
      </div>
      <button type="submit" class="btn"><a href="index.php">Sign-in</button>
  </div>
  </form>
  <?php
  require 'config.php';
  if (isset($_Post["submit"])) {
    $name = $_Post["name"];
    $eml = $_POST["eml"];
    $result = mysqli_query($conn, "select * from utilisateur where Nom ='$name' or Email='$eml'");
    $row = mysqli_fetch_assoc($result);
    if (mysqli_num_rows($result) > 0) {
      if ($pass == $row["password"]) {
        $_SESSION["signin"] = true;
        header("location:index.php");
      } else {
        echo
        "<scripts> alert('wrong password');</scripts>";
      }
    } else {

      echo
      "<scripts> alert('user not signup');</scripts>";
    }
  }
  ?>

</body>

</html>