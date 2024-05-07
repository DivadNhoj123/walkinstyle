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
                <div class="app-main flex-column flex-row-fluid " id="kt_app_main">
                    <!--begin::Content wrapper-->
                    <div class="d-flex flex-column flex-column-fluid">

                        <!--begin::Toolbar-->
                        <div id="kt_app_toolbar" class="app-toolbar  pt-5 ">

                            <!--begin::Toolbar container-->
                            <div id="kt_app_toolbar_container" class="app-container  container-fluid d-flex align-items-stretch ">
                                <!--begin::Toolbar wrapper-->
                                <div class="app-toolbar-wrapper d-flex flex-stack flex-wrap gap-4 w-100">

                                    <!--begin::Page title-->
                                    <div class="page-title d-flex flex-column gap-1 me-3 mb-2">
                                        <!--begin::Breadcrumb-->
                                        <ul class="breadcrumb breadcrumb-separatorless fw-semibold mb-6">

                                            <!--begin::Item-->
                                            <li class="breadcrumb-item text-gray-700 fw-bold lh-1">
                                                <a href="/saul-html-pro/index.html" class="text-gray-500 text-hover-primary">
                                                    <i class="ki-duotone ki-home fs-3 text-gray-500 me-n1"></i>
                                                </a>
                                            </li>
                                            <!--end::Item-->

                                            <!--begin::Item-->
                                            <li class="breadcrumb-item">
                                                <i class="ki-duotone ki-right fs-4 text-gray-700 mx-n1"></i>
                                            </li>
                                            <!--end::Item-->

                                            <!--begin::Item-->
                                            <li class="breadcrumb-item text-gray-700 fw-bold lh-1">
                                                Walk N Style
                                            </li>
                                            <!--end::Item-->

                                            <!--begin::Item-->
                                            <li class="breadcrumb-item">
                                                <i class="ki-duotone ki-right fs-4 text-gray-700 mx-n1"></i>
                                            </li>
                                            <!--end::Item-->


                                            <!--begin::Item-->
                                            <li class="breadcrumb-item text-gray-700 fw-bold lh-1">
                                                Orders </li>
                                            <!--end::Item-->

                                            <!--begin::Item-->
                                            <li class="breadcrumb-item">
                                                <i class="ki-duotone ki-right fs-4 text-gray-700 mx-n1"></i>
                                            </li>
                                            <!--end::Item-->

                                            <!--begin::Item-->
                                            <li class="breadcrumb-item text-gray-700">
                                                Order Details </li>
                                            <!--end::Item-->


                                        </ul>
                                        <!--end::Breadcrumb-->

                                        <!--begin::Title-->
                                        <h1 class="page-heading d-flex flex-column justify-content-center text-gray-900 fw-bolder fs-1 lh-0">
                                            Order Details
                                        </h1>
                                        <!--end::Title-->
                                    </div>
                                    <!--end::Page title-->
                                </div>
                                <!--end::Toolbar wrapper-->
                            </div>
                            <!--end::Toolbar container-->
                        </div>
                        <!--end::Toolbar-->

                        <!--begin::Content-->
                        <div id="kt_app_content" class="app-content  flex-column-fluid ">


                            <!--begin::Content container-->
                            <div id="kt_app_content_container" class="app-container  container-fluid ">
                                <!--begin::Order details page-->
                                <div class="d-flex flex-column gap-7 gap-lg-10">
                                    <div class="d-flex flex-wrap flex-stack gap-5 gap-lg-10">
                                        <!--begin:::Tabs-->
                                        <ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-semibold mb-lg-n2 me-auto" role="tablist">
                                            <!--begin:::Tab item-->
                                            <li class="nav-item" role="presentation">
                                                <a class="nav-link text-active-primary pb-4 active" data-bs-toggle="tab" href="#kt_ecommerce_sales_order_summary" aria-selected="true" role="tab">Order Summary</a>
                                            </li>
                                            <!--end:::Tab item-->
                                        </ul>
                                        <!--end:::Tabs-->

                                        <!--begin::Button-->
                                        <a href="<?= base_url('admin/orders');?>" class="btn  btn-light btn-active-secondary btn-sm ">
                                            <i class="ki-duotone ki-left fs-2"></i>
                                            Back
                                        </a>
                                        <!--end::Button-->
                                    </div>
                                    <!--begin::Order summary-->
                                    <div class="d-flex flex-column flex-xl-row gap-7 gap-lg-10">
                                        <!--begin::Order details-->
                                        <div class="card card-flush py-4 flex-row-fluid">
                                            <!--begin::Card header-->
                                            <div class="card-header">
                                                <div class="card-title">
                                                    <h2>Order Details (#<?= $orders->order_id ?>)</h2>
                                                </div>
                                            </div>
                                            <!--end::Card header-->

                                            <!--begin::Card body-->
                                            <div class="card-body pt-0">
                                                <div class="table-responsive">
                                                    <!--begin::Table-->
                                                    <table class="table align-middle table-row-bordered mb-0 fs-6 gy-5 min-w-300px">
                                                        <tbody class="fw-semibold text-gray-600">
                                                            <tr>
                                                                <td class="text-muted">
                                                                    <div class="d-flex align-items-center">
                                                                        <i class="ki-duotone ki-calendar fs-2 me-2"><span class="path1"></span><span class="path2"></span></i> Date Added
                                                                    </div>
                                                                </td>
                                                                <td class="fw-bold text-end"><?= $orders->date ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-muted">
                                                                    <div class="d-flex align-items-center">
                                                                        <i class="ki-duotone ki-wallet fs-2 me-2">
                                                                            <span class="path1"></span>
                                                                            <span class="path2"></span>
                                                                            <span class="path3"></span>
                                                                            <span class="path4"></span>
                                                                        </i>
                                                                        Payment Method
                                                                    </div>
                                                                </td>
                                                                <td class="fw-bold text-end text-uppercase">
                                                                    <?= $orders->payment_method ?>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <!--end::Table-->
                                                </div>
                                            </div>
                                            <!--end::Card body-->
                                        </div>
                                        <!--end::Order details-->

                                        <!--begin::Customer details-->
                                        <div class="card card-flush py-4  flex-row-fluid">
                                            <!--begin::Card header-->
                                            <div class="card-header">
                                                <div class="card-title">
                                                    <h2>Customer Details</h2>
                                                </div>
                                            </div>
                                            <!--end::Card header-->

                                            <!--begin::Card body-->
                                            <div class="card-body pt-0">
                                                <div class="table-responsive">
                                                    <!--begin::Table-->
                                                    <table class="table align-middle table-row-bordered mb-0 fs-6 gy-5 min-w-300px">
                                                        <tbody class="fw-semibold text-gray-600">
                                                            <tr>
                                                                <td class="text-muted">
                                                                    <div class="d-flex align-items-center">
                                                                        <i class="ki-duotone ki-profile-circle fs-2 me-2">
                                                                            <span class="path1"></span>
                                                                            <span class="path2"></span>
                                                                            <span class="path3"></span>
                                                                        </i>
                                                                        Customer
                                                                    </div>
                                                                </td>

                                                                <td class="fw-bold text-end">
                                                                    <div class="d-flex align-items-center justify-content-end">
                                                                        <!--begin:: Avatar -->
                                                                        <div class="symbol symbol-circle symbol-25px overflow-hidden me-3">
                                                                            <a>
                                                                                <div class="symbol-label fs-3 bg-light-warning text-warning">
                                                                                    <?php
                                                                                    $initials = strtoupper(substr($orders->first_name, 0, 1) . substr($orders->last_name, 0, 1));
                                                                                    echo $initials;
                                                                                    ?>
                                                                                </div>
                                                                            </a>
                                                                            <!--end::Avatar-->
                                                                        </div>
                                                                        <!--begin::Name-->
                                                                        <a class="text-gray-600 text-hover-primary">
                                                                            <?= $orders->first_name ?>
                                                                            <?= $orders->last_name ?>
                                                                        </a>
                                                                        <!--end::Name-->
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-muted">
                                                                    <div class="d-flex align-items-center">
                                                                        <i class="ki-duotone ki-sms fs-2 me-2"><span class="path1"></span><span class="path2"></span></i> Email
                                                                    </div>
                                                                </td>
                                                                <td class="fw-bold text-end">
                                                                    <a class="text-gray-600 text-hover-primary">
                                                                        <?= $orders->email ?>
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td class="text-muted">
                                                                    <div class="d-flex align-items-center">
                                                                        <i class="ki-duotone ki-phone fs-2 me-2"><span class="path1"></span><span class="path2"></span></i> Phone
                                                                    </div>
                                                                </td>
                                                                <td class="fw-bold text-end"> <?= $orders->phone ?></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <!--end::Table-->
                                                </div>
                                            </div>
                                            <!--end::Card body-->
                                        </div>
                                        <!--end::Customer details-->
                                    </div>
                                    <!--end::Order summary-->

                                    <!--begin::Tab content-->
                                    <div class="tab-content">
                                        <!--begin::Tab pane-->
                                        <div class="tab-pane fade active show" id="kt_ecommerce_sales_order_summary" role="tab-panel">
                                            <!--begin::Orders-->
                                            <div class="d-flex flex-column gap-7 gap-lg-10">
                                                <div class="d-flex flex-column flex-xl-row gap-7 gap-lg-10">
                                                    <!--begin::Payment address-->
                                                    <div class="card card-flush py-4 flex-row-fluid position-relative">
                                                        <!--begin::Background-->
                                                        <div class="position-absolute top-0 end-0 bottom-0 opacity-10 d-flex align-items-center me-5">
                                                            <i class="ki-solid ki-two-credit-cart" style="font-size: 14em">
                                                            </i>
                                                        </div>
                                                        <!--end::Background-->

                                                        <!--begin::Card header-->
                                                        <div class="card-header">
                                                            <div class="card-title">
                                                                <h2>Billing Address</h2>
                                                            </div>
                                                        </div>
                                                        <!--end::Card header-->

                                                        <!--begin::Card body-->
                                                        <div class="card-body pt-0">
                                                            <?= $orders->address ?><br>
                                                            <?= $orders->province ?>,<br>
                                                            <?= $orders->zipcode ?>,<br>
                                                            <?= $orders->country ?>.
                                                        </div>
                                                        <!--end::Card body-->
                                                    </div>
                                                    <!--end::Payment address-->
                                                    <!--begin::Shipping address-->
                                                    <div class="card card-flush py-4 flex-row-fluid position-relative">
                                                        <!--begin::Background-->
                                                        <div class="position-absolute top-0 end-0 bottom-0 opacity-10 d-flex align-items-center me-5">
                                                            <i class="ki-solid ki-delivery" style="font-size: 13em">
                                                            </i>
                                                        </div>
                                                        <!--end::Background-->

                                                        <!--begin::Card header-->
                                                        <div class="card-header">
                                                            <div class="card-title">
                                                                <h2>Shipping Address</h2>
                                                            </div>
                                                        </div>
                                                        <!--end::Card header-->

                                                        <!--begin::Card body-->
                                                        <div class="card-body pt-0">
                                                            <?= $orders->recipient ?><br>
                                                            <?= $orders->recip_province ?>,<br>
                                                            <?= $orders->recip_zipcode ?>,<br>
                                                            <?= $orders->country ?>.
                                                        </div>
                                                        <!--end::Card body-->
                                                    </div>
                                                    <!--end::Shipping address-->
                                                </div>

                                                <!--begin::Product List-->
                                                <div class="card card-flush py-4 flex-row-fluid overflow-hidden">
                                                    <!--begin::Card body-->
                                                    <div class="card-body pt-0">
                                                        <div class="table-responsive">
                                                            <!--begin::Table-->
                                                            <table class="table align-middle table-row-dashed fs-6 gy-5 mb-0">
                                                                <thead>
                                                                    <tr class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0">
                                                                        <th class="min-w-175px">Product</th>
                                                                        <th class="min-w-100px text-end">Brand</th>
                                                                        <th class="min-w-100px text-end">Color</th>
                                                                        <th class="min-w-70px text-end">Qty</th>
                                                                        <th class="min-w-100px text-end">Unit Price</th>
                                                                        <th class="min-w-100px text-end">Total</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody class="fw-semibold text-gray-600">
                                                                    <?php foreach ($products as $product) { ?>
                                                                        <tr>
                                                                            <td>
                                                                                <div class="d-flex align-items-center">
                                                                                    <!--begin::Thumbnail-->
                                                                                    <a class="symbol symbol-50px">
                                                                                        <span class="symbol-label" style="background-image:url(<?= base_url('shoes/') . $product->img ?>);"></span>
                                                                                    </a>
                                                                                    <!--end::Thumbnail-->

                                                                                    <!--begin::Title-->
                                                                                    <div class="ms-5">
                                                                                        <a class="fw-bold text-gray-600 text-hover-primary">
                                                                                            <?= $product->shoes_name ?>
                                                                                        </a>
                                                                                        <div class="fs-7 text-muted">Category: <?= $product->category ?> shoes</div>
                                                                                    </div>
                                                                                    <!--end::Title-->
                                                                                </div>
                                                                            </td>
                                                                            <td class="text-end">
                                                                                <?= $product->brand ?>
                                                                            </td>
                                                                            <td class="text-end">
                                                                                <?= $product->color ?>
                                                                            </td>
                                                                            <td class="text-end">
                                                                                x <?= $product->order_qty ?>
                                                                            </td>
                                                                            <td class="text-end">
                                                                                ₱<?= $product->price ?>
                                                                            </td>
                                                                            <td class="text-end">
                                                                                ₱<?= number_format($product->order_qty * $product->price, 2) ?> <!-- Calculate and display subtotal -->
                                                                            </td>
                                                                        </tr>
                                                                    <?php } ?>

                                                                    <tr>
                                                                        <td colspan="5" class="text-end">
                                                                            Shipping Fee
                                                                        </td>
                                                                        <td class="text-end">
                                                                            ₱ 150.00
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td colspan="5" class="fs-3 text-gray-900 text-end">
                                                                            Grand Total
                                                                        </td>
                                                                        <td class="text-gray-900 fs-3 fw-bolder text-end">
                                                                            <?= $orders->amount ?>
                                                                        </td>
                                                                    </tr>
                                                                </tbody>
                                                            </table>
                                                            <!--end::Table-->
                                                        </div>
                                                    </div>
                                                    <!--end::Card body-->
                                                </div>
                                                <!--end::Product List-->
                                            </div>
                                            <!--end::Orders-->
                                        </div>
                                        <!--end::Tab pane-->
                                    </div>
                                    <!--end::Tab content-->
                                </div>
                                <!--end::Order details page-->
                            </div>
                            <!--end::Content container-->
                        </div>
                        <!--end::Content-->

                    </div>
                    <!--end::Content wrapper-->

                    <!--begin::Footer-->
                    <?php $this->load->view('admin-panel/template/_footer'); ?>
                    <!--end::Footer-->
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