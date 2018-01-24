
<div class="box">
    <div class="box-header">
        <h3 class="box-title"></h3>
    </div>

    <!-- /.box-header -->
    <div class="box-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Message</th>
                <th>Action</th>

            </tr>
            </thead>
            <tbody>
@foreach($comments as $comment)
            <tr>

                <td>{{$comment->name}}</td>
                <td>{{$comment->email}}</td>
                <td>{{$comment->project_details}}</td>

                <td>
                    <a href="{{url('/comment/Edit/'.$comment->id)}}" class="btn btn-primary btn-xs" title="Reply">
                        <span class="glyphicon glyphicon-record">REPLY</span>
                    </a>

                    <a href="{{ url('/comment/Remove/'.$comment->id) }}" onclick="return confirm('Are you sure to delete this !!!');" class="btn btn-danger btn-xs" title="Delete">
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