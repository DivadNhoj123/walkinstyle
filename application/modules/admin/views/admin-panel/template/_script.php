<script>
    var hostUrl = "<?= base_url('template'); ?>/";
</script>
<!--begin::Global Javascript Bundle(mandatory for all pages)-->
<script src="<?= base_url('template'); ?>/plugins/global/plugins.bundle.js"></script>
<script src="<?= base_url('template'); ?>/js/scripts.bundle.js"></script>
<!--end::Global Javascript Bundle-->
<!--begin::Vendors Javascript(used for this page only)-->
<script src="<?= base_url('template'); ?>/plugins/custom/fullcalendar/fullcalendar.bundle.js"></script>
<script src="<?= base_url('template'); ?>/plugins/custom/datatables/datatables.bundle.js"></script>
<script src="<?= base_url('template'); ?>/plugins/custom/formrepeater/formrepeater.bundle.js"></script>
<script src="<?= base_url('template'); ?>/js/widgets.bundle.js"></script>
<script src="<?= base_url('template'); ?>/custom/widgets.js"></script>
<!--end::Vendors Javascript-->
<!--begin::Custom Javascript(used for this page only)-->
<script src="<?= base_url('template'); ?>/js/widgets.bundle.js"></script>
<script src="<?= base_url('template'); ?>/js/custom/widgets.js"></script>
<script src="<?= base_url('template'); ?>/js/custom/apps/chat/chat.js"></script>
<script src="<?= base_url('template'); ?>/js/custom/utilities/modals/upgrade-plan.js"></script>
<script src="<?= base_url('template'); ?>/js/custom/utilities/modals/create-account.js"></script>
<script src="<?= base_url('template'); ?>/js/custom/utilities/modals/create-app.js"></script>
<script src="<?= base_url('template'); ?>/js/custom/utilities/modals/users-search.js"></script>
<!--end::Custom Javascript-->
<script>
    // Get the current URL
    const currentUrl = window.location.href;

    // Get all menu links
    const menuLinks = document.querySelectorAll('.menu-link');

    // Add click event listener to each menu link
    menuLinks.forEach(link => {
        link.addEventListener('click', function(event) {
            // Remove active class from all menu links
            menuLinks.forEach(link => {
                link.classList.remove('active');
            });

            // Add active class to the clicked menu link
            this.classList.add('active');
        });
    });

    // Set active class based on current URL
    menuLinks.forEach(link => {
        // Get the href attribute of the menu link
        const href = link.getAttribute('href');

        // Check if the href matches the current URL
        if (currentUrl === href) {
            // Add active class to the menu link
            link.classList.add('active');
        }
    });
</script>