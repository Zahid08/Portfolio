<h3 style="text-align: right;color: red;margin-right: 20px;"><i class="fa fa-envelope" aria-hidden="true"></i> Add Skill </h3>
<form id="infoForm" action="{{url('/skill/new-skill-add')}}" class="form-horizontal"  method="POST" enctype="multipart/form-data">
    {{csrf_field()}}
    <div id="phDiv" class="form-group">
        <label class="control-label col-xs-3" for="name">Skill Name:</label>
        <div class="col-xs-5" style=" border-radius: 25px;">
            <input name="skill_name" type="text" class="form-control" id="name" placeholder="Enter skill name">
        </div>
    </div>

    {{--phone no--}}
    <div id="phDiv" class="form-group">
        <label class="control-label col-xs-3" for="phoneNumber">Percentage:</label>
        <div class="col-xs-5">
            <input type="tel" name="percentage" class="form-control" id="Percentage" placeholder="Percentage%">
        </div>
    </div>

    {{--publication status--}}
    <div id="phDiv" class="form-group">
        <label class="control-label col-xs-3" for="name"> Status:</label>
        <div class="col-xs-5" >
            <select class="form-control" name="publication_status">
                <option>-------Select Status----</option>
                <option value="1">ACTIVE</option>
                <option value="0">DE-ACTIVE </option>
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
