@extends('admin.main')
@section('head')
    <script src="/ckeditor/ckeditor.js"></script>
@endsection
@section('content')
    <div class="card card-info">
        <div class="card-header">
            <h3 class="card-title">Add A New Slider</h3>
        </div>
        <form action="" method="post">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Title</label>
                            <input name="name" type="text" class="form-control"  placeholder="Enter slider title">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Url</label>
                            <input name="url" type="text" class="form-control"  placeholder="Enter slider url">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Description</label>
                            <textarea name="description" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Sort</label>
                            <select name="sort_by"class="form-control">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="file">Select image</label>
                            <input accept="image/*" type="file" name="file" class="form-control-file" id="upload">
                            <div style="margin-top: 10px" class="row">
                                <div class="col-md-3">
                                    <div name="image_show" id="image_show"></div>
                                </div>
                            </div>
                            <input type="hidden" name="file_sc"  id="file">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Active</label>
                            <div class="custom-control custom-radio">
                                <input style="cursor: pointer" class="custom-control-input custom-control-input-info custom-control-input-outline" type="radio" name="active" id="active" value="1" checked>
                                <label style="cursor: pointer" class="custom-control-label" for="active">
                                    Yes
                                </label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input style="cursor: pointer" class="custom-control-input custom-control-input-info custom-control-input-outline" type="radio" name="active" id="none_active" value="2">
                                <label style="cursor: pointer" class="custom-control-label" for="none_active">
                                    No
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                <button type="submit"  class="btn btn-info">Add slider</button>
            </div>
            @csrf
        </form>
    </div>
@endsection
@section('footer')
    <script>
        CKEDITOR.replace('content');
    </script>
@endsection
