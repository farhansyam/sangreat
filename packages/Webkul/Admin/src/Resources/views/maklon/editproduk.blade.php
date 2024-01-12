<x-admin::layouts>
    <x-slot:title>
        @lang('admin::app.catalog.products.index.title')
    </x-slot:title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <div class="container">

        <div class="flex gap-[16px] justify-between items-center max-sm:flex-wrap">
            <p class="text-[20px] text-gray-800 dark:text-white font-bold">
                Tambah Side
            </p>


        </div>

        {!! view_render_event('bagisto.admin.catalog.products.list.before') !!}

        {{-- Datagrid --}}


        <br>



    </div>

</x-admin::layouts>
<div class="container" style="margin-left: 300px;">
        <form action="{{route('maklon.produkupdate',$proses->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <label for="">Title</label>
            <input type="text" class="form-control" name="title" value="{{$proses->title}}" required><br>
            <label for="">Gambar</label>
            <input type="file" name="image" class="form-control"><br>
            <label for="">Gambar Sebelumnya</label>
            <img src="{{asset('storage/public/image/'.$proses->image)}}" alt="" width="100px">


            <br>
            <button class="btn btn-primary">Simpan</button>
        </form>
</div>