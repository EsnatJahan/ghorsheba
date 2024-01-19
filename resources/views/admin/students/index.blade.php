<x-base-layout>
    <div class="panel-body">
        <div style="width:100%;margin:auto;max-width:1000px;">
            <div class="row">
                <div style="float:left">
                    <h3>Students</h3>
                </div>
                <div style="float:right">
                    <a href="{{route('admin.students.create')}}" class="btn btn-success">Add Student</a>
                </div>
            </div>
            @if(Session::has('message'))
                <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
            @endif
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Student Id</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Room No.</th>
                        <th>Created At</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($students as $student)
                    <tr>
                        <td>{{$student->id}}</td>
                        <td>{{$student->name}}</td>
                        <td>{{$student->student_id}}</td>
                        <td>{{$student->email}}</td>
                        <td>{{$student->phone}}</td>
                        <td>{{$student->room_no}}</td>
                        <td>{{date('d-m-Y',strtotime($student->created_at))}}</td>
                        <td>
                            {{-- <a href="/admin/order-view/{{$student->id}}" class="btn btn-primary">View</a> --}}
                            <a href="{{route('admin.students.edit',$student->id)}}" class="btn btn-warning">edit</a>
                            {{-- <a href="{{route('admin.students.destroy',$student->id)}}" class="btn btn-danger">Delete</a> --}}
                        </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
   </div>
</x-base-layout>