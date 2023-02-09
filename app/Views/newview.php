<?= $this->extend("layouts/main") ?>

<?= $this->section("title"); ?>
<?= $page_title; ?>
<?= $this->endSection(); ?>

<?= $this->section("content"); ?>
<!-- Header -->
<header class="w3-display-container w3-content w3-wide" style="max-width:1600px;min-width:500px" id="home">
    <img class="w3-image" src="/w3images/hamburger.jpg" alt="Hamburger Catering" width="1600" height="800">
    <div class="w3-display-bottomleft w3-padding-large w3-opacity">
        <h1 class="w3-xxlarge">Le Catering</h1>
    </div>
</header>

<!-- Page content -->
<div class="w3-content" style="max-width:1100px">
    <br>
    <br>
    <h1>Form Validation</h1>
    <?php $validation = \Config\Services::validation(); ?>
    <?php if (isset($validation)) : ?>
        <?= $validation->listErrors(); ?>
    <?php endif; ?>

    <?= form_open('#'); ?>

    <label>Name:</label>
    <input type="text" name="name" autocomplete="off" >

    <label>Email:</label>
    <input type="email" name="email" autocomplete="off">

    <label>Password:</label>
    <input type="password" name="password" autocomplete="off">

    <input type="submit" value="Submit">

    <?= form_close(); ?>

    <!-- About Section -->
    <div class="w3-row w3-padding-64" id="about">
        <div class="w3-col m6 w3-padding-large w3-hide-small">
            <img src="https://images.pexels.com/photos/268533/pexels-photo-268533.jpeg?cs=srgb&dl=pexels-pixabay-268533.jpg&fm=jpg" class="w3-round w3-image w3-opacity-min" alt="Table Setting" width="600" height="750">
        </div>

        <div class="w3-col m6 w3-padding-large">
            <h1 class="w3-center">About Catering</h1><br>
            <h5 class="w3-center">Tradition since 1889</h5>
            <p class="w3-large">The Catering was founded in blabla by Mr. Smith in lorem ipsum dolor sit amet, consectetur adipiscing elit consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute iruredolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.We only use <span class="w3-tag w3-light-grey">seasonal</span> ingredients.</p>
            <p class="w3-large w3-text-grey w3-hide-medium">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod temporincididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>
    </div>

    <hr>

    <!-- Menu Section -->
    <div class="w3-row w3-padding-64" id="menu">
        <div class="w3-col l6 w3-padding-large">
            <h1 class="w3-center">Our Menu</h1><br>
            <h4>Bread Basket</h4>
            <p class="w3-text-grey">Assortment of fresh baked fruit breads and muffins 5.50</p><br>

            <h4>Honey Almond Granola with Fruits</h4>
            <p class="w3-text-grey">Natural cereal of honey toasted oats, raisins, almonds and dates 7.00</p><br>

            <h4>Belgian Waffle</h4>
            <p class="w3-text-grey">Vanilla flavored batter with malted flour 7.50</p><br>

            <h4>Scrambled eggs</h4>
            <p class="w3-text-grey">Scrambled eggs, roasted red pepper and garlic, with green onions 7.50</p><br>

            <h4>Blueberry Pancakes</h4>
            <p class="w3-text-grey">With syrup, butter and lots of berries 8.50</p>
        </div>

        <div class="w3-col l6 w3-padding-large">
            <img src="https://thumbs.dreamstime.com/b/environment-earth-day-hands-trees-growing-seedlings-bokeh-green-background-female-hand-holding-tree-nature-field-gra-130247647.jpg" class="w3-round w3-image w3-opacity-min" alt="Menu" style="width:100%">
        </div>
    </div>

    <hr>

    <?= $this->include("partials/contact") ?>

    <!-- End page content -->
</div>

<?= $this->endSection(); ?>