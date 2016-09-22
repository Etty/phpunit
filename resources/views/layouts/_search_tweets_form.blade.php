<form id="tweets-form" name="tweets-form" class="form-inline" method="POST" action="{{ url('/tweets-search' ) }}">
    {!! csrf_field() !!}
    {{--<div class="input-group col-sm-10">--}}
    {{--<label class="col-md-4 control-label"></label>--}}
    <input type="search" class="form-control" name="q" id="q">
    <input type="submit" class="btn btn-primary" value="GO">
    {{--</div>--}}
</form>