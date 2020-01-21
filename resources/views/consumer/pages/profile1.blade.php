@extends('consumer.layouts.default')
@section('content')
    <div class="content-wrap">
        <div class="main">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8 p-0">
                        <div class="page-header">
                            <div class="page-title">
                                <h1>Profile</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 p-0">
                        <div class="page-header">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                    <li><a href="#">Dashboard</a></li>
                                    <li><a href="#">UI Elements</a></li>
                                    <li class="active">Tab</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="main-content">
                    <div class="row">
                        <div class="col-lg-10 col-md-offset-1">
                            <div class="card alert">
                                <div class="card-header">
                                    <h4>Profile</h4>
                                </div>
                                <div class="card-body">
                                    <div class="custom-tab">
                                        <ul class="nav nav-tabs" role="tablist">
                                            <li role="presentation" class="active"><a href="#1" aria-controls="1" role="tab" data-toggle="tab">About</a></li>
                                            <a href="#myModal" data-toggle="modal" title="Compose" class="btn btn-success btn-flat btn-addon m-b-10 m-l-5 right" style="float:right"><i class="ti-settings"></i>Edit Profile</a>
                                        </ul>
                                        <div class="tab-content">
                                            <div role="tabpanel" class="tab-pane active" id="1">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="content-wrap">
                                                            <form class="form-horizontal">
                                                                <div class="row">
                                                                    <div class="col-lg-12">
                                                                        <div class="form-group">
                                                                            <label class="col-sm-3 control-label">Name</label>
                                                                            <div class="col-sm-9">
                                                                                <input class="form-control" type="text" value="{{ $user -> name }}" readonly="">
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label class="col-sm-3 control-label">Contact</label>
                                                                            <div class="col-sm-9">
                                                                                <input class="form-control" type="text" value="0{{ $user -> contact }}" readonly="">
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label class="col-sm-3 control-label">Address</label>
                                                                            <div class="col-sm-9">
                                                                                <input class="form-control" type="text" value="{{ $user -> address }}" readonly="">
                                                                            </div>
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <label class="col-sm-3 control-label">Email</label>
                                                                            <div class="col-sm-9">
                                                                                <input class="form-control" type="text" value="{{ $user -> email }}" readonly="">
                                                                            </div>
                                                                        </div>
                                                                    </div><!-- /# column -->
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /# column -->
                </div>
                <!-- /# main content -->
            </div>
            <!-- /# container-fluid -->
        </div>
        <!-- /# main -->
    </div>



    <div class="inbox-body text-center">
        {{-- <a href="#myModal" data-toggle="modal" title="Compose" class="btn btn-compose"> Compose</a> --}}
        <!-- Modal -->
        <div aria-hidden="true"  role="dialog" tabindex="-1" id="myModal" class="modal fade" style="display: none;">
            <div class="modal-dialog">
                <div class="modal-content text-left">
                    <div class="modal-header">
                        <button aria-hidden="true" data-dismiss="modal" class="close" type="button"><i class="ti-close"></i></button>
                        <h4 class="modal-title" style="color:darkcyan;font-size:30px;text-align:center">Update your account</h4>
                    </div>
                    <div class="modal-body">
                        <form class="form-horizontal" method="POST" action="{{ URL::to('updateprofile/'.$user->id) }}" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label class="col-lg-2 control-label">Name</label>
                                <div class="col-lg-10">
                                <input type="text" class="form-control" name="name" value="{{ $user -> name }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-2 control-label">Contact</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" name="contact" value="0{{ $user -> contact }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-2 control-label">Address</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" name="address" value="{{ $user -> address }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-2 control-label">Email</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" name="email" value="{{ $user -> email }}">
                                </div>
                            </div>
                            {{-- <div class="form-group">
                                <label class="col-lg-2 control-label">Message</label>
                                <div class="col-lg-10">
                                    <textarea rows="10" cols="30" class="form-control" id="texarea1" name="texarea"></textarea>
                                </div>
                            </div> --}}

                            {{-- <div class="form-group">
                                <label class="col-sm-2 control-label">Update image</label>
                                <div class="col-sm-10">
                                    <div class="form-control file-input dark-browse-input-box">
                                        <label for="inputFile-2">
                                            <span class="btn btn-danger dark-input-button">
                                                <input type="file" name="image[]" id="inputFile-2" onchange="this.parentNode.parentNode.nextElementSibling.value = this.value" multiple>
                                                <i class="fa fa-file-archive-o"></i>
                                            </span>
                                        </label>
                                        <input class="file-name input-flat" type="text" readonly="readonly" placeholder="Browse Files" value="{{ old('image') }}">
                                    </div>
                                    <span id="image" style="color: red; font-weight: bold; font-style: oblique;"></span>
                                    <span class="error">{{ $errors->first('image') }}</span>
                                </div>
                            </div> --}}

                            <div class="form-group">
                                <div class="col-lg-offset-2 col-lg-10">
                                    {{-- <span class="btn green fileinput-button"><i class="fa fa-plus fa fa-white"></i>
                                        <span>Attachment</span>
                                        <input type="file" name="files[]" multiple="">
                                    </span> --}}
                                    <button class="btn btn-primary" type="submit"><i class="ti-pencil" style="font-size:15px;"></i> Update</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->
    </div>
@stop