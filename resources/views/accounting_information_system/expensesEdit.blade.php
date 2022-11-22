<html>
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
        <!-- FOR BOOTSTRAP -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
         integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
         integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
         crossorigin="anonymous"></script>

   </head>

   <style>
        .rectangle{
          height: 65px;
          width: auto;
          background-color: #1840C4;
          margin-top: auto;
          margin-left: auto;
          margin-right: auto;
        }

      .tranquil1{
        height:126.2745132446289px;
        width:150.5px;
        border: none;
        position: fixed;
        top: 21;
      }

      .expenses{
        font-size: 45px;
        font-family: 'Times New Roman', Times, serif;
        margin-left: 10px;
      }

      .bootstrap-iso {
        float: right;
        margin-top: 25px;
        margin-bottom: 15px;
        margin-right: 20px;
      }


      .line {
            content: " ";
            display: block;
            border-bottom: 0.5px solid #9E9E9E;
      }

      .section1{
        margin-top: 20px;
        background-color:#e5e5e5;
        height:468px;
        width:247px;
      }
      
      .empty1{
        background-color:#ffffff;
        height:415px;
        width:233px;
        border:1px solid #000000;
        left:14px;
        top:53px;
        position:absolute;
      }

      .rectangle54{
        background-color:#e1dfd2;
        height:40px;
        width:233px;
        border:1px solid #000000;
        top:13px;
        left:14px;
        position:absolute;
      }

      .selectWrapper{
        border-radius:36px;
        display:inline-block;
        overflow:hidden;
        background:#cccccc;
        border:2px solid black;
        background-color:#e1dfd2;
        top:163px;
        left:800px;
        position:absolute;
      }

  .selectBox{
    width:140px;
    height:40px;
    border:0px;
    font-size: large;
    outline:none;
    font-weight: bold;
    text-align: center;
  }

  .selectWrapper2{
    border-radius:36px;
    display:inline-block;
    overflow:hidden;
    background:#cccccc;
    border:2px solid black;
    background-color:#e1dfd2;
    top:163px;
    left:970px;
    position:absolute;
  }
  .selectBox2{
    width:140px;
    height:40px;
    border:0px;
    font-size: large;
    outline:none;
    font-weight: bold;
    text-align: center;
  }

  .selectWrapper3{
    border-radius:36px;
    display:inline-block;
    overflow:hidden;
    background:#cccccc;
    border:2px solid black;
    background-color:#e1dfd2;
    top:163px;
    left:1140px;
    position:absolute;
  }
  .selectBox3{
    width:140px;
    height:40px;
    border:0px;
    font-size: large;
    outline:none;
    font-weight: bold;
    text-align: center;
  }

  table, th, td {
    border:1px solid black;
    border-collapse: collapse;
    font-family: Arial;
    font-weight: bold;
    height: 33px;
    margin: -70px 0 0 200px;
  }

  .rectangle45
{
position:absolute;
background-color:#e1dfd2;
height:30px;
width:900px;
filter:drop-shadow(0px 4px 4px rgba(0,0,0,0.25));
top: 600;
left: 227;
font-family: Arial;
font-weight: bold;
}

.expenses1
{
position:absolute;
color:#000000;
text-align:left;
vertical-align:text-top;
font-size:17px;
font-family: Arial;
line-height:11%;
width:330px;
top: 615;
right: 800;
font-weight:bolder;
}
        .total{
            width:70%;
            height: 50px;
            font-size: 20px;
            margin top: 10px;
            margin-left: auto;
            margin-right: auto;
            padding: 5px 25px;
            background-color: #E1DFD2;
            box-shadow: 0 10px 10px 0 #E1DFD2;
            text-align: left;
            font-family: 'Times New Roman', Times, serif;
        }
</style>

<body>
        <div class="rectangle">
            <img src="https://drive.google.com/uc?export=download&id=1N-yj2KqeeyVd3t_RLgeaO2HGI5i94h4P" style="position:absolute; left:25px; top:10px" height="45px" width="100px">
        </div>
        

    <div id='expenses' class='expenses'>
        EXPENSES</div>
    
    <!--Line-->
    <div class="line"></div>

    <!--Update-->
    Latest Update....
    
    <div class="bootstrap-iso">
           <form method="post">
               <input type="date" id="date" name="date">
               <button style="background-color: #E1DFD2" class="btn btn-light" name="search" type="search">Search</button>
           </form>
    </div>
    
    <!--Tables-->
    <table style="width:70%; text-align:center"> 
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
     
      <!--Total Computation-->
      <div class ="total my-3">
      <th>Total Expenses:</th>
        
   </body>
</html>