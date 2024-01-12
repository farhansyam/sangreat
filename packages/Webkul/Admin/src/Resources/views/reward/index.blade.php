<x-admin::layouts>

    <x-slot:title>
        @lang('admin::app.catalog.products.index.title')
    </x-slot:title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <div class="flex gap-[16px] justify-between items-center max-sm:flex-wrap">
        <p class="text-[20px] text-gray-800 dark:text-white font-bold">
            Rewards
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
    <h5>Table Reward Section</h5>
    <a href="{{route('rewards.create')}}" class="btn btn-primary">Tambah</a><br><br>

    <table class="table table-striped" border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>Title</th>
                <th>Gambar</th>
                <!-- <th>Title</th> -->
                <!-- <th>Desc</th> -->
                <th>Option</th>
            </tr>
        </thead>
        <tbody>
            @php
            $no = 1;
            @endphp
            @foreach ($reward as $data)
            <tr>
                <td>{{$no++}}</td>
                <td>{{$data->title}}</td>
                <td><img src="{{asset('storage/public/image/'.$data->cover)}}" alt="" width="100px"></td>
                <!-- <td>{{$data->desk}}</td> -->
                <!-- <td>{{$data->desk}}</td> -->
                <td>
                    <div class="d-flex align-items-center">
                        <a href="{{ route('rewards.edit', $data->id) }}" class="me-2">
                            <button class="btn btn-warning">
                                <i class="fas fa-edit" style="color: white;"></i>
                            </button>
                        </a>
                        &nbsp;
                        <form action="{{ route('rewards.delete', $data->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
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

    <br><br><br>
</div>