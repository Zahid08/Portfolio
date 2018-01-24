<div class="box">
    <div class="box-header">
        <h3 class="box-title"></h3>
    </div>

    <!-- /.box-header -->
    <div class="box-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
                <th>Project Name</th>
                <th>Image</th>
                <th>Description</th>
                <th>TypeofPrjoect</th>
                <th>Status</th>
                <th>Action</th>

            </tr>
            </thead>
            <tbody>
@foreach($portolios as $portolio)
            <tr>
                <td>{{$portolio->project_name}}</td>
                <td>
                <img src="{{$portolio->image}}" alt="" width="100" height="50">
                </td>
                <td>{{$portolio->link}}</td>
                <td>{{$portolio->Type_project}}</td>
                <td>{{$portolio->publication_status}}</td>

                <td style="width: 100px;">

                    @if($portolio->publication_status == 1)
                        <a href="{{ url('/portfolio/unpublished/'.$portolio->id) }}" class="btn btn-info btn-xs" title="Published">
                            <span class="glyphicon glyphicon-arrow-up"></span>
                        </a>
                    @else
                        <a href="{{ url('/portfolio/published/'.$portolio->id) }}" class="btn btn-warning btn-xs" title="Unpublished">
                            <span class="glyphicon glyphicon-arrow-down"></span>
                        </a>
                    @endif

                        <a href="" class="btn btn-primary btn-xs" title="Edit">
                            <span class="glyphicon glyphicon-edit"></span>
                        </a>

                    <a href="{{ url('/portfolio/Remove/'.$portolio->id) }}" onclick="return confirm('Are you sure to delete this !!!');" class="btn btn-danger btn-xs" title="Delete">
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