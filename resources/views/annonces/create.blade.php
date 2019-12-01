

@extends('layouts.app')
@section('content')
<div class="page-title">
    <div class="container">
        <h2>Déposer une annonce</h2>
        <hr>

        <form action="{{ route('annonces.create')}}" method="post">
            @csrf
            Product name:
            <br>
            <input type="text" name="name">
            <br><br>
            Product photos (can add more than one):
            <br>
            <input type="file" id="fileupload" name="photos[]" data-url="/upload" multiple="">
            <br>
            <div id="files_list"></div>
            <p id="loading"></p>
            <input type="hidden" name="file_ids" id="file_ids" value="">
            <input type="submit" value="Upload">
        </form>
       
    </div>
</div>
@stop

@section('scripts')
<script src="{{ asset('js/fileupload/jquery.min.js') }}"></script>
<script src="{{ asset('js/fileupload/jquery.ui.widget.js') }}"></script>
<script src="{{ asset('js/fileupload/jquery.iframe-transport.js') }}"></script>
<script src="{{ asset('js/fileupload/jquery.fileupload.js') }}"></script>

<script>
        $(function () {
           
            $('#fileupload').fileupload({
                dataType: 'json',
                add: function (e, data) {
                    $('#loading').text('Uploading...');
                    //data.submit();
                },
                done: function (e, data) {
                     alert('ok');
                    $.each(data.result.files, function (index, file) {
                        $('<p/>').html(file.name + ' (' + file.size + ' KB)').appendTo($('#files_list'));
                        if ($('#file_ids').val() != '') {
                            $('#file_ids').val($('#file_ids').val() + ',');
                        }
                        $('#file_ids').val($('#file_ids').val() + file.fileID);
                    });
                    $('#loading').text('');
                }
            });
        });
    </script>
    
@endsection