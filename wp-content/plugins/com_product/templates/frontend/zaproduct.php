<?php
get_header();
$post_id=0;
$title="";
$excerpt="";
$permalink="";
$featured_img="";
$source_term_id=array();
$source_thumbnail=array();
$source_tinh_trang_con_hang=array();
$product_sku="";
$product_price=0;
$product_price_desc_percent=0;
$product_sale_price=0;
$product_price_tiet_kiem=0;
$content=null;
$source_term_trade=array();
$product_video_id="";
$data_product_tskt=array();
$product_guide="";
$product_guarantee="";
$product_hsx="";
$product_kho_hang="";
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
        <div class="col-lg-9">
            <?php
            if(have_posts()){
                while (have_posts()) {
                    the_post();
                    $post_id=get_the_ID();
                    $title=get_the_title(@$post_id);
                    $excerpt=get_the_excerpt( @$post_id );
                    $content=apply_filters( "the_content", get_the_content( null, false ) );
                    $permalink=get_the_permalink( $post_id );
                    $product_sku=get_field("zaproduct_sku",@$post_id,true);
                    $featured_img=get_the_post_thumbnail_url(@$post_id, 'full');
                    $source_term = wp_get_object_terms( @$post_id,  'za_category' );
                    if(count($source_term) > 0){
                        foreach ($source_term as $key => $value) {
                            $source_term_id[]=$value->term_id;
                        }
                    }
                    $product_guide=get_field("zaproduct_guide",@$post_id,true);
                    $product_guarantee=get_field("zaproduct_guarantee",@$post_id,true);
                    $product_hsx=get_field("zaproduct_hsx",@$post_id,true);
                    $product_kho_hang=get_field("zaproduct_kho_hang",@$post_id,true);
                }
                wp_reset_postdata();
            }
            ?>
            <div class="box-product-detail">
                <?php
                if ( function_exists('yoast_breadcrumb') ) {
                    yoast_breadcrumb( '<div class="breadcrumbs-lazer">','</div>' );
                }
                ?>
                <div class="row box-rox">
                    <div class="col-md-5">
                        <div class="box-product-detail-img">
                            <img src="<?php echo @$featured_img; ?>" alt="<?php echo @$title; ?>" >
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="box-product-detail-schema" itemscope itemtype="http://schema.org/NewsArticle">
                            <meta itemscope itemprop="mainEntityOfPage" itemType="https://schema.org/WebPage" itemid="https://google.com/article"/>
                            <h1 class="product-detail-title" itemprop="headline"><?php echo @$title; ?></h1>
                            <h2 style="display: none;"><?php echo get_bloginfo( 'name', 'raw' ); ?></h2>
                            <!-- begin schema -->
                            <p style="display: none;" itemprop="author" itemscope itemtype="https://schema.org/Person"> By <span itemprop="name">DienKim</span>
                            </p>
                            <p style="display: none;" itemprop="description"><?php echo @$title; ?></p>
                            <div itemprop="image" itemscope itemtype="https://schema.org/ImageObject" style="display: none;">
                                <img src="<?php echo @$featured_img; ?>" alt="<?php echo @$title; ?>"/>
                                <meta itemprop="url" content="<?php echo @$featured_img; ?>">
                                <meta itemprop="width" content="800">
                                <meta itemprop="height" content="800">
                            </div>
                            <div itemprop="publisher" itemscope itemtype="https://schema.org/Organization" style="display: none;">
                                <div itemprop="logo" itemscope itemtype="https://schema.org/ImageObject">
                                    <img src="<?php echo @$featured_img; ?>" alt="<?php echo @$title; ?>"/>
                                    <meta itemprop="url" content="<?php echo @$featured_img; ?>">
                                    <meta itemprop="width" content="600">
                                    <meta itemprop="height" content="60">
                                </div>
                                <meta itemprop="name" content="Google">
                            </div>
                            <meta itemprop="datePublished" content="2015-02-05T08:00:00+08:00" style="display: none;" />
                            <meta itemprop="dateModified" content="2015-02-05T09:20:00+08:00" style="display: none;" />
                            <!-- end schema -->
                            <div class="post-kk-star-rating">
                                <?php echo do_shortcode( "[ratings]" ); ?>
                            </div>
                            <div class="post-share-facebook">
                                <div class="fb-share-button" data-href="<?php echo @$permalink; ?>" data-layout="button" data-size="small"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo @$permalink; ?>&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Chia sẻ</a></div>
                            </div>
                            <div class="ma-sp-thuong-hieu">
                                <span class="msp-label">Mã sản phẩm:</span>
                                <span class="msp-text"><?php echo @$product_sku; ?></span>
                            </div>
                            <div class="ma-sp-thuong-hieu">
                                <span class="msp-label">Bảo hành:</span>
                                <span class="msp-text"><?php echo @$product_guarantee; ?></span>
                            </div>
                            <div class="ma-sp-thuong-hieu">
                                <span class="msp-label">Hãng sản xuất:</span>
                                <span class="msp-text"><?php echo @$product_hsx; ?></span>
                            </div>
                            <div class="ma-sp-thuong-hieu">
                                <span class="msp-label">Kho hàng:</span>
                                <span class="msp-text"><?php echo @$product_kho_hang; ?></span>
                            </div>
                            <div class="product-detail-price">
                                <span class="product-sale-price">Giá bán : Liên hệ</span>
                            </div>
                            <div class="mua-hang-qua-dien-thoai-text">Mua hàng qua điện thoại</div>
                            <div class="product-detail-mua-hang-qua-dt">
                                <div class="icon-mua-hang-qua-dt">
                                    <img src="<?php echo get_template_directory_uri()."/assets/images/24h-icon.svg" ?>" alt="<?php echo @$title; ?>">
                                </div>
                                <span class="product-detail-hotline"><a href="tel:<?php echo get_field("setting_thong_tin_chung_call_now","option"); ?>"><?php echo get_field("setting_thong_tin_chung_hotline","option"); ?></a></span>
                            </div>
                            <div class="product-detail-tai-sao-box">
                                <h2 class="tsnm">Tại sao nên mua sản phẩm tại <?php echo get_bloginfo( 'name','raw' ); ?></h2>
                                <div class="product-detail-box-slogan">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="box-item-slogan">
                                                <div class="box-item-sl-img">
                                                    <img src="<?php echo get_template_directory_uri()."/assets/images/icon-1.svg"; ?>" alt="<?php echo @$title; ?>">
                                                </div>
                                                <div class="box-item-sl-info">
                                                    <h3 class="box-item-sl-title">Uy tín hàng đầu</h3>
                                                </div>
                                                <div class="clr"></div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="box-item-slogan">
                                                <div class="box-item-sl-img">
                                                    <img src="<?php echo get_template_directory_uri()."/assets/images/icon-2.svg"; ?>" alt="<?php echo @$title; ?>">
                                                </div>
                                                <div class="box-item-sl-info">
                                                    <h3 class="box-item-sl-title">ĐỔI HÀNG DỄ DÀNG - MIỄN PHÍ</h3>
                                                </div>
                                                <div class="clr"></div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="box-item-slogan">
                                                <div class="box-item-sl-img">
                                                    <img src="<?php echo get_template_directory_uri()."/assets/images/icon-3.svg"; ?>" alt="<?php echo @$title; ?>">
                                                </div>
                                                <div class="box-item-sl-info">
                                                    <h3 class="box-item-sl-title">THANH TOÁN DỄ DÀNG (COD)</h3>
                                                </div>
                                                <div class="clr"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <div class="box-item-slogan">
                                                <div class="box-item-sl-img">
                                                    <img src="<?php echo get_template_directory_uri()."/assets/images/icon-4.svg"; ?>" alt="<?php echo @$title; ?>">
                                                </div>
                                                <div class="box-item-sl-info">
                                                    <h3 class="box-item-sl-title">HẬU MÃI HÀNG ĐẦU</h3>

                                                </div>
                                                <div class="clr"></div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="box-item-slogan">
                                                <div class="box-item-sl-img">
                                                    <img src="<?php echo get_template_directory_uri()."/assets/images/icon-5.svg"; ?>" alt="<?php echo @$title; ?>">
                                                </div>
                                                <div class="box-item-sl-info">
                                                    <h3 class="box-item-sl-title">ĐẢM BẢO TIẾN ĐỘ</h3>

                                                </div>
                                                <div class="clr"></div>
                                            </div>
                                        </div>
                                        <div class="col-sm-4">
                                            <div class="box-item-slogan">
                                                <div class="box-item-sl-img">
                                                    <img src="<?php echo get_template_directory_uri()."/assets/images/icon-6.svg"; ?>" alt="<?php echo @$title; ?>">
                                                </div>
                                                <div class="box-item-sl-info">
                                                    <h3 class="box-item-sl-title">1 ĐỔI 1</h3>

                                                </div>
                                                <div class="clr"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="product-info">
                            <div class="tab">
                                <button class="tablinks h-title" onclick="openCity(event, 'thong-so-ky-thuat')">Thông số kỹ thuật</button>
                                <button class="tablinks h-title" onclick="openCity(event, 'danh-gia')">Đánh giá</button>
                                <button class="tablinks h-title" onclick="openCity(event, 'huong-dan-su-dung')">Hướng dẫn sử dụng</button>
                                <button class="tablinks h-title" onclick="openCity(event, 'chinh-sach-bao-hanh')">Chính sách bảo hành</button>
                                <button class="tablinks h-title" onclick="openCity(event, 'chinh-sach-giao-hang')">Chính sách giao hàng</button>
                                <button class="tablinks h-title" onclick="openCity(event, 'phuong-thuc-thanh-toan')">Phương thức thanh toán</button>
                                <div class="clr"></div>
                            </div>
                            <div id="thong-so-ky-thuat" class="tabcontent">
                                <?php echo @$content; ?>
                            </div>
                            <div id="danh-gia" class="tabcontent">
                                <div class="fb-comments" data-href="<?php echo @$permalink; ?>" data-width="" data-numposts="5"></div>
                            </div>
                            <div id="huong-dan-su-dung" class="tabcontent">
                                <?php echo get_field("zaproduct_guide","option"); ?>
                            </div>
                            <div id="chinh-sach-bao-hanh" class="tabcontent">
                                <?php echo get_field("zaproduct_chinh_sach_bao_hanh","option"); ?>
                            </div>
                            <div id="chinh-sach-giao-hang" class="tabcontent">
                                <?php echo get_field("zaproduct_chinh_sach_giao_hang","option"); ?>
                            </div>
                            <div id="phuong-thuc-thanh-toan" class="tabcontent">
                                <?php echo get_field("zaproduct_payment_method","option"); ?>
                            </div>
                        </div>
                        <div class="product-detail-thong-so-ky-thuat">
                            <?php echo @$content; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
get_footer();
?>