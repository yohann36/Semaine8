<!DOCTYPE html>                  
<html>
    <head>        
                        
        <meta charset="utf-8"/>   
        
        <!--S'assure que EI est à jour-->
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        
        <!--Rendu sans zoom sur les appareil mobile-->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <meta name="description" content="CV">
        <meta name="author" content="Yohann ALAPETITE">
        
        <!--link vers bootstrap-->
        <link href="biblio/bootstrap.css" rel="stylesheet" >
        
        
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
      
      
        <title>CV Interactif</title>
       
    </head>
  <body>
    <p>
      <?php

  echo 'Bonjour, ' . $_POST ['prenom'] . ' ' . $_POST['nom'] . ', votre commentaire : ' . $_POST['comment'] . ' a bien été enregister.';
 
?>
</p>
  </body>  
  
  
  </html>


