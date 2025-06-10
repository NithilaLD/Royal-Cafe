<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin login</title>


  <!-- 
    - custom css link
  -->
  <link rel="stylesheet" href="./assets/css/style.css">

  <!-- 
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Comforter+Brush&family=Montserrat:wght@500;600;700;800&family=Poppins:wght@400;500;600;700&display=swap"
    rel="stylesheet">
</head>

<body id="top">

<center>
<main>
    <article>

      <!--HERO SECTION royalcafe  -->

      <section class="hero-login " id="home" >
        <div style="background-color: aliceblue;" class="container outbox btn-secondary"  >

          <h4 class="h4 hero-title">Wellcome to admin panel</h4>
          <h1 class="h1 hero-title">Royal Cafe Sri lanka</h1>


          <p class="hero-text">
            Enter the Admin ID And Password to login
          </p>

          <form action="admin.php" method="post" class="login-form ">

            <table class="btn btn-primary2">
              
              <tr>
                <div class="input-wrapper">
                  <td> 
                    <label for="Admin_ID" class="input-label">User Name* &nbsp;&nbsp;&nbsp;</label>
                  </td>
                  <td> <input type="text" name="Admin_ID" id="Admin_ID" required placeholder="Enter User Name" class="input-field"> </td>

                  </td>
                </div>   
              </tr>

              

                <tr>
                <div class="input-wrapper">
                    <td> <label for="password" class="input-label">Password*&nbsp;&nbsp;&nbsp;</label> </td>
    
                    <td> <input type="password" name="password" id="people" required placeholder="Enter The Password" class="input-field"> </td>
                </div>
                </tr>

          
 
             </table>
          <br>

            <div class="btn-group">
                 <button type="reset" class="btn btn-primary" onclick="window.location.href='javascript:history.back()'">Go Back</button>
  
                <button type="submit" class="btn btn-secondary" >Login now</button>
            </div>
          
          
       
         </form>
        
        </div>

      </section>

      </article>
  </main>

  </center> 




   <!-- 
    - custom js link
  -->
  <script src="./assets/js/script.js"></script>

  <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>