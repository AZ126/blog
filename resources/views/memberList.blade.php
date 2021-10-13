<table border="1">
    <tr>
        <td>ID</td>
        <td>Name</td>
        <td>Email</td>
        <td>Address</td>
        <td>Operations</td>
    </tr>
    @foreach($members as $data)
    <tr>
        <td>{{$data['id']}}</td>
        <td>{{$data['name']}}</td>
        <td>{{$data['email']}}</td>
        <td>{{$data['address']}}</td>
        <td>
            <a href="delete/{{$data['id']}}">Delete</a><br />
            <a href="edit/{{$data['id']}}">Edit</a>
        </td>
    </tr>
    @endforeach
</table>
<div>
    {{$members->links()}}
</div>

<style>
    .w-5{
        display: none;
    }
</style>