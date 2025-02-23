<?php if (isset($component)) { $__componentOriginal1c2e2f4f77e507b499e79defc0d48b7e = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal1c2e2f4f77e507b499e79defc0d48b7e = $attributes; } ?>
<?php $component = App\View\Components\DefaultLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('default-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\DefaultLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>

    <div class="row mb-5 mt-5">
        <div class="col-md-4">
            <div class="card card-flush h-xl-100">
                <div class="card-body d-flex flex-column h-100 py-9">
                    <div class="d-flex align-items-center mb-7">
                        <i class="ki-duotone ki-laptop fs-1 text-primary me-3">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>
                        <span class="fs-5 fw-bold text-gray-800">Laptop </span>
                    </div>
                    <div class="mb-6">
                        <div class="d-flex">
                            <div class="border border-gray-300 border-dashed rounded min-w-100px w-100 py-2 px-4 me-3 mb-3">
                                <div class="fw-semibold text-gray-400">All laptop</div>
                                <span class="fs-6 text-gray-700 fw-bold">50</span>
                            </div>
                            <div class="border border-gray-300 border-dashed rounded min-w-100px w-100 py-2 px-4 me-3 mb-3">
                                <div class="fw-semibold text-gray-400">In store</div>
                                <span class="fs-6 text-gray-700 fw-bold">0</span>
                            </div>
                            <div class="border border-gray-300 border-dashed rounded min-w-100px w-100 py-2 px-4 mb-3">
                                <div class="fw-semibold text-gray-400">In use</div>
                                <span class="fs-6 text-gray-700 fw-bold">50</span>
                                <span class="text-success fs-base">+0.00%</span>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-light-primary mt-auto w-100 py-3 px-4 fs-7">
                        View all
                        <i class="ki-duotone ki-double-right">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>
                    </button>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-flush h-xl-100">
                <div class="card-body d-flex flex-column h-100 py-9">
                    <div class="d-flex align-items-center mb-7">
                        <i class="ki-duotone ki-phone fs-1 text-primary me-3">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>
                        <span class="fs-5 fw-bold text-gray-800">Phone </span>
                    </div>
                    <div class="mb-6">
                        <div class="d-flex">
                            <div class="border border-gray-300 border-dashed rounded min-w-100px w-100 py-2 px-4 me-3 mb-3">
                                <div class="fw-semibold text-gray-400">All phone</div>
                                <span class="fs-6 text-gray-700 fw-bold">50</span>
                            </div>
                            <div class="border border-gray-300 border-dashed rounded min-w-100px w-100 py-2 px-4 me-3 mb-3">
                                <div class="fw-semibold text-gray-400">In store</div>
                                <span class="fs-6 text-gray-700 fw-bold">0</span>
                            </div>
                            <div class="border border-gray-300 border-dashed rounded min-w-100px w-100 py-2 px-4 mb-3">
                                <div class="fw-semibold text-gray-400">In use</div>
                                <span class="fs-6 text-gray-700 fw-bold">50</span>
                                <span class="text-success fs-base">+0.00%</span>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-light-primary mt-auto w-100 py-3 px-4 fs-7">
                        View all
                        <i class="ki-duotone ki-double-right">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>
                    </button>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-flush h-xl-100">
                <div class="card-body d-flex flex-column h-100 py-9">
                    <div class="d-flex align-items-center mb-7">
                        <i class="ki-duotone ki-simcard fs-1 text-primary me-3">
                            <span class="path1"></span>
                            <span class="path2"></span>
                            <span class="path3"></span>
                            <span class="path4"></span>
                            <span class="path5"></span>
                        </i>
                        <span class="fs-5 fw-bold text-gray-800">SIM Card </span>
                    </div>
                    <div class="mb-6">
                        <div class="d-flex">
                            <div class="border border-gray-300 border-dashed rounded min-w-100px w-100 py-2 px-4 me-3 mb-3">
                                <div class="fw-semibold text-gray-400">All SIM</div>
                                <span class="fs-6 text-gray-700 fw-bold">50</span>
                            </div>
                            <div class="border border-gray-300 border-dashed rounded min-w-100px w-100 py-2 px-4 me-3 mb-3">
                                <div class="fw-semibold text-gray-400">In store</div>
                                <span class="fs-6 text-gray-700 fw-bold">0</span>
                            </div>
                            <div class="border border-gray-300 border-dashed rounded min-w-100px w-100 py-2 px-4 mb-3">
                                <div class="fw-semibold text-gray-400">In use</div>
                                <span class="fs-6 text-gray-700 fw-bold">50</span>
                                <span class="text-success fs-base">+0.00%</span>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-light-primary mt-auto w-100 py-3 px-4 fs-7">
                        View all
                        <i class="ki-duotone ki-double-right">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>
                    </button>
                </div>
            </div>
        </div>

    </div>

    <div class="row g-5 g-xl-10 mb-5 mb-xl-10">
        <!--begin::Col-->
        <div class="col-md-6 col-lg-6 col-xl-6 col-xxl-3 mb-md-5 mb-xl-10">
            <div class="card card-flush bgi-no-repeat bgi-size-contain bgi-position-x-end h-md-50 mb-5 mb-xl-10" style="background-color: #F1416C;">
                <div class="card-header pt-5">
                    <div class="card-title d-flex flex-column">
                        <span class="fs-2hx fw-bold text-white me-2 lh-1 ls-n2">Out of Service</span>
                        <span class="text-white opacity-75 pt-1 fw-semibold fs-6">Screen</span>
                    </div>
                </div>
                <div class="card-body d-flex align-items-end pt-0">
                    <div class="d-flex align-items-center flex-column mt-3 w-100">
                        <div class="d-flex justify-content-between fw-bold fs-6 text-white opacity-75 w-100 mt-auto mb-2">
                            <span>100 Devices</span>
                            <span>75%</span>
                        </div>
                        <div class="h-8px mx-3 w-100 bg-white bg-opacity-50 rounded">
                            <div class="bg-white rounded h-8px" role="progressbar" style="width: 75%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card card-flush bgi-no-repeat bgi-size-contain bgi-position-x-end h-md-50 mb-5 mb-xl-10" style="background-color: #416CF1;">
                <div class="card-header pt-5">
                    <div class="card-title d-flex flex-column">
                        <span class="fs-2hx fw-bold text-white me-2 lh-1 ls-n2">In store</span>
                        <span class="text-white opacity-75 pt-1 fw-semibold fs-6">Active Devices</span>
                    </div>
                </div>
                <div class="card-body d-flex align-items-end pt-0">
                    <div class="d-flex align-items-center flex-column mt-3 w-100">
                        <div class="d-flex justify-content-between fw-bold fs-6 text-white opacity-75 w-100 mt-auto mb-2">
                            <span>100 Devices</span>
                            <span>70%</span>
                        </div>
                        <div class="h-8px mx-3 w-100 bg-white bg-opacity-50 rounded">
                            <div class="bg-white rounded h-8px" role="progressbar" style="width: 70%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>


            
        </div>
        <!--end::Col-->
        <!--begin::Col-->
        <div class="col-md-6 col-lg-6 col-xl-6 col-xxl-3 mb-md-5 mb-xl-10">
            <div class="card card-flush bgi-no-repeat bgi-size-contain bgi-position-x-end h-md-50 mb-5 mb-xl-10" style="background-color: #F1C641;">
                <div class="card-header pt-5">
                    <div class="card-title d-flex flex-column">
                        <span class="fs-2hx fw-bold text-white me-2 lh-1 ls-n2">Pending</span>
                    </div>
                </div>
                <div class="card-body d-flex align-items-end pt-0">
                    <div class="d-flex align-items-center flex-column mt-3 w-100">
                        <div class="d-flex justify-content-between fw-bold fs-6 text-white opacity-75 w-100 mt-auto mb-2">
                            <span>100 Devices</span>
                            <span>10%</span>
                        </div>
                        <div class="h-8px mx-3 w-100 bg-white bg-opacity-50 rounded">
                            <div class="bg-white rounded h-8px" role="progressbar" style="width: 10%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card card-flush bgi-no-repeat bgi-size-contain bgi-position-x-end h-md-50 mb-5 mb-xl-10" style="background-color: #41F16C;">
                <div class="card-header pt-5">
                    <div class="card-title d-flex flex-column">
                        <span class="fs-2hx fw-bold text-white me-2 lh-1 ls-n2">In Use</span>
                        <span class="text-white opacity-75 pt-1 fw-semibold fs-6">Used Devices</span>
                    </div>
                </div>
                <div class="card-body d-flex align-items-end pt-0">
                    <div class="d-flex align-items-center flex-column mt-3 w-100">
                        <div class="d-flex justify-content-between fw-bold fs-6 text-white opacity-75 w-100 mt-auto mb-2">
                            <span>100 Devices</span>
                            <span>50%</span>
                        </div>
                        <div class="h-8px mx-3 w-100 bg-white bg-opacity-50 rounded">
                            <div class="bg-white rounded h-8px" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--end::Col-->




        <!--begin::Col-->
        <div class="col-xxl-6">
            
            <!--begin::Engage widget 10-->
            <div class="card card-flush h-md-100">
                <!--begin::Body-->
                <div class="card-body d-flex flex-column justify-content-between mt-9 bgi-no-repeat bgi-size-cover bgi-position-x-center pb-0" style="background-position: 100% 50%; background-image:url('assets/media/stock/900x600/42.png')">
                    <!--begin::Wrapper-->
                    <div class="mb-10">
                        <!--begin::Title-->
                        <div class="fs-2hx fw-bold text-gray-800 text-center mb-13">
                        <span class="me-2">Add devices to your store and start assign to see actions here
                        </span></div>
                        <!--end::Title-->
                        <!--begin::Action-->
                        <div class="text-center">
                            <a href='#' class="btn btn-sm btn-light-primary fw-bold" data-bs-toggle="modal" data-bs-target="#kt_modal_upgrade_plan">Add New Device</a>
                        </div>
                        <!--begin::Action-->
                    </div>
                    <!--begin::Wrapper-->
                    <!--begin::Illustration-->
                    <img class="mx-auto h-150px h-lg-200px theme-light-show" src="assets/media/illustrations/misc/upgrade.svg" alt="" />
                    <img class="mx-auto h-150px h-lg-200px theme-dark-show" src="assets/media/illustrations/misc/upgrade-dark.svg" alt="" />
                    <!--end::Illustration-->
                </div>
                <!--end::Body-->
            </div>
            <!--end::Engage widget 10-->

        </div>
        <!--end::Col-->
    </div>

    <div class="row g-5 g-xl-10 mb-5 mb-xl-10">


        <div class="col-md-6">
            <div class="card card-xl-stretch mb-xl-8">
                <div class="card-header border-0 pt-5">
                    <h3 class="card-title align-items-start flex-column">
                        <span class="card-label fw-bold fs-3 mb-1">Recent Statistics</span>
                        <span class="text-muted fw-semibold fs-7">More than 400 new members</span>
                    </h3>
                    <div class="card-toolbar">
                        <button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                            <i class="ki-duotone ki-category fs-6"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>
                        </button>
                        <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_67bb21b4a9ec2">
                            <div class="px-7 py-5">
                                <div class="fs-5 text-gray-900 fw-bold">Filter Options</div>
                            </div>
                            <div class="separator border-gray-200"></div>
                            <div class="px-7 py-5">
                                <div class="mb-10">
                                    <label class="form-label fw-semibold">Status:</label>
                                    <div>
                                        <select class="form-select form-select-solid select2-hidden-accessible" multiple="" data-kt-select2="true" data-close-on-select="false" data-placeholder="Select option" data-dropdown-parent="#kt_menu_67bb21b4a9ec2" data-allow-clear="true" data-select2-id="select2-data-9-e9np" tabindex="-1" aria-hidden="true" data-kt-initialized="1">
                                            <option></option>
                                            <option value="1">Approved</option>
                                            <option value="2">Pending</option>
                                            <option value="2">In Process</option>
                                            <option value="2">Rejected</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-10">
                                    <label class="form-label fw-semibold">Member Type:</label>
                                    <div class="d-flex">
                                        <label class="form-check form-check-sm form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="checkbox" value="1">
                                            <span class="form-check-label">Author</span>
                                        </label>
                                        <label class="form-check form-check-sm form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="2" checked="checked">
                                            <span class="form-check-label">Customer</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="mb-10">
                                    <label class="form-label fw-semibold">Notifications:</label>
                                    <div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="" name="notifications" checked="">
                                        <label class="form-check-label">Enabled</label>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-end">
                                    <button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true">Reset</button>
                                    <button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Apply</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div id="kt_charts_widget_1_chart" style="height: 350px; min-height: 365px;">
                        
                    </div>
                </div>
            </div>
        </div>

        <!--begin::Col-->
        <div class="col-md-6">
            
            <!--begin::Engage widget 10-->
            
            <!--end::Engage widget 10-->
            <div class="card card-xl-stretch mb-xl-8">
                <!--begin::Beader-->
                <div class="card-header border-0 py-5">
                    <h3 class="card-title align-items-start flex-column">
                        <span class="card-label fw-bold fs-3 mb-1">Action Needed</span>
                        <span class="text-muted fw-semibold fs-7">Complete your profile setup</span>
                    </h3>

                    <div class="card-toolbar">
                        <!--begin::Menu-->
                        <button type="button" class="btn btn-sm btn-icon btn-color-primary btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                            <i class="ki-duotone ki-category fs-6"><span class="path1"></span><span class="path2"></span><span class="path3"></span><span class="path4"></span></i>            </button>


            <!--begin::Menu 1-->
            <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_67bb257f7df0f">
                <!--begin::Header-->
                <div class="px-7 py-5">
                    <div class="fs-5 text-gray-900 fw-bold">Filter Options</div>
                </div>
                <!--end::Header-->

                <!--begin::Menu separator-->
                <div class="separator border-gray-200"></div>
                <!--end::Menu separator-->


                <!--begin::Form-->
                <div class="px-7 py-5">
                    <!--begin::Input group-->
                    <div class="mb-10">
                        <!--begin::Label-->
                        <label class="form-label fw-semibold">Status:</label>
                        <!--end::Label-->

                        <!--begin::Input-->
                        <div>
                            <select class="form-select form-select-solid select2-hidden-accessible" multiple="" data-kt-select2="true" data-close-on-select="false" data-placeholder="Select option" data-dropdown-parent="#kt_menu_67bb257f7df0f" data-allow-clear="true" data-select2-id="select2-data-15-4rj1" tabindex="-1" aria-hidden="true" data-kt-initialized="1">
                                <option></option>
                                <option value="1">Approved</option>
                                <option value="2">Pending</option>
                                <option value="2">In Process</option>
                                <option value="2">Rejected</option>
                            </select><span class="select2 select2-container select2-container--bootstrap5" dir="ltr" data-select2-id="select2-data-16-hdkg" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--multiple form-select form-select-solid" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1" aria-disabled="false"><ul class="select2-selection__rendered" id="select2-44a7-container"></ul><span class="select2-search select2-search--inline"><textarea class="select2-search__field" type="search" tabindex="0" autocorrect="off" autocapitalize="none" spellcheck="false" role="searchbox" aria-autocomplete="list" autocomplete="off" aria-label="Search" aria-describedby="select2-44a7-container" placeholder="Select option" style="width: 100%;"></textarea></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                        </div>
                        <!--end::Input-->
                    </div>
                    <!--end::Input group-->

                    <!--begin::Input group-->
                    <div class="mb-10">
                        <!--begin::Label-->
                        <label class="form-label fw-semibold">Member Type:</label>
                        <!--end::Label-->

                        <!--begin::Options-->
                        <div class="d-flex">
                            <!--begin::Options-->
                            <label class="form-check form-check-sm form-check-custom form-check-solid me-5">
                                <input class="form-check-input" type="checkbox" value="1">
                                <span class="form-check-label">
                                    Author
                                </span>
                            </label>
                            <!--end::Options-->

                            <!--begin::Options-->
                            <label class="form-check form-check-sm form-check-custom form-check-solid">
                                <input class="form-check-input" type="checkbox" value="2" checked="checked">
                                <span class="form-check-label">
                                    Customer
                                </span>
                            </label>
                            <!--end::Options-->
                        </div>
                        <!--end::Options-->
                    </div>
                    <!--end::Input group-->

                    <!--begin::Input group-->
                    <div class="mb-10">
                        <!--begin::Label-->
                        <label class="form-label fw-semibold">Notifications:</label>
                        <!--end::Label-->

                        <!--begin::Switch-->
                        <div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                            <input class="form-check-input" type="checkbox" value="" name="notifications" checked="">
                            <label class="form-check-label">
                                Enabled
                            </label>
                        </div>
                        <!--end::Switch-->
                    </div>
                    <!--end::Input group-->

                    <!--begin::Actions-->
                    <div class="d-flex justify-content-end">
                        <button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true">Reset</button>

                        <button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Apply</button>
                    </div>
                    <!--end::Actions-->
                </div>
                <!--end::Form-->
            </div>
            <!--end::Menu 1-->            <!--end::Menu-->
                    </div>
                </div>
                <!--end::Header-->

                <!--begin::Body-->
                <div class="card-body d-flex flex-column">
                    <div class="flex-grow-1">
                        <div class="mixed-widget-4-chart" data-kt-chart-color="primary" style="height: 200px; min-height: 203px;">

                        </div>
                    </div>

                    <div class="pt-5">
                        <p class="text-center fs-6 pb-5 ">
                            <span class="badge badge-light-danger fs-8">Notes:</span>&nbsp;
                            Current sprint requires stakeholders<br>
                            to approve newly amended policies
                        </p>

                        <a href="#" class="btn btn-primary w-100 py-3">Take Action</a>
                    </div>
                </div>
                <!--end::Body-->
            </div>
        </div>
        <!--end::Col-->
    </div>














    

    

    

    
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal1c2e2f4f77e507b499e79defc0d48b7e)): ?>
<?php $attributes = $__attributesOriginal1c2e2f4f77e507b499e79defc0d48b7e; ?>
<?php unset($__attributesOriginal1c2e2f4f77e507b499e79defc0d48b7e); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal1c2e2f4f77e507b499e79defc0d48b7e)): ?>
<?php $component = $__componentOriginal1c2e2f4f77e507b499e79defc0d48b7e; ?>
<?php unset($__componentOriginal1c2e2f4f77e507b499e79defc0d48b7e); ?>
<?php endif; ?>
<?php /**PATH D:\Important Materials\starterkit\resources\views/pages/dashboards/index.blade.php ENDPATH**/ ?>