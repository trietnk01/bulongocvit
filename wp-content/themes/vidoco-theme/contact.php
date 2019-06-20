<?php
/*
Template name: Template liên hệ
Template Post Type: post, page
*/
get_header();
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
			<div class="calo-box">
				<h1 class="lien-he-h">Liên hệ với chúng tôi</h1>
				<div class="row margin-top-15">
					<div class="col">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.562572449412!2d106.66927021474888!3d10.76815629232717!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752edc7f5620b9%3A0x4ca12cc2952b2cea!2zU8awIFbhuqFuIEjhuqFuaCwgSOG7kyBDaMOtIE1pbmgsIFZp4buHdCBOYW0!5e0!3m2!1svi!2s!4v1558410371443!5m2!1svi!2s" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>
				</div>
				<div class="box-contact">
					<div class="row">
						<div class="col">
							<div class="contact-intro">
								<?php echo get_field("setting_thong_tin_chung_loi_mo_dau","option"); ?>
							</div>
							<div class="contact-info margin-top-20">
								<span class="icon-fontawesome"><i class="fas fa-map-marker-alt"></i></span>
								<span class="margin-left-10"><?php echo get_field("setting_thong_tin_chung_address","option"); ?></span>
							</div>
							<div class="contact-info margin-top-10">
								<span class="icon-fontawesome"><i class="fas fa-mobile-alt"></i></span>
								<span class="margin-left-10"><?php echo get_field("setting_thong_tin_chung_hotline","option"); ?></span>
							</div>
							<div class="contact-info margin-top-10">
								<span class="icon-fontawesome"><i class="far fa-envelope"></i></span>
								<span class="margin-left-10"><?php echo get_field("setting_thong_tin_chung_email","option"); ?></span>
							</div>
							<form name="frm_contact" action="" class="frm-contact">
								<div class="ck-contact"><input type="text" name="fullname" class="form-control" placeholder="Họ tên" required autocomplete="off"></div>
								<div class="ck-contact"><input type="text" name="phone" class="form-control" placeholder="Điện thoại" required autocomplete="off"></div>
								<div class="ck-contact"><input type="text" name="email" class="form-control" placeholder="Email" required autocomplete="off"></div>
								<div class="ck-contact"><input type="text" name="title" class="form-control" placeholder="Tiêu đề" required autocomplete="off"></div>
								<div class="ck-contact">
									<textarea name="message" class="form-control" cols="30" rows="10" placeholder="Nhập nội dung" required="" autocomplete="off"></textarea>
								</div>
								<div class="ck-submit">
									<a href="javascript:void(0);" onclick="contactNow(this);">Gửi</a>
									<div class="ajax_loader_2"></div>
									<div class="clr"></div>
								</div>
								<div class="note">Cảm ơn đã đặt phòng tại khách sạn của chúng tôi . Chúng tôi sẽ liên hệ lại bạn trong thời gian sớm nhất.</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-3">
			<?php include get_template_directory()."/block/block-right-sidebar.php"; ?>
		</div>
		<?php
		get_footer();
		?>