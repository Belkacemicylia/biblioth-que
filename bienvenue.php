<?php
session_start();
if (!isset($_SESSION['user']))
  header('Location:index.php');



?>

<!DOCTYPE html>
<html lang="en">
<?php
require_once "nav.php";
?>
<style>
  section {
    text-align: center;
  }

  div.bout {
    width: 200px;
    height: 40px;
    background-color: cornflowerblue;
    display: inline-block;
    margin: 20px;
    padding: 5px;
    border-radius: 30px;
    cursor: pointer;

  }
</style>



<body>
  <section>
    <div class="bout"><a style="color: white;text-decoration: none;" href="bibliotheque.php">Bibliothèque</a></div>
    <div class="bout"><a style="color: white; text-decoration: none;" href="mediatheque.php">Médiathèque</a></div>
  </section>
</body>

</html>