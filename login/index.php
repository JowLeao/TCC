<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Biblioteca Personalizada</title>
    <script src="script.js" defer></script> <!-- incluí o script.js para manipulação de eventos -->
</head>
<body>
    <?php 
        
        
        $id = $_GET["id"];
        if(!validaId($id)) {
            header("Location: index.php");
        }
    ?>

    <!-- Barra lateral -->
    
    <!-- Conteúdo principal -->
    <div class="conteudo">
        <!-- Cabeçalho -->
    
        
        <!-- Formulário para editar livro -->
        <h2>Edite o Livro</h2>
        <form id="livrosForm" action="edita_livro.php?id=<?=$id?>&acao=salvar" method="post">
            <label for="titulo">Título do livro* :</label><br>
            <input type="text" id="titulo" name="txtTitulo" required><br>
            <label for="autor">Autor(a)* :</label><br>
            <input type="text" id="autor" name="txtAutor" required><br>
            <label for="editora">Editora* :</label><br>
            <select id="editora" name="txtEditora" required></select><br>
            <button type="button" onclick="adicionarEditora()">Adicionar Editora</button><br>
            <div id="listaDeEditoras"></div><br>
            <label for="ano">Ano* (Ex.: 1975) :</label><br>
            <input type="number" id="ano" name="txtAno" min="1800" max="<?=date('Y')?>" required><br>
            <button type="submit">Salvar</button>
        </form>
    </div>

    <script>
        function adicionarEditora() {
    var editora = prompt("Digite o nome da editora:");
    if (editora !== null && editora.trim() !== "") {
        var select = document.getElementById("editora");
        var option = document.createElement("option");
        option.text = editora;
        select.add(option);
    }
}
    </script>
</body>
</html>
