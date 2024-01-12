<x-admin::layouts>
    <x-slot:title>
        @lang('admin::app.catalog.products.index.title')
    </x-slot:title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">


</x-admin::layouts>
<div class="container" style="margin-left: 300px;">

    <div class="flex gap-[16px] justify-between items-center max-sm:flex-wrap">
        <p class="text-[20px] text-gray-800 dark:text-white font-bold">
            Edit About
        </p>


    </div>

    {!! view_render_event('bagisto.admin.catalog.products.list.before') !!}

    {{-- Datagrid --}}


    <br>
    <!-- Place the first <script> tag in your HTML's <head> -->
    <script src="https://cdn.tiny.cloud/1/duf9pa4i1whjydpvnv84103i11oib8me88cuq5t2csqql3dp/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>

    <!-- Place the following <script> and <textarea> tags your HTML's <body> -->
    <script>
        tinymce.init({
            selector: 'textarea',
            plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
            toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
        });
    </script>
    <form action="{{route('about.update',$about->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        <label for="">Deskripsi Singkat</label>
        <input type="hidden" class="form-control" name="id" value="{{$about->id}}" required>
        <input type="text" class="form-control" name="deskripsi" value="{{$about->deskripsi}}" required>
        <label for="">Embed Gmap</label>
        <input type="text" class="form-control" name="map" value="{{$about->map}}" required>
        <label for="">Logo</label>
        <td><img src="{{asset('storage/public/image/'.$about->logo)}}" alt="" width="100px"></td>

        <input type="file" name="logo" class="form-control" required>
        <label for="">visi</label>
        <textarea name="visi">{{$about->visi}}</textarea>
        <br>
        <button class="btn btn-primary">Simpan</button>
    </form>

</div>