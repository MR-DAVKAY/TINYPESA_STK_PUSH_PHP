<!DOCTYPE html>
<html lang="en">
<head>
       <meta charset="UTF-8">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>Complete Payment</title>
       <link rel = "stylesheet" href ="style.css">
</head>
<body onload="openPopup()">
    <div class="container">
     <div class="popup"id ="popup">
       <img src="tick.png">
       <h1>Thank You!!</h1>
       <p>Payment to Davkay has been initiated successfully. Check your phone and complete the transaction. Thanks!</p>
       <button type = "button" onclick="openFile()">DONE</button>
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