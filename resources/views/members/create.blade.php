
@extends('layouts.app')

@section('head')
<style>
        .form-container {
            margin-top: 20px;
        }
        .form-control {
            margin-bottom: 15px; /* Adjust the spacing between inputs */
        }
        .btn {
            margin-top: 10px; /* Space above buttons */
        }
        .row {
            margin-bottom: 20px; /* Space between rows */
        }
    </style>
@endsection

@section('content')
    <div class="container form-container">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        
        <form action="{{ route('member_store') }}" method="POST">
            @csrf

            <div class="row">
                <div class="col">
                    <input name="first_name" type="text" class="form-control" placeholder="First name">
                </div>
                <div class="col">
                    <input name="last_name" type="text" class="form-control" placeholder="Last name">
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <input name="iamage" type="text" class="form-control" placeholder="image">
                </div>
                <div class="col">
                    <input name="position" type="text" class="form-control" placeholder="position">
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <input name="sallery" type="number" class="form-control" placeholder="sallery">
                </div>
                <div class="col">
                    <input name="age" type="number" class="form-control" placeholder="age">
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <input name="email" type="text" class="form-control" placeholder="email">
                </div>
                <div class="col">
                    <input name="joined_at" type="text" class="form-control" placeholder="joined_at">
                    <select class="form-control" name="gender">
                        <option value="male">male</option>
                        <option value="female">female</option>
                    </select>
                    <div class="mt-3">
                        <input type="submit" class="btn btn-sm btn-success" value="Create Member">
                        <a href="{{ route('member_index') }}" class="btn btn-sm btn-primary">Back</a>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
