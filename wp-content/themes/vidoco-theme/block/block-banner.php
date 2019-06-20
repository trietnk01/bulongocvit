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