@extends('layouts.master')
@section('content')



<link href="{{ asset('assets/css/vendor/quill.core.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('assets/css/vendor/quill.snow.css') }}" rel="stylesheet" type="text/css" />




<div class="container mt-2">
	<div class="col-12">

		<div class="card">
			<div class="card-body">

				<h3>@lang('page.edittitle')</h3><br>


				<form method="post" class="btn-submit" action="{{ route('pages.update',$data->id) }}" enctype="multipart/form-data">
					@csrf
					@method('PUT')

					<div class="row myinput">

						<div class="form-group mb-3 col-md-12">
							<label>@lang('page.title'): <span class="text-danger" style="font-size: 15px;">*</span></label>
							<div class="input-group">
								<input class="form-control" type="text" name="title" id="title"  required="" value="{{ $data->title }}">
							</div>
						</div>

						<div class="form-group mb-3 col-md-12">
							<label>@lang('page.details'): <span class="text-danger" style="font-size: 15px;">*</span></label>
							<div class="input-group">
								<textarea  class="form-control w-100" rows="10" type="text" name="details" required="">{{ $data->details }}</textarea>
							</div>
						</div>


							<div class="form-group mb-3 col-md-12">
							<label>@lang('page.image'):</label>
							<div class="input-group">
								<input class="form-control" type="file" name="image" id="image">
								<br>
							</div>
							<a href="{{ asset($data->image) }}" download="" class="btn btn-info">@lang('page.download')</a>
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

