@extends('admin.partials.master')
@section('admin_content')
    <section id="dashboard-ecommerce">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4 class="card-title">
                            <div class="d-flex justify-content-between">
                                <div>Package Lists</div>
                                <div><a href="{{route('admin.package.create')}}" class="btn btn-primary btn-sm"> <i class="bx bx-plus"></i> Add New Item </a> </div>
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
                                        <th>Name</th>
                                        <th>Label</th>
                                        <th>Tab</th>
                                        <th>Photo</th>
                                        <th>Price</th>
                                        <th>Validity</th>
                                        <th>Status</th>
                                        <th>Active</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($packages as $key => $row)
                                        <tr>
                                            <td>{{$key + 1}}</td>
                                            <td>{{$row->name}}</td>
                                            <td>{{$row->label}}</td>
                                            <td>{{$row->tab}}</td>
                                            <td>
                                                <img width="40" src="{{asset(view_image($row->photo))}}" alt="Package Photo">
                                            </td>
                                            <td>{{$row->price}}</td>
                                            <td>{{$row->validity}}Days</td>
                                            <td>{{$row->status}}</td>
                                            <td>
                                                <a href="{{route('admin.package.view', $row->id)}}"
                                                   class="btn btn-info" style="padding: 3px 7px;font-size: 20px" data-toggle="tooltip" title='View'>
                                                    <i class="bx bx-notepad"></i></a>
                                                <a href="{{route('admin.package.create', $row->id)}}"
                                                   class="btn btn-warning" style="padding: 3px 7px;font-size: 20px" data-toggle="tooltip" title='Edit'>
                                                    <i class="bx bx-pencil"></i></a>
                                                @if($row->id != 1)
                                                    <form method="POST" action="{{route('admin.package.delete', $row->id)}}"
                                                          class="d-inline">@csrf
                                                        {{method_field('DELETE')}}
                                                        <button type="submit"
                                                                style="padding: 3px 7px;"
                                                                class="btn btn-icon btn-danger delete_confirm{{$row->id}}"
                                                                data-toggle="tooltip" title='Delete'>
                                                            <i class="bx bx-trash"></i>
                                                        </button>
                                                        @include('admin.partials.delete-confirmation')
                                                    </form>
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


