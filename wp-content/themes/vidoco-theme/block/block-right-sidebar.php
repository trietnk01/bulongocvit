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