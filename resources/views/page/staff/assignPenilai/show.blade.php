<div id="content_list">
    <div class="card rounded-0 bgi-no-repeat bgi-position-x-end bgi-size-cover" style="background-color: #3C8DBC;background-size: auto 100%; background-image: url({{asset('keenthemes/media/misc/taieri.svg')}})">
        <!--begin::body-->
        <div class="card-body container pt-10 pb-8">
            <!--begin::Title-->
            <div class="d-flex align-items-center">
                <h1 class="fw-bold me-3 text-white">Daftar Pertanyaan</h1>
                <span class="fw-bold text-white opacity-50"></span>
            </div>
            <!--end::Title-->
            <!--begin::Wrapper-->
            <div class="d-flex flex-column">
                <!--begin::Block-->
                <div class="d-lg-flex align-lg-items-center">
                    <!--begin::Simple form-->
                    {{-- <form id="content_filter">
                        <div class="rounded d-flex flex-column flex-lg-row align-items-lg-center bg-white p-5 w-xxl-850px h-lg-60px me-lg-10 my-5">
                            <!--begin::Row-->
                            <div class="row flex-grow-1 mb-5 mb-lg-0">
                                <!--begin::Col-->
                                <div class="col-lg-12 d-flex align-items-center mb-3 mb-lg-0">
                                    <!--begin::Svg Icon | path: icons/duotone/General/Search.svg-->
                                    <span class="svg-icon svg-icon-1 svg-icon-gray-400 me-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="0" y="0" width="24" height="24" />
                                                <path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                                <path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" fill="#000000" fill-rule="nonzero" />
                                            </g>
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                    <!--begin::Input-->
                                    <input type="text" class="form-control form-control-flush flex-grow-1" onkeyup="load_list(1);" name="keywords" placeholder="Pencarian..." />
                                    <!--end::Input-->
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Row-->
                            <!--begin::Action-->
                            <div class="min-w-150px text-end">
                                <button type="button" onclick="load_list(1);" class="btn btn-dark">Cari</button>
                            </div>
                            <!--end::Action-->
                        </div>
                    </form> --}}
                    <!--end::Simple form-->
                    <!--begin::Action-->
                    <div class="d-flex align-items-center">
                        {{-- <a class="fw-bold link-white fs-5" href="javascript:;" onclick="#">Tambah Data</a> --}}
                    </div>
                    <!--end::Action-->
                </div>
                <!--end::Block--> 
            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::body-->
    </div>
    <!--end::Search form-->
    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
        <!--begin::Container-->
        <div class="container" id="kt_content_container">
            <!--begin::details View-->
            <div class="card mb-5 mb-xl-10">
                <!--begin::Card body-->
                <div class="card-body p-9">
                    <!--begin::Row-->
                    <div class="row mb-4">
                        <!--begin::Label-->
                        <div class="col-sm-12 col-md-12">
                            <div class="table-responsive">
                                <!--begin::Entry-->
                                <div class="d-flex flex-column-fluid mt-5">
                                    <!--begin::Container-->
                                    <div class="container">
                                        <!--begin::Card-->
                                        <form id="registration">
                                            <input type="hidden" value="{{$collection->user_id}}" name="id">
                                            <?php
                                                $kelolaPenilaian = \App\Models\KelolaPenilaian::get();
                                                $kelolaPenilaian2 = \App\Models\KelolaPenilaian::get();
                                                $kelolaPenilaian3 = \App\Models\KelolaPenilaian::get();
                                                $kelolaPenilaian4 = \App\Models\KelolaPenilaian::get();
                                            ?>
                                            <nav>
                                              <div class="nav nav-pills nav-fill" id="nav-tab" role="tablist">
                                                <a class="nav-link active" id="step1-tab" data-bs-toggle="tab" href="#step1">Kompentensi Pedagogik</a>
                                                <a class="nav-link" id="step2-tab" data-bs-toggle="tab" href="#step2">Kompetensi Profesional</a>
                                                <a class="nav-link" id="step3-tab" data-bs-toggle="tab" href="#step3">Etika Moral dan Kepribadian</a>
                                                <a class="nav-link" id="step3-tab" data-bs-toggle="tab" href="#step4">Budaya Institusi dan Sosial Kemasyarakatan</a>
                                              </div>
                                            </nav>
                                            <div class="tab-content py-4">
                                              <div class="tab-pane fade show active" id="step1">
                                                @foreach($kelolaPenilaian as $key => $value)
                                                    @if($value->kategori == "Kompentensi Pedagogik")
                                                    <div class="mb-3">
                                                        <p>
                                                            <strong>{{$value->nama}}</strong>
                                                        </p>
                                                    </div>

                                                    <div class="text-center mb-3">
                                                        <div class="d-flex mw-500px mb-5" data-kt-buttons="true" data-kt-buttons-target=".form-check-image, .form-check-input">
                                                            <!--begin::Col-->
                                                            <div class="col-4">
                                                                <label class="form-check-image active">
                                                                    <div class="form-check form-check-custom form-check-solid">
                                                                        <div class="d-inline mx-3">
                                                                            Bad
                                                                        </div>
                                                                        <input class="form-check-input" type="radio" value="1" name="option2_{{$key}}" title="Bad"/>
                                                                        <input class="form-check-input" type="hidden" value="{{$value->id}}" name="pertanyaan_{{$key}}"/>
                                                                        <input class="form-check-input" type="hidden" value="Bad" name="rubik_{{$key}}"/>
                                                                        <div class="form-check-label">
                                                                            1
                                                                        </div>
                                                                    </div>
                                                                </label>
                                                            </div>
                                                            <div class="col-4">
                                                                <label class="form-check-image active">
                                                                    <div class="form-check form-check-custom form-check-solid">
                                                                        <div class="d-inline mx-3">
                                                                            Poor
                                                                        </div>
                                                                        <input class="form-check-input" type="radio" value="2" name="option2_{{$key}}" title="Poor"/>
                                                                        <input class="form-check-input" type="hidden" value="{{$value->id}}" name="pertanyaan_{{$key}}"/>
                                                                        <input class="form-check-input" type="hidden" value="Poor" name="rubik_{{$key}}"/>
                                                                        <div class="form-check-label">
                                                                            2
                                                                        </div>
                                                                    </div>
                                                                </label>
                                                            </div>
                                                            <div class="col-4">
                                                                <label class="form-check-image active">
                                                                    <div class="form-check form-check-custom form-check-solid">
                                                                        <div class="d-inline mx-3">
                                                                            Fair
                                                                        </div>
                                                                        <input class="form-check-input" type="radio" value="3" name="option2_{{$key}}" title="Fair"/>
                                                                        <input class="form-check-input" type="hidden" value="{{$value->id}}" name="pertanyaan_{{$key}}"/>
                                                                        <input class="form-check-input" type="hidden" value="Fair" name="rubik_{{$key}}"/>
                                                                        <div class="form-check-label">
                                                                            3
                                                                        </div>
                                                                    </div>
                                                                </label>
                                                            </div>
                                                            <div class="col-4">
                                                                <label class="form-check-image active">
                                                                    <div class="form-check form-check-custom form-check-solid">
                                                                        <div class="d-inline mx-3">
                                                                            Good
                                                                        </div>
                                                                        <input class="form-check-input" type="radio" value="4" name="option2_{{$key}}" title="Good"/>
                                                                        <input class="form-check-input" type="hidden" value="{{$value->id}}" name="pertanyaan_{{$key}}"/>
                                                                        <input class="form-check-input" type="hidden" value="Good" name="rubik_{{$key}}"/>
                                                                        <div class="form-check-label">
                                                                            4
                                                                        </div>
                                                                    </div>
                                                                </label>
                                                            </div>
                                                            <div class="col-4">
                                                                <label class="form-check-image active">
                                                                    <div class="form-check form-check-custom form-check-solid">
                                                                        <div class="d-inline mx-3">
                                                                            Good
                                                                        </div>
                                                                        <input class="form-check-input" type="radio" value="5" name="option2_{{$key}}" title="Good"/>
                                                                        <input class="form-check-input" type="hidden" value="{{$value->id}}" name="pertanyaan_{{$key}}"/>
                                                                        <input class="form-check-input" type="hidden" value="Good" name="rubik_{{$key}}"/>
                                                                        <div class="form-check-label">
                                                                            5
                                                                        </div>
                                                                    </div>
                                                                </label>
                                                            </div>
                                                            <div class="col-4">
                                                                <label class="form-check-image active">
                                                                    <div class="form-check form-check-custom form-check-solid">
                                                                        <div class="d-inline mx-3">
                                                                            Very Good
                                                                        </div>
                                                                        <input class="form-check-input" type="radio" value="6" name="option2_{{$key}}" title="Very Good"/>
                                                                        <input class="form-check-input" type="hidden" value="{{$value->id}}" name="pertanyaan_{{$key}}"/>
                                                                        <input class="form-check-input" type="hidden" value="Very Good" name="rubik_{{$key}}"/>
                                                                        <div class="form-check-label">
                                                                            6
                                                                        </div>
                                                                    </div>
                                                                </label>
                                                            </div>
                                                            <div class="col-4">
                                                                <label class="form-check-image active">
                                                                    <div class="form-check form-check-custom form-check-solid">
                                                                        <div class="d-inline mx-3">
                                                                            Excellent
                                                                        </div>
                                                                        <input class="form-check-input" type="radio" value="7" name="option2_{{$key}}" title="Excellent"/>
                                                                        <input class="form-check-input" type="hidden" value="{{$value->id}}" name="pertanyaan_{{$key}}"/>
                                                                        <input class="form-check-input" type="hidden" value="Excellent" name="rubik_{{$key}}"/>
                                                                        <div class="form-check-label">
                                                                            7
                                                                        </div>
                                                                    </div>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        
                                                    </div>
                                                    @endif
                                                    @endforeach
                                              </div>
                                              <div class="tab-pane fade" id="step2">
                                                @foreach($kelolaPenilaian2 as $key => $value)
                                                    @if($value->kategori == "Kompetensi Profesional")
                                                    <div class="mb-3">
                                                        <p>
                                                            <strong>{{$value->nama}}</strong>
                                                        </p>
                                                    </div>

                                                    <div class="text-center mb-3">
                                                        <div class="d-flex mw-500px mb-5" data-kt-buttons="true" data-kt-buttons-target=".form-check-image, .form-check-input">
                                                            <!--begin::Col-->
                                                            <div class="col-4">
                                                                <label class="form-check-image active">
                                                                    <div class="form-check form-check-custom form-check-solid">
                                                                        <div class="d-inline mx-3">
                                                                            Bad
                                                                        </div>
                                                                        <input class="form-check-input" type="radio" value="1" name="option2_{{$key}}" title="Bad"/>
                                                                        <input class="form-check-input" type="hidden" value="{{$value->id}}" name="pertanyaan_{{$key}}"/>
                                                                        <input class="form-check-input" type="hidden" value="Bad" name="rubik_{{$key}}"/>
                                                                        <div class="form-check-label">
                                                                            1
                                                                        </div>
                                                                    </div>
                                                                </label>
                                                            </div>
                                                            <div class="col-4">
                                                                <label class="form-check-image active">
                                                                    <div class="form-check form-check-custom form-check-solid">
                                                                        <div class="d-inline mx-3">
                                                                            Poor
                                                                        </div>
                                                                        <input class="form-check-input" type="radio" value="2" name="option2_{{$key}}" title="Poor"/>
                                                                        <input class="form-check-input" type="hidden" value="{{$value->id}}" name="pertanyaan_{{$key}}"/>
                                                                        <input class="form-check-input" type="hidden" value="Poor" name="rubik_{{$key}}"/>
                                                                        <div class="form-check-label">
                                                                            2
                                                                        </div>
                                                                    </div>
                                                                </label>
                                                            </div>
                                                            <div class="col-4">
                                                                <label class="form-check-image active">
                                                                    <div class="form-check form-check-custom form-check-solid">
                                                                        <div class="d-inline mx-3">
                                                                            Fair
                                                                        </div>
                                                                        <input class="form-check-input" type="radio" value="3" name="option2_{{$key}}" title="Fair"/>
                                                                        <input class="form-check-input" type="hidden" value="{{$value->id}}" name="pertanyaan_{{$key}}"/>
                                                                        <input class="form-check-input" type="hidden" value="Fair" name="rubik_{{$key}}"/>
                                                                        <div class="form-check-label">
                                                                            3
                                                                        </div>
                                                                    </div>
                                                                </label>
                                                            </div>
                                                            <div class="col-4">
                                                                <label class="form-check-image active">
                                                                    <div class="form-check form-check-custom form-check-solid">
                                                                        <div class="d-inline mx-3">
                                                                            Good
                                                                        </div>
                                                                        <input class="form-check-input" type="radio" value="4" name="option2_{{$key}}" title="Good"/>
                                                                        <input class="form-check-input" type="hidden" value="{{$value->id}}" name="pertanyaan_{{$key}}"/>
                                                                        <input class="form-check-input" type="hidden" value="Good" name="rubik_{{$key}}"/>
                                                                        <div class="form-check-label">
                                                                            4
                                                                        </div>
                                                                    </div>
                                                                </label>
                                                            </div>
                                                            <div class="col-4">
                                                                <label class="form-check-image active">
                                                                    <div class="form-check form-check-custom form-check-solid">
                                                                        <div class="d-inline mx-3">
                                                                            Good
                                                                        </div>
                                                                        <input class="form-check-input" type="radio" value="5" name="option2_{{$key}}" title="Good"/>
                                                                        <input class="form-check-input" type="hidden" value="{{$value->id}}" name="pertanyaan_{{$key}}"/>
                                                                        <input class="form-check-input" type="hidden" value="Good" name="rubik_{{$key}}"/>
                                                                        <div class="form-check-label">
                                                                            5
                                                                        </div>
                                                                    </div>
                                                                </label>
                                                            </div>
                                                            <div class="col-4">
                                                                <label class="form-check-image active">
                                                                    <div class="form-check form-check-custom form-check-solid">
                                                                        <div class="d-inline mx-3">
                                                                            Very Good
                                                                        </div>
                                                                        <input class="form-check-input" type="radio" value="6" name="option2_{{$key}}" title="Very Good"/>
                                                                        <input class="form-check-input" type="hidden" value="{{$value->id}}" name="pertanyaan_{{$key}}"/>
                                                                        <input class="form-check-input" type="hidden" value="Very Good" name="rubik_{{$key}}"/>
                                                                        <div class="form-check-label">
                                                                            6
                                                                        </div>
                                                                    </div>
                                                                </label>
                                                            </div>
                                                            <div class="col-4">
                                                                <label class="form-check-image active">
                                                                    <div class="form-check form-check-custom form-check-solid">
                                                                        <div class="d-inline mx-3">
                                                                            Excellent
                                                                        </div>
                                                                        <input class="form-check-input" type="radio" value="7" name="option2_{{$key}}" title="Excellent"/>
                                                                        <input class="form-check-input" type="hidden" value="{{$value->id}}" name="pertanyaan_{{$key}}"/>
                                                                        <input class="form-check-input" type="hidden" value="Excellent" name="rubik_{{$key}}"/>
                                                                        <div class="form-check-label">
                                                                            7
                                                                        </div>
                                                                    </div>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        
                                                    </div>
                                                    @endif
                                                    @endforeach
                                              </div>
                                              <div class="tab-pane fade" id="step3">
                                                @foreach($kelolaPenilaian3 as $key => $value)
                                                    @if($value->kategori == "Etika Moral dan Kepribadian")
                                                    <div class="mb-3">
                                                        <p>
                                                            <strong>{{$value->nama}}</strong>
                                                        </p>
                                                    </div>

                                                    <div class="text-center mb-3">
                                                        <div class="d-flex mw-500px mb-5" data-kt-buttons="true" data-kt-buttons-target=".form-check-image, .form-check-input">
                                                            <!--begin::Col-->
                                                            <div class="col-4">
                                                                <label class="form-check-image active">
                                                                    <div class="form-check form-check-custom form-check-solid">
                                                                        <div class="d-inline mx-3">
                                                                            Bad
                                                                        </div>
                                                                        <input class="form-check-input" type="radio" value="1" name="option2_{{$key}}" title="Bad"/>
                                                                        <input class="form-check-input" type="hidden" value="{{$value->id}}" name="pertanyaan_{{$key}}"/>
                                                                        <input class="form-check-input" type="hidden" value="Bad" name="rubik_{{$key}}"/>
                                                                        <div class="form-check-label">
                                                                            1
                                                                        </div>
                                                                    </div>
                                                                </label>
                                                            </div>
                                                            <div class="col-4">
                                                                <label class="form-check-image active">
                                                                    <div class="form-check form-check-custom form-check-solid">
                                                                        <div class="d-inline mx-3">
                                                                            Poor
                                                                        </div>
                                                                        <input class="form-check-input" type="radio" value="2" name="option2_{{$key}}" title="Poor"/>
                                                                        <input class="form-check-input" type="hidden" value="{{$value->id}}" name="pertanyaan_{{$key}}"/>
                                                                        <input class="form-check-input" type="hidden" value="Poor" name="rubik_{{$key}}"/>
                                                                        <div class="form-check-label">
                                                                            2
                                                                        </div>
                                                                    </div>
                                                                </label>
                                                            </div>
                                                            <div class="col-4">
                                                                <label class="form-check-image active">
                                                                    <div class="form-check form-check-custom form-check-solid">
                                                                        <div class="d-inline mx-3">
                                                                            Fair
                                                                        </div>
                                                                        <input class="form-check-input" type="radio" value="3" name="option2_{{$key}}" title="Fair"/>
                                                                        <input class="form-check-input" type="hidden" value="{{$value->id}}" name="pertanyaan_{{$key}}"/>
                                                                        <input class="form-check-input" type="hidden" value="Fair" name="rubik_{{$key}}"/>
                                                                        <div class="form-check-label">
                                                                            3
                                                                        </div>
                                                                    </div>
                                                                </label>
                                                            </div>
                                                            <div class="col-4">
                                                                <label class="form-check-image active">
                                                                    <div class="form-check form-check-custom form-check-solid">
                                                                        <div class="d-inline mx-3">
                                                                            Good
                                                                        </div>
                                                                        <input class="form-check-input" type="radio" value="4" name="option2_{{$key}}" title="Good"/>
                                                                        <input class="form-check-input" type="hidden" value="{{$value->id}}" name="pertanyaan_{{$key}}"/>
                                                                        <input class="form-check-input" type="hidden" value="Good" name="rubik_{{$key}}"/>
                                                                        <div class="form-check-label">
                                                                            4
                                                                        </div>
                                                                    </div>
                                                                </label>
                                                            </div>
                                                            <div class="col-4">
                                                                <label class="form-check-image active">
                                                                    <div class="form-check form-check-custom form-check-solid">
                                                                        <div class="d-inline mx-3">
                                                                            Good
                                                                        </div>
                                                                        <input class="form-check-input" type="radio" value="5" name="option2_{{$key}}" title="Good"/>
                                                                        <input class="form-check-input" type="hidden" value="{{$value->id}}" name="pertanyaan_{{$key}}"/>
                                                                        <input class="form-check-input" type="hidden" value="Good" name="rubik_{{$key}}"/>
                                                                        <div class="form-check-label">
                                                                            5
                                                                        </div>
                                                                    </div>
                                                                </label>
                                                            </div>
                                                            <div class="col-4">
                                                                <label class="form-check-image active">
                                                                    <div class="form-check form-check-custom form-check-solid">
                                                                        <div class="d-inline mx-3">
                                                                            Very Good
                                                                        </div>
                                                                        <input class="form-check-input" type="radio" value="6" name="option2_{{$key}}" title="Very Good"/>
                                                                        <input class="form-check-input" type="hidden" value="{{$value->id}}" name="pertanyaan_{{$key}}"/>
                                                                        <input class="form-check-input" type="hidden" value="Very Good" name="rubik_{{$key}}"/>
                                                                        <div class="form-check-label">
                                                                            6
                                                                        </div>
                                                                    </div>
                                                                </label>
                                                            </div>
                                                            <div class="col-4">
                                                                <label class="form-check-image active">
                                                                    <div class="form-check form-check-custom form-check-solid">
                                                                        <div class="d-inline mx-3">
                                                                            Excellent
                                                                        </div>
                                                                        <input class="form-check-input" type="radio" value="7" name="option2_{{$key}}" title="Excellent"/>
                                                                        <input class="form-check-input" type="hidden" value="{{$value->id}}" name="pertanyaan_{{$key}}"/>
                                                                        <input class="form-check-input" type="hidden" value="Excellent" name="rubik_{{$key}}"/>
                                                                        <div class="form-check-label">
                                                                            7
                                                                        </div>
                                                                    </div>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        
                                                    </div>
                                                    @endif
                                                    @endforeach
                                              </div>
                                              <div class="tab-pane fade" id="step4">
                                                @foreach($kelolaPenilaian4 as $key => $value)
                                                    @if($value->kategori == "Budaya Institusi dan Sosial Kemasyarakatan")
                                                    <div class="mb-3">
                                                        <p>
                                                            <strong>{{$value->nama}}</strong>
                                                        </p>
                                                    </div>

                                                    <div class="text-center mb-3">
                                                        <div class="d-flex mw-500px mb-5" data-kt-buttons="true" data-kt-buttons-target=".form-check-image, .form-check-input">
                                                            <!--begin::Col-->
                                                            <div class="col-4">
                                                                <label class="form-check-image active">
                                                                    <div class="form-check form-check-custom form-check-solid">
                                                                        <div class="d-inline mx-3">
                                                                            Bad
                                                                        </div>
                                                                        <input class="form-check-input" type="radio" value="1" name="option2_{{$key}}" title="Bad"/>
                                                                        <input class="form-check-input" type="hidden" value="{{$value->id}}" name="pertanyaan_{{$key}}"/>
                                                                        <input class="form-check-input" type="hidden" value="Bad" name="rubik_{{$key}}"/>
                                                                        <div class="form-check-label">
                                                                            1
                                                                        </div>
                                                                    </div>
                                                                </label>
                                                            </div>
                                                            <div class="col-4">
                                                                <label class="form-check-image active">
                                                                    <div class="form-check form-check-custom form-check-solid">
                                                                        <div class="d-inline mx-3">
                                                                            Poor
                                                                        </div>
                                                                        <input class="form-check-input" type="radio" value="2" name="option2_{{$key}}" title="Poor"/>
                                                                        <input class="form-check-input" type="hidden" value="{{$value->id}}" name="pertanyaan_{{$key}}"/>
                                                                        <input class="form-check-input" type="hidden" value="Poor" name="rubik_{{$key}}"/>
                                                                        <div class="form-check-label">
                                                                            2
                                                                        </div>
                                                                    </div>
                                                                </label>
                                                            </div>
                                                            <div class="col-4">
                                                                <label class="form-check-image active">
                                                                    <div class="form-check form-check-custom form-check-solid">
                                                                        <div class="d-inline mx-3">
                                                                            Fair
                                                                        </div>
                                                                        <input class="form-check-input" type="radio" value="3" name="option2_{{$key}}" title="Fair"/>
                                                                        <input class="form-check-input" type="hidden" value="{{$value->id}}" name="pertanyaan_{{$key}}"/>
                                                                        <input class="form-check-input" type="hidden" value="Fair" name="rubik_{{$key}}"/>
                                                                        <div class="form-check-label">
                                                                            3
                                                                        </div>
                                                                    </div>
                                                                </label>
                                                            </div>
                                                            <div class="col-4">
                                                                <label class="form-check-image active">
                                                                    <div class="form-check form-check-custom form-check-solid">
                                                                        <div class="d-inline mx-3">
                                                                            Good
                                                                        </div>
                                                                        <input class="form-check-input" type="radio" value="4" name="option2_{{$key}}" title="Good"/>
                                                                        <input class="form-check-input" type="hidden" value="{{$value->id}}" name="pertanyaan_{{$key}}"/>
                                                                        <input class="form-check-input" type="hidden" value="Good" name="rubik_{{$key}}"/>
                                                                        <div class="form-check-label">
                                                                            4
                                                                        </div>
                                                                    </div>
                                                                </label>
                                                            </div>
                                                            <div class="col-4">
                                                                <label class="form-check-image active">
                                                                    <div class="form-check form-check-custom form-check-solid">
                                                                        <div class="d-inline mx-3">
                                                                            Good
                                                                        </div>
                                                                        <input class="form-check-input" type="radio" value="5" name="option2_{{$key}}" title="Good"/>
                                                                        <input class="form-check-input" type="hidden" value="{{$value->id}}" name="pertanyaan_{{$key}}"/>
                                                                        <input class="form-check-input" type="hidden" value="Good" name="rubik_{{$key}}"/>
                                                                        <div class="form-check-label">
                                                                            5
                                                                        </div>
                                                                    </div>
                                                                </label>
                                                            </div>
                                                            <div class="col-4">
                                                                <label class="form-check-image active">
                                                                    <div class="form-check form-check-custom form-check-solid">
                                                                        <div class="d-inline mx-3">
                                                                            Very Good
                                                                        </div>
                                                                        <input class="form-check-input" type="radio" value="6" name="option2_{{$key}}" title="Very Good"/>
                                                                        <input class="form-check-input" type="hidden" value="{{$value->id}}" name="pertanyaan_{{$key}}"/>
                                                                        <input class="form-check-input" type="hidden" value="Very Good" name="rubik_{{$key}}"/>
                                                                        <div class="form-check-label">
                                                                            6
                                                                        </div>
                                                                    </div>
                                                                </label>
                                                            </div>
                                                            <div class="col-4">
                                                                <label class="form-check-image active">
                                                                    <div class="form-check form-check-custom form-check-solid">
                                                                        <div class="d-inline mx-3">
                                                                            Excellent
                                                                        </div>
                                                                        <input class="form-check-input" type="radio" value="7" name="option2_{{$key}}" title="Excellent"/>
                                                                        <input class="form-check-input" type="hidden" value="{{$value->id}}" name="pertanyaan_{{$key}}"/>
                                                                        <input class="form-check-input" type="hidden" value="Excellent" name="rubik_{{$key}}"/>
                                                                        <div class="form-check-label">
                                                                            7
                                                                        </div>
                                                                    </div>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        
                                                    </div>
                                                    @endif
                                                    @endforeach
                                              </div>
                                            </div>
                                            <div class="row justify-content-between">
                                              <div class="col-auto">
                                                <button id="tombol_simpan" onclick="handle_upload('#tombol_simpan','#registration','{{route('staff.survey.store')}}','POST','Simpan');" class="btn btn-primary">Simpan</button>
                                              </div>
                                            </div>
                                          </form>
                                        <!--end::Card-->
                                    </div>
                                    <!--end::Container-->
                                </div>
                                <!--end::Entry-->
                            </div>
                        </div>
                        <!--end::Col-->
                    </div>
                    <!--end::Row-->
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Row-->
        </div>
        <!--end::Container-->
    </div>
</div>
<script>
    var registrationForm = $('#registration');
    var formValidate = registrationForm.validate({
        errorClass: 'is-invalid',
        errorPlacement: () => false
    });

    const wizard = new Enchanter('registration', {}, {
        onNext: () => {
        if (!registrationForm.valid()) {
            formValidate.focusInvalid();
            return false;
        }
        }
    });
</script>
