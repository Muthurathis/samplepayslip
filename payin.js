function formvalidation(){

    var    empid=document.forms['payslip'].EmployeeId.value;
    var empname=document.forms['payslip'].Name.value;
    var department=document.forms['payslip'].department.value;
    var designation=document.forms['payslip'].designation.value;
    var paydate=document.forms['payslip'].paydate.value;
    var dateofjoin=document.forms['payslip'].dateofjoining.value;


    var accountno=document.forms['payslip'].accountno.value;

    var daysworked=document.forms['payslip'].daysworked.value;
    var basicpay=document.forms['payslip'].basicpay.value;


var empidpattern=/^[0-9]+$/;

        if(empid=="" || (!empidpattern.test(empid)) )
        {       document.forms['payslip'].EmployeeId.focus();
    
                document.getElementById("small1").innerText="Employee id must be only numbers";
            return false;
        }
        else{
            document.getElementById("small1").innerText="";
        }
      
var empnamepattern=/^[a-zA-Z]{3,}$/;
        if(empname =="" || (!empnamepattern.test(empname)) )

        {  
                  document.forms['payslip'].Name.focus();
    
                document.getElementById("small2").innerText="Employee name must contain only alphabets";
            return false;
        }
        else{
            document.getElementById("small2").innerText="";
        }
        if(department ==""  )

        {  
                  document.forms['payslip'].department.focus();
    
                document.getElementById("small3").innerText="select the value";
            return false;
        }
        else{
            document.getElementById("small3").innerText="";
        }
        if(designation ==""  )

        {  
                  document.forms['payslip'].designation.focus();
    
                document.getElementById("small4").innerText="select the value";
            return false;
        }
        else{
            document.getElementById("small4").innerText="";
        }
        if(paydate ==""  )

        {  
                  document.forms['payslip'].paydate.focus();
    
                document.getElementById("small5").innerText="select the value";
            return false;
        }
        else{
            document.getElementById("small5").innerText="";
        }
        if(dateofjoin ==""  )

        {  
                  document.forms['payslip'].dateofjoining.focus();
    
                document.getElementById("small6").innerText="select the value";
            return false;
        }
        else{
            document.getElementById("small6").innerText="";
        }
        

  var accountnopattern=/^[0-9]{9,}$/;
  accountno=parseInt(accountno);
        if(accountno=="" || (!accountnopattern.test(accountno)))
        {  
                  document.forms['payslip'].accountno.focus();
    
                document.getElementById("small7").innerText="enter the valid account number";
                   return false;
        }
        else{
            document.getElementById("small7").innerText="";
        }

  var daysworkedpattern=/^[0-9]+$/;
    //  daysworked=parseInt(daysworked);
        if(daysworked =="" || !(daysworkedpattern.test(daysworked)) || daysworked>31  )

        {  
                  document.forms['payslip'].daysworked.focus();
    
                document.getElementById("small8").innerText="enter the valid days";
            return false;
        }
        else{
            document.getElementById("small8").innerText="";
        }
        

        var basicpaypattern=/^[0-9]{3,}$/;
    //  basicpay=parseInt(basicpay);
        
        if(basicpay =="" || !(basicpaypattern.test(basicpay))   )

        {  
                  document.forms['payslip'].basicpay.focus();
    
                document.getElementById("small9").innerText="enter the valid days";
            return false;
        }
        else{
            document.getElementById("small9").innerText="";
        }



}