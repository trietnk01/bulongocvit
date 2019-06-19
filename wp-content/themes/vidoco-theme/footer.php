<?php
/*

Footer template

*/
?>
<div class="container box-index">
  <div class="row">
    <div class="col">
      <div class="nika">
        <div class="owl-carousel-brand owl-carousel owl-theme owl-loaded">
          <?php
          for($i=0;$i<100;$i++) {
            ?>
            <div class="item">
              <img src="<?php echo wp_get_upload_dir()["url"]."/logo-1.jpg"; ?>" alt="<?php echo get_bloginfo( 'name', 'raw' ); ?>">
            </div>
            <?php
          }
          ?>
        </div>
      </div>
      <footer>
        <div class="row">
          <div class="col-lg-4">
            <div class="slogan-info">
              <div>CÔNG TY TNHH PHÁT TRIỂN THƯƠNG MẠI THỌ AN</div>

<div>Trụ sở: Bách Kim – Phú Kim – Thạch Thất – TP. Hà Nội</div>

<div>VPGD: Số 14/322 Lê Trọng Tấn – Q. Thanh Xuân – TP. Hà Nội</div>

<div>Email:&nbsp;bulongthanhren@gmail.com&nbsp;/&nbsp;thoanservice@gmail.com</div>

<div>Website:&nbsp;www.bulongthanhren.vn&nbsp;/&nbsp;www.bulongthoan.com.vn</div>

<div>Điện thoại:&nbsp;024.6326.3722&nbsp;/&nbsp;Hotline:&nbsp;0986 068 715&nbsp;–&nbsp;0982 83 1985</div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="fanpage-info">
              <div class="fb-page" data-href="https://www.facebook.com/facebook" data-tabs="timeline" data-width="" data-height="200" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/facebook" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/facebook">Facebook</a></blockquote></div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="map-box">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.7729502333677!2d106.6313720147495!3d10.828679992286109!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3175297c5dbf9479%3A0x809aeba3ce6bf8fb!2zSOG6u20gMTAyIFBoYW4gSHV5IMONY2gsIFBoxrDhu51uZyAxNSwgVMOibiBCw6xuaCwgSOG7kyBDaMOtIE1pbmgsIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1560938858053!5m2!1svi!2s" width="100%" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </div>
</div>
<!-- begin pan search -->
<div class="pan_search">
  <div class="pan_close">
   <a href="javascript:void(0);" onclick="closeFrmSearch();"><i class="fa fa-times" aria-hidden="true"></i></a>
 </div>
 <form class="frmsearcharticle" name="frm_search_article" method="POST">
  <div class="vatimkiem"><input value="" name="s" type="search" placeholder="Tìm kiếm" class="txt_search" autocomplete="off"></div>
  <div class="btnsearch">
    <a href="javascript:void(0);" onclick="document.forms['frm_search_article'].submit();"><img src="<?php echo get_template_directory_uri()."/assets/images/search-w.svg"; ?>" /></a>
  </div>
</form>
</div>
<!-- end pan search -->
<!-- begin modal cart -->
<div class="modal fade modal-add-cart" id="modal-alert-add-cart" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <div class="com-product-modal-title">Thông báo</div>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <div class="modal-body">

      </div>
    </div>
  </div>
</div>
<!-- end modal cart -->
<!-- begin scrolltop -->
<div class="scrollTop">
  <a href="javascript:void(0);"><i class="fa fa-angle-up" aria-hidden="true"></i></a>
</div>
<!-- end scrolltop -->
<?php
wp_footer();
?>
</body>
</html>
