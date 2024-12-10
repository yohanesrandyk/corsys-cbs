@extends('layout')
@section('content')
<div class="row">
	<div class="col-xl-4 col-lg-6 mb-4">
		<x-button-card
			title="Cross Cabang"
			description="Lands, Houses, Ranchos, Farms"
			image="images/branch.png"
			link="{{ route('layout') }}"
			bgColor="bg-primary"
			descriptionSize="font-size-lg" />
	</div>

	<div class="col-xl-4 col-lg-6 mb-4">
		<x-button-card
			title="Pending Otorisasi"
			description="50% Increased for FY20"
			image="images/pending.png"
			link="{{ route('layout') }}"
			bgColor="bg-success"
			descriptionSize="font-size-lg" />
	</div>

	<div class="col-xl-4 col-lg-6 mb-4">
		<x-button-card
			title="Otorisasi Dashboard"
			description="({{ $pendingRowsCount }}) -> To go"
			image="images/approval.png"
			link="{{ route('layout') }}"
			bgColor="bg-warning"
			descriptionSize="font-size-lg" />
	</div>

	<div class="col-xl-4 col-lg-6 mb-4">
		<x-button-card
			title="Aktifitas Pinjaman"
			description="87K (23k to goal)"
			image="images/loan.png"
			link="{{ route('layout') }}"
			bgColor="bg-info"
			descriptionSize="font-size-lg" />
	</div>

	<div class="col-xl-4 col-lg-6 mb-4">
		<x-button-card
			title="To do list"
			description="Lands, Houses, Ranchos, Farms"
			image="images/todolist.png"
			link="{{ route('layout') }}"
			bgColor="bg-primary"
			descriptionSize="font-size-lg" />
	</div>

	<div class="col-xl-4 col-lg-6 mb-4">
		<x-button-card
			title="List Transaksi"
			description="50% Increased for FY20"
			image="images/transaction.png"
			link="{{ route('layout') }}"
			bgColor="bg-success"
			descriptionSize="font-size-lg" />
	</div>

	<div class="col-xl-4 col-lg-6 mb-4">
		<x-button-card
			title="List Otorisasi"
			description="52,450 (48k to goal)"
			image="images/authorization.png"
			link="{{ route('layout') }}"
			bgColor="bg-warning"
			descriptionSize="font-size-lg" />
	</div>
</div>
@endsection