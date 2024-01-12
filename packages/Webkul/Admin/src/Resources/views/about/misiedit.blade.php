<x-admin::layouts>
    <x-slot:title>
        @lang('admin::app.catalog.products.index.title')
    </x-slot:title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <div class="container">

        <div class="flex gap-[16px] justify-between items-center max-sm:flex-wrap">
            <p class="text-[20px] text-gray-800 dark:text-white font-bold">
                Edit
            </p>


        </div>

        {!! view_render_event('bagisto.admin.catalog.products.list.before') !!}

        {{-- Datagrid --}}


        <br>



    </div>

</x-admin::layouts>
<div class="container" style="margin-left: 300px;">
        <form action="{{route('about.misiupdate',$misi->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <label for="">Title</label>
            <input type="text" class="form-control" name="title" value="{{$misi->title}}" required><br>
            <label for="">Deskripsi Singkat</label>
            <input type="text" class="form-control" name="desk" value="{{$misi->desk}}" required><br>
            <label for="">Gambar</label>
            <input type="file" name="image" class="form-control"><br>
            <label for="">Gambar Sebelumnya</label>
            <img src="{{asset('storage/public/image/'.$misi->image)}}" alt="" width="100px">


            <br>
            <button class="btn btn-primary">Simpan</button>
        </form>
</div>