@extends('layout')
@section('content')
	<div class="container">
		<div class="row">
			<div class="col-lg-8 w-full">
				<div class="h-lg-100 bg-white p-6">
					<h2 class="text-left">Detail Aset dan Inventaris</h2>
					<div class="fs-2 fw-semibold text-gray-500">{{ $aset->ket }}</div>
				</div>
			</div>
			<div class="col-lg-4">
				<div class="h-lg-100 d-flex justify-content-center align-items-center bg-white">
					<div class="">
						<x-button-link><i class="icon-xl la la-pencil"></i> Edit</x-button-link>
						<x-qr-modal :barcode="$aset->qrcode" text='<i class="icon-xl la la-qrcode"></i> QR Code'
							onclick="barcode({{ $aset->qrcode }})"></x-qr-modal>
					</div>
				</div>
			</div>
		</div>

		<div class="row gx-6 gx-xl-9">
			<div class="col-lg-6 mt-6">
				<div class="h-lg-100 bg-white">
					<div class="card-body pb-2 pt-4">
						<table class="table-striped table table-auto">
							<tbody>
								<tr>
									<td class="min-w-36 pb-5 pe-6 text-sm text-gray-600">Keterangan</td>
									<td class="pb-5 text-sm text-gray-800">
										<?= $aset->merk ?>
									</td>
								</tr>
								<tr>
									<td class="min-w-36 pb-5 pe-6 text-sm text-gray-600">No Referensi</td>
									<td class="pb-5 text-sm text-gray-800">
										<?= $aset->noref ?>
									</td>
								</tr>
								<tr>
									<td class="min-w-36 pb-5 pe-6 text-sm text-gray-600">Detail Barang</td>
									<td class="pb-5 text-sm text-gray-800">{{ $aset->ket }}</td>
								</tr>
								<tr>
									<td class="min-w-36 pb-5 pe-6 text-sm text-gray-600">Tanggal Perolehan</td>
									<td class="pb-5 text-sm text-gray-800">{{ date('d M Y', strtotime($aset->tglval)) }}</td>
								</tr>
								<tr>
									<td class="min-w-36 pb-5 pe-6 text-sm text-gray-600">Penyusutan/Bulan</td>
									<td class="pb-5 text-sm text-gray-800">NL123456789B01</td>
								</tr>
								<tr>
									<td class="min-w-36 pb-5 pe-6 text-sm text-gray-600">Akumulasi Penyusutan</td>
									<td class="pb-5 text-sm text-gray-800">NL123456789B01</td>
								</tr>
								<tr>
									<td class="min-w-36 pb-5 pe-6 text-sm text-gray-600">Nilai Buku</td>
									<td class="pb-5 text-sm text-gray-800">NL123456789B01</td>
								</tr>
								<tr>
									<td class="min-w-36 pb-5 pe-6 text-sm text-gray-600">Jangka Waktu</td>
									<td class="pb-5 text-sm text-gray-800">NL123456789B01</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<div class="col-lg-6 mt-6">
				<div class="h-lg-100 bg-white">
					<div class="card-body pb-2 pt-4">
						<table class="table-striped table table-auto">
							<tbody>
								<tr>
									<td class="min-w-36 pb-5 pe-6 text-sm text-gray-600">Mata Uang</td>
									<td class="pb-5 text-sm text-gray-800">
										<?= $aset->ket ?>
									</td>
								</tr>
								<tr>
									<td class="min-w-36 pb-5 pe-6 text-sm text-gray-600">Tanggal Amortisasi</td>
									<td class="pb-5 text-sm text-gray-800">Keizersgracht 136, 1015 CW Amsterdam, Netherlands</td>
								</tr>
								<tr>
									<td class="min-w-36 pb-5 pe-6 text-sm text-gray-600">Jenis Harta</td>
									<td class="pb-5 text-sm text-gray-800">Jason Tatum</td>
								</tr>
								<tr>
									<td class="min-w-36 pb-5 pe-6 text-sm text-gray-600">Tipe Barang</td>
									<td class="pb-5 text-sm text-gray-800">NL123456789B01</td>
								</tr>
								<tr>
									<td class="min-w-36 pb-5 pe-6 text-sm text-gray-600">Kode Transaksi</td>
									<td class="pb-5 text-sm text-gray-800">NL123456789B01</td>
								</tr>
								<tr>
									<td class="min-w-36 pb-5 pe-6 text-sm text-gray-600">Kondisi Barang</td>
									<td class="pb-5 text-sm text-gray-800">NL123456789B01</td>
								</tr>
								<tr>
									<td class="min-w-36 pb-5 pe-6 text-sm text-gray-600">Posisi Barang</td>
									<td class="pb-5 text-sm text-gray-800">NL123456789B01</td>
								</tr>
								<tr>
									<td class="min-w-36 pb-5 pe-6 text-sm text-gray-600">Penanggung Jawab</td>
									<td class="pb-5 text-sm text-gray-800">NL123456789B01</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<div class="col-lg-12 mt-6">
				<div class="h-lg-100 bg-white">
					<!--begin::Card header-->
					<div class="card-header mt-6">
						<!--begin::Card title-->
						<div class="card-title flex-column">
							<h3 class="fw-bold mb-1">What's on the road?</h3>

							<div class="fs-6 text-gray-500">Total 482 participants</div>
						</div>
						<!--end::Card title-->

						<!--begin::Card toolbar-->
						<div class="card-toolbar">
							<!--begin::Select-->
							<select name="status" data-control="select2" data-hide-search="true"
								class="form-select form-select-solid form-select-sm fw-bold w-100px select2-hidden-accessible"
								data-select2-id="select2-data-12-revl" tabindex="-1" aria-hidden="true" data-kt-initialized="1">
								<option value="1" selected="" data-select2-id="select2-data-14-co1y">Options</option>
								<option value="2">Option 1</option>
								<option value="3">Option 2</option>
								<option value="4">Option 3</option>
							</select><span class="select2 select2-container select2-container--bootstrap5" dir="ltr"
								data-select2-id="select2-data-13-mmzw" style="width: 100%;"><span class="selection"><span
										class="select2-selection select2-selection--single form-select form-select-solid form-select-sm fw-bold w-100px"
										role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false"
										aria-labelledby="select2-status-gy-container" aria-controls="select2-status-gy-container"><span
											class="select2-selection__rendered" id="select2-status-gy-container" role="textbox" aria-readonly="true"
											title="Options">Options</span><span class="select2-selection__arrow" role="presentation"><b
												role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
							<!--end::Select-->
						</div>
						<!--end::Card toolbar-->
					</div>
					<!--end::Card header-->

					<!--begin::Card body-->
					<div class="card-body p-9 pt-4">
						<!--begin::Dates-->
						<ul class="nav nav-pills d-flex hover-scroll-x flex-nowrap py-2" role="tablist">

							<!--begin::Date-->
							<li class="nav-item me-1" role="presentation">
								<a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px btn-active-primary me-2 px-3 py-4"
									data-bs-toggle="tab" href="#kt_schedule_day_0" aria-selected="false" tabindex="-1" role="tab">

									<span class="fs-7 fw-semibold opacity-50">Su</span>
									<span class="fs-6 fw-bold">22</span>
								</a>
							</li>
							<!--end::Date-->

							<!--begin::Date-->
							<li class="nav-item me-1" role="presentation">
								<a
									class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px btn-active-primary active me-2 px-3 py-4"
									data-bs-toggle="tab" href="#kt_schedule_day_1" aria-selected="true" role="tab">

									<span class="fs-7 fw-semibold opacity-50">Mo</span>
									<span class="fs-6 fw-bold">23</span>
								</a>
							</li>
							<!--end::Date-->

							<!--begin::Date-->
							<li class="nav-item me-1" role="presentation">
								<a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px btn-active-primary me-2 px-3 py-4"
									data-bs-toggle="tab" href="#kt_schedule_day_2" aria-selected="false" tabindex="-1" role="tab">

									<span class="fs-7 fw-semibold opacity-50">Tu</span>
									<span class="fs-6 fw-bold">24</span>
								</a>
							</li>
							<!--end::Date-->

							<!--begin::Date-->
							<li class="nav-item me-1" role="presentation">
								<a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px btn-active-primary me-2 px-3 py-4"
									data-bs-toggle="tab" href="#kt_schedule_day_3" aria-selected="false" tabindex="-1" role="tab">

									<span class="fs-7 fw-semibold opacity-50">We</span>
									<span class="fs-6 fw-bold">25</span>
								</a>
							</li>
							<!--end::Date-->

							<!--begin::Date-->
							<li class="nav-item me-1" role="presentation">
								<a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px btn-active-primary me-2 px-3 py-4"
									data-bs-toggle="tab" href="#kt_schedule_day_4" aria-selected="false" tabindex="-1" role="tab">

									<span class="fs-7 fw-semibold opacity-50">Th</span>
									<span class="fs-6 fw-bold">26</span>
								</a>
							</li>
							<!--end::Date-->

							<!--begin::Date-->
							<li class="nav-item me-1" role="presentation">
								<a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px btn-active-primary me-2 px-3 py-4"
									data-bs-toggle="tab" href="#kt_schedule_day_5" aria-selected="false" tabindex="-1" role="tab">

									<span class="fs-7 fw-semibold opacity-50">Fr</span>
									<span class="fs-6 fw-bold">27</span>
								</a>
							</li>
							<!--end::Date-->

							<!--begin::Date-->
							<li class="nav-item me-1" role="presentation">
								<a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px btn-active-primary me-2 px-3 py-4"
									data-bs-toggle="tab" href="#kt_schedule_day_6" aria-selected="false" tabindex="-1" role="tab">

									<span class="fs-7 fw-semibold opacity-50">Sa</span>
									<span class="fs-6 fw-bold">28</span>
								</a>
							</li>
							<!--end::Date-->

							<!--begin::Date-->
							<li class="nav-item me-1" role="presentation">
								<a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px btn-active-primary me-2 px-3 py-4"
									data-bs-toggle="tab" href="#kt_schedule_day_7" aria-selected="false" tabindex="-1" role="tab">

									<span class="fs-7 fw-semibold opacity-50">Su</span>
									<span class="fs-6 fw-bold">29</span>
								</a>
							</li>
							<!--end::Date-->

							<!--begin::Date-->
							<li class="nav-item me-1" role="presentation">
								<a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px btn-active-primary me-2 px-3 py-4"
									data-bs-toggle="tab" href="#kt_schedule_day_8" aria-selected="false" tabindex="-1" role="tab">

									<span class="fs-7 fw-semibold opacity-50">Mo</span>
									<span class="fs-6 fw-bold">30</span>
								</a>
							</li>
							<!--end::Date-->

							<!--begin::Date-->
							<li class="nav-item me-1" role="presentation">
								<a class="nav-link btn d-flex flex-column flex-center rounded-pill min-w-45px btn-active-primary me-2 px-3 py-4"
									data-bs-toggle="tab" href="#kt_schedule_day_9" aria-selected="false" tabindex="-1" role="tab">

									<span class="fs-7 fw-semibold opacity-50">Tu</span>
									<span class="fs-6 fw-bold">31</span>
								</a>
							</li>
							<!--end::Date-->
						</ul>
						<!--end::Dates-->

						<!--begin::Tab Content-->
						<div class="tab-content">
							<!--begin::Day-->
							<div id="kt_schedule_day_0" class="tab-pane fade show" role="tabpanel">
								<!--begin::Time-->
								<div class="d-flex flex-stack position-relative mt-8">
									<!--begin::Bar-->
									<div class="position-absolute h-100 w-4px bg-secondary start-0 top-0 rounded"></div>
									<!--end::Bar-->

									<!--begin::Info-->
									<div class="fw-semibold ms-5 text-gray-600">
										<!--begin::Time-->
										<div class="fs-5">
											12:00 - 13:00

											<span class="fs-7 text-uppercase text-gray-500">
												pm </span>
										</div>
										<!--end::Time-->

										<!--begin::Title-->
										<a href="#" class="fs-5 fw-bold text-hover-primary mb-2 text-gray-800">
											Creative Content Initiative </a>
										<!--end::Title-->

										<!--begin::User-->
										<div class="text-gray-500">
											Lead by <a href="#">Karina Clarke</a>
										</div>
										<!--end::User-->
									</div>
									<!--end::Info-->

									<!--begin::Action-->
									<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
									<!--end::Action-->
								</div>
								<!--end::Time-->
								<!--begin::Time-->
								<div class="d-flex flex-stack position-relative mt-8">
									<!--begin::Bar-->
									<div class="position-absolute h-100 w-4px bg-secondary start-0 top-0 rounded"></div>
									<!--end::Bar-->

									<!--begin::Info-->
									<div class="fw-semibold ms-5 text-gray-600">
										<!--begin::Time-->
										<div class="fs-5">
											16:30 - 17:30

											<span class="fs-7 text-uppercase text-gray-500">
												pm </span>
										</div>
										<!--end::Time-->

										<!--begin::Title-->
										<a href="#" class="fs-5 fw-bold text-hover-primary mb-2 text-gray-800">
											Committee Review Approvals </a>
										<!--end::Title-->

										<!--begin::User-->
										<div class="text-gray-500">
											Lead by <a href="#">Mark Randall</a>
										</div>
										<!--end::User-->
									</div>
									<!--end::Info-->

									<!--begin::Action-->
									<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
									<!--end::Action-->
								</div>
								<!--end::Time-->
								<!--begin::Time-->
								<div class="d-flex flex-stack position-relative mt-8">
									<!--begin::Bar-->
									<div class="position-absolute h-100 w-4px bg-secondary start-0 top-0 rounded"></div>
									<!--end::Bar-->

									<!--begin::Info-->
									<div class="fw-semibold ms-5 text-gray-600">
										<!--begin::Time-->
										<div class="fs-5">
											11:00 - 11:45

											<span class="fs-7 text-uppercase text-gray-500">
												am </span>
										</div>
										<!--end::Time-->

										<!--begin::Title-->
										<a href="#" class="fs-5 fw-bold text-hover-primary mb-2 text-gray-800">
											Development Team Capacity Review </a>
										<!--end::Title-->

										<!--begin::User-->
										<div class="text-gray-500">
											Lead by <a href="#">Karina Clarke</a>
										</div>
										<!--end::User-->
									</div>
									<!--end::Info-->

									<!--begin::Action-->
									<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
									<!--end::Action-->
								</div>
								<!--end::Time-->
							</div>
							<!--end::Day-->
							<!--begin::Day-->
							<div id="kt_schedule_day_1" class="tab-pane fade show active" role="tabpanel">
								<!--begin::Time-->
								<div class="d-flex flex-stack position-relative mt-8">
									<!--begin::Bar-->
									<div class="position-absolute h-100 w-4px bg-secondary start-0 top-0 rounded"></div>
									<!--end::Bar-->

									<!--begin::Info-->
									<div class="fw-semibold ms-5 text-gray-600">
										<!--begin::Time-->
										<div class="fs-5">
											12:00 - 13:00

											<span class="fs-7 text-uppercase text-gray-500">
												pm </span>
										</div>
										<!--end::Time-->

										<!--begin::Title-->
										<a href="#" class="fs-5 fw-bold text-hover-primary mb-2 text-gray-800">
											Lunch &amp; Learn Catch Up </a>
										<!--end::Title-->

										<!--begin::User-->
										<div class="text-gray-500">
											Lead by <a href="#">Bob Harris</a>
										</div>
										<!--end::User-->
									</div>
									<!--end::Info-->

									<!--begin::Action-->
									<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
									<!--end::Action-->
								</div>
								<!--end::Time-->
								<!--begin::Time-->
								<div class="d-flex flex-stack position-relative mt-8">
									<!--begin::Bar-->
									<div class="position-absolute h-100 w-4px bg-secondary start-0 top-0 rounded"></div>
									<!--end::Bar-->

									<!--begin::Info-->
									<div class="fw-semibold ms-5 text-gray-600">
										<!--begin::Time-->
										<div class="fs-5">
											11:00 - 11:45

											<span class="fs-7 text-uppercase text-gray-500">
												am </span>
										</div>
										<!--end::Time-->

										<!--begin::Title-->
										<a href="#" class="fs-5 fw-bold text-hover-primary mb-2 text-gray-800">
											Development Team Capacity Review </a>
										<!--end::Title-->

										<!--begin::User-->
										<div class="text-gray-500">
											Lead by <a href="#">Yannis Gloverson</a>
										</div>
										<!--end::User-->
									</div>
									<!--end::Info-->

									<!--begin::Action-->
									<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
									<!--end::Action-->
								</div>
								<!--end::Time-->
								<!--begin::Time-->
								<div class="d-flex flex-stack position-relative mt-8">
									<!--begin::Bar-->
									<div class="position-absolute h-100 w-4px bg-secondary start-0 top-0 rounded"></div>
									<!--end::Bar-->

									<!--begin::Info-->
									<div class="fw-semibold ms-5 text-gray-600">
										<!--begin::Time-->
										<div class="fs-5">
											11:00 - 11:45

											<span class="fs-7 text-uppercase text-gray-500">
												am </span>
										</div>
										<!--end::Time-->

										<!--begin::Title-->
										<a href="#" class="fs-5 fw-bold text-hover-primary mb-2 text-gray-800">
											Marketing Campaign Discussion </a>
										<!--end::Title-->

										<!--begin::User-->
										<div class="text-gray-500">
											Lead by <a href="#">Bob Harris</a>
										</div>
										<!--end::User-->
									</div>
									<!--end::Info-->

									<!--begin::Action-->
									<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
									<!--end::Action-->
								</div>
								<!--end::Time-->
							</div>
							<!--end::Day-->
							<!--begin::Day-->
							<div id="kt_schedule_day_2" class="tab-pane fade show" role="tabpanel">
								<!--begin::Time-->
								<div class="d-flex flex-stack position-relative mt-8">
									<!--begin::Bar-->
									<div class="position-absolute h-100 w-4px bg-secondary start-0 top-0 rounded"></div>
									<!--end::Bar-->

									<!--begin::Info-->
									<div class="fw-semibold ms-5 text-gray-600">
										<!--begin::Time-->
										<div class="fs-5">
											10:00 - 11:00

											<span class="fs-7 text-uppercase text-gray-500">
												am </span>
										</div>
										<!--end::Time-->

										<!--begin::Title-->
										<a href="#" class="fs-5 fw-bold text-hover-primary mb-2 text-gray-800">
											Dashboard UI/UX Design Review </a>
										<!--end::Title-->

										<!--begin::User-->
										<div class="text-gray-500">
											Lead by <a href="#">Naomi Hayabusa</a>
										</div>
										<!--end::User-->
									</div>
									<!--end::Info-->

									<!--begin::Action-->
									<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
									<!--end::Action-->
								</div>
								<!--end::Time-->
								<!--begin::Time-->
								<div class="d-flex flex-stack position-relative mt-8">
									<!--begin::Bar-->
									<div class="position-absolute h-100 w-4px bg-secondary start-0 top-0 rounded"></div>
									<!--end::Bar-->

									<!--begin::Info-->
									<div class="fw-semibold ms-5 text-gray-600">
										<!--begin::Time-->
										<div class="fs-5">
											9:00 - 10:00

											<span class="fs-7 text-uppercase text-gray-500">
												am </span>
										</div>
										<!--end::Time-->

										<!--begin::Title-->
										<a href="#" class="fs-5 fw-bold text-hover-primary mb-2 text-gray-800">
											Creative Content Initiative </a>
										<!--end::Title-->

										<!--begin::User-->
										<div class="text-gray-500">
											Lead by <a href="#">Mark Randall</a>
										</div>
										<!--end::User-->
									</div>
									<!--end::Info-->

									<!--begin::Action-->
									<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
									<!--end::Action-->
								</div>
								<!--end::Time-->
								<!--begin::Time-->
								<div class="d-flex flex-stack position-relative mt-8">
									<!--begin::Bar-->
									<div class="position-absolute h-100 w-4px bg-secondary start-0 top-0 rounded"></div>
									<!--end::Bar-->

									<!--begin::Info-->
									<div class="fw-semibold ms-5 text-gray-600">
										<!--begin::Time-->
										<div class="fs-5">
											11:00 - 11:45

											<span class="fs-7 text-uppercase text-gray-500">
												am </span>
										</div>
										<!--end::Time-->

										<!--begin::Title-->
										<a href="#" class="fs-5 fw-bold text-hover-primary mb-2 text-gray-800">
											Project Review &amp; Testing </a>
										<!--end::Title-->

										<!--begin::User-->
										<div class="text-gray-500">
											Lead by <a href="#">Naomi Hayabusa</a>
										</div>
										<!--end::User-->
									</div>
									<!--end::Info-->

									<!--begin::Action-->
									<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
									<!--end::Action-->
								</div>
								<!--end::Time-->
							</div>
							<!--end::Day-->
							<!--begin::Day-->
							<div id="kt_schedule_day_3" class="tab-pane fade show" role="tabpanel">
								<!--begin::Time-->
								<div class="d-flex flex-stack position-relative mt-8">
									<!--begin::Bar-->
									<div class="position-absolute h-100 w-4px bg-secondary start-0 top-0 rounded"></div>
									<!--end::Bar-->

									<!--begin::Info-->
									<div class="fw-semibold ms-5 text-gray-600">
										<!--begin::Time-->
										<div class="fs-5">
											13:00 - 14:00

											<span class="fs-7 text-uppercase text-gray-500">
												pm </span>
										</div>
										<!--end::Time-->

										<!--begin::Title-->
										<a href="#" class="fs-5 fw-bold text-hover-primary mb-2 text-gray-800">
											Project Review &amp; Testing </a>
										<!--end::Title-->

										<!--begin::User-->
										<div class="text-gray-500">
											Lead by <a href="#">Walter White</a>
										</div>
										<!--end::User-->
									</div>
									<!--end::Info-->

									<!--begin::Action-->
									<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
									<!--end::Action-->
								</div>
								<!--end::Time-->
								<!--begin::Time-->
								<div class="d-flex flex-stack position-relative mt-8">
									<!--begin::Bar-->
									<div class="position-absolute h-100 w-4px bg-secondary start-0 top-0 rounded"></div>
									<!--end::Bar-->

									<!--begin::Info-->
									<div class="fw-semibold ms-5 text-gray-600">
										<!--begin::Time-->
										<div class="fs-5">
											13:00 - 14:00

											<span class="fs-7 text-uppercase text-gray-500">
												pm </span>
										</div>
										<!--end::Time-->

										<!--begin::Title-->
										<a href="#" class="fs-5 fw-bold text-hover-primary mb-2 text-gray-800">
											Development Team Capacity Review </a>
										<!--end::Title-->

										<!--begin::User-->
										<div class="text-gray-500">
											Lead by <a href="#">David Stevenson</a>
										</div>
										<!--end::User-->
									</div>
									<!--end::Info-->

									<!--begin::Action-->
									<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
									<!--end::Action-->
								</div>
								<!--end::Time-->
								<!--begin::Time-->
								<div class="d-flex flex-stack position-relative mt-8">
									<!--begin::Bar-->
									<div class="position-absolute h-100 w-4px bg-secondary start-0 top-0 rounded"></div>
									<!--end::Bar-->

									<!--begin::Info-->
									<div class="fw-semibold ms-5 text-gray-600">
										<!--begin::Time-->
										<div class="fs-5">
											12:00 - 13:00

											<span class="fs-7 text-uppercase text-gray-500">
												pm </span>
										</div>
										<!--end::Time-->

										<!--begin::Title-->
										<a href="#" class="fs-5 fw-bold text-hover-primary mb-2 text-gray-800">
											Development Team Capacity Review </a>
										<!--end::Title-->

										<!--begin::User-->
										<div class="text-gray-500">
											Lead by <a href="#">Sean Bean</a>
										</div>
										<!--end::User-->
									</div>
									<!--end::Info-->

									<!--begin::Action-->
									<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
									<!--end::Action-->
								</div>
								<!--end::Time-->
							</div>
							<!--end::Day-->
							<!--begin::Day-->
							<div id="kt_schedule_day_4" class="tab-pane fade show" role="tabpanel">
								<!--begin::Time-->
								<div class="d-flex flex-stack position-relative mt-8">
									<!--begin::Bar-->
									<div class="position-absolute h-100 w-4px bg-secondary start-0 top-0 rounded"></div>
									<!--end::Bar-->

									<!--begin::Info-->
									<div class="fw-semibold ms-5 text-gray-600">
										<!--begin::Time-->
										<div class="fs-5">
											10:00 - 11:00

											<span class="fs-7 text-uppercase text-gray-500">
												am </span>
										</div>
										<!--end::Time-->

										<!--begin::Title-->
										<a href="#" class="fs-5 fw-bold text-hover-primary mb-2 text-gray-800">
											Dashboard UI/UX Design Review </a>
										<!--end::Title-->

										<!--begin::User-->
										<div class="text-gray-500">
											Lead by <a href="#">Kendell Trevor</a>
										</div>
										<!--end::User-->
									</div>
									<!--end::Info-->

									<!--begin::Action-->
									<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
									<!--end::Action-->
								</div>
								<!--end::Time-->
								<!--begin::Time-->
								<div class="d-flex flex-stack position-relative mt-8">
									<!--begin::Bar-->
									<div class="position-absolute h-100 w-4px bg-secondary start-0 top-0 rounded"></div>
									<!--end::Bar-->

									<!--begin::Info-->
									<div class="fw-semibold ms-5 text-gray-600">
										<!--begin::Time-->
										<div class="fs-5">
											13:00 - 14:00

											<span class="fs-7 text-uppercase text-gray-500">
												pm </span>
										</div>
										<!--end::Time-->

										<!--begin::Title-->
										<a href="#" class="fs-5 fw-bold text-hover-primary mb-2 text-gray-800">
											Development Team Capacity Review </a>
										<!--end::Title-->

										<!--begin::User-->
										<div class="text-gray-500">
											Lead by <a href="#">Bob Harris</a>
										</div>
										<!--end::User-->
									</div>
									<!--end::Info-->

									<!--begin::Action-->
									<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
									<!--end::Action-->
								</div>
								<!--end::Time-->
								<!--begin::Time-->
								<div class="d-flex flex-stack position-relative mt-8">
									<!--begin::Bar-->
									<div class="position-absolute h-100 w-4px bg-secondary start-0 top-0 rounded"></div>
									<!--end::Bar-->

									<!--begin::Info-->
									<div class="fw-semibold ms-5 text-gray-600">
										<!--begin::Time-->
										<div class="fs-5">
											16:30 - 17:30

											<span class="fs-7 text-uppercase text-gray-500">
												pm </span>
										</div>
										<!--end::Time-->

										<!--begin::Title-->
										<a href="#" class="fs-5 fw-bold text-hover-primary mb-2 text-gray-800">
											Dashboard UI/UX Design Review </a>
										<!--end::Title-->

										<!--begin::User-->
										<div class="text-gray-500">
											Lead by <a href="#">Naomi Hayabusa</a>
										</div>
										<!--end::User-->
									</div>
									<!--end::Info-->

									<!--begin::Action-->
									<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
									<!--end::Action-->
								</div>
								<!--end::Time-->
							</div>
							<!--end::Day-->
							<!--begin::Day-->
							<div id="kt_schedule_day_5" class="tab-pane fade show" role="tabpanel">
								<!--begin::Time-->
								<div class="d-flex flex-stack position-relative mt-8">
									<!--begin::Bar-->
									<div class="position-absolute h-100 w-4px bg-secondary start-0 top-0 rounded"></div>
									<!--end::Bar-->

									<!--begin::Info-->
									<div class="fw-semibold ms-5 text-gray-600">
										<!--begin::Time-->
										<div class="fs-5">
											11:00 - 11:45

											<span class="fs-7 text-uppercase text-gray-500">
												am </span>
										</div>
										<!--end::Time-->

										<!--begin::Title-->
										<a href="#" class="fs-5 fw-bold text-hover-primary mb-2 text-gray-800">
											Marketing Campaign Discussion </a>
										<!--end::Title-->

										<!--begin::User-->
										<div class="text-gray-500">
											Lead by <a href="#">Mark Randall</a>
										</div>
										<!--end::User-->
									</div>
									<!--end::Info-->

									<!--begin::Action-->
									<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
									<!--end::Action-->
								</div>
								<!--end::Time-->
								<!--begin::Time-->
								<div class="d-flex flex-stack position-relative mt-8">
									<!--begin::Bar-->
									<div class="position-absolute h-100 w-4px bg-secondary start-0 top-0 rounded"></div>
									<!--end::Bar-->

									<!--begin::Info-->
									<div class="fw-semibold ms-5 text-gray-600">
										<!--begin::Time-->
										<div class="fs-5">
											10:00 - 11:00

											<span class="fs-7 text-uppercase text-gray-500">
												am </span>
										</div>
										<!--end::Time-->

										<!--begin::Title-->
										<a href="#" class="fs-5 fw-bold text-hover-primary mb-2 text-gray-800">
											Committee Review Approvals </a>
										<!--end::Title-->

										<!--begin::User-->
										<div class="text-gray-500">
											Lead by <a href="#">Mark Randall</a>
										</div>
										<!--end::User-->
									</div>
									<!--end::Info-->

									<!--begin::Action-->
									<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
									<!--end::Action-->
								</div>
								<!--end::Time-->
								<!--begin::Time-->
								<div class="d-flex flex-stack position-relative mt-8">
									<!--begin::Bar-->
									<div class="position-absolute h-100 w-4px bg-secondary start-0 top-0 rounded"></div>
									<!--end::Bar-->

									<!--begin::Info-->
									<div class="fw-semibold ms-5 text-gray-600">
										<!--begin::Time-->
										<div class="fs-5">
											11:00 - 11:45

											<span class="fs-7 text-uppercase text-gray-500">
												am </span>
										</div>
										<!--end::Time-->

										<!--begin::Title-->
										<a href="#" class="fs-5 fw-bold text-hover-primary mb-2 text-gray-800">
											Dashboard UI/UX Design Review </a>
										<!--end::Title-->

										<!--begin::User-->
										<div class="text-gray-500">
											Lead by <a href="#">Sean Bean</a>
										</div>
										<!--end::User-->
									</div>
									<!--end::Info-->

									<!--begin::Action-->
									<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
									<!--end::Action-->
								</div>
								<!--end::Time-->
							</div>
							<!--end::Day-->
							<!--begin::Day-->
							<div id="kt_schedule_day_6" class="tab-pane fade show" role="tabpanel">
								<!--begin::Time-->
								<div class="d-flex flex-stack position-relative mt-8">
									<!--begin::Bar-->
									<div class="position-absolute h-100 w-4px bg-secondary start-0 top-0 rounded"></div>
									<!--end::Bar-->

									<!--begin::Info-->
									<div class="fw-semibold ms-5 text-gray-600">
										<!--begin::Time-->
										<div class="fs-5">
											11:00 - 11:45

											<span class="fs-7 text-uppercase text-gray-500">
												am </span>
										</div>
										<!--end::Time-->

										<!--begin::Title-->
										<a href="#" class="fs-5 fw-bold text-hover-primary mb-2 text-gray-800">
											Marketing Campaign Discussion </a>
										<!--end::Title-->

										<!--begin::User-->
										<div class="text-gray-500">
											Lead by <a href="#">Michael Walters</a>
										</div>
										<!--end::User-->
									</div>
									<!--end::Info-->

									<!--begin::Action-->
									<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
									<!--end::Action-->
								</div>
								<!--end::Time-->
								<!--begin::Time-->
								<div class="d-flex flex-stack position-relative mt-8">
									<!--begin::Bar-->
									<div class="position-absolute h-100 w-4px bg-secondary start-0 top-0 rounded"></div>
									<!--end::Bar-->

									<!--begin::Info-->
									<div class="fw-semibold ms-5 text-gray-600">
										<!--begin::Time-->
										<div class="fs-5">
											14:30 - 15:30

											<span class="fs-7 text-uppercase text-gray-500">
												pm </span>
										</div>
										<!--end::Time-->

										<!--begin::Title-->
										<a href="#" class="fs-5 fw-bold text-hover-primary mb-2 text-gray-800">
											Sales Pitch Proposal </a>
										<!--end::Title-->

										<!--begin::User-->
										<div class="text-gray-500">
											Lead by <a href="#">Michael Walters</a>
										</div>
										<!--end::User-->
									</div>
									<!--end::Info-->

									<!--begin::Action-->
									<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
									<!--end::Action-->
								</div>
								<!--end::Time-->
								<!--begin::Time-->
								<div class="d-flex flex-stack position-relative mt-8">
									<!--begin::Bar-->
									<div class="position-absolute h-100 w-4px bg-secondary start-0 top-0 rounded"></div>
									<!--end::Bar-->

									<!--begin::Info-->
									<div class="fw-semibold ms-5 text-gray-600">
										<!--begin::Time-->
										<div class="fs-5">
											12:00 - 13:00

											<span class="fs-7 text-uppercase text-gray-500">
												pm </span>
										</div>
										<!--end::Time-->

										<!--begin::Title-->
										<a href="#" class="fs-5 fw-bold text-hover-primary mb-2 text-gray-800">
											Development Team Capacity Review </a>
										<!--end::Title-->

										<!--begin::User-->
										<div class="text-gray-500">
											Lead by <a href="#">Kendell Trevor</a>
										</div>
										<!--end::User-->
									</div>
									<!--end::Info-->

									<!--begin::Action-->
									<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
									<!--end::Action-->
								</div>
								<!--end::Time-->
							</div>
							<!--end::Day-->
							<!--begin::Day-->
							<div id="kt_schedule_day_7" class="tab-pane fade show" role="tabpanel">
								<!--begin::Time-->
								<div class="d-flex flex-stack position-relative mt-8">
									<!--begin::Bar-->
									<div class="position-absolute h-100 w-4px bg-secondary start-0 top-0 rounded"></div>
									<!--end::Bar-->

									<!--begin::Info-->
									<div class="fw-semibold ms-5 text-gray-600">
										<!--begin::Time-->
										<div class="fs-5">
											9:00 - 10:00

											<span class="fs-7 text-uppercase text-gray-500">
												am </span>
										</div>
										<!--end::Time-->

										<!--begin::Title-->
										<a href="#" class="fs-5 fw-bold text-hover-primary mb-2 text-gray-800">
											Team Backlog Grooming Session </a>
										<!--end::Title-->

										<!--begin::User-->
										<div class="text-gray-500">
											Lead by <a href="#">Terry Robins</a>
										</div>
										<!--end::User-->
									</div>
									<!--end::Info-->

									<!--begin::Action-->
									<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
									<!--end::Action-->
								</div>
								<!--end::Time-->
								<!--begin::Time-->
								<div class="d-flex flex-stack position-relative mt-8">
									<!--begin::Bar-->
									<div class="position-absolute h-100 w-4px bg-secondary start-0 top-0 rounded"></div>
									<!--end::Bar-->

									<!--begin::Info-->
									<div class="fw-semibold ms-5 text-gray-600">
										<!--begin::Time-->
										<div class="fs-5">
											10:00 - 11:00

											<span class="fs-7 text-uppercase text-gray-500">
												am </span>
										</div>
										<!--end::Time-->

										<!--begin::Title-->
										<a href="#" class="fs-5 fw-bold text-hover-primary mb-2 text-gray-800">
											Committee Review Approvals </a>
										<!--end::Title-->

										<!--begin::User-->
										<div class="text-gray-500">
											Lead by <a href="#">Caleb Donaldson</a>
										</div>
										<!--end::User-->
									</div>
									<!--end::Info-->

									<!--begin::Action-->
									<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
									<!--end::Action-->
								</div>
								<!--end::Time-->
								<!--begin::Time-->
								<div class="d-flex flex-stack position-relative mt-8">
									<!--begin::Bar-->
									<div class="position-absolute h-100 w-4px bg-secondary start-0 top-0 rounded"></div>
									<!--end::Bar-->

									<!--begin::Info-->
									<div class="fw-semibold ms-5 text-gray-600">
										<!--begin::Time-->
										<div class="fs-5">
											13:00 - 14:00

											<span class="fs-7 text-uppercase text-gray-500">
												pm </span>
										</div>
										<!--end::Time-->

										<!--begin::Title-->
										<a href="#" class="fs-5 fw-bold text-hover-primary mb-2 text-gray-800">
											Dashboard UI/UX Design Review </a>
										<!--end::Title-->

										<!--begin::User-->
										<div class="text-gray-500">
											Lead by <a href="#">Sean Bean</a>
										</div>
										<!--end::User-->
									</div>
									<!--end::Info-->

									<!--begin::Action-->
									<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
									<!--end::Action-->
								</div>
								<!--end::Time-->
							</div>
							<!--end::Day-->
							<!--begin::Day-->
							<div id="kt_schedule_day_8" class="tab-pane fade show" role="tabpanel">
								<!--begin::Time-->
								<div class="d-flex flex-stack position-relative mt-8">
									<!--begin::Bar-->
									<div class="position-absolute h-100 w-4px bg-secondary start-0 top-0 rounded"></div>
									<!--end::Bar-->

									<!--begin::Info-->
									<div class="fw-semibold ms-5 text-gray-600">
										<!--begin::Time-->
										<div class="fs-5">
											11:00 - 11:45

											<span class="fs-7 text-uppercase text-gray-500">
												am </span>
										</div>
										<!--end::Time-->

										<!--begin::Title-->
										<a href="#" class="fs-5 fw-bold text-hover-primary mb-2 text-gray-800">
											Committee Review Approvals </a>
										<!--end::Title-->

										<!--begin::User-->
										<div class="text-gray-500">
											Lead by <a href="#">Karina Clarke</a>
										</div>
										<!--end::User-->
									</div>
									<!--end::Info-->

									<!--begin::Action-->
									<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
									<!--end::Action-->
								</div>
								<!--end::Time-->
								<!--begin::Time-->
								<div class="d-flex flex-stack position-relative mt-8">
									<!--begin::Bar-->
									<div class="position-absolute h-100 w-4px bg-secondary start-0 top-0 rounded"></div>
									<!--end::Bar-->

									<!--begin::Info-->
									<div class="fw-semibold ms-5 text-gray-600">
										<!--begin::Time-->
										<div class="fs-5">
											12:00 - 13:00

											<span class="fs-7 text-uppercase text-gray-500">
												pm </span>
										</div>
										<!--end::Time-->

										<!--begin::Title-->
										<a href="#" class="fs-5 fw-bold text-hover-primary mb-2 text-gray-800">
											Lunch &amp; Learn Catch Up </a>
										<!--end::Title-->

										<!--begin::User-->
										<div class="text-gray-500">
											Lead by <a href="#">Naomi Hayabusa</a>
										</div>
										<!--end::User-->
									</div>
									<!--end::Info-->

									<!--begin::Action-->
									<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
									<!--end::Action-->
								</div>
								<!--end::Time-->
								<!--begin::Time-->
								<div class="d-flex flex-stack position-relative mt-8">
									<!--begin::Bar-->
									<div class="position-absolute h-100 w-4px bg-secondary start-0 top-0 rounded"></div>
									<!--end::Bar-->

									<!--begin::Info-->
									<div class="fw-semibold ms-5 text-gray-600">
										<!--begin::Time-->
										<div class="fs-5">
											10:00 - 11:00

											<span class="fs-7 text-uppercase text-gray-500">
												am </span>
										</div>
										<!--end::Time-->

										<!--begin::Title-->
										<a href="#" class="fs-5 fw-bold text-hover-primary mb-2 text-gray-800">
											Team Backlog Grooming Session </a>
										<!--end::Title-->

										<!--begin::User-->
										<div class="text-gray-500">
											Lead by <a href="#">David Stevenson</a>
										</div>
										<!--end::User-->
									</div>
									<!--end::Info-->

									<!--begin::Action-->
									<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
									<!--end::Action-->
								</div>
								<!--end::Time-->
							</div>
							<!--end::Day-->
							<!--begin::Day-->
							<div id="kt_schedule_day_9" class="tab-pane fade show" role="tabpanel">
								<!--begin::Time-->
								<div class="d-flex flex-stack position-relative mt-8">
									<!--begin::Bar-->
									<div class="position-absolute h-100 w-4px bg-secondary start-0 top-0 rounded"></div>
									<!--end::Bar-->

									<!--begin::Info-->
									<div class="fw-semibold ms-5 text-gray-600">
										<!--begin::Time-->
										<div class="fs-5">
											16:30 - 17:30

											<span class="fs-7 text-uppercase text-gray-500">
												pm </span>
										</div>
										<!--end::Time-->

										<!--begin::Title-->
										<a href="#" class="fs-5 fw-bold text-hover-primary mb-2 text-gray-800">
											Marketing Campaign Discussion </a>
										<!--end::Title-->

										<!--begin::User-->
										<div class="text-gray-500">
											Lead by <a href="#">Mark Randall</a>
										</div>
										<!--end::User-->
									</div>
									<!--end::Info-->

									<!--begin::Action-->
									<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
									<!--end::Action-->
								</div>
								<!--end::Time-->
								<!--begin::Time-->
								<div class="d-flex flex-stack position-relative mt-8">
									<!--begin::Bar-->
									<div class="position-absolute h-100 w-4px bg-secondary start-0 top-0 rounded"></div>
									<!--end::Bar-->

									<!--begin::Info-->
									<div class="fw-semibold ms-5 text-gray-600">
										<!--begin::Time-->
										<div class="fs-5">
											9:00 - 10:00

											<span class="fs-7 text-uppercase text-gray-500">
												am </span>
										</div>
										<!--end::Time-->

										<!--begin::Title-->
										<a href="#" class="fs-5 fw-bold text-hover-primary mb-2 text-gray-800">
											Development Team Capacity Review </a>
										<!--end::Title-->

										<!--begin::User-->
										<div class="text-gray-500">
											Lead by <a href="#">Caleb Donaldson</a>
										</div>
										<!--end::User-->
									</div>
									<!--end::Info-->

									<!--begin::Action-->
									<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
									<!--end::Action-->
								</div>
								<!--end::Time-->
								<!--begin::Time-->
								<div class="d-flex flex-stack position-relative mt-8">
									<!--begin::Bar-->
									<div class="position-absolute h-100 w-4px bg-secondary start-0 top-0 rounded"></div>
									<!--end::Bar-->

									<!--begin::Info-->
									<div class="fw-semibold ms-5 text-gray-600">
										<!--begin::Time-->
										<div class="fs-5">
											10:00 - 11:00

											<span class="fs-7 text-uppercase text-gray-500">
												am </span>
										</div>
										<!--end::Time-->

										<!--begin::Title-->
										<a href="#" class="fs-5 fw-bold text-hover-primary mb-2 text-gray-800">
											Project Review &amp; Testing </a>
										<!--end::Title-->

										<!--begin::User-->
										<div class="text-gray-500">
											Lead by <a href="#">Sean Bean</a>
										</div>
										<!--end::User-->
									</div>
									<!--end::Info-->

									<!--begin::Action-->
									<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View</a>
									<!--end::Action-->
								</div>
								<!--end::Time-->
							</div>
							<!--end::Day-->
						</div>
						<!--end::Tab Content-->
					</div>
					<!--end::Card body-->
				</div>
			</div>
		</div>
	</div>
	<script>
		function barcode(barcode) {
			$.ajax({
				url: '/api/fixed-asset/barcode/' + barcode,
				method: 'GET',
				success: function(response) {
					$('#modal' + barcode + ' .modal-body').html(response);
				},
				error: function(xhr) {
					console.error(xhr.responseText);
				}
			});
		}
	</script>
@endsection
