<?php

echo $this->extend("layout/Master");

echo $this->section("content");
?>

<div class="container">
    <section class="py-3">
        <h1>Mapa <?= $mapa['Name'] ?></h1>
    </section>
    <section class="px-2 py-3">
        <?php if($mapa['mapPicture'] !== null):  ?>
            <img class="img-fluid" src="<?= base_url($mapa['mapPicture']) ?>" alt="<?= $mapa['idMap']; ?>">
        <?php endif; ?>
    </section>
</div>

<?php
echo $this->endSection();
?>