<!DOCTYPE html>
<html lang="es">
<head>
    <title>Internships/Full-time Job in Oracle</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./estilos/principal.css" type="text/css">
</head>
<body>
    <form id="registroUsuario" name="registroUsuario"
    action="./paginas/respuesta.php" enctype="multipart/form-data"
    method="post" class="form-registro">
    <h1>Internships/Full-time Job in Oracle</h1>
    <h2 class="form-tittle">Registro de aplicación</h2>    
    <div class="container">
        <label for="Posicion">Posición de aplicación </label><br>
        <div class="selectPais">
        <select name="Posicion[]" id="Posicion" multiple required>
        <option value=swef>Fulltime-Software Engineer</option>
        <option value=pmf>Fulltime-Project manager</option> 
        <option value=swei>Internship-Software Engineer</option>
        <option value=pmi>Internship-Project manager</option>    
        </select>
        <span class="flecha"></span>
        </div>
    </div>

    <div class="container">
      <label for="anio">Escoge al menos un curso de tu agrado: </label><br>
      <select name="anio" id="anio" required>
        <option value=2021>2021</option>
        <option value=2022>2022</option>
        <option value=2023>2023</option>
        <option value=2024>2024</option>
        <option value=2025>2025</option>
        <option value=2026>2026</option>
        <option value=2027>2027</option>
        <option value=2028>2028</option>
        <option value=2029>2029</option>
        <option value=2030>2030</option>
        <option value=2031>2031</option>
        <option value=2032>2032</option>
        <option value=2033>2033</option>
        <option value=2034>2034</option>
        <option value=2035>2035</option>
        <option value=2036>2036</option>
        <option value=2037>2037</option>
        <option value=2038>2038</option>
        <option value=2039>2039</option>
        <option value=2040>2040</option>
      </select>
    </div>

    <div class="container">
        <label for="nombreUsuario">Nombre Completo </label>    
        <input type="text" id="nombreUsuario" name="nombreUsuario"
        placeholder="Nombre(s) Apellido(s)"
        maxlength="35" size="50"
        retured><br><br/>
    </div>
    
    <div class="container">
        <label for="correo">Correo electrónico: </label>
        <input type="email" id="correo" name="correo" size="40" required><br><br/>
    </div>
    
    <div class="container">
        <label for="FechaNacimiento">Fecha de nacimiento</label>    
        <input type="date" id="FechaNacimiento" name="FechaNacimiento"
        value="2020-01-01" min="1900-01-01" max="2100-12-31"><br/><br/>
    </div>

    <div class="container">
        <label for="edad"> Años de experiencias </label>
        <input type="number" name="edad" id="edad"
        placehorder="Deja vacio si no tiene"
        maxlength="60" size="65" min="0" max="100" step="1" required><br><br/>
    </div>
   
    <div class="container">
    <fieldset>
        <legend>Género</legend>
        
        <input id="Hombre" name="sexo" value="Hombre" type="radio">
        <label for="Hombre">Hombre</label>
        <input id="Mujer" name="sexo" value="Mujer" type="radio">
        <label for="Mujer">Mujer</label>        
        <input id="SinEspecificar" name="sexo" value="SinEspecificar" type="radio">           
        <label for="SinEspecificar">SinEspecificar</label>
    </fieldset><br><br/>
    </div>
    
    <div class="container">
        <label for="PriFechaDis">Una fecha disponible para la entrevista</label>    
        <input type="date" id="PriFechaDis" name="PriFechaDis"
        value="2022-02-01" min="2020-01-01" max="2100-12-31"><br/><br/>
    </div>
    
    <div class="container">
        <label for="SegFechaDis">Otra fecha disponible para la entrevista</label>    
        <input type="date" id="SegFechaDis" name="SegFechaDis"
        value="2022-01-15" min="2020-01-01" max="2100-12-31"><br/><br/>
    </div>
    
    <input type="submit" name="btnEnviar" value="Enviar datos"> 
    </form>   
</body>

</html>