<h1>Edit Users</h1>
<form action={{"update/".$data['id']}} method="POST">
    @csrf
    @method('PUT')
    <input type="hidden" name="id" value="{{$data['id']}}" /> <br /><br />
    <input type="text" name="name" value="{{$data['name']}}" /> <br /><br />
    <input type="text" name="address" value="{{$data['address']}}" /> <br /><br />
    <input type="text" name="email" value="{{$data['email']}}" /> <br /><br />
    <button>Update</button>
</form>
