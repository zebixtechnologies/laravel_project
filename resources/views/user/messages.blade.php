@if ($message = Session::get('success'))
<div class="alert alert-success alert-block">
	<button type="button" class="close" data-dismiss="alert">×</button>
        <strong>{{ $message }}</strong>
</div>
@endif

@if ($message=Session::get('error'))
<div class="alert alert-error alert-block">
    <button type="button" class="close" data-dismiss="alert">x</button>
    <strong>{{ $message }}</strong>
</div>
@endif

@if ($message=Session::get('update_success'))
<div class="alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert">x</button>
    <strong>{{ $message }}</strong>
</div>
@endif


@if ($message=Session::get('deleted'))
<div class="alert alert-warning alert-block">
        <button type="button" class="close" data-dismiss="alert">x</button>
        <strong>{{ $message }}</strong>
    </div>

@endif

@if ($message=Session::get('image_error'))
<div class="alert alert-warning alert-block">
    <button type="button" class="close" data-dismiss="alert">x</button>
    <strong>{{ $message }}</strong>
</div>

@endif
