<!DOCTYPE html>
<html>
<head>
    <title>Laravel 8 Forms Tutorial</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha512-MoRNloxbStBcD8z3M/2BmnT+rg4IsMxPkXaGh2zD6LGNNFE80W3onsAhRcMAMrSoyWL9xD7Ert0men7vR8LUZg==" crossorigin="anonymous" />
 </head>
<body>
<div class="container mt-3 mb-3">
 
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
 
    @if ($message = Session::get('success'))
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>{{ $message }}</strong>
        </div>
    @endif
 
    <h3>Student Registration Form</h3>
    <form action="{{ url('student/store') }}" method="POST" enctype="multipart/form-data">
 
        @csrf
 
        <div class="form-group">
            <label>Title</label>
            <select class="form-control" name="title" id="title">
                <option value="">--</option>
                <option value="mr">Mr.</option>
                <option value="ms.">Ms.</option>
            </select>
        </div>
 
        <div class="form-group">
            <label>Name</label>
            <input type="text" class="form-control" name="name" id="name">
        </div>
 
        <div class="form-group">
            <label>Birth Date</label>
            <input type="date" class="form-control" name="bday" id="bday">
        </div>
 
        <div class="form-group">
            <label>Age</label>
            <input type="number" class="form-control" name="age" id="age">
        </div>
 
        <div class="form-group">
            <label>Gender</label>
                <div class="custom-control custom-radio custom-control-inline">
                    <input class="custom-control-input" type="radio" value="Male" id="male" name="gender">
                    <label class="custom-control-label" for="male">Male</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input class="custom-control-input" type="radio" value="Female" id="female" name="gender">
                    <label class="custom-control-label" for="female">Female</label>
                </div>
				<div class="custom-control custom-radio custom-control-inline">
                    <input class="custom-control-input" type="radio" value="Agender" id="Agender" name="gender">
                    <label class="custom-control-label" for="Agender">Agender</label>
                </div>
				<div class="custom-control custom-radio custom-control-inline">
                    <input class="custom-control-input" type="radio" value="Androgynous" id="Androgynous" name="gender">
                    <label class="custom-control-label" for="Androgynous">Androgynous</label>
                </div>
				<div class="custom-control custom-radio custom-control-inline">
                    <input class="custom-control-input" type="radio" value="Bigender" id="Bigender" name="gender">
                    <label class="custom-control-label" for="Bigender">Bigender</label>
                </div>
				<div class="custom-control custom-radio custom-control-inline">
                    <input class="custom-control-input" type="radio" value="Demiboy" id="Demiboy" name="gender">
                    <label class="custom-control-label" for="Demiboy">Demiboy</label>
                </div>
				<div class="custom-control custom-radio custom-control-inline">
                    <input class="custom-control-input" type="radio" value="Demigirl" id="Demigirl" name="gender">
                    <label class="custom-control-label" for="Demigirl">Demigirl</label>
                </div>
				<div class="custom-control custom-radio custom-control-inline">
                    <input class="custom-control-input" type="radio" value="Genderfluid" id="Genderfluid" name="gender">
                    <label class="custom-control-label" for="Genderfluid">Genderfluid</label>
                </div>
				<div class="custom-control custom-radio custom-control-inline">
                    <input class="custom-control-input" type="radio" value="Intersex" id="Intersex" name="gender">
                    <label class="custom-control-label" for="Intersex">Intersex</label>
                </div>
				<div class="custom-control custom-radio custom-control-inline">
                    <input class="custom-control-input" type="radio" value="Polygender" id="Polygender" name="gender">
                    <label class="custom-control-label" for="Polygender">Polygender</label>
                </div>
				<div class="custom-control custom-radio custom-control-inline">
                    <input class="custom-control-input" type="radio" value="Third Gender" id="Third Gender" name="gender">
                    <label class="custom-control-label" for="Third Gender">Third Gender</label>
                </div>
				<div class="custom-control custom-radio custom-control-inline">
                    <input class="custom-control-input" type="radio" value="Mx (Mix)" id="Mx (Mix)" name="gender">
                    <label class="custom-control-label" for="Mx (Mix)">Mx (Mix)</label>
                </div>
        </div>
 
        <div class="form-group">
            <label>Phone</label>
            <input type="text" class="form-control" name="phone" id="phone">
        </div>
 
        <div class="form-group">
            <label>Address</label>
            <textarea class="form-control" name="address" id="address" rows="4"></textarea>
        </div>
 
        <div class="form-group">
            <label>Email</label>
            <input type="email" class="form-control" name="email" id="email">
        </div>
 
        <div class="form-group">
            <label>Password</label>
            <input type="password" class="form-control" name="password" id="password">
        </div>
 
        <div class="form-group">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="1" id="t&c" name="t&c">
                <label class="form-check-label">
                    I agree to the terms and conditions.
                </label>
            </div>
            </div>
 
        <input type="reset" name="reset" value="Reset" class="btn btn-danger">
        <input type="submit" name="submit" value="Submit" class="btn btn-success">
 
    </form>
</div>
</body>
 
</html>