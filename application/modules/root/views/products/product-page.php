<!DOCTYPE html>
<html lang="en">
<!--begin::Head-->
<?php $this->load->view('products/template/_header'); ?>

<body id="kt_body" data-kt-app-header-stacked="true" data-kt-app-header-primary-enabled="true" data-kt-app-header-secondary-enabled="true" data-kt-app-toolbar-enabled="true" class="app-default">
	<script>
		var defaultThemeMode = "light";
		var themeMode;
		if (document.documentElement) {
			if (document.documentElement.hasAttribute("data-bs-theme-mode")) {
				themeMode = document.documentElement.getAttribute("data-bs-theme-mode");
			} else {
				if (localStorage.getItem("data-bs-theme") !== null) {
					themeMode = localStorage.getItem("data-bs-theme");
				} else {
					themeMode = defaultThemeMode;
				}
			}
			if (themeMode === "system") {
				themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";
			}
			document.documentElement.setAttribute("data-bs-theme", themeMode);
		}
	</script>
	<!--begin::App-->
	<div class="d-flex flex-column flex-root app-root" id="kt_app_root">
		<!--begin::Page-->
		<div class="app-page flex-column flex-column-fluid" id="kt_app_page">

			<?php $this->load->view('products/template/_topbar'); ?>

			<div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">
				<!--begin::Wrapper container-->
				<div class="app-container container-xxl d-flex flex-row flex-column-fluid">
					<!--begin::Main-->
					<div class="app-main flex-column flex-row-fluid" id="kt_app_main">
						<!--begin::Content wrapper-->
						<div class="d-flex flex-column flex-column-fluid">
							<!--begin::Content-->
							<div id="kt_app_content" class="app-content pb-0">
								<!--begin::Row-->
								<div class="row gy-5 g-xl-10">
									<?php foreach ($shoes as $shoe) { ?>
										<div class="col-xl-3 mb-xl-10">
											<div class="card h-md-100">
												<div class="card-body pt-2">
													<form id="add-to-cart-form" action="<?= base_url('root/add_cart'); ?>" method="POST">
														<h1><?= $shoe->shoes_name ?></h1>
														<img class="img-fluid standardized-image" src="<?= base_url('shoes/' . $shoe->img) ?>" alt="item">
														<div class="border border-bottom border-secondary mb-2 mt-2"></div>
														<div class="row">
															<div class="col-sm-4">
																<h4 class="fw-bold">
																	₱ <?= $shoe->price ?>
																</h4>
															</div>
															<div class="col-sm-8">
																<input type="hidden" name="shoes_id" value="<?= $shoe->id ?>">
																<button type="submit" class="btn btn-md btn-primary add-to-cart">
																	<i class="ti-shopping-cart"></i>
																	Add Cart
																</button>
															</div>
														</div>
													</form>
												</div>
											</div>
										</div>
									<?php } ?>
								</div>
								<!--end::Row-->
							</div>
							<!--end::Content-->
						</div>
						<!--end::Content wrapper-->

						<?php $this->load->view('products/template/_footer'); ?>
					</div>
				</div>
				<!--end::Wrapper container-->
			</div>
		</div>
		<!--end::Page-->
	</div>
	<!--end::App-->
	<?php $this->load->view('products/template/_script'); ?>
</body>
<!--end::Body-->

</html>