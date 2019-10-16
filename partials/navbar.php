<nav class="site-nav">

    <div class="container">

        <ul class="list-unstyled">
            <?php foreach($content['body']['nav'] as $label => $url) { ?>
            <li><a href="<?php echo $url; ?>"><?php echo $label; ?></a></li>
            <?php } ?>
        </ul>

    </div>

</nav>