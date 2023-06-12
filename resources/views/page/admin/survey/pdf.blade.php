<!DOCTYPE html>
<html>
<head>
  <title>Hasil</title>
</head>
<body>

  <div class="container">
    <div class="row">
      <div class="col-lg-12" style="margin-top: 15px ">
        <div class="pull-left">
          <h2>Data Penilaian Institut Teknologi Del Terhadap {{Auth::user()->name}}</h2>
        </div>
      </div>
    </div><br>

    <table class="table table-bordered" border="1">
      <thead>
        <tr>
          <th>No</th>
          <th>Nama Pertanyaan</th>
          <th>Kategori Pertanyaan</th>
          <th>Rubik</th>
          <th>Skor</th>
        </tr>
      </thead>
      @php
      $i = 1;
      @endphp
      <tbody>
      @foreach ($data as $item)    
      <tr>
        <td>{{ $i++ }}</td>
        <td>{{ $item->nama}}</td>
        <td>{{ $item->kategori}}</td>
        <td>{{ $item->rubik}}</td>
        <td>{{ $item->skor}}</td>
      </tr>
      @endforeach
    </tbody>
    </table>
  </div>
</body>
</html>