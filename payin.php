<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <link rel="stylesheet" href="./payin.css">
</head>
<body>

    <div class="wrapper">
        <h3 class="head">Input for Pay Slip</h3>

        <form action="payslipout.php" name="payslip" method="POST" onsubmit="return formvalidation()">
            
            <div class="row">
                <div class="form-group col-md-6">
                  <label for="EmployeeId">Employee Id</label>
                  <input type="text" class="form-control" id="EmployeeId" name="EmployeeId" >
                  <small id="small1" style="color:red"></small>
                </div>
                <div class="form-group col-md-6">
                  <label for="Name">Name</label>
                  <input type="text" class="form-control" id="Name" name="Name" >
                  <small id="small2" style="color:red"></small>
                </div>
              </div>
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="department">Department</label>
                  <select  name="department" id="department" class="custom-select" >
                  <option value="">None</option>
                    <option value="Marketing">Marketing</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                  </select>
                  <small id="small3" style="color:red"></small>
                </div>
                <div class="form-group col-md-6">
                    <label for="designation">Designation</label>
                    <select  name="designation" id="designation" class="custom-select"  >
                    <option value="">None</option>
                      <option value="Marketing executive">Marketing executive</option>
                      <option value="2">Two</option>
                      <option value="3">Three</option>
                    </select>
                    <small id="small4" style="color:red"></small>
                  </div>
                
              </div>
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="paydate">Paydate</label>
                  <input type="date" name="paydate" id="paydate"  class="form-control" >
                  <small id="small5" style="color:red"></small>
                  
                 
                </div>
                <div class="form-group col-md-6">
                    <label for="dateofjoining">Date of joining</label>
                    <input type="date" name="dateofjoining" id="dateofjoining"  class="form-control" min='1997-01-01' max='2030-12-31' >
                    <small id="small6" style="color:red"></small>
                   
                  </div>
              </div>
              <div class="row">
                <div class="form-group col-md-6">
                  <label for="accountno">Account no</label>
                  <input type="password" class="form-control" id="accountno" name="accountno" >
                  <small id="small7" style="color:red"></small>
                </div>
                <div class="form-group col-md-6">
                  <label for="daysworked">Days worked</label>
                  <input type="text" class="form-control" id="daysworked" name="daysworked" >
                  <small id="small8" style="color:red"></small>
                </div>
              </div>
              <div class="row">
                <div class="form-group col-md-12">
                  <label for="basicpay">Basic pay</label>
                  <input type="text" class="form-control" id="basicpay" name="basicpay" >
                  <small id="small9" style="color:red"></small>
                </div>

              </div>

              
              <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>




    </div>
    <script src="./payin.js"></script>
      
           <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
           <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
           <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
       

</body>
</html>