<script src="<?= base_url('assets'); ?>/vendors/sweetalert/sweetalert.min.js"></script>
<script>
  $('.delete-client').click(function() {
            var clientId = $(this).data('id'); // Get the voter ID from data-id attribute
            showDeleteVoters(clientId);
        });

        function showDeleteVoters(clientId) {
            swal({
                title: 'Are you sure?',
                text: "This action will delete this user!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3f51b5',
                cancelButtonColor: '#ff4081',
                confirmButtonText: 'OK',
                cancelButtonText: 'Cancel'
            }).then((result) => {
                if (result) {
                    $.ajax({
                        url: '<?php echo base_url('admin/delete_client'); ?>',
                        type: 'POST',
                        data: {
                            client_id: clientId
                        }, // Pass the voter ID here
                        success: function(response) {
                            var data = JSON.parse(response);
                            if (data.success) {
                                swal({
                                    title: 'Success',
                                    text: 'Client deleted successfully!',
                                    icon: 'success',
                                    button: 'OK'
                                }).then((result) => {
                                    if (result) {
                                        setTimeout(function() {
                                            location.reload();
                                        }, 0);
                                    }
                                });
                            } else {
                                swal('Error', 'Failed to delete voter', 'error');
                            }
                        },
                        error: function(xhr, status, error) {
                            console.error(xhr.responseText);
                        }
                    });
                }
            });
        }
</script>

