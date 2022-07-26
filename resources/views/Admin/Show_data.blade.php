<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{url ('css/show_data.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
</head>
<body>
    <div class="information" style="display: grid; place-items:center;">
        <h1 style="display:inline-block;">Welcome Our Admin!!</h1>
        <p>{{ $id->username }}</p>

    </div>
    <div class="create_teacher">
        <div class="Teacher">
            <a href="{{ url('admin/create') }}" style="font-size: 1.2em;">Add Student</a>
            <a href="{{ route('logout') }}" style="color: rgb(0, 0, 0); text-decoration: none; text-transform: uppercase; font-size: 1.25em; margin: 1% 0;">Logout</a>
        </div>
    </div>
    <div class="container_table">
      <span class="title">BCC Vaccination Data</span>
      <table class="table" style="margin-bottom: 200px;">
        <thead>
          <tr>
            @if (count($data) == 0)
            <p style="font-size: 2em; color: red; min-height: 15vh;">No Data Available</p>
            @else
            @if(Session::has('success'))
            <div class="alert alert-success">{{ Session::get('success') }}</div>
            @endif
            @if(Session::has('update'))
            <div class="alert alert-success">{{ Session::get('update') }}</div>
            @endif
            @if(Session::has('msg'))
            <div class="alert alert-danger">{{ Session::get('msg') }}</div>
            @endif
            <th scope="col">#</th>
            <th scope="col">Student Number</th>
            <th scope="col">Student Type</th>
            <th scope="col">Course Id</th>
            <th scope="col">Year</th>
            <th scope="col">Section</th>
            <th scope="col">Date Created</th>
            <th scope="col">Tuition Fee</th>
            <th scope="col">Advising Status</th>
            <th scope="col">Registration Status</th>
            <th scope="col" colspan="2">Actions</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($data as $data)
          <tr>
            <td>{{ $data->id }}</td>
            <td>{{ $data->studentNumber }}</td>
            <td>{{ $data->studentType }}</td>
            <td>{{ $data->courseId}}</td>
            <td>{{ $data->sy}} Year</td>
            <td>{{ $data->section}}</td>
            <td>{{ $data->created_at}}</td>
            <td>Php {{ $data->tuitionFee }}.00</td>
            <td>{{ $data->advisingStatus }}</td>
            <td>{{ $data->registrationStatus}}</td>
            <td><a href="/admin/{{ $data->id }}" class="button"><i class="fa fa-edit" style="font-size:36px"></i></a></td>
            <td><a href="/admin/delete/{{ $data->id }}" class="button"><i class="fa fa-trash" style="font-size:36px"></i></a></td>
          </tr>
          @endforeach        
          @endif
        </tbody>
      </table>
    </div>
    
</body>
</html>