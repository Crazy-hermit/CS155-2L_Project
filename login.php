<!DOCTYPE html>
<html>
  <!--------------------------Temporary CSS------------------------------------->
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <style>
      body {
        font-family: Arial, Helvetica, sans-serif;
      }
      form {
        border: 3px solid #f1f1f1;
      }

      input[type="text"],
      input[type="password"] {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        box-sizing: border-box;
      }

      button {
        background-color: #04aa6d;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        cursor: pointer;
        width: 100%;
      }

      button:hover {
        opacity: 0.8;
      }

      .cancelbtn {
        width: auto;
        padding: 10px 18px;
        background-color: #f44336;
      }

      .container {
        padding: 16px;
      }

      span.password {
        float: right;
        padding-top: 16px;
      }

      @media screen and (max-width: 300px) {
        span.password {
          display: block;
          float: none;
        }
        .cancelbtn {
          width: 100%;
        }
      }
    </style>
  </head>
  <!--------------------------End of Temporary CSS------------------------------------->

  <body>
    <form action="login_controller.php" method="post">
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
