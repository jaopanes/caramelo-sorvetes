<section class="picole">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="titulo-sessao">Todos os nossos picolés</h2>
            </div>
        </div>

        <div class="row">
            <?php foreach ($this->picole as $p) { ?>
                <div class="col-lg-3">
                    <article class="sorvete">
                        <div class="foto-article" style="background-image: url(<?= ASSETS . 'img/' . $p->imagem ?>)"></div>

                        <h3 class="titulo-article"><?= $p->nome ?></h3>

                        <div class="d-flex">
                            <div class="btn-article preco-article"><?= priceFormart($p->preco) ?></div>
                            <a href="" class="btn-article">Comprar</a>
                        </div>
                    </article>
                </div>
            <?php } ?>
        </div>
    </div>
</section>

