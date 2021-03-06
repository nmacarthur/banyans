<?php // 50 50 SPLIT BLOCK

if( get_row_layout() == '50_50' ):

$text = get_sub_field('text_block');
$image = get_sub_field('image');
$layout = get_sub_field('layout');
$flipLayout = get_sub_field('flip_layout');
$boxed = get_sub_field('boxed');
$bottomBgColour = get_sub_field('bottom_bg_colour');
?>
    <?php if(!$boxed): ?>
        <div class="imageblock switchable <?php if( !($flipLayout) == 'yes' ): echo 'switchable--switch'; endif; ?>">
            <div class="imageblock__content <?php if( $layout == '1/3' ): echo 'col-md-4'; endif; ?> <?php if( $layout == '1/2' ): echo 'col-md-6'; endif; ?> <?php if( $layout == '2/3' ): echo 'col-md-8'; endif; ?> pos-right">
                <div class="background-image-holder">
                    <?php

                    if( !empty($image) ):

                    // vars
                    $url = $image['url'];
                    $alt = $image['alt'];
                    $size = 'large';
                    $thumb = $image['sizes'][ $size ];
                    $width = $image['sizes'][ $size . '-width' ];
                    $height = $image['sizes'][ $size . '-height' ];

                    ?>
                    <img data-src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>"/>
                    <?php endif; ?>
                </div>
            </div>
            <div class="container  space--<?php echo $space ?>">
                <div class="row <?php if( $flipLayout == 'yes' ): echo 'justify-content-end'; endif; ?>">
                    <div class="<?php if( $layout == '1/3' ): echo 'col-md-7'; endif; ?><?php if( $layout == '1/2' ): echo 'col-md-5'; endif; ?><?php if( $layout == '2/3' ): echo 'col-md-3'; endif; ?>">
                        <?php echo $text ?>
                        <?php get_template_part( 'page-templates/blocks/block-partials/buttons' ); ?>
                    </div>
                </div>
            </div>
        </div>
    <?php else: ?>
    <div class="floatingBox__underlay bg--<?php echo $bottomBgColour ?>"></div>
    <div class="container bg--white px-0 floatingBox">
        <div class="imageblock switchable <?php if( !($flipLayout) == 'yes' ): echo 'switchable--switch'; endif; ?>">
                <div class="imageblock__content <?php if( $layout == '1/3' ): echo 'col-md-4'; endif; ?> <?php if( $layout == '1/2' ): echo 'col-md-6'; endif; ?> <?php if( $layout == '2/3' ): echo 'col-md-8'; endif; ?> pos-right">
                    <div class="background-image-holder">
                        <?php

                        if( !empty($image) ):

                        // vars
                        $url = $image['url'];
                        $alt = $image['alt'];
                        $size = 'large';
                        $thumb = $image['sizes'][ $size ];
                        $width = $image['sizes'][ $size . '-width' ];
                        $height = $image['sizes'][ $size . '-height' ];

                        ?>
                        <img data-src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>"/>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="container  space--<?php echo $space ?>">
                    <div class="row <?php if( $flipLayout == 'yes' ): echo 'justify-content-end'; endif; ?>">
                        <div class="px-5 <?php if( $layout == '1/3' ): echo 'col-md-8'; endif; ?><?php if( $layout == '1/2' ): echo 'col-md-6'; endif; ?><?php if( $layout == '2/3' ): echo 'col-md-4'; endif; ?>">
                            <?php echo $text ?>
                            <?php get_template_part( 'page-templates/blocks/block-partials/buttons' ); ?>
                        </div>
                    </div>
                </div>
        </div>
    </div>
    <?php endif; ?>

<?php endif;

?>
