@extends('theme')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register | Volvo</title>
</head>
<body>
    @section('content')
    <br>
    <center><font color="black" size="7">Get Connected with Volvo</font></center>
    <br>
    <br>
    <div class="container">
        <div class="row">
            <div class="col col-12 col-sm-6 col-md-6 col-lg-6">
                <center><font color="black" size="6"><u>Register Here</u></font></center>
                <br>
                <table class="table table-borderless">
                    <tr>
                        <td>First name</td>
                        <td><input type="text" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Last name</td>
                        <td><input type="text" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Gender</td>
                        <td><input type="radio" name="flexRadioDefault" class="form-check-input"> Male&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="flexRadioDefault" class="form-check-input"> Female</td>
                    </tr>
                    <tr>
                        <td>Address</td>
                        <td><textarea cols="10" rows="5" class="form-control"></textarea></td>
                    </tr>
                    <tr>
                        <td>DOB</td>
                        <td><input type="date" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td><input type="text" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Phone no:</td>
                        <td><input type="text" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Username</td>
                        <td><input type="text" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td><input type="password" class="form-control"></td>
                    </tr>
                    <tr>
                        <td>Confirm Password</td>
                        <td><input type="text" class="form-control"></td>
                    </tr>
                    <tr>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><button class="btn btn-outline-success">Register</button></td>
                    </tr>
                </table>
            </div>
            <div class="col col-12 col-sm-6 col-md-6 col-lg-6">
            <center><font color="black" size="6"><u>Sign in</u></font></center>
            <br>
            <table class="table table-borderless">
                <tr>
                    <td>Username</td>
                    <td><input type="text" class="form-control"></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="password" class="form-control"></td>
                </tr>
                <tr>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                    <td><button class="btn btn-outline-primary">Log in</button></td>
                </tr>
            </table>
            </div>
        </div>
    </div>
    @endsection
</body>
</html>