@extends('admin.partials.master')
@section('admin_content')
    <section id="dashboard-ecommerce">
        <div class="row">
            <div class="col-12">
                <form action="{{route('admin.package.insert')}}" method="POST" enctype="multipart/form-data">@csrf
                    <input type="hidden" name="id" value="{{$data ? $data->id : ''}}">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">
                                <div class="d-flex justify-content-between">
                                    <div>{{$data ? 'Update' : 'Create New'}} Package</div>
                                    <div>
                                        <a href="{{route('admin.package.index')}}" class="btn btn-primary btn-sm"> <i
                                                class="bx bx-left-arrow"></i> Package List</a>
                                    </div>
                                </div>
                            </h4>
                        </div>
                        <?php
                        $packages = \App\Models\Package::whereNull('package_id')->get();
                        ?>
                        <div class="card-content">
                            <div class="card-body">
                                <div class="row">
                                    @if($data)
                                        <div class="col-sm-6">
                                            <label for="package_id">Package Category</label>
                                            <select name="package_id" id="package_id" class="form-control is-valid">
                                                <option value="">Select a option</option>
                                                @foreach($packages as $package)
                                                    <option value="{{$package->id}}" @if($data && $data->package_id == $package->id) selected @endif>{{$package->name}} ({{$package->label}})</option>
                                                @endforeach
                                            </select>
                                            <div class="valid-feedback">
                                                <i class="bx bx-radio-circle"></i>
                                                Note: This is filed is required
                                            </div>
                                        </div>
                                    @else
                                    <div class="col-sm-6">
                                        <label for="package_id">Package Category</label>
                                        <select name="package_id" id="package_id" class="form-control is-valid">
                                            <option value="">Select a option</option>
                                            @foreach($packages as $package)
                                                <option value="{{$package->id}}">{{$package->name}} ({{$package->label}})</option>
                                            @endforeach
                                        </select>
                                        <div class="valid-feedback">
                                            <i class="bx bx-radio-circle"></i>
                                            Note: This is filed is required
                                        </div>
                                    </div>
                                    @endif

                                    <div class="col-sm-6">
                                        <label for="tab">Tab</label>
                                        <select name="tab" id="tab" class="form-control is-valid">
                                            <option value="">Select a option</option>
                                            <option value="vip" @if($data && $data->tab == 'vip') selected @endif>VIP</option>
                                            <option value="fixed" @if($data && $data->tab == 'fixed') selected @endif>FIXED</option>
                                            <option value="event" @if($data && $data->tab == 'event') selected @endif>EVENT</option>
                                        </select>
                                        <div class="valid-feedback">
                                            <i class="bx bx-radio-circle"></i>
                                            Note: This is filed is required
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <label for="name">Package Name</label>
                                        <input type="text" class="form-control is-valid"
                                               name="name" id="name"
                                               placeholder="Name" value="{{$data ? $data->name : ''}}" required>
                                        <div class="valid-feedback">
                                            <i class="bx bx-radio-circle"></i>
                                            Note: This is filed is required
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <label for="label">Label</label>
                                        <input type="text" class="form-control is-valid"
                                               name="label" id="label"
                                               placeholder="label" value="{{$data ? $data->label : ''}}" required>
                                        <div class="valid-feedback">
                                            <i class="bx bx-radio-circle"></i>
                                            Note: This is filed is required
                                        </div>
                                    </div>

                                    <div class="col-sm-12 mt-2">
                                        <div class="row">
                                            <div class="col-12 col-sm-6">
                                                <fieldset class="form-group">
                                                    <label for="basicInputFile">Upload Photo <small>{Suggestion:
                                                            size 200X200(px)}</small> </label>
                                                    <div class="custom-file">
                                                        <input type="file" name="photo"
                                                               class="custom-file-input is-valid" id="inputGroupFile01"
                                                               @if(!$data) required
                                                               @else @endif onchange="showPreview(event)">
                                                        <label class="custom-file-label" for="inputGroupFile01">Choose
                                                            file</label>
                                                        <div class="valid-feedback">
                                                            <i class="bx bx-radio-circle"></i>
                                                            Note: Package image mandatory
                                                        </div>
                                                    </div>
                                                </fieldset>
                                            </div>
                                            <div class="col-12 col-sm-6">
                                                <div class="image_preview">
                                                    <img
                                                        src="{{$data ? asset(view_image($data->photo)) :  asset(not_found_img())}}"
                                                        id="file-ip-1-preview" class="rounded" alt="Preview Image"
                                                        style="width: 100px;height: 100px">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <label for="price">Price</label>
                                        <input type="number" class="form-control is-valid"
                                               name="price" id="price"
                                               placeholder="Price" value="{{$data ? $data->price : ''}}" required>
                                        <div class="valid-feedback">
                                            <i class="bx bx-radio-circle"></i>
                                            Note: This is filed is required
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <label for="validity">Validity days</label>
                                        <input type="number" class="form-control is-valid"
                                               name="validity" id="validity"
                                               placeholder="Validity days" value="{{$data ? $data->validity : ''}}" required>
                                        <div class="valid-feedback">
                                            <i class="bx bx-radio-circle"></i>
                                            Note: This is filed is required
                                        </div>
                                    </div>

                                    <div class="col-sm-6">
                                        <label for="commission_with_avg_amount">Commission with average amount</label>
                                        <input type="number" class="form-control is-valid"
                                               name="commission_with_avg_amount" id="commission_with_avg_amount"
                                               placeholder="Commission with average amount" value="{{$data ? $data->commission_with_avg_amount : ''}}" required>
                                        <div class="valid-feedback">
                                            <i class="bx bx-radio-circle"></i>
                                            Note: This is filed is required
                                        </div>
                                    </div>


                                        <div class="col-sm-6">
                                            <label for="ref1">First Refer Commission (%)</label>
                                            <input type="text" class="form-control is-valid"
                                                   name="ref1" id="ref1"
                                                   placeholder="" value="{{$data ? $data->ref1 : old('ref1')}}" required>
                                            <div class="valid-feedback">
                                                <i class="bx bx-radio-circle"></i>
                                                Note: This is filed is required
                                            </div>
                                        </div>



                                        <div class="col-sm-6">
                                            <label for="ref2">Second Refer Commission (%)</label>
                                            <input type="text" class="form-control is-valid"
                                                   name="ref2" id="ref2"
                                                   placeholder="" value="{{$data ? $data->ref2 : old('ref2')}}" required>
                                            <div class="valid-feedback">
                                                <i class="bx bx-radio-circle"></i>
                                                Note: This is filed is required
                                            </div>
                                        </div>



                                        <div class="col-sm-6">
                                            <label for="ref3">Third Refer Commission (%)</label>
                                            <input type="text" class="form-control is-valid"
                                                   name="ref3" id="ref3"
                                                   placeholder="" value="{{$data ? $data->ref3 : old('ref3')}}" required>
                                            <div class="valid-feedback">
                                                <i class="bx bx-radio-circle"></i>
                                                Note: This is filed is required
                                            </div>
                                        </div>





                                    @if($data)
                                    <div class="col-sm-12">
                                        <label for="status">Status</label>
                                        <select name="status" class="form-control">
                                            <option value="active" @if($data->status == 'active') selected @endif>Active</option>
                                                <option value="inactive" @if($data->status == 'inactive') selected @endif>In-Active</option>
                                        </select>
                                        <div class="valid-feedback">
                                            <i class="bx bx-radio-circle"></i>
                                            Note: This is filed is required
                                        </div>
                                    </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Form Submit Button -->
                    <div class="card">
                        <div class="card-header">
                            <h6 class="card-title">
                                <div class="d-flex justify-content-between">
                                    <div style="margin-top: .7rem !important">
                                        Submit Your Package Information
                                    </div>
                                    <div>
                                        <div class="form-group mb-0">
                                            <button type="submit" class="btn btn-success"><i
                                                    class="bx bx-plus"></i>{{$data ? 'Update' : 'Submit'}} </button>
                                        </div>
                                    </div>
                                </div>
                            </h6>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <script>
        function showPreview(event){
            if(event.target.files.length > 0){
                var src = URL.createObjectURL(event.target.files[0]);
                var preview = document.getElementById("file-ip-1-preview");
                preview.src = src;
                preview.style.display = "block";
            }
        }
        function calculateHour(_this){
            document.getElementById('hours').value = _this.value * 24
        }
    </script>
@endsection
