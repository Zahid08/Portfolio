@extends('Admin.master')
@section('title')
    Admin | My Page
    @endsection
@section('contentone')

    <h1 style="margin-top: 200px;text-align :center;">Welcome {{Auth::user()->name}}</h1>
@endsection