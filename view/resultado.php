<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Resultado da Conversão</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="public/css/style.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container py-5">
        <div class="card cartao">
            <div class="card-header cartao__titulo text-center mb-4">💱 Resultado da Conversão</div>
            <div class="card-body cartao__conteudo">
                <?php if ($resultado['sucesso']): ?>
                    <div class="alert alert-success">
                        <p><strong>R$ <?= number_format($resultado['original'], 2, ',', '.') ?></strong> equivale a <strong><?= number_format($resultado['convertido'], 2, ',', '.') ?> <?= $resultado['moeda'] ?></strong></p>
                    </div>
                <?php else: ?>
                    <div class="alert alerta">
                        <p class="alerta__mensagem">Erro na conversão. Tente novamente.</p>
                    </div>
                <?php endif; ?>
                <div class="d-grid mt-3">
                    <a href="index.php" class="btn botao">Nova Conversão</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
