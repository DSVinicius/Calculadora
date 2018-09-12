<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css.css.css">
		<title>Calculadora</title>
	</head>
	<body>
		<div class="row menu-lateral">
  <div class="col-3">
    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
      <a class="nav-link active" id="v-pills-calculadora-tab" data-toggle="pill" href="#v-pills-calculadora" role="tab" aria-controls="v-pills-calculadora" aria-selected="true">Calculadora</a>
      <a class="nav-link disabled" id="v-pills-conversores-tab" data-toggle="pill" href="#v-pills-conversores" role="tab" aria-controls="v-pills-conversores" aria-selected="false">Conversores</a>
      <a class="nav-link" id="v-pills-fisica-tab" data-toggle="pill" href="#v-pills-fisica" role="tab" aria-controls="v-pills-fisica" aria-selected="false">Física</a>
      <a class="nav-link disabled" id="v-pills-quimica-tab" data-toggle="pill" href="#v-pills-quimica" role="tab" aria-controls="v-pills-quimica" aria-selected="false">Química</a>
    </div>
  </div>
  <div class="col-9">
    <div class="tab-content" id="v-pills-tabContent">
      <div class="tab-pane fade show active" id="v-pills-calculadora" role="tabpanel" aria-labelledby="v-pills-calculadora-tab">
        <?php include "includes/basica/form.php"; ?>
        <?php
      error_reporting(0);
      $resultado = "";
      include "includes/basica/server.php";
      echo "<div class=\"resultado text-monospace\">
        $resultado
      </div>";
      echo "<div class=\"erro text-monospace\">
        $erro
      </div>";
    ?>
      </div>
      <div class="tab-pane fade" id="v-pills-conversores" role="tabpanel" aria-labelledby="v-pills-conversores-tab">
        <nav>
  <div class="nav nav-tabs" id="nav-tab" role="tablist">
    <a class="nav-item nav-link active disabled" id="nav-massa-tab" data-toggle="tab" href="#nav-massa" role="tab" aria-controls="nav-massa" aria-selected="true">Massa</a>
    <a class="nav-item nav-link disabled" id="nav-temperatura-tab" data-toggle="tab" href="#nav-temperatura" role="tab" aria-controls="nav-temperatura" aria-selected="false">Temperatura</a>
    <a class="nav-item nav-link disabled" id="nav-volume-tab" data-toggle="tab" href="#nav-volume" role="tab" aria-controls="nav-volume" aria-selected="false">Volume</a>
  </div>
</nav>
<div class="tab-content" id="nav-tabContent">
  <div class="tab-pane fade show active" id="nav-massa" role="tabpanel" aria-labelledby="nav-massa-tab">...</div>
  <div class="tab-pane fade" id="nav-temperatura" role="tabpanel" aria-labelledby="nav-temperatura-tab">...</div>
  <div class="tab-pane fade" id="nav-volume" role="tabpanel" aria-labelledby="nav-volume-tab">...</div>
</div>
</div>
      <div class="tab-pane fade" id="v-pills-fisica" role="tabpanel" aria-labelledby="v-pills-fisica-tab"><nav>
  <div class="nav nav-tabs" id="nav-tab" role="tablist">
    <a class="nav-item nav-link disabled" id="nav-calorLatente-tab" data-toggle="tab" href="#nav-calorLatente" role="tab" aria-controls="nav-calorLatente" aria-selected="true">Calor Latente</a>
    <a class="nav-item nav-link active" id="nav-calorSensivel-tab" data-toggle="tab" href="#nav-calorSensivel" role="tab" aria-controls="nav-calorSensivel" aria-selected="false">Calor Sensível</a>
  </div>
</nav>
<div class="tab-content" id="nav-tabContent">
  <div class="tab-pane fade" id="nav-calorLatente" role="tabpanel" aria-labelledby="nav-calorLatente-tab">...</div>
  <div class="tab-pane fade show active" id="nav-calorSensivel" role="tabpanel" aria-labelledby="nav-calorSensivel-tab">
    <?php
      include"includes/calorSensivel/form.php";
    ?>
  </div>
</div>
</div>
      <div class="tab-pane fade" id="v-pills-quimica" role="tabpanel" aria-labelledby="v-pills-quimica-tab"><nav>
  <div class="nav nav-tabs" id="nav-tab" role="tablist">
    <a class="nav-item nav-link active disabled" id="nav-molaridade-tab" data-toggle="tab" href="#nav-molaridade" role="tab" aria-controls="nav-molaridade" aria-selected="true">Molaridade</a>
    <a class="nav-item nav-link disabled" id="nav-numeroMols-tab" data-toggle="tab" href="#nav-numeroMols" role="tab" aria-controls="nav-numeroMols" aria-selected="false">Número de Mols</a>
  </div>
</nav>
<div class="tab-content" id="nav-tabContent">
  <div class="tab-pane fade show active" id="nav-molaridade" role="tabpanel" aria-labelledby="nav-molaridade-tab">...</div>
  <div class="tab-pane fade" id="nav-numeroMols" role="tabpanel" aria-labelledby="nav-numeroMols-tab">...</div>
</div>
</div>
    </div>
  </div>
</div>
<script src="jquery-3.3.1.slim.min.js" ></script>
<script src="popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>	</body>
</html>