<h3 style="text-align: right;color: red;margin-right: 20px;"><i class="fa fa-envelope" aria-hidden="true"></i> Reply Comments </h3>
<form id="infoForm" action="{{url('/comment/Edit-comment')}}" class="form-horizontal"  method="POST" enctype="multipart/form-data">
    {{csrf_field()}}

    <div id="phDiv" class="form-group">
        <label class="control-label col-xs-3" for="name">Category:</label>
        <div class="col-xs-5" style=" border-radius: 25px;">
            <input name="email" value="{{$comments->email}}" type="text" class="form-control" id="name" placeholder="Enter skill name" readonly>
        </div>
    </div>


    <div id="phDiv" class="form-group">
        <label class="control-label col-xs-3" for="name">User Email:</label>
        <div class="col-xs-5" style=" border-radius: 25px;">

            <textarea class="form-control" name="message" cols="10" rows="10">

            </textarea>
           </div>
    </div>

    <br>
    <div class="form-group">
        <div class="col-xs-offset-3 col-xs-9">
            <input id="submit" type="submit" class="btn btn-primary" value="Submit">

        </div>
    </div>
</form>
<!-- Modal -->

