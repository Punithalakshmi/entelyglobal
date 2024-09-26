<!-- resources/views/home.blade.php -->
@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="container-fluid">
    <div class="row column_title">
        <div class="col-md-12">
        <div class="page_title">
            <h2>Welcome Jhon Smith</h2>
        </div>
        </div>
    </div>

    <!-- row -->
    <div class="row column1">
        <div class="col-md-12">
            <div class="white_shd full margin_bottom_30">
                <div class="full graph_head">
                    <div class="heading1 margin_0" style="width:100%">
                        <h2>Upload Documents <small></small>:</h2>
                    </div>
            
                    <form id="fileUploadForm">
                        <div id="fileUploadContainer">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="fileName">File Name:</label>
                                    <input type="text" class="form-control" id="fileName" placeholder="Enter file name">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="fileInput">Upload File:</label>
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="fileInput">
                                        <label class="custom-file-label" for="fileInput">Choose file</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <button type="button" class="btn btn-primary mb-3" onclick="addMoreFiles()">Add More</button>
                    </form>
                    <form>
                        <fieldset>
                        <div class="field comments">
                            <label class="label_field">Comments:</label>
                            <textarea>text your comments...</textarea>
                        </div>
                        
                        
                        <div class="field margin_0 filebtn">
                            
                            <button class="main_bt">Submit</button>
                        </div>
                        </fieldset>
                    </form>
                </div> 
            </div>
        </div>
    <!-- end row -->
    </div>
</div>
@endsection