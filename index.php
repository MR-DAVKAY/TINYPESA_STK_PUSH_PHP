<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Lipa Davkay online</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel= "stylesheet" type="text/css"href="style.css">
</head>
<body>
<div id="form">

              <h3>VELELAZE SOFTWARES</h3>
              <form name="form"  action= "tinypesa.php" method ="POST"onsubmit ="return isvalid();"></br>
                
                     <label><h6>Amount:</label>
                     <input type="text" id="amount"placeholder="Amount eg 10" name="amount" required></br></br>
                     <label><h6>Phone number</label>
                     <input type="phone" id="phone" placeholder= "0712345678" name="phone" required></br></br>
                     <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
      <label class="form-check-label" for="invalidCheck">
        Confirm payment details
      </label><br>
      
    </div>
  </div>
                     <input type="submit" id="btn"value="Make Payment" name="submit">


                    </form>
                 
</body>
</html>
