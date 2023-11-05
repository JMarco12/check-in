<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <section class="d-flex">
    <h1 >
      soplamonda
    </h1>
    <p >Lorem ipsum dolor sit amet consectetur, adipisicing elit. Tempora pariatur voluptate, non. Iure explicabo sequi, praesentium iste possimus cumque repudiandae ipsum reprehenderit, sint quos accusantium, ea reiciendis, ullam. Sapiente, vel.</p>
  </section>
  <section class="d-flex">
    <div class="estamonda">
      <table class="table table-bordered">
        <tbody>
          <tr>
            <th scope="col">A1</th>
            <th scope="col">B1</th>
            <th scope="col">C1</th>
            <th scope="col">D1</th>
          </tr>
          <tr>
            <th scope="col">A1</th>
            <th scope="col">B1</th>
            <th scope="col">C1</th>
            <th scope="col">D1</th>
          </tr>
          <tr>
            <th scope="col">A1</th>
            <th scope="col">B1</th>
            <th scope="col">C1</th>
            <th scope="col">D1</th>
          </tr>
          <tr>
            <th scope="col">A1</th>
            <th scope="col">B1</th>
            <th scope="col">C1</th>
            <th scope="col">D1</th>
          </tr>
          <tr>
            <th scope="col">A1</th>
            <th scope="col">B1</th>
            <th scope="col">C1</th>
            <th scope="col">D1</th>
          </tr>
          <tr>
            <th scope="col">A1</th>
            <th scope="col">B1</th>
            <th scope="col">C1</th>
            <th scope="col">D1</th>
          </tr>
          <tr>
            <th scope="col">A1</th>
            <th scope="col">B1</th>
            <th scope="col">C1</th>
            <th scope="col">D1</th>
          </tr>
          <tr>
            <th scope="col">A1</th>
            <th scope="col">B1</th>
            <th scope="col">C1</th>
            <th scope="col">D1</th>
          </tr>
          <tr>
            <th scope="col">A1</th>
            <th scope="col">B1</th>
            <th scope="col">C1</th>
            <th scope="col">D1</th>
          </tr>
          <tr>
            <th scope="col">A1</th>
            <th scope="col">B1</th>
            <th scope="col">C1</th>
            <th scope="col">D1</th>
          </tr>

        </tbody>
      </table>
    </div>
    <div class="estamonda">
      <table class="table table-bordered">
        <tbody>
          <tr>
            <th scope="col">A1</th>
            <th scope="col">B1</th>
            <th scope="col">C1</th>
            <th scope="col">D1</th>
          </tr>
          <tr>
            <th scope="col">A1</th>
            <th scope="col">B1</th>
            <th scope="col">C1</th>
            <th scope="col">D1</th>
          </tr>
          <tr>
            <th scope="col">A1</th>
            <th scope="col">B1</th>
            <th scope="col">C1</th>
            <th scope="col">D1</th>
          </tr>
          <tr>
            <th scope="col">A1</th>
            <th scope="col">B1</th>
            <th scope="col">C1</th>
            <th scope="col">D1</th>
          </tr>
          <tr>
            <th scope="col">A1</th>
            <th scope="col">B1</th>
            <th scope="col">C1</th>
            <th scope="col">D1</th>
          </tr>
          <tr>
            <th scope="col">A1</th>
            <th scope="col">B1</th>
            <th scope="col">C1</th>
            <th scope="col">D1</th>
          </tr>
          <tr>
            <th scope="col">A1</th>
            <th scope="col">B1</th>
            <th scope="col">C1</th>
            <th scope="col">D1</th>
          </tr>
          <tr>
            <th scope="col">A1</th>
            <th scope="col">B1</th>
            <th scope="col">C1</th>
            <th scope="col">D1</th>
          </tr>
          <tr>
            <th scope="col">A1</th>
            <th scope="col">B1</th>
            <th scope="col">C1</th>
            <th scope="col">D1</th>
          </tr>
          <tr>
            <th scope="col">A1</th>
            <th scope="col">B1</th>
            <th scope="col">C1</th>
            <th scope="col">D1</th>
          </tr>

        </tbody>
      </table>
    </div>
  </section>
  <section class="d-flex">
    <h1>Puestos Disponibles</h1>
    <select class="form-select" aria-label="Default select example">
      <option selected>Open this select menu</option>
      <option value="1">One</option>
      <option value="2">Two</option>
      <option value="3">Three</option>
    </select>
  </section>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script>
  function iluminarPorDatos(datos) {
    var ths = document.getElementsByTagName('th');
    for (var i = 0; i < ths.length; i++) {
      for (var j = 0; j < datos.length; j++) {
        if (ths[i].textContent.trim() === datos[j].trim()) {
          ths[i].classList.add('highlighted');
        }
      }
    }
  }
  var esamonda = []
  esamonda.push()
  iluminarPorDatos(esamonda);
</script>

</html>