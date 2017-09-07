<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>



    <!-- <form  action="index.php" method="post">

    <p>
    <input type="password" name="psw">
    <input type="submit" value="Valider" />
    </p>
    </form> -->


    <?php



    if (isset($_POST['psw']) AND $_POST['psw'] != 'Kangourou')
     {
       ?>
       <form  action="index.php" method="post">

       <p>
       <input type="password" name="psw">
       <input type="submit" value="Valider" />
       </p>
     </form>
     <?php


      //  echo 'Zone interdite d\'acces, Veuillez-vous indentifiez !!!';
    }
    else {


       echo 'Bienvenu ! Vous pouvez desormais avoir acces a nos infos secrets';


    }
     ?>



  </body>
</html>
