
    <script>
      $(document).ready(function() {
        $('#form-login').submit(function(e) {
          e.preventDefault();
          // Reset progress bar
          $("#progress-bar").width("0%");
          $("#progress-bar").attr("aria-valuenow", 0);

          // Show the progress bar
          $("#progress").show();

          $.ajax({
            url: "<?php echo base_url(); ?>account/auth/authentikasi",
            type: "post",
            data: $(this).serialize(),
            xhr: function() {
              var xhr = new window.XMLHttpRequest();

              // Upload progress
              xhr.upload.addEventListener("progress", function(evt) {
                if (evt.lengthComputable) {
                  var percentComplete = (evt.loaded / evt.total) * 100;
                  $("#progress-bar").width(percentComplete + "%");
                  $("#progress-bar").attr("aria-valuenow", percentComplete);
                }
              }, false);

              return xhr;
            },
            success: function(data) {
              var hasil = JSON.parse(data);

              // Set progress to 100%
              $("#progress-bar").width("100%");
              $("#progress-bar").attr("aria-valuenow", 100);

              // Introduce a delay before hiding
              setTimeout(function() {
                // Hide the progress bar after the delay
                    $("#progress").hide();
                    if(hasil.response == 'success') {
                        var successToast = new bootstrap.Toast(document.querySelector('#success_toast'));
                        successToast.show();
                        if(hasil.status == 'Aktif') {
                          link = "<?php echo base_url() ; ?>account/profile" ;
                        } else {
                          link = "<?php echo base_url() ; ?>account/auth/unverified" ;
                        }
                        setTimeout(function() {
                            
                            location.href= link;
                        }, 1500);
                        
                    } else {
                        var failedToast = new bootstrap.Toast(document.querySelector('#failed_toast'));
                        failedToast.show();
                    }
                // Display the result
                    $("#result").html(hasil.response);
              }, 500);

            },
            error: function() {
              // Introduce a delay before hiding
              setTimeout(function() {
                // Hide the progress bar after the delay
                $("#progress").hide();
                // Handle AJAX request errors
                alert("Error during AJAX request");
              }, 2000);
            }
          });
        });
      });
    </script>