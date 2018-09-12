<form class="needs-validation formulario" method="POST" novalidate>
  <div class="form-row numeros">
    <div class="mb-4 mr-2">
      <input type="number" name="N1" class="form-control input" id="validationCustom01" placeholder="Primeiro Número" step="0.1" autofocus required>
      <div class="invalid-feedback">
        É necessário inserir <br /> um número
      </div>
    </div>
    <div class="mb-4 mr-2">
      <input type="number" name="N2" class="form-control input" id="validationCustom02" placeholder="Segundo Número" step="0.1" required>
      <div class="invalid-feedback">
        É necessário inserir <br /> um número
      </div>
    </div>
  </div>
<div class="btn-group botoes" role="group">
  <div class="btn-toolbar mb-2" role="toolbar">
  <div class="btn-group" role="group">
    <button type="submit" name="operacao" value="somar" class="btn btn-secondary mr-2 botao">Somar</button>
    <button type="submit" name="operacao" value="subtrair" class="btn btn-secondary mr-2 botao">Subtrair</button>
  </div>
</div>
<div class="btn-toolbar" role="toolbar">
  <div class="btn-group" role="group">
    <button type="submit" name="operacao" value="multiplicar" class="btn btn-secondary mr-2 botao">Multiplicar</button>
    <button type="submit" name="operacao" value="dividir" class="btn btn-secondary mr-2 botao">Dividir</button>
  </div>
</div>
</div>
</form>
<script>
(function() {
  'use strict';
  window.addEventListener('load', function() {
    var forms = document.getElementsByClassName('needs-validation');
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>