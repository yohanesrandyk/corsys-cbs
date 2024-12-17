@extends('layout')
@section('content')
	<style>
		.helvetica {
			font-family: 'Helvetica', 'Arial', sans-serif;
			color: #444444;
		}
	</style>
	<link href="{{ asset('custom/css/datatable.min.css') }}" rel="stylesheet" type="text/css" />

	<div class="table-responsive">
		<table class="table-striped table-hover display table-row-bordered gy-5 table" id="fixaset_listaset">
			<thead class="table-primary">
				<tr class="fw-semibold fs-6">
					<th scope="col">No</th>
					<th scope="col">Nama Aset dan Inventaris</th>
					<th scope="col">Kondisi</th>
					<th scope="col">No Referensi</th>
					<th scope="col">Nilai Aset</th>
					<th scope="col">Nilai Awal</th>
					<th scope="col">Action</th>
				</tr>
			</thead>
			<tbody>
				@foreach ($asetList as $key => $aset)
					<tr>
						<th scope="row">{{ $key + 1 }}</th>
						<td>{{ $aset->ket }}</td>
						<td>{{ $aset->kondisi }}</td>
						<td>{{ $aset->noref }}</td>
						<td class="helvetica text-right">@rupiah($aset->nlperubahan)</td>
						<td class="helvetica text-right">@rupiah($aset->nilai)</td>
						<td>
							<x-button-link type="primary" :url="route('fixaset.barcode', $aset->qrcode)">Lihat</x-button-link>
							<x-qr-modal :nama-aset="$aset->ket" text="QR Code" :barcode='$aset->qrcode' :onclick=true>
							</x-qr-modal>
						</td>
					</tr>
				@endforeach

			</tbody>
		</table>
		{{-- @dd($asetList) --}}
	</div>
	<script>
		$(document).ready(function() {
			$('#fixaset_listaset').DataTable();
		});

		function barcode(barcode) {
			$.ajax({
				url: '/api/qrcode2/' + barcode,
				method: 'GET',
				success: function(response) {
					// window.open('/api/qrcode/' + barcode, '_blank');
					$('#modal' + barcode + ' .modal-body').html(response);

				},
				error: function(xhr) {
					console.error(xhr.responseText);
				}
			});


		}
	</script>
@endsection
