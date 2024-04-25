<div id="kt_app_sidebar" class="app-sidebar flex-column" data-kt-drawer="true" data-kt-drawer-name="app-sidebar" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="250px" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_app_sidebar_mobile_toggle">
    <!--begin::Main-->
    <div class="d-flex flex-column justify-content-between h-100 hover-scroll-overlay-y my-2 d-flex flex-column" id="kt_app_sidebar_main" data-kt-scroll="true" data-kt-scroll-activate="true" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_app_header" data-kt-scroll-wrappers="#kt_app_main" data-kt-scroll-offset="5px">
        <!--begin::Sidebar menu-->
        <div id="#kt_app_sidebar_menu" data-kt-menu="true" data-kt-menu-expand="false" class="flex-column-fluid menu menu-sub-indention menu-column menu-rounded menu-active-bg mb-7">
            <!--begin:Menu item-->
            <div class="menu-item">
                <a class="menu-link" href="../dist/index.html">
                    <i class="ti-desktop me-2 ki-element-11 fs-1"></i>
                    <span class="menu-title">Dashboard</span>
                </a>
            </div>
            <div class="menu-item">
                <a class="menu-link " href="<?= base_url('admin/product'); ?>">
                    <i class="ti-package me-2 ki-element-11 fs-1"></i>
                    <span class="menu-title">Products</span>
                </a>
            </div>
            <div class="menu-item">
                <a class="menu-link " href="<?= base_url('admin/orders'); ?>">
                    <i class="ti-shopping-cart me-2 ki-element-11 fs-1"></i>
                    <span class="menu-title">Order</span>
                </a>
            </div>
            <div class="menu-item">
                <a class="menu-link " href="../dist/index.html">
                    <i class="ti-truck me-2 ki-element-11 fs-1"></i>
                    <span class="menu-title">Courier</span>
                </a>
            </div>
            <div class="menu-item">
                <a class="menu-link " href="<?= base_url('admin/client'); ?>">
                    <i class="ti-user me-2 ki-element-11 fs-1"></i>
                    <span class="menu-title">Client</span>
                </a>
            </div>
            <!--end:Menu item-->
        </div>
        <!--end::Sidebar menu-->
    </div>
    <!--end::Main-->
</div>