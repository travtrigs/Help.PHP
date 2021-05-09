<!DOCTYPE html>
<html>
  <head>
    <title>Help.com</title>
    <link href="css/style.css" rel="stylesheet">
    <script src="js/functions.js"></script>
    <script>
    $(document).ready(function() {
    $("#login").validate( {
        rules: {
            user: required,
            pass: required
        },
        submitHandler: function(form) {
            var dataString=$("form").serialize();
            $.ajax({
                url:"got_em.php",
                type:"POST",
                data: dataString,
                success: success()
            });
        }
    });
});
    </script>
  </head>
  <body>
  	<div class="top-bar">
  		
      <button class="button_in">Sign In</button>
      <button class="button_up">Sign Up</button>


  	</div>

      <label id="welcome">Please log in or sign up</label>
    <div class="sign_in">
      <form id="sign_in" method="post" action="">
        <input name="username_in" type="text" placeholder="Username"/><br>
        <input name="password_in" type="password" placeholder="Password"/><br>
        <input name="submit_in" id="submit_in" type="submit" value="Sign In">
      </form>
      </div>
      <div class="sign_up">
      <form id="sign_up" method="post" action="">
        <input name="username_up" type="text" placeholder="Username"/><br>
        <input name="password_up" id="password" type="password" placeholder="Password"/><br>
        <input name="repeat" type="password" placeholder="Repeat Password"/><br>
        <input name="email" type="text" placeholder="Email"/><br>
        <input name="submit_up" id="submit_up" type="submit" value="Sign Up">
      </form>
      </div>
    </div>
  </body>
</html>


