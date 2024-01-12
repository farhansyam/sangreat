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
            Tambah Reward
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
    <form action="{{route('rewards.update',$reward->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        <label for="">Title</label>
        <input type="hidden" class="form-control" name="id" value="{{$reward->id}}" required>
        <input type="text" class="form-control" name="title" value="{{$reward->title}}" required>
        <label for="">Writer</label>
        <input type="text" class="form-control" name="writer" value="{{$reward->writer}}" required>
        <label for="">Editor</label>
        <input type="text" class="form-control" name="editor" value="{{$reward->editor}}" required>
        <label for="">Cover</label>
        <td><img src="{{asset('storage/public/image/'.$reward->cover)}}" alt="" width="100px"></td>

        <input type="file" name="cover" class="form-control" required>
        <label for="">Content</label>
        <textarea name="desk">{{$reward->desk}}</textarea>
        <br>
        <button class="btn btn-primary">Simpan</button>
    </form>

</div>