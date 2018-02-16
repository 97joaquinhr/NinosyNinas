<html>
<?php
    include("html/partials/_header.html");
    
    ?>
    
    <body>
        <div class="container">
        <form>
          <div class="form-group">
            <label for="exampleInputEmail1">Nombre de usuario</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Usuario">
            <small id="emailHelp" class="form-text text-muted">Tu Login</small>
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Contraseña</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Contraseña">
            <small id="emailHelp" class="form-text text-muted">Tu contraseña</small>
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    </body>

<?php
    include("html/partials/_footer.html");
    ?>

</html>