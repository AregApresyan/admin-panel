@extends('layouts.app')

@section('head')
 <style>
        .delete-button{
            margin-left: 10px;
        }
    </style>
 @endsection
@section('content')
    <div class="container">
        <table id="members_list_table">
            <thead>
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
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
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
                    <td>{{ Carbon\Carbon::parse($member->joined_at)->format('d-m-Y') }}</td>
                    <td>
                        <a class="btn btn-sm btn-primary" href="">Edit</a>
                        <a class="btn btn-sm btn-danger delete-button" href="">Delete</a>
                    </td>
                </tr>   
                @endforeach
            </tbody>
        </table>
    </div>
    <script>
        $(document).ready(()=>{
             $('#members_list_table').DataTable();
        })
       
    </script>
   
@endsection
