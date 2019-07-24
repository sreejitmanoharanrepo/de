@extends('layouts.master')


@section('content')
<style>
.required:after {color: #e32;content:'*';display:inline;}
#container_div {
    background:#FAFAFA;

}
#headername {
 background:#6495ed;
 color:white;
}
</style>

<meta name="csrf-token" content="{{ csrf_token() }}">
<br>
<div class="card card-secondary" id="container_div">
              <div class="card-header" id="headername">
                <h3 class="card-title">Add Document</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form id="client_form" >
                  <!-- text input -->
                    <div class="form-group row">
                      <div class="col-4">
                            <label for="contact_person_name" class="form-label required">Document Name</label>
                            <input type="text" name="contact_person_name" id="contact_person_name" class="form-control" placeholder="Person Name" maxlength="180">
                        </div>
                        <div class="col-4">
                            <label for="contact_person_name_acc" class="form-label">Document Type</label>
                            <input type="text" name="contact_person_name_acc" id="contact_person_name_acc" class="form-control" placeholder="Person Name (Account)" maxlength="180">
                        </div>
                        <div class="col-4">
                            <label>Priority</label>
                            <input type="text" name="organization_name" id="organization_name" class="form-control" placeholder="Organization Name" maxlength="180">
                        </div>
                       
                      
                    </div>
                     <!-- text input -->
                    
                     <!-- text input -->
                 
                
                     <!-- text input -->
               
                     <!-- text input -->
                    
                     <!-- text input -->
                 
                     <!-- text input -->
                     <div class="form-group row">                                                                             
                     <div class="col-4">
                          <label>Area of Operations</label>
                          <input type="text" name="area" id="area" class="form-control" placeholder="Area" maxlength="40">
                          </div>
                          <div class="col-4">
                          <label>Landmark</label>
                          <input type="text" name="landmark" id="landmark" class="form-control" placeholder="Landmark" maxlength="180">
                      </div> 
                      <div class="col-4">
                            <label>Zone</label>
                            <input list="zone" name="zone" id="zoneID" class="form-control">
                                  <datalist id="zone">
                                
                                  </datalist>
                      </div>
                      
                                                                  
                                                     
                     </div>
                     <!-- text input -->
                  
                     <!-- text input -->
                     <div class="form-group row">                                                                       
                      
                                        
                        
                                <div class="col-4">
                          <label>Unique ID</label>
                          <input type="file" name="unique_id" id="unique_id" class="form-control" placeholder="Unique ID" maxlength="100">
                      </div>
                      <div class="col-4">
                            <label>Website</label>
                            <input type="text" name="website" id="website" class="form-control" placeholder="Website" maxlength="100" onkeypress="return validateEmail(emailField)">
                        </div>                                                        
                    </div>  
                         <div class="form-group row">                                                                       
                      
                                        
                        
                                <div class="col-4">
                          <label></label>
                          <input type="text" name="unique_id" id="unique_id" class="form-control" placeholder="Unique ID" maxlength="100">
                      </div>
                      <div class="col-4">
                            <label>Website</label>
                            <input type="text" name="website" id="website" class="form-control" placeholder="Website" maxlength="100" onkeypress="return validateEmail(emailField)">
                        </div>                                                        
                    </div>     
                                                                                     
           
                     <!-- text input -->
                     <div class="form-group row">                                                                     
                      </div>
                    <div class="col-12" style="align-items: center;">
                        <label>Description/Note</label>
                        <textarea class="form-control" name="description" rows="5" id="comment" maxlength="500"></textarea>
                    </div>
                    <br>
                   



                </form>
              </div>
              
            </div>
              <!-- /.card-body -->
           

@endsection

@section('javascript')

<!-- CK Editor -->
<script src="{{asset('admin-lte/plugins/ckeditor/ckeditor.js')}}"></script>
<script>
/*
$( document ).ready(function() {
    document.getElementById("sub-Priority").disabled = true;
});*/

$.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
});




function isNumber(evt) {
    evt = (evt) ? evt : window.event;
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57)) {
        return false;
    }
    return true;
}







</script>
@endsection