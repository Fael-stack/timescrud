<br>

<div class="caixa">
    <h4>Producao</h4>
    <br><br>
    <div>
        <table id="table_id" class="cell-border">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Faixa 1</th>
                    <th>Faixa 2</th>
                    <th>Faixa 3</th>
                    <th>Faixa 4</th>
                    <th>Total</th>
                    <th>Zerar</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($linha = mysqli_fetch_array($consultaCadastros)) {
                    $soma=$linha['faixa1total'] + $linha['faixa2total']  + $linha['faixa3total'] + $linha['faixa4total'];
                    echo '<tr>
                            <td style="word-wrap: break-word">' 
                                . $linha['nome'] . 
                            '</td>';
                    echo '<td> 
                            <form method="post" action="editaFaixa1.php">
                                <select style="display:none" name="id">
                                    <option value="' . $linha['id'] . '"selected>' . $linha['id'] . '</option>
                                <select>
                                <button type="submit" class="btn btn-outline-dark" style="border:none; color: green">
                                    <i class="bi bi-plus-circle-fill"></i>
                                </button>
                                <p>' . $linha['faixa1qnt'] . '/' . $linha['faixa1total'] . '</p>
                            </form>
                    </td>';

                    echo '<td> 
                            <form method="post" action="editaFaixa2.php">
                                <select style="display:none" name="id">
                                    <option value="' . $linha['id'] . '"selected>' . $linha['id'] . '</option>
                                <select>
                                <button type="submit" class="btn btn-outline-dark" style="border:none; color: green">
                                    <i class="bi bi-plus-circle-fill"></i>
                                </button>
                                <p>' . $linha['faixa2qnt'] . '/' . $linha['faixa2total'] . '</p>
                            </form>
                    </td>';

                    echo '<td> 
                            <form method="post" action="editaFaixa3.php">
                                <select style="display:none" name="id">
                                    <option value="' . $linha['id'] . '"selected>' . $linha['id'] . '</option>
                                <select>
                                <button type="submit" class="btn btn-outline-dark" style="border:none; color: green">
                                    <i class="bi bi-plus-circle-fill"></i>
                                </button>
                                <p>' . $linha['faixa3qnt'] . '/' . $linha['faixa3total'] . '</p>
                            </form>
                    </td>';

                    echo '<td> 
                            <form method="post" action="editaFaixa4.php">
                                <select style="display:none" name="id">
                                    <option value="' . $linha['id'] . '"selected>' . $linha['id'] . '</option>
                                <select>
                                    <button type="submit" class="btn btn-outline-dark" style="border:none; color: green">
                                        <i class="bi bi-plus-circle-fill"></i>
                                    </button>
                                    <p>' . $linha['faixa4qnt'] . '/' . $linha['faixa4total'] . '</p>
                            </form>
                    </td>';

                  echo '<td> 
                            R$ '.$soma.'
                    </td>';

                    echo '<td> 
                            <form method="post" action="zerar.php">
                                <select style="display:none" name="id">
                                    <option value="' . $linha['id'] . '"selected>' . $linha['id'] . '</option>
                                <select>
                                <button type="submit" class="btn btn-outline-dark" style="border:none; color: red">
                                    <i class="bi bi-file-arrow-down-fill"></i>
                                </button>
                            </form>
                    

                    </td></tr>';
                }
                ?>
            </tbody>
        </table>
    </div>
</div>