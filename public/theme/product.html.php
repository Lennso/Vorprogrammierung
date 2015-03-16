<?php $this->layout('templates/base.html') ?>

<?php $this->start('main') ?>
    <h1>Produkte</h1>
    <?= var_dump($products); ?>
<?php $this->stop() ?>