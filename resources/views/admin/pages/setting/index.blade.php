@extends('admin.partials.master')
@section('admin_content')
    <style>
        label {
            text-transform: unset;
        }
    </style>
    <section id="dashboard-ecommerce">
        <div class="row">
            <div class="col-12">
                <form action="{{route('admin.setting.insert')}}" method="POST" enctype="multipart/form-data">@csrf
                    <input type="hidden" name="id" value="{{$data ? $data->id : ''}}">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">
                                <div class="d-flex justify-content-between">
                                    <div>{{$data ? 'Update' : 'Create New'}} Settings</div>
                                </div>
                            </h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <div class="row">

                                    <div class="col-sm-12 mt-2">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <label for="withdraw_notes">Withdraw charge%</label>
                                                <input type="number" class="form-control is-valid"
                                                       name="withdraw_charge" id="withdraw_charge"
                                                       placeholder="Withdraw charge"
                                                       value="{{$data ? $data->withdraw_charge : old('withdraw_charge')}}">
                                                <div class="valid-feedback">
                                                    <i class="bx bx-radio-circle"></i>
                                                    Note: This is filed is optional
                                                </div>
                                            </div>

                                            <div class="col-sm-6">
                                                <label for="minimum_withdraw">Minimum Withdraw</label>
                                                <input type="number" class="form-control is-valid"
                                                       name="minimum_withdraw" id="minimum_withdraw"
                                                       placeholder="Minimum Withdraw"
                                                       value="{{$data ? $data->minimum_withdraw : old('minimum_withdraw')}}">
                                                <div class="valid-feedback">
                                                    <i class="bx bx-radio-circle"></i>
                                                    Note: This is filed is optional
                                                </div>
                                            </div>

                                            <div class="col-sm-6">
                                                <label for="maximum_withdraw">Maximum Withdraw</label>
                                                <input type="number" class="form-control is-valid"
                                                       name="maximum_withdraw" id="maximum_withdraw"
                                                       placeholder="Maximum Withdraw"
                                                       value="{{$data ? $data->maximum_withdraw : old('maximum_withdraw')}}">
                                                <div class="valid-feedback">
                                                    <i class="bx bx-radio-circle"></i>
                                                    Note: This is filed is optional
                                                </div>
                                            </div>

                                            <div class="col-sm-6">
                                                <label for="site_title">Withdraw Switch</label>
                                                <select class="form-control" name="w_time_status">
                                                    <option value="active" @if($data->w_time_status == 'active') selected @endif>START</option>
                                                    <option value="inactive" @if($data->w_time_status == 'inactive') selected @endif>OFF</option>
                                                </select>
                                                <div class="valid-feedback">
                                                    <i class="bx bx-radio-circle"></i>
                                                    Note: This is filed is required
                                                </div>
                                            </div>

                                            <div class="col-sm-6">
                                                <label for="checkin">Daily Checkin Amount</label>
                                                <input type="number" class="form-control is-valid"
                                                       name="checkin" id="checkin"
                                                       placeholder="Daily Checkin"
                                                       value="{{$data ? $data->checkin : old('checkin')}}">
                                                <div class="valid-feedback">
                                                    <i class="bx bx-radio-circle"></i>
                                                    Note: This is filed is optional
                                                </div>
                                            </div>

                                            <div class="col-sm-6">
                                                <label for="registration_bonus">registration_bonus</label>
                                                <input type="number" class="form-control is-valid"
                                                       name="registration_bonus" id="registration_bonus"
                                                       placeholder="registration_bonus"
                                                       value="{{$data ? $data->registration_bonus : old('registration_bonus')}}">
                                                <div class="valid-feedback">
                                                    <i class="bx bx-radio-circle"></i>
                                                    Note: This is filed is optional
                                                </div>
                                            </div>

                                            <div class="col-sm-6">
                                                <label for="telegram">telegram</label>
                                                <input type="text" class="form-control is-valid"
                                                       name="telegram" id="telegram"
                                                       placeholder="telegram"
                                                       value="{{$data ? $data->telegram : old('telegram')}}">
                                                <div class="valid-feedback">
                                                    <i class="bx bx-radio-circle"></i>
                                                    Note: This is filed is optional
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--<div class="card">-->
                    <!--    <div class="card-header">-->
                    <!--        <div class="row">-->
                    <!--            <div class="col-sm-6">-->
                    <!--                <label for="total_member_register_reword">Total Member Register Reword</label>-->
                    <!--                <input type="number" class="form-control is-valid"-->
                    <!--                       name="total_member_register_reword" id="total_member_register_reword"-->
                    <!--                       placeholder="Total Member Register Reword"-->
                    <!--                       value="{{$data ? $data->total_member_register_reword : old('total_member_register_reword')}}">-->
                    <!--                <div class="valid-feedback">-->
                    <!--                    <i class="bx bx-radio-circle"></i>-->
                    <!--                    Note: This is filed is optional-->
                    <!--                </div>-->
                    <!--            </div>-->

                    <!--            <div class="col-sm-6">-->
                    <!--                <label for="total_member_register_reword_amount">Total Member Register Reword Amount</label>-->
                    <!--                <input type="number" class="form-control is-valid"-->
                    <!--                       name="total_member_register_reword_amount" id="total_member_register_reword_amount"-->
                    <!--                       placeholder="Total Member Register Reword Amount"-->
                    <!--                       value="{{$data ? $data->total_member_register_reword_amount : old('total_member_register_reword_amount')}}">-->
                    <!--                <div class="valid-feedback">-->
                    <!--                    <i class="bx bx-radio-circle"></i>-->
                    <!--                    Note: This is filed is optional-->
                    <!--                </div>-->
                    <!--            </div>-->
                    <!--        </div>-->
                    <!--    </div>-->
                    <!--</div>-->

                    <div class="card">
                        <div class="card-header">
                            <h6 class="card-title">
                                <div class="d-flex justify-content-between">
                                    <div style="margin-top: .7rem !important">
                                        Submit Your Setting Information
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
        function showPreview(event) {
            if (event.target.files.length > 0) {
                var src = URL.createObjectURL(event.target.files[0]);
                var preview = document.getElementById("file-ip-1-preview");
                preview.src = src;
                preview.style.display = "block";
            }
        }

        function showPreviewFavicon(event) {
            if (event.target.files.length > 0) {
                var src = URL.createObjectURL(event.target.files[0]);
                var preview = document.getElementById("favicon");
                preview.src = src;
                preview.style.display = "block";
            }
        }
    </script>
@endsection
