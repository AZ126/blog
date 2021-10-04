<x-header componentName="User"/>
<h1>Users Page</h1>
<form method="POST" action="users">
    @csrf
    <input type="text" name="userName" placeholder="Enter User Name" />
    <input type="password" name="userPass" placeholder="Enter Password" />
    <input type="submit" name="btnLogin" />
</form>
