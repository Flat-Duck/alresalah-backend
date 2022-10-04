@extends('shop.layouts.app')
@section('content')
<div class="col-lg-12">
    <div class="iq-card">
       <div class="iq-card-body p-0">
          <div class="iq-edit-list">
             <ul class="iq-edit-profile d-flex nav nav-pills">
                <li class="col-md-6 p-0">
                   <a class="nav-link active" data-toggle="pill" href="#personal-information">
                      Personal Information
                   </a>
                </li>
                <li class="col-md-6 p-0">
                   <a class="nav-link" data-toggle="pill" href="#chang-pwd">
                      Change Password
                   </a>
                </li>
             </ul>
          </div>
       </div>
    </div>
 </div>
 <div class="col-lg-12">
    <div class="iq-edit-list-data">
       <div class="tab-content">
          <div class="tab-pane fade active show" id="personal-information" role="tabpanel">
             <div class="iq-card">
                <div class="iq-card-header d-flex justify-content-between">
                   <div class="iq-header-title">
                      <h4 class="card-title">Personal Information</h4>
                   </div>
                </div>
                <div class="iq-card-body">
                   <form>
                      <div class="form-group row align-items-center">
                         <div class="col-md-12">
                            <div class="profile-img-edit">
                               <img class="profile-pic" src="images/user/11.png" alt="profile-pic">
                               <div class="p-image">
                                  <i class="ri-pencil-line upload-button"></i>
                                  <input class="file-upload" type="file" accept="image/*"/>
                               </div>
                            </div>
                         </div>
                      </div>
                      <div class=" row align-items-center">
                         <div class="form-group col-sm-6">
                            <label for="fname">Full Name:</label>
                            <input type="text" name="name" value="{{ old('name', ($user->name)) }}" class="form-control" id="name"  placeholder="Name" required/>
                         </div>
                         <div class="form-group col-sm-6">
                            <label for="email">Email:</label>
                            <input type="text" name="email" value="{{ old('email', ($user->email)) }}" class="form-control" id="email" placeholder="Email" required/>
                         </div>                         
                         <div class="form-group col-sm-6">
                            <label for="dob">Date Of Birth:</label>
                            <input  class="form-control" id="dob" value="1984-01-24">
                         </div>                         
                         
                         
                         
                         <div class="form-group col-sm-12">
                            <label>Address:</label>
                            <textarea class="form-control" name="address" rows="5" style="line-height: 22px;">
                                {{ old('address', ($user->address)) }}
                            </textarea>
                         </div>
                      </div>
                      <button type="submit" class="btn btn-primary mr-2">Submit</button>
                      <button type="reset" class="btn iq-bg-danger">Cancel</button>
                   </form>
                </div>
             </div>
          </div>
          <div class="tab-pane fade" id="chang-pwd" role="tabpanel">
             <div class="iq-card">
                <div class="iq-card-header d-flex justify-content-between">
                   <div class="iq-header-title">
                      <h4 class="card-title">Change Password</h4>
                   </div>
                </div>
                <div class="iq-card-body">
                   <form>
                      <div class="form-group">
                         <label for="old_password">Current Password:</label>
                         <a href="javascripe:void();" class="float-right">Forgot Password</a>
                         <input type="Password" class="form-control" id="old_password" name="old_password" value="">
                      </div>
                      <div class="form-group">
                         <label for="password">New Password:</label>
                         <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                      </div>
                      <div class="form-group">
                         <label for="confirm_password">Verify Password:</label>
                         <input type="password" name="confirm_password" id="confirm_password" class="form-control" placeholder="Confirm Password">
                      </div>
                      <button type="submit" class="btn btn-primary mr-2">Submit</button>
                      <button type="reset" class="btn iq-bg-danger">Cancel</button>
                   </form>
                </div>
             </div>
          </div>
       </div>
    </div>
 </div>
 @endsection
