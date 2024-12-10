<div class="grid">
	<div class="card card-grid min-w-full">
		<div class="card-header flex-wrap py-5">
			<h3 class="card-title">
				Group Check
			</h3>
			<label class="switch switch-sm">
				<input checked="" class="order-2" name="check" type="checkbox" value="1" />
				<span class="switch-label order-1">
					Push Alerts
				</span>
			</label>
		</div>
		<div class="card-body">
			<div id="kt_datatable">
				<div class="scrollable-x-auto">
					<table class="table-border table table-auto" data-datatable-table="true">
						<thead>
							<tr>
								<th class="w-14">
									<input class="checkbox checkbox-sm" data-datatable-check="true" type="checkbox" />
								</th>
								<th class="w-[100px] text-center" data-datatable-column="status">
									<span class="sort">
										<span class="sort-label">
											Status
										</span>
										<span class="sort-icon">
										</span>
									</span>
								</th>
								<th class="min-w-[250px]" data-datatable-column="ipAddress">
									<span class="sort">
										<span class="sort-label">
											IP Address
										</span>
										<span class="sort-icon">
										</span>
									</span>
								</th>
								<th class="min-w-[185px]" data-datatable-column="lastSession">
									<span class="sort">
										<span class="sort-label">
											Last Session
										</span>
										<span class="sort-icon">
										</span>
									</span>
								</th>
								<th class="w-[185px]" data-datatable-column="label">
									<span class="sort">
										<span class="sort-label">
											Label
										</span>
										<span class="sort-icon">
										</span>
									</span>
								</th>
								<th class="w-[185px]" data-datatable-column="method">
									<span class="sort">
										<span class="sort-label">
											<span class="pt-px" data-tooltip="true" data-tooltip-offset="0, 5" data-tooltip-placement="left">
												<i class="ki-outline ki-information-2 text-lg leading-none">
												</i>
												<span class="tooltip max-w-48">
													Merchant account providers
												</span>
											</span>
											Method
										</span>
										<span class="sort-icon">
										</span>
									</span>
								</th>
							</tr>
						</thead>
					</table>
				</div>
				<div
					class="card-footer text-2sm flex-col justify-center gap-3 font-medium text-gray-600 md:flex-row md:justify-between">
					<div class="flex items-center gap-2">
						Show
						<select class="select select-sm w-16" data-datatable-size="true" name="perpage">
						</select>
						per page
					</div>
					<div class="flex items-center gap-4">
						<span data-datatable-info="true">
						</span>
						<div class="pagination" data-datatable-pagination="true">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<script>
	const apiUrl = 'https://127.0.0.1:8000/api/json';
	const element = document.querySelector('#kt_datatable');

	const dataTableOptions = {
		apiEndpoint: apiUrl,
		pageSize: 5,
		columns: {
			select: {
				render: (item, data, context) => {
					const checkbox = document.createElement('input');
					checkbox.className = 'checkbox checkbox-sm';
					checkbox.type = 'checkbox';
					checkbox.value = data.id.toString();
					checkbox.setAttribute('data-datatable-row-check', 'true');
					return checkbox.outerHTML.trim();
				},
			},
			status: {
				title: 'Status',
				render: (item) => {
					return `<span class="badge badge-dot size-2 ${item}"></span>`;
				},
				createdCell(cell) {
					cell.classList.add('text-center');
				},
			},
			ipAddress: {
				title: 'IP Address',
			},
			lastSession: {
				title: 'Last Session',
			},
			label: {
				title: 'Label',
			},
			method: {
				title: 'Method',
			},
		},
	};

	const dataTable = new KTDataTable(element, dataTableOptions);
</script>
