<!DOCTYPE html>
<html lang="en">
<!--begin::Head-->
<?php $this->load->view('admin-panel/template/_header'); ?>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_app_body" data-kt-app-header-fixed="true" data-kt-app-header-fixed-mobile="true" data-kt-app-sidebar-enabled="true" data-kt-app-sidebar-fixed="true" data-kt-app-sidebar-hoverable="true" data-kt-app-sidebar-push-toolbar="true" data-kt-app-sidebar-push-footer="true" data-kt-app-toolbar-enabled="true" data-kt-app-aside-enabled="true" data-kt-app-aside-fixed="true" data-kt-app-aside-push-toolbar="true" data-kt-app-aside-push-footer="true" class="app-default">
    <!--begin::Theme mode setup on page load-->
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
    <!--end::Theme mode setup on page load-->
    <!--begin::App-->
    <div class="d-flex flex-column flex-root app-root" id="kt_app_root">
        <!--begin::Page-->
        <div class="app-page flex-column flex-column-fluid" id="kt_app_page">
            <!--begin::Header-->
            <?php $this->load->view('admin-panel/template/_topbar'); ?>
            <!--end::Header-->
            <!--begin::Wrapper-->
            <div class="app-wrapper flex-column flex-row-fluid" id="kt_app_wrapper">
                <!--begin::Sidebar-->
                <?php $this->load->view('admin-panel/template/_sidebar'); ?>
                <!--end::Sidebar-->
                <!--begin::Main-->
                <div class="app-main flex-column flex-row-fluid" id="kt_app_main">
                    <div class="d-flex flex-column flex-column-fluid">
                        <!--begin::Toolbar-->
                        <div id="kt_app_toolbar" class="app-toolbar pt-5">
                            <!--begin::Toolbar container-->
                            <div id="kt_app_toolbar_container" class="app-container container-fluid d-flex align-items-stretch">
                                <!--begin::Toolbar wrapper-->
                                <div class="app-toolbar-wrapper d-flex flex-stack flex-wrap gap-4 w-100">
                                    <!--begin::Page title-->
                                    <div class="page-title d-flex flex-column gap-1 me-3 mb-2">
                                        <!--begin::Breadcrumb-->
                                        <ul class="breadcrumb breadcrumb-separatorless fw-semibold mb-6">
                                            <!--begin::Item-->
                                            <li class="breadcrumb-item text-gray-700 fw-bold lh-1">
                                                <a href="<?= base_url('admin/adminPanel'); ?>" class="text-gray-500">
                                                    <i class="ki-duotone ki-home fs-3 text-gray-400 me-n1"></i>
                                                </a>
                                            </li>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <li class="breadcrumb-item">
                                                <i class="ki-duotone ki-right fs-4 text-gray-700 mx-n1"></i>
                                            </li>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <li class="breadcrumb-item text-gray-700 fw-bold lh-1">Walk N Style</li>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <li class="breadcrumb-item">
                                                <i class="ki-duotone ki-right fs-4 text-gray-700 mx-n1"></i>
                                            </li>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <li class="breadcrumb-item text-gray-700 fw-bold lh-1">Order</li>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <li class="breadcrumb-item">
                                                <i class="ki-duotone ki-right fs-4 text-gray-700 mx-n1"></i>
                                            </li>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <li class="breadcrumb-item text-gray-700 fw-bold lh-1">Product Order</li>
                                            <!--end::Item-->
                                        </ul>
                                        <!--end::Breadcrumb-->
                                        <!--begin::Title-->
                                        <h1 class="page-heading d-flex flex-column justify-content-center text-dark fw-bolder fs-1 lh-0">Orders</h1>
                                        <!--end::Title-->
                                    </div>
                                    <!--end::Page title-->
                                    <!--begin::Actions-->
                                    <!--end::Actions-->
                                </div>
                                <!--end::Toolbar wrapper-->
                            </div>
                            <!--end::Toolbar container-->
                        </div>
                        <!--end::Toolbar-->
                        <!--begin::Content-->
                        <div id="kt_app_content" class="app-content flex-column-fluid">
                            <!--begin::Content container-->
                            <div id="kt_app_content_container" class="app-container container-fluid">
                                <!--begin::Products-->
                                <div class="card card-flush">
                                    <!--begin::Card header-->
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
                                        <!--begin::Card toolbar-->
                                        <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
                                            <!--begin::Add product-->
                                            <a href="<?= base_url('admin/productAdd'); ?>" class="btn btn-primary">Deliver Orders</a>
                                            <!--end::Add product-->
                                        </div>
                                        <!--end::Card toolbar-->
                                    </div>
                                    <!--end::Card header-->
                                    <!--begin::Card body-->
                                    <div class="card-body pt-0">
                                        <!--begin::Table-->
                                        <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_ecommerce_products_table">
                                            <thead>
                                                <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
                                                    <th class="w-10px pe-2">
                                                        <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                                                            <input class="form-check-input" type="checkbox" data-kt-check="true" data-kt-check-target="#kt_ecommerce_products_table .form-check-input" value="1" />
                                                        </div>
                                                    </th>
                                                    <th class="min-w-200px">Customer</th>
                                                    <th class="text-end min-w-70px">Status</th>
                                                    <th class="text-end min-w-70px">Amount</th>
                                                    <th class="text-end min-w-50px">Method</th>
                                                    <th class="text-end min-w-100px">Date Ordered</th>
                                                    <th class="text-end min-w-100px">Ship Address</th>
                                                    <th class="text-end min-w-70px">Actions</th>
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
                                                                <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                                                    <a>
                                                                        <div class="symbol-label fs-3 bg-light-warning text-warning">
                                                                            <?php
                                                                            $initials = strtoupper(substr($product->first_name, 0, 1) . substr($product->last_name, 0, 1));
                                                                            echo $initials;
                                                                            ?>
                                                                        </div>
                                                                    </a>
                                                                </div>
                                                                <!--end::Avatar-->
                                                                <div class="ms-5">
                                                                    <!--begin::Title-->
                                                                    <a class="text-gray-800 text-hover-primary fs-5 fw-bold">
                                                                        <?= $product->first_name ?>
                                                                        <?= $product->last_name ?>
                                                                    </a>
                                                                    <!--end::Title-->
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="text-end pe-0 text-capitalize" data-order="Low Stock">
                                                            <div class="badge badge-light-primary"><?= $product->status ?></div>
                                                        </td>
                                                        <td class="text-end pe-0">
                                                            <span class="fw-bold"><?= $product->amount ?></span>
                                                        </td>
                                                        <td class="text-end pe-0 text-uppercase">
                                                            <?= $product->payment_method ?>
                                                        </td>
                                                        <td class="text-end pe-0">
                                                            <span class="fw-bold"><?= $product->date ?></span>
                                                        </td>
                                                        <td class="text-end pe-0">
                                                            <span class="fw-bold"><?= $product->address ?></span>
                                                        </td>
                                                        <td class="text-end">
                                                            <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                                                <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                                                            <!--begin::Menu-->
                                                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                                                <!--begin::Menu item-->
                                                                <div class="menu-item px-3">
                                                                    <a href="<?= base_url('admin/viewOrders/') . $product->order_id ?>" class="menu-link px-3">View</a>
                                                                </div>
                                                                <!--end::Menu item-->
                                                                <!--begin::Menu item-->
                                                                <div class="menu-item px-3">
                                                                    <a href="#" class="menu-link px-3" data-bs-toggle="modal" data-bs-target="#kt_modal_create_app">Deliver</a>
                                                                </div>
                                                                <!--end::Menu item-->
                                                            </div>
                                                            <!--end::Menu-->
                                                            <div class="modal fade" id="kt_modal_create_app" tabindex="-1" aria-hidden="true">
                                                                <!--begin::Modal dialog-->
                                                                <div class="modal-dialog modal-dialog-centered mw-600px">
                                                                    <!--begin::Modal content-->
                                                                    <div class="modal-content">
                                                                        <!--begin::Modal header-->
                                                                        <div class="modal-header pb-0 border-0 justify-content-end">
                                                                            <!--begin::Close-->
                                                                            <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                                                                                <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>
                                                                            </div>
                                                                            <!--end::Close-->
                                                                        </div>
                                                                        <!--begin::Modal header-->

                                                                        <!--begin::Modal body-->
                                                                        <div class="modal-body scroll-y mx-5 mx-xl-18 pt-0 pb-15">
                                                                            <!--begin::Heading-->
                                                                            <div class="text-center mb-13">
                                                                                <!--begin::Title-->
                                                                                <h1 class="mb-3">Delever this Order</h1>
                                                                                <!--end::Title-->

                                                                                <!--begin::Description-->
                                                                                <div class="text-muted fw-semibold fs-5">
                                                                                    Are you sure to deliver this order?
                                                                                </div>
                                                                                <!--end::Description-->
                                                                            </div>
                                                                            <!--end::Heading-->

                                                                            <!--begin::Users-->
                                                                            <div class="mb-15">
                                                                                <!--begin::List-->
                                                                                <div class="mh-275px scroll-y me-n7 pe-7">
                                                                                    <!--begin::User-->
                                                                                    <div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
                                                                                        <!--begin::Details-->
                                                                                        <div class="d-flex align-items-center">
                                                                                            <!--begin::Avatar-->
                                                                                            <div class="symbol symbol-35px symbol-circle">
                                                                                                <span class="symbol-label bg-light-danger text-danger fw-semibold">
                                                                                                    E </span>
                                                                                            </div>
                                                                                            <!--end::Avatar-->

                                                                                            <!--begin::Details-->
                                                                                            <div class="ms-6">
                                                                                                <!--begin::Name-->
                                                                                                <a href="#" class="d-flex align-items-center fs-5 fw-bold text-gray-900 text-hover-primary">
                                                                                                    Emma Bold

                                                                                                    <span class="badge badge-light fs-8 fw-semibold ms-2">
                                                                                                        Corporate Finance </span>
                                                                                                </a>
                                                                                                <!--end::Name-->

                                                                                                <!--begin::Email-->
                                                                                                <div class="fw-semibold text-muted">emma@intenso.com</div>
                                                                                                <!--end::Email-->
                                                                                            </div>
                                                                                            <!--end::Details-->
                                                                                        </div>
                                                                                        <!--end::Details-->

                                                                                        <!--begin::Stats-->
                                                                                        <div class="d-flex">
                                                                                            <!--begin::Sales-->
                                                                                            <div class="text-end">
                                                                                                <div class="fs-5 fw-bold text-gray-900">$5,000</div>

                                                                                                <div class="fs-7 text-muted">Sales</div>
                                                                                            </div>
                                                                                            <!--end::Sales-->
                                                                                        </div>
                                                                                        <!--end::Stats-->
                                                                                    </div>
                                                                                    <!--end::User-->
                                                                                </div>
                                                                                <!--end::List-->
                                                                            </div>
                                                                            <!--end::Users-->
                                                                            <div class="card card-flush ">
                                                                                <!--begin::Card header-->
                                                                                <div class="card-header">
                                                                                    <div class="card-title">
                                                                                        <h2>Select Courier</h2>
                                                                                    </div>
                                                                                </div>
                                                                                <!--end::Card header-->

                                                                                <!--begin::Card body-->
                                                                                <div class="card-body pt-0">
                                                                                    <!--begin::Input group-->
                                                                                    <form action="<?= base_url('admin/deliverOrder/' . $product->order_id) ?>" method="POST">
                                                                                        <div class="fv-row fv-plugins-icon-container">
                                                                                            <!--begin::Label-->
                                                                                            <label class="required form-label float-start">Courier</label>
                                                                                            <!--end::Label-->
                                                                                            <!--begin::Input-->
                                                                                            <select name="courier" class="form-select mb-3 select2-hidden-accessible" data-control="select2" data-hide-search="true" data-placeholder="Select an option" id="kt_ecommerce_add_product_status_select">
                                                                                                <?php foreach ($couriers as $courier) { ?>
                                                                                                    <option value="<?= $courier->courier_id ?> " selected>
                                                                                                        <?= $courier->courier_name ?>
                                                                                                        <?= $courier->courier_lname ?>
                                                                                                    </option>
                                                                                                <?php } ?>
                                                                                            </select>
                                                                                            <!--end::Input-->
                                                                                            <div class="card-toolbar flex-row-fluid justify-content-end">
                                                                                                <!--begin::Add product-->
                                                                                                <button type="submit" class="btn btn-primary">Deliver Now</button>
                                                                                                <!--end::Add product-->
                                                                                            </div>
                                                                                        </div>
                                                                                    </form>
                                                                                    <!--end::Input group-->

                                                                                    <!--begin::Input group-->
                                                                                </div>
                                                                                <!--end::Card header-->
                                                                            </div>
                                                                            <!--begin::Notice-->
                                                                            <!--end::Notice-->
                                                                        </div>
                                                                        <!--end::Modal body-->
                                                                    </div>
                                                                    <!--end::Modal dialog-->
                                                                </div>

                                                            </div>
                                                        </td>
                                                    </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                        <!--end::Table-->
                                    </div>
                                    <!--end::Card body-->
                                </div>
                                <!--end::Products-->
                            </div>
                            <!--end::Content container-->
                        </div>
                        <!--end::Content-->
                    </div>
                    <?php $this->load->view('admin-panel/template/_footer'); ?>
                </div>
                <!--end:::Main-->
            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Page-->
    </div>
    <!--end::App-->
    <!--begin::Javascript-->
    <?php $this->load->view('admin-panel/template/_script'); ?>
    <?php $this->load->view('admin-panel/orders/scripts'); ?>
    <!--end::Javascript-->
</body>
<!--end::Body-->

</html>