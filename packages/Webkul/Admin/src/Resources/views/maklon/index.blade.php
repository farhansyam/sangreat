<x-admin::layouts>

    <x-slot:title>
        @lang('admin::app.catalog.products.index.title')
    </x-slot:title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <div class="flex gap-[16px] justify-between items-center max-sm:flex-wrap">
        <p class="text-[20px] text-gray-800 dark:text-white font-bold">
            Maklon
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
<div class="container" style="margin-left: 300px;">
    <h5>Table Side Section</h5>

    <table class="table table-striped" border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>Side</th>
                <th>Gambar</th>
                <th>Title</th>
                <!-- <th>Desc</th> -->
                <th>Option</th>
            </tr>
        </thead>
        <tbody>
            @php
            $no = 1;
            @endphp
            @foreach ($maklon as $data)
            <tr>
                <td>{{$no++}}</td>
                <td>{{$data->side}}</td>
                <td><img src="{{asset('storage/public/image/'.$data->img)}}" alt="" width="100px"></td>
                <td>{{$data->title}}</td>
                <!-- <td>{{$data->desk}}</td> -->
                <td>
                    <div class="d-flex align-items-center">
                        <a href="{{ route('maklon.edit', $data->id) }}" class="me-2">
                            <button class="btn btn-warning">
                                <i class="fas fa-edit" style="color: white;"></i>
                            </button>
                        </a>
                    </div>
                </td>


            </tr>
            @endforeach
        </tbody>
    </table>

    <br>
    <h5>Table Why Section</h5>
    <a href="{{route('why.create')}}" class="btn btn-primary">Tambah</a><br><br>
    <table class="table table-striped" border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>title</th>
                <th>Desc</th>
                <th>Option</th>
            </tr>
        </thead>
        <tbody>
            @php
            $no = 1;
            @endphp
            @foreach ($why as $data)
            <tr>
                <td>{{$no++}}</td>
                <td>{{$data->title}}</td>
                <td>{{$data->desk}}</td>
                <!-- <td>{{$data->desk}}</td> -->
                <td>
                    <div class="d-flex align-items-center">
                        <a href="{{ route('why.edit', $data->id) }}" class="me-2 btn btn-warning">
                            <i class="fas fa-edit" style="color: white;"></i>
                        </a>
                        &nbsp;
                        <form action="{{ route('why.destroy', $data->id) }}" method="POST">
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
    <br>
    <h5>Table Proses Section</h5>
    <a href="{{route('proses.create')}}" class="btn btn-primary">Tambah</a><br><br>
    <table class="table table-striped" border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>title</th>
                <th>Image</th>
                <th>Option</th>
            </tr>
        </thead>
        <tbody>
            @php
            $no = 1;
            @endphp
            @foreach ($proses as $data)
            <tr>
                <td>{{$no++}}</td>
                <td>{{$data->title}}</td>
                <td><img src="{{asset('storage/public/image/'.$data->image)}}" alt="" width="100px"></td>

                <!-- <td>{{$data->desk}}</td> -->
                <td>
                    <div class="d-flex align-items-center">
                        <a href="{{ route('proses.edit', $data->id) }}" class="me-2 btn btn-warning">
                            <i class="fas fa-edit" style="color: white;"></i>
                        </a>
                        &nbsp;
                        <form action="{{ route('proses.destroy', $data->id) }}" method="POST">
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
    <br>
    <h5>Table Sertifikasi Section</h5>
    <a href="{{route('ser.create')}}" class="btn btn-primary">Tambah</a><br><br>
    <table class="table table-striped" border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>title</th>
                <th>Image</th>
                <th>Option</th>
            </tr>
        </thead>
        <tbody>
            @php
            $no = 1;
            @endphp
            @foreach ($ser as $data)
            <tr>
                <td>{{$no++}}</td>
                <td>{{$data->title}}</td>
                <td><img src="{{asset('storage/public/image/'.$data->image)}}" alt="" width="100px"></td>

                <!-- <td>{{$data->desk}}</td> -->
                <td>
                    <div class="d-flex align-items-center">
                        <a href="{{ route('ser.edit', $data->id) }}" class="me-2 btn btn-warning">
                            <i class="fas fa-edit" style="color: white;"></i>
                        </a>
                        &nbsp;
                        <form action="{{ route('ser.destroy', $data->id) }}" method="POST">
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
    <h5>Video Section</h5>
    <table class="table table-striped" border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>Video</th>
                <th>Option</th>
            </tr>
        </thead>
        <tbody>
            @php
            $no = 1;
            @endphp
            @foreach ($video as $data)
            <tr>
                <td>{{$no++}}</td>
                <td>
                    <video width="320" height="240" controls>
                        <source src="{{$data->link}}" type="video/mp4">
                    </video>
                </td>

                <!-- <td>{{$data->desk}}</td> -->
                <td>
                    <div class="d-flex align-items-center">
                        <a href="{{ route('video.edit', $data->id) }}" class="me-2 btn btn-warning">
                            <i class="fas fa-edit" style="color: white;"></i>
                        </a>
                        &nbsp;
                    </div>
                </td>


            </tr>
            @endforeach
        </tbody>
    </table>
    <h5>Produk Section</h5>
    <a href="{{route('produk.create')}}" class="btn btn-primary">Tambah</a><br><br>
    <table class="table table-striped" border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>Produk</th>
                <th>Image</th>
                <th>Option</th>
            </tr>
        </thead>
        <tbody>
            @php
            $no = 1;
            @endphp
            @foreach ($produk as $data)
            <tr>
                <td>{{$no++}}</td>
                <td>{{$data->title}}</td>
                <td><img src="{{asset('storage/public/image/'.$data->image)}}" alt="" width="100px"></td>

                <!-- <td>{{$data->desk}}</td> -->
                <td>
                    <div class="d-flex align-items-center">
                        <a href="{{ route('produk.edit', $data->id) }}" class="me-2 btn btn-warning">
                            <i class="fas fa-edit" style="color: white;"></i>
                        </a>
                        &nbsp;
                        <form action="{{ route('produk.destroy', $data->id) }}" method="POST">
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
    <h5>Hubungi Section</h5>
    <a href="{{route('produk.create')}}" class="btn btn-primary">Tambah</a><br><br>
    <table class="table table-striped" border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>Subject</th>
                <th>Nama</th>
                <th>Pesan</th>
                <th>email</th>
                <th>No Hp</th>
            </tr>
        </thead>
        <tbody>
            @php
            $no = 1;
            @endphp
            @foreach ($hubungi as $data)
            <tr>
                <td>{{$no++}}</td>
                <td>{{$data->subject}}</td>
                <td>{{$data->fullname}}</td>
                <td>{{$data->pesan}}</td>
                <td>{{$data->email}}</td>
                <td>{{$data->notlpn}}</td>
                <td><img src="{{asset('storage/public/image/'.$data->image)}}" alt="" width="100px"></td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <br><br><br>
</div>