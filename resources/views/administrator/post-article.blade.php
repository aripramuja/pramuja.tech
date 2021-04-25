@extends('basic/admin-layout')

@section('title', 'pramuja.tech | administrator')

@section('main-content')
    <h3><i class="mr-2"></i>Dashboard</h3><hr>
    <div class="box box-primary box-body pad">
            <div class="box-header with-border">
              <h3 class="box-title">Article Posting</h3>
            </div>
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="box-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Writer</label>
                        <input type="text" class="form-control" id="exampleInputWriter1" placeholder="Enter writer">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputTitle1">Title Article</label>
                        <input type="text" class="form-control" id="exampleInputTitle1" placeholder="Enter Title">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputCredit1">Credit</label>
                        <input type="text" class="form-control" id="exampleInputCredit1" placeholder="Enter Credit">
                    </div>

                    <label for="exampleInputText1">Article</label>
                    <textarea for="editor" class="form-control" id="editor" name="editor" rows="10" cols="80"  placeholder="type your text">
                    </textarea>
                    <script>
                    ClassicEditor
                        .create( document.querySelector( '#editor' ) )
                        .catch( error => {
                        console.error( error );
                    } );
                    </script>
                    <div class="mb-3">
                        <label for="formFile" class="form-label">File</label>
                        <input class="form-control" name="file" type="file" id="formFile" required>
                    </div>
                
                </div>
                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Post Article</button>
                </div>
            </form>
        </div>
@endsection
