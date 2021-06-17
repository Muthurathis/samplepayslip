<?php
if(isset($_POST['submit']))
{
    $EmployeeId=$_POST['EmployeeId'];
    $Name=$_POST['Name'];
    $department=$_POST['department'];
    $designation=$_POST['designation'];
    $paydate=$_POST['paydate'];
    $dateofjoining=$_POST['dateofjoining'];
    $accountno=$_POST['accountno'];
    $daysworked=$_POST['daysworked'];
    $daysworked=$_POST['daysworked'];
if($daysworked>=29){
               
                $basicpay=(int)$_POST['basicpay'];


                $deallow=$basicpay*(50/100);
                $convallow=$basicpay*(20/100);
                $medallow=$basicpay*(15/100);
                $houserentallow=$basicpay*(40/100);
                $foodallow=$basicpay*(6/100);

                $totalearn=$basicpay+$deallow+$convallow+$medallow+$houserentallow+$foodallow;


                $proftax=$basicpay*(2/100);
                $provfund=$basicpay*(12/100);
                $emp_stat_ins=$basicpay*(0.0393);

                $totalded=$proftax+$provfund+$emp_stat_ins;

                $netpay=$totalearn-$totalded;
            
}
else{
    $basicpay=0;


    $deallow=$basicpay*(50/100);
    $convallow=$basicpay*(20/100);
    $medallow=$basicpay*(15/100);
    $houserentallow=$basicpay*(40/100);
    $foodallow=$basicpay*(6/100);

    $totalearn=$basicpay+$deallow+$convallow+$medallow+$houserentallow+$foodallow;


    $proftax=$basicpay*(2/100);
    $provfund=$basicpay*(12/100);
    $emp_stat_ins=$basicpay*(0.0393);

    $totalded=$proftax+$provfund+$emp_stat_ins;

    $netpay=$totalearn-$totalded;
    $daysworked='worked less than the required days';


}


}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./payout.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

</head>
<body class="bod" onload="myfunction()">
    <div id="wrapper">
        <div class="header">
            <h5>Pipeline road</h5>
            <h2>Pay slip for the period of february 2011 </h2>

        </div>
        <div id="mid" class="row">
            <div class="col-md-6 ">
                <table class="midunique_table">
                    <tr>
                        <td>Employee id</td>
                        <td>: <?php echo $EmployeeId?></td>
                    </tr>
                    <tr>
                        <td>Department</td>
                        <td>: <?php echo $department?></td>
                    </tr>
                    <tr>
                        <td>Paydate</td>
                        <td>: <?php echo $paydate?></td>
                    </tr>
                    <tr>
                        <td>Account number</td>
                        <td>: <?php echo $accountno ?></td>
                    </tr>
                    <!-- <tr>
                        <td></td>
                        <td></td>
                    </tr> -->
                </table>
            </div>
            <div class="col-md-6 ">
                <table class="midunique_table">
                    <tr>
                        <td>Name </td>
                        <td>: <?php echo $Name?> </td>
                    </tr>
                    <tr>
                        <td>Designation</td>
                        <td>: <?php echo $designation?> </td>
                    </tr>
                    <tr>
                        <td>Date of joining</td>
                        <td id="date1">: <?php echo $dateofjoining ?></td>
                    </tr>
                    <tr>
                        <td>Days worked</td>
                        <td>: <?php echo $daysworked?></td>
                    </tr>
                    
                </table>
               
            </div>
        </div>

        <div id="content">
            <div class="row">
             <div class="col-md-6  colmid1">
                   <div class="table1">
                    <table  class="unique-table" >
                    
                        <tr class="table_head" >
                            <th >Earning</th>
                            <th >Amount</th>
                        </tr>
                        <tr>
                            <td >Basic pay</td>
                            <td class="uniq"><?php echo $basicpay?></td>
                        </tr>
                   
                        <tr>
                            <td>Dearness Allowance</td>
                            <td id="d2"><?php echo $deallow?></td>
                        </tr>
                        <tr>
                            <td>Conveyance Allowance</td>
                            <td id="d3"><?php echo $convallow?></td>
                        </tr>
                        <tr>
                            <td>Medical Allowance</td>
                            <td id="d4"><?php echo $medallow?></td>
                        </tr>
                        <tr>
                            <td>House Rent Allowance</td>
                            <td id="d5"><?php echo $houserentallow?></td>
                        </tr>
                        <tr>
                            <td>Food Allowance</td>
                            <td id="d6"><?php echo $foodallow?></td>
                        </tr>
                        
                 
                    </table>
                    
                </div>
                   <div class="table_footer">
                       <table class="table_foot" >
                        <tr >
                        <td>Total Earnings (Rounded)</td>
                        <td id="d7"><?php echo $totalearn?></td>
                         </tr>
                </table>
                </div>   
                   
                   
                </div>
                <div class="col-md-6 colmid2">
                    <div class="table1">
                    <table class="unique-table">
                    
                        <tr style="border-top: 1px solid black;"  class="table_head" >
                            <th >Deduction</th>
                            <th  >Amount</th>
                        </tr>
                        <tr>
                            <td>Professional Tax</td>
                            <td id="d8"><?php echo $proftax?></td>
                        </tr>
                   
                        <tr>
                            <td>Provident Fund</td>
                            <td id="d9"><?php echo $provfund?></td>
                        </tr>
                        <tr>
                            <td>Employee State Insurance</td>
                            <td id="d10"><?php echo $emp_stat_ins?></td>
                        </tr>
                        
                 
                    </table>
                    </div>
                    <div  class="table_footer">
                        <table  class="table_foot">
                     <tr>
                         <td>Total Deductions (Rounded)</td>
                         <td id="d11"  style="border-right: 1px solid black;"><?php echo $totalded?></td>
                     </tr>
                 </table>
                  
                    
                </div>

            </div>
            
            </div>
        </div>

        <div class="row" id="net"  style="">
           <div class="col-md-6">
            <table id="netpaytable" >
                <tr> 
                    <td>Net pafdsfsdaafsdfay</td>
                    <td id="d12"><?php echo $netpay?></td>
                </tr>
            </table>
            </div>
        </div>
    </div>
   


<script src="payout.js"></script>



       <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
       <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
       <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
   
</body>
</html>