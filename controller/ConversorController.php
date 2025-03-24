<?php
require_once 'model/ConversorModel.php';

class ConversorController {
    public function handleRequest() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $valor = floatval($_POST['valor']);
            $moeda = $_POST['moeda'];

            $model = new ConversorModel();
            $resultado = $model->converter($valor, $moeda);

            include 'view/resultado.php';
        } else {
            include 'view/form.php';
        }
    }
}
