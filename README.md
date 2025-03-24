# Conversor de Moeda

Este é um projeto de conversor de moeda desenvolvido em PHP. Ele permite converter valores de BRL para outras moedas.

## Pré-requisitos

- [XAMPP](https://www.apachefriends.org/index.html) instalado no seu computador.

## Instalação

1. Clone este repositório ou faça o download dos arquivos.

2. Copie os arquivos do projeto para a pasta `htdocs` do XAMPP. O caminho padrão é:
    ```
    C:\xampp\htdocs\conversor-moeda
    ```

3. Certifique-se de que o XAMPP está rodando e que os serviços Apache e MySQL estão iniciados.

## Configuração

1. Abra o XAMPP Control Panel e inicie o Apache e o MySQL.

2. No navegador, acesse:
    ```
    http://localhost/conversor-moeda/view/form.php
    ```

3. Configure a chave da API:
    - Crie uma conta em um serviço de conversão de moedas que forneça uma API (por exemplo, [ExchangeRate-API](https://www.exchangerate-api.com/)).
    - Obtenha a chave da API.
    - Crie um arquivo `config.php` na raiz do projeto e adicione a chave da API:
        ```php
        <?php
        $apiKey = 'SUA_CHAVE_API_AQUI';
        ?>
        ```

## Estrutura do Projeto

- `view/form.php`: Página principal do formulário de conversão.
- `view/resultado.php`: Página de resultado da conversão.
- `public/css/style.css`: Arquivo de estilo CSS.

## Como Usar

1. Acesse a página principal do formulário de conversão.
2. Insira o valor em BRL que deseja converter.
3. Selecione a moeda para a qual deseja converter.
4. Clique no botão "Converter".
5. Você será redirecionado para a página de resultado com o valor convertido.
