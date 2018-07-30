<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>exo6</title>
  </head>
  <body>
    <p>
      <?php
      function name($firstname, $lastname, $age){
        return 'Bonjour '.' '. $firstname .' '. $lastname . ' '. ' , tu as ' . $age . ' ans.';
      }
      echo name('jardin','cyril','18');
       ?>
    </p>
  </body>
</html>
