
@extends('Admin.master')

@section('title')
    AdminPanel
@endsection
@section('contentone')
    <div class="box box-info">
        <div class="box-header with-border">
            <i class="fa fa-object-ungroup" aria-hidden="true"></i> <h3 class="box-title">Project Information</h3>
        </div>
    </div>
    <hr>
    <ul class="nav nav-tabs">
        <li class="active"><a id="home" data-toggle="tab" href="#projectlist"><i class="fa fa-list"></i> <span>Project List</span></a></li>
        <li><a id="settings" data-toggle="tab" href="#addprtypeofproject">  <i class="fa fa-plus"></i> <span>Add Type Of Project</span> </a></li>
        <li><a id="settings" data-toggle="tab" href="#addproject">  <i class="fa fa-plus"></i> <span>Add Project List</span> </a></li>

    </ul>
    <div class="tab-content">
        <div id="projectlist" class=" tab-pane fade in active">

            @include('Admin.Project.include.manage-project')

        </div>
        <div id="addprtypeofproject" class=" tab-pane fade">

            @include('Admin.Project.include.add-typeof-project')
        </div>

        <div id="addproject" class=" tab-pane fade">

            @include('Admin.Project.include.add-project-list')
        </div>


    </div>

@endsection

