<h1>User Sign In</h1>
<form action="form" method="POST" >
{{ csrf_field() }}
<input type="text" name="username" placeholder="Enter Username" /> <br><br>
<input type="password" name="password" placeholder="Enter Password"/><br><br>
<button type="submit" >Submit</button>

</form>