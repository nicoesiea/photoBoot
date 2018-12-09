<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<title>30 ans Debo photo</title>
		<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
		<style type="text/css">
			#body{
				background-repeat: no-repeat;
			}
		</style>
	</head>
	<body id="body">
		<script src="./jquery-3.2.1.js"></script>
	    <script>
			 $( document ).ready(function() {
			 
				var i = 0;
				var stop = true;
				var src = './img/';
				var imgs = [];

				function run () {
					console.log("Start RUN i="+i);
					if (stop === false){
						if (imgs[i] === undefined || imgs[i] === "undefined" || imgs[i] === null || imgs[i] === "" || i === imgs.length + 1){
				        		stop = true;
						    	loadPhoto();
				        }
				        else {
						$('#body').fadeOut(2000, function () {//on cache l'ancien fond
				        	$(this).css('background-image', 'url("'+ src + imgs[i] + '")').fadeIn(2000, run); //apparition du nouveau fond dès que l'ancien est caché
				        	i = i+1;
					    });
					   }
					    
					}
				};

				function loadPhoto(){
					console.log("Load Photo.....")
					$.get("./webservice/getFileNames.php")
					.done(function( data ) {
						data = data.split('"')[1];
						imgs = data.split(',');
						console.log(imgs);
						i = 0;
						stop = false;
						run();
					
					});
				}
				loadPhoto();

			});
	    </script>

		<div>

	    </div>
  	</body>
</html>

