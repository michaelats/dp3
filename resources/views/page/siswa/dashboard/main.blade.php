<x-app-layout title="Dashboard">
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
                <h1 class="fw-bold me-3 text-white">Selamat datang kembali {{Auth::user()->name}}</h1>
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
    <div id="kt_app_content_container" class="app-container mt-5 container-xxl ">

        <!--begin::Navbar-->
        <div class="card mb-5 mb-xl-10" id="kt_profile_details_view">
            <!--begin::Card header-->
            <div class="card-header cursor-pointer">
                <!--begin::Card title-->
                <div class="card-title m-0">
                    <h3 class="fw-bold m-0">Profil</h3>
                </div>
                <!--end::Card title-->
        
                <!--end::Action-->    
            </div>
            <!--begin::Card header-->
        
            <!--begin::Card body-->
            <div class="card-body p-9">
                <!--begin::Row-->
                <div class="row mb-7">
                    <!--begin::Label-->
                    <label class="col-lg-4 fw-semibold text-muted">Nomor Induk Staff</label>
                    <!--end::Label-->
        
                    <!--begin::Col-->
                    <div class="col-lg-8">                    
                        <span class="fw-bold fs-6 text-gray-800">{{Auth::user()->nidn}}</span>                
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Row-->
        
                <!--begin::Input group-->
                <div class="row mb-7">
                    <!--begin::Label-->
                    <label class="col-lg-4 fw-semibold text-muted">Nama</label>
                    <!--end::Label-->
        
                    <!--begin::Col-->
                    <div class="col-lg-8 fv-row">
                        <span class="fw-semibold text-gray-800 fs-6">{{Auth::user()->name}}</span>                         
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Input group-->
        
                <!--begin::Input group-->
                <div class="row mb-7">
                   <!--begin::Label-->
                   <label class="col-lg-4 fw-semibold text-muted">
                        Nomor Handphone
        
                        <span class="ms-1" data-bs-toggle="tooltip" aria-label="Phone number must be active" data-bs-original-title="Phone number must be active" data-kt-initialized="1">           
                    </label>
                    <!--end::Label-->
                    
                    <!--begin::Col-->
                    <div class="col-lg-8 d-flex align-items-center">
                        <span class="fw-bold fs-6 text-gray-800 me-2">{{Auth::user()->phone}} </span> 
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Input group-->
        
                <!--begin::Input group-->
                <div class="row mb-7">
                    <!--begin::Label-->
                    <label class="col-lg-4 fw-semibold text-muted">Email</label>
                    <!--end::Label-->
        
                    <!--begin::Col-->
                    <div class="col-lg-8">
                        <a href="#" class="fw-semibold fs-6 text-gray-800 text-hover-primary">{{Auth::user()->email}} </a>                         
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Input group-->
        
                <!--begin::Input group-->
                <div class="row mb-7">
                     <!--begin::Label-->
                     <label class="col-lg-4 fw-semibold text-muted">
                        Tanggal Lahir
                        
                        <span class="ms-1" data-bs-toggle="tooltip" aria-label="Country of origination" data-bs-original-title="Country of origination" data-kt-initialized="1">
                            <i class="ki-outline ki-information fs-7"></i>                </span>
                    </label>
                    <!--end::Label-->
        
                    <!--begin::Col-->
                    <div class="col-lg-8">
                        <span class="fw-bold fs-6 text-gray-800">{{Auth::user()->date_birth}} </span> 
                    </div>
                    <!--end::Col-->
                </div>
                <!--end::Input group-->    
        
                <!--begin::Input group-->
                <div class="row mb-7">
                    <!--begin::Label-->
                    <label class="col-lg-4 fw-semibold text-muted">Foto</label>
                    <!--end::Label-->
        
                    <!--begin::Col-->
                    <div class="col-lg-8">
                        <span class="fw-bold fs-6 text-gray-800">
                            <img src="{{asset('storage/' . Auth::user()->photo) ? asset('img/profile.jpg') : asset('img/profile.jpg')}}" width="100" height="100">
                        </span>  
                    </div>
                    <!--end::Col-->
                </div>
            </div>
            <!--end::Card body-->     
        </div>
        {{-- <div class="card mb-5 mb-xxl-8">
            <div class="card-body pt-9 pb-0">
                <h3 class="text-gray-900 text-hover-primary fs-2 fw-bold me-1">{{Auth::user()->name}}</h3>
                    <br>
                <!--begin::Details-->
                <div class="d-flex flex-wrap flex-sm-nowrap">
                    <!--begin: Pic-->
                    <div class="me-7 mb-4">
                        <div
                        class="symbol symbol-100px symbol-lg-160px symbol-fixed position-relative">
                            <img src="{{asset('storage/' . Auth::user()->photo) ? asset('img/profile.jpg') : asset('img/profile.jpg')}}" alt="image" />
                            
                        </div>
                    </div>
                    <!--end::Pic-->

                    <!--begin::Info-->
                    <div class="flex-grow-1">
                        <!--begin::Title-->
                        <div
                            class="d-flex justify-content-between align-items-start flex-wrap mb-2">
                            <!--begin::User-->
                            <div class="d-flex flex-column">
                                <!--begin::Name-->
                                <div class="d-flex align-items-center mb-2">
                                    <a href="#" class="text-gray-900 text-hover-primary fs-2 fw-bold me-1">{{Auth::user()->name}}</a>
                                    <a href="#">
                                        <i class="ki-duotone ki-verify fs-1 text-primary">
                                            <span class="path1"></span>
                                            <span class="path2"></span>
                                        </i>
                                    </a>
                                </div>
                                <!--end::Name-->
                            </div>
                            <!--end::User--> 
                        </div>
                        <!--end::Title-->

                        <!--begin::Stats-->
                        <div class="d-flex flex-wrap flex-stack">
                            <!--begin::Wrapper-->
                            <div class="d-flex flex-column flex-grow-1 pe-8">
                                <!--begin::Stats-->
                                <div class="d-flex flex-wrap">
                                    <div class="d-flex align-items-center w-200px w-sm-900px flex-column mt-3">
                                        <div class="d-flex justify-content-between w-100 mt-auto mb-2">
                                            <span class="fw-semibold fs-6 text-gray-400">Profile
                                                Compleation</span>
                                            <span class="fw-bold fs-6">50%</span>
                                        </div>

                                        <div class="h-20px mx-3 w-100 bg-light mb-3">
                                            <div class="bg-success rounded h-20px" role="progressbar"
                                                style="width: 50%;" aria-valuenow="50" aria-valuemin="0"
                                                aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                                <!--end::Stats-->
                                <!--begin::Stats-->
                                <div class="d-flex flex-wrap">
                                    <div class="d-flex align-items-center w-200px w-sm-900px flex-column mt-3">
                                        <div class="d-flex justify-content-between w-100 mt-auto mb-2">
                                            <span class="fw-semibold fs-6 text-gray-400">Profile
                                                Compleation</span>
                                            <span class="fw-bold fs-6">50%</span>
                                        </div>

                                        <div class="h-20px mx-3 w-100 bg-light mb-3">
                                            <div class="bg-success rounded h-20px" role="progressbar"
                                                style="width: 50%;" aria-valuenow="50" aria-valuemin="0"
                                                aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                                <!--end::Stats-->
                                <!--begin::Stats-->
                                <div class="d-flex flex-wrap">
                                    <div class="d-flex align-items-center w-200px w-sm-900px flex-column mt-3">
                                        <div class="d-flex justify-content-between w-100 mt-auto mb-2">
                                            <span class="fw-semibold fs-6 text-gray-400">Profile
                                                Compleation</span>
                                            <span class="fw-bold fs-6">50%</span>
                                        </div>

                                        <div class="h-20px mx-3 w-100 bg-light mb-3">
                                            <div class="bg-success rounded h-20px" role="progressbar"
                                                style="width: 50%;" aria-valuenow="50" aria-valuemin="0"
                                                aria-valuemax="100"></div>
                                        </div>
                                    </div>
                                </div>
                                <!--end::Stats-->
                            </div>
                            <!--end::Wrapper-->
                        </div>
                        <!--end::Stats-->
                    </div>
                    <!--end::Info-->
                </div>
                <!--end::Details--> 
            </div>
        </div> --}}
        <!--end::Navbar--> 
        <!--end::Row-->


    </div>
    <!--end::Content container-->

</x-app-layout>