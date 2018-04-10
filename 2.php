<head>
 <meta charset="utf-8">
 <title>Ejemplo de notificaciones</title>
</head>
<body>
 <button onclick="notificar();" >Enviar notificación</button>
 
 <script>

    if  (!("Notification"  in  window))  {   
        alert("Este navegador no soporta notificaciones de escritorio");  
    }  
    else  if  (Notification.permission  ===  "granted")  {
        var  options  =   {
            body:   "Descripción o cuerpo de la notificación",
            icon:   "url_del_icono.jpg",
            dir :   "ltr"
        };
        var  notification  =  new  Notification("Hola :D", options);
    }  
    else  if  (Notification.permission  !==  'denied')  {
        Notification.requestPermission(function (permission)  {
            if  (!('permission'  in  Notification))  {
                Notification.permission  =  permission;
            }
            if  (permission  ===  "granted")  {
                var  options  =   {
                    body:   "Descripción o cuerpo de la notificación",
                    icon:   "logo.jpg",
                    dir :   "ltr"
                };     
                var  notification  =  new  Notification("Hola :)", options);
            }   
        });  
    }

 </script>
</body>
</html>

