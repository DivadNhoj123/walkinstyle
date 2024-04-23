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
									<div class="col-xl-9">
										<!--begin::List widget 5-->
										<div class="card card-flush h-xl-100">
											<!--begin::Header-->
											<div class="card-header pt-7">
												<!--begin::Title-->
												<h3 class="card-title align-items-start flex-column">
													<span class="card-label fw-bold text-dark">Cart</span>
													<span class="text-gray-400 mt-1 fw-semibold fs-6">Select your desired products to checkout.</span>
												</h3>
												<!--end::Title-->
												<!--begin::Toolbar-->
												<div class="card-toolbar">
													<a href="#" class="btn btn-sm btn-light">Select All</a>
												</div>
												<!--end::Toolbar-->
											</div>
											<!--end::Header-->
											<!--begin::Body-->
											<div class="card-body">
												<!--begin::Scroll-->
												<div class="hover-scroll-overlay-y pe-6 me-n6" style="height: 415px">
													<?php $i = 0;
													foreach ($on_cart as $cart) {
														$i++; ?>
														<!--begin::Item-->
														<div class="border border-dashed border-gray-300 rounded px-7 py-3 mb-6">
															<!--begin::Info-->
															<div class="d-flex flex-stack mb-3">
																<!--begin::Wrapper-->
																<div class="me-3">
																	<!--begin::Icon-->
																	<img src="<?= base_url('shoes/' . $cart->img) ?>" class="w-50px ms-n1 me-1" alt="">
																	<!--end::Icon-->
																	<!--begin::Title-->
																	<a href="#" class="text-gray-800 text-hover-primary fw-bold"><?= $cart->shoes_name ?></a>
																	<!--end::Title-->
																</div>
																<!--end::Wrapper-->
																<!--begin::Action-->
																<div class="m-0">
																	<!--begin::Menu-->
																	<div class="form-check form-check-custom form-check-success form-check-solid">
																		<input class="form-check-input" type="checkbox" name="order[]" value="<?= $cart->shoes_name ?>" data-kt-element="checkbox">
																	</div>
																</div>
																<!--end::Action-->
															</div>
															<!--end::Info-->
															<!--begin::Customer-->
															<div class="d-flex flex-stack">
																<!--begin::Name-->
																<span class="text-gray-400 fw-bold">Qty:
																	<a class="text-gray-800 text-hover-primary fw-bold">
																		<span class="badge badge-danger" id="minusBtn<?= $i ?>"><i class="ti-minus"></i></span>
																		<input type="text" id="quantityInput<?= $i ?>" class="col-sm-2 text-center" style="height: 20px;" name="quantity[]" value="<?= $cart->product_qty ?>">
																		<span class="badge badge-info" id="plusBtn<?= $i ?>"><i class="ti-plus"></i></span>
																	</a>
																</span>
																<!--end::Name-->
																<!--begin::Label-->
																<span class="badge badge-light-success"><?= $cart->price ?></span>
																<!--end::Label-->
															</div>
															<!--end::Customer-->
														</div>
														<!--end::Item-->
													<?php } ?>
												</div>
												<!--end::Scroll-->
											</div>
											<!--end::Body-->
										</div>
										<!--end::List widget 5-->
									</div>
									<div class="col-xl-3">
										<!--begin::List widget 5-->
										<div class="card ">
											<!--begin::Header-->
											<div class="card-header pt-7">
												<!--begin::Title-->
												<h3 class="card-title align-items-start flex-column">
													<span class="card-label fw-bold text-dark">Checkout Cart</span>
													<span class="text-gray-400 mt-1 fw-semibold fs-6">Choose Payment Method</span>
												</h3>
												<!--end::Title-->

											</div>
											<!--end::Header-->
											<!--begin::Body-->
											<div class="card-body">
												<div class="border border-dashed border-gray-300 rounded px-7 py-3 mb-6">
													<!--begin::Info-->
													<div class="d-flex flex-stack mb-3">
														<!--begin::Wrapper-->
														<div class="me-3">
															<!--begin::Icon-->
															<img src="<?= base_url('assets/tem-plate'); ?>/media/logos/gcash.jpg" class="w-50px ms-n1 me-1" alt="">
															<!--end::Icon-->
															<!--begin::Title-->
															<a href="#" class="text-gray-800 text-hover-primary fw-bold">G Cash</a>
															<!--end::Title-->
														</div>
														<!--end::Wrapper-->
														<!--begin::Action-->
														<div class="m-0">
															<!--begin::Menu-->
															<div class="form-check form-check-custom form-check-info form-check-solid">
																<input class="form-check-input" type="checkbox" value="g cash" name="g-cash" data-kt-element="checkbox">
															</div>
														</div>
														<!--end::Action-->
													</div>
													<!--end::Info-->
												</div>
												<div class="border border-dashed border-gray-300 rounded px-7 py-3 mb-6">
													<!--begin::Info-->
													<div class="d-flex flex-stack mb-3">
														<!--begin::Wrapper-->
														<div class="me-3">
															<!--begin::Icon-->
															<img src="<?= base_url('assets/tem-plate'); ?>/media/logos/maya.jpg" class="w-50px ms-n1 me-1" alt="">
															<!--end::Icon-->
															<!--begin::Title-->
															<a href="#" class="text-gray-800 text-hover-primary fw-bold">Pay Maya</a>
															<!--end::Title-->
														</div>
														<!--end::Wrapper-->
														<!--begin::Action-->
														<div class="m-0">
															<!--begin::Menu-->
															<div class="form-check form-check-custom form-check-info form-check-solid">
																<input class="form-check-input" type="checkbox" value="pay maya" name="pay-maya" data-kt-element="checkbox">
															</div>
														</div>
														<!--end::Action-->
													</div>
													<!--end::Info-->
												</div>
												<div class="border border-dashed border-gray-300 rounded px-7 py-3 mb-6">
													<!--begin::Info-->
													<div class="d-flex flex-stack mb-3">
														<!--begin::Wrapper-->
														<div class="me-3">
															<!--begin::Icon-->
															<img src="<?= base_url('assets/tem-plate'); ?>/media/logos/cod.jpg" class="w-50px ms-n1 me-1" alt="">
															<!--end::Icon-->
															<!--begin::Title-->
															<a href="#" class="text-gray-800 text-hover-primary fw-bold">COD</a>
															<!--end::Title-->
														</div>
														<!--end::Wrapper-->
														<!--begin::Action-->
														<div class="m-0">
															<!--begin::Menu-->
															<div class="form-check form-check-custom form-check-info form-check-solid">
																<input class="form-check-input" type="checkbox" value="cod" name="cod" data-kt-element="checkbox">
															</div>
														</div>
														<!--end::Action-->
													</div>
													<!--end::Info-->
												</div>
												<!--begin::Toolbar-->
												<form action="<?= base_url('root/checkout') ?>" method="post">
													<?php foreach ($on_cart as $cart) { ?>
														<input type="hidden" name="order[]" value="<?= $cart->shoes_id ?>">
														<input type="hidden" name="quantity[]" value="<?= $cart->product_qty ?>">
													<?php } ?>
													<button type="submit" class="btn btn-block btn-primary float-end">Checkout</button>
												</form>
												<!--end::Toolbar-->
											</div>
											<!--end::Body-->
										</div>
										<!--end::List widget 5-->
									</div>
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