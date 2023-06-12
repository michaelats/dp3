<x-app-layout title="Dashboard">
    <!--begin::Search form-->
    <?php
        $data = \App\Models\SurveyPenilaian::join('users', 'users.id', '=', 'surveypenilaians.user_id')
            ->select('users.id', DB::raw('AVG(surveypenilaians.skor) as average_score'),'users.name','users.email','users.photo','users.role')
            ->where('users.role', '!=' ,'a')
            ->groupBy('users.id')
            ->get();
    ?>

    <div class="card rounded-0 bgi-no-repeat bgi-position-x-end bgi-size-cover" style="background-color: #3C8DBC;background-size: auto 100%; background-image: url({{asset('keenthemes/media/misc/taieri.svg')}})">
        <!--begin::body-->
        <div class="card-body container pt-10 pb-8">
            <!--begin::Title-->
            <div class="d-flex align-items-center">
                <h1 class="fw-bold me-3 text-white">Selamat datang kembali {{Auth::user()->name}} </h1>
                <span class="fw-bold text-white opacity-50"></span>
            </div>
            <!--end::Title-->
            <!--begin::Wrapper-->
            <div class="d-flex flex-column d-none">
                <!--begin::Block-->
                <div class="d-lg-flex align-lg-items-center">
                    <!--begin::Simple form-->
                    <div class="rounded d-flex flex-column flex-lg-row align-items-lg-center bg-white p-5 w-xxl-850px h-lg-60px me-lg-10 my-5">
                        <!--begin::Row-->
                        <div class="row flex-grow-1 mb-5 mb-lg-0">
                            <!--begin::Col-->
                            <div class="col-lg-4 d-flex align-items-center mb-3 mb-lg-0">
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
                                <input type="text" class="form-control form-control-flush flex-grow-1" name="search" value="" placeholder="Your Search" />
                                <!--end::Input-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-lg-4 d-flex align-items-center mb-5 mb-lg-0">
                                <!--begin::Desktop separartor-->
                                <div class="bullet bg-secondary d-none d-lg-block h-30px w-2px me-5"></div>
                                <!--end::Desktop separartor-->
                                <!--begin::Svg Icon | path: icons/duotone/Layout/Layout-4-blocks-2.svg-->
                                <span class="svg-icon svg-icon-1 svg-icon-gray-400 me-1">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="5" y="5" width="5" height="5" rx="1" fill="#000000" />
                                            <rect x="14" y="5" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
                                            <rect x="5" y="14" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
                                            <rect x="14" y="14" width="5" height="5" rx="1" fill="#000000" opacity="0.3" />
                                        </g>
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                                <!--begin::Select-->
                                <select class="form-select border-0 flex-grow-1" data-control="select2" data-placeholder="Category" data-hide-search="true">
                                    <option value=""></option>
                                    <option value="1" selected="selected">Category</option>
                                    <option value="2">In Progress</option>
                                    <option value="3">Done</option>
                                </select>
                                <!--end::Select-->
                            </div>
                            <!--end::Col-->
                            <!--begin::Col-->
                            <div class="col-lg-4 d-flex align-items-center">
                                <!--begin::Desktop separartor-->
                                <div class="bullet bg-secondary d-none d-lg-block h-30px w-2px me-5"></div>
                                <!--end::Desktop separartor-->
                                <!--begin::Svg Icon | path: icons/duotone/Map/Marker1.svg-->
                                <span class="svg-icon svg-icon-1 svg-icon-gray-400 me-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                            <rect x="0" y="0" width="24" height="24" />
                                            <path d="M5,10.5 C5,6 8,3 12.5,3 C17,3 20,6.75 20,10.5 C20,12.8325623 17.8236613,16.03566 13.470984,20.1092932 C12.9154018,20.6292577 12.0585054,20.6508331 11.4774555,20.1594925 C7.15915182,16.5078313 5,13.2880005 5,10.5 Z M12.5,12 C13.8807119,12 15,10.8807119 15,9.5 C15,8.11928813 13.8807119,7 12.5,7 C11.1192881,7 10,8.11928813 10,9.5 C10,10.8807119 11.1192881,12 12.5,12 Z" fill="#000000" fill-rule="nonzero" />
                                        </g>
                                    </svg>
                                </span>
                                <!--end::Svg Icon-->
                                <!--begin::Link-->
                                <a href="#" class="btn btn-color-muted px-0 text-start rounded-0 py-1" id="kt_modal_select_location_target" data-bs-toggle="modal" data-bs-target="#kt_modal_select_location">Location</a>
                                <!--end::Link-->
                            </div>
                        </div>
                        <!--end::Row-->
                        <!--begin::Action-->
                        <div class="min-w-150px text-end">
                            <button type="submit" class="btn btn-dark" id="kt_advanced_search_button_1">Search</button>
                        </div>
                        <!--end::Action-->
                    </div>
                    <!--end::Simple form-->
                    <!--begin::Action-->
                    <div class="d-flex align-items-center">
                        <a class="fw-bold link-white fs-5" href="pages/search/horizontal.html">Advanced Search</a>
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
    
    <!--begin::Content container-->
    <div id="kt_app_content" class="app-container  container-fluid ">

        <!--begin::Row-->
        <div id="kt_app_content_container" class="app-container  container-xxl ">
            <div class="card-title fs-1 fw-bold mt-10">Penilai</div>
            <?php
                $admin = \App\Models\User::where('role', 'a')->count();
                $staff = \App\Models\User::where('role', 's')->count();
                $mahasiswa = \App\Models\User::where('role', 'm')->count();
            ?>
            <div class="kt_project_users_card_pane mt-5 mb-5">
                <div class="row g-6 g-xl-9">
                    <div class="col-md-6 col-xxl-4">
                        <div class="card p-3"> 
                                <!--begin::Number-->
                                <div class="d-flex flex-wrap flex-sm-nowrap">
                                    <div class="d-flex flex-center flex-shrink-0  rounded w-100px">
                                        <i class="bi bi-bookmarks-fill fs-2x"></i>
                                    </div>

                                    <div class="flex-grow-1">
                                        <div class="d-flex justify-content-between align-items-start flex-wrap mb-2">
                                            <div class="d-flex flex-column">
                                                <div class="d-flex align-items-center mb-1">
                                                    <a href="#" class="text-gray-800 text-hover-primary fs-2 fw-bold me-3">Admin</a>
                                                </div>
                                                <div class="d-flex flex-wrap fw-semibold fs-5 text-gray-400">
                                                    <div class="fs-2 fw-bold" data-kt-countup="true" data-kt-countup-value="{{$admin}}" data-kt-countup-prefix="">0</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xxl-4">
                        <div class="card p-3"> 
                                <!--begin::Number-->
                                <div class="d-flex flex-wrap flex-sm-nowrap">
                                    <div class="d-flex flex-center flex-shrink-0  rounded w-100px">
                                        <i class="bi bi-bookmarks-fill fs-2x"></i>
                                    </div>

                                    <div class="flex-grow-1">
                                        <div class="d-flex justify-content-between align-items-start flex-wrap mb-2">
                                            <div class="d-flex flex-column">
                                                <div class="d-flex align-items-center mb-1">
                                                    <a href="#" class="text-gray-800 text-hover-primary fs-2 fw-bold me-3">Staff</a>
                                                </div>
                                                <div class="d-flex flex-wrap fw-semibold fs-5 text-gray-400">
                                                    <div class="fs-2 fw-bold" data-kt-countup="true" data-kt-countup-value="{{$staff}}" data-kt-countup-prefix="">0</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-xxl-4">
                        <div class="card p-3"> 
                                <!--begin::Number-->
                                <div class="d-flex flex-wrap flex-sm-nowrap">
                                    <div class="d-flex flex-center flex-shrink-0  rounded w-100px">
                                        <i class="bi bi-bookmarks-fill fs-2x"></i>
                                    </div>

                                    <div class="flex-grow-1">
                                        <div class="d-flex justify-content-between align-items-start flex-wrap mb-2">
                                            <div class="d-flex flex-column">
                                                <div class="d-flex align-items-center mb-1">
                                                    <a href="#" class="text-gray-800 text-hover-primary fs-2 fw-bold me-3">Mahasiswa</a>
                                                </div>
                                                <div class="d-flex flex-wrap fw-semibold fs-5 text-gray-400">
                                                    <div class="fs-2 fw-bold" data-kt-countup="true" data-kt-countup-value="{{$mahasiswa}}" data-kt-countup-prefix="">0</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div> 
            </div>

            <!--begin::Card-->
            {{-- <div class="card col-xl-8">
                <!--begin::Card header-->
                <!--end::Card header-->
                <div class="col-xl-12">
                    <!--begin::Chart widget 36-->
                    <div class="card card-flush overflow-hidden h-lg-100">
                        <!--begin::Header-->
                        <div class="card-header pt-5">
                            <!--begin::Title-->
                            <h3 class="card-title align-items-start flex-column">
                                <span class="card-label fw-bold text-dark">Performance</span>
                                <span class="text-gray-400 mt-1 fw-semibold fs-6">1,046 Inbound
                                    Calls today</span>
                            </h3>
                            <!--end::Title-->
    
                            <!--begin::Toolbar-->
                            <div class="card-toolbar">
                                <!--begin::Daterangepicker(defined in src/js/layout/app.js)-->
                                <div data-kt-daterangepicker="true"
                                    data-kt-daterangepicker-opens="left"
                                    data-kt-daterangepicker-range="today"
                                    class="btn btn-sm btn-light d-flex align-items-center px-4">
                                    <!--begin::Display range-->
                                    <div class="text-gray-600 fw-bold">
                                        Loading date range...
                                    </div>
                                    <!--end::Display range-->
    
                                    <i class="ki-duotone ki-calendar-8 fs-1 ms-2 me-0"><span
                                            class="path1"></span><span class="path2"></span><span
                                            class="path3"></span><span class="path4"></span><span
                                            class="path5"></span><span class="path6"></span></i>
                                </div>
                                <!--end::Daterangepicker-->
                            </div>
                            <!--end::Toolbar-->
                        </div>
                        <!--end::Header-->
    
                        <!--begin::Card body-->
                        <div class="card-body d-flex align-items-end p-0">
                            <!--begin::Chart-->
                            <canvas id="myChart" class="min-h-auto w-100 ps-4 pe-6 mb-7"
                            style="height: 400px"></canvas>
                            {{-- <canvas id="myChart"></canvas> --}}
                            <!--end::Chart-->
                        {{-- </div> --}}
                        <!--end::Card body-->
                    {{-- </div> --}}
                    <!--end::Chart widget 36-->
                {{-- </div> --}}
            {{-- </div> --}}
            <!--end::Card-->
            <!--begin::Col-->

            
            {{-- <div class="card col-xl-5 mt-5">
                <!--begin::Header-->
                <div class="card-header border-0 pt-5">
                    <h3 class="card-title align-items-start flex-column">
                        <span class="card-label fw-bold text-dark">Task</span>

                        <span class="text-muted mt-1 fw-semibold fs-7">Today</span>
                    </h3>
                </div>
                <!--end::Header-->

                <!--begin::Body-->
                <div class="card-body pt-5">
                    <!--begin::Item-->
                    <div class="d-flex flex-stack">
                        <!--begin::Symbol-->
                        
                        <!--end::Symbol-->

                        <!--begin::Section-->
                        <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                            <!--begin:Author-->
                            <div class="flex-grow-1 me-2">
                                <span class="text-gray-400 fw-semibold fs-6">Create New Task</span>

                                
                            </div>
                            <!--end:Author-->

                            <!--begin:Action-->
                            <a href="../user-profile/overview.html" class="btn btn-sm btn-light fs-4 fw-bold">+</a>
                            <!--end:Action-->
                        </div>
                        <!--end::Section-->
                    </div>
                    <!--end::Item-->

                    <!--begin::Separator-->
                    <div class="separator separator-dashed my-4"></div>

                    <div class="d-flex flex-stack">
                        <!--begin::Symbol-->
                        <div class="symbol symbol-40px me-5">
                            <label class="form-check form-check-custom form-check-solid">
                                <input class="form-check-input" type="radio" value="" name="radio2" id="flexCheckChecked1"/>
                            </label>
                        </div>
                        <!--end::Symbol-->

                        <!--begin::Section-->
                        <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                            <!--begin:Author-->
                            <div class="flex-grow-1 me-2">
                                <span class="text-gray-800 fs-3 fw-bold">Hentikan Penilian</span>
                            </div>
                            <!--end:Author-->

                            <!--begin:Action-->
                            <span class="badge badge-warning fs-8 fw-bold">URGENT</span>
                            <!--end:Action-->
                        </div>
                        <!--end::Section-->
                    </div>
                    <!--end::Item-->

                    <!--begin::Separator-->
                    <div class="separator separator-dashed my-4"></div>
                    <!--end::Separator-->

                    <div class="d-flex flex-stack">
                        <!--begin::Symbol-->
                        <div class="symbol symbol-40px me-5">
                            <label class="form-check form-check-custom form-check-solid">
                                <input class="form-check-input" type="radio" value="" name="radio2" id="flexCheckChecked1"/>
                            </label>
                        </div>
                        <!--end::Symbol-->

                        <!--begin::Section-->
                        <div class="d-flex align-items-center flex-row-fluid flex-wrap">
                            <!--begin:Author-->
                            <div class="flex-grow-1 me-2">
                                <span class="text-gray-800 fs-3 fw-bold">Hentikan Penilian</span>
                            </div>
                            <!--end:Author-->

                            <!--begin:Action-->
                            <span class="badge badge-success fs-8 fw-bold">NEW</span>
                            <!--end:Action-->
                        </div>
                        <!--end::Section-->
                    </div>



                </div>
                <!--end::Body-->
            </div> --}}




            <div class="d-flex flex-wrap flex-stack mb-6">
                <!--begin::Title-->
                <h3 class="text-gray-800 fw-bold my-2">
                    My Connections
                    <span class="fs-6 text-gray-400 fw-semibold ms-1">(29)</span>
                </h3>
                <!--end::Title-->
    
                <!--begin::Controls-->
                <div class="d-flex my-2">
                    <!--begin::Select-->
                    <select name="status" data-control="select2" data-hide-search="true"
                        class="form-select form-select-sm bg-body border-body w-125px">
                        <option value="Active" selected>Active</option>
                        <option value="Approved">In Progress</option>
                        <option value="Declined">To Do</option>
                        <option value="In Progress">Completed</option>
                    </select>
                    <!--end::Select-->
                </div>
                <!--end::Controls-->
            </div>

            <div class="row g-6 mb-6 g-xl-9 mb-xl-9">
                <!--begin::Followers-->
    
                <!--begin::Col-->
                @foreach($data as $key => $value)
                <div class="col-md-6 col-xxl-4">
                    <!--begin::Card-->
                    <div class="card ">
                        <!--begin::Card body-->
                        <div class="card-body d-flex flex-center flex-column py-9 px-5">
                            <!--begin::Avatar-->
                            <div class="symbol symbol-65px symbol-circle mb-5">
                                <img src="{{asset('storage/' . $value->photo) ? asset('img/profile.jpg') : asset('img/profile.jpg')}}" alt="image" />
                            </div>
                            <!--end::Avatar-->
    
                            <!--begin::Name-->
                            <a href="#"
                                class="fs-4 text-gray-800 text-hover-primary fw-bold mb-0">{{$value->name}}</a>
                            <!--end::Name-->
    
                            <!--begin::Position-->
                            <div class="fw-semibold text-gray-400 mb-6">skor : {{$value->average_score}}
                            </div>
                            <!--end::Position-->
    
                            
                            <!--end::Follow-->
                        </div>
                        <!--begin::Card body-->
                    </div>
                    <!--begin::Card-->
                </div>
                @endforeach
                <!--end::Col-->
                <!--begin::Col-->
                <!--end::Col-->
            </div>


            
            <!--end::Col-->
        </div>
        <!--end::Row-->
        
    </div>
    <!--end::Content container-->


    

    @section('custom_js')
    <script>
        // Mengakses elemen canvas
        var ctx = document.getElementById('myChart').getContext('2d');

        // Membuat objek chart baru
        var myChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ['Januari', 'Februari', 'Maret', 'April', 'Mei'],
                datasets: [{
                    label: 'Penjualan',
                    data: [12, 19, 3, 5, 2],
                    backgroundColor: 'rgba(0, 123, 255, 0.5)',
                    borderColor: 'rgba(0, 123, 255, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
    @endsection
</x-app-layout>