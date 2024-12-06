@extends('layout')

@section('content')
	<div class="table-responsive">
		<table class="table">
			<thead>
				<tr class="fw-bold fs-6 text-gray-800">
					<td> No. </td>
					<td> Nomor Referensi </td>
					<td> User Input </td>
					<td> Nilai </td>
					<td> Tanggal Input </td>
					<td> Jenis Transaksi </td>
					<td> Action </td>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>1</td>
					<td>123456</td>
					<td>John Doe</td>
					<td>1000</td>
					<td>2022-01-01</td>
					<td>Debit</td>
					<td><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_add_customer">
							Detail
						</button>
					</td>
				</tr>
				<tr>
					<td>1</td>
					<td>123456</td>
					<td>John Doe</td>
					<td>1000</td>
					<td>2022-01-01</td>
					<td>Debit</td>
					<td>
					</td>
				</tr>
			</tbody>
		</table>
	</div>
@endsection
