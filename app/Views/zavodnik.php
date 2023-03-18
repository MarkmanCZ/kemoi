<?php

echo $this->extend("layout/Master");

echo $this->section("content");

?>
<div class="card-group text-center">


<?php
    foreach ($data as $row) {
    $date = date_create($row->datumnarozeni);
    $formdate = date_format($date, "d. m. Y");

        ?>
            <div class="row p-4 ">
                <div class="col-l-3">
                    <div class="card" style="width: 350px">
                        <img class="card-img-top" src="<?= base_url('assets/images/image.png')?>" alt="Card image">
                        <div class="card-body">

                            <p class="card-text"><?= $row->jmeno  .' '. $row->prijmeni?></p>
                            <p class="card-text"><?= $formdate ?></p>
                        </div>
                    </div>
                </div>
            </div>
   <?php
    }
?>

    </div>

<?php

echo $this->endSection();
