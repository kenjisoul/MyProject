
<form method = "POST" action = "acces.php" align = "center">
    <div class = "form-group">
        <label for = "email">Username:</label>
        <input class = "form-control" type = "Text" name = "Username" placeholder = "username">


    </div>
    <div class = "form-group">
        <label for = "pwd">Password:</label>
        <input class = "form-control" type = "password" name = "Password" placeholder = "password" id = "pwd">


    </div>
    <button type = "submit" class = "btn btn-default" name = "enviar" value = "login">Submit</button>
    <button type = "button" class = "btn btn-default" name = "enviar" value = "Register" onclick = "window.location.href = './adduserM.html'">Register</button>

</form>

