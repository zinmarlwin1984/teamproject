@extends('layouts.app')
@section('content')
<div class="row">
	<div class="col-md-3">
		@include("backend.sidebar")            
	</div>

	<div class="col-md-9">
		<div class="panel panel-success">
			<div class="panel-heading">Role Management</div>
			<div class="panel-body">
				<div class="row">
					<div class="col-md-12">
						<button class="btn btn-success">Create Role</button>
					</div>
				</div>
				<br>
				<div class="row">
					<div class="col-md-12">
						<table class="table table-bordered" id="roles-table">
							<thead>
								<tr>
									<th>Id</th>
									<th>Name</th>
									<th>Slug</th>
									<th>Permissions</th>
								</tr>
							</thead>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
@push('scripts')
<script>
$(function() {
    $('#roles-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: '{!! route('roles.data') !!}',
        columns: [
            { data: 'id', name: 'id' },
            { data: 'name', name: 'name' },
            { data: 'slug', name: 'slug' },
            { data: 'permissions', name: 'permissions' }
        ]
    });
});
</script>
@endpush
