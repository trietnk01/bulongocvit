<?php
/*
	Home template default
*/
	get_header();
	?>
	<h1 style="display: none;"><?php echo bloginfo( "name" ); ?></h1>
    <div class="container box-index">
        <div class="row">
            <div class="col">
                <div class="banner-box">
                    <?php
                    $data_banner=get_field("hp_banner_rpt","option");{
                        if (count(@$data_banner) > 0) {
                            ?>
                            <div class="owl-carousel-banner owl-carousel owl-theme owl-loaded">
                                <?php
                                foreach ($data_banner as $key => $value) {
                                    ?>
                                    <div class="item">
                                        <img src="<?php echo @$value["hp_banner_item"]; ?>" alt="<?php echo get_bloginfo( 'name', 'raw' ); ?>">
                                    </div>
                                    <?php
                                }
                                ?>
                            </div>
                            <?php
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3">
                <div class="box-dmsp">
                    <h2 class="dmsp-h">Danh mục sản phẩm</h2>
                    <ul class="dmsp-lst">
                        <?php
                        for ($i=0; $i < 10; $i++) {
                            ?>
                            <li><a href="javascript:void(0);">Bu lông đai ốc</a></li>
                            <?php
                        }
                        ?>
                    </ul>
                </div>
                <?php
                if(is_active_sidebar( "xt_counter_visitor" )) {
                    dynamic_sidebar( "xt_counter_visitor" );
                }
                ?>
                <div class="box-dmsp">
                    <h2 class="dmsp-h">Về công ty</h2>
                    <div class="rio-box">
                        Lời đầu tiên Công ty TNHH phát triển thương mại Thọ An xin gửi đến Quý Khách hàng lời chúc sức khỏe và lời chào trân trọng!
                        Sản phẩm của công ty Thọ An đa dạng về chủng loại với các mặt hàng: Bulông liên kết cấp bền: 4.8, 5.6, 6.6, 8.8, 10.9, 12.9; Bulông cường độ cao: S10T, F10T, A325, A490; Bulông, ốc vít Inox: SUS 201, SUS 304, SUS 316, SUS410; Bulông móng (Bu lông neo); Các loại: Vít gỗ, Vít Pake, vít tự khoan, vít bắn tôn,….Đinh hàn trong thi công sàn Deck, thi công cầu đường,…Sản xuất Bulông theo bản vẽ. Các sản phẩm tuân theo các hệ tiêu chuẩn: DIN (Đức), JIS (Nhật Bản), ISO (Tiêu chuẩn Quốc tế), ASTM/ANSI (Mỹ), BS (Anh), GB (Trung Quốc), GOST (Nga) và TCVN (Việt Nam).

                        Sự đồng hành và tin tưởng Quý khách hàng đã dành cho chúng tôi là động lực để chúng tôi quyết tâm hoàn thành sứ mệnh đã đặt ra.
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <?php
                for ($v=0; $v < 3; $v++) {
                    ?>
                    <div class="dssp-box">
                        <h2 class="dssp-h">Bu lông ốc vít</h2>
                        <div class="main-product-box">
                            <?php
                            $k=0;
                            for ($i=0; $i < 9; $i++) {
                                if($k%3 == 0){
                                    echo '<div class="row">';
                                }
                                ?>
                                <div class="col-lg-4">
                                    <div class="box-oc-vit-bulong-item">
                                        <div class="box-oc-bu-img">
                                            <a href="javascript:void(0);">
                                                <div class="box-product-featured-img">
                                                    <img src="<?php echo wp_upload_dir( null,true,false )["url"]."/bulong-304.jpg"; ?>" alt="<?php echo get_bloginfo( 'name', 'raw' ); ?>">
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
                                        <h3 class="box-oc-bu-title"><a href="javascript:void(0);">Bu lông lục giác chìm đầu trụ DIN 912</a></h3>
                                    </div>
                                </div>
                                <?php
                                $k++;
                                if($k%3 == 0 || $k==9){
                                    echo '</div>';
                                }
                            }
                            ?>
                        </div>
                    </div>
                    <?php
                }
                ?>
            </div>
            <div class="col-lg-3">
                <div class="support-online-box">
                    <div class="ho-tro-tot">
                        <div class="httt">
                            <div class="ho-tro">Hỗ trợ</div>
                            <div class="truc-tuyen">Trực tuyến</div>
                        </div>
                    </div>
                    <div class="support-hotline">
                        <div class="support-phone-icon"><img src="<?php echo get_template_directory_uri()."/assets/images/telephone.png"; ?>" alt="<?php echo get_bloginfo( 'name', 'raw' ); ?>"></div>
                        <div class="support-phone-number"><a href="tel:0903600002">0903 600 002</a></div>
                        <div class="clr"></div>
                    </div>
                    <div class="call-skype-viber-zalo">
                        Call: Skype - Viber - Zalo
                    </div>
                    <div class="cara-call-skype-viber-zalo">
                        <span><a href="skype:kimdien07?chat"><img src="<?php echo get_template_directory_uri()."/assets/images/skype.png";?>" alt="<?php echo get_bloginfo( 'name', 'raw' ); ?>"></a></span>
                        <span><a href="javascript:void(0);"><img src="<?php echo get_template_directory_uri()."/assets/images/viber.png";?>" alt="<?php echo get_bloginfo( 'name', 'raw' ); ?>"></a></span>
                        <span><a href="http://zalo.me/"><img src="<?php echo get_template_directory_uri()."/assets/images/zalo.png";?>" alt="<?php echo get_bloginfo( 'name', 'raw' ); ?>"></a></span>
                    </div>
                    <div class="support-email">
                        <a href="mailto:nguyenbaotuoc@gmail.com">Email: nguyenbaotuoc@gmail.com</a>
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
                        for ($i=0; $i < 5; $i++) {
                            ?>
                            <div class="roda-mau-thiet-ke">
                                <div class="mau-thiet-ke-left">
                                    <div class="box-oc-bu-img">
                                        <a href="javascript:void(0);">
                                            <div class="box-product-featured-img">
                                                <img src="<?php echo wp_upload_dir( null,true,false )["url"]."/bulong-304.jpg"; ?>" alt="<?php echo get_bloginfo( 'name', 'raw' ); ?>">
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
                                    <h4 class="mau-thiet-ke-right-h4"><a href="javascript:void(0);">Phân phối bu lông ốc vít inox các loại giá rẻ, đúng tiêu chuẩn, chất lượng</a></h4>
                                    <div class="margin-top-10 icon-heart">
                                        <span><i class="far fa-clock"></i></span><span class="margin-left-5">12/09/2019</span><span class="margin-left-5"><i class="far fa-heart"></i></span>
                                    </div>
                                </div>
                                <div class="clr"></div>
                            </div>
                            <?php
                        }
                        ?>
                    </div>
                </div>
                <div class="box-right">
                    <h2 class="bx-right-h">Sản phẩm mua nhiều</h2>
                    <div class="bx-right-wrapper">
                        <?php
                        for ($i=0; $i < 5; $i++) {
                            ?>
                            <div class="box-oc-vit-bulong-item">
                                <div class="box-oc-bu-img">
                                    <a href="javascript:void(0);">
                                        <div class="box-product-featured-img">
                                                    <img src="<?php echo wp_upload_dir( null,true,false )["url"]."/bulong-304.jpg"; ?>" alt="<?php echo get_bloginfo( 'name', 'raw' ); ?>">
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
                                <h3 class="box-oc-bu-title"><a href="javascript:void(0);">Bu lông lục giác chìm đầu trụ DIN 912</a></h3>
                                <div class="gia-lien-he"><span class="gia-1">Giá:</span><span class="lien-he-1">Liên hệ</span></div>
                            </div>
                            <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
            <?php
            get_footer();
            ?>