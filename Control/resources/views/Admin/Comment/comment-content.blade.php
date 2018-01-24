
@extends('Admin.master')

@section('title')
    AdminPanel
@endsection
@section('contentone')
    <div class="box box-info">
        <div class="box-header with-border">
            <i class="fa fa-object-ungroup" aria-hidden="true"></i> <h3 class="box-title">Comment Information</h3>
        </div>
    </div>
    <hr>
    <ul class="nav nav-tabs">
        <li class="active"><a id="home" data-toggle="tab" href="#projectlist"><i class="fa fa-list"></i> <span>Comment List</span></a></li>
    </ul>
    <div class="tab-content">
        <div id="projectlist" class=" tab-pane fade in active">

            @include('Admin.Comment.include.comment')

        </div>
    </div>

@endsection

