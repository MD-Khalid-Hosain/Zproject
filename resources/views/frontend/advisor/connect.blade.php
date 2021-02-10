@extends('frontend.layouts.base')
@section('main-body')
    <div class="page__bg connect__pageBg">
        <div class="container">
            <p class="pageSection__title pt-5">Connect</p>
            <p class="greyBar"></p>

            <form action="http://localhost/zulkar/public/connect" method="post">
            <input type="hidden" name="consultant_id" value="{{ $id }}">
                <div class="row mt-5">
                    <div class="col">
                        <label  class="form-label from__label clientReg__formLabel">Name</label>
                        <input type="text" name="name" class="form-control formArea formAreaBorder" placeholder="Enter Your Full Name">
                    </div>

                    <div class="col">
                        <label  class="form-label from__label clientReg__formLabel">Mobile No</label>
                        <input type="text"  name="mobile" class="form-control formArea formAreaBorder" placeholder="+8801xxx xxxxxx">
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col">
                        <label  class="form-label from__label clientReg__formLabel">Email Address</label>
                        <input type="email" name="email"  class="form-control formArea formAreaBorder" placeholder="Enter Your Email Address">
                    </div>

                    <div class="col">
                        <div class="row">
                            <div class="col">
                                <label  class="form-label from__label clientReg__formLabel">From Date</label>
                                <input type="date" name="from" class="form-control formArea formAreaBorder" placeholder="Designation (Optional)">
                            </div>

                            <div class="col">
                                <label  class="form-label from__label clientReg__formLabel">To Date</label>
                                <input type="date" name="to" class="form-control formArea formAreaBorder" placeholder="Designation (Optional)">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row mt-3">
                    <div class="col">
                        <label  class="form-label from__label clientReg__formLabel">Duration</label>

                        <select name="duration" class="form-select formArea formAreaBorder" aria-label="Default select example">
                            <option value="1hr">One Hour</option>
                            <option value="2hr">Two Hours</option>
                        </select>
                    </div>

                    <div class="col">
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="mt-5">
                            <input type="checkbox"/>
                            <label class="checkbox__label"> I agree to the Talent Tracker Terms of Use. Terms & Conditions</label><br/>
                        </div>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="mt-5">
                            <Button class="grdiantBtn freelanceRecruiterReg__btn" type="submit"> REQUEST AN APPOINMENT </Button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
