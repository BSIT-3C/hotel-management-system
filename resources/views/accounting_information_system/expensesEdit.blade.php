<html>
   <head>

   <link href="{{ URL::asset('css/expensesEdit.css') }}" rel="stylesheet" type="text/css">>
   </head>


   <body>
    <div id='rectangle1' class='rectangle1'> </div>
    <img src="{{asset('images/tranquil.png')}}" class="tranquil1">

    <div id='expenses' class='expenses'>
        EXPENSES</div>
    <div id='search' class='search'> </div>
    <img src="{{asset('images/search.png')}}" class="search">

    <hr>

         <div id='latestupdate' class='latestupdate'>
                Latest Update...</div>
                   
                <div class="selectWrapper">
                    <select class="selectBox">
                    <option>Month</option>                    
                  </select>
                  </div> 
                  
                  <div class="selectWrapper2">
                    <select class="selectBox2">
                    <option>Day</option>                    
                  </select>
                  </div>    
                  
                  <div class="selectWrapper3">
                    <select class="selectBox3">
                    <option>Year</option>                    
                  </select>
                  </div>
                  <table style="width:70%"; "background-color:"#E1DFD2" align="center"> 

                    <tr style="background-color:#E1DFD2;color:black;">
                     <th>Date</th>
                     <th width="300px">Category</th>
                     <th>Amount</th>
                   </tr>
                   <tr>
                     <td rowspan="9"></td>
                     <td rowspan="2">Pre Defined Expenses</td>
                     <td></td>
                 
                   </tr>
                   <tr>
                     <td></td>
                    
                 
                     
                   </tr>
                  <tr>
                     <td rowspan="2">Maintenance</td>
                     <td></td>
                 
                     
                   </tr>
                  <tr>
                     <td></td>
                    
                 
                     
                   </tr>
                  <tr>
                     <td rowspan="2">Total Salary</td>
                     <td></td>
                 
                     
                   </tr>
                  <tr>
                     <td></td>
                  
                 
                     
                   </tr>
                 
                  <tr>
                     <td rowspan="2">Expenses</td>
                     <td></td>
                 
                     
                   </tr>
                  <tr>
                     <td></td>
                    </tr>
                 
                 </table>     

                 <div id='rectangle45' class='rectangle45'>
                </div>
                
                <div id='expenses1' class='expenses1'>
                  Total Expenses:</div>
        
   </body>
</html>