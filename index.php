
<!DOCTYPE html>
<html lang="es">
  <head>
    <title>
      VacacionesVE, Calculo de vacaciones para Venezuela
    </title>
    <meta charset="UTF-8">
    <meta name="title" content="EdwinBetanc0urt GitHub Pages">
    <meta name="description" content="EdwinBetanc0urt GitHub Pages">
    <link rel="stylesheet" href="public/bootstrap/css/bootstrap.min.css">
  </head>
  <body>
    <form id="vacacionesVE" name="vacacionesVE" method="post" action="index.php">
      <div class="container">
        <br />
        <h1>VacacionesVE, Calculo de vacaciones para Venezuela.</h1>
        <br />
        <div class="form-row align-items-center">
          <div class="row">
            <div class="form-group col-12 col-sm-6">
              <label for="fechaIngreso">Fecha Ingreso</label>
              <input type="date" id="fechaIngreso" class="form-control" />
            </div>
            <div class="form-group col-6 col-sm-6">
              <label for="antiguedad">Antigüedad (años)</label>
              <input type="number" id="antiguedad" class="form-control" />
            </div>

            <div class="form-group col-3">
              <label for="fechaInicio">Fecha Inicio Vacacional</label>
              <input type="date" id="fechaInicio" class="form-control" />
            </div>
            <div class="form-group col-3">
              <label for="fechaFin">Fecha Fin Vacacional</label>
              <input type="text" id="fechaFin" class="form-control" />
            </div>
            <div class="form-group col-4">
              <label for="fechaReingreso">Fecha Reingreso Vacacional</label>
              <input type="date" id="fechaReingreso" class="form-control" />
            </div>

            <div class="form-group col-6">
              <label for="fechaReingreso">
                Periodos a seleccionar para el disfrute vacacional (maximo 2)
              </label>
              <select id="periodos" class="form-control" multiple>
                <option value="">Seleccione una opcion</option>
              </select>
            </div>
            <div class="form-group col-6">
              <label for="diasPeriodo">Dias en el periodo:</label>
              <input type="number" id="diasPeriodo" class="form-control" />
            </div>
          </div>
          <br /><br />
        </div>
      </div>
    </form>

    <!-- <script type="module" src="./index.js"></script> -->
    <script src="public/jquery.min.js"></script>
    <script src="public/bootstrap/js/bootstrap.min.js"></script>
    <script src="public/example.js"></script>
  </body>
</html>