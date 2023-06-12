<table class="table table-rounded table-striped border gy-7 gs-7">
    <thead>
        <tr class="fw-bold fs-6 text-gray-800 border-bottom border-gray-200">
            <th>Nama</th>
            <th>Pertanyaan Survey</th>
            <th>Jabatan</th>
            <th>Nilai Akhir</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($collection as $item)
        <tr>
            <td>{{$item->name}}</td>
            <td>{{$item->nama}}</td>
            <td>{{$item->jabatan}}</td>
            <td>{{ $item->skor }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
{{$collection->links('theme.app.pagination')}}