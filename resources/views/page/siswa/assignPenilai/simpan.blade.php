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
                                    <form id="form_input">
                                        <div class="card card-custom gutter-b">
                                            <div class="card-body">
                                                <!--begin: Datatable-->
                                                <!-- Card -->
                                                <?php
                                                    $kelolaPenilaian = \App\Models\KelolaPenilaian::select('kategori', \DB::raw('MAX(id) as id'))->groupBy('kategori')->get();
                                                ?>
                                                <div class="mx-0 mx-sm-auto">
                                                    <!--begin::Stepper-->
                                                    <div class="stepper stepper-pills" id="kt_stepper_example_basic">
                                                        <!--begin::Nav-->
                                                        <input type="hidden" value="{{$collection->user_id}}" name="id">
                                                        <div class="stepper-nav flex-center flex-wrap mb-10">
                                                            @foreach($kelolaPenilaian as $key => $value)
                                                                <!--begin::Step {{ $key+1 }}-->
                                                                <div class="stepper-item mx-8 my-4{{ $key == 0 ? ' current' : '' }}" data-kt-stepper-element="nav">
                                                                    <!--begin::Wrapper-->
                                                                    <div class="stepper-wrapper d-flex align-items-center">
                                                                        <!--begin::Icon-->
                                                                        <div class="stepper-icon w-40px h-40px">
                                                                            <i class="stepper-check fas fa-check"></i>
                                                                            <span class="stepper-number">{{ $key+1 }}</span>
                                                                        </div>
                                                                        <!--end::Icon-->
                                                                            
                                                                        <!--begin::Label-->
                                                                        <div class="stepper-label">
                                                                            <h3 class="stepper-title">
                                                                                {{ $value->kategori }}
                                                                            </h3>
                                                                                
                                                                            <div class="stepper-desc">
                                                                                {{ $value->kategori }}
                                                                            </div>
                                                                        </div>
                                                                        <!--end::Label-->
                                                                    </div>
                                                                    <!--end::Wrapper-->
                                                                            
                                                                    <!--begin::Line-->
                                                                    <div class="stepper-line h-40px"></div>
                                                                    <!--end::Line-->
                                                                </div>
                                                                <!--end::Step {{ $key+1 }}-->
                                                            @endforeach

                                                        </div>
                                                        <!--end::Nav-->
                                                        
                                                        <!--begin::Form-->
                                                        <form class="form w-lg-500px mx-auto" novalidate="novalidate" >
                                                            <div class="mb-5">
                                                                @foreach($kelolaPenilaian as $key => $value)
                                                                    <?php 
                                                                    $nama = \App\Models\KelolaPenilaian::select('nama')->where('kategori', $value->kategori)->get();
                                                                    ?>
                                                                    <!--begin::Step 1-->
                                                                    <div class="flex-column {{ $key == 0 ? ' current' : '' }}" data-kt-stepper-element="content">
                                                                        @foreach ($nama as $summary => $item)
                                                                        <div class=" mx-3">
                                                                            {{ $summary+1 }}. {{ $item->nama }}
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
                                                                                            <input class="form-check-input" type="radio" value="1" name="option2_{{$summary}}" title="Bad"/>
                                                                                            <input class="form-check-input" type="hidden" value="{{$value->id}}" name="pertanyaan_{{$summary}}"/>
                                                                                            <input class="form-check-input" type="hidden" value="Bad" name="rubik_{{$summary}}"/>
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
                                                                                            <input class="form-check-input" type="radio" value="2" name="option2_{{$summary}}" title="Poor"/>
                                                                                            <input class="form-check-input" type="hidden" value="{{$value->id}}" name="pertanyaan_{{$summary}}"/>
                                                                                            <input class="form-check-input" type="hidden" value="Poor" name="rubik_{{$summary}}"/>
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
                                                                                            <input class="form-check-input" type="radio" value="3" name="option2_{{$summary}}" title="Fair"/>
                                                                                            <input class="form-check-input" type="hidden" value="{{$value->id}}" name="pertanyaan_{{$summary}}"/>
                                                                                            <input class="form-check-input" type="hidden" value="Fair" name="rubik_{{$summary}}"/>
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
                                                                                            <input class="form-check-input" type="radio" value="4" name="option2_{{$summary}}" title="Good"/>
                                                                                            <input class="form-check-input" type="hidden" value="{{$value->id}}" name="pertanyaan_{{$summary}}"/>
                                                                                            <input class="form-check-input" type="hidden" value="Good" name="rubik_{{$summary}}"/>
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
                                                                                            <input class="form-check-input" type="radio" value="5" name="option2_{{$summary}}" title="Good"/>
                                                                                            <input class="form-check-input" type="hidden" value="{{$value->id}}" name="pertanyaan_{{$summary}}"/>
                                                                                            <input class="form-check-input" type="hidden" value="Good" name="rubik_{{$summary}}"/>
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
                                                                                            <input class="form-check-input" type="radio" value="6" name="option2_{{$summary}}" title="Very Good"/>
                                                                                            <input class="form-check-input" type="hidden" value="{{$value->id}}" name="pertanyaan_{{$summary}}"/>
                                                                                            <input class="form-check-input" type="hidden" value="Very Good" name="rubik_{{$summary}}"/>
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
                                                                                            <input class="form-check-input" type="radio" value="7" name="option2_{{$summary}}" title="Excellent"/>
                                                                                            <input class="form-check-input" type="hidden" value="{{$value->id}}" name="pertanyaan_{{$summary}}"/>
                                                                                            <input class="form-check-input" type="hidden" value="Excellent" name="rubik_{{$summary}}"/>
                                                                                            <div class="form-check-label">
                                                                                                7
                                                                                            </div>
                                                                                        </div>
                                                                                    </label>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        @endforeach
                                                                    </div>
                                                                    <!--end::Step 1-->
                                                                @endforeach
                                                            </div>
                                                    
                                                            <!--begin::Actions-->
                                                            <div class="d-flex flex-stack">
                                                                <!--begin::Wrapper-->
                                                                <div class="me-2">
                                                                    <button type="button" class="btn btn-light btn-active-light-primary" data-kt-stepper-action="previous">
                                                                        Back
                                                                    </button>
                                                                </div>
                                                                <!--end::Wrapper-->
                                                    
                                                                <!--begin::Wrapper-->
                                                                <div>
                                                                    {{-- <button type="button" class="btn btn-primary" data-kt-stepper-action="submit">
                                                                        <span class="indicator-label">
                                                                            Submit
                                                                        </span>
                                                                        <span class="indicator-progress">
                                                                            Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                                                        </span>
                                                                    </button> --}}
                                                                    <div class="text-end">
                                                                        <div class="text-end">
                                                                            <button id="tombol_simpan"  data-kt-stepper-action="submit" onclick="handle_upload('#tombol_simpan','#form_input','{{route('siswa.survey.store')}}','POST','Simpan');" class="btn btn-primary">Simpan</button>
                                                                        </div>
                                                                    </div>
                                                    
                                                                    <button type="button" class="btn btn-primary" data-kt-stepper-action="next">
                                                                        Continue
                                                                    </button>
                                                                </div>
                                                                <!--end::Wrapper-->
                                                            </div>
                                                            <!--end::Actions-->
                                                        </form>
                                                        <!--end::Form-->
                                                    </div>
                                                <!--end: Datatable-->
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
    // Stepper lement
var element = document.querySelector("#kt_stepper_example_basic");

// Initialize Stepper
var stepper = new KTStepper(element);

// Handle next step
stepper.on("kt.stepper.next", function (stepper) {
    stepper.goNext(); // go next step
});

// Handle previous step
stepper.on("kt.stepper.previous", function (stepper) {
    stepper.goPrevious(); // go previous step
});
</script>