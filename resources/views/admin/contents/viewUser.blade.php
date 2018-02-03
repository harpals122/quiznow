<table class="table">
    <caption>List of Users</caption>
    <button>Add User</button>
<tr>

    <td>Name</td>
    <td>Email</td>
    
    <td>Address </td>
    <td>Phone</td>
</tr>
@foreach($userDetails as $userDetails)
<tr>
     <td>{{$userDetails->name}}</td>
    <td>{{$userDetails->email}}</td>
    <td>{{$userDetails->address}}</td>
    <td>{{$userDetails->phone_number}}</td>
    <td>edit </td>
    <td>delete</td>
</tr>
@endforeach

</table>
</div>