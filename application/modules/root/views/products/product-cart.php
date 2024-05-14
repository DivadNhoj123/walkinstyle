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
								<div id="kt_app_content" class="app-content pb-0">
									<!--begin::Row-->
									<form action="<?= base_url('root/checkout') ?>" method="post">
										<div class="row gy-5 g-xl-10">
											<!--begin::List widget 5-->
											<?php
											// Check if cart data exists
											if (!empty($cart)) {
												// Cart is not empty, display recipient address form and checkout button
											?>
												<div class="col-xl-8">
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
																	$i++;
																?>
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
																					<input id="checkoutCheckbox<?= $i ?>" class="form-check-input checkoutCheckbox" type="checkbox" name="order[]" data-kt-element="checkbox" value="<?= $cart->shoes_id ?>">
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
																					<span class="badge badge-danger minusBtn" data-index="<?= $i ?>"><i class="ti-minus"></i></span>
																					<input type="text" class="col-sm-2 text-center quantityInput" style="height: 20px;" name="quantity[]" value="<?= $cart->product_qty ?>">
																					<span class="badge badge-info plusBtn" data-index="<?= $i ?>"><i class="ti-plus"></i></span>
																				</a>
																			</span>
																			<!--end::Name-->
																			<!--begin::Label-->
																			<span>Price: <span class="badge badge-light-success">₱ <?= $cart->price ?></span></span> 
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
												<div class="col-xl-4">
													<div class="card">
														<!--begin::Header-->
														<div class="card-header pt-7">
															<!--begin::Title-->
															<h3 class="card-title align-items-start flex-column">
																<span class="card-label fw-bold text-dark">Recipient Address</span>
																<span class="text-gray-400 mt-1 fw-semibold fs-6">Fill free to edit recipient address.</span>
															</h3>
															<!--end::Title-->
														</div>
														<!--end::Header-->
														<!--begin::Body-->
														<div class="card-body">
															<div class="fv-row mb-10 fv-plugins-icon-container">
																<!--begin::Label-->
																<label class="d-flex align-items-center fs-5 fw-semibold mb-2">
																	<span class="required">Reciever Name</span>
																	<span class="ms-1" data-bs-toggle="tooltip" aria-label="Specify your unique app name" data-bs-original-title="Specify your unique app name" data-kt-initialized="1">
																		<i class="ki-duotone ki-information-5 text-gray-500 fs-6">
																			<span class="path1"></span>
																			<span class="path2"></span>
																			<span class="path3"></span>
																		</i>
																	</span>
																</label>
																<!--end::Label-->
																<!--begin::Input-->
																<input type="text" class="form-control form-control-lg form-control-solid" name="recipient" value="<?= $cart->first_name ?> <?= $cart->last_name ?> <?= $cart->middle_name ?>">
																<!--end::Input-->
																<div class="fv-plugins-message-container invalid-feedback"></div>
															</div>
															<div class="fv-row mb-10 fv-plugins-icon-container">
																<!--begin::Label-->
																<label class="d-flex align-items-center fs-5 fw-semibold mb-2">
																	<span class="required">Home Town</span>
																	<span class="ms-1" data-bs-toggle="tooltip" aria-label="Specify your unique app name" data-bs-original-title="Specify your unique app name" data-kt-initialized="1">
																		<i class="ki-duotone ki-information-5 text-gray-500 fs-6">
																			<span class="path1"></span>
																			<span class="path2"></span>
																			<span class="path3"></span>
																		</i>
																	</span>
																</label>
																<!--end::Label-->
																<!--begin::Input-->
																<input type="text" class="form-control form-control-lg form-control-solid" name="recip_address" placeholder="" value="<?= $cart->address ?>">
																<!--end::Input-->
																<div class="fv-plugins-message-container invalid-feedback"></div>
															</div>
															<div class="fv-row mb-10 fv-plugins-icon-container">
																<!--begin::Label-->
																<label class="d-flex align-items-center fs-5 fw-semibold mb-2">
																	<span class="required">Province</span>
																	<span class="ms-1" data-bs-toggle="tooltip" aria-label="Specify your unique app name" data-bs-original-title="Specify your unique app name" data-kt-initialized="1">
																		<i class="ki-duotone ki-information-5 text-gray-500 fs-6">
																			<span class="path1"></span>
																			<span class="path2"></span>
																			<span class="path3"></span>
																		</i>
																	</span>
																</label>
																<!--end::Label-->
																<!--begin::Input-->
																<input type="text" class="form-control form-control-lg form-control-solid" name="recip_province" placeholder="" value="<?= $cart->province ?>">
																<!--end::Input-->
																<div class="fv-plugins-message-container invalid-feedback"></div>
															</div>
															<div class="fv-row mb-10 fv-plugins-icon-container">
																<!--begin::Label-->
																<label class="d-flex align-items-center fs-5 fw-semibold mb-2">
																	<span class="required">Zip Code</span>
																	<span class="ms-1" data-bs-toggle="tooltip" aria-label="Specify your unique app name" data-bs-original-title="Specify your unique app name" data-kt-initialized="1">
																		<i class="ki-duotone ki-information-5 text-gray-500 fs-6">
																			<span class="path1"></span>
																			<span class="path2"></span>
																			<span class="path3"></span>
																		</i>
																	</span>
																</label>
																<!--end::Label-->
																<!--begin::Input-->
																<input type="text" class="form-control form-control-lg form-control-solid" name="recip_zipcode" placeholder="" value="<?= $cart->zipcode ?>">
																<!--end::Input-->
																<div class="fv-plugins-message-container invalid-feedback"></div>
															</div>
															<!--begin::Toolbar-->
															<a href="#" class="btn btn-block btn-primary float-end" data-bs-toggle="modal" data-bs-target="#kt_modal_create_app" id="checkoutButton">Checkout</a>
															<!--end::Toolbar-->
															<div class="modal fade" id="kt_modal_create_app" tabindex="-1" aria-hidden="true">
																<!--begin::Modal dialog-->
																<div class="modal-dialog modal-dialog-centered mw-900px">
																	<!--begin::Modal content-->
																	<div class="modal-content">
																		<!--begin::Modal header-->
																		<div class="modal-header">
																			<!--begin::Modal title-->
																			<h2>Order Checkout</h2>
																			<!--end::Modal title-->
																			<!--begin::Close-->
																			<div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
																				<i class="ki-duotone ki-cross fs-1">
																					<span class="path1"></span>
																					<span class="path2"></span>
																				</i>
																			</div>
																			<!--end::Close-->
																		</div>
																		<!--end::Modal header-->
																		<!--begin::Modal body-->
																		<div class="modal-body py-lg-10 px-lg-10">
																			<div class="d-flex flex-column flex-xl-row gap-7 gap-lg-10">
																				<!--begin::Order details-->
																				<div class="border border-dashed border-gray-300 rounded px-7 py-3 mb-6">
																					<div class="card card-flush py-4 flex-row-fluid">
																						<!--begin::Card header-->
																						<div class="card-header">
																							<div class="card-title">
																								<h2>Order Details</h2>
																							</div>
																						</div>
																						<!--end::Card header-->

																						<!--begin::Card body-->
																						<div class="card-body pt-0">
																							<div class="table-responsive">
																								<!--begin::Table-->
																								<table class="table align-middle table-row-bordered mb-0 fs-6 gy-5 min-w-300px">
																									<tbody class="fw-semibold text-gray-600">
																										<tr id="totalOrderRow">
																											<td class="text-muted">
																												<div class="d-flex align-items-center">
																													<i class="ti-shopping-cart fs-2 me-2"></i>
																													Total Order
																												</div>
																											</td>
																											<td class="fw-bold text-end" id="totalOrderAmount">
																												₱ 0.00
																											</td>
																										</tr>
																										<tr>
																											<td class="text-muted">
																												<div class="d-flex align-items-center">
																													<i class="ti-truck fs-2 me-2"><span class="path1"></span><span class="path2"></span></i>
																													Shipping Fee
																												</div>
																											</td>
																											<td class="fw-bold text-end">
																												₱ 150
																											</td>
																										</tr>
																										<tr>
																											<td class="text-muted">
																												<div class="d-flex align-items-center">
																													Total Amount
																												</div>
																											</td>
																											<td class="fw-bold text-end" id="totalAmount">
																												₱ 0.00
																											</td>
																											<input type="hidden" id="totalInput" name="amount" value="">
																										</tr>
																									</tbody>
																								</table>
																								<!--end::Table-->
																							</div>
																						</div>
																						<!--end::Card body-->
																					</div>
																				</div>
																				<!--end::Order details-->

																				<!--begin::Customer details-->
																				<div class="border border-dashed border-gray-300 rounded px-7 py-3 mb-6">
																					<div class="card card-flush py-4  flex-row-fluid">
																						<!--begin::Card body-->
																						<div class="card-body pt-0">
																							<!--begin::Step 1-->
																							<div class="current" data-kt-stepper-element="content">
																								<div class="w-100">
																									<!--begin::Input group-->
																									<div class="fv-row">
																										<!--begin::Label-->
																										<label class="d-flex align-items-center fs-5 fw-semibold mb-4">
																											<span class="required">Payment Method</span>
																											<span class="ms-1" data-bs-toggle="tooltip" title="Select your app category">
																												<i class="ki-duotone ki-information-5 text-gray-500 fs-6">
																													<span class="path1"></span>
																													<span class="path2"></span>
																													<span class="path3"></span>
																												</i>
																											</span>
																										</label>
																										<!--end::Label-->
																										<!--begin:Options-->
																										<div class="fv-row">
																											<!--begin:Option-->
																											<label class="d-flex flex-stack mb-5 cursor-pointer">
																												<!--begin:Label-->
																												<span class="d-flex align-items-center me-2">
																													<!--begin:Icon-->
																													<span class="symbol symbol-50px me-6">
																														<span class="symbol-label ">
																															<img src="<?= base_url('assets/tem-plate'); ?>/media/logos/gcash.jpg" class="w-50px ms-n1 me-1">
																														</span>
																													</span>
																													<!--end:Icon-->
																													<!--begin:Info-->
																													<span class="d-flex flex-column">
																														<span class="fw-bold fs-6">G Cash</span>
																														<span class="fs-7 text-muted">Payment is on G Cash App</span>
																													</span>
																													<!--end:Info-->
																												</span>
																												<!--end:Label-->
																												<!--begin:Input-->
																												<span class="form-check form-check-custom form-check-solid">
																													<input id="gcash_radio" class="form-check-input" type="radio" name="payment_method" value="g cash" />
																												</span>
																												<!--end:Input-->
																											</label>
																											<!--end::Option-->
																											<!--begin:Option-->
																											<label class="d-flex flex-stack mb-5 cursor-pointer">
																												<!--begin:Label-->
																												<span class="d-flex align-items-center me-2">
																													<!--begin:Icon-->
																													<span class="symbol symbol-50px me-6">
																														<span class="symbol-label ">
																															<img src="<?= base_url('assets/tem-plate'); ?>/media/logos/maya.jpg" class="w-50px ms-n1 me-1">
																														</span>
																													</span>
																													<!--end:Icon-->
																													<!--begin:Info-->
																													<span class="d-flex flex-column">
																														<span class="fw-bold fs-6">Pay Maya</span>
																														<span class="fs-7 text-muted">Payment is on Maya App</span>
																													</span>
																													<!--end:Info-->
																												</span>
																												<!--end:Label-->
																												<!--begin:Input-->
																												<span class="form-check form-check-custom form-check-solid">
																													<input id="paymaya_radio" class="form-check-input" type="radio" name="payment_method" value="pay maya" />
																												</span>
																												<!--end:Input-->
																											</label>
																											<!--end::Option-->
																											<!--begin:Option-->
																											<label class="d-flex flex-stack cursor-pointer">
																												<!--begin:Label-->
																												<span class="d-flex align-items-center me-2">
																													<!--begin:Icon-->
																													<span class="symbol symbol-50px me-6">
																														<span class="symbol-label bg-light-success">
																															<img src="<?= base_url('assets/tem-plate'); ?>/media/logos/cod.jpg" class="w-50px ms-n1 me-1">
																														</span>
																													</span>
																													<!--end:Icon-->
																													<!--begin:Info-->
																													<span class="d-flex flex-column">
																														<span class="fw-bold fs-6">Cash on delivery [COD]</span>
																														<span class="fs-7 text-muted">Payment is on the destination</span>
																													</span>
																													<!--end:Info-->
																												</span>
																												<!--end:Label-->
																												<!--begin:Input-->
																												<span class="form-check form-check-custom form-check-solid">
																													<input id="cod_radio" class="form-check-input" type="radio" name="payment_method" value="cod">
																												</span>
																												<!--end:Input-->
																											</label>
																											<!--end::Option-->
																										</div>
																										<!--end:Options-->
																									</div>
																									<!--end::Input group-->
																								</div>
																							</div>
																							<!--end::Step 1-->
																							<!--begin::Actions-->
																							<div class="d-flex flex-stack pt-10 float-end">
																								<!--begin::Wrapper-->
																								<div>
																									<button id="continue_button" type="submit" class="btn btn-lg btn-primary" disabled>
																										Continue
																										<i class="ki-duotone ki-arrow-right fs-3 ms-1 me-0">
																											<span class="path1"></span>
																											<span class="path2"></span>
																										</i>
																									</button>
																								</div>
																								<!--end::Wrapper-->
																							</div>
																							<!--end::Actions-->
																						</div>

																						<!--end::Customer details-->
																					</div>
																				</div>
																				<!--end::Stepper-->
																			</div>
																			<!--end::Modal body-->
																		</div>
																		<!--end::Modal content-->
																	</div>
																	<!--end::Modal dialog-->
																</div>

															</div>
															<!--end::Body-->
														</div>
														<!--end::List widget 5-->
													</div>
												</div>
											<?php
											} else {
												// Cart is empty, display "Add to Cart Now!!" message
											?>
												<div class="col-xl-3"></div>
												<div class="col-xl-6">
													<div class="notice d-flex bg-light-primary rounded border-primary border border-dashed h-lg-100 p-6">
														<!--begin::Wrapper-->
														<div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
															<!--begin::Content-->
															<i class="ti-shopping-cart fs-4tx text-warning me-4"></i>
															<div class="mb-3 mb-md-0 fw-semibold">
																<h4 class="text-gray-900 fw-bold">Important Note!</h4>
																<div class="fs-4 text-gray-700 pe-7">
																	You did not left something in your cart.
																</div>
															</div>
															<!--end::Content-->

															<!--begin::Action-->
															<a href="<?= base_url('root/products');?>" class="btn btn-primary px-6 align-self-center text-nowrap">
																Add to Cart Now
															</a>
															<!--end::Action-->
														</div>
														<!--end::Wrapper-->
													</div>
												</div>
												<div class="col-xl-3"></div>
											<?php
											}
											?>
										</div>
									</form>
									<!--end::Row-->
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