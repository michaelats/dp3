<table class="table table-rounded table-striped border gy-7 gs-7">
    <thead>
        <tr class="fw-bold fs-6 text-gray-800 border-bottom border-gray-200">
            <th>Nama</th>
            <th>Email</th>
            <th>No HP</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($collection as $item)
            @if($item->penilai_id == auth()->user()->id)
                <tr>
                    <td>{{$item->name}}</td>
                    <td>{{$item->email}}</td>
                    <td>{{$item->phone}}</td>
                    <td>
                        <a href="javascript:;" onclick="load_input('{{route('siswa.assign-penilai.show', $item->id)}}');" class="btn btn-sm btn-light-primary">Lakukan Penilaian</a>
                    </td>
                </tr>
            @endif
        @endforeach
    </tbody>
</table>
