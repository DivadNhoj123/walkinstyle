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
                                <div class="card card-flush">
                                    <div class="card-header align-items-center py-5 gap-2 gap-md-5">
                                        <!--begin::Card title-->
                                        <div class="card-title">
                                            <!--begin::Search-->
                                            <div class="d-flex align-items-center position-relative my-1">
                                                <i class="ki-duotone ki-magnifier fs-3 position-absolute ms-4">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                                <input type="text" data-kt-ecommerce-product-filter="search" class="form-control form-control-solid w-250px ps-12" placeholder="Search Product" />
                                            </div>
                                            <!--end::Search-->
                                        </div>
                                        <!--end::Card title-->
                                    </div>
                                    <div class="card-body pt-0">
                                        <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_ecommerce_products_table">
                                            <thead>
                                                <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                                                    <th class="w-10px pe-2">
                                                        <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                                            <input class="form-check-input" type="checkbox" data-kt-check="true" data-kt-check-target="#kt_ecommerce_products_table .form-check-input" value="1" />
                                                        </div>
                                                    </th>
                                                    <th class="min-w-200px">Product</th>
                                                    <th class="text-start min-w-70px">Courier</th>
                                                    <th class="text-end min-w-70px">Amount</th>
                                                    <th class="text-end min-w-50px">Method</th>
                                                    <th class="text-end min-w-100px">Date Ordered</th>
                                                    <th class="text-end min-w-100px">Ship Address</th>
                                                </tr>
                                            </thead>
                                            <tbody class="fw-semibold text-gray-600">
                                                <?php foreach ($orders as $product) { ?>
                                                    <tr>
                                                        <td>
                                                            <div class="form-check form-check-sm form-check-custom form-check-solid">
                                                                <input class="form-check-input" type="checkbox" value="1" />
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <div class="d-flex align-items-center">
                                                                <!--begin:: Avatar -->
                                                                <div class="d-flex align-items-center">
                                                                    <!--begin::Thumbnail-->
                                                                    <a href="#" class="symbol symbol-50px">
                                                                        <span class="symbol-label" style="background-image:url(<?= base_url('shoes/' . $product->img) ?>);"></span>
                                                                    </a>
                                                                    <!--end::Thumbnail-->
                                                                    <div class="ms-5">
                                                                        <!--begin::Title-->
                                                                        <a href="#" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name"><?= $product->shoes_name ?></a>
                                                                        <!--end::Title-->
                                                                        <div class="fs-7 text-muted">Order Status:  <span class="fw-bold badge badge-info text-capitalize"><?= $product->status ?></span> </div>
                                                                    </div>
                                                                </div>
                                                                <!--end::Avatar-->
                                                            </div>
                                                        </td>
                                                        <td class="d-flex align-items-center">
                                                            <!--begin:: Avatar -->
                                                            <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                                                <a>
                                                                    <div class="symbol-label fs-3 bg-light-warning text-warning">
                                                                        <?php
                                                                        $initials = strtoupper(substr($product->courier_name, 0, 1) . substr($product->courier_lname, 0, 1));
                                                                        echo $initials;
                                                                        ?>
                                                                    </div>
                                                                </a>
                                                            </div>
                                                            <!--end::Avatar-->
                                                            <!--begin::User details-->
                                                            <div class="d-flex flex-column">
                                                                <a class="text-gray-800 text-hover-primary mb-1" data-kt-ecommerce-product-filter="product_name"><?= $product->courier_name ?> <?= $product->courier_lname ?></a>
                                                                <div class="fs-7 text-muted">Courier Contact: <?= $product->courier_phone ?></div>
                                                            </div>
                                                            <!--begin::User details-->
                                                        </td>
                                                       
                                                        <td class="text-end pe-0">
                                                           <?= $product->amount ?>
                                                        </td>
                                                        <td class="text-end pe-0 text-uppercase">
                                                            <?= $product->payment_method ?>
                                                        </td>
                                                        <td class="text-end pe-0">
                                                            <span class="fw-bold"><?= $product->date ?></span>
                                                        </td>
                                                        <td class="text-end pe-0">
                                                            <span class="fw-bold"><?= $product->recip_address ?> <?= $product->recip_province ?>, <?= $product->recip_zipcode ?></span>
                                                        </td>
                                                    </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                        <!--end::Row-->
                                    </div>
                                    <!--end::Content-->
                                </div>
                            </div>
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
    <?php $this->load->view('products/products-scripts'); ?>
</body>
<!--end::Body-->

</html>