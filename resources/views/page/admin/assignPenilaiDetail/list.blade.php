<table class="table align-middle table-row-dashed fs-6 gy-5 dataTable no-footer" id="kt_ecommerce_products_table">
    <a href="javascript:;" onclick="handle_check('{{route('admin.assignAll.store')}}')" class="btn btn-sm btn-primary float-end" style="display: inline-block;">Pilih Assign Semua</a>
    <thead>
        <tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
            {{-- <th class="w-10px pe-2 sorting_disabled" rowspan="1" colspan="1" aria-label=" "style="width: 29.9px;">
                <div class="form-check form-check-sm form-check-custom form-check-solid me-3">
                    <input class="form-check-input" type="checkbox" data-kt-check="true" data-kt-check-target="#kt_ecommerce_products_table .form-check-input" value="1">
                </div>
            </th> --}}
            <th tabindex="0" aria-controls="kt_ecommerce_products_table" rowspan="1" colspan="1" aria-label="Product: activate to sort column ascending" style="width: 273.712px;">Nama</th>
            <th tabindex="0" aria-controls="kt_ecommerce_products_table" rowspan="1" colspan="1" aria-label="SKU: activate to sort column ascending" style="width: 138.562px;">Email</th>
            <th tabindex="0" aria-controls="kt_ecommerce_products_table" rowspan="1" colspan="1" aria-label="Qty: activate to sort column ascending" style="width: 127.15px;">No HP</th>
            <th rowspan="1" colspan="1" aria-label="Actions" style="width: 141.738px;">Aksi</th>
        </tr>
    </thead>
    <tbody class="fw-semibold text-gray-600">
    <tbody>
        @foreach($users as $key => $value)
            <?php
                $id = $value->id;
            ?>
        @endforeach
        @foreach ($collection as $item)
        <tr>
            @php
            $penilaian = App\Models\Penilaian::get();
            $url = trim(url()->current(), '/');
            $id_trim = Str::of($url)->afterLast('/')->__toString();
            $result = false;
            
            foreach ($penilaian as $p) {
                if ($p->user_id == $id_trim && $p->penilai_id == $item->id) {
                    $result = true;
                    break; 
                }
            }
            @endphp
            <td>{{$item->name}}</td>
            <td>{{$item->email}}</td>
            <td>{{$item->phone}}</td>
            <td>
                @if($result)
                    <i class="fas fa-check"></i>
                @else
                    <a href="javascript:;" onclick="handle_check('{{route('admin.assignPenilaiDetail.store',$item->id)}}')" class="btn btn-sm btn-primary">Pilih</a>
                @endif
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
{{$collection->links('theme.app.pagination')}}