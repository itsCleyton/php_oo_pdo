<?php
include_once 'app/partials/header.php';
?>

<div class="container">
    <div class="row input-group" id="formPaciente">
        <h2>Nova inclusão</h2>
        <!-- <div class="form-check">
        <input class="form-check-input" type="radio" name="radioPaciente" id="radioPaciente">
        <label class="form-check-label" for="radioPaciente">
            Paciente
        </label>
        </div>
        <div class="form-check">
        <input class="form-check-input" type="radio" name="radioPaciente" id="radioUsuario">
        <label class="form-check-label" for="radioUsuario">
            Usuário do sistema
        </label>
        </div>
        <div class="form-check">
        <input class="form-check-input" type="radio" name="radioPaciente" id="radioUnidade">
        <label class="form-check-label" for="radioUnidade">
            Unidade
        </label>
        </div> -->
        <div class="container mt-4 py-4">
            <div class="d-flex justify-content-around">
            <a href="#" class="btn btn-primary">Atendimento</a>
            <a href="#" class="btn btn-primary">Usuário</a>
            <a href="#" class="btn btn-primary">Paciente</a>
            </div>
        </div>
        <form action="" method="post" class="form form-control">
            <div class="row input-group">

            <div class="col-sm-6">
              <label for="nome" class="form-label">Nome</label>
              <input type="text" class="form-control" id="nome" placeholder="Nome completo" value="" required="">
            </div>
            <div class="col-sm-6">
              <label for="dtNasc" class="form-label">Data de Nascimento</label>
              <input type="text" class="form-control" id="dtNasc" placeholder="" value="" required="">
            </div>
            <button type="submit" class="my-4 btn btn-success btn-sm text-white col-md-4">Salvar</button>
            </div>
        </form>

    </div>
</div>

<?php
include_once 'app/partials/footer.php';
?>