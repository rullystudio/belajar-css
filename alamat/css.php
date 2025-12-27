
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.1/dist/sweetalert2.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ; ?>assets/css/select.css">

<script src="https://api.mapbox.com/mapbox-gl-js/v2.4.1/mapbox-gl.js"></script>
<link href="https://api.mapbox.com/mapbox-gl-js/v2.4.1/mapbox-gl.css" rel="stylesheet" /><style>
    body { margin: 0; padding: 0; }
    
    /* Modifikasi #map agar tidak fullscreen */
    #map { 
        position: relative; /* Ubah dari absolute ke relative */
        width: 100%; /* Tetap mengikuti lebar dari elemen induknya */
        height: 400px; /* Tentukan tinggi yang sesuai dengan kebutuhan */
    }

   #geocoder .mapboxgl-ctrl-geocoder {
    border: 1px solid #ccc; /* Ganti dengan warna border yang diinginkan */
    border-radius: 3px;
}


#geocoder .mapboxgl-ctrl-geocoder:hover {
    border: 1px solid #ccc !important; /* Tetap sama dengan border biasa */
    outline: none !important; /* Nonaktifkan outline jika ada */
    border-radius: 3px;
}




</style>

<style>
    /* Custom styling for the search input */
    .select2-container--default .select2-search--inline .select2-search__field {
      padding-bottom: 1px !important;
    }

    .select2-selection__rendered {
    	margin-top: 7px !important;
    	margin-bottom: 1px !important;
    }

    .select2-results__options
    {
    	

    }
    .select2-selection
    {
    	height: 45px !important;
    	border : 1px #ddd solid !important;

    }

    .select2-selection__rendered
    {
    	font-family: "Tahoma" !important;
    	color: #000 !important;

    }
/* Custom styling for the Select2 container */
	.select2-container {
	  padding-top: 5px; /* Adjust the padding-top as needed */
	  padding-bottom: 10px; /* Adjust the padding-bottom as needed */



	}

	.select2-search .select2-search__field
	{
		padding-left: 10px !important ;

	}

	.select2-selection__arrow
	{
		
		margin-top: 14px !important; 

	}

	.select2-dropdown
	{
		border : 1px #ccc solid !important;
		margin-top: -20px !important;
	}

  </style>