<section id="sorvetes">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="titulo-sessao">Todos os nossos sorvetes</h2>
            </div>
        </div>

        <div class="row">
            <?php foreach ($this->sorvetes as $s) { ?>
                <div class="col-lg-4">
                    <article class="sorvete">
                        <div class="foto-article" style="background-image: url(<?= ASSETS . 'img/' . $s->imagem ?>)"></div>

                        <h3 class="titulo-article"><?= $s->nome ?></h3>

                        <div class="d-flex">
                            <div class="btn-article preco-article"><?= priceFormart($s->preco) ?></div>
                            <a href="" class="btn-article">Comprar</a>
                        </div>
                    </article>
                </div>
            <?php } ?>
        </div>
    </div>
</section>