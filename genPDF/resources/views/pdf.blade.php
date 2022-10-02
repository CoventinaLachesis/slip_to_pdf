<link rel="stylesheet" href="{{ public_path('css/pdfstyle.css') }}">

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    
  </head>
  <body>
    <br><br>
  <div class="container"> 
     
        <img src="{{public_path('assets/slip.jpg')}}" style="width: 207;">
        
        <div class="top-left" style="width:207;">
     
      <div class="headertext">Medihealth Soulution Co.,Ltd</div>
      <br>
      <div class="headertext">Branch Queen Sirikit Naval Hospital</div>

      <br>
      <table class="control-label">
      <tr><td>Department :</td><td>{{$user->Department}}</td></tr>
      <tr><td>Item Name :</td><td>{{$user->Item_Name}}</td></tr>
      <tr><td>Category :</td><td>{{$user->Category}}</td></tr>
      <tr><td>Process :</td><td>{{$user->Process}} </td></tr>
      <tr><td>QC by :</td><td>{{$user->QC}}</td></tr>
      <tr><td>Packing_date :</td><td>{{$user->Packing_date}}</td></tr>
      <tr><td>Expired_Date :</td><td>{{$user->Expired_Date}}</td></tr>
      </table>
      <br>
      <table class="control-label">
      <tr><td>Item Name :</td><td>{{$user->Item_Name}}</td></tr>
      <tr><td>Packing_date :</td><td>{{$user->Packing_date}}</td></tr>
      <tr><td>Expired_Date :</td><td>{{$user->Expired_Date}}</td></tr>
      </table>

      </div>
</div>

  </body>
</html>