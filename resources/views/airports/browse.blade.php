@extends('layouts.app')

@section('content')
<div class="main-panel">
	<div class="content-wrapper">
		<div class="card">
			<div class="card-body">
				<h4 class="card-title">Master Data Airport</h4>
				<div class="row">
					<div class="col-12">
						<div class="table-responsive">
							<table id="order-listing" class="table">
								<thead>
									<tr>
										<!-- 'iata', 'iso', 'status', 'name', 'continent', 'type', 'lat', 'lon', 'size' -->
										<th>No</th>
										<th>Airport Code</th>
										<th>Nama Airport</th>
										<th>ISO</th>
										<th>Continent</th>
										<th>Size</th>
										<th>Status</th>
									</tr>
								</thead>
								<tbody>
									@if(!empty($airPortData))
									@foreach($airPortData as $key => $value)
									<tr>
										<td>{{ $key+1 }}</td>
										<td>{{ $value->iata }}</td>
										<td>{{ $value->name }}</td>
										<td>{{ $value->iso }}</td>
										<td>{{ $value->continent }}</td>
										<td>{{ $value->size }}</td>
										<td>
											@if($value->status == 1)
											<label class="badge badge-success">Active</label>
											@else
											<label class="badge badge-danger">Not Active</label>
											@endif
										</td>
									</tr>
									@endforeach
									@endif
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- content-wrapper ends -->
	<!-- partial:../../partials/_footer.html -->
	@include('layouts.footer')
	<!-- partial -->
</div>
@endsection