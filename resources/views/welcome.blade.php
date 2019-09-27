
@extends('layouts.app')
@section('content')
<div class="container col-md-4 pb-5 pt-4 pl-4 pr-4" style="background-color:white;">
<form method="post" id="searcht" name="searcht" >
  <center><h1 style="color:red;">Doctor Channel</h1></center><br>
  <div class="form-group">
    <i class="fas fa-user-md"><label for="">&nbsp Doctor Name :-</label></i>
    <input type="text" class="form-control active" id="search"  placeholder="Doctor Name" style="width: 100%;border-top: none;
    border-left: none;
    border-right: none;
    border-bottom: 1px solid red;
    padding: 5px 15px;
    outline: none;" name="search">
    <div id="searchList">
    </div>
    {{ csrf_field() }}
  </div>
  
<div class="form-group">
  <i class="fas fa-clinic-medical"><label for="">&nbsp Hospital Name :-</label></i><br>
  <div class="input-group">
  	<select name="categories" id="categories" class="form-control"
    style="width: 100%;border-top: none;
    border-left: none;
    border-right: none;
    border-bottom: 1px solid red;
    padding: 5px 15px;
    outline: none;">
    <option value="0" data-area="0" selected="selected">Any Hospital</option>
    @foreach($patient as $patientname)
      <option value="{{ $patientname->id }}">{{ $patientname->f_name }}</option>
    @endforeach
    </select>	  	 
</div>
</div>

<div class="form-group">
  <i class="fas fa-clinic-medical"><label for="">&nbsp Doctor Special :-</label></i><br>
  <div class="input-group">
    
  <select name="categories" id="categories" class="form-control"
    style="width: 100%;border-top: none;
    border-left: none;
    border-right: none;
    border-bottom: 1px solid red;
    padding: 5px 15px;
    outline: none;">
    <option value="0" data-area="0" selected="selected">Any Hospital</option>
    @foreach($patient as $patientname)
      <option value="{{ $patientname->id }}">{{ $patientname->f_name }}</option>
    @endforeach
    </select>	  
           
</div>
</div>




<div class="form-group">
    <i class="fas fa-calendar-alt"><label for="">&nbsp Date :-</label></i>
    <input type="DATE"  class="form-control active" placeholder="Any Date" style="width: 100%;border-top: none;
    border-left: none;
    border-right: none;
    border-bottom: 1px solid red;
    padding: 5px 15px;
    outline: none;" id="date" name="date"> 


</div><br>	
<button type="submit" class="btn btn-primary fas fa-search-plus" style="width:100%;" id="submit" name="submit">&nbsp Search</button>

</form>
</div><br><br>&nbsp


<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
$(document).ready(function(){

 $('#search').keyup(function(){ 
        var query = $(this).val();
        if(query != '')
        {
         var _token = $('input[name="_token"]').val();
         $.ajax({
          url:"{{ route('autocomplete.fetch') }}",
          method:"POST",
          data:{query:query, _token:_token},
          success:function(data){
           $('#searchList').fadeIn();  
                    $('#searchList').html(data);
          }
         });
        }
    });

    

});
</script>

@endsection
