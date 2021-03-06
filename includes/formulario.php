<main>
    <section>
        <a href="index.php">
            <button class="btn btn-success"><i class="fa fa-chevron-circle-left" aria-hidden="true"></i>&nbsp Voltar</button>
        </a>
    </section>
    <section class="bg-light m-1">
        <h2 class="mt-3"><?= TITLE ?></h2>
        <form method="post">
            <div class="form-group">
                <label>Título</label>
                <input type="text" class="form-control" name="titulo" required>
            </div>

            <div class="form-group">
                <label>Descrição</label>
                <textarea class="form-control" name="descricao" rows="5" required></textarea>
            </div>

            <div class="form-group">
                <label>Status</label>
                <div>
                    <div class="form-check form-check-inline">
                        <label>
                            <input type="radio" name="ativo" value="s" checked > Ativo
                        </label>
                    </div>

                    <div class="form-check form-check-inline">
                        <label>
                            <input type="radio" name="ativo" value="n"> Inativo
                        </label>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-success"><i class="fa fa-check" aria-hidden="true"></i>&nbsp Enviar</button>
            </div>
        </form>
    </section>
</main>