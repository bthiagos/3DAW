<main>
    <section>
        <a href="index.php">
            <button class="btn btn-success"><i class="fa fa-chevron-circle-left" aria-hidden="true"></i>&nbsp Voltar</button>
        </a>
    </section>

    <h2 class="mt-3"><?= TITLE ?></h2>

    <form method="post">
        <div class="form-group">
            <label>Título</label>
            <input type="text" class="form-control" name="titulo" value="<?= $obVaga->titulo ?>" disabled>
        </div>

        <div class="form-group">
            <label>Descrição</label>
            <textarea class="form-control" name="descricao" rows="5" disabled><?= $obVaga->descricao ?></textarea>
        </div>

        <div class="form-group">
            <label>Status</label>
            <div>
                <div class="form-check form-check-inline">
                    <label>
                        <input type="radio" name="ativo" value="s" checked disabled> Ativo
                    </label>
                </div>

                <div class="form-check form-check-inline">
                    <label>
                        <input type="radio" name="ativo" disabled value="n" <?= $obVaga->ativo == 'n' ? 'checked' : '' ?>> Inativo
                    </label>
                </div>
            </div>
        </div>
    </form>

    <div class="form-group">
        <a href="relVaga.php?id=<?=$obVaga->id;?>" target="_blank">
            <button class="btn btn-success"><i class="fa fa-file-pdf-o"></i>&nbsp Gerar PDF</button>
        </a>
    </div>

</main>