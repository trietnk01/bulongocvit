<div class="support-online-box">
    <div class="ho-tro-tot">
        <div class="httt">
            <div class="ho-tro">Hỗ trợ</div>
            <div class="truc-tuyen">Trực tuyến</div>
        </div>
    </div>
    <div class="support-hotline">
        <div class="support-phone-icon"><img src="<?php echo get_template_directory_uri()."/assets/images/telephone.png"; ?>" alt="<?php echo get_bloginfo( 'name', 'raw' ); ?>"></div>
        <div class="support-phone-number"><a href="tel:<?php echo get_field("setting_thong_tin_chung_call_now","option"); ?>"><?php echo get_field("setting_thong_tin_chung_hotline","option"); ?></a></div>
        <div class="clr"></div>
    </div>
    <div class="call-skype-viber-zalo">
        Call: Skype - Viber - Zalo
    </div>
    <div class="cara-call-skype-viber-zalo">
        <span><a href="skype:<?php echo get_field("setting_thong_tin_chung_skype","option"); ?>?chat"><img src="<?php echo get_template_directory_uri()."/assets/images/skype.png";?>" alt="<?php echo get_bloginfo( 'name', 'raw' ); ?>"></a></span>
        <span><a href="tel:<?php echo get_field("setting_thong_tin_chung_call_now","option"); ?>"><img src="<?php echo get_template_directory_uri()."/assets/images/viber.png";?>" alt="<?php echo get_bloginfo( 'name', 'raw' ); ?>"></a></span>
        <span><a href="tel:<?php echo get_field("setting_thong_tin_chung_call_now","option"); ?>"><img src="<?php echo get_template_directory_uri()."/assets/images/zalo.png";?>" alt="<?php echo get_bloginfo( 'name', 'raw' ); ?>"></a></span>
    </div>
    <div class="support-email">
        <a href="mailto:<?php echo get_field("setting_thong_tin_chung_email","option"); ?>">Email: <?php echo get_field("setting_thong_tin_chung_email","option"); ?></a>
    </div>
</div>

<div class="catalog-box">
    <a href="javascript:void(0);">
        <img src="<?php echo wp_get_upload_dir()["url"]."/catalog.jpg"; ?>" alt="<?php echo get_bloginfo( 'name', 'raw' ); ?>">
    </a>
</div>

<div class="box-right">
    <h2 class="bx-right-h">Quy trình sản xuất bu lông</h2>
    <div class="bx-right-wrapper">
        <iframe width="100%" height="200" src="https://www.youtube.com/embed/8OOCRpJSStE" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
</div>

<div class="box-right">
    <h2 class="bx-right-h">Bài viết mới</h2>
    <div class="bx-right-wrapper">
        <?php
        $args = array(
            'post_type' => 'post',
            'orderby' => 'id',
            'order'   => 'DESC',
            'posts_per_page' => 6,
            'tax_query' => array(
                array(
                    'taxonomy' => 'category',
                    'field'    => 'slug',
                    'terms'    => "tin-tuc",
                ),
            ),
        );
        $the_query_featured_news=new WP_Query($args);
        if($the_query_featured_news->have_posts()){
            while ($the_query_featured_news->have_posts()) {
                $the_query_featured_news->the_post();
                $post_id=$the_query_featured_news->post->ID;
                $permalink=get_the_permalink(@$post_id);
                $title=get_the_title(@$post_id);
                $excerpt=get_the_excerpt(@$post_id);
                $featured_img=get_the_post_thumbnail_url(@$post_id, 'full');
                $date_post=get_the_date( 'd/m/Y', @$post_id );
                ?>
                <div class="roda-mau-thiet-ke">
                    <div class="mau-thiet-ke-left">
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
                    </div>
                    <div class="mau-thiet-ke-right">
                        <h4 class="mau-thiet-ke-right-h4"><a href="<?php echo @$permalink; ?>"><?php echo wp_trim_words( @$title, 55, null ); ?></a></h4>
                        <div class="margin-top-10 icon-heart">
                            <span><i class="far fa-clock"></i></span><span class="margin-left-5"><?php echo @$date_post; ?></span><span class="margin-left-5"><i class="far fa-heart"></i></span>
                        </div>
                    </div>
                    <div class="clr"></div>
                </div>
                <?php
            }
            wp_reset_postdata();
        }
        ?>
    </div>
</div>
<div class="box-right">
    <h2 class="bx-right-h">Sản phẩm mua nhiều</h2>
    <?php
    $args = array(
        'post_type' => 'zaproduct',
        'orderby' => 'id',
        'order'   => 'DESC',
        'posts_per_page' => 6,
    );
    $the_query_featured_product=new WP_Query($args);
    if($the_query_featured_product->have_posts()){
        ?>
        <div class="bx-right-wrapper">
            <?php
            while($the_query_featured_product->have_posts()) {
                $the_query_featured_product->the_post();
                $post_id=$the_query_featured_product->post->ID;
                $permalink=get_the_permalink(@$post_id);
                $title=get_the_title(@$post_id);
                $excerpt=get_the_excerpt(@$post_id);
                $featured_img=get_the_post_thumbnail_url(@$post_id, 'full');
                ?>
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
                    <h3 class="box-oc-bu-title"><a href="<?php echo @$permalink; ?>"><?php echo wp_trim_words( @$title, 55, null ); ?></a></h3>
                    <div class="gia-lien-he"><span class="gia-1">Giá:</span><span class="lien-he-1">Liên hệ</span></div>
                </div>
                <?php
            }
            wp_reset_postdata();
            ?>
        </div>
        <?php
    }
    ?>
</div>