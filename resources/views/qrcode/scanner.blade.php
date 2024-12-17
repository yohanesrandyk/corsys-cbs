@extends('layout')

@section('content')
	<style>
		.scan #my-qr-reader {
			padding: 20px !important;
			border: 1.5px solid #b2b2b2 !important;
			border-radius: 8px;
		}

		.scan #my-qr-reader img[alt="Info icon"] {
			display: none;
		}

		.scan #my-qr-reader img[alt="Camera based scan"] {
			width: 100px !important;
			height: 100px !important;
		}

		.scan button {
			padding: 10px 20px;
			border: 1px solid #b2b2b2;
			outline: none;
			border-radius: 0.25em;
			color: white;
			font-size: 15px;
			cursor: pointer;
			margin-top: 15px;
			margin-bottom: 10px;
			background-color: #008000ad;
			transition: 0.3s background-color;
		}

		.scan button:hover {
			background-color: #008000;
		}

		.scan #html5-qrcode-anchor-scan-type-change {
			text-decoration: none !important;
			color: #1d9bf0;
		}

		.scan video {
			width: 100% !important;
			border: 1px solid #b2b2b2 !important;
			border-radius: 0.25em;
		}
	</style>
	<script src="https://unpkg.com/html5-qrcode"></script>
	<div class="scan">
		<h1>Scan QR Codes</h1>
		<div class="section">
			<div id="my-qr-reader">
			</div>
		</div>
	</div>
	<x-qr-modal nama-aset="Aset Inventaris" text="QR Code" barcode='scan' :onclick=false>
	</x-qr-modal>
	<script>
		// inisiasi html5QRCodeScanner
		function domReady(fn) {
			if (
				document.readyState === "complete" ||
				document.readyState === "interactive"
			) {
				setTimeout(fn, 1000);
			} else {
				document.addEventListener("DOMContentLoaded", fn);
			}
		}

		domReady(function() {

			// If found you qr code
			function onScanSuccess(decodeText, decodeResult) {
				var barcoded = decodeText.split('aset/')[1];
				barcode(barcoded);
				console.log(barcoded)
				$('#modalscan').modal('show');
			}

			let htmlscanner = new Html5QrcodeScanner(
				"my-qr-reader", {
					fps: 10,
					qrbojjx: 450
				}
			);
			htmlscanner.render(onScanSuccess);
		});

		function barcode(barcode) {
			$.ajax({
				url: '/api/fixed-asset/qrcode/' + barcode,
				method: 'GET',
				success: function(response) {
					$('#modalscan .modal-body').html(response);
					$('#html5-qrcode-button-camera-stop').click();

				},
				error: function(xhr) {
					console.error(xhr.responseText);
				}
			});

		}
	</script>
@endsection
