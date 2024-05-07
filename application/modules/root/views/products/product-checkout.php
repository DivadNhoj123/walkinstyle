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
									<div class="col-xl-1"></div>
									<div class="col-xl-10">
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
													<?php
													$i = 0;
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
																	<button class="btn btn-icon btn-color-gray-400 btn-active-color-primary justify-content-end" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true">
																		<i class="ki-duotone ki-dots-square fs-1">
																			<span class="path1"></span>
																			<span class="path2"></span>
																			<span class="path3"></span>
																			<span class="path4"></span>
																		</i>
																	</button>
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
																		<input type="text" id="quantityInput<?= $i ?>" class="col-sm-2 text-center" style="height: 20px;" value="<?= $cart->product_qty ?>">
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
														<!--begin::Item-->
													<?php } ?>
												</div>
												<!--end::Scroll-->
											</div>
											<!--end::Body-->
										</div>
										<!--end::List widget 5-->
									</div>
									<div class="col-xl-5">
										<!--begin::List widget 6-->
										<div class="card card-flush h-md-100">
											<!--begin::Header-->
											<div class="card-header pt-7">
												<!--begin::Title-->
												<h3 class="card-title align-items-start flex-column">
													<span class="card-label fw-bold text-gray-800">Checkout Cart</span>
													<span class="text-gray-400 mt-1 fw-semibold fs-6">Experience fast and safe delivery</span>
												</h3>
												<!--end::Title-->
											</div>
											<!--end::Header-->
											<!--begin::Body-->
											<div class="card-body pt-4">
												<!--begin::Table container-->
												<div class="hover-scroll-overlay-y pe-6 me-n6" style="height: 415px">
													<div class="table-responsive">
														<!--begin::Table-->
														<table class="table table-row-dashed align-middle gs-0 gy-4 my-0">
															<!--begin::Table head-->
															<thead>
																<tr class="fs-7 fw-bold text-gray-500 border-bottom-0">
																	<th class="p-0 w-50px pb-1">ITEM</th>
																	<th class="ps-0 min-w-140px"></th>
																	<th class="text-end min-w-140px p-0 pb-1">TOTAL PRICE</th>
																	<th "></th>
															</tr>
														</thead>
														<!--end::Table head-->
														<!--begin::Table body-->
														<tbody>
															<?php foreach ($on_cart as $shoe) { ?>
																<tr>
																	<td>
																		<img src=" <?= base_url('shoes/' . $cart->img) ?>" class="w-50px" alt="">
																		</td>
																	<td class="ps-0">
																		<a href="#" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6 text-start pe-0"><?= $cart->shoes_name ?></a>
																		<span class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">Item: #XDG-2347</span>
																	</td>
																	<td>
																		<span class="text-gray-800 fw-bold d-block fs-6 ps-0 text-end">$72.00</span>
																	</td>
																	<td class="text-end">
																		<a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
																			<i class="ki-duotone ki-down fs-5 ms-1"></i></a>
																		<!--begin::Menu-->
																		<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
																			<!--begin::Menu item-->
																			<div class="menu-item px-3">
																				<a href="#" class="menu-link px-3">Edit</a>
																			</div>
																			<!--end::Menu item-->
																			<!--begin::Menu item-->
																			<div class="menu-item px-3">
																				<a href="#" class="menu-link px-3" data-kt-ecommerce-product-filter="delete_row">Delete</a>
																			</div>
																			<!--end::Menu item-->
																		</div>
																		<!--end::Menu-->
																	</td>
																</tr>
															<?php } ?>

															</tbody>
															<!--end::Table body-->
														</table>
													</div>
												</div>
												<!--end::Table-->
												<div class="card-toolbar">
													<a href="#" class="btn btn-sm btn-info float-end">Checkout</a>
												</div>
											</div>
											<!--end::Body-->
										</div>
										<!--end::List widget 6-->
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