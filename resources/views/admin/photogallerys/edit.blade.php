@extends('layouts.master')
@section('content')



<link href="{{ asset('assets/css/vendor/quill.core.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/css/vendor/quill.snow.css') }}" rel="stylesheet" type="text/css" />




<div class="container mt-2">
	<div class="col-12">

		<div class="card">
			<div class="card-body">

				<h3>@lang('photo.edittitle')</h3><br>


				<form method="post" class="btn-submit" action="{{ route('photogallerys.update',$data->id) }}" enctype="multipart/form-data">
					@csrf
					@method('PUT')

					<div class="row myinput">

			

		

						<div class="form-group mb-3 col-md-8">
							<label>@lang('photo.title'): <span class="text-danger" style="font-size: 15px;">*</span></label>
							<div class="input-group">
								<input class="form-control" type="text" name="title" id="title"  required="" value="{{ $data->title }}">
							</div>
						</div>

	

						<div class="form-group mb-3 col-md-12">
							<label>@lang('photo.image'):</label>
							<div class="input-group">
								<input class="form-control" type="file" name="image" id="image">
								<br>
							</div>
							<img src="{{ asset($data->image) }}" style="max-height: 100px;">
						</div>




						<div class="modal-footer border-0">
							<button type="button" class="btn btn-secondary border-0" onClick="window.location.reload();">@lang('actions.close')</button>
							<button type="submit" class="btn btn-success button border-0">@lang('actions.update')</button>
						</div>





					</div>
				</form>



			</div> <!-- end card body-->
		</div> <!-- end card -->
	</div><!-- end col-->
</div>



<script src="{{ asset('assets/js/vendor/quill.min.js') }}"></script>
<script src="{{ asset('assets/js/pages/demo.quilljs.js') }}"></script>



@endsection

