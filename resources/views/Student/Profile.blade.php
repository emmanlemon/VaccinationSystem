<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="{{ url('css/student/show.css')}}">
@extends('Molecule.footer')
@section('footer')
@endsection

@extends('Molecule.header')
@section('content')
<body style="min-height: 100vh;"> 
    <p>{{ $id->studentNumber }}</p>
</body>
@endsection
    