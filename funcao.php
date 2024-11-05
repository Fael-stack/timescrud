<?php

$data_atual=date('d/m/y');

function funcao_data($data){
    return date("d/m/Y", strtotime($data));
}


