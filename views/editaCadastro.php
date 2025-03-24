<?php

include 'db.php';

$id = $_POST['id'];

while ($linha = mysqli_fetch_array($consultaCadastros)) {
    if ($linha['id'] == $_POST['id']) {
        ?>

        <br>
        <div class="caixa">
            <h4>Editar Cadastro de Times</h4>
            <br>
            <a type="button" class="btn-voltar btn-primary" href="?pagina=cadastros"><i class="bi bi-backspace"></i> Voltar</a>
            <br><br><br>
            <form method="post" action="processaEditaCadastro.php" autocomplete="off">
                <input value="<?php echo $linha['id'] ?>" type="text" class="form-control" id="id" name="id"
                    style="display:none;">
                <div class="mb-3">
                    <label for="exampleInputText1" class="form-label"><b>Time</b></label>
                    <input value="<?php echo $linha['time'] ?>" type="text" class="form-control" id="time" name="time" required>
                </div>
                <div class="mb-3">
                    <label for="exampleInputText1" class="form-label"><b>Títulos</b></label>
                    <textarea class="form-control" id="titulos" name="titulos" rows="4"
                        required><?php echo $linha['titulos']; ?></textarea>
                </div>
                <div class="mb-3">
                    <label for="exampleInputText1" class="form-label"><b>Jogadores</b></label>
                    <textarea class="form-control" id="jogadores" name="jogadores" rows="4"
                        required><?php echo $linha['jogadores']; ?></textarea>
                </div>
                <br>
                <button type="submit" class="btn-cadastrarNC btn-primary">Salvar</button>
            </form>
        </div>
        <br><br>

        <?php
    }
}
?>