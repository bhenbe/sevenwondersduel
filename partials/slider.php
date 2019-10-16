<section class="site-slider section lazy" data-bg="url(./assets/img/slider.bg.jpg)">

    <div class="container">

        <div class="my-slider">
            <?php foreach($slider_images as $img) { ?>
            <div><img src="<?php echo $img; ?>" alt="" /></div>
            <?php } ?>
        </div>

    </div>

</section>