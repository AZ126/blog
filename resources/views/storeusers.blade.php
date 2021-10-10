<h1>Add New User</h1>
@if(session('user'))
<h3>Data saved for {{ session('user') }}</h3>
@endif
<form method="POST" action="storeController">
    @csrf
    <input type="text" name="userName" placeholder="Enter User Name" /> <br /><br />
    <input type="password" name="password" placeholder="Enter Password" /> <br /><br />
    <input type="text" name="email" placeholder="Enter Email" /> <br /><br />
    <button type="submit">Add User</button>
</form>