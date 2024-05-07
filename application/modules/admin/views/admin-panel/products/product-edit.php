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
                                            <li class="breadcrumb-item text-gray-700 fw-bold lh-1">Products</li>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <li class="breadcrumb-item">
                                                <i class="ki-duotone ki-right fs-4 text-gray-700 mx-n1"></i>
                                            </li>
                                            <!--end::Item-->
                                            <!--begin::Item-->
                                            <li class="breadcrumb-item text-gray-700 fw-bold lh-1">Add Product</li>
                                            <!--end::Item-->
                                        </ul>
                                        <!--end::Breadcrumb-->
                                        <!--begin::Title-->
                                        <h1 class="page-heading d-flex flex-column justify-content-center text-dark fw-bolder fs-1 lh-0">Products Add </h1>
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
                                <div id="kt_app_content_container" class="app-container  container-fluid ">
                                    <!--begin::Form-->
                                    <form action="<?= base_url('admin/update_product/'.$product->id); ?>" method="POST" enctype="multipart/form-data" id="kt_ecommerce_add_product_form" class="form d-flex flex-column flex-lg-row fv-plugins-bootstrap5 fv-plugins-framework">
                                        <!--begin::Aside column-->
                                        <div class="d-flex flex-column gap-7 gap-lg-10 w-100 w-lg-300px mb-7 me-lg-10">
                                            <!--begin::Thumbnail settings-->
                                            <div class="card card-flush py-4">
                                                <!--begin::Card header-->
                                                <div class="card-header">
                                                    <!--begin::Card title-->
                                                    <div class="card-title">
                                                        <h2>Product Image</h2>
                                                    </div>
                                                    <!--end::Card title-->
                                                </div>
                                                <!--end::Card header-->

                                                <!--begin::Card body-->
                                                <div class="card-body text-center pt-0">
                                                    <!--begin::Image input-->
                                                    <div class="image-input image-input-empty image-input-outline image-input-placeholder mb-3" data-kt-image-input="true">
                                                        <!--begin::Preview existing avatar-->
                                                        <div class="image-input-wrapper w-150px h-150px" style="background-image: url(<?= base_url('shoes/' . $product->img) ?>);"></div>
                                                        <!--end::Preview existing avatar-->

                                                        <!--begin::Label-->
                                                        <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" aria-label="Change avatar" data-bs-original-title="Change avatar" data-kt-initialized="1">
                                                            <i class="ki-duotone ki-pencil fs-7"><span class="path1"></span><span class="path2"></span></i>
                                                            <!--begin::Inputs-->
                                                            <input type="file" name="img" accept=".png, .jpg, .jpeg">
                                                            <input type="hidden" name="avatar_remove">
                                                            <input type="hidden" name="recent_img" value="<?= $product->img ?>">
                                                            <!--end::Inputs-->
                                                        </label>
                                                        <!--end::Label-->

                                                        <!--begin::Cancel-->
                                                        <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" aria-label="Cancel avatar" data-bs-original-title="Cancel avatar" data-kt-initialized="1">
                                                            <i class="ki-duotone ki-cross fs-2"><span class="path1"></span><span class="path2"></span></i> </span>
                                                        <!--end::Cancel-->

                                                        <!--begin::Remove-->
                                                        <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" aria-label="Remove avatar" data-bs-original-title="Remove avatar" data-kt-initialized="1">
                                                            <i class="ki-duotone ki-cross fs-2"><span class="path1"></span><span class="path2"></span></i> </span>
                                                        <!--end::Remove-->
                                                    </div>
                                                    <!--end::Image input-->

                                                    <!--begin::Description-->
                                                    <div class="text-muted fs-7">Set the product thumbnail image. Only *.png, *.jpg and *.jpeg image files are accepted</div>
                                                    <!--end::Description-->
                                                </div>
                                                <!--end::Card body-->
                                            </div>
                                            <!--end::Thumbnail settings-->
                                            <!--begin::Status-->
                                            <div class="card card-flush py-4">
                                                <!--begin::Card header-->
                                                <div class="card-header">
                                                    <!--begin::Card title-->
                                                    <div class="card-title">
                                                        <h2>Category</h2>
                                                    </div>
                                                    <!--end::Card title-->

                                                    <!--begin::Card toolbar-->
                                                    <div class="card-toolbar">
                                                        <div class="rounded-circle bg-success w-15px h-15px" id="kt_ecommerce_add_product_status"></div>
                                                    </div>
                                                    <!--begin::Card toolbar-->
                                                </div>
                                                <!--end::Card header-->

                                                <!--begin::Card body-->
                                                <div class="card-body pt-0">
                                                    <!--begin::Select2-->
                                                    <select name="category" class="form-select mb-2 select2-hidden-accessible" data-control="select2" data-hide-search="true" data-placeholder="Select an option" id="kt_ecommerce_add_product_status_select">
                                                        <option value="<?= $product->category?>" selected><?= $product->category?></option>
                                                        <option value="Basketball">Basketball</option>
                                                        <option value="Soccer">Soccer</option>
                                                        <option value="Fashion">Fashion</option>
                                                    </select>

                                                </div>
                                                <!--end::Card body-->
                                            </div>
                                            <!--end::Status-->
                                        </div>
                                        <!--end::Aside column-->

                                        <!--begin::Main column-->
                                        <div class="d-flex flex-column flex-row-fluid gap-7 gap-lg-10">
                                            <!--begin:::Tabs-->
                                            <ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-semibold mb-n2" role="tablist">
                                                <!--begin:::Tab item-->
                                                <li class="nav-item" role="presentation">
                                                    <a class="nav-link text-active-primary pb-4 active" data-bs-toggle="tab" href="#kt_ecommerce_add_product_general" aria-selected="true" role="tab">General</a>
                                                </li>
                                                <!--end:::Tab item-->

                                                <!--begin:::Tab item-->
                                                <li class="nav-item" role="presentation">
                                                    <a class="nav-link text-active-primary pb-4" data-bs-toggle="tab" href="#kt_ecommerce_add_product_advanced" aria-selected="false" tabindex="-1" role="tab">Advanced</a>
                                                </li>
                                                <!--end:::Tab item-->

                                            </ul>
                                            <!--end:::Tabs-->
                                            <!--begin::Tab content-->
                                            <div class="tab-content">
                                                <!--begin::Tab pane-->
                                                <div class="tab-pane fade show active" id="kt_ecommerce_add_product_general" role="tab-panel">
                                                    <div class="d-flex flex-column gap-7 gap-lg-10">

                                                        <!--begin::General options-->
                                                        <div class="card card-flush py-4">
                                                            <!--begin::Card header-->
                                                            <div class="card-header">
                                                                <div class="card-title">
                                                                    <h2>General</h2>
                                                                </div>
                                                            </div>
                                                            <!--end::Card header-->

                                                            <!--begin::Card body-->
                                                            <div class="card-body pt-0">
                                                                <!--begin::Input group-->
                                                                <div class="mb-10 fv-row fv-plugins-icon-container">
                                                                    <!--begin::Label-->
                                                                    <label class="required form-label">Product Name</label>
                                                                    <!--end::Label-->

                                                                    <!--begin::Input-->
                                                                    <input type="text" name="product_name" class="form-control mb-2" placeholder="Product name" value="<?= $product->shoes_name?>">
                                                                    <!--end::Input-->

                                                                    <!--begin::Description-->
                                                                    <div class="text-muted fs-7">A product name is required and recommended to be unique.</div>
                                                                    <!--end::Description-->
                                                                    <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
                                                                </div>
                                                                <div class="mb-10 fv-row fv-plugins-icon-container">
                                                                    <!--begin::Label-->
                                                                    <label class="required form-label">Product Brand</label>
                                                                    <!--end::Label-->

                                                                    <!--begin::Input-->
                                                                    <input type="text" name="product_brand" class="form-control mb-2" placeholder="Product name" value="<?= $product->brand?>">
                                                                    <!--end::Input-->

                                                                    <!--begin::Description-->
                                                                    <div class="text-muted fs-7">A product brand is required and recommended to be unique.</div>
                                                                    <!--end::Description-->
                                                                    <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
                                                                </div>
                                                                <!--end::Input group-->

                                                                <!--begin::Input group-->
                                                                <div>
                                                                    <!--begin::Label-->
                                                                    <label class="form-label">Description</label>
                                                                    <!--end::Label-->

                                                                    <!--begin::Editor-->
                                                                    <div id="kt_ecommerce_add_product_description" name="kt_ecommerce_add_product_description" class="min-h-200px mb-2 ql-container ql-snow">
                                                                        <div class="ql-editor ql-blank" data-gramm="false" contenteditable="true" data-placeholder="Type your text here...">
                                                                            <p><?= $product->description?></p>
                                                                        </div>
                                                                    </div>
                                                                    <input type="hidden" id="descriptionInput" name="description">
                                                                    <!--end::Editor-->
                                                                    <!--begin::Description-->
                                                                    <div class="text-muted fs-7">Set a description to the product for better visibility.</div>
                                                                    <!--end::Description-->
                                                                </div>
                                                                <!--end::Input group-->
                                                            </div>
                                                            <!--end::Card header-->
                                                        </div>
                                                        <!--end::General options-->
                                                    </div>
                                                </div>
                                                <!--end::Tab pane-->

                                                <!--begin::Tab pane-->
                                                <div class="tab-pane fade" id="kt_ecommerce_add_product_advanced" role="tab-panel">
                                                    <div class="d-flex flex-column gap-7 gap-lg-10">

                                                        <!--begin::Inventory-->
                                                        <div class="card card-flush py-4">
                                                            <!--begin::Card header-->
                                                            <div class="card-header">
                                                                <div class="card-title">
                                                                    <h2>Inventory</h2>
                                                                </div>
                                                            </div>
                                                            <!--end::Card header-->

                                                            <!--begin::Card body-->
                                                            <div class="card-body pt-0">
                                                                <!--begin::Input group-->
                                                                <div class="mb-10 fv-row fv-plugins-icon-container">
                                                                    <!--begin::Label-->
                                                                    <label class="required form-label">Price</label>
                                                                    <!--end::Label-->

                                                                    <!--begin::Input-->
                                                                    <input type="text" name="price" class="form-control mb-2" placeholder="Product Price" value="<?= $product->price?>">
                                                                    <!--end::Input-->

                                                                    <!--begin::Description-->
                                                                    <div class="text-muted fs-7">Enter the product price.</div>
                                                                    <!--end::Description-->
                                                                    <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
                                                                </div>
                                                                <!--end::Input group-->

                                                                <!--begin::Input group-->
                                                                <div class="mb-10 fv-row fv-plugins-icon-container">
                                                                    <!--begin::Label-->
                                                                    <label class="required form-label">Color</label>
                                                                    <!--end::Label-->

                                                                    <!--begin::Input-->
                                                                    <input type="text" name="color" class="form-control mb-2" placeholder="Produt Color" value="<?= $product->color?>">
                                                                    <!--end::Input-->

                                                                    <!--begin::Description-->
                                                                    <div class="text-muted fs-7">Enter the product color.</div>
                                                                    <!--end::Description-->
                                                                    <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
                                                                </div>
                                                                <!--end::Input group-->

                                                                <!--begin::Input group-->
                                                                <div class="mb-10 fv-row fv-plugins-icon-container">
                                                                    <!--begin::Label-->
                                                                    <label class="required form-label">Quantity</label>
                                                                    <!--end::Label-->

                                                                    <!--begin::Input-->
                                                                    <input type="number" name="qty" class="form-control mb-2" placeholder="Product Quantity" value="<?= $product->stock?>">
                                                                    <!--end::Input-->

                                                                    <!--begin::Description-->
                                                                    <div class="text-muted fs-7">Enter the product quantity.</div>
                                                                    <!--end::Description-->
                                                                    <div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
                                                                </div>
                                                                <!--end::Input group-->
                                                            </div>
                                                            <!--end::Card header-->
                                                        </div>
                                                        <!--end::Inventory-->
                                                    </div>
                                                </div>
                                                <!--end::Tab pane-->

                                            </div>
                                            <!--end::Tab content-->

                                            <div class="d-flex justify-content-end">
                                                <!--begin::Button-->
                                                <a href="<?= base_url('admin/product'); ?>" id="kt_ecommerce_add_product_cancel" class="btn btn-light me-5">
                                                    Cancel
                                                </a>
                                                <!--end::Button-->

                                                <!--begin::Button-->
                                                <button type="submit" id="kt_ecommerce_add_product_submit" class="btn btn-primary">
                                                    <span class="indicator-label">
                                                        Save Changes
                                                    </span>
                                                    <span class="indicator-progress">
                                                        Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                                    </span>
                                                </button>
                                                <!--end::Button-->
                                            </div>
                                        </div>
                                        <!--end::Main column-->
                                    </form>
                                    <!--end::Form-->
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
    <?php $this->load->view('admin-panel/products/scripts'); ?>
    <!--end::Javascript-->
</body>
<!--end::Body-->

</html>