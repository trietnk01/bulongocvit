<?php
get_header();
$productModel=$zController->getModel("/frontend","ProductModel");
/* start set the_query */
$the_query_product=null;

$args = $wp_query->query;
$args['orderby']='id';
$args['order']='DESC';
$wp_query->query($args);
$the_query_product=$wp_query;

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
$page_id_search_product = $zController->getHelper('GetPageId')->get('_wp_page_template','search-product.php');
$permalink_search_product=get_permalink( $page_id_search_product);
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
                <h1 class="post-title"><?php single_cat_title( '', true ); ?></h1>
                <?php require_once PLUGIN_PATH . DS . "templates" . DS . "frontend". DS . "loop-za-category.php"; ?>
            </form>
        </div>
        <div class="col-lg-3">
            <?php include get_template_directory()."/block/block-right-sidebar.php"; ?>
        </div>
<?php
get_footer();
?>