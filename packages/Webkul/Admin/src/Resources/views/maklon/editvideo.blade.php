<x-admin::layouts>
    <x-slot:title>
        @lang('admin::app.catalog.products.index.title')
    </x-slot:title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <div class="container">

        <div class="flex gap-[16px] justify-between items-center max-sm:flex-wrap">
            <p class="text-[20px] text-gray-800 dark:text-white font-bold">
                Edit Video Section
            </p>


        </div>

        {!! view_render_event('bagisto.admin.catalog.products.list.before') !!}

        {{-- Datagrid --}}


        <br>

        <form action="{{route('video.update',$video->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <label for="">link</label>
            <input type="text" class="form-control" name="link" value="{{$video->link}}" required>
            <input type="hidden" class="form-control" name="id" value="{{$video->id}}" required>
            <br>
            <button class="btn btn-primary">Simpan</button>
        </form>

    </div>

</x-admin::layouts>