<h1>User Sign In</h1>
@if($errors->any())
@foreach($errors->all() as $err)
<li>{{$err}}</li>
@endforeach
@endif
<form action="form" method="POST" >
{{ csrf_field() }}
<input type="text" name="username" placeholder="Enter Username" value="{{old('username')}}"/> 
<span style="color: red;" >@error('username') {{$message}}@enderror</span>
<br><br>
<input type="password" name="password" placeholder="Enter Password"/>
<span style="color: red;" >@error('password') {{$message}}@enderror</span>
<br><br>
<button type="submit" >Submit</button>

</form>