<form id="tweets-form" name="tweets-form" class="form-inline" method="POST" action="{{ url('/tweets-search' ) }}">
    {!! csrf_field() !!}
    <input type="search" class="form-control" name="q" id="q" value="{{old('q')}}" required>
    <input type="submit" class="btn btn-primary" value="GO">
</form>