@extends('layouts.app')

@section('content')
<div class="container">
    
    <table>
        <tr>
            <th>Id</th>
            <th>Email</th>
            <th>First name</th>
            <th>Last name</th>
            <th>Gender</th>
            <th>Age</th>
            <th>Job Title</th>
            <th>Salery</th>
            <th>Joined At</th>
        </tr>
        @foreach ($members as $member)
        <tr>
            <td>{{$member->id}}</td>
            <td>{{$member->email}}</td>
            <td>{{$member->eirst_name}}</td>
            <td>{{$member->last_name}}</td>
            <td>{{$member->gender}}</td>
            <td>{{$member->age}}</td>
            <td>{{$member->position}}</td>
            <td>{{$member->sallery}}</td>
            <td>{{$member->joined_at}}</td>
            


        </tr>
            
        @endforeach
    </table>

</div>
@endsection
