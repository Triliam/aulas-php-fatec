<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simulador de Empréstimo</title>
</head>
<body>
    <div class="principal">
        <h1 class="boas-vindas">Seja bem-vindo(a) ao Mybank</h1>
        <h1 class="simulador">SIMULADOR DE EMPRÉSTIMO</h1>
        <div class="form">
            <form action="regra.php", method="POST">
                <label for="nome">Nome:</label>
                <input type="text", id="nome", name="nome"><br><br>

                <label for="cliente">Já é nosso cliente? Sim</label>
                <input type="radio" id="cliente", name="cliente", value="Sim">
                <label for="cliente">Não</label>
                <input type="radio" id="cliente", name="cliente", value="Não"><br><br>

                <label for="score">Digite seu Serasa Score:</label>
                <input type="number", id="score", name="score"><br><br>

                <label for="valor">Digite o valor do empréstimo:</label>
                <input type="number", id="valor", name="valor"><br><br>

                <label for="parcelas">Quantidade de parcelas:</label>
                <select name="parcelas" id="parcelas">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                    <option value="12">12</option>
                    <option value="13">13</option>
                    <option value="14">14</option>
                    <option value="15">15</option>
                    <option value="16">16</option>
                    <option value="17">17</option>
                    <option value="18">18</option>
                    <option value="19">19</option>
                    <option value="20">20</option>
                    <option value="21">21</option>
                    <option value="22">22</option>
                    <option value="23">23</option>
                    <option value="24">24</option>
                </select><br><br>

                <input type="checkbox" id="seguro" name="seguro" >Desejo incluir seguro desemprego no valor de 49.90<br><br>

                <input type="submit", value="Simular Empréstimo!">

                
            </form>
        </div>
    </div>
</body>
</html>