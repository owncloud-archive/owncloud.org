<?php
if( have_rows('hosting_providers', 407) ) : 
    ob_start();
    ?>
    <div class="isotope-grid hosting-providers">
        <div class="grid-gutter"></div>
        <div class="grid-sizer"></div>
    <?php

    while( have_rows('hosting_providers', 407) ): the_row(); 
        $filter = '';
		$tags = array();
        if( have_rows('prov_tags') ) :
            while( have_rows('prov_tags') ): the_row(); 
                $filtertext = strtolower(str_replace(' ', '_', get_sub_field('prov_tag_text')));

                $tags[$filtertext] = array('text' => get_sub_field('prov_tag_text'), 'filter' => $filtertext);
                $filter .= ' ' . strtolower(str_replace(' ', '_', get_sub_field('prov_tag_text')));
            endwhile;
        endif;

        ?>

        <div class="hosting-provider grid-item <?php echo $filter; ?>">
            <a href="<?php echo get_sub_field('prov_link'); ?>" target="_blank"><?php echo wp_get_attachment_image(get_sub_field('prov_image'), 'medium'); ?></a>
            <h2><a href="<?php echo get_sub_field('prov_link'); ?>" target="_blank"><?php echo get_sub_field('prov_name'); ?></a></h2>
            <?php
            foreach($tags as $tag) : ?>
                <span class="badge badge-primary" data-filter="<?php echo $tag['filter']; ?>"><?php echo $tag['text']; ?></span>
            <?php
            endforeach;
            ?>
        </div>
    <?php
    endwhile;
    ?>
    </div>
    <?php
    $col = ob_get_contents();
    ob_end_clean();
    ?>

    <div class="filterbar">
        Filter partners:
        <?php
        foreach($tags as $tag) : ?>
            <button class="button-oc small isotope-filter-button" data-filter=".<?php echo $tag['filter']; ?>"><?php echo $tag['text']; ?></button>
            <?php
        endforeach;
        ?>
    </div>


    <?php

    echo $col;
endif;