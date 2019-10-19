<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="css/materialize.css">
    <link rel="stylesheet" href="css/estilos.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  </head>
  <body background="img/books.jpg">
    <nav id="Nav">

    </nav>

    <br><br>


    <div class="container" id="prim">
      <div class="row">
        <div class="col s10">
          <div class="container" id="sec">
            <form class="" action="guardar.php" method="post" autocomplete="off" >

    <img src="img\LLL.jpg" alt="" class="pantallaprincipal responsive-img" id="notas">
    <br><br>
              <label form="nombre" style="color: white"> Nombre:
                  <input type="text" name="nombre" placeholder="" id="cont1">
              </label>
              <label form="apellido" style="color: white"> Apellido:
                  <input type="text" name="apellido" placeholder="" id="cont1">
              </label>
              <label form="grado" style="color: white" id="grado"> Grado:
                  <input type="text" name="grado" placeholder="" id="cont2">
              </label>
              <label form="asignatura" style="color: white"> Asignatura:
                  <input type="text" name="asignatura" placeholder="" id="cont3">
              </label>


                <table class="centered" id="table">
                        <thead>
                          <tr id="col1">
                              <th>Id</th>
                              <th>A</th>
                              <th>A2</th>
                              <th>A3</th>
                              <th>A4</th>
                              <th>PA</th>
                              <th>PF</th>
                          </tr>
                        </thead>

                        <tbody>
                          <tr id="col2">
                            <td><input type="number" name="Id"  id="cube"></td>
                            <td><input type="number" name="A"   id="cube"></td>
                            <td><input type="number" name="A2"  id="cube"></td>
                            <td><input type="number" name="A3"  id="cube"></td>
                            <td><input type="number" name="A4"  id="cube"></td>
                            <td><input type="number" name="PA"  id="cube"></td>
                            <td><input type="number" name="PF"  id="cube"></td>
                          </tr>
                        </tbody>
                </table>
                          <br>
              <input type="submit" value="Guardar" class="btn btn-primary">
            </from>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
