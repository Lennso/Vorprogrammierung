<?php $this->layout('templates/base.html') ?>

<?php $this->start('main') ?>
    <main class="main" role="main">
        <div class="logo">
            
        </div>
        <div class="search">
            
        </div>
        <nav class="main-nav">
            <ul class="nav">
                <? foreach ($mainnav as $item): ?>
                    <li class="nav__item"><a class="nav__item__link" href=""><?= $item ?></a></li>
                <? endforeach ?>
            </ul>
        </nav>
        <nav class="category-nav">
            <ul class="nav">
                <? foreach ($categorynav as $item): ?>
                    <li class="nav__item"><a class="nav__item__link" href=""><?= $item ?></a></li>
                <? endforeach ?>
            </ul>
        </nav>
        <section class="category">
            <h1 class="category__name">Kategorie</h1>
            <ul class="product-list">
                <? foreach ($products as $product): ?>
                    <li class="product --list">
                        <img class="product__image" src="/theme/<?= $product["image"] ?>" alt=""/>
                        <h3 class="product__title"><?= $product["name"] ?></h3>
                        <div class="product__manufacturer">
                            <?= $product["company"] ?>
                        </div>
                        <table class="product__details">
                            <tr class="package-size product__detail">
                                <th class="product__detail__label">Packungsgröße:</th>
                                <td class="product__detail__value"><?= $product["size"] ?> Stück</td>
                            </tr>
                            <tr class="item-number product__detail">
                                <th class="product__detail__label">PZN / Artikelnummer:</th>
                                <td class="product__detail__value"><?= $product["pzn"] ?></td>
                            </tr>
                            <tr class="basic-price product__detail">
                                <th class="product__detail__label">Grundpreis:</th>
                                <td class="product__detail__value"><?= $product["basic_price"] ?> / <?= $product["price_per"] ?> Stück</td>
                            </tr>
                            <tr class="availability product__detail"
                                <th class="product__detail__label">Lieferzeit:</th>
                                <td class="product__detail__value"><?= $product["availability"] ?> Werktag</td>
                            </tr>
                        </table>
                        <div class="product__price"><span class="product__price__prefix">nur </span><?= $product["price"] ?></div>
                        <div class="product__avp"><span class="product__avp__prefix">statt AVP** </span><?= $product["avp"] ?></div>
                    </li>
                <? endforeach ?>
            </ul>
        </section>
        <footer class="footer">
            <nav class="footer-nav">
                <ul class="nav">
                    <? foreach ($footernav as $item): ?>
                        <li class="nav__item"><a class="nav__item__link" href=""><?= $item ?></a></li>
                    <? endforeach ?>
                </ul>
            </nav>
        </footer>
    </main>
<?php $this->stop() ?>