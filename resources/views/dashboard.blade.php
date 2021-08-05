@extends('header')
@section('dashboard')
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.10.25/datatables.min.css"/>
<link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
<link rel="stylesheet" href=" https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.7.0/css/buttons.dataTables.min.css ">
<link href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
<link href="https://cdn.datatables.net/buttons/1.7.1/css/buttons.dataTables.min.css">
<div class="col-6 col-sm-8 col-md-8 col-lg-10 col-xl-10" style="height:250px;">
    <div class="pt-2">
        <h2 style="font-size:24px;">Admin Dashboard<small class="pl-2" style="font-size:18px;">Control Pannel</small></h2>
    </div>
    <div class="row m-2 mt-5 table-responsive text-center">
        <div class="result">
             @if(session()->has('message'))
                <div class="alert alert-success">
                    {{ session()->get('message') }}
                </div>
            @endif
        </div>
        <table class="table table-hover" id="user_data" style="border-top:3px solid #1592a5;">
            <thead>
                <tr>
                    <th>Sr. no</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Number</th>
                    <th>Address</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1 ?>
                @forelse($data as $dt)
                <tr>
                    <td>{{$i}}</td>
                    <td>{{$dt->first_name}}</td>
                    <td>{{$dt->last_name}}</td>
                    <td>{{$dt->email}}</td>
                    <td>{{$dt->number}}</td>
                    <td>{{$dt->address}}</td>
                    <td><a href="edit/{{$dt->id}}" class="btn btn-secondary btn-sm p-1"><i class="fa fa-pen"></i> Edit</a>
                        <a href="delete/{{$dt->id}}" class="btn btn-danger btn-sm p-1"><i class="fa fa-trash"></i> Delete</a>
                        <a href="view/{{$dt->id}}" class="btn btn-info btn-sm p-1"><i class="fa fa-eye"></i> View</a>
                    </td>
                    <?php $i++ ?>
                    @empty
                    <p>There is no data.</p>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
<link rel="stylesheet" href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
<script src="//cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.4.1/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.4.1/js/buttons.flash.min.js"></script>
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.4.1/js/buttons.html5.min.js"></script>
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.4.1/js/buttons.print.min.js"></script>
<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/select/1.3.3/js/dataTables.select.min.js"></script>
<!--<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.3.1/js/dataTables.buttons.min.js"></script> -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<!--<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.3.1/js/buttons.html5.min.js"></script>-->

<script type="text/javascript">
    $(document).ready(function() {
        $('#user_data').DataTable({
            "lengthMenu": [[3, 25, 50, -1], [3, 25, 50, "All"]],
            dom: 'lBfrtip',
    buttons: [
        'copy', 'excel', 'pdf', 'csv'
    ]
          
        });
    });
</script>
@endsection