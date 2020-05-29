
<?php require_once 'classes/Categoria.php'; ?>

<?php

    $categoria = new Categoria();
    $lista = $categoria->listar();

?>

<?php require_once 'cabecalho.php' ?>
<div class="row">
    <div class="col-md-12">
        <h3># Desktop Categorias</h3>
    </div>
</div>

<div class="row">
    <div class="col-md-4">
        <a href="categorias-criar.php" class="btn btn-info btn-block">Crair Nova Categoria</a>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <table class="table">
            <thead>
                <tr>
                    <th>Código</th>
                    <th>Nome Categoria</th>
                    <th class="acao">Editar</th>
                    <th class="acao">Excluir</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($lista as $linha): ?>
                    <tr>
                        <td><a href="/categorias-detalhe.php" class="btn btn-link">
                            <?php echo $linha['IDCA'] ?></a>
                        </td>
                        <td><a href="/categorias-detalhe.php" class="btn btn-link">
                            <?php echo $linha['NOME'] ?></a>
                        </td>
                        <td><a href="categorias-editar.php?idca=<?php echo $linha['IDCA'] ?>" class="btn btn-info">Editar</a></td>
                        <td><a href="categorias-excluir-post.php?idca=<?php echo $linha['IDCA'] ?>" class="btn btn-danger">Excluir</a></td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</div>
<?php require_once 'rodape.php' ?>
