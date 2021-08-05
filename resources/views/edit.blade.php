@extends('header')
@section('edit')
<style>
    #menu {
        background-color: black;
        color: white;
        height: 800px;
    }

    #menu ul li a {
        color: white;
    }
</style>
<div class="col-6 col-sm-8 col-md-8 col-lg-10 col-xl-10" style="height:250px;">
    <div class="pt-2">
        <h2 style="font-size:24px;">Edit Address</h2>
    </div>
    <div class="row pt-2">
        <div class="modal-body">
            <form action="{{ route('update')}}" method="post" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="cid" id="cid" value="{{$info->id}}">
                <div class="row">
                    <div class="col">
                        <div class="form-group m-0">
                            <label for="first-name" class="col-form-label">First Name</label>
                            <input type="text" class="form-control" id="first-name" name="first_name" value="{{$info->first_name}}" required>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group m-0">
                            <label for="last-name" class="col-form-label">Last Name</label>
                            <input type="text" class="form-control" id="last-name" name="last_name" value="{{$info->last_name}}" required>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="email" class="col-form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" value="{{$info->email}}" required>
                        </div>
                    </div>
                </div>
                <!-- <div class="row">
                    
                </div> -->
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="recipient-number" class="col-form-label">Contact No</label>
                            <input type="number" class="form-control" id="recipient-number" name="phone" value="{{$info->phone}}" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="recipient-address" class="col-form-label">Address</label>
                            <input type="text" class="form-control" id="recipient-address" name="address" value="{{$info->address}}" required>
                        </div>
                    </div>
                    <!-- <div class="col">
                        <div class="form-group">
                            <label for="image" class="col-form-label">Image</label>
                            <input type="file" class="form-control border border-0" name="picture" id="image" accept="image/*" requires>
                        </div>
                    </div> -->
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success btn-sm">Update</button>
                    <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Cancel</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection