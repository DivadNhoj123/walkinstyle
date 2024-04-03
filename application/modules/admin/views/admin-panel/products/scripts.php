<script src="<?= base_url('assets'); ?>/vendors/sweetalert/sweetalert.min.js"></script>
<script>
    $(document).ready(function() {
      
      $('.delete-shoes').click(function() {
          var shoesId = $(this).data('id'); // Get the voter ID from data-id attribute
          showDeleteProduct(shoesId);
      });

      function showDeleteProduct(shoesId) {
          swal({
              title: 'Are you sure?',
              text: "This action will delete this product!",
              icon: 'warning',
              showCancelButton: true,
              confirmButtonColor: '#3f51b5',
              cancelButtonColor: '#ff4081',
              confirmButtonText: 'OK',
              cancelButtonText: 'Cancel'
          }).then((result) => {
              if (result) {
                  $.ajax({
                      url: '<?php echo base_url('admin/delete_product'); ?>',
                      type: 'POST',
                      data: {
                          shoes_id: shoesId
                      }, 
                      success: function(response) {
                          var data = JSON.parse(response);
                          if (data.success) {
                              swal({
                                  title: 'Success',
                                  text: 'Product deleted successfully!',
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
                              swal('Error', 'Failed to delete this product', 'error');
                          }
                      },
                      error: function(xhr, status, error) {
                          console.error(xhr.responseText);
                      }
                  });
              }
          });
      }
  });
</script>