<?php
if($the_query_product->have_posts()){
    ?>
    <div class="za-category-wrapper">
        <?php
        $k=0;
        while($the_query_product->have_posts()) {
            $the_query_product->the_post();
            $post_id=$the_query_product->post->ID;
            $permalink=get_the_permalink(@$post_id);
            $title=get_the_title(@$post_id);
            $excerpt=get_the_excerpt(@$post_id);
            $featured_img=get_the_post_thumbnail_url(@$post_id, 'full');
            if($k%3==0){
                echo '<div class="row">';
            }
            ?>
            <div class="col-lg-4">
                <div class="box-oc-vit-bulong-item">
                    <div class="box-oc-bu-img">
                        <a href="<?php echo @$permalink; ?>">
                            <div class="box-product-featured-img">
                                <img src="<?php echo @$featured_img; ?>" alt="<?php echo @$title; ?>">
                            </div>
                            <div class="panel-top-to-bottom"></div>
                            <div class="panel-bottom-to-top"></div>
                            <div class="panel-link">
                                <div class="panel-circle">
                                    <i class="fas fa-link"></i>
                                </div>
                            </div>
                        </a>
                    </div>
                    <h3 class="box-oc-bu-title"><a href="<?php echo @$permalink; ?>"><?php echo wp_trim_words( @$title,55, null ); ?></a></h3>
                </div>
            </div>
            <?php
            $k++;
            if($k%3==0 || $k==$the_query_product->post_count){
                echo '</div>';
            }
        }
        wp_reset_postdata();
        ?>
    </div>
    <div class="margin-top-15">
        <?php echo @$pagination->showPagination(); ?>
    </div>
    <?php
}else{
    ?>
    <div class="text-center margin-top-15">Đang cập nhật</div>
    <?php
}
?>