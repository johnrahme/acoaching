

<ul>
@foreach ($errors->all() as $message)
<li style = "color:red">
    {{$message}}
</li>
@endforeach
</ul>
