@extends('layout')

@section('content')
	<div id="reader"></div>
	<script src="{{ asset('custom/js/qrcode.js') }}"></script>
	<script>
		// inisiasi html5QRCodeScanner
		let html5QRCodeScanner = new Html5QrcodeScanner(
			"reader", {
				fps: 60,
				qrbox: {
					width: 500,
					height: 500,
				},
			}
		);

		function onScanSuccess(decodedText, decodedResult) {
			// window.location.href = decodedResult.decodedText;
			console.log(decodedResult);
			html5QRCodeScanner.clear();
			// 
		}
		html5QRCodeScanner.render(onScanSuccess);
	</script>
@endsection
