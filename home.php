<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Calcular Áreas</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>

<body class="text-danger bg-light">
  <div  class="text-bg-light bg-dark-subtle p-3">
    <h2 class="text-center text-danger m-5">Calcular Áreas</h2>
    <div>
      <div class="container text-center">
        <div class="row align-items-center justify-content-center">
          <div class="col-6 ">

            <form class="border border-dark rounded-2 p-5 bg-secondary-subtle" method="POST">

                <div class="text-start form-check">
                  <input class="form-check-input" type="radio" name="forma" value="retangulo" id="flexCheckDefault">
                  <label class="form-check-label" for="flexCheckDefault">
                    Retângulo
                  </label>
                  <div class="text-center mb-4">
                    <label class="form-label text-dark">Digite a base:</label>
                    <div class="input-group">                      
                      <input type="number" class="form-control" placeholder="Digite a base" name="lado1" aria-label="Input group example" aria-describedby="basic-addon1">
                    </div>
                  </div>
                  <div class="text-center mb-4">
                    <label class="form-label text-dark">Digite a altura:</label>
                    <div class="input-group">                      
                      <input type="number" class="form-control" placeholder="Digite a altura" name="lado2" aria-label="Input group example" aria-describedby="basic-addon1">
                    </div>
                  </div>
                </div>

                <div class="text-start form-check">
                  <input class="form-check-input" type="radio" name="forma" value="triangulo" id="flexCheckDefault">
                  <label class="form-check-label" for="flexCheckDefault">
                    Triângulo
                  </label>
                  <div class="text-center mb-4">
                    <label class="form-label text-dark">Digite a base:</label>
                    <div class="input-group">                      
                      <input type="number" class="form-control" placeholder="Digite a base" name="base" aria-label="Input group example" aria-describedby="basic-addon1">
                    </div>
                  </div>
                  <div class="text-center mb-4">
                    <label class="form-label text-dark">Digite a altura:</label>
                    <div class="input-group">                      
                      <input type="number" class="form-control" placeholder="Digite a altura" name="altura" aria-label="Input group example" aria-describedby="basic-addon1">
                    </div>
                  </div>
                </div>

                <div class="text-start form-check">
                  <input class="form-check-input" type="radio" name="forma" value="circulo" id="flexCheckDefault">
                  <label class="form-check-label" for="flexCheckDefault">
                    Círculo
                  </label>
                  <div class="text-center mb-4">
                    <label class="form-label text-dark">Digite o raio:</label>
                    <div class="input-group">                      
                      <input type="number" class="form-control" placeholder="Digite a raio" name="raio" aria-label="Input group example" aria-describedby="basic-addon1">
                    </div>
                  </div>
                </div>


              <div class="mb-4">
                <button type="submit" class="btn btn-outline-danger mt-3">Calcular</button>
              </div>
              
            </form>
          </div>
          <h1>Resultado</h1>

          <div class="text-danger">

            <?php
              include "functions.php";

              if (empty($_POST["forma"])){
                echo "Selecione uma forma geométrica!";
              }else{
                switch ($_POST["forma"]){
                  case "retangulo":
                    if (empty($_POST["lado1"]) || empty($_POST["lado2"])){
                      echo "Preencha os valores corretamente!";
                    }else{
                      CalcularArea();
                    }
                    break;
                  
                  case "triangulo":
                    if (empty($_POST["base"]) || empty($_POST["altura"])){
                      echo "Preencha os valores corretamente!";
                    }else{
                      CalcularArea();
                    }
                    break;
  
                  case "circulo":
                    if (empty($_POST["raio"])){
                      echo "Preencha os valores corretamente!";
                    }else{
                      CalcularArea();
                    }
                    break;
                }
              }
              
            ?>

            <footer class="bg-dark-subtle text-dark mt-5">Augusto Laurino RM-93498 / Caio Zanardo RM-95125</footer>
          </div>
        </div>
      </div>
    </div>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</body>

</html>