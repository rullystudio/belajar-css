<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.1/dist/sweetalert2.all.min.js"></script>
<script src="<?php echo base_url() ; ?>assets/js/select/select2.full.min.js"></script>
<script src="<?php echo base_url() ; ?>assets/js/select/select2-custom.js"></script>
<script src="https://api.mapbox.com/mapbox-gl-js/v2.4.1/mapbox-gl.js"></script>
<script src="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v4.7.0/mapbox-gl-geocoder.min.js"></script>
<link rel="stylesheet" href="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v4.7.0/mapbox-gl-geocoder.css" type="text/css" />
<script>
  $(document).ready(function() {
    // Initialize Select2
    $('#provinsi').select2();
    $('#kabupaten').select2();
    $('#kecamatan').select2();
  });
</script>

<script type="text/javascript">
$(document).ready(function(){
$(document).on('change','#provinsi',function(e){
  e.preventDefault();
    $('#kabupaten').prop("disabled", false); 
    $('#kecamatan').prop("disabled", true); 
    $('#desa').prop("disabled", true); 
    $('#detail_alamat').prop("disabled", true); 
    $('#kabupaten').prop('selectedIndex',0);
    $('#kecamatan').prop('selectedIndex',0);
     provinsi_id = $("#provinsi").val() ;
     
    $.post('<?php echo base_url() ; ?>account/alamat/kabupaten',
          {
            id : provinsi_id,
          },
          function(html){
            $('#kabupaten').html(html);
          }) ;
      
    });

    $(document).on('change','#kabupaten',function(e){
      e.preventDefault();
      $('#kecamatan').prop("disabled", false); 
      $('#detail_alamat').prop("disabled", true); 
      $('#kecamatan').prop('selectedIndex',0);
      id = $("#kabupaten").val() ;
      $.post('<?php echo base_url() ; ?>account/alamat/kecamatan',
          {
            id : $("#kabupaten").val(),
          },
          function(html){
              $('#kecamatan').html(html);
          }) ;
      
    });
    $(document).on('change','#kecamatan',function(e){
      e.preventDefault();
      $('#detail_alamat').prop("disabled", false); 
      
    });
    $(document).on('click','#pick-kurir',function(e){
      e.preventDefault();
      service = $(this).attr('data-service') ;
      deskripsi = $(this).attr('data-deskripsi') ;
      ongkir = $(this).find('#data-ongkir').val();
      etd = $(this).find('#data-etd').val();
      
      $("#service").val(service) ;
      $("#ongkir").val(ongkir) ;
      $("#deskripsi").val(deskripsi) ;
      $("#etd").val(etd) ;
      $('[class*="pick-"]').removeClass("kurir_aktif");

      // Menambahkan kelas 'kurir_aktif' pada elemen yang diklik
      $(this).addClass("kurir_aktif");
      
    });


      $(document).on('click', '#hapus', function(e) {
          e.preventDefault();
          var id = $(this).attr('data-id');
          Swal.fire({
              title: 'Apakah Anda Yakin..?',
              text: "Data Transaksi terpilih akan dihapus..!!",
              icon: 'warning',
              showCancelButton: true,
              confirmButtonColor: '#d33',
              cancelButtonColor: '#3085d6',
              confirmButtonText: 'Hapus Data',
              cancelButtonText: 'Batal'
          }).then((result) => {
              if (result.value) {
                  $.post('<?php echo base_url() ; ?>account/alamat/hapus', {
                      id: id
                  }, function(html) {
                    link = '<?php echo base_url() ; ?>account/alamat' ;
                    setTimeout(function() {
                      location.href= link;
                    }, 100);
                  });
              }
          });
      });

});
</script>
<script>
    mapboxgl.accessToken = 'pk.eyJ1IjoiZWZoYWwiLCJhIjoiY2ptOXRiZ3k2MDh4bzNrbnljMjk5Z2d5aSJ9.8dSNgeAjpdTlZ3x-b2vsog';
    const defaultCoordinates = [106.816666, -6.200000]; // Koordinat default (Jakarta)
    // Inisialisasi peta dengan koordinat default
    const map = new mapboxgl.Map({
        container: 'map',
        style: 'mapbox://styles/mapbox/streets-v11',
        center: defaultCoordinates,
        zoom: 15
    });
    // Inisialisasi Geocoder
    const geocoder = new MapboxGeocoder({
        accessToken: mapboxgl.accessToken,
        mapboxgl: mapboxgl,
        placeholder: 'Cari desa, dusun, RT/RW',
        proximity: {
            longitude: defaultCoordinates[0],
            latitude: defaultCoordinates[1]
        }
    });
    document.getElementById('geocoder').appendChild(geocoder.onAdd(map));
    let marker;
    // Fungsi untuk menambahkan marker di lokasi hasil pencarian
    function addMarker(lngLat) {
        if (marker) {
            marker.remove(); // Hapus marker sebelumnya jika ada
        }
        marker = new mapboxgl.Marker({ draggable: true })
            .setLngLat(lngLat)
            .addTo(map);
        map.flyTo({ center: lngLat, zoom: 15 });
        document.getElementById('latitude').value = lngLat[1]; // Latitude
        document.getElementById('longitude').value = lngLat[0]; // Longitude
        // Ambil kode pos berdasarkan koordinat
        getPostalCode(lngLat[0], lngLat[1]);
        marker.on('dragend', () => {
            const lngLat = marker.getLngLat();
            document.getElementById('latitude').value = lngLat.lat; // Update latitude
            document.getElementById('longitude').value = lngLat.lng; // Update longitude
            // Ambil kode pos baru saat marker dipindahkan
            getPostalCode(lngLat.lng, lngLat.lat);
        });
    }
    // Fungsi untuk mengambil kode pos berdasarkan koordinat
    function getPostalCode(lng, lat) {
        const geocodeUrl = `https://api.mapbox.com/geocoding/v5/mapbox.places/${lng},${lat}.json?access_token=${mapboxgl.accessToken}`;
        fetch(geocodeUrl)
            .then(response => response.json())
            .then(data => {
                const features = data.features;
                let postalCode = '';
                // Cari komponen alamat yang memiliki tipe 'postcode'
                features.forEach(feature => {
                    if (feature.place_type.includes('postcode')) {
                        postalCode = feature.text;
                    }
                });
                // Tampilkan kode pos di input field
                if (postalCode) {
                    document.getElementById('kode_pos').value = postalCode;
                } else {
                    document.getElementById('kode_pos').value = 'Kode pos tidak ditemukan';
                }
            })
            .catch(error => {
                console.error('Error:', error);
            });
    }
    setTimeout(() => {
        const geocoderElement = document.querySelector('.mapboxgl-ctrl-geocoder');
        console.log(geocoderElement); // Periksa apakah elemen ada
        if (geocoderElement) {
            geocoderElement.style.width = '100%';
            geocoderElement.style.maxWidth = '100%';
            geocoderElement.style.boxSizing = 'border-box';
        }
    }, 100);
    // Tambahkan listener untuk mengatur ulang lebar saat ukuran jendela berubah
    window.addEventListener('resize', () => {
        const geocoderElement = document.querySelector('.mapboxgl-ctrl-geocoder');
        if (geocoderElement) {
            geocoderElement.style.width = '100%';
            geocoderElement.style.maxWidth = '100%';
        }
    });
    // Cek jika browser mendukung geolocation
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(
            (position) => {
                const userCoordinates = [position.coords.longitude, position.coords.latitude];
                addMarker(userCoordinates); // Tambahkan marker di lokasi GPS
                map.setCenter(userCoordinates); // Atur peta ke lokasi GPS
                map.setZoom(15); // Zoom in ke lokasi pengguna
            },
            (error) => {
                console.error("Geolocation error:", error);
                alert("Tidak dapat mendeteksi lokasi Anda. Menggunakan lokasi default (Jakarta).");
                map.setCenter(defaultCoordinates); // Menggunakan koordinat default jika gagal
            }
        );
    } else {
        alert("Geolocation tidak didukung di browser ini. Menggunakan lokasi default (Jakarta).");
        map.setCenter(defaultCoordinates); // Menggunakan koordinat default jika geolocation tidak didukung
    }
</script>
