<?php
/*

Footer template

*/
?>
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
