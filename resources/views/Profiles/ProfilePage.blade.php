<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

    <div class="container col-md-offset-1">
        <div class="row">
              <div class="col-md-8">
                <h1 style="font-weight: bolder">{{"$Profiles->Profile_Description"}}</h1>
            <img src="../storage/uploads/{{$Profiles->Profile_Pic_path}}" alt="" style="width: 100%;height:400px;padding:10px">
            <div class="card-body">
              <div>
                <h2>Profile Detail</h2>
                <h3 style="padding: 20px;border:1px solid #B99566">
                  <b>Hello,</b><br>
                  Thanks For Coming In this Profile. <br>
                  First Of All My Name Is <b>{{"$Profiles->Profile_Description"}}</b>.
                  I am Specialized In <b>{{"$Profiles->Specialized_In"}}</b> & 
                  I have <b>{{"$Profiles->Profile_Experince"}}</b> Years Experience Alhamdulliah.
                  The Total Cases that I have Completed in <b>{{"$Profiles->Specialized_In"}}</b> is 
                  <b>{{"$Profiles->Total_cases"}}</b>. 
                  Whatever Your Issue Have I will Solve it With Full Passion,Confidence & Loyalty
                  & will Try to Give Justice To You. <br>
                 <b>Thanks.</b> 
                </h3>
              </div>
             
                <h1><b>{{"$Profiles->Profile_Description"}}</b></h1>
        <h2><b> Total Experince:</b> {{"$Profiles->Profile_Experince"}} Years</h2>
        <h2><b>Specialized In : </b>{{"$Profiles->Specialized_In"}}</h2>
        <h2><b>Total Cases Completed : </b>{{"$Profiles->Total_cases"}}</h2>
        </div>

<br>
<br>
      </div>
      <style>
        table,tr,td{
          border: 1px solid #B99566;
        }
        tr,td,th{
          padding:20px
        }
        th{
          text-align: center;
          font-weight:100
        }
        td{
          font-weight: bold
        }
        .btn{
          background: #B99566;
          color: white;
          padding: 10px;
          width: 100%;
          font-size: 20px
        }
        .btn:hover{
          color: white
        }
      </style>
      <table style="padding: 10px;margin-top:542px">
        <tr>
          <th><h4>Profile Info</h4></th>
        </tr>
        <tr>
          <td>Name</td>
          <td>{{"$Profiles->Profile_Description"}}</td>
        </tr>
        <tr>
          <td>Experience</td>
          <td>{{"$Profiles->Profile_Experince"}}</td>
        </tr>
        <tr>
          <td>Specialized In</td>
          <td>{{"$Profiles->Specialized_In"}}</td>
        </tr>
        <tr>
          <td>Total Cases Completed</td>
          <td>{{"$Profiles->Total_cases"}}</td>
        </tr>
      </table>
    </div>
  


    <a class="btn" href="{{"/create/appointment/".$Profiles->id}}">Book An Appointment</a>


    <br>
    <br>
    <br>

    
</body>
</html>


