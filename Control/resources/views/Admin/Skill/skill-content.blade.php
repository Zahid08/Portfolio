
@extends('Admin.master')

@section('title')
    AdminPanel
@endsection
@section('contentone')
    <div class="box box-info">
        <div class="box-header with-border">
            <i class="fa fa-object-ungroup" aria-hidden="true"></i> <h3 class="box-title">Skill Information</h3>
        </div>
    </div>
    <hr>
    <ul class="nav nav-tabs">
        <li class="active"><a id="home" data-toggle="tab" href="#skilllist"><i class="fa fa-list"></i> <span>Skill List</span></a></li>
        <li><a id="settings" data-toggle="tab" href="#addskill">  <i class="fa fa-plus"></i> <span>Add Skill</span> </a></li>
    </ul>
    <div class="tab-content">
        <div id="skilllist" class=" tab-pane fade in active">

            @include('Admin.Skill.include.skill-list')

        </div>
        <div id="addskill" class=" tab-pane fade">

            @include('Admin.Skill.include.add-skill')
        </div>


    </div>

@endsection

