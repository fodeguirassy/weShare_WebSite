


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
  			<form  enctype="multipart/form-data" method="post" id="fileinfo">
  				<input id="title" type="text" placeholder="Titre"> <br>
  				<input id="matiere" type="text" placeholder="Matière" name="matiere"> <br>
  				<input id="description" type="textarea" placeholder="Description" name="desc"> <br>
  				<input id="file" type="file" name="fichier" accept="application/pdf"> <br>
  				<input class="upload" id="submit" type="button" value="Valider" name="valider"> <br>
  				<input  id="submit" type="button" value="Déconnexion" name="déco" onclick="deconnect()">
  				<div id="output"></div>
  			</form>
  		</div>	 
  		

  	
  		<script>
  			$(document).ready(function(){
			//var form = document.forms.namedItem("fileinfo");
			$(".upload").click(function(){
			var titre = $("#title").val();
          	var matiere = $("#matiere").val();
          	var description = $("#description").val();
          	var filepath = $("#file").val();
          	var pieces = filepath.split(/[\s,]+/);
          	var file = pieces[pieces.length-1];
          	alert(file);

          	var formData = new FormData($("#fileinfo")[0]);
          	var url = "http://vps464005.ovh.net:3000/contents/"
          	$.ajax({
          		url : url,
          		type : "POST",
          		dataType : "json",
          		data : '{"file : "' + formData + '"filename : "' + file + '"}"',// '{"file" : { + filename" :' + file +'"}', 
    	   		processData : false,
          		contentType : false,
          		success : function(result){
          			console.log(result);


          		},
          		error : function(err){
  					console.log(formData);
          			console.log(err);
          		}
          	});

         
    		//var form = document.forms.namedItem("fileinfo");

			//var
    		//	oOutput = document.getElementById("output"),
    		//	oData = new FormData(document.forms.namedItem("fileinfo"));

  			//oData.append("CustomField", "This is some extra data");

  			//var oReq = new XMLHttpRequest();

  		//	$header = array();
		//	$header[] = 'Content-length: 0';
		//	$header[] = 'Content-type: application/json';
		//	$header[] = 'Authorization: eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ0b2tlbklkIjoiNzRiYmNkNDAtYWEwNi0xMWU3LTg4MDctZjllYzcwMDc1MDNmIiwiaWF0IjoxNTA3MjMzMDM2LCJleHAiOjE1MDczMTk0MzZ9.zjZWCLzyoF7WnCD8Awsk7aqp6ARO9WT-OuhTRPrGW38';
		/*

  			oReq.open("POST", "http://vps464005.ovh.net:3000/contents/", true);
  			oReq.onload = function(oEvent) {
    
    		if (oReq.status == 200) {
      			oOutput.innerHTML = "Uploaded!";
    		} else {
     	 		oOutput.innerHTML = "Error " + oReq.status + " occurred uploading your file.<br \/>";
   			}
  		};
		oReq.send(oData);*/
		return false; 

       	});

	}); 
      
  	function deconnect(){
  		document.location = "index.php";
  	}

  	</script> 
   </body>
</html>

