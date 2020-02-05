<!DOCTYPE html>
<html>
	<head>
		<title>RPI - Scuola Media Fermi</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>

	<body>

		//--- INSERIRE QUI IL CODICE 



		//--- INSERIRE QUI IL CODICE 


        <script>
            var cliccamiSave = document.getElementById("save");
			
            
			cliccamiSave.addEventListener("click", function()
			{
				var nickName = document.getElementById("nickName").value;
				var mainImage = document.getElementById("mainImage").src;
				setCookie("nickName",nickName,10);
				setCookie("mainImage",mainImage,10);

				alert("i save your personal data "); 

  	        });

			cliccamiImage1.addEventListener("click", function()
			{
				document.getElementById("mainImage").src = "../images/img_avatar2.png";
            });

			cliccamiImage2.addEventListener("click", function()
			{
				document.getElementById("mainImage").src = "../images/img_avatar3.png";
            });

			cliccamiImage3.addEventListener("click", function()
			{
				document.getElementById("mainImage").src = "../images/img_avatar5.png";
            });

			cliccamiImage4.addEventListener("click", function()
			{
				document.getElementById("mainImage").src = "../images/img_avatar6.png";
            });


			function setCookie(cname, cvalue, exdays) {
				var d = new Date();
				d.setTime(d.getTime() + (exdays*24*60*60*1000));
				var expires = "expires="+ d.toUTCString();
				document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
			}

			function getCookie(cname) {
				var name = cname + "=";
				var decodedCookie = decodeURIComponent(document.cookie);
				var ca = decodedCookie.split(';');
				for(var i = 0; i <ca.length; i++) {
					var c = ca[i];
					while (c.charAt(0) == ' ') {
					c = c.substring(1);
					}
					if (c.indexOf(name) == 0) {
					return c.substring(name.length, c.length);
					}
				}
				return "";
			}
			
        </script>
	</body>
</html>

