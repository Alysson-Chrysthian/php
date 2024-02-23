<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora PHP</title>
</head>
<body>
    <h2>Calculadora PHP</h2>
    <form method="post" action="">
        <input type="text" name="num1" placeholder="Digite o primeiro número" required>
        <select name="operator" required>
            <option value="">Selecione a operação</option>
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>
        <input type="text" name="num2" placeholder="Digite o segundo número" required>
        <button type="submit" name="submit">Calcular</button>
        <input type="text" name="resultado" placeholder="Resultado" readonly>
    </form>

    <?php
    if(isset($_POST['submit'])) {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operator = $_POST['operator'];
        $resultado = '';

        switch($operator) {
            case '+':
                $resultado = $num1 + $num2;
                break;
            case '-':
                $resultado = $num1 - $num2;
                break;
            case '*':
                $resultado = $num1 * $num2;
                break;
            case '/':
                if($num2 != 0) {
                    $resultado = $num1 / $num2;
                } else {
                    $resultado = "Erro! Divisão por zero.";
                }
                break;
            default:
                $resultado = "Operador inválido.";
        }

        echo '<script>document.querySelector(\'input[name="resultado"]\').value = \'' . $resultado . '\';</script>';
    }
    ?>
</body>
</html>
