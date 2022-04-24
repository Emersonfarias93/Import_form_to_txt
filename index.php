<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width initial-scale=1.0">
        <title>Home | Gerar Arquivos para importação txt para Contabiliidade.</title>

		<link rel="stylesheet" href="css/reset.css">
		<link rel="stylesheet" href="css/style.css">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;700&family=Open+Sans:wght@300;400;700&display=swap" rel="stylesheet">
    </head>
    <body>
		<header>
			<div class="caixa">
				<h1><img src="img/terminal.png" alt="Logo da Barbearia Alura"></h1>
			</div>
		</header>
    <main>
        <form action="function.php" method="POST">
            <legend class="legenda_form">Formulario de importação</legend>
                <label for="cd_sequencia">Codigo Lançamentos</label>
                <input type="text" name="cd_sequencia" required placeholder="Cod. Movimentação">
                <label for="dt_mov">Data do lançamento</label>
                <input type="text" name="dt_mov" placeholder="Data (DDMMAAAA)">
                <label for="cd_reduzido_cred">Reduzido Credito</label>
                <input type="text" name="cd_reduzido_cred">
                <label for="cd_reduzido_deb">Reduzido Debito</label>
                <input type="text" name="cd_reduzido_deb">
                <label for="vl_lanc">Valor do Lançamento</label>
                <input type="text" name="vl_lanc">
                <label for="hist_padrao">Hist. Padrão</label>
                <input type="text" name="hist_padrao" required id="hist_padrao">
                <label for="cd_setor_cred">Setor Credito</label>
                <input type="text" name="cd_setor_cred">
                <label for="cd_setor_deb">Setor Debito</label>
                <input type="text" name="cd_setor_deb">
                <label for="vl_lanc_setor">Valor do Lançamento</label>
                <input type="text" name="vl_lanc_setor">
                <label for="ds_lanc">Desc. do Lançamento</label>
                <input type="text" name="ds_lanc" name="ds_lanc" required id="ds_lanc">
                <label for="cd_empresa" >Codigo Empresa:</label>
                <input type="text" name="cd_empresa" required id="cd_empresa">
                <label for="cd_auxiliar_cred">Conta auxiliar Credito</label>
                <input type="text" name="cd_auxiliar_cred" >
                <label for="cd_auxiliar_deb">Conta auxiliar Debito</label>
                <input type="text" name="cd_auxiliar_deb">

                <input type="submit" value="Gravar" class="enviar">
        </form>
    </div>
    </main>
    <footer class="rodape">
			<img src="img/streamline.png" alt="logo import form to txt">
			<p class="copyright">&copy; Copyright Emerson Santos - 2022</p>
	</footer>
  </body>
</html>

