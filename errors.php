<!DOCTYPE html>
<html lang="en">
<head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>Transaction Failed</title>
       <link rel = "stylesheet" href ="style.css">
</head>
<body onload="openPopup()">
    <div class="container">
     <div class="popup"id ="popup">
       <img src="error.jpg">
       <h1>Ooooooops!!!!!</h1>
       <p>Transaction failed! Check your transaction details and try again. Thanks!</p>
       <button type = "button" onclick="openFile()">Retry the transaction</button>
     </div>  
    </div>

    <script>
       let popup=document.getElementById("popup");

       function openPopup()
       {
              popup.classList.add("open-popup");
       }

       function closePopup()
       {
              popup.classList.remove("open-popup");
       }
       function openFile()
       {
              closePopup();
              window.location.href= "index.php";
       }
    </script>
    
</body>
</html>