<!DOCTYPE html>
<html>
  <!--------------------------CSS------------------------------------->
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400&display=swap" rel="stylesheet">
    <style>
      /* CSS for Login Form */
      body {
        background-color: #e6be8a;
        background-image: linear-gradient(315deg, #e6be8a 0%, #d4bda4 74%);
        font-family: 'Poppins', sans-serif;
      }
      .logo {
        margin-top: 1.5rem;
        margin-bottom: 1.5rem;
        max-width: 160px;
      }
      form {
        display: flex;
        flex-direction: column;
        align-items: center;
        margin: auto;
        padding: 1rem;
        background-color: #faf2e1;
        border-radius: 10px;
        width: 30rem;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background-color: rgba(255, 255, 255, 0.5);
        opacity: 0.9;
        box-shadow: 0 8px 20px -6px rgba(0, 0, 0, 0.5);
      }
      h2 {
        text-align: center;
        font-size: 2rem;
        color: #444;
        margin-bottom: 1.5rem;
        text-shadow: 0px 1px 3px rgba(0, 0, 0, 0.3);
      }
      label {
        font-size: 1.2rem;
        color: #444;
        margin-bottom: 0.5rem;
        display: block;
        text-align: left;
        width: 100%;
      }
      input[type="text"],
      input[type="password"] {
        width: 93%;
        padding: 1rem;
        margin-bottom: 1rem;
        display: inline-block;
        border: none;
        border-radius: 5px;
        background-color: #fff;
        box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.3);
      }
      button[type="submit"] {
        background-color: #ffd700;
        color: white;
        padding: 1rem 2rem;
        margin-top: 1rem;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 1.2rem;
        transition: background-color 0.2s ease;
        text-shadow: 0px 1px 3px rgba(0, 0, 0, 0.3);
      }
      button[type="submit"]:hover {
        background-color: #ffdb58;
      }
      input[type="checkbox"] {
        margin-top: 1rem;
        margin-right: 0.5rem;
      }
      .container {
        width: 100%;
        display: flex;
        flex-direction: column;
      }
      .error {
        color: red;
        margin-top: 1rem;
        margin-bottom: 0;
        text-align: center;
        font-size: 1.2rem;
        text-shadow: 0px 1px 3px rgba(0, 0, 0, 0.3);
      }
    </style>
  </head>
  <!--------------------------End of CSS------------------------------------->

  <body>
    <form action="login_controller.php" method="post">
      <img class="logo" src="BM-LOGO1.png" alt="Your Logo">
        <h2>Login Form</h2>
        <?php if (isset($_GET['error'])){?>
            <p class="error"><?php echo $_GET['error']; ?></p>
        <?php } ?>
        <div class="container">
            <label for="username"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="username" required />

            <label for="password"><b>Password</b></label>
            <input
                type="password"
                placeholder="Enter Password"
                name="password"
                required
            />
            <button type="submit">Login</button>
            <label>
                <input type="checkbox" checked="checked" name="remember" /> Remember me
            </label>
        </div>
    </form>
  </body>
</html>
