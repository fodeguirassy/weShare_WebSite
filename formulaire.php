
<html>
<head>
<title>Accueil</title>
  <link rel="stylesheet" type="text/css" href="css/authentification.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
</head>
<body>
 <div> 
  <img src="images/logoProject.png" name="Logo" alt="Logo"> 
  <h1> Création article </h1>
  <form action="formulaire.php" method="post">
  	<input id="title" type="text" placeholder="Titre"> <br>
  	<input id="matiere" type="text" placeholder="Matière" name="matiere"> <br>
  	<input id="description" type="textarea" placeholder="Description" name="desc"> <br>
  	<input id="file" type="file" name="fichier" accept="application/pdf"> <br>
  	<input class="upload" id="submit" type="button" value="Valider" name="valider"> <br>
  	<input  id="submit" type="button" value="Déconnexion" name="déco" onclick="deconnect()">
  </form>
  </div>	 
  <script>
  	
  	$(document).ready(function(){

          $('.upload').click(function(){
			
          	$titre = $("#title").val();
          	$matiere = $("#matiere").val();
          	$description = $("#description").val();
          	$file = $("#file").val();

         	// alert($titre + "  " + $matiere + "  " + $description + "  " + $file );

         	//$data = new FormData();
			//jQuery.each(jQuery('#file')[0].files, function(i, file) {
    		//data.append('file-'+i, file);
		//});		


    		$.ajax({
        		
        		url: window.location.pathname,
        		type: 'POST',
        		contentType: "application/json; charset=utf-8",
        		dataType: 'json',
        		data: '{"titre":"' + $titre + '","matiere":"' + $matiere +'","description":"'+  $description  +'","file":"'+ $file +'}' ,
        		success: function(response){
        		alert(response);		
            	//alert(data)	
        	},
        	    
    	});

    return false; 

       	});

	}); 
      
  	function deconnect(){
  		document.location = "index.html";
  	}



  </script>
</body>
</html>

