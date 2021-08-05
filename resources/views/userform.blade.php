@extends('header')
@section('userform')
<div class="col-8 col-sm-8 col-md-8 col-lg-10 col-xl-10" style="height:250px;">
    <div class="pt-2">
        <h2 style="font-size:24px;">Add Address</h2>
    </div>
    <div class="row pt-2">
        <div class="modal-body">
            <form action="{{ route('create')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="result">
                    @if(session()->has('message'))
                        <div class="alert alert-success">
                            {{ session()->get('message') }}
                        </div>
                    @endif
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group m-0">
                            <label for="recipient-first-name" class="col-form-label">First Name</label>
                            <input type="text" class="form-control" id="recipient-first-name" name="first_name" value="" required>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="recipient-last-name" class="col-form-label">Last Name</label>
                            <input type="text" class="form-control" id="recipient-last-name" name="last_name" value="" required>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="email" class="col-form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" value="" required>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="Phone" class="col-form-label">Phone</label>
                            <input type="number" class="form-control" id="phone" name="phone" value="" required>
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="address" class="col-form-label">Address</label>
                            <textarea class="form-control" id="address" name="address" required></textarea>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="image" class="col-form-label">Image</label>
                            <input type="file" class="form-control border border-0" name="picture" id="image" accept="image/*" required>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success btn-sm">Save</button>
                    <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Cancel</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script type="text/javascript">
$(document).ready(function(){
    var addButton = $('.add_button'); //Add button selector
    var wrapper = $('.field_wrapper'); //Input field wrapper
    var fieldHTML = '<div><input type="text" name="field_name[]" value=""/><input type="text" name="field_name[]" value=""/><a href="javascript:void(0);" class="remove_button btn btn-danger btn-sm">-</a></div>'; //New input field html 
    // var x = 1; //Initial field counter is 1
    
    //Once add button is clicked
    $(addButton).click(function(){
        //Check maximum number of input fields
            // x++; //Increment field counter
            $(wrapper).append(fieldHTML); //Add field html
    });
    
    //Once remove button is clicked
    $(wrapper).on('click', '.remove_button', function(e){
        e.preventDefault();
        $(this).parent('div').remove(); //Remove field html
        x--; //Decrement field counter
    });
});
</script>