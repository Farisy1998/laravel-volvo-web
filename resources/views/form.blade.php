@extends('theme')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form | Volvo Group</title>
</head>
<body>
    @section('content')
    <br>
    <center><font color="black" size="8">Volvo Contactless Program</font></center>
    <br>
    <br>
    <div class="container">
        <div class="row">
            <div class="col col-12 col-sm-8 col-md-8 col-lg-8">
                <div class="alert alert-warning" role="alert">
                    ! Please complete the information below, and a Volvo dealer will contact you.
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col col-12 col-sm-6 col-md-6 col-lg-6">
                <table class="table table-borderless">
                <tr>
                    <td></td>
                </tr>
                    <tr>
                        <td>Select a model</td>
                    </tr>
                    <tr>
                        <td><select class="form-control" name="models">
                            <option value="">--select--</option>
                            <option value="">XC40</option>
                            <option value="">XC60</option>
                            <option value="">XC90</option>
                            <option value="">XC90 plug-in hybrid</option>
                            <option value="">S60</option>
                        </select></td>
                    </tr>
                    <tr>
                        <td></td>
                    </tr>
                    <tr>
                        <td>First Name</td>
                        <td>Last Name</td>
                    </tr>
                    <tr>
                        <td><input type="text" class="form-control"></td>
                        <td><input type="text" class="form-control"></td>
                    </tr>
                    <tr>
                        <td></td>
                    </tr>
                    <tr>
                        <td>ZIP Code</td>
                    </tr>
                    <tr>
                        <td><input type="text" class="form-control" placeholder=" Six digits   eg:123456"></td>
                    </tr>
                    <tr>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Preferred Dealer</td>
                    </tr>
                    <tr>
                        <td><input type="text" class="form-control"></td>
                    </tr>
                    <tr>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                    </tr>
                    <tr>
                        <td><input type="text" class="form-control"></td>
                    </tr>
                    <tr>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Phone no:</td>
                    </tr>
                    <tr>
                        <td><input type="text" class="form-control"></td>
                    </tr>
                    <tr>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Preferred Contactless Mode</td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" class="form-chexk-input">&nbsp;&nbsp;&nbsp;Whats App Call</td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" class="form-chexk-input">&nbsp;&nbsp;&nbsp;Skype</td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" class="form-chexk-input">&nbsp;&nbsp;&nbsp;Google Duo</td>
                    </tr>
                    <tr>
                        <td><input type="checkbox" class="form-chexk-input">&nbsp;&nbsp;&nbsp;Facetime</td>
                    </tr>
                    <tr>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Preferred Date</td>
                    </tr>
                    <tr>
                        <td><input type="date" class="form-control"></td>
                    </tr>
                    <tr>
                        <td></td>
                    </tr>
                    <tr>
                        <td><button class="btn btn-outline-primary">Submit</button></td>
                    </tr>
                </table>
            </div>
        </div>
        <br>
        <hr>
        <br>
    </div>
    @endsection
</body>
</html>