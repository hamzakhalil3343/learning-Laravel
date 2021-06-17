<h1>hello from users ........... {{count($users)}}!</h1>
@include ('inner')

@foreach ($users as $item)
{{$item}}
@endforeach
<!-- @if($users=='hamza')
<h3>Hi {{$users}}<h3>
@else
<h3>Hi Unknown<h3>
@endif -->
<script>
var data =@json($users);
console.log(data)
</script>