<?php
get_header();
$post_id=0;
$title="";
$permalink="";
$date_post="";
$excerpt="";
$content="";
$featured_img="";
$source_term_id=array();
?>
<div class="container box-index">
    <div class="row">
        <div class="col">
            <?php include get_template_directory()."/block/block-banner.php"; ?>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-3">
            <?php
            include get_template_directory()."/block/block-category-menu-product.php";
            if(is_active_sidebar( "xt_counter_visitor" )) {
                dynamic_sidebar( "xt_counter_visitor" );
            }
            include get_template_directory()."/block/block-about-us.php";
            ?>
        </div>
        <div class="col-lg-6">
            <?php
            if(have_posts()){
                while (have_posts()) {
                    the_post();
                    $post_id= get_the_id();
                    $title=get_the_title(@$post_id);
                    $permalink=get_the_permalink( @$post_id );
                    $date_post=get_the_date( 'd/m/Y', @$post_id );
                    $excerpt=get_field("single_page_excerpt",@$post_id);
                    $content=apply_filters( "the_content", get_the_content( null,false ) );
                    $featured_img=get_the_post_thumbnail_url(@$post_id, 'full');
                    $source_term = wp_get_object_terms( $post_id,  'category' );
                    if(count($source_term) > 0){
                        foreach ($source_term as $key => $value) {
                            $source_term_id[]=$value->term_id;
                        }
                    }
                }
                wp_reset_postdata();
            }
            ?>
            <div itemscope itemtype="http://schema.org/NewsArticle" class="box-single">
                <meta itemscope itemprop="mainEntityOfPage" itemType="https://schema.org/WebPage" itemid="https://google.com/article"/>
                <h1 class="post-title" itemprop="headline"><?php echo @$title; ?></h1>
                <h2 style="display: none;"><?php echo get_bloginfo( 'name', 'raw' ); ?></h2>
                <!-- begin schema -->
                <p style="display: none;" itemprop="author" itemscope itemtype="https://schema.org/Person"> By <span itemprop="name">DienKim</span>
                </p>
                <p style="display: none;" itemprop="description"><?php echo @$title; ?></p>
                <div itemprop="image" itemscope itemtype="https://schema.org/ImageObject" style="display: none;">
                    <img src="<?php echo @$featured_img; ?>" alt="<?php echo @$title; ?>">
                    <meta itemprop="url" content="<?php echo @$featured_img; ?>">
                    <meta itemprop="width" content="800">
                    <meta itemprop="height" content="800">
                </div>
                <div itemprop="publisher" itemscope itemtype="https://schema.org/Organization" style="display: none;">
                    <div itemprop="logo" itemscope itemtype="https://schema.org/ImageObject">
                        <img src="<?php echo @$featured_img; ?>" alt="<?php echo @$title; ?>">
                        <meta itemprop="url" content="<?php echo @$featured_img; ?>">
                        <meta itemprop="width" content="600">
                        <meta itemprop="height" content="60">
                    </div>
                    <meta itemprop="name" content="Google">
                </div>
                <meta itemprop="datePublished" content="2015-02-05T08:00:00+08:00" style="display: none;" />
                <meta itemprop="dateModified" content="2015-02-05T09:20:00+08:00" style="display: none;" />
                <!-- end schema -->
                <?php
                if(!empty(@$excerpt)){
                    ?>
                    <div class="post-excerpt"><?php echo @$excerpt; ?></div>
                    <?php
                }
                if(!empty(@$content)){
                    ?>
                    <div class="post-content"><?php echo @$content; ?></div>
                    <div class="margin-top-10">
                        <div class="fb-comments" data-href="<?php echo @$permalink; ?>" data-width="" data-numposts="5"></div>
                    </div>
                    <div class="post-share-facebook">
                        <div class="fb-share-button" data-href="<?php echo @$permalink; ?>" data-layout="button" data-size="small"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo @$permalink; ?>&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Chia sẻ</a></div>
                    </div>
                    <?php
                }
                ?>
            </div>
        </div>
        <div class="col-lg-3">
            <?php include get_template_directory()."/block/block-right-sidebar.php"; ?>
        </div>
        <?php
        get_footer();
        ?>