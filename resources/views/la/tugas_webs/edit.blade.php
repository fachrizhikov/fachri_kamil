@extends("la.layouts.app")

@section("contentheader_title")
	<a href="{{ url(config('laraadmin.adminRoute') . '/tugas_webs') }}">Tugas web</a> :
@endsection
@section("contentheader_description", $tugas_web->$view_col)
@section("section", "Tugas webs")
@section("section_url", url(config('laraadmin.adminRoute') . '/tugas_webs'))
@section("sub_section", "Edit")

@section("htmlheader_title", "Tugas webs Edit : ".$tugas_web->$view_col)

@section("main-content")

@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="box">
	<div class="box-header">
		
	</div>
	<div class="box-body">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				{!! Form::model($tugas_web, ['route' => [config('laraadmin.adminRoute') . '.tugas_webs.update', $tugas_web->id ], 'method'=>'PUT', 'id' => 'tugas_web-edit-form']) !!}
					@la_form($module)
					
					{{--
					@la_input($module, 'name')
					@la_input($module, 'Email')
					@la_input($module, 'Message')
					--}}
                    <br>
					<div class="form-group">
						{!! Form::submit( 'Update', ['class'=>'btn btn-success']) !!} <button class="btn btn-default pull-right"><a href="{{ url(config('laraadmin.adminRoute') . '/tugas_webs') }}">Cancel</a></button>
					</div>
				{!! Form::close() !!}
			</div>
		</div>
	</div>
</div>

@endsection

@push('scripts')
<script>
$(function () {
	$("#tugas_web-edit-form").validate({
		
	});
});
</script>
@endpush
