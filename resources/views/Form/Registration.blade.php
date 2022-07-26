<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{url ('css/registration.css') }}">
    <title>Registration Form</title>
</head>
<body>
<!-- studnum,studtype,courseid,yr,sec,term,sy,datereg,totfee,advising,regstatus -->
<div class="header">
    <img src="images/bcc_logo.png" alt="" style="margin:auto;
    display: block;">
</div>
<div class="container">
    <form action="/registration" method="POST">
        @csrf
        <span class="title">BCC Vaccination Registration System</span>
        <div class="form-control">
            <label for="">Student Number:</label>
            <input type="text" name="studentNumber" placeholder="Please Input your Student Number" value="{{old('studentNumber')}}">
            @error('studentNumber')
            <div class="error">
                <span>{{$message}}</span>
            </div>
            @enderror
        </div>
        <div class="form-control">
            <label for="">Student Type:</label>
            <select name="studentType">
                <option value="Old Student">Old Student</option>
                <option value="Transferee">Transferee</option>
            </select>
        </div>
        <div class="form-control">
            <label for="">Course Id:</label>
            <select name="courseId">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
            </select>
        </div>
        <div class="form-control">
            <label for="">Year:</label>
            <select name="sy">
                <option value="1st">1st Year</option>
                <option value="2nd">2nd Year</option>
                <option value="3rd">3rd Year</option>
                <option value="4th">4th Year</option>
            </select>
        </div>
        <div class="form-control">
            <label for="">Section:</label>
            <select name="section">
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="C">C</option>
                <option value="D">D</option>
                <option value="E">E</option>
            </select>
        </div>
        <div class="form-control">
            <label for="">Tuition Fee:</label>
            <input type="text" name="tuitionFee" placeholder="Please Input your Tuition Fee" value="{{old('tuitionFee')}}">
            @error('tuitionFee')
            <div class="error">
                <span>{{$message}}</span>
            </div>
            @enderror
        </div>
        <div class="form-control">
            <label for="">Advising Status:</label>
            <input type="text" name="advisingStatus" placeholder="Please Input your Advising Status" value="{{old('advisingStatus')}}">
            @error('advisingStatus')
            <div class="error">
                <span>{{$message}}</span>
            </div>
            @enderror
        </div>
        <div class="form-control" style="margin-bottom:15px">
            <label for="">Registration Status:</label>
            <input type="text" name="registrationStatus" placeholder="Please Input your Registration Status" value="{{old('registrationStatus')}}">
            @error('registrationStatus')
            <div class="error">
                <span>{{$message}}</span>
            </div>
            @enderror
        </div>
        <button class="btn">Register </button>
        <button type="reset" class="btn"> Reset </button>
    </form>
</div>
<div class="footer-copyright text-left py-3">© COPYRIGHT 2022. ALL RIGHTS RESERVED.
</div>
</body>
</html>