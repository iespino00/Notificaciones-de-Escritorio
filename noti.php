<?php 
 $ipphp = isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : '';
 echo '<script>var ip= "'.$ipphp.'";</script>';

?>
<head>
 <meta charset="utf-8">
 <title>Ejemplo de notificaciones</title>
</head>
<body>
 <button onclick="notificar();" >Enviar notificación</button>
 
 <script>
console.log(ip);
 if(Notification.permission !== "granted")
 {
 Notification.requestPermission();
 }

 document.cookie ='notification='+ip+'; max-age=3600; path=/';
// document.cookie = "notification=; max-age=0; path=/";
 
 function notificar()
 { 
 	console.log(Notification.permission);
	 if(Notification.permission !== "granted")
	   {

	    Notification.requestPermission();
	   } 
	    else{
			 var notificacion = new Notification("Notificación",
			 	{
				 icon: "log.png",
				 body: "Notificación de Prueba, tu IP es :"+ip
			 	}
			 );
			 
			 notificacion.onclick = function()
			 		{
			 		window.open("https://github.com/iespino00");
			 		}
	       }
 }
 </script>
</body>
</html>