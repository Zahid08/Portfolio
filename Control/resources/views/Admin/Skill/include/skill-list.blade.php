
<div class="box">
    <div class="box-header">
        <h3 class="box-title"></h3>
    </div>

    <!-- /.box-header -->
    <div class="box-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
                <th>Skill Name</th>
                <th>Percntage</th>
                <th>Status</th>
                <th>Action</th>

            </tr>
            </thead>
            <tbody>

            @foreach($skills as $skill)
                <tr>

                    <td>{{$skill->skill_name}}</td>
                    <td>{{$skill->percentage}}</td>
                    <td>
                        @if($skill->publication_status==1)
                        <h6 class="bg-success">Active</h6>
                    @else
                            <h6 class="btn-danger">DeActive</h6>
                        @endif
                    </td>
                         <td>
                             @if($skill->publication_status == 1)
                                 <a href="{{ url('/skill/unpublished/'.$skill->id) }}" class="btn btn-info btn-xs" title="Published">
                                     <span class="glyphicon glyphicon-arrow-up"></span>
                                 </a>
                             @else
                                 <a href="{{ url('/skill/published/'.$skill->id) }}" class="btn btn-warning btn-xs" title="Unpublished">
                                     <span class="glyphicon glyphicon-arrow-down"></span>
                                 </a>
                             @endif

                        <a href="{{ url('/skill/Remove/'.$skill->id) }}" onclick="return confirm('Are you sure to delete this !!!');" class="btn btn-danger btn-xs" title="Delete">
                            <span class="glyphicon glyphicon-trash"></span>
                        </a>

                    </td>

                </tr>
@endforeach

            </tbody>

        </table>
    </div>
    <!-- /.box-body -->
</div>