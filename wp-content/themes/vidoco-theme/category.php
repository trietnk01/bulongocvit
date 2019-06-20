<?php
get_header();
$productModel=$zController->getModel("/frontend","ProductModel");
/* start set the_query */
$the_query_category=null;

$args = $wp_query->query;
$args['orderby']='id';
$args['order']='DESC';
$s="";
if(isset($_POST["s"])){
    $s=trim($_POST["s"]);
}
if(!empty(@$s)){
    $args["s"] =@$s;
}
$wp_query->query($args);
$the_query_category=$wp_query;
/* end set the_query */
/* start setup pagination */
$totalItemsPerPage=8;
$pageRange=3;
$currentPage=1;
if(!empty(@$_POST["filter_page"]))          {
    $currentPage=@$_POST["filter_page"];
}
$productModel->setWpQuery($the_query_category);
$productModel->setPerpage($totalItemsPerPage);
$productModel->prepare_items();
$totalItems= $productModel->getTotalItems();
$arrPagination=array(
    "totalItems"=>$totalItems,
    "totalItemsPerPage"=>$totalItemsPerPage,
    "pageRange"=>$pageRange,
    "currentPage"=>$currentPage
);
$pagination=$zController->getPagination("Pagination",$arrPagination);
/* end setup pagination */
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
            if($the_query_category->have_posts()){
                ?>
                <form class="box-single" name="frm_category_box" method="POST">
                    <input type="hidden" name="filter_page" value="1" />
                    <h1 class="post-title"><?php single_cat_title(  '', true ); ?></h1>
                    <input type="hidden" name="filter_page" value="1" />
                    <div class="box-hello-category">
                        <?php
                    $k=0;
                    while ($the_query_category->have_posts()) {
                        $the_query_category->the_post();
                        $post_id=$the_query_category->post->ID;
                        $title=get_the_title($post_id);
                        $permalink=get_the_permalink($post_id);
                        $featured_img=get_the_post_thumbnail_url($post_id, 'full');
                        $excerpt=get_field("single_article_excerpt",@$post_id);
                        $date_post=get_the_date( 'd/m/Y', @$post_id);
                        if((float)@$k % 2 == 0){
                            echo '<div class="row">';
                        }
                        ?>
                        <div class="col-md-6">
                            <div class="category-post">
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
                                <h3 class="category-post-title"><a href="<?php echo @$permalink; ?>"><?php echo wp_trim_words(@$title, 55,null ); ?></a></h3>
                                <div class="category-post-user">
                                    <div>
                                        <span><i class="far fa-user"></i></span>
                                        <span class="margin-left-5"><?php echo get_bloginfo( 'name', 'raw' ); ?></span>
                                    </div>
                                    <div>
                                        <span><i class="far fa-clock"></i></span>
                                        <span class="margin-left-5"><?php echo @$date_post; ?></span>
                                    </div>
                                </div>
                                <div class="category-post-excerpt">
                                    <?php echo wp_trim_words(@$excerpt, 50,null ); ?>
                                </div>
                            </div>
                        </div>
                        <?php
                        $k++;
                        if((float)@$k % 2 == 0 || $k == $the_query_category->post_count){
                            echo '</div>';
                        }
                    }
                    wp_reset_postdata();
                    ?>
                    <div class="row"><div class="col"><?php echo @$pagination->showPagination();?></div></div>
                    </div>
                </form>
                <?php
            }
            ?>
        </div>
        <div class="col-lg-3">
            <?php include get_template_directory()."/block/block-right-sidebar.php"; ?>
        </div>
<?php
get_footer();
?>