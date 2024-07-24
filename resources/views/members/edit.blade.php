@extends('layouts.app')

@section('content')
    <div class="container">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        
        <form action="{{route('member_update', ['id'=> $member->id])}}" method="POST">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <input type="hidden" name="_method" value="PUT">

            <div class="row">
                <div class="col">
                        <input name="first_name" type="text" class="form-control" value="{{$member-> first_name}}" placeholder="First name">
                </div>
                <div class="col">
                    <input name="last_name" type="text" class="form-control" value="{{$member-> last_name}}" placeholder="Last name">
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <input name="iamage" type="text" class="form-control" value="{{$member-> iamage}}" placeholder="image">
                </div>
                <div class="col">
                    <input name="position" type="text" class="form-control" value="{{$member-> position}}" placeholder="position">
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <input name="sallery" type="number" class="form-control" value="{{$member-> sallery}}"placeholder="sallery">
                </div>
                <div class="col">
                    <input name="age" type="number" class="form-control" value="{{$member-> age}}" placeholder="age">
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <input name="email" type="text" class="form-control" value="{{$member-> email}}" placeholder="email">
                </div>
                <div class="col">
                    <input name="joined_at" type="text" class="form-control" value="{{$member-> joined_at}}" placeholder="joined_at">
                    <select class="form-control" name="gender">
                        <option value="male" {{$member->gender == 'male' ? 'selected' : ''}}>mele</option>
                        <option value="female" {{$member->gender == 'female' ? 'selected' : ''}}> female</option>
                    </select>
                    <input type="submit" class="btn btn-sm btn-success" value="Save member">
                    <a href="{{route('member_index')}}" class="btn btn-sm btn-primary">Back</a>
                </div>
            </div>
        </form>
    </div>
@endsection
