@extends('master')
@section('content')

<br><br><br><br><br><br><br>
<div class="headertext">Medihealth Soulution Co.,Ltd</div>
<div class="headertext">Branch Queen Sirikit Naval Hospital</div>

<br><br><br><br><br>
<table>
<form method="post" action="{{url('submitForm')}}">
    {{csrf_field()}}
    <tr>
    <div class="form-group"> 
      <td><label for="Department" class="control-label">Department :</label></td>
      <td> <input type="text" class="form-control" id="Department" name="Department" placeholder="Department "></td>
     
    </div>
    </tr>
    <tr>
      <div class="form-group"> 
      <td> <label for="Item_Name" class="control-label">Item Name :</label></td>
      <td><input type="text" class="form-control" id="Item_Name" name="Item_Name" placeholder="Item name"></td>
     
      
    </div>
    </tr>

    <tr>
      <div class="form-group">
        <td><label for="Category" class="control-label">Category  :</label></td>
        <td><input type="text" class="form-control" id="Category" name="Category" placeholder="Catagory"></td>
      
      
    </div>
    </tr>

    
    <tr>
      <div class="form-group"> 
      <td><label for="Process" class="control-label">Process :</label></td>
      <td><input type="text" class="form-control" id="Process" name="Process" placeholder="Process"></td>
      
      
    </div>
    </tr>
    
    <tr><div class="form-group"> 
    <td><label for="QC" class="control-label">QC by :</label></td>
    <td><input type="text" class="form-control" id="QC" name="QC" placeholder="QC"></td>
      
      
    </div></tr>
    

    <tr><div class="form-group"> 
    <td><label for="Packing_date" class="control-label">Packing Date :</label></td>
    <td><input type="text" class="form-control" id="Packing_date" name="Packing_date" placeholder="{{\Carbon\Carbon::now()->format('d-m-Y')}}"></td>
      
      
    </div></tr>
    

    <tr> <div class="form-group"> 
    <td><label for="Expired_Date" class="control-label">Expired Date :</label></td>
    <td><input type="text" class="form-control" id="Expired_Date" name="Expired_Date" placeholder="#####"></td>
      
      
    </div></tr>
</table>
<br><br>

<table>
    <tr><div class="form-group"> 
    <td><label for="Item_Name2" class="control-label">Item Name :</label></td>
    
      <!--<td>  <input type="text" class="form-control" id="Item_Name2" name="Item_Name2" placeholder="#####"></td>-->
    
    </div></tr>
    

    <tr><div class="form-group"> 
    <td><label for="Packing_date2" class="control-label">Packing Date :</label></td>
    <!--<td><input type="text" class="form-control" id="Packing_date2" name="Packing_date2" placeholder="#####"></td>
--> 
      
    </div></tr>
    

    <tr><div class="form-group"> 
    <td><label for="Expired_Date2" class="control-label">Expired Date :</label></td>
    
   <!-- <td><input type="text" class="form-control" id="Expired_Date2" name="Expired_Date2" placeholder="#####"></td>  -->   
      
    </div></tr>
    
  
    


    <tr><div class="form-group"> <!-- Submit Button -->
    <td><button type="submit" class="button">GenPDF</button></td>
      
    </div></tr>
    

    </form>
</table>
@endsection