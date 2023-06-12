<table class="table table-rounded table-striped border gy-7 gs-7">
    <thead>
        <tr class="fw-bold fs-6 text-gray-800 border-bottom border-gray-200">
            <th>Nama</th>
            <th>Pertanyaan Survey</th>
            <th>Rubik</th>
            <th>Hasil Survey</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($collection as $item)
        <tr>
            <td>{{$item->name}}</td>
            <td>{{$item->nama}}</td>
            <td>{{$item->rubik}}</td>
            <td>{{ $item->skor }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
{{$collection->links('theme.app.pagination')}}