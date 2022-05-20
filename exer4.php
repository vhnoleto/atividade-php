<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercício 4</title>
    <style>
        form{
            width:500px;
            margin:0 auto;
        }
        legend{
            font-weight: 800;
            font-size: 18px;
            margin:15px 0;
        }
        div{
            margin-left:20px;
        }
        textarea{
            margin-left:20px;
        }
        input{
            display: block;
            margin-bottom: 10px;
        }
        .enivar, .reset, .checkbox , .a{
            display: inline-block;
        }
    </style>
</head>
<body>
    <form action="php4.php" method="post">
        <section class="secao">
            <legend>O que você achou do site??</legend>
                <div>
                    <input type="radio" name="achouSite" value="Muito Bom" class="a">
                <label for="achouSite">Muito bom</label>
                    <input type="radio" name="achouSite" value="Bom" class="a">
                <label for="bom">Bom</label>
                    <input type="radio" name="achouSite" value="Regular" class="a">
                <label for="regular">Regular</label>
                </div>
        </section>
        <section class="secao">
            <legend>Qual a seção que você mais gostou?</legend>
            <div>
                <select name="filme">
                    <option value="Em Cartaz">Em cartaz</option>
                    <option value="Ação"> Ação</option>
                    <option value="Comédia">Comédia</option>
                </select>
                Outro:  <input type="text"  name="outro" class="a">
                </div>
        </section>
        <section class="secao">
            <legend>Digite seus comentários no campo abaixo</legend>
            <textarea name="campoText" cols="50" rows="10"></textarea>
        </section>
        <section class="secao">
            <legend>Diga-nos como entrar em contato com você:</legend>
            <div>
            Nome: <input type="text" name="nome">
            E-mail: <input type="email" name="email">
            Fone: <input type="tel" name="telefone">
            </div>
        </section>
        <section>
            <input type="checkbox" name="enviarEmail" class="checkbox"> Quero receber as novidades por e-mail
        </section>
        <input type="submit" value="ENVIAR" class="enivar">
        <input type="reset" value="LIMPAR" class="reset">
    </form>
</body>
</html>