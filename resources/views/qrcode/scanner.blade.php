@extends('layout')

@section('content')
	<div id="reader"></div>
	<script src="{{ asset('custom/js/qrcode.js') }}"></script>

	<!-- Button trigger modal-->
	<x-qr-modal nama-aset="Aset Inventaris" text="QR Code" barcode='modal' :onclick=false>
	</x-qr-modal>
	<script>
		// inisiasi html5QRCodeScanner
		let html5QRCodeScanner = new Html5QrcodeScanner(
			"reader", {
				fps: 30,
				qrbox: {
					width: 500,
					height: 500,
				},
			}
		);

		function onScanSuccess(decodedText, decodedResult) {
			// window.location.href = decodedResult.decodedText;
			// barcode(barcode);
			console.log(decodedText);
			var barcode = decodedText.split("aset/")[1];



			//html5QRCodeScanner.clear();
			// 
		}
		html5QRCodeScanner.render(onScanSuccess);

		async function barcode(barcode) {
			$.ajax({
				url: '/api/qrcode2/' + barcode,
				method: 'GET',
				success: function(response) {
					window.open('/api/qrcode2/' + barcode, '_blank');
					// cons
					$('#modal .modal-body').html(response);
					// $('#modal').modal('show');

				},
				error: function(xhr) {
					console.error(xhr.responseText);
				}
			});

		}
	</script>
@endsection
