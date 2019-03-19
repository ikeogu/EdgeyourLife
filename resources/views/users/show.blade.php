@extends('layouts.dashboard')

@section('others')


<div class="content" style="padding-top:35px;">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="header">
                                    <h4 class="title">Edit Profile</h4>
                                </div>
                                <div class="content">
                                    <form>
                                        <div class="row">
                                            
                                            <div class="col-md-4">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Email address</label>
                                                    <input type="email" class="form-control"  value="{{ Auth::user()->email }}">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label> Name</label>
                                                    <input type="text" class="form-control" value="{{ Auth::user()->name }}">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>phone</label>
                                                    <input type="text" class="form-control"  value="{{ Auth::user()->phone }}">
                                                </div>
                                            </div>
                                        </div>


                                        <button type="submit" class="genric-btn success circle pull-right">Update Profile</button>
                                        <div class="clearfix"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card card-user">
                                <div class="image">
                                    <img src="https://ununsplash.imgix.net/photo-1431578500526-4d9613015464?fit=crop&amp;fm=jpg&amp;h=300&amp;q=75&amp;w=400" alt="...">
                                </div>
                                <div class="content">
                                    <div class="author">
                                        <a href="#">
                                        <img class="avatar border-gray" src="/storage/logo/default-avatar_1539097684.png" alt="...">

                                        <h4 class="title">{{ Auth::user()->name }}<br>
                                            
                                        </h4>
                                        </a>
                                    </div>
                                    <p class="description text-center"> {{ Auth::user()->phone }}
                                    </p>
                                </div>
                                <hr>
                                <div class="text-center">
                                    <button href="#" class="btn btn-simple"><i class="fa fa-facebook-square"></i></button>
                                    <button href="#" class="btn btn-simple"><i class="fa fa-twitter"></i></button>
                                    <button href="#" class="btn btn-simple"><i class="fa fa-google-plus-square"></i></button>

                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>   
@endsection