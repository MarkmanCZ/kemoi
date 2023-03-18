<?php

echo $this->extend("layout/Master");

echo $this->section("content");
?>

<div class="container text-center">
  <div class="col-12">
    <form action="<?= site_url('KolaController/addItem');?>" method="post">
        <div class="form-group text-center col-md-12 ">
        <h2>Zadejte prosím název závodu</h2>
        <input type="name" name="nazev" class="form-control" id="" aria-describedby="" placeholder="Název závodu">
        <div class="pt-3">
        <a href="<?= base_url('/add')?>">
             <button type="submit" class="btn btn-dark ">Přidat závod</button>
        </a>
        </div>

    </div>
    </form>

  </div>
</div>



<?php
echo $this->endSection();
