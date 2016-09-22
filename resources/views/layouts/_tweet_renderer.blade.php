<div class="panel panel-default">
    <div class="panel-heading text-left">{{$tweet->created_at}}</div>
    <div class="panel-body">{{$tweet->text}}</div>
    <div class="panel-footer text-right">By {{$tweet->user->name}}</div>
</div>