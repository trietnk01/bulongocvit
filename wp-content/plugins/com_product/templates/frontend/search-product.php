<?php
get_header();
$productModel=$zController->getModel("/frontend","ProductModel");
/* start set the_query */
$q="";
$price_min=0;
$price_max=0;
$args_meta_query=array();
if(isset($_POST["q"])){
    $q=trim($_POST["q"]);
}
if(isset($_POST["price_min"])){
  $price_min=$_POST["price_min"];
}
if(isset($_POST["price_max"])){
  $price_max=$_POST["price_max"];
}
if((float)@$price_max > 0){
  $args_meta_query=array(
      'key'     => 'zaproduct_price',
      'value'   => array( $price_min, $price_max ),
      'type'    => 'numeric',
      'compare' => 'BETWEEN',
  );
}
$args = array(
    'post_type' => 'zaproduct',
    'orderby' => 'id',
    'order'   => 'DESC',
    "s"=>@$q,
    'posts_per_page' => 16,
);
if(count(@$args_meta_query) > 0){
    $args['meta_query']=array($args_meta_query);
}
$the_query_product=new WP_Query($args);
/* end set the_query */
/* start setup pagination */
$totalItemsPerPage=9;
$pageRange=3;
$currentPage=1;
if(!empty(@$_POST["filter_page"]))          {
    $currentPage=@$_POST["filter_page"];
}
$productModel->setWpQuery($the_query_product);
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
$title_tim_kiem="";
if(have_posts()){
    while (have_posts()) {
        the_post();
        $post_id= get_the_id();
        $title_tim_kiem=get_the_title($post_id);
    }
    wp_reset_postdata();
}
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
            <form name="frm_category" method="POST" class="frm-category-za">
                <input type="hidden" name="filter_page" value="1" />
                <input type="hidden" name="price_min" value="<?php echo @$_POST["price_min"]; ?>" />
                <input type="hidden" name="price_max" value="<?php echo @$_POST["price_max"]; ?>" />
                <h1 class="post-title"><?php echo @$title_tim_kiem; ?></h1>
                <?php require_once PLUGIN_PATH . DS . "templates" . DS . "frontend". DS . "loop-za-category.php"; ?>
            </form>
        </div>
        <div class="col-lg-3">
            <?php include get_template_directory()."/block/block-right-sidebar.php"; ?>
        </div>
<?php
get_footer();
?>