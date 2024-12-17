<div id="kt_header" class="header header-fixed">
	<div class="container-fluid d-flex align-items-stretch justify-content-between">
		<div class="header-menu-wrapper header-menu-wrapper-left" id="kt_header_menu_wrapper">
			<div class="d-flex">
				{{-- Ini untuk contoh, untuk keseragaman silahkan ganti dengan type yang sama	 --}}
				<x-button-basic type="light">
					GANTI KODE CABANG
				</x-button-basic>
				<x-button-basic type="success">
					TO DO LIST
				</x-button-basic>
				<x-button-basic type="warning">
					TRANSAKSI HARI INI
				</x-button-basic>
				<x-button-basic type="danger">
					OTORISASI HARI INI
				</x-button-basic>
				<x-button-link url="/login">
					OPEN LINK
				</x-button-link>
				<x-button-link url="/login" target="_blank">
					LINK NEW TAB
				</x-button-link>

			</div>
		</div>
		<div class="topbar">
			<div class="dropdown">
				<div class="topbar-item" data-toggle="dropdown" data-offset="10px,0px">
					<div class="btn btn-icon btn-clean btn-dropdown btn-lg pulse pulse-white mr-1">
						<span class="la la-bell icon-xl text-white"></span>
						<span class="pulse-ring"></span>
					</div>
				</div>
				<div class="dropdown-menu dropdown-menu-right dropdown-menu-anim-up dropdown-menu-lg m-0 p-0">
					<div class="d-flex flex-column bgi-size-cover rounded-top bg-white pb-8 pt-12">
						<h4 class="d-flex flex-center rounded-top">
							<span class="text-dark">Pemberitahuan</span>
						</h4>
					</div>
					<div class="tab-content">
						<div class="tab-pane active show p-8" id="topbar_notifications_notifications" role="tabpanel">
							<div class="scroll mr-n7 pr-7" data-scroll="true" data-height="300" data-mobile-height="200">
								<div class="d-flex align-items-center mb-8">
									<div class="symbol symbol-40 symbol-dark mr-5">
										<span class="symbol-label">
											<span class="icon-md text-dark"></span>
										</span>
									</div>
									<div class="d-flex flex-column">
										<a href="#" class="text-dark text-hover-dark font-size-lg font-weight-bold mb-1"></a>
										<span class="text-muted font-size-sm"></span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="btn-group">
				<div class="topbar-item" data-toggle="dropdown">
					<div class="btn btn-icon btn-icon-mobile btn-clean d-flex align-items-center btn-lg w-auto px-2"
						id="kt_quick_user_toggle">
						<span class="font-weight-bold font-size-base d-none d-md-inline mr-1">Hi,
							{{ session()->get('userid') ?: 'Admin' }}</span>
						<span class="text-dark-50 font-weight-bolder font-size-base d-none d-md-inline mr-3"></span>
						<span class="symbol symbol-lg-35 symbol-25">
							<img
								src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/ac/No_image_available.svg/1024px-No_image_available.svg.png"
								style="width: 100px;object-fit:cover;" />
						</span>
					</div>
				</div>
				<div class="dropdown-menu">
					<a class="dropdown-item" href="#">
						<i class="la la-user text-dark mr-3"></i>
						Profile
					</a>
					<a class="dropdown-item" href="#">
						<i class="la la-sign-out text-dark mr-3"></i>
						Keluar
					</a>
				</div>
			</div>
		</div>
	</div>
</div>
