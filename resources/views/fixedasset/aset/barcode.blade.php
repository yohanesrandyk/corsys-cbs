@extends('layout')
@section('content')
	<div class="container">
		<div class="row gx-6 gx-xl-9">
			<div class="col-lg-6">
				<div class="card card-flush h-lg-100">
					<div class="card-header mt-6">
						<div class="card-title flex-column">
							<h3 class="fw-bold mb-1">Tasks Summary</h3>
							<div class="fs-6 fw-semibold text-gray-500">24 Overdue Tasks</div>
						</div>
						<div class="card-toolbar">
							<a href="#" class="btn btn-light btn-sm">View Tasks</a>
						</div>
					</div>
					<div class="card-body p-9 pt-5">
						<div class="d-flex flex-wrap">
							<div class="position-relative d-flex flex-center h-175px w-175px me-15 mb-7">
								<div class="position-absolute translate-middle start-50 top-50 d-flex flex-column flex-center">
									<span class="fs-2qx fw-bold">237</span>
									<span class="fs-6 fw-semibold text-gray-500">Total Tasks</span>
								</div>

								<canvas id="project_overview_chart" style="display: block; box-sizing: border-box; height: 175px; width: 175px;"
									width="175" height="175"></canvas>
							</div>
							<div class="d-flex flex-column justify-content-center flex-row-fluid mb-5 pe-11">
								<div class="d-flex fs-6 fw-semibold align-items-center mb-3">
									<div class="bullet bg-primary me-3"></div>
									<div class="text-gray-500">Active</div>
									<div class="fw-bold ms-auto text-gray-700">30</div>
								</div>
								<div class="d-flex fs-6 fw-semibold align-items-center mb-3">
									<div class="bullet bg-success me-3"></div>
									<div class="text-gray-500">Completed</div>
									<div class="fw-bold ms-auto text-gray-700">45</div>
								</div>
								<div class="d-flex fs-6 fw-semibold align-items-center mb-3">
									<div class="bullet bg-danger me-3"></div>
									<div class="text-gray-500">Overdue</div>
									<div class="fw-bold ms-auto text-gray-700">0</div>
								</div>
								<div class="d-flex fs-6 fw-semibold align-items-center">
									<div class="bullet me-3 bg-gray-300"></div>
									<div class="text-gray-500">Yet to start</div>
									<div class="fw-bold ms-auto text-gray-700">25</div>
								</div>
							</div>
						</div>
						<div class="notice d-flex bg-light-primary border-primary rounded border border-dashed p-6">
							<div class="d-flex flex-stack flex-grow-1">
								<div class="fw-semibold">
									<div class="fs-6 text-gray-700"><a href="#" class="fw-bold me-1">Invite New .NET Collaborators</a> to
										create great outstanding business to business .jsp modutr class scripts</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="card card-flush h-lg-100">
					<div class="card-header mt-6">
						<div class="card-title flex-column">
							<h3 class="fw-bold mb-1">Tasks Over Time</h3>
							<div class="fs-6 d-flex fs-6 fw-semibold text-gray-500">
								<div class="d-flex align-items-center me-6">
									<span class="menu-bullet d-flex align-items-center me-2">
										<span class="bullet bg-success"></span>
									</span>
									Complete
								</div>
								<div class="d-flex align-items-center">
									<span class="menu-bullet d-flex align-items-center me-2">
										<span class="bullet bg-primary"></span>
									</span>
									Incomplete
								</div>
							</div>
						</div>
						<div class="card-toolbar">
							<select name="status" data-control="select2" data-hide-search="true"
								class="form-select form-select-solid form-select-sm fw-bold w-100px select2-hidden-accessible"
								data-select2-id="select2-data-9-spxc" tabindex="-1" aria-hidden="true" data-kt-initialized="1">
								<option value="1">2020 Q1</option>
								<option value="2">2020 Q2</option>
								<option value="3" selected="" data-select2-id="select2-data-11-6j92">2020 Q3</option>
								<option value="4">2020 Q4</option>
							</select><span class="select2 select2-container select2-container--bootstrap5" dir="ltr"
								data-select2-id="select2-data-10-qo3m" style="width: 100%;"><span class="selection"><span
										class="select2-selection select2-selection--single form-select form-select-solid form-select-sm fw-bold w-100px"
										role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false"
										aria-labelledby="select2-status-1i-container" aria-controls="select2-status-1i-container"><span
											class="select2-selection__rendered" id="select2-status-1i-container" role="textbox" aria-readonly="true"
											title="2020 Q3">2020 Q3</span><span class="select2-selection__arrow" role="presentation"><b
												role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
						</div>
					</div>
					<div class="card-body px-5 pb-0 pt-10">
						<div id="kt_project_overview_graph" class="card-rounded-bottom" style="height: 300px; min-height: 315px;">
							<div id="apexchartshdup6loh" class="apexcharts-canvas apexchartshdup6loh apexcharts-theme-"
								style="width: 581px; height: 300px;"><svg id="SvgjsSvg1095" width="581" height="300"
									xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
									xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg apexcharts-zoomable" xmlns:data="ApexChartsNS"
									transform="translate(0, 0)">
									<foreignObject x="0" y="0" width="581" height="300">
										<div class="apexcharts-legend" xmlns="http://www.w3.org/1999/xhtml" style="max-height: 150px;"></div>
										<style type="text/css">
											.apexcharts-flip-y {
												transform: scaleY(-1) translateY(-100%);
												transform-origin: top;
												transform-box: fill-box;
											}

											.apexcharts-flip-x {
												transform: scaleX(-1);
												transform-origin: center;
												transform-box: fill-box;
											}

											.apexcharts-legend {
												display: flex;
												overflow: auto;
												padding: 0 10px;
											}

											.apexcharts-legend.apx-legend-position-bottom,
											.apexcharts-legend.apx-legend-position-top {
												flex-wrap: wrap
											}

											.apexcharts-legend.apx-legend-position-right,
											.apexcharts-legend.apx-legend-position-left {
												flex-direction: column;
												bottom: 0;
											}

											.apexcharts-legend.apx-legend-position-bottom.apexcharts-align-left,
											.apexcharts-legend.apx-legend-position-top.apexcharts-align-left,
											.apexcharts-legend.apx-legend-position-right,
											.apexcharts-legend.apx-legend-position-left {
												justify-content: flex-start;
											}

											.apexcharts-legend.apx-legend-position-bottom.apexcharts-align-center,
											.apexcharts-legend.apx-legend-position-top.apexcharts-align-center {
												justify-content: center;
											}

											.apexcharts-legend.apx-legend-position-bottom.apexcharts-align-right,
											.apexcharts-legend.apx-legend-position-top.apexcharts-align-right {
												justify-content: flex-end;
											}

											.apexcharts-legend-series {
												cursor: pointer;
												line-height: normal;
												display: flex;
												align-items: center;
											}

											.apexcharts-legend-text {
												position: relative;
												font-size: 14px;
											}

											.apexcharts-legend-text *,
											.apexcharts-legend-marker * {
												pointer-events: none;
											}

											.apexcharts-legend-marker {
												position: relative;
												display: flex;
												align-items: center;
												justify-content: center;
												cursor: pointer;
												margin-right: 1px;
											}

											.apexcharts-legend-series.apexcharts-no-click {
												cursor: auto;
											}

											.apexcharts-legend .apexcharts-hidden-zero-series,
											.apexcharts-legend .apexcharts-hidden-null-series {
												display: none !important;
											}

											.apexcharts-inactive-legend {
												opacity: 0.45;
											}
										</style>
									</foreignObject>
									<g id="SvgjsG1103" class="apexcharts-datalabels-group" transform="translate(0, 0) scale(1)"></g>
									<g id="SvgjsG1104" class="apexcharts-datalabels-group" transform="translate(0, 0) scale(1)"></g>
									<rect id="SvgjsRect1128" width="0" height="0" x="0" y="0" rx="0" ry="0"
										opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect>
									<g id="SvgjsG1155" class="apexcharts-yaxis" rel="0" transform="translate(12.423828125, 0)">
										<g id="SvgjsG1156" class="apexcharts-yaxis-texts-g"><text id="SvgjsText1158"
												font-family="Helvetica, Arial, sans-serif" x="20" y="34" text-anchor="end" dominant-baseline="auto"
												font-size="12px" font-weight="400" fill="#636674" class="apexcharts-text apexcharts-yaxis-label"
												style="font-family: Helvetica, Arial, sans-serif;">
												<tspan id="SvgjsTspan1159">80</tspan>
												<title>80</title>
											</text><text id="SvgjsText1161" font-family="Helvetica, Arial, sans-serif" x="20" y="80.146"
												text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#636674"
												class="apexcharts-text apexcharts-yaxis-label" style="font-family: Helvetica, Arial, sans-serif;">
												<tspan id="SvgjsTspan1162">75</tspan>
												<title>75</title>
											</text><text id="SvgjsText1164" font-family="Helvetica, Arial, sans-serif" x="20" y="126.292"
												text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#636674"
												class="apexcharts-text apexcharts-yaxis-label" style="font-family: Helvetica, Arial, sans-serif;">
												<tspan id="SvgjsTspan1165">70</tspan>
												<title>70</title>
											</text><text id="SvgjsText1167" font-family="Helvetica, Arial, sans-serif" x="20" y="172.438"
												text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#636674"
												class="apexcharts-text apexcharts-yaxis-label" style="font-family: Helvetica, Arial, sans-serif;">
												<tspan id="SvgjsTspan1168">65</tspan>
												<title>65</title>
											</text><text id="SvgjsText1170" font-family="Helvetica, Arial, sans-serif" x="20" y="218.584"
												text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#636674"
												class="apexcharts-text apexcharts-yaxis-label" style="font-family: Helvetica, Arial, sans-serif;">
												<tspan id="SvgjsTspan1171">60</tspan>
												<title>60</title>
											</text><text id="SvgjsText1173" font-family="Helvetica, Arial, sans-serif" x="20" y="264.73"
												text-anchor="end" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#636674"
												class="apexcharts-text apexcharts-yaxis-label" style="font-family: Helvetica, Arial, sans-serif;">
												<tspan id="SvgjsTspan1174">55</tspan>
												<title>55</title>
											</text></g>
									</g>
									<g id="SvgjsG1097" class="apexcharts-inner apexcharts-graphical" transform="translate(42.423828125, 30)">
										<defs id="SvgjsDefs1096">
											<clipPath id="gridRectMaskhdup6loh">
												<rect id="SvgjsRect1100" width="516.208984375" height="230.73000000000002" x="0" y="0" rx="0"
													ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff">
												</rect>
											</clipPath>
											<clipPath id="gridRectBarMaskhdup6loh">
												<rect id="SvgjsRect1101" width="523.208984375" height="237.73000000000002" x="-3.5" y="-3.5"
													rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"
													fill="#fff"></rect>
											</clipPath>
											<clipPath id="gridRectMarkerMaskhdup6loh">
												<rect id="SvgjsRect1102" width="516.208984375" height="230.73000000000002" x="0" y="0" rx="0"
													ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff">
												</rect>
											</clipPath>
											<clipPath id="forecastMaskhdup6loh"></clipPath>
											<clipPath id="nonForecastMaskhdup6loh"></clipPath>
										</defs>
										<g id="SvgjsG1116" class="apexcharts-grid">
											<g id="SvgjsG1117" class="apexcharts-gridlines-horizontal">
												<line id="SvgjsLine1121" x1="0" y1="46.146" x2="516.208984375" y2="46.146"
													stroke="#26272f" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line>
												<line id="SvgjsLine1122" x1="0" y1="92.292" x2="516.208984375" y2="92.292"
													stroke="#26272f" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line>
												<line id="SvgjsLine1123" x1="0" y1="138.438" x2="516.208984375" y2="138.438"
													stroke="#26272f" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line>
												<line id="SvgjsLine1124" x1="0" y1="184.584" x2="516.208984375" y2="184.584"
													stroke="#26272f" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line>
											</g>
											<g id="SvgjsG1118" class="apexcharts-gridlines-vertical"></g>
											<line id="SvgjsLine1127" x1="0" y1="230.73000000000002" x2="516.208984375"
												y2="230.73000000000002" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line>
											<line id="SvgjsLine1126" x1="0" y1="1" x2="0" y2="230.73000000000002"
												stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line>
										</g>
										<g id="SvgjsG1119" class="apexcharts-grid-borders">
											<line id="SvgjsLine1120" x1="0" y1="0" x2="516.208984375" y2="0"
												stroke="#26272f" stroke-dasharray="4" stroke-linecap="butt" class="apexcharts-gridline"></line>
											<line id="SvgjsLine1125" x1="0" y1="230.73000000000002" x2="516.208984375"
												y2="230.73000000000002" stroke="#26272f" stroke-dasharray="4" stroke-linecap="butt"
												class="apexcharts-gridline"></line>
										</g>
										<g id="SvgjsG1105" class="apexcharts-area-series apexcharts-plot-series">
											<g id="SvgjsG1106" class="apexcharts-series" zIndex="0" seriesName="Incomplete"
												data:longestSeries="true" rel="1" data:realIndex="0">
												<path id="SvgjsPath1109"
													d="M 0 92.29200000000003C 30.112190755208328 92.29200000000003 55.922639973958326 92.29200000000003 86.03483072916666 92.29200000000003C 116.14702148437499 92.29200000000003 141.95747070312498 0 172.06966145833331 0C 202.18185221354165 0 227.99230143229167 0 258.1044921875 0C 288.2166829427083 0 314.0271321614583 46.14599999999996 344.13932291666663 46.14599999999996C 374.251513671875 46.14599999999996 400.06196289062495 46.14599999999996 430.1741536458333 46.14599999999996C 460.2863444010417 46.14599999999996 486.09679361979164 46.14599999999996 516.208984375 46.14599999999996C 516.208984375 46.14599999999996 516.208984375 46.14599999999996 516.208984375 230.73000000000002 L 0 230.73000000000002z"
													fill="rgba(31,33,42,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0"
													stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMaskhdup6loh)"
													pathTo="M 0 92.29200000000003C 30.112190755208328 92.29200000000003 55.922639973958326 92.29200000000003 86.03483072916666 92.29200000000003C 116.14702148437499 92.29200000000003 141.95747070312498 0 172.06966145833331 0C 202.18185221354165 0 227.99230143229167 0 258.1044921875 0C 288.2166829427083 0 314.0271321614583 46.14599999999996 344.13932291666663 46.14599999999996C 374.251513671875 46.14599999999996 400.06196289062495 46.14599999999996 430.1741536458333 46.14599999999996C 460.2863444010417 46.14599999999996 486.09679361979164 46.14599999999996 516.208984375 46.14599999999996C 516.208984375 46.14599999999996 516.208984375 46.14599999999996 516.208984375 230.73000000000002 L 0 230.73000000000002z"
													pathFrom="M 0 738.336 L 0 738.336 L 86.03483072916666 738.336 L 172.06966145833331 738.336 L 258.1044921875 738.336 L 344.13932291666663 738.336 L 430.1741536458333 738.336 L 516.208984375 738.336z">
												</path>
												<path id="SvgjsPath1110"
													d="M 0 92.29200000000003C 30.112190755208328 92.29200000000003 55.922639973958326 92.29200000000003 86.03483072916666 92.29200000000003C 116.14702148437499 92.29200000000003 141.95747070312498 0 172.06966145833331 0C 202.18185221354165 0 227.99230143229167 0 258.1044921875 0C 288.2166829427083 0 314.0271321614583 46.14599999999996 344.13932291666663 46.14599999999996C 374.251513671875 46.14599999999996 400.06196289062495 46.14599999999996 430.1741536458333 46.14599999999996C 460.2863444010417 46.14599999999996 486.09679361979164 46.14599999999996 516.208984375 46.14599999999996"
													fill="none" fill-opacity="1" stroke="#00a261" stroke-opacity="1" stroke-linecap="butt"
													stroke-width="3" stroke-dasharray="0" class="apexcharts-area" index="0"
													clip-path="url(#gridRectMaskhdup6loh)"
													pathTo="M 0 92.29200000000003C 30.112190755208328 92.29200000000003 55.922639973958326 92.29200000000003 86.03483072916666 92.29200000000003C 116.14702148437499 92.29200000000003 141.95747070312498 0 172.06966145833331 0C 202.18185221354165 0 227.99230143229167 0 258.1044921875 0C 288.2166829427083 0 314.0271321614583 46.14599999999996 344.13932291666663 46.14599999999996C 374.251513671875 46.14599999999996 400.06196289062495 46.14599999999996 430.1741536458333 46.14599999999996C 460.2863444010417 46.14599999999996 486.09679361979164 46.14599999999996 516.208984375 46.14599999999996"
													pathFrom="M 0 738.336 L 0 738.336 L 86.03483072916666 738.336 L 172.06966145833331 738.336 L 258.1044921875 738.336 L 344.13932291666663 738.336 L 430.1741536458333 738.336 L 516.208984375 738.336"
													fill-rule="evenodd"></path>
												<g id="SvgjsG1107" class="apexcharts-series-markers-wrap apexcharts-hidden-element-shown"
													data:realIndex="0">
													<g class="apexcharts-series-markers">
														<path id="SvgjsPath1178" d="M 0, 0
														m -0, 0
														a 0,0 0 1,0 0,0
														a 0,0 0 1,0 -0,0" fill="#1f212a" fill-opacity="1" stroke="#00a261" stroke-opacity="0.9"
															stroke-linecap="butt" stroke-width="3" stroke-dasharray="0" cx="0" cy="0"
															shape="circle" class="apexcharts-marker wk4apsruo no-pointer-events" default-marker-size="0"></path>
													</g>
												</g>
											</g>
											<g id="SvgjsG1111" class="apexcharts-series" zIndex="1" seriesName="Complete"
												data:longestSeries="true" rel="2" data:realIndex="1">
												<path id="SvgjsPath1114"
													d="M 0 230.73000000000002C 30.112190755208328 230.73000000000002 55.922639973958326 230.73000000000002 86.03483072916666 230.73000000000002C 116.14702148437499 230.73000000000002 141.95747070312498 184.58399999999995 172.06966145833331 184.58399999999995C 202.18185221354165 184.58399999999995 227.99230143229167 184.58399999999995 258.1044921875 184.58399999999995C 288.2166829427083 184.58399999999995 314.0271321614583 230.73000000000002 344.13932291666663 230.73000000000002C 374.251513671875 230.73000000000002 400.06196289062495 230.73000000000002 430.1741536458333 230.73000000000002C 460.2863444010417 230.73000000000002 486.09679361979164 184.58399999999995 516.208984375 184.58399999999995C 516.208984375 184.58399999999995 516.208984375 184.58399999999995 516.208984375 230.73000000000002 L 0 230.73000000000002z"
													fill="rgba(23,35,49,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0"
													stroke-dasharray="0" class="apexcharts-area" index="1" clip-path="url(#gridRectMaskhdup6loh)"
													pathTo="M 0 230.73000000000002C 30.112190755208328 230.73000000000002 55.922639973958326 230.73000000000002 86.03483072916666 230.73000000000002C 116.14702148437499 230.73000000000002 141.95747070312498 184.58399999999995 172.06966145833331 184.58399999999995C 202.18185221354165 184.58399999999995 227.99230143229167 184.58399999999995 258.1044921875 184.58399999999995C 288.2166829427083 184.58399999999995 314.0271321614583 230.73000000000002 344.13932291666663 230.73000000000002C 374.251513671875 230.73000000000002 400.06196289062495 230.73000000000002 430.1741536458333 230.73000000000002C 460.2863444010417 230.73000000000002 486.09679361979164 184.58399999999995 516.208984375 184.58399999999995C 516.208984375 184.58399999999995 516.208984375 184.58399999999995 516.208984375 230.73000000000002 L 0 230.73000000000002z"
													pathFrom="M 0 738.336 L 0 738.336 L 86.03483072916666 738.336 L 172.06966145833331 738.336 L 258.1044921875 738.336 L 344.13932291666663 738.336 L 430.1741536458333 738.336 L 516.208984375 738.336z">
												</path>
												<path id="SvgjsPath1115"
													d="M 0 230.73000000000002C 30.112190755208328 230.73000000000002 55.922639973958326 230.73000000000002 86.03483072916666 230.73000000000002C 116.14702148437499 230.73000000000002 141.95747070312498 184.58399999999995 172.06966145833331 184.58399999999995C 202.18185221354165 184.58399999999995 227.99230143229167 184.58399999999995 258.1044921875 184.58399999999995C 288.2166829427083 184.58399999999995 314.0271321614583 230.73000000000002 344.13932291666663 230.73000000000002C 374.251513671875 230.73000000000002 400.06196289062495 230.73000000000002 430.1741536458333 230.73000000000002C 460.2863444010417 230.73000000000002 486.09679361979164 184.58399999999995 516.208984375 184.58399999999995"
													fill="none" fill-opacity="1" stroke="#006ae6" stroke-opacity="1" stroke-linecap="butt"
													stroke-width="3" stroke-dasharray="0" class="apexcharts-area" index="1"
													clip-path="url(#gridRectMaskhdup6loh)"
													pathTo="M 0 230.73000000000002C 30.112190755208328 230.73000000000002 55.922639973958326 230.73000000000002 86.03483072916666 230.73000000000002C 116.14702148437499 230.73000000000002 141.95747070312498 184.58399999999995 172.06966145833331 184.58399999999995C 202.18185221354165 184.58399999999995 227.99230143229167 184.58399999999995 258.1044921875 184.58399999999995C 288.2166829427083 184.58399999999995 314.0271321614583 230.73000000000002 344.13932291666663 230.73000000000002C 374.251513671875 230.73000000000002 400.06196289062495 230.73000000000002 430.1741536458333 230.73000000000002C 460.2863444010417 230.73000000000002 486.09679361979164 184.58399999999995 516.208984375 184.58399999999995"
													pathFrom="M 0 738.336 L 0 738.336 L 86.03483072916666 738.336 L 172.06966145833331 738.336 L 258.1044921875 738.336 L 344.13932291666663 738.336 L 430.1741536458333 738.336 L 516.208984375 738.336"
													fill-rule="evenodd"></path>
												<g id="SvgjsG1112" class="apexcharts-series-markers-wrap apexcharts-hidden-element-shown"
													data:realIndex="1">
													<g class="apexcharts-series-markers">
														<path id="SvgjsPath1179" d="M 0, 0
														m -0, 0
														a 0,0 0 1,0 0,0
														a 0,0 0 1,0 -0,0" fill="#172331" fill-opacity="1" stroke="#006ae6" stroke-opacity="0.9"
															stroke-linecap="butt" stroke-width="3" stroke-dasharray="0" cx="0" cy="0"
															shape="circle" class="apexcharts-marker whan8catu no-pointer-events" default-marker-size="0"></path>
													</g>
												</g>
											</g>
											<g id="SvgjsG1108" class="apexcharts-datalabels" data:realIndex="0"></g>
											<g id="SvgjsG1113" class="apexcharts-datalabels" data:realIndex="1"></g>
										</g>
										<line id="SvgjsLine1129" x1="0" y1="0" x2="0" y2="230.73000000000002"
											stroke="#00a261" stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-xcrosshairs" x="0" y="0"
											width="1" height="230.73000000000002" fill="#b1b9c4" filter="none" fill-opacity="0.9"
											stroke-width="1"></line>
										<line id="SvgjsLine1130" x1="0" y1="0" x2="516.208984375" y2="0" stroke="#b6b6b6"
											stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line>
										<line id="SvgjsLine1131" x1="0" y1="0" x2="516.208984375" y2="0"
											stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line>
										<g id="SvgjsG1132" class="apexcharts-xaxis" transform="translate(0, 0)">
											<g id="SvgjsG1133" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"><text id="SvgjsText1135"
													font-family="Helvetica, Arial, sans-serif" x="0" y="258.73" text-anchor="middle" dominant-baseline="auto"
													font-size="12px" font-weight="400" fill="#636674" class="apexcharts-text apexcharts-xaxis-label"
													style="font-family: Helvetica, Arial, sans-serif;">
													<tspan id="SvgjsTspan1136">Feb</tspan>
													<title>Feb</title>
												</text><text id="SvgjsText1138" font-family="Helvetica, Arial, sans-serif" x="86.03483072916666" y="258.73"
													text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#636674"
													class="apexcharts-text apexcharts-xaxis-label" style="font-family: Helvetica, Arial, sans-serif;">
													<tspan id="SvgjsTspan1139">Mar</tspan>
													<title>Mar</title>
												</text><text id="SvgjsText1141" font-family="Helvetica, Arial, sans-serif" x="172.06966145833334"
													y="258.73" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400"
													fill="#636674" class="apexcharts-text apexcharts-xaxis-label"
													style="font-family: Helvetica, Arial, sans-serif;">
													<tspan id="SvgjsTspan1142">Apr</tspan>
													<title>Apr</title>
												</text><text id="SvgjsText1144" font-family="Helvetica, Arial, sans-serif" x="258.10449218750006"
													y="258.73" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400"
													fill="#636674" class="apexcharts-text apexcharts-xaxis-label"
													style="font-family: Helvetica, Arial, sans-serif;">
													<tspan id="SvgjsTspan1145">May</tspan>
													<title>May</title>
												</text><text id="SvgjsText1147" font-family="Helvetica, Arial, sans-serif" x="344.13932291666674"
													y="258.73" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400"
													fill="#636674" class="apexcharts-text apexcharts-xaxis-label"
													style="font-family: Helvetica, Arial, sans-serif;">
													<tspan id="SvgjsTspan1148">Jun</tspan>
													<title>Jun</title>
												</text><text id="SvgjsText1150" font-family="Helvetica, Arial, sans-serif" x="430.1741536458334" y="258.73"
													text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#636674"
													class="apexcharts-text apexcharts-xaxis-label" style="font-family: Helvetica, Arial, sans-serif;">
													<tspan id="SvgjsTspan1151">Jul</tspan>
													<title>Jul</title>
												</text><text id="SvgjsText1153" font-family="Helvetica, Arial, sans-serif" x="516.208984375" y="258.73"
													text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#636674"
													class="apexcharts-text apexcharts-xaxis-label" style="font-family: Helvetica, Arial, sans-serif;">
													<tspan id="SvgjsTspan1154">Aug</tspan>
													<title>Aug</title>
												</text></g>
										</g>
										<g id="SvgjsG1175" class="apexcharts-yaxis-annotations"></g>
										<g id="SvgjsG1176" class="apexcharts-xaxis-annotations"></g>
										<g id="SvgjsG1177" class="apexcharts-point-annotations"></g>
										<rect id="SvgjsRect1180" width="0" height="0" x="0" y="0" rx="0" ry="0"
											opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"
											class="apexcharts-zoom-rect"></rect>
										<rect id="SvgjsRect1181" width="0" height="0" x="0" y="0" rx="0" ry="0"
											opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"
											class="apexcharts-selection-rect"></rect>
									</g>
								</svg>
								<div class="apexcharts-tooltip apexcharts-theme-light">
									<div class="apexcharts-tooltip-title" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
									</div>
									<div class="apexcharts-tooltip-series-group apexcharts-tooltip-series-group-0" style="order: 1;"><span
											class="apexcharts-tooltip-marker" style="background-color: rgb(31, 33, 42);"></span>
										<div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
											<div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span
													class="apexcharts-tooltip-text-y-value"></span></div>
											<div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span
													class="apexcharts-tooltip-text-goals-value"></span></div>
											<div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span
													class="apexcharts-tooltip-text-z-value"></span></div>
										</div>
									</div>
									<div class="apexcharts-tooltip-series-group apexcharts-tooltip-series-group-1" style="order: 2;"><span
											class="apexcharts-tooltip-marker" style="background-color: rgb(23, 35, 49);"></span>
										<div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
											<div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span
													class="apexcharts-tooltip-text-y-value"></span></div>
											<div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span
													class="apexcharts-tooltip-text-goals-value"></span></div>
											<div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span
													class="apexcharts-tooltip-text-z-value"></span></div>
										</div>
									</div>
								</div>
								<div class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light">
									<div class="apexcharts-xaxistooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
									</div>
								</div>
								<div
									class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light">
									<div class="apexcharts-yaxistooltip-text"></div>
								</div>
							</div>
						</div>
						<!--end::Chart-->
					</div>
					<!--end::Card body-->
				</div>
				<!--end::Graph-->
			</div>
			<!--end::Col-->

			<!--begin::Col-->
			<div class="col-lg-6">
				<!--begin::Card-->
				<div class="card card-flush h-lg-100">
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
												role="presentation"></b></span></span></span><span class="dropdown-wrapper"
									aria-hidden="true"></span></span>
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
				<!--end::Card-->
			</div>
			<!--end::Col-->

			<!--begin::Col-->
			<div class="col-lg-6">

				<!--begin::Card-->
				<div class="card card-flush h-lg-100">
					<!--begin::Card header-->
					<div class="card-header mt-6">
						<!--begin::Card title-->
						<div class="card-title flex-column">
							<h3 class="fw-bold mb-1">Latest Files</h3>

							<div class="fs-6 text-gray-500">Total 382 fiels, 2,6GB space usage</div>
						</div>
						<!--end::Card title-->

						<!--begin::Card toolbar-->
						<div class="card-toolbar">
							<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View All</a>
						</div>
						<!--end::Card toolbar-->
					</div>
					<!--end::Card header-->

					<!--begin::Card body-->
					<div class="card-body p-9 pt-3">
						<!--begin::Files-->
						<div class="d-flex flex-column mb-9">
							<!--begin::File-->
							<div class="d-flex align-items-center mb-5">
								<!--begin::Icon-->
								<div class="symbol symbol-30px me-5">
									<img alt="Icon" src="/metronic8/demo7/assets/media/svg/files/pdf.svg">
								</div>
								<!--end::Icon-->

								<!--begin::Details-->
								<div class="fw-semibold">
									<a class="fs-6 fw-bold text-hover-primary text-gray-900" href="#">Project tech requirements</a>

									<div class="text-gray-500">
										2 days ago <a href="#">Karina Clark</a>
									</div>
								</div>
								<!--end::Details-->

								<!--begin::Menu-->
								<button type="button"
									class="btn btn-clean btn-sm btn-icon btn-icon-primary btn-active-light-primary ms-auto"
									data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">

									<i class="ki-duotone ki-element-plus fs-3"><span class="path1"></span><span class="path2"></span><span
											class="path3"></span><span class="path4"></span><span class="path5"></span></i> </button>

								<!--begin::Menu 1-->
								<div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true"
									id="kt_menu_6761526c2b23d">
									<!--begin::Header-->
									<div class="px-7 py-5">
										<div class="fs-5 fw-bold text-gray-900">Filter Options</div>
									</div>
									<!--end::Header-->

									<!--begin::Menu separator-->
									<div class="separator border-gray-200"></div>
									<!--end::Menu separator-->

									<!--begin::Form-->
									<div class="px-7 py-5">
										<!--begin::Input group-->
										<div class="mb-10">
											<!--begin::Label-->
											<label class="form-label fw-semibold">Status:</label>
											<!--end::Label-->

											<!--begin::Input-->
											<div>
												<select class="form-select form-select-solid select2-hidden-accessible" multiple=""
													data-kt-select2="true" data-close-on-select="false" data-placeholder="Select option"
													data-dropdown-parent="#kt_menu_6761526c2b23d" data-allow-clear="true"
													data-select2-id="select2-data-15-195z" tabindex="-1" aria-hidden="true" data-kt-initialized="1">
													<option></option>
													<option value="1">Approved</option>
													<option value="2">Pending</option>
													<option value="2">In Process</option>
													<option value="2">Rejected</option>
												</select><span class="select2 select2-container select2-container--bootstrap5" dir="ltr"
													data-select2-id="select2-data-16-v0y1" style="width: 100%;"><span class="selection"><span
															class="select2-selection select2-selection--multiple form-select form-select-solid" role="combobox"
															aria-haspopup="true" aria-expanded="false" tabindex="-1" aria-disabled="false">
															<ul class="select2-selection__rendered" id="select2-x73m-container"></ul><span
																class="select2-search select2-search--inline">
																<textarea class="select2-search__field" type="search" tabindex="0" autocorrect="off" autocapitalize="none"
																 spellcheck="false" role="searchbox" aria-autocomplete="list" autocomplete="off" aria-label="Search"
																 aria-describedby="select2-x73m-container" placeholder="Select option" style="width: 100%;"></textarea>
															</span>
														</span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
											</div>
											<!--end::Input-->
										</div>
										<!--end::Input group-->

										<!--begin::Input group-->
										<div class="mb-10">
											<!--begin::Label-->
											<label class="form-label fw-semibold">Member Type:</label>
											<!--end::Label-->

											<!--begin::Options-->
											<div class="d-flex">
												<!--begin::Options-->
												<label class="form-check form-check-sm form-check-custom form-check-solid me-5">
													<input class="form-check-input" type="checkbox" value="1">
													<span class="form-check-label">
														Author
													</span>
												</label>
												<!--end::Options-->

												<!--begin::Options-->
												<label class="form-check form-check-sm form-check-custom form-check-solid">
													<input class="form-check-input" type="checkbox" value="2" checked="checked">
													<span class="form-check-label">
														Customer
													</span>
												</label>
												<!--end::Options-->
											</div>
											<!--end::Options-->
										</div>
										<!--end::Input group-->

										<!--begin::Input group-->
										<div class="mb-10">
											<!--begin::Label-->
											<label class="form-label fw-semibold">Notifications:</label>
											<!--end::Label-->

											<!--begin::Switch-->
											<div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
												<input class="form-check-input" type="checkbox" value="" name="notifications" checked="">
												<label class="form-check-label">
													Enabled
												</label>
											</div>
											<!--end::Switch-->
										</div>
										<!--end::Input group-->

										<!--begin::Actions-->
										<div class="d-flex justify-content-end">
											<button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2"
												data-kt-menu-dismiss="true">Reset</button>

											<button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Apply</button>
										</div>
										<!--end::Actions-->
									</div>
									<!--end::Form-->
								</div>
								<!--end::Menu 1--> <!--end::Menu-->
							</div>
							<!--end::File-->
							<!--begin::File-->
							<div class="d-flex align-items-center mb-5">
								<!--begin::Icon-->
								<div class="symbol symbol-30px me-5">
									<img alt="Icon" src="/metronic8/demo7/assets/media/svg/files/doc.svg">
								</div>
								<!--end::Icon-->

								<!--begin::Details-->
								<div class="fw-semibold">
									<a class="fs-6 fw-bold text-hover-primary text-gray-900" href="#">Create FureStibe branding
										proposal</a>

									<div class="text-gray-500">
										Due in 1 day <a href="#">Marcus Blake</a>
									</div>
								</div>
								<!--end::Details-->

								<!--begin::Menu-->
								<button type="button"
									class="btn btn-clean btn-sm btn-icon btn-icon-primary btn-active-light-primary ms-auto"
									data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">

									<i class="ki-duotone ki-element-plus fs-3"><span class="path1"></span><span class="path2"></span><span
											class="path3"></span><span class="path4"></span><span class="path5"></span></i> </button>

								<!--begin::Menu 1-->
								<div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true"
									id="kt_menu_6761526c2b248">
									<!--begin::Header-->
									<div class="px-7 py-5">
										<div class="fs-5 fw-bold text-gray-900">Filter Options</div>
									</div>
									<!--end::Header-->

									<!--begin::Menu separator-->
									<div class="separator border-gray-200"></div>
									<!--end::Menu separator-->

									<!--begin::Form-->
									<div class="px-7 py-5">
										<!--begin::Input group-->
										<div class="mb-10">
											<!--begin::Label-->
											<label class="form-label fw-semibold">Status:</label>
											<!--end::Label-->

											<!--begin::Input-->
											<div>
												<select class="form-select form-select-solid select2-hidden-accessible" multiple=""
													data-kt-select2="true" data-close-on-select="false" data-placeholder="Select option"
													data-dropdown-parent="#kt_menu_6761526c2b248" data-allow-clear="true"
													data-select2-id="select2-data-17-ao1r" tabindex="-1" aria-hidden="true" data-kt-initialized="1">
													<option></option>
													<option value="1">Approved</option>
													<option value="2">Pending</option>
													<option value="2">In Process</option>
													<option value="2">Rejected</option>
												</select><span class="select2 select2-container select2-container--bootstrap5" dir="ltr"
													data-select2-id="select2-data-18-en0t" style="width: 100%;"><span class="selection"><span
															class="select2-selection select2-selection--multiple form-select form-select-solid" role="combobox"
															aria-haspopup="true" aria-expanded="false" tabindex="-1" aria-disabled="false">
															<ul class="select2-selection__rendered" id="select2-kors-container"></ul><span
																class="select2-search select2-search--inline">
																<textarea class="select2-search__field" type="search" tabindex="0" autocorrect="off" autocapitalize="none"
																 spellcheck="false" role="searchbox" aria-autocomplete="list" autocomplete="off" aria-label="Search"
																 aria-describedby="select2-kors-container" placeholder="Select option" style="width: 100%;"></textarea>
															</span>
														</span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
											</div>
											<!--end::Input-->
										</div>
										<!--end::Input group-->

										<!--begin::Input group-->
										<div class="mb-10">
											<!--begin::Label-->
											<label class="form-label fw-semibold">Member Type:</label>
											<!--end::Label-->

											<!--begin::Options-->
											<div class="d-flex">
												<!--begin::Options-->
												<label class="form-check form-check-sm form-check-custom form-check-solid me-5">
													<input class="form-check-input" type="checkbox" value="1">
													<span class="form-check-label">
														Author
													</span>
												</label>
												<!--end::Options-->

												<!--begin::Options-->
												<label class="form-check form-check-sm form-check-custom form-check-solid">
													<input class="form-check-input" type="checkbox" value="2" checked="checked">
													<span class="form-check-label">
														Customer
													</span>
												</label>
												<!--end::Options-->
											</div>
											<!--end::Options-->
										</div>
										<!--end::Input group-->

										<!--begin::Input group-->
										<div class="mb-10">
											<!--begin::Label-->
											<label class="form-label fw-semibold">Notifications:</label>
											<!--end::Label-->

											<!--begin::Switch-->
											<div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
												<input class="form-check-input" type="checkbox" value="" name="notifications" checked="">
												<label class="form-check-label">
													Enabled
												</label>
											</div>
											<!--end::Switch-->
										</div>
										<!--end::Input group-->

										<!--begin::Actions-->
										<div class="d-flex justify-content-end">
											<button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2"
												data-kt-menu-dismiss="true">Reset</button>

											<button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Apply</button>
										</div>
										<!--end::Actions-->
									</div>
									<!--end::Form-->
								</div>
								<!--end::Menu 1--> <!--end::Menu-->
							</div>
							<!--end::File-->
							<!--begin::File-->
							<div class="d-flex align-items-center mb-5">
								<!--begin::Icon-->
								<div class="symbol symbol-30px me-5">
									<img alt="Icon" src="/metronic8/demo7/assets/media/svg/files/css.svg">
								</div>
								<!--end::Icon-->

								<!--begin::Details-->
								<div class="fw-semibold">
									<a class="fs-6 fw-bold text-hover-primary text-gray-900" href="#">Completed Project Stylings</a>

									<div class="text-gray-500">
										Due in 1 day <a href="#">Terry Barry</a>
									</div>
								</div>
								<!--end::Details-->

								<!--begin::Menu-->
								<button type="button"
									class="btn btn-clean btn-sm btn-icon btn-icon-primary btn-active-light-primary ms-auto"
									data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">

									<i class="ki-duotone ki-element-plus fs-3"><span class="path1"></span><span class="path2"></span><span
											class="path3"></span><span class="path4"></span><span class="path5"></span></i> </button>

								<!--begin::Menu 1-->
								<div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true"
									id="kt_menu_6761526c2b252">
									<!--begin::Header-->
									<div class="px-7 py-5">
										<div class="fs-5 fw-bold text-gray-900">Filter Options</div>
									</div>
									<!--end::Header-->

									<!--begin::Menu separator-->
									<div class="separator border-gray-200"></div>
									<!--end::Menu separator-->

									<!--begin::Form-->
									<div class="px-7 py-5">
										<!--begin::Input group-->
										<div class="mb-10">
											<!--begin::Label-->
											<label class="form-label fw-semibold">Status:</label>
											<!--end::Label-->

											<!--begin::Input-->
											<div>
												<select class="form-select form-select-solid select2-hidden-accessible" multiple=""
													data-kt-select2="true" data-close-on-select="false" data-placeholder="Select option"
													data-dropdown-parent="#kt_menu_6761526c2b252" data-allow-clear="true"
													data-select2-id="select2-data-19-zqsl" tabindex="-1" aria-hidden="true" data-kt-initialized="1">
													<option></option>
													<option value="1">Approved</option>
													<option value="2">Pending</option>
													<option value="2">In Process</option>
													<option value="2">Rejected</option>
												</select><span class="select2 select2-container select2-container--bootstrap5" dir="ltr"
													data-select2-id="select2-data-20-fi9p" style="width: 100%;"><span class="selection"><span
															class="select2-selection select2-selection--multiple form-select form-select-solid" role="combobox"
															aria-haspopup="true" aria-expanded="false" tabindex="-1" aria-disabled="false">
															<ul class="select2-selection__rendered" id="select2-o662-container"></ul><span
																class="select2-search select2-search--inline">
																<textarea class="select2-search__field" type="search" tabindex="0" autocorrect="off" autocapitalize="none"
																 spellcheck="false" role="searchbox" aria-autocomplete="list" autocomplete="off" aria-label="Search"
																 aria-describedby="select2-o662-container" placeholder="Select option" style="width: 100%;"></textarea>
															</span>
														</span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
											</div>
											<!--end::Input-->
										</div>
										<!--end::Input group-->

										<!--begin::Input group-->
										<div class="mb-10">
											<!--begin::Label-->
											<label class="form-label fw-semibold">Member Type:</label>
											<!--end::Label-->

											<!--begin::Options-->
											<div class="d-flex">
												<!--begin::Options-->
												<label class="form-check form-check-sm form-check-custom form-check-solid me-5">
													<input class="form-check-input" type="checkbox" value="1">
													<span class="form-check-label">
														Author
													</span>
												</label>
												<!--end::Options-->

												<!--begin::Options-->
												<label class="form-check form-check-sm form-check-custom form-check-solid">
													<input class="form-check-input" type="checkbox" value="2" checked="checked">
													<span class="form-check-label">
														Customer
													</span>
												</label>
												<!--end::Options-->
											</div>
											<!--end::Options-->
										</div>
										<!--end::Input group-->

										<!--begin::Input group-->
										<div class="mb-10">
											<!--begin::Label-->
											<label class="form-label fw-semibold">Notifications:</label>
											<!--end::Label-->

											<!--begin::Switch-->
											<div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
												<input class="form-check-input" type="checkbox" value="" name="notifications" checked="">
												<label class="form-check-label">
													Enabled
												</label>
											</div>
											<!--end::Switch-->
										</div>
										<!--end::Input group-->

										<!--begin::Actions-->
										<div class="d-flex justify-content-end">
											<button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2"
												data-kt-menu-dismiss="true">Reset</button>

											<button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Apply</button>
										</div>
										<!--end::Actions-->
									</div>
									<!--end::Form-->
								</div>
								<!--end::Menu 1--> <!--end::Menu-->
							</div>
							<!--end::File-->
							<!--begin::File-->
							<div class="d-flex align-items-center">
								<!--begin::Icon-->
								<div class="symbol symbol-30px me-5">
									<img alt="Icon" src="/metronic8/demo7/assets/media/svg/files/ai.svg">
								</div>
								<!--end::Icon-->

								<!--begin::Details-->
								<div class="fw-semibold">
									<a class="fs-6 fw-bold text-hover-primary text-gray-900" href="#">Create Project Wireframes</a>

									<div class="text-gray-500">
										Due in 3 days <a href="#">Roth Bloom</a>
									</div>
								</div>
								<!--end::Details-->

								<!--begin::Menu-->
								<button type="button"
									class="btn btn-clean btn-sm btn-icon btn-icon-primary btn-active-light-primary ms-auto"
									data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">

									<i class="ki-duotone ki-element-plus fs-3"><span class="path1"></span><span class="path2"></span><span
											class="path3"></span><span class="path4"></span><span class="path5"></span></i> </button>

								<!--begin::Menu 1-->
								<div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true"
									id="kt_menu_6761526c2b25d">
									<!--begin::Header-->
									<div class="px-7 py-5">
										<div class="fs-5 fw-bold text-gray-900">Filter Options</div>
									</div>
									<!--end::Header-->

									<!--begin::Menu separator-->
									<div class="separator border-gray-200"></div>
									<!--end::Menu separator-->

									<!--begin::Form-->
									<div class="px-7 py-5">
										<!--begin::Input group-->
										<div class="mb-10">
											<!--begin::Label-->
											<label class="form-label fw-semibold">Status:</label>
											<!--end::Label-->

											<!--begin::Input-->
											<div>
												<select class="form-select form-select-solid select2-hidden-accessible" multiple=""
													data-kt-select2="true" data-close-on-select="false" data-placeholder="Select option"
													data-dropdown-parent="#kt_menu_6761526c2b25d" data-allow-clear="true"
													data-select2-id="select2-data-21-zpe7" tabindex="-1" aria-hidden="true" data-kt-initialized="1">
													<option></option>
													<option value="1">Approved</option>
													<option value="2">Pending</option>
													<option value="2">In Process</option>
													<option value="2">Rejected</option>
												</select><span class="select2 select2-container select2-container--bootstrap5" dir="ltr"
													data-select2-id="select2-data-22-h6j6" style="width: 100%;"><span class="selection"><span
															class="select2-selection select2-selection--multiple form-select form-select-solid" role="combobox"
															aria-haspopup="true" aria-expanded="false" tabindex="-1" aria-disabled="false">
															<ul class="select2-selection__rendered" id="select2-jxu1-container"></ul><span
																class="select2-search select2-search--inline">
																<textarea class="select2-search__field" type="search" tabindex="0" autocorrect="off" autocapitalize="none"
																 spellcheck="false" role="searchbox" aria-autocomplete="list" autocomplete="off" aria-label="Search"
																 aria-describedby="select2-jxu1-container" placeholder="Select option" style="width: 100%;"></textarea>
															</span>
														</span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
											</div>
											<!--end::Input-->
										</div>
										<!--end::Input group-->

										<!--begin::Input group-->
										<div class="mb-10">
											<!--begin::Label-->
											<label class="form-label fw-semibold">Member Type:</label>
											<!--end::Label-->

											<!--begin::Options-->
											<div class="d-flex">
												<!--begin::Options-->
												<label class="form-check form-check-sm form-check-custom form-check-solid me-5">
													<input class="form-check-input" type="checkbox" value="1">
													<span class="form-check-label">
														Author
													</span>
												</label>
												<!--end::Options-->

												<!--begin::Options-->
												<label class="form-check form-check-sm form-check-custom form-check-solid">
													<input class="form-check-input" type="checkbox" value="2" checked="checked">
													<span class="form-check-label">
														Customer
													</span>
												</label>
												<!--end::Options-->
											</div>
											<!--end::Options-->
										</div>
										<!--end::Input group-->

										<!--begin::Input group-->
										<div class="mb-10">
											<!--begin::Label-->
											<label class="form-label fw-semibold">Notifications:</label>
											<!--end::Label-->

											<!--begin::Switch-->
											<div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
												<input class="form-check-input" type="checkbox" value="" name="notifications" checked="">
												<label class="form-check-label">
													Enabled
												</label>
											</div>
											<!--end::Switch-->
										</div>
										<!--end::Input group-->

										<!--begin::Actions-->
										<div class="d-flex justify-content-end">
											<button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2"
												data-kt-menu-dismiss="true">Reset</button>

											<button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Apply</button>
										</div>
										<!--end::Actions-->
									</div>
									<!--end::Form-->
								</div>
								<!--end::Menu 1--> <!--end::Menu-->
							</div>
							<!--end::File-->

						</div>
						<!--end::Files-->

						<!--begin::Notice-->
						<div class="notice d-flex bg-light-primary border-primary rounded border border-dashed p-6">
							<!--begin::Icon-->
							<i class="ki-duotone ki-svg/files/upload.svg fs-2tx text-primary me-4"></i> <!--end::Icon-->

							<!--begin::Wrapper-->
							<div class="d-flex flex-stack flex-grow-1">
								<!--begin::Content-->
								<div class="fw-semibold">
									<h4 class="fw-bold text-gray-900">Quick file uploader</h4>

									<div class="fs-6 text-gray-700">Drag &amp; Drop or choose files from computer</div>
								</div>
								<!--end::Content-->

							</div>
							<!--end::Wrapper-->
						</div>
						<!--end::Notice-->
					</div>
					<!--end::Card body -->
				</div>
				<!--end::Card-->
			</div>
			<!--end::Col-->

			<!--begin::Col-->
			<div class="col-lg-6">
				<!--begin::Card-->
				<div class="card card-flush h-lg-100">
					<!--begin::Card header-->
					<div class="card-header mt-6">
						<!--begin::Card title-->
						<div class="card-title flex-column">
							<h3 class="fw-bold mb-1">New Contibutors</h3>

							<div class="fs-6 text-gray-500">From total 482 Participants</div>
						</div>
						<!--end::Card title-->

						<!--begin::Card toolbar-->
						<div class="card-toolbar">
							<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View All</a>
						</div>
						<!--end::Card toolbar-->
					</div>
					<!--end::Card toolbar-->

					<!--begin::Card body-->
					<div class="card-body d-flex flex-column mb-9 p-9 pt-3">

						<!--begin::Item-->
						<div class="d-flex align-items-center mb-5">
							<!--begin::Avatar-->
							<div class="position-relative me-5">
								<!--begin::Image-->
								<div class="symbol symbol-35px symbol-circle">
									<img alt="Pic" src="/metronic8/demo7/assets/media/avatars/300-6.jpg">
								</div>
								<!--end::Image-->

							</div>
							<!--end::Avatar-->

							<!--begin::Details-->
							<div class="fw-semibold">
								<a href="#" class="fs-5 fw-bold text-hover-primary text-gray-900">Emma Smith</a>

								<div class="text-gray-500">
									8 Pending &amp; 97 Completed Tasks </div>
							</div>
							<!--end::Details-->

							<!--begin::Badge-->
							<div class="badge badge-light ms-auto">5</div>
							<!--end::Badge-->
						</div>
						<!--end::Item-->

						<!--begin::Item-->
						<div class="d-flex align-items-center mb-5">
							<!--begin::Avatar-->
							<div class="position-relative me-5">
								<!--begin::Image-->
								<div class="symbol symbol-35px symbol-circle">
									<span class="symbol-label bg-light-danger text-danger fw-semibold">
										M </span>
								</div>
								<!--end::Image-->

								<!--begin::Online-->
								<div
									class="bg-success position-absolute h-8px w-8px rounded-circle translate-middle start-100 top-100 ms-n1 mt-n1">
								</div>
								<!--end::Online-->
							</div>
							<!--end::Avatar-->

							<!--begin::Details-->
							<div class="fw-semibold">
								<a href="#" class="fs-5 fw-bold text-hover-primary text-gray-900">Melody Macy</a>

								<div class="text-gray-500">
									5 Pending &amp; 84 Completed </div>
							</div>
							<!--end::Details-->

							<!--begin::Badge-->
							<div class="badge badge-light ms-auto">8</div>
							<!--end::Badge-->
						</div>
						<!--end::Item-->

						<!--begin::Item-->
						<div class="d-flex align-items-center mb-5">
							<!--begin::Avatar-->
							<div class="position-relative me-5">
								<!--begin::Image-->
								<div class="symbol symbol-35px symbol-circle">
									<img alt="Pic" src="/metronic8/demo7/assets/media/avatars/300-1.jpg">
								</div>
								<!--end::Image-->

							</div>
							<!--end::Avatar-->

							<!--begin::Details-->
							<div class="fw-semibold">
								<a href="#" class="fs-5 fw-bold text-hover-primary text-gray-900">Max Smith</a>

								<div class="text-gray-500">
									9 Pending &amp; 103 Completed </div>
							</div>
							<!--end::Details-->

							<!--begin::Badge-->
							<div class="badge badge-light ms-auto">9</div>
							<!--end::Badge-->
						</div>
						<!--end::Item-->

						<!--begin::Item-->
						<div class="d-flex align-items-center mb-5">
							<!--begin::Avatar-->
							<div class="position-relative me-5">
								<!--begin::Image-->
								<div class="symbol symbol-35px symbol-circle">
									<img alt="Pic" src="/metronic8/demo7/assets/media/avatars/300-5.jpg">
								</div>
								<!--end::Image-->

							</div>
							<!--end::Avatar-->

							<!--begin::Details-->
							<div class="fw-semibold">
								<a href="#" class="fs-5 fw-bold text-hover-primary text-gray-900">Sean Bean</a>

								<div class="text-gray-500">
									3 Pending &amp; 55 Completed </div>
							</div>
							<!--end::Details-->

							<!--begin::Badge-->
							<div class="badge badge-light ms-auto">3</div>
							<!--end::Badge-->
						</div>
						<!--end::Item-->

						<!--begin::Item-->
						<div class="d-flex align-items-center">
							<!--begin::Avatar-->
							<div class="position-relative me-5">
								<!--begin::Image-->
								<div class="symbol symbol-35px symbol-circle">
									<img alt="Pic" src="/metronic8/demo7/assets/media/avatars/300-25.jpg">
								</div>
								<!--end::Image-->

							</div>
							<!--end::Avatar-->

							<!--begin::Details-->
							<div class="fw-semibold">
								<a href="#" class="fs-5 fw-bold text-hover-primary text-gray-900">Brian Cox</a>

								<div class="text-gray-500">
									4 Pending &amp; 115 Completed </div>
							</div>
							<!--end::Details-->

							<!--begin::Badge-->
							<div class="badge badge-light ms-auto">4</div>
							<!--end::Badge-->
						</div>
						<!--end::Item-->
					</div>
					<!--end::Card body-->
				</div>
				<!--end::Card-->
			</div>
			<!--end::Col-->

			<!--begin::Col-->
			<div class="col-lg-6">

				<!--begin::Tasks-->
				<div class="card card-flush h-lg-100">
					<!--begin::Card header-->
					<div class="card-header mt-6">
						<!--begin::Card title-->
						<div class="card-title flex-column">
							<h3 class="fw-bold mb-1">My Tasks</h3>

							<div class="fs-6 text-gray-500">Total 25 tasks in backlog</div>
						</div>
						<!--end::Card title-->

						<!--begin::Card toolbar-->
						<div class="card-toolbar">
							<a href="#" class="btn btn-bg-light btn-active-color-primary btn-sm">View All</a>
						</div>
						<!--end::Card toolbar-->
					</div>
					<!--end::Card header-->

					<!--begin::Card body-->
					<div class="card-body d-flex flex-column mb-9 p-9 pt-3">
						<!--begin::Item-->
						<div class="d-flex align-items-center position-relative mb-7">
							<!--begin::Label-->
							<div class="position-absolute h-100 bg-secondary w-4px start-0 top-0 rounded"></div>
							<!--end::Label-->

							<!--begin::Checkbox-->
							<div class="form-check form-check-custom form-check-solid me-4 ms-6">
								<input class="form-check-input" type="checkbox" value="">
							</div>
							<!--end::Checkbox-->

							<!--begin::Details-->
							<div class="fw-semibold">
								<a href="#" class="fs-6 fw-bold text-hover-primary text-gray-900">Create FureStibe branding logo</a>

								<!--begin::Info-->
								<div class="text-gray-500">
									Due in 1 day <a href="#">Karina Clark</a>
								</div>
								<!--end::Info-->
							</div>
							<!--end::Details-->

							<!--begin::Menu-->
							<button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-primary btn-active-light-primary ms-auto"
								data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">

								<i class="ki-duotone ki-element-plus fs-3"><span class="path1"></span><span class="path2"></span><span
										class="path3"></span><span class="path4"></span><span class="path5"></span></i> </button>

							<!--begin::Menu 1-->
							<div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true"
								id="kt_menu_6761526c2b296">
								<!--begin::Header-->
								<div class="px-7 py-5">
									<div class="fs-5 fw-bold text-gray-900">Filter Options</div>
								</div>
								<!--end::Header-->

								<!--begin::Menu separator-->
								<div class="separator border-gray-200"></div>
								<!--end::Menu separator-->

								<!--begin::Form-->
								<div class="px-7 py-5">
									<!--begin::Input group-->
									<div class="mb-10">
										<!--begin::Label-->
										<label class="form-label fw-semibold">Status:</label>
										<!--end::Label-->

										<!--begin::Input-->
										<div>
											<select class="form-select form-select-solid select2-hidden-accessible" multiple=""
												data-kt-select2="true" data-close-on-select="false" data-placeholder="Select option"
												data-dropdown-parent="#kt_menu_6761526c2b296" data-allow-clear="true"
												data-select2-id="select2-data-23-yjaw" tabindex="-1" aria-hidden="true" data-kt-initialized="1">
												<option></option>
												<option value="1">Approved</option>
												<option value="2">Pending</option>
												<option value="2">In Process</option>
												<option value="2">Rejected</option>
											</select><span class="select2 select2-container select2-container--bootstrap5" dir="ltr"
												data-select2-id="select2-data-24-qa4y" style="width: 100%;"><span class="selection"><span
														class="select2-selection select2-selection--multiple form-select form-select-solid" role="combobox"
														aria-haspopup="true" aria-expanded="false" tabindex="-1" aria-disabled="false">
														<ul class="select2-selection__rendered" id="select2-b7yg-container"></ul><span
															class="select2-search select2-search--inline">
															<textarea class="select2-search__field" type="search" tabindex="0" autocorrect="off" autocapitalize="none"
															 spellcheck="false" role="searchbox" aria-autocomplete="list" autocomplete="off" aria-label="Search"
															 aria-describedby="select2-b7yg-container" placeholder="Select option" style="width: 100%;"></textarea>
														</span>
													</span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
										</div>
										<!--end::Input-->
									</div>
									<!--end::Input group-->

									<!--begin::Input group-->
									<div class="mb-10">
										<!--begin::Label-->
										<label class="form-label fw-semibold">Member Type:</label>
										<!--end::Label-->

										<!--begin::Options-->
										<div class="d-flex">
											<!--begin::Options-->
											<label class="form-check form-check-sm form-check-custom form-check-solid me-5">
												<input class="form-check-input" type="checkbox" value="1">
												<span class="form-check-label">
													Author
												</span>
											</label>
											<!--end::Options-->

											<!--begin::Options-->
											<label class="form-check form-check-sm form-check-custom form-check-solid">
												<input class="form-check-input" type="checkbox" value="2" checked="checked">
												<span class="form-check-label">
													Customer
												</span>
											</label>
											<!--end::Options-->
										</div>
										<!--end::Options-->
									</div>
									<!--end::Input group-->

									<!--begin::Input group-->
									<div class="mb-10">
										<!--begin::Label-->
										<label class="form-label fw-semibold">Notifications:</label>
										<!--end::Label-->

										<!--begin::Switch-->
										<div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
											<input class="form-check-input" type="checkbox" value="" name="notifications" checked="">
											<label class="form-check-label">
												Enabled
											</label>
										</div>
										<!--end::Switch-->
									</div>
									<!--end::Input group-->

									<!--begin::Actions-->
									<div class="d-flex justify-content-end">
										<button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2"
											data-kt-menu-dismiss="true">Reset</button>

										<button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Apply</button>
									</div>
									<!--end::Actions-->
								</div>
								<!--end::Form-->
							</div>
							<!--end::Menu 1--> <!--end::Menu-->
						</div>
						<!--end::Item-->
						<!--begin::Item-->
						<div class="d-flex align-items-center position-relative mb-7">
							<!--begin::Label-->
							<div class="position-absolute h-100 bg-secondary w-4px start-0 top-0 rounded"></div>
							<!--end::Label-->

							<!--begin::Checkbox-->
							<div class="form-check form-check-custom form-check-solid me-4 ms-6">
								<input class="form-check-input" type="checkbox" value="">
							</div>
							<!--end::Checkbox-->

							<!--begin::Details-->
							<div class="fw-semibold">
								<a href="#" class="fs-6 fw-bold text-hover-primary text-gray-900">Schedule a meeting with FireBear CTO
									John</a>

								<!--begin::Info-->
								<div class="text-gray-500">
									Due in 3 days <a href="#">Rober Doe</a>
								</div>
								<!--end::Info-->
							</div>
							<!--end::Details-->

							<!--begin::Menu-->
							<button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-primary btn-active-light-primary ms-auto"
								data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">

								<i class="ki-duotone ki-element-plus fs-3"><span class="path1"></span><span class="path2"></span><span
										class="path3"></span><span class="path4"></span><span class="path5"></span></i> </button>

							<!--begin::Menu 1-->
							<div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true"
								id="kt_menu_6761526c2b2a0">
								<!--begin::Header-->
								<div class="px-7 py-5">
									<div class="fs-5 fw-bold text-gray-900">Filter Options</div>
								</div>
								<!--end::Header-->

								<!--begin::Menu separator-->
								<div class="separator border-gray-200"></div>
								<!--end::Menu separator-->

								<!--begin::Form-->
								<div class="px-7 py-5">
									<!--begin::Input group-->
									<div class="mb-10">
										<!--begin::Label-->
										<label class="form-label fw-semibold">Status:</label>
										<!--end::Label-->

										<!--begin::Input-->
										<div>
											<select class="form-select form-select-solid select2-hidden-accessible" multiple=""
												data-kt-select2="true" data-close-on-select="false" data-placeholder="Select option"
												data-dropdown-parent="#kt_menu_6761526c2b2a0" data-allow-clear="true"
												data-select2-id="select2-data-25-njr0" tabindex="-1" aria-hidden="true" data-kt-initialized="1">
												<option></option>
												<option value="1">Approved</option>
												<option value="2">Pending</option>
												<option value="2">In Process</option>
												<option value="2">Rejected</option>
											</select><span class="select2 select2-container select2-container--bootstrap5" dir="ltr"
												data-select2-id="select2-data-26-x6ll" style="width: 100%;"><span class="selection"><span
														class="select2-selection select2-selection--multiple form-select form-select-solid" role="combobox"
														aria-haspopup="true" aria-expanded="false" tabindex="-1" aria-disabled="false">
														<ul class="select2-selection__rendered" id="select2-q3lr-container"></ul><span
															class="select2-search select2-search--inline">
															<textarea class="select2-search__field" type="search" tabindex="0" autocorrect="off" autocapitalize="none"
															 spellcheck="false" role="searchbox" aria-autocomplete="list" autocomplete="off" aria-label="Search"
															 aria-describedby="select2-q3lr-container" placeholder="Select option" style="width: 100%;"></textarea>
														</span>
													</span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
										</div>
										<!--end::Input-->
									</div>
									<!--end::Input group-->

									<!--begin::Input group-->
									<div class="mb-10">
										<!--begin::Label-->
										<label class="form-label fw-semibold">Member Type:</label>
										<!--end::Label-->

										<!--begin::Options-->
										<div class="d-flex">
											<!--begin::Options-->
											<label class="form-check form-check-sm form-check-custom form-check-solid me-5">
												<input class="form-check-input" type="checkbox" value="1">
												<span class="form-check-label">
													Author
												</span>
											</label>
											<!--end::Options-->

											<!--begin::Options-->
											<label class="form-check form-check-sm form-check-custom form-check-solid">
												<input class="form-check-input" type="checkbox" value="2" checked="checked">
												<span class="form-check-label">
													Customer
												</span>
											</label>
											<!--end::Options-->
										</div>
										<!--end::Options-->
									</div>
									<!--end::Input group-->

									<!--begin::Input group-->
									<div class="mb-10">
										<!--begin::Label-->
										<label class="form-label fw-semibold">Notifications:</label>
										<!--end::Label-->

										<!--begin::Switch-->
										<div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
											<input class="form-check-input" type="checkbox" value="" name="notifications" checked="">
											<label class="form-check-label">
												Enabled
											</label>
										</div>
										<!--end::Switch-->
									</div>
									<!--end::Input group-->

									<!--begin::Actions-->
									<div class="d-flex justify-content-end">
										<button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2"
											data-kt-menu-dismiss="true">Reset</button>

										<button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Apply</button>
									</div>
									<!--end::Actions-->
								</div>
								<!--end::Form-->
							</div>
							<!--end::Menu 1--> <!--end::Menu-->
						</div>
						<!--end::Item-->
						<!--begin::Item-->
						<div class="d-flex align-items-center position-relative mb-7">
							<!--begin::Label-->
							<div class="position-absolute h-100 bg-secondary w-4px start-0 top-0 rounded"></div>
							<!--end::Label-->

							<!--begin::Checkbox-->
							<div class="form-check form-check-custom form-check-solid me-4 ms-6">
								<input class="form-check-input" type="checkbox" value="">
							</div>
							<!--end::Checkbox-->

							<!--begin::Details-->
							<div class="fw-semibold">
								<a href="#" class="fs-6 fw-bold text-hover-primary text-gray-900">9 Degree Porject Estimation</a>

								<!--begin::Info-->
								<div class="text-gray-500">
									Due in 1 week <a href="#">Neil Owen</a>
								</div>
								<!--end::Info-->
							</div>
							<!--end::Details-->

							<!--begin::Menu-->
							<button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-primary btn-active-light-primary ms-auto"
								data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">

								<i class="ki-duotone ki-element-plus fs-3"><span class="path1"></span><span class="path2"></span><span
										class="path3"></span><span class="path4"></span><span class="path5"></span></i> </button>

							<!--begin::Menu 1-->
							<div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true"
								id="kt_menu_6761526c2b2aa">
								<!--begin::Header-->
								<div class="px-7 py-5">
									<div class="fs-5 fw-bold text-gray-900">Filter Options</div>
								</div>
								<!--end::Header-->

								<!--begin::Menu separator-->
								<div class="separator border-gray-200"></div>
								<!--end::Menu separator-->

								<!--begin::Form-->
								<div class="px-7 py-5">
									<!--begin::Input group-->
									<div class="mb-10">
										<!--begin::Label-->
										<label class="form-label fw-semibold">Status:</label>
										<!--end::Label-->

										<!--begin::Input-->
										<div>
											<select class="form-select form-select-solid select2-hidden-accessible" multiple=""
												data-kt-select2="true" data-close-on-select="false" data-placeholder="Select option"
												data-dropdown-parent="#kt_menu_6761526c2b2aa" data-allow-clear="true"
												data-select2-id="select2-data-27-2dar" tabindex="-1" aria-hidden="true" data-kt-initialized="1">
												<option></option>
												<option value="1">Approved</option>
												<option value="2">Pending</option>
												<option value="2">In Process</option>
												<option value="2">Rejected</option>
											</select><span class="select2 select2-container select2-container--bootstrap5" dir="ltr"
												data-select2-id="select2-data-28-icj6" style="width: 100%;"><span class="selection"><span
														class="select2-selection select2-selection--multiple form-select form-select-solid" role="combobox"
														aria-haspopup="true" aria-expanded="false" tabindex="-1" aria-disabled="false">
														<ul class="select2-selection__rendered" id="select2-3i3a-container"></ul><span
															class="select2-search select2-search--inline">
															<textarea class="select2-search__field" type="search" tabindex="0" autocorrect="off" autocapitalize="none"
															 spellcheck="false" role="searchbox" aria-autocomplete="list" autocomplete="off" aria-label="Search"
															 aria-describedby="select2-3i3a-container" placeholder="Select option" style="width: 100%;"></textarea>
														</span>
													</span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
										</div>
										<!--end::Input-->
									</div>
									<!--end::Input group-->

									<!--begin::Input group-->
									<div class="mb-10">
										<!--begin::Label-->
										<label class="form-label fw-semibold">Member Type:</label>
										<!--end::Label-->

										<!--begin::Options-->
										<div class="d-flex">
											<!--begin::Options-->
											<label class="form-check form-check-sm form-check-custom form-check-solid me-5">
												<input class="form-check-input" type="checkbox" value="1">
												<span class="form-check-label">
													Author
												</span>
											</label>
											<!--end::Options-->

											<!--begin::Options-->
											<label class="form-check form-check-sm form-check-custom form-check-solid">
												<input class="form-check-input" type="checkbox" value="2" checked="checked">
												<span class="form-check-label">
													Customer
												</span>
											</label>
											<!--end::Options-->
										</div>
										<!--end::Options-->
									</div>
									<!--end::Input group-->

									<!--begin::Input group-->
									<div class="mb-10">
										<!--begin::Label-->
										<label class="form-label fw-semibold">Notifications:</label>
										<!--end::Label-->

										<!--begin::Switch-->
										<div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
											<input class="form-check-input" type="checkbox" value="" name="notifications" checked="">
											<label class="form-check-label">
												Enabled
											</label>
										</div>
										<!--end::Switch-->
									</div>
									<!--end::Input group-->

									<!--begin::Actions-->
									<div class="d-flex justify-content-end">
										<button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2"
											data-kt-menu-dismiss="true">Reset</button>

										<button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Apply</button>
									</div>
									<!--end::Actions-->
								</div>
								<!--end::Form-->
							</div>
							<!--end::Menu 1--> <!--end::Menu-->
						</div>
						<!--end::Item-->
						<!--begin::Item-->
						<div class="d-flex align-items-center position-relative mb-7">
							<!--begin::Label-->
							<div class="position-absolute h-100 bg-secondary w-4px start-0 top-0 rounded"></div>
							<!--end::Label-->

							<!--begin::Checkbox-->
							<div class="form-check form-check-custom form-check-solid me-4 ms-6">
								<input class="form-check-input" type="checkbox" value="">
							</div>
							<!--end::Checkbox-->

							<!--begin::Details-->
							<div class="fw-semibold">
								<a href="#" class="fs-6 fw-bold text-hover-primary text-gray-900">Dashgboard UI &amp; UX for Leafr
									CRM</a>

								<!--begin::Info-->
								<div class="text-gray-500">
									Due in 1 week <a href="#">Olivia Wild</a>
								</div>
								<!--end::Info-->
							</div>
							<!--end::Details-->

							<!--begin::Menu-->
							<button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-primary btn-active-light-primary ms-auto"
								data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">

								<i class="ki-duotone ki-element-plus fs-3"><span class="path1"></span><span class="path2"></span><span
										class="path3"></span><span class="path4"></span><span class="path5"></span></i> </button>

							<!--begin::Menu 1-->
							<div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true"
								id="kt_menu_6761526c2b2b4">
								<!--begin::Header-->
								<div class="px-7 py-5">
									<div class="fs-5 fw-bold text-gray-900">Filter Options</div>
								</div>
								<!--end::Header-->

								<!--begin::Menu separator-->
								<div class="separator border-gray-200"></div>
								<!--end::Menu separator-->

								<!--begin::Form-->
								<div class="px-7 py-5">
									<!--begin::Input group-->
									<div class="mb-10">
										<!--begin::Label-->
										<label class="form-label fw-semibold">Status:</label>
										<!--end::Label-->

										<!--begin::Input-->
										<div>
											<select class="form-select form-select-solid select2-hidden-accessible" multiple=""
												data-kt-select2="true" data-close-on-select="false" data-placeholder="Select option"
												data-dropdown-parent="#kt_menu_6761526c2b2b4" data-allow-clear="true"
												data-select2-id="select2-data-29-t33n" tabindex="-1" aria-hidden="true" data-kt-initialized="1">
												<option></option>
												<option value="1">Approved</option>
												<option value="2">Pending</option>
												<option value="2">In Process</option>
												<option value="2">Rejected</option>
											</select><span class="select2 select2-container select2-container--bootstrap5" dir="ltr"
												data-select2-id="select2-data-30-s59z" style="width: 100%;"><span class="selection"><span
														class="select2-selection select2-selection--multiple form-select form-select-solid" role="combobox"
														aria-haspopup="true" aria-expanded="false" tabindex="-1" aria-disabled="false">
														<ul class="select2-selection__rendered" id="select2-cldj-container"></ul><span
															class="select2-search select2-search--inline">
															<textarea class="select2-search__field" type="search" tabindex="0" autocorrect="off" autocapitalize="none"
															 spellcheck="false" role="searchbox" aria-autocomplete="list" autocomplete="off" aria-label="Search"
															 aria-describedby="select2-cldj-container" placeholder="Select option" style="width: 100%;"></textarea>
														</span>
													</span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
										</div>
										<!--end::Input-->
									</div>
									<!--end::Input group-->

									<!--begin::Input group-->
									<div class="mb-10">
										<!--begin::Label-->
										<label class="form-label fw-semibold">Member Type:</label>
										<!--end::Label-->

										<!--begin::Options-->
										<div class="d-flex">
											<!--begin::Options-->
											<label class="form-check form-check-sm form-check-custom form-check-solid me-5">
												<input class="form-check-input" type="checkbox" value="1">
												<span class="form-check-label">
													Author
												</span>
											</label>
											<!--end::Options-->

											<!--begin::Options-->
											<label class="form-check form-check-sm form-check-custom form-check-solid">
												<input class="form-check-input" type="checkbox" value="2" checked="checked">
												<span class="form-check-label">
													Customer
												</span>
											</label>
											<!--end::Options-->
										</div>
										<!--end::Options-->
									</div>
									<!--end::Input group-->

									<!--begin::Input group-->
									<div class="mb-10">
										<!--begin::Label-->
										<label class="form-label fw-semibold">Notifications:</label>
										<!--end::Label-->

										<!--begin::Switch-->
										<div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
											<input class="form-check-input" type="checkbox" value="" name="notifications" checked="">
											<label class="form-check-label">
												Enabled
											</label>
										</div>
										<!--end::Switch-->
									</div>
									<!--end::Input group-->

									<!--begin::Actions-->
									<div class="d-flex justify-content-end">
										<button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2"
											data-kt-menu-dismiss="true">Reset</button>

										<button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Apply</button>
									</div>
									<!--end::Actions-->
								</div>
								<!--end::Form-->
							</div>
							<!--end::Menu 1--> <!--end::Menu-->
						</div>
						<!--end::Item-->
						<!--begin::Item-->
						<div class="d-flex align-items-center position-relative">
							<!--begin::Label-->
							<div class="position-absolute h-100 bg-secondary w-4px start-0 top-0 rounded"></div>
							<!--end::Label-->

							<!--begin::Checkbox-->
							<div class="form-check form-check-custom form-check-solid me-4 ms-6">
								<input class="form-check-input" type="checkbox" value="">
							</div>
							<!--end::Checkbox-->

							<!--begin::Details-->
							<div class="fw-semibold">
								<a href="#" class="fs-6 fw-bold text-hover-primary text-gray-900">Mivy App R&amp;D, Meeting with
									clients</a>

								<!--begin::Info-->
								<div class="text-gray-500">
									Due in 2 weeks <a href="#">Sean Bean</a>
								</div>
								<!--end::Info-->
							</div>
							<!--end::Details-->

							<!--begin::Menu-->
							<button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-primary btn-active-light-primary ms-auto"
								data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">

								<i class="ki-duotone ki-element-plus fs-3"><span class="path1"></span><span class="path2"></span><span
										class="path3"></span><span class="path4"></span><span class="path5"></span></i> </button>

							<!--begin::Menu 1-->
							<div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true"
								id="kt_menu_6761526c2b2be">
								<!--begin::Header-->
								<div class="px-7 py-5">
									<div class="fs-5 fw-bold text-gray-900">Filter Options</div>
								</div>
								<!--end::Header-->

								<!--begin::Menu separator-->
								<div class="separator border-gray-200"></div>
								<!--end::Menu separator-->

								<!--begin::Form-->
								<div class="px-7 py-5">
									<!--begin::Input group-->
									<div class="mb-10">
										<!--begin::Label-->
										<label class="form-label fw-semibold">Status:</label>
										<!--end::Label-->

										<!--begin::Input-->
										<div>
											<select class="form-select form-select-solid select2-hidden-accessible" multiple=""
												data-kt-select2="true" data-close-on-select="false" data-placeholder="Select option"
												data-dropdown-parent="#kt_menu_6761526c2b2be" data-allow-clear="true"
												data-select2-id="select2-data-31-ohtk" tabindex="-1" aria-hidden="true" data-kt-initialized="1">
												<option></option>
												<option value="1">Approved</option>
												<option value="2">Pending</option>
												<option value="2">In Process</option>
												<option value="2">Rejected</option>
											</select><span class="select2 select2-container select2-container--bootstrap5" dir="ltr"
												data-select2-id="select2-data-32-jpoj" style="width: 100%;"><span class="selection"><span
														class="select2-selection select2-selection--multiple form-select form-select-solid" role="combobox"
														aria-haspopup="true" aria-expanded="false" tabindex="-1" aria-disabled="false">
														<ul class="select2-selection__rendered" id="select2-vkwn-container"></ul><span
															class="select2-search select2-search--inline">
															<textarea class="select2-search__field" type="search" tabindex="0" autocorrect="off" autocapitalize="none"
															 spellcheck="false" role="searchbox" aria-autocomplete="list" autocomplete="off" aria-label="Search"
															 aria-describedby="select2-vkwn-container" placeholder="Select option" style="width: 100%;"></textarea>
														</span>
													</span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
										</div>
										<!--end::Input-->
									</div>
									<!--end::Input group-->

									<!--begin::Input group-->
									<div class="mb-10">
										<!--begin::Label-->
										<label class="form-label fw-semibold">Member Type:</label>
										<!--end::Label-->

										<!--begin::Options-->
										<div class="d-flex">
											<!--begin::Options-->
											<label class="form-check form-check-sm form-check-custom form-check-solid me-5">
												<input class="form-check-input" type="checkbox" value="1">
												<span class="form-check-label">
													Author
												</span>
											</label>
											<!--end::Options-->

											<!--begin::Options-->
											<label class="form-check form-check-sm form-check-custom form-check-solid">
												<input class="form-check-input" type="checkbox" value="2" checked="checked">
												<span class="form-check-label">
													Customer
												</span>
											</label>
											<!--end::Options-->
										</div>
									</div>
									<div class="mb-10">
										<label class="form-label fw-semibold">Notifications:</label>
										<div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
											<input class="form-check-input" type="checkbox" value="" name="notifications" checked="">
											<label class="form-check-label">
												Enabled
											</label>
										</div>
									</div>
									<div class="d-flex justify-content-end">
										<button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2"
											data-kt-menu-dismiss="true">Reset</button>
										<button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Apply</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
