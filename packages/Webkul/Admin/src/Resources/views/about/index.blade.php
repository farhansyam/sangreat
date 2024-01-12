<x-admin::layouts>

    <x-slot:title>
        @lang('admin::app.catalog.products.index.title')
    </x-slot:title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <div class="flex gap-[16px] justify-between items-center max-sm:flex-wrap">
        <p class="text-[20px] text-gray-800 dark:text-white font-bold">
            About
        </p>


    </div>

    {!! view_render_event('bagisto.admin.catalog.products.list.before') !!}

    {{-- Datagrid --}}


    <br>

</x-admin::layouts>
<style>
    .text-\[24px\] {
        margin-top: -13px;
        font-size: 24px;
    }
</style>
<script src="https://cdn.tiny.cloud/1/duf9pa4i1whjydpvnv84103i11oib8me88cuq5t2csqql3dp/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>

<!-- Place the following <script> and <textarea> tags your HTML's <body> -->
<script>
    tinymce.init({
        selector: 'textarea',
        plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
        toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
    });
</script>
<div class="container" style="margin-left: 300px;">
    <h5>About Section</h5>

    <form action="{{route('about.update',$about->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        <label for="">Deskripsi Singkat</label>
        <input type="hidden" class="form-control" name="id" value="{{$about->id}}" required>
        <input type="text" class="form-control" name="deskripsi" value="{{$about->deskripsi}}" required>
        <label for="">Embed Gmap</label>
        <input type="text" class="form-control" name="map" value="{{$about->map}}" required>
        <label for="">Logo</label>
        <td><img src="{{asset('storage/public/image/'.$about->logo)}}" alt="" width="200px"></td>

        <input type="file" name="logo" class="form-control" required>
        <label for="">visi</label>
        <textarea name="visi">{{$about->visi}}</textarea>
        <br>
        <button class="btn btn-primary">Simpan</button>
    </form>
    <br>
    <hr>
    <h5>Misi Section</h5>
    <a href="{{route('misi.create')}}" class="btn btn-primary">Tambah</a><br><br>
    <table class="table table-striped" border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>Title</th>
                <th>Desk</th>
                <th>Icon</th>
                <th>Opsi</th>
            </tr>
        </thead>
        <tbody>
            @php
            $no = 1;
            @endphp
            @foreach ($misis as $data)
            <tr>
                <td>{{$no++}}</td>
                <td>{{$data->title}}</td>
                <td>{{$data->desk}}</td>
                <td><img src="{{asset('storage/public/image/'.$data->image)}}" alt="" width="100px"></td>

                <td>
                    <div class="d-flex align-items-center">
                        <a href="{{ route('misi.edit', $data->id) }}" class="me-2 btn btn-warning">
                            <i class="fas fa-edit" style="color: white;"></i>
                        </a>
                        &nbsp;
                        <form action="{{ route('misi.destroy', $data->id) }}" method="POST">
                            @csrf
                            <button class="btn btn-danger">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                        </form>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <hr>
    <h5>History Section</h5>
    <a href="{{route('history.create')}}" class="btn btn-primary">Tambah</a><br><br>
    <table class="table table-striped" border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>Tahun</th>
                <th>Desk</th>
                <th>Gambar</th>
                <th>Opsi</th>
            </tr>
        </thead>
        <tbody>
            @php
            $no = 1;
            @endphp
            @foreach ($history as $data)
            <tr>
                <td>{{$no++}}</td>
                <td>{{$data->title}}</td>
                <td>{{$data->desk}}</td>
                <td><img src="{{asset('storage/public/image/'.$data->image)}}" alt="" width="100px"></td>

                <td>
                    <div class="d-flex align-items-center">
                        <a href="{{ route('history.edit', $data->id) }}" class="me-2 btn btn-warning">
                            <i class="fas fa-edit" style="color: white;"></i>
                        </a>
                        &nbsp;
                        <form action="{{ route('history.destroy', $data->id) }}" method="POST">
                            @csrf
                            <button class="btn btn-danger">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                        </form>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <hr>
    <h5>Banner Section</h5>
    <table class="table table-striped" border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>title</th>
                <th>Gambar</th>
                <th>Opsi</th>
            </tr>
        </thead>
        <tbody>
            @php
            $no = 1;
            @endphp
            @foreach ($banner as $data)
            <tr>
                <td>{{$no++}}</td>
                <td>{{$data->title}}</td>
                <td><img src="{{asset('storage/public/image/'.$data->banner)}}" alt="" width="100px"></td>

                <td>
                    <div class="d-flex align-items-center">
                        <a href="{{ route('banner.edit', $data->id) }}" class="me-2 btn btn-warning">
                            <i class="fas fa-edit" style="color: white;"></i>
                        </a>
                        &nbsp;
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <br><br><br>
</div>