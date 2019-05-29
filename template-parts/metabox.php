<div class="col-sm-6">
    <div class="metabox">
        <div class="headline">
            <i class="fa <?php echo $atts['icon']; ?>" aria-hidden="true"></i><?php echo $atts['headline']; ?>
        </div>
        <p><?php echo $content; ?></p>
        <?php
        if (isset($atts['cta'])) : 
            if (filter_var($atts['cta_link'], FILTER_VALIDATE_URL)) {
                $link = $atts['cta_link'];
            } else {
                $link = get_page_link($atts['cta_link']);
            }
            ?>
            <a href="<?php echo $link; ?>" target="<?php echo isset($atts['cta_target']) ? $atts['cta_target'] : ''; ?>" class="button-oc"><?php echo $atts['cta']; ?></a>
        <?php
        endif;
        ?>
    </div>
</div>
