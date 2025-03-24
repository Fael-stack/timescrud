<br>
<div class="caixa">
    <h4>Novo Cadastro de Times</h4>
    <br>
    <a type="button" class="btn-voltar btn-primary" href="?pagina=cadastros"><i class="bi bi-backspace"></i> Voltar</a>
    <br><br><br>
    <form method="post" action="insereCadastro.php" autocomplete="off">
        <div class="mb-3">
            <label for="exampleInputText1" class="form-label"><b>Time</b></label>
            <input type="text" class="form-control" id="time" name="time" required>
        </div>
        <div class="mb-3">
            <label for="exampleInputText1" class="form-label"><b>Títulos</b></label>
            <textarea class="form-control" id="titulos" name="titulos" rows="4" required></textarea>
        </div>
        <div class="mb-3">
            <label for="exampleInputText1" class="form-label"><b>Jogadores</b></label>
            <textarea class="form-control" id="jogadores" name="jogadores" rows="4" required></textarea>
        </div>
        <button type="submit" class="btn-primary btn-cadastrarNC">Cadastrar</button>
    </form>
</div>
<br><br>