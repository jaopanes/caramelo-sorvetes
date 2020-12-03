
<section id="sorvetes">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="titulo-sessao">Sorvetes em destaque</h2>
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


        <div class="row">
            <div class="col-12">
                <a href="sorvete" class="btn-sessao">Ver sorvetes</a>
            </div>
        </div>
    </div>
</section>

<section id="sobre" class="sobre">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <h2 class="titulo-sessao">Sobre nós</h2>

                <h4 class="subtitulo-sessao">Quem somos?</h4>
                <p class="paragrafo-sessao"><strong>Caramelinho Sorvetes</strong> é uma empresa dedicada a fabricação de sorvetes e picolés de sabores exóticos. Desde 2002 no mercado, nossa empresa é referência em inovação, qualidade e excelência de sabor!</p>

                <h4 class="subtitulo-sessao" style="margin-top: 35px">Inspiração</h4>
                <p class="paragrafo-sessao">Nossa inspiração foi logo após um de nossos fundadores ver um episódio de <strong>Todo mundo odeia o Chris</strong>, onde num dialógo um personagem apresenta um sabor inusitado de picolé, que tinha sabor de Batata doce.</p>

                <a href="sorvete" class="btn-sessao">Ver produtos</a>
            </div>

            <div class="col-lg-6 offset-2">
                <div class="imagem-sessao-sobre"></div>
            </div>
        </div>
    </div>
</section>

<section class="picole">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="titulo-sessao">Picolés</h2>
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

        <div class="row">
            <div class="col-12">
                <a href="sorvete" class="btn-sessao">Ver picolés</a>
            </div>
        </div>
    </div>
</section>

<section class="depoimentos">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="titulo-sessao">Depoimentos</h2>
            </div>
        </div>

        <div class="row">
            <?php foreach ($this->depoimentos as $d) { ?>
            <div class="col-lg-4">
                <article class="depoimento d-flex align-items-center">
                    <div class="foto-autor-depoimento" style="background-image: url('<?= ASSETS ?>img/<?= $d->foto ?>')"></div>

                    <div class="info-depoimento">
                        <h2 class="nome-depoimento"><?= $d->autor ?></h2>
                        <p><?= $d->depoimento ?></p>
                    </div>
                </article>
            </div>
            <?php } ?>
        </div>

    </div>
</section>