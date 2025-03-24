<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Conversor de Moedas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="public/css/style.css" rel="stylesheet">
</head>
<body>
    <div class="container py-5">
        <div class="card cartao">
            <div class="card-header cartao__titulo text-center mb-4">💱 Conversor de Moedas</div>
            <div class="card-body cartao__conteudo">
                <form method="POST" class="formulario">
                    <div class="mb-3 formulario__campo">
                        <label class="form-label formulario__campo-label">Valor em BRL:</label>
                        <input type="number" step="0.01" class="form-control formulario__campo-input" name="valor" required>
                    </div>
                    <div class="mb-3 formulario__campo">
                        <label class="form-label formulario__campo-label">Converter para:</label>
                        <select class="form-select formulario__campo-select" name="moeda" required>
                            <option value="USD">Dólar (USD)</option>
                            <option value="EUR">Euro (EUR)</option>
                        </select>
                    </div>
                    <div class="d-grid">
                        <button type="submit" class="btn botao">Converter</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
