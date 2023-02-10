<?= $this->extend('layouts/main'); ?>

<?= $this->section("content"); ?>
<!-- Contact Section -->
<div class="w3-container w3-padding-64" id="contact">
    <h1>Contact</h1><br>

    <?php
    // if (isset($validation)) :
    //     $validation->listErrors();
    // endif 
    ?>

    <?= form_open() ?>
    <p><input class="w3-input w3-padding-16" type="text" placeholder="Name" name="name" value="<?= set_value('name') ?>"></p>
    <span style="color: red;"><?= display_error($validation, 'name') ?></span>

    <p><input class="w3-input w3-padding-16" type="text" placeholder="Email" name="email" value="<?= set_value('email') ?>"></p>
    <span style="color: red;"><?= display_error($validation, 'email') ?></span>

    <p><input class="w3-input w3-padding-16" type="number" placeholder="Mobile" name="phone" value="<?= set_value('phone') ?>"></p>
    <span style="color: red;"><?= display_error($validation, 'phone') ?></span>

    <p><input class="w3-input w3-padding-16" type="text" placeholder="Message \ Special requirements" name="message" value="<?= set_value('message') ?>"></p>
    <span style="color: red;"><?= display_error($validation, 'message') ?></span>

    <p><button class="w3-button w3-light-grey w3-section" name="submit" type="submit">SEND MESSAGE</button></p>
    <?= form_close() ?>

</div>
<?= $this->endSection(); ?>