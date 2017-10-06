<?php
    class User{
      public $username;
      public $password; 
        public $token;
    }
    
?>

<?php
echo '<!doctype html>
<html>
  <head>
    <title>Accueil</title>
     <meta charset="utf-8" />
    <link rel="stylesheet" type="text/css" href="css/authentification.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
  </head>
  
  <body>
    <div id="login">
      <img src="images/logoProject.png" name="Logo" alt="Logo"> 
      <h1> Welcome </h1> <br />
      <form>
        <input id="username" type="text"  placeholder="Username" /><br />
        <input id="password" type="password"  placeholder="Password"/><br />
        <input id="submit"  type="button" value="Login"/>
      </form>
      <p id="resultat"> </p> '; ?>
      <script>
      
        $(document).ready(function(){

        $('#submit').click(function(){
          

      $.ajax({
       url : 'http://vps464005.ovh.net:3000/auth/login', 
       type : 'POST', 
       data : '{"username":"' + $("#username").val() + '","password":"' + $("#password").val()+'"}',

        contentType: "application/json; charset=utf-8",
        dataType: "json",

        statusCode: {
      200: function() {
        document.location.href="formulaire.php";
       },
      401:function(){
        document.getElementById('resultat').innerHTML = "Identifiants invalides";
       },
       400:function(){
        document.getElementById('resultat').innerHTML = "Identifiant vide";
       }
     },

       success : function(response) {
          
          /*
          $user = new User();
          $jsonObject = json_decode(response);

          $user->username = $jsonObject->{'username'};
          $user->password = $jsonObject->{'password'};
          $user->token = $jsonObject->{'token'};

          console.log('user is ' + $user->username);
          */
       },
       error : function(resultat, statut, erreur){


       },
       complete : function(resultat, statut){

       }
    });

    });

});

</script>
<a href="inscription.php">Register ...</a>
 </div> 
  </body>
</html>
 