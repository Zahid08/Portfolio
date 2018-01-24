<h3 style="text-align: right;color: red;margin-right: 20px;"><i class="fa fa-envelope" aria-hidden="true"></i> Add Project </h3>
<form id="infoForm" action="{{url('/project/new-project-add')}}" class="form-horizontal"  method="POST" enctype="multipart/form-data">
    {{csrf_field()}}

    <div id="phDiv" class="form-group">
        <label class="control-label col-xs-3" for="name"> Type Of Project:</label>
        <div class="col-xs-5" >
            <select class="form-control" name="Type_project">
                @foreach($projects as $project)
                <option value="{{$project->category_name}}">{{$project->category_name}}</option>
                    @endforeach

            </select>
        </div>
    </div>


    <div id="phDiv" class="form-group">
        <label class="control-label col-xs-3" for="name">Project Name:</label>
        <div class="col-xs-5" style=" border-radius: 25px;">
            <input name="project_name" type="text" class="form-control" id="name" placeholder="Enter skill name">
        </div>
    </div>

    <div id="zDiv" class="form-group">
        <label class="control-label col-xs-3" for="ZipCode">Image Selected:</label>
        <div class="col-xs-5">
            <input type="file" class="form-control" name="image" accept="/image/*/">
        </div>
    </div>

    <div id="zDiv" class="form-group">
        <label class="control-label col-xs-3" for="ZipCode">Sub Image Selected:</label>
        <div class="col-xs-5">
            <input type="file" class="form-control" name="sub_image[]" accept="/image/*/"  multiple >
        </div>
    </div>


    {{--phone no--}}
    <div id="phDiv" class="form-group">
        <label class="control-label col-xs-3" for="phoneNumber">Description:</label>
        <div class="col-xs-5">

            <textarea name="link" class="form-control" ></textarea>
        </div>
    </div>

    {{--publication status--}}
    <div id="phDiv" class="form-group">
        <label class="control-label col-xs-3" for="name"> Status:</label>
        <div class="col-xs-5" >
            <select class="form-control" name="publication_status">
                <option>-------Select Status----</option>
                <option value="1">PUBLISHED</option>
                <option value="0">UNPUBLISHED </option>
            </select>
        </div>
    </div>

    <br>
    <div class="form-group">
        <div class="col-xs-offset-3 col-xs-9">
            <input id="submit" type="submit" class="btn btn-primary" value="Submit">
            <input id="reset" type="reset" class="btn btn-default" value="Reset">
        </div>
    </div>
</form>
<!-- Modal -->

