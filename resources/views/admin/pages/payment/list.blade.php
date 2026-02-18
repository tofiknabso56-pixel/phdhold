@extends('admin.partials.master')
@section('admin_content')
<style>
    div#DataTables_Table_0_wrapper .btn {
    padding: 0 1.5rem;
    margin: 9px !important;
}
</style>
    <section id="dashboard-ecommerce">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4 class="card-title">
                            <div class="d-flex justify-content-between">
                                <div>{{$title}} Payment Lists</div>
                            </div>
                        </h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body card-dashboard">
                            <div class="table-responsive">
                                <table class="table table-striped dataex-html5-selectors">
                                    <thead>
                                    <tr>
                                        <th>S.N</th>
                                        <th>User Info</th>
                                        <th>Payment Info</th>
                                        <th>photo</th>
                                        <th>Payment Amounts</th>
                                        <th>Status</th>
                                        <th>Active</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($payments as $key => $row)
                                        <tr>
                                            <td>{{$key + 1}}</td>
                                            <td>
                                                <small>
                                                    Username: {{$row->user->username ?? '--'}}  <br>
                                                    Ref_id: {{$row->user->ref_id ?? '--'}} <br>
                                                </small>
                                            </td>
                                            <td>
                                                <small>
                                                    Method Name: {{$row->method_name}} <br>
                                                    Date : {{$row->date}}
                                                </small>
                                            </td>
                                            <td>
                                                <a href="{{asset($row->photo)}}" >
                                                    <img src="{{asset($row->photo)}}" style="width: 100px" alt="">
                                                </a>
                                            </td>
                                            <td>
                                                <small>
                                                    Number: {{$row->number}}<br>
                                                    Transaction ID: <strong>{{$row->transaction_id}}</strong><br>
                                                    Added Amount : {{number_format($row->final_amount, 2)}}
                                                </small>
                                            </td>
                                            <td>
                                                <small>
                                                    Status: <span class="badge @if($row->status == 'pending') badge-warning @elseif($row->status == 'approved') badge-success  @elseif($row->status == 'rejected') badge-danger @endif" style="font-size: 8px">{{$row->status}}</span> <br>
                                                </small>
                                            </td>
                                            <td>
                                                @if($row->status == 'approved')
                                                    <span style="color: green">Payment Approved</span>
                                                @elseif($row->status == 'pending')
                                                    <a href="{{route('payment.status.change.approved', $row->id)}}" class="btn btn-success">Approved</a>
                                                    <a href="{{route('payment.status.change.rejected', $row->id)}}" class="btn btn-danger">Rejected</a>
                                                @elseif($row->status == 'rejected')
                                                    <span style="color: red">Payment Rejected</span>
                                                @endif
                                            </td>
                                        </tr>
                                    @endforeach
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection


