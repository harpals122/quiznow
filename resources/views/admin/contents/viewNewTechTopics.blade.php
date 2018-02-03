<table class="table">
    <caption>List of Users</caption>
    <button>Add User</button>
<tr>

    <td>Image Path</td>
    <td>Topic</td>
    <td>Highlights </td>
    <td>Details</td>
</tr>
@foreach($newtechlearnings as $newtechlearnings)
<tr>
     <td>{{$newtechlearnings->image_path}}</td>
    <td>{{$newtechlearnings->topic}}</td>
    <td>{{$newtechlearnings->highlights}}</td>
    <td>{{$newtechlearnings->details}}</td>
    <td>edit </td>
    <td>delete</td>
</tr>
@endforeach

</table>
</div>

