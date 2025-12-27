
<script type="text/javascript">
  (function($) {
  'use strict';
  $(function() {
    $('#browse-foto').on('click', function() {
      var file = $(this).parent().parent().parent().find('#upload-default');
      file.trigger('click');
    });
    $('#upload-default').on('change', function() {
      $(this).parent().find('.form-control').val($(this).val().replace(/C:\\fakepath\\/i, ''));
    });
  });
})(jQuery);
</script>

<script type="text/javascript">
  (function($) {
  'use strict';
  $(function() {
    $('#browse-file').on('click', function() {
      var file = $(this).parent().parent().parent().find('#upload-default1');
      file.trigger('click');
    });
    $('#upload-default1').on('change', function() {
      $(this).parent().find('.form-control-1').val($(this).val().replace(/C:\\fakepath\\/i, ''));
    });
  });
})(jQuery);
</script>


<script>
  var loadFile = function(event) {
    var output = document.getElementById('output');
    output.src = URL.createObjectURL(event.target.files[0]);
    output.onload = function() {
      URL.revokeObjectURL(output.src) // free memory
    }
  };
</script>

<script type="text/javascript">
$(document).ready(function(){

data = "<?php echo make_url() ; ?>account/wishlist/data" ;
$('#data').load(data);


/*Data kategori*/

    $(document).on('click', '.first', function (e) {
      e.preventDefault(); 
      var first = $(this).find('a:first').attr('href') ;
      $('#data').load(first);
    }); 
    
    $(document).on('click', '.prev', function (e) {
      e.preventDefault(); 
      var prev = $(this).find('a:first').attr('href') ;
      $('#data').load(prev);
    }); 

    $(document).on('click', '.num', function (e) {
      e.preventDefault(); 
      var num = $(this).find('a:first').attr('href') ;
        $('#data').load(num);
    }); 

    $(document).on('click', '.next', function (e) {
      e.preventDefault(); 
      var next = $(this).find('a:first').attr('href') ;
        $('#data').load(next);
    }); 

    $(document).on('click', '.last', function (e) {
      e.preventDefault(); 
      var last = $(this).find('a:first').attr('href') ;
      $('#data').load(last);
    });  

    $('#pencarian').keyup(function(e){
              e.preventDefault(); 

              $.ajax({
              url:"<?php echo make_url() ; ?>account/wishlist/get_link",
              type:"get",
              data    : $(this).serialize(),
              success: function(data){
                              var hasil = JSON.parse(data);
                              $('#data').load(hasil.q);

                        }
              });
              return false;
          
       });

      

      $(document).on('click', '#hapus', function(e) {
          e.preventDefault();
          var id = $(this).attr('data-id');
          Swal.fire({
              title: 'Apakah Anda Yakin..?',
              text: "Data terpilih akan dihapus..!!",
              icon: 'warning',
              showCancelButton: true,
              confirmButtonColor: '#d33',
              cancelButtonColor: '#3085d6',
              confirmButtonText: 'Hapus Data',
              cancelButtonText: 'Batal'
          }).then((result) => {
              if (result.value) {
                  $.post('<?php echo make_url(); ?>account/wishlist/hapus', {
                      id: id
                  }, function(html) {

                    $('#data').load(data);
                  });
              }
          });
      });

});
</script>




    <script>
        $(document).ready(function(){setTimeout(function(){$("#pesan").fadeIn('slow');}, 500);});
        setTimeout(function(){$("#pesan").fadeOut('slow');}, 5000);
    </script>
