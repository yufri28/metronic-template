<?php require './header.php';?>
<!--begin::Container-->
<div id="kt_content_container" class="d-flex flex-column-fluid align-items-stretch container-xxl">
    <!--begin::Aside-->
    <div id="kt_aside" class="aside" data-kt-drawer="true" data-kt-drawer-name="aside"
        data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true"
        data-kt-drawer-width="{default:'200px', '300px': '225px'}" data-kt-drawer-direction="start"
        data-kt-drawer-toggle="#kt_aside_toggle" data-kt-sticky="true" data-kt-sticky-name="aside-sticky"
        data-kt-sticky-offset="{default: false, lg: '1px'}" data-kt-sticky-width="{lg: '225px'}"
        data-kt-sticky-left="auto" data-kt-sticky-top="94px" data-kt-sticky-animation="false"
        data-kt-sticky-zindex="95">
        <!--begin::Aside nav-->
        <div class="hover-scroll-overlay-y my-5 my-lg-5 w-100 ps-4 ps-lg-0 pe-4 me-1" id="kt_aside_menu_wrapper"
            data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-height="auto"
            data-kt-scroll-dependencies="#kt_header" data-kt-scroll-wrappers="#kt_aside" data-kt-scroll-offset="5px">
            <!--begin::Menu-->
            <div class="menu menu-column menu-active-bg menu-hover-bg menu-title-gray-700 fs-6 menu-rounded w-100"
                id="#kt_aside_menu" data-kt-menu="true">
                <!--begin::Heading-->
                <div class="menu-item">
                    <div class="menu-content pb-2">
                        <span class="menu-section text-muted text-uppercase fs-7 fw-bolder">Public</span>
                    </div>
                </div>
                <!--end::Heading-->
                <!--begin::Menu item-->
                <div class="menu-item">
                    <a href="../../demo5/dist/index.html" class="menu-link active">
                        <span class="menu-title">All Questions</span>
                        <span class="menu-badge">6,234</span>
                    </a>
                </div>
                <!--end::Menu item-->
                <!--begin::Menu item-->
                <div class="menu-item">
                    <a href="../../demo5/dist/apps/devs/search.html" class="menu-link">
                        <span class="menu-title">Search</span>
                    </a>
                </div>
                <!--end::Menu item-->
                <!--begin::Menu item-->
                <div class="menu-item">
                    <a href="../../demo5/dist/apps/devs/tag.html" class="menu-link">
                        <span class="menu-title">Tags</span>
                    </a>
                </div>
                <!--end::Menu item-->
                <!--begin::Menu item-->
                <div class="menu-item">
                    <a href="../../demo5/dist/apps/devs/ask.html" class="menu-link">
                        <span class="menu-title">Ask Question</span>
                    </a>
                </div>
                <!--end::Menu item-->
                <!--begin::Heading-->
                <div class="menu-item pt-5">
                    <div class="menu-content pb-2">
                        <span class="menu-section text-muted text-uppercase fs-7 fw-bolder">My Activity</span>
                    </div>
                </div>
                <!--end::Heading-->
                <!--begin::Menu item-->
                <div class="menu-item">
                    <a href="../../demo5/dist/apps/devs/question.html" class="menu-link">
                        <span class="menu-title">My Questions</span>
                        <span class="menu-badge">24</span>
                    </a>
                </div>
                <!--end::Menu item-->
                <!--begin::Menu item-->
                <div class="menu-item">
                    <a href="../../demo5/dist/index.html" class="menu-link">
                        <span class="menu-title">Resolved</span>
                        <span class="menu-badge">120</span>
                    </a>
                </div>
                <!--end::Menu item-->
                <!--begin::Menu item-->
                <div class="menu-item">
                    <a href="../../demo5/dist/index.html" class="menu-link">
                        <span class="menu-title">Enrolled</span>
                        <span class="menu-badge">10</span>
                    </a>
                </div>
                <!--end::Menu item-->
                <!--begin::Menu item-->
                <div class="menu-item">
                    <a href="../../demo5/dist/index.html" class="menu-link">
                        <span class="menu-title">Saved</span>
                        <span class="menu-badge">6</span>
                    </a>
                </div>
                <!--end::Menu item-->
                <!--begin::Heading-->
                <div class="menu-item pt-5">
                    <div class="menu-content pb-2">
                        <span class="menu-section text-muted text-uppercase fs-7 fw-bolder">Categories</span>
                    </div>
                </div>
                <!--end::Heading-->
                <!--begin::Menu item-->
                <div class="menu-item">
                    <a href="../../demo5/dist/index.html" class="menu-link">
                        <span class="menu-title">Metronic Admin</span>
                        <span class="menu-badge">1,400</span>
                    </a>
                </div>
                <!--end::Menu item-->
                <!--begin::Menu item-->
                <div class="menu-item">
                    <a href="../../demo5/dist/index.html" class="menu-link">
                        <span class="menu-title">Backend Integration</span>
                        <span class="menu-badge">235</span>
                    </a>
                </div>
                <!--end::Menu item-->
                <!--begin::Menu item-->
                <div class="menu-item">
                    <a href="../../demo5/dist/index.html" class="menu-link">
                        <span class="menu-title">Suggestions</span>
                        <span class="menu-badge">25</span>
                    </a>
                </div>
                <!--end::Menu item-->
                <!--begin::Menu item-->
                <div class="menu-item">
                    <a href="../../demo5/dist/index.html" class="menu-link">
                        <span class="menu-title">Pre-sale Questions</span>
                        <span class="menu-badge">145</span>
                    </a>
                </div>
                <!--end::Menu item-->
                <!--begin::Menu item-->
                <div class="menu-item">
                    <a href="../../demo5/dist/index.html" class="menu-link">
                        <span class="menu-title">Laravel Starter Kit</span>
                        <span class="menu-badge">750</span>
                    </a>
                </div>
                <!--end::Menu item-->
                <!--begin::Collapse-->
                <div class="collapse" id="kt_aside_categories_more">
                    <!--begin::Menu item-->
                    <div class="menu-item">
                        <a href="../../demo5/dist/index.html" class="menu-link">
                            <span class="menu-title">Blazor Integration</span>
                            <span class="menu-badge">100</span>
                        </a>
                    </div>
                    <!--end::Menu item-->
                    <!--begin::Menu item-->
                    <div class="menu-item">
                        <a href="../../demo5/dist/index.html" class="menu-link">
                            <span class="menu-title">Django Dashboard</span>
                            <span class="menu-badge">90</span>
                        </a>
                    </div>
                    <!--end::Menu item-->
                    <!--begin::Menu item-->
                    <div class="menu-item">
                        <a href="../../demo5/dist/index.html" class="menu-link">
                            <span class="menu-title">Rails CRUD</span>
                            <span class="menu-badge">14</span>
                        </a>
                    </div>
                    <!--end::Menu item-->
                    <!--begin::Menu item-->
                    <div class="menu-item">
                        <a href="../../demo5/dist/index.html" class="menu-link">
                            <span class="menu-title">.NET Starter Kit</span>
                            <span class="menu-badge">30</span>
                        </a>
                    </div>
                    <!--end::Menu item-->
                </div>
                <!--end::Collapse-->
                <!--begin::Heading-->
                <div class="menu-item">
                    <div class="menu-link">
                        <a hred="#" class="menu-title text-muted fs-7" id="kt_aside_categories_toggle"
                            data-bs-toggle="collapse" data-bs-target="#kt_aside_categories_more">More Categories</a>
                    </div>
                </div>
                <!--end::Heading-->
            </div>
            <!--end::Menu-->
        </div>
        <!--end::Aside nav-->
    </div>
    <!--end::Aside-->


    <!--begin::Wrapper-->
    <div class="wrapper d-flex flex-column flex-row-fluid mt-5 mt-lg-10" id="kt_wrapper">
        <!--begin::Content-->
        <div class="content flex-column-fluid" id="kt_content">
            <!--begin::Toolbar-->
            <div class="toolbar d-flex flex-stack flex-wrap mb-5 mb-lg-7" id="kt_toolbar">
                <!--begin::Page title-->
                <div class="page-title d-flex flex-column py-1">
                    <!--begin::Title-->
                    <h1 class="d-flex align-items-center my-1">
                        <span class="text-dark fw-bolder fs-1">All Questions</span>
                        <!--begin::Description-->
                        <small class="text-muted fs-6 fw-bold ms-1">(6,299)</small>
                        <!--end::Description-->
                    </h1>
                    <!--end::Title-->
                </div>
                <!--end::Page title-->
                <!--begin::Actions-->
                <div class="d-flex align-items-center py-1">
                    <!--begin::Wrapper-->
                    <div class="me-4 d-none">
                        <!--begin::Menu-->
                        <a href="#" class="btn btn-flex btn-light btn-active-primary fw-bolder"
                            data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                            <!--begin::Svg Icon | path: icons/duotune/general/gen031.svg-->
                            <span class="svg-icon svg-icon-5 svg-icon-gray-500 me-1">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none">
                                    <path
                                        d="M19.0759 3H4.72777C3.95892 3 3.47768 3.83148 3.86067 4.49814L8.56967 12.6949C9.17923 13.7559 9.5 14.9582 9.5 16.1819V19.5072C9.5 20.2189 10.2223 20.7028 10.8805 20.432L13.8805 19.1977C14.2553 19.0435 14.5 18.6783 14.5 18.273V13.8372C14.5 12.8089 14.8171 11.8056 15.408 10.964L19.8943 4.57465C20.3596 3.912 19.8856 3 19.0759 3Z"
                                        fill="black" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->Filter
                        </a>
                        <!--begin::Menu 1-->
                        <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true"
                            id="kt_menu_61485451405ca">
                            <!--begin::Header-->
                            <div class="px-7 py-5">
                                <div class="fs-5 text-dark fw-bolder">Filter Options</div>
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
                                    <label class="form-label fw-bold">Status:</label>
                                    <!--end::Label-->
                                    <!--begin::Input-->
                                    <div>
                                        <select class="form-select form-select-solid" data-kt-select2="true"
                                            data-placeholder="Select option"
                                            data-dropdown-parent="#kt_menu_61485451405ca" data-allow-clear="true">
                                            <option></option>
                                            <option value="1">Approved</option>
                                            <option value="2">Pending</option>
                                            <option value="2">In Process</option>
                                            <option value="2">Rejected</option>
                                        </select>
                                    </div>
                                    <!--end::Input-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="mb-10">
                                    <!--begin::Label-->
                                    <label class="form-label fw-bold">Member Type:</label>
                                    <!--end::Label-->
                                    <!--begin::Options-->
                                    <div class="d-flex">
                                        <!--begin::Options-->
                                        <label class="form-check form-check-sm form-check-custom form-check-solid me-5">
                                            <input class="form-check-input" type="checkbox" value="1" />
                                            <span class="form-check-label">Author</span>
                                        </label>
                                        <!--end::Options-->
                                        <!--begin::Options-->
                                        <label class="form-check form-check-sm form-check-custom form-check-solid">
                                            <input class="form-check-input" type="checkbox" value="2"
                                                checked="checked" />
                                            <span class="form-check-label">Customer</span>
                                        </label>
                                        <!--end::Options-->
                                    </div>
                                    <!--end::Options-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Input group-->
                                <div class="mb-10">
                                    <!--begin::Label-->
                                    <label class="form-label fw-bold">Notifications:</label>
                                    <!--end::Label-->
                                    <!--begin::Switch-->
                                    <div
                                        class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="" name="notifications"
                                            checked="checked" />
                                        <label class="form-check-label">Enabled</label>
                                    </div>
                                    <!--end::Switch-->
                                </div>
                                <!--end::Input group-->
                                <!--begin::Actions-->
                                <div class="d-flex justify-content-end">
                                    <button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2"
                                        data-kt-menu-dismiss="true">Reset</button>
                                    <button type="submit" class="btn btn-sm btn-primary"
                                        data-kt-menu-dismiss="true">Apply</button>
                                </div>
                                <!--end::Actions-->
                            </div>
                            <!--end::Form-->
                        </div>
                        <!--end::Menu 1-->
                        <!--end::Menu-->
                    </div>
                    <!--end::Wrapper-->
                    <!--begin::Button-->
                    <a href="../../demo5/dist/apps/devs/ask.html"
                        class="btn btn-flex btn-sm btn-primary fw-bolder border-0 fs-6 h-40px"
                        id="kt_toolbar_primary_button">Ask Question</a>
                    <!--end::Button-->
                </div>
                <!--end::Actions-->
            </div>
            <!--end::Toolbar-->
            <!--begin::Post-->
            <div class="post" id="kt_post">
                <!--begin::Questions-->
                <div class="mb-10">
                    <!--begin::Question-->
                    <div class="mb-0">
                        <!--begin::Head-->
                        <div class="d-flex align-items-center mb-4">
                            <!--begin::Title-->
                            <a href="../../demo5/dist/apps/devs/question.html"
                                class="fs-2 fw-bolder text-gray-900 text-hover-primary me-1">How to use Metronic with
                                Django Framework ?</a>
                            <!--end::Title-->
                            <!--begin::Icons-->
                            <div class="d-flex align-items-center">
                                <span class="ms-1" data-bs-toggle="tooltip" title="New question">
                                    <!--begin::Svg Icon | path: icons/duotune/general/gen045.svg-->
                                    <span class="svg-icon svg-icon-primary svg-icon-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10"
                                                fill="black" />
                                            <rect x="11" y="17" width="7" height="2" rx="1"
                                                transform="rotate(-90 11 17)" fill="black" />
                                            <rect x="11" y="9" width="2" height="2" rx="1" transform="rotate(-90 11 9)"
                                                fill="black" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                </span>
                                <span class="ms-1" data-bs-toggle="tooltip" title="User replied">
                                    <!--begin::Svg Icon | path: icons/duotune/communication/com010.svg-->
                                    <span class="svg-icon svg-icon-danger svg-icon-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <path
                                                d="M6 8.725C6 8.125 6.4 7.725 7 7.725H14L18 11.725V12.925L22 9.725L12.6 2.225C12.2 1.925 11.7 1.925 11.4 2.225L2 9.725L6 12.925V8.725Z"
                                                fill="black" />
                                            <path opacity="0.3"
                                                d="M22 9.72498V20.725C22 21.325 21.6 21.725 21 21.725H3C2.4 21.725 2 21.325 2 20.725V9.72498L11.4 17.225C11.8 17.525 12.3 17.525 12.6 17.225L22 9.72498ZM15 11.725H18L14 7.72498V10.725C14 11.325 14.4 11.725 15 11.725Z"
                                                fill="black" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                </span>
                            </div>
                            <!--end::Icons-->
                        </div>
                        <!--end::Head-->
                        <!--begin::Summary-->
                        <div class="fs-base fw-normal text-gray-700 mb-4">I’ve been doing some ajax request, to populate
                            a inside drawer, the content of that drawer has a sub menu, that you are using in list and
                            all card toolbar.</div>
                        <!--end::Summary-->
                        <!--begin::Foot-->
                        <div class="d-flex flex-stack flex-wrap">
                            <!--begin::Author-->
                            <div class="d-flex align-items-center py-1">
                                <!--begin::Symbol-->
                                <div class="symbol symbol-35px me-2">
                                    <div class="symbol-label bg-light-success fs-3 fw-bold text-success text-uppercase">
                                        J</div>
                                </div>
                                <!--end::Symbol-->
                                <!--begin::Name-->
                                <div class="d-flex flex-column align-items-start justify-content-center">
                                    <span class="text-gray-900 fs-7 fw-bold lh-1 mb-2">James Hunt</span>
                                    <span class="text-muted fs-8 fw-bold lh-1">24 minutes ago</span>
                                </div>
                                <!--end::Name-->
                            </div>
                            <!--end::Author-->
                            <!--begin::Info-->
                            <div class="d-flex align-items-center py-1">
                                <!--begin::Answers-->
                                <a href="../../demo5/dist/apps/devs/question.html#answers"
                                    class="btn btn-sm btn-outline btn-outline-dashed btn-outline-default px-4 me-2">16
                                    Answers</a>
                                <!--end::Answers-->
                                <!--begin::Tags-->
                                <a href="../../demo5/dist/apps/devs/tag.html"
                                    class="btn btn-sm btn-light px-4 me-2">Metronic</a>
                                <!--end::Tags-->
                                <!--begin::Upvote-->
                                <a href="#" class="btn btn-sm btn-flex btn-light px-3" data-bs-toggle="tooltip"
                                    title="Upvote this question" data-bs-dismiss="click">23
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr062.svg-->
                                    <span class="svg-icon svg-icon-7ms-2 me-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <path opacity="0.5"
                                                d="M13 9.59998V21C13 21.6 12.6 22 12 22C11.4 22 11 21.6 11 21V9.59998H13Z"
                                                fill="black" />
                                            <path
                                                d="M5.7071 7.89291C5.07714 8.52288 5.52331 9.60002 6.41421 9.60002H17.5858C18.4767 9.60002 18.9229 8.52288 18.2929 7.89291L12.7 2.3C12.3 1.9 11.7 1.9 11.3 2.3L5.7071 7.89291Z"
                                                fill="black" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                </a>
                                <!--end::Upvote-->
                            </div>
                            <!--end::Info-->
                        </div>
                        <!--end::Foot-->
                    </div>
                    <!--end::Question-->
                    <!--begin::Separator-->
                    <div class="separator separator-dashed border-gray-300 my-8"></div>
                    <!--end::Separator-->
                    <!--begin::Question-->
                    <div class="mb-0">
                        <!--begin::Head-->
                        <div class="d-flex align-items-center mb-4">
                            <!--begin::Title-->
                            <a href="../../demo5/dist/apps/devs/question.html"
                                class="fs-2 fw-bolder text-gray-900 text-hover-primary me-1">When to expect new version
                                of Laravel ?</a>
                            <!--end::Title-->
                            <!--begin::Icons-->
                            <div class="d-flex align-items-center">
                                <span class="ms-1" data-bs-toggle="tooltip" title="In-process">
                                    <!--begin::Svg Icon | path: icons/duotune/general/gen044.svg-->
                                    <span class="svg-icon svg-icon-warning svg-icon-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10"
                                                fill="black" />
                                            <rect x="11" y="14" width="7" height="2" rx="1"
                                                transform="rotate(-90 11 14)" fill="black" />
                                            <rect x="11" y="17" width="2" height="2" rx="1"
                                                transform="rotate(-90 11 17)" fill="black" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                </span>
                            </div>
                            <!--end::Icons-->
                        </div>
                        <!--end::Head-->
                        <!--begin::Summary-->
                        <div class="fs-base fw-normal text-gray-700 mb-4">When approx. is the next update for the
                            Laravel version planned? Waiting for the CRUD, 2nd factor etc. features before starting my
                            project. Also can we expect the Laravel + Vue version in the next update ?</div>
                        <!--end::Summary-->
                        <!--begin::Foot-->
                        <div class="d-flex flex-stack flex-wrap">
                            <!--begin::Author-->
                            <div class="d-flex align-items-center py-1">
                                <!--begin::Symbol-->
                                <div class="symbol symbol-35px me-2">
                                    <img src="../assets/media/avatars/150-3.jpg" alt="user" />
                                </div>
                                <!--end::Symbol-->
                                <!--begin::Name-->
                                <div class="d-flex flex-column align-items-start justify-content-center">
                                    <span class="text-gray-900 fs-7 fw-bold lh-1 mb-2">Sandra Piquet</span>
                                    <span class="text-muted fs-8 fw-bold lh-1">1 day ago</span>
                                </div>
                                <!--end::Name-->
                            </div>
                            <!--end::Author-->
                            <!--begin::Info-->
                            <div class="d-flex align-items-center py-1">
                                <!--begin::Answers-->
                                <a href="../../demo5/dist/apps/devs/question.html#answers"
                                    class="btn btn-sm btn-outline btn-outline-dashed btn-outline-default px-4 me-2">2
                                    Answers</a>
                                <!--end::Answers-->
                                <!--begin::Tags-->
                                <a href="../../demo5/dist/apps/devs/tag.html"
                                    class="btn btn-sm btn-light px-4 me-2">Pre-sale</a>
                                <!--end::Tags-->
                                <!--begin::Upvote-->
                                <a href="#" class="btn btn-sm btn-flex btn-light px-3" data-bs-toggle="tooltip"
                                    title="Upvote this question" data-bs-dismiss="click">4
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr062.svg-->
                                    <span class="svg-icon svg-icon-7ms-2 me-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <path opacity="0.5"
                                                d="M13 9.59998V21C13 21.6 12.6 22 12 22C11.4 22 11 21.6 11 21V9.59998H13Z"
                                                fill="black" />
                                            <path
                                                d="M5.7071 7.89291C5.07714 8.52288 5.52331 9.60002 6.41421 9.60002H17.5858C18.4767 9.60002 18.9229 8.52288 18.2929 7.89291L12.7 2.3C12.3 1.9 11.7 1.9 11.3 2.3L5.7071 7.89291Z"
                                                fill="black" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                </a>
                                <!--end::Upvote-->
                            </div>
                            <!--end::Info-->
                        </div>
                        <!--end::Foot-->
                    </div>
                    <!--end::Question-->
                    <!--begin::Separator-->
                    <div class="separator separator-dashed border-gray-300 my-8"></div>
                    <!--end::Separator-->
                    <!--begin::Question-->
                    <div class="mb-0">
                        <!--begin::Head-->
                        <div class="d-flex align-items-center mb-4">
                            <!--begin::Title-->
                            <a href="../../demo5/dist/apps/devs/question.html"
                                class="fs-2 fw-bolder text-gray-900 text-hover-primary me-1">Could not get Demo 7
                                working</a>
                            <!--end::Title-->
                            <!--begin::Icons-->
                            <div class="d-flex align-items-center">
                                <span class="ms-1" data-bs-toggle="tooltip" title="In-process">
                                    <!--begin::Svg Icon | path: icons/duotune/general/gen044.svg-->
                                    <span class="svg-icon svg-icon-warning svg-icon-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10"
                                                fill="black" />
                                            <rect x="11" y="14" width="7" height="2" rx="1"
                                                transform="rotate(-90 11 14)" fill="black" />
                                            <rect x="11" y="17" width="2" height="2" rx="1"
                                                transform="rotate(-90 11 17)" fill="black" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                </span>
                            </div>
                            <!--end::Icons-->
                        </div>
                        <!--end::Head-->
                        <!--begin::Summary-->
                        <div class="fs-base fw-normal text-gray-700 mb-4">could not get demo7 working from latest
                            metronic version. Had a lot of issues installing, I had to downgrade my npm to 6.14.4 as
                            someone else recommended here in the comments, this goot it to compile but when I ran it,
                            the browser showed errors TypeErr..</div>
                        <!--end::Summary-->
                        <!--begin::Foot-->
                        <div class="d-flex flex-stack flex-wrap">
                            <!--begin::Author-->
                            <div class="d-flex align-items-center py-1">
                                <!--begin::Symbol-->
                                <div class="symbol symbol-35px me-2">
                                    <div class="symbol-label bg-light-success fs-3 fw-bold text-success text-uppercase">
                                        N</div>
                                </div>
                                <!--end::Symbol-->
                                <!--begin::Name-->
                                <div class="d-flex flex-column align-items-start justify-content-center">
                                    <span class="text-gray-900 fs-7 fw-bold lh-1 mb-2">Niko Roseberg</span>
                                    <span class="text-muted fs-8 fw-bold lh-1">2 days ago</span>
                                </div>
                                <!--end::Name-->
                            </div>
                            <!--end::Author-->
                            <!--begin::Info-->
                            <div class="d-flex align-items-center py-1">
                                <!--begin::Answers-->
                                <a href="../../demo5/dist/apps/devs/question.html#answers"
                                    class="btn btn-sm btn-outline btn-outline-dashed btn-outline-default px-4 me-2">4
                                    Answers</a>
                                <!--end::Answers-->
                                <!--begin::Tags-->
                                <a href="../../demo5/dist/apps/devs/tag.html"
                                    class="btn btn-sm btn-light px-4 me-2">Angular</a>
                                <!--end::Tags-->
                                <!--begin::Upvote-->
                                <a href="#" class="btn btn-sm btn-flex btn-light btn-icon" data-bs-toggle="tooltip"
                                    title="Upvote this question" data-bs-dismiss="click">
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr062.svg-->
                                    <span class="svg-icon svg-icon-7">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <path opacity="0.5"
                                                d="M13 9.59998V21C13 21.6 12.6 22 12 22C11.4 22 11 21.6 11 21V9.59998H13Z"
                                                fill="black" />
                                            <path
                                                d="M5.7071 7.89291C5.07714 8.52288 5.52331 9.60002 6.41421 9.60002H17.5858C18.4767 9.60002 18.9229 8.52288 18.2929 7.89291L12.7 2.3C12.3 1.9 11.7 1.9 11.3 2.3L5.7071 7.89291Z"
                                                fill="black" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                </a>
                                <!--end::Upvote-->
                            </div>
                            <!--end::Info-->
                        </div>
                        <!--end::Foot-->
                    </div>
                    <!--end::Question-->
                    <!--begin::Separator-->
                    <div class="separator separator-dashed border-gray-300 my-8"></div>
                    <!--end::Separator-->
                    <!--begin::Question-->
                    <div class="mb-0">
                        <!--begin::Head-->
                        <div class="d-flex align-items-center mb-4">
                            <!--begin::Title-->
                            <a href="../../demo5/dist/apps/devs/question.html"
                                class="fs-2 fw-bolder text-gray-900 text-hover-primary me-1">I want to get refund</a>
                            <!--end::Title-->
                            <!--begin::Icons-->
                            <div class="d-flex align-items-center">
                                <span class="ms-1" data-bs-toggle="tooltip" title="Resolved">
                                    <!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
                                    <span class="svg-icon svg-icon-success svg-icon-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10"
                                                fill="black" />
                                            <path
                                                d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z"
                                                fill="black" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                </span>
                            </div>
                            <!--end::Icons-->
                        </div>
                        <!--end::Head-->
                        <!--begin::Summary-->
                        <div class="fs-base fw-normal text-gray-700 mb-4">Your Metronic theme is so good but the reactjs
                            version is typescript only. The description did not write any warn about it. Since I only
                            know javascript, I can not do anything with your theme. I want to refund.</div>
                        <!--end::Summary-->
                        <!--begin::Foot-->
                        <div class="d-flex flex-stack flex-wrap">
                            <!--begin::Author-->
                            <div class="d-flex align-items-center py-1">
                                <!--begin::Symbol-->
                                <div class="symbol symbol-35px me-2">
                                    <img src="../assets/media/avatars/150-6.jpg" alt="user" />
                                </div>
                                <!--end::Symbol-->
                                <!--begin::Name-->
                                <div class="d-flex flex-column align-items-start justify-content-center">
                                    <span class="text-gray-900 fs-7 fw-bold lh-1 mb-2">Alex Bold</span>
                                    <span class="text-muted fs-8 fw-bold lh-1">1 day ago</span>
                                </div>
                                <!--end::Name-->
                            </div>
                            <!--end::Author-->
                            <!--begin::Info-->
                            <div class="d-flex align-items-center py-1">
                                <!--begin::Answers-->
                                <a href="../../demo5/dist/apps/devs/question.html#answers"
                                    class="btn btn-sm btn-outline btn-outline-dashed btn-outline-default px-4 me-2">22
                                    Answers</a>
                                <!--end::Answers-->
                                <!--begin::Tags-->
                                <a href="../../demo5/dist/apps/devs/tag.html"
                                    class="btn btn-sm btn-light px-4 me-2">React</a>
                                <a href="../../demo5/dist/apps/devs/tag.html"
                                    class="btn btn-sm btn-light px-4 me-2">Demo 1</a>
                                <!--end::Tags-->
                                <!--begin::Upvote-->
                                <a href="#" class="btn btn-sm btn-flex btn-light px-3" data-bs-toggle="tooltip"
                                    title="Upvote this question" data-bs-dismiss="click">11
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr062.svg-->
                                    <span class="svg-icon svg-icon-7ms-2 me-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <path opacity="0.5"
                                                d="M13 9.59998V21C13 21.6 12.6 22 12 22C11.4 22 11 21.6 11 21V9.59998H13Z"
                                                fill="black" />
                                            <path
                                                d="M5.7071 7.89291C5.07714 8.52288 5.52331 9.60002 6.41421 9.60002H17.5858C18.4767 9.60002 18.9229 8.52288 18.2929 7.89291L12.7 2.3C12.3 1.9 11.7 1.9 11.3 2.3L5.7071 7.89291Z"
                                                fill="black" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                </a>
                                <!--end::Upvote-->
                            </div>
                            <!--end::Info-->
                        </div>
                        <!--end::Foot-->
                    </div>
                    <!--end::Question-->
                    <!--begin::Separator-->
                    <div class="separator separator-dashed border-gray-300 my-8"></div>
                    <!--end::Separator-->
                    <!--begin::Question-->
                    <div class="mb-0">
                        <!--begin::Head-->
                        <div class="d-flex align-items-center mb-4">
                            <!--begin::Title-->
                            <a href="../../demo5/dist/apps/devs/question.html"
                                class="fs-2 fw-bolder text-gray-900 text-hover-primary me-1">How to integrate Metronic
                                with Blazor Server Side ?</a>
                            <!--end::Title-->
                            <!--begin::Icons-->
                            <div class="d-flex align-items-center">
                                <span class="ms-1" data-bs-toggle="tooltip" title="In-process">
                                    <!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
                                    <span class="svg-icon svg-icon-success svg-icon-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10"
                                                fill="black" />
                                            <path
                                                d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z"
                                                fill="black" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                </span>
                            </div>
                            <!--end::Icons-->
                        </div>
                        <!--end::Head-->
                        <!--begin::Summary-->
                        <div class="fs-base fw-normal text-gray-700 mb-4">could not get demo7 working from latest
                            metronic version. Had a lot of issues installing, I had to downgrade my npm to 6.14.4 as
                            someone else recommended here in the comments, this goot it to compile but when I ran it,
                            the browser showed errors TypeErr..</div>
                        <!--end::Summary-->
                        <!--begin::Foot-->
                        <div class="d-flex flex-stack flex-wrap">
                            <!--begin::Author-->
                            <div class="d-flex align-items-center py-1">
                                <!--begin::Symbol-->
                                <div class="symbol symbol-35px me-2">
                                    <div class="symbol-label bg-light-success fs-3 fw-bold text-success text-uppercase">
                                        T</div>
                                </div>
                                <!--end::Symbol-->
                                <!--begin::Name-->
                                <div class="d-flex flex-column align-items-start justify-content-center">
                                    <span class="text-gray-900 fs-7 fw-bold lh-1 mb-2">Tim Nilson</span>
                                    <span class="text-muted fs-8 fw-bold lh-1">3 days ago</span>
                                </div>
                                <!--end::Name-->
                            </div>
                            <!--end::Author-->
                            <!--begin::Info-->
                            <div class="d-flex align-items-center py-1">
                                <!--begin::Answers-->
                                <a href="../../demo5/dist/apps/devs/question.html#answers"
                                    class="btn btn-sm btn-outline btn-outline-dashed btn-outline-default px-4 me-2">44
                                    Answers</a>
                                <!--end::Answers-->
                                <!--begin::Tags-->
                                <a href="../../demo5/dist/apps/devs/tag.html"
                                    class="btn btn-sm btn-light px-4 me-2">Blazor</a>
                                <!--end::Tags-->
                                <!--begin::Upvote-->
                                <a href="#" class="btn btn-sm btn-flex btn-light px-3" data-bs-toggle="tooltip"
                                    title="Upvote this question" data-bs-dismiss="click">3
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr062.svg-->
                                    <span class="svg-icon svg-icon-7ms-2 me-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <path opacity="0.5"
                                                d="M13 9.59998V21C13 21.6 12.6 22 12 22C11.4 22 11 21.6 11 21V9.59998H13Z"
                                                fill="black" />
                                            <path
                                                d="M5.7071 7.89291C5.07714 8.52288 5.52331 9.60002 6.41421 9.60002H17.5858C18.4767 9.60002 18.9229 8.52288 18.2929 7.89291L12.7 2.3C12.3 1.9 11.7 1.9 11.3 2.3L5.7071 7.89291Z"
                                                fill="black" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                </a>
                                <!--end::Upvote-->
                            </div>
                            <!--end::Info-->
                        </div>
                        <!--end::Foot-->
                    </div>
                    <!--end::Question-->
                    <!--begin::Separator-->
                    <div class="separator separator-dashed border-gray-300 my-8"></div>
                    <!--end::Separator-->
                    <!--begin::Question-->
                    <div class="mb-0">
                        <!--begin::Head-->
                        <div class="d-flex align-items-center mb-4">
                            <!--begin::Title-->
                            <a href="../../demo5/dist/apps/devs/question.html"
                                class="fs-2 fw-bolder text-gray-900 text-hover-primary me-1">Using Metronic with .NET
                                multi tenant application</a>
                            <!--end::Title-->
                            <!--begin::Icons-->
                            <div class="d-flex align-items-center">
                                <span class="ms-1" data-bs-toggle="tooltip" title="Resolved">
                                    <!--begin::Svg Icon | path: icons/duotune/general/gen043.svg-->
                                    <span class="svg-icon svg-icon-success svg-icon-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10"
                                                fill="black" />
                                            <path
                                                d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z"
                                                fill="black" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                </span>
                            </div>
                            <!--end::Icons-->
                        </div>
                        <!--end::Head-->
                        <!--begin::Summary-->
                        <div class="fs-base fw-normal text-gray-700 mb-4">When approx. is the next update for the
                            Laravel version planned? Waiting for the CRUD, 2nd factor etc. features before starting my
                            project. Also can we expect the Laravel + Vue version in the next update ?</div>
                        <!--end::Summary-->
                        <!--begin::Foot-->
                        <div class="d-flex flex-stack flex-wrap">
                            <!--begin::Author-->
                            <div class="d-flex align-items-center py-1">
                                <!--begin::Symbol-->
                                <div class="symbol symbol-35px me-2">
                                    <img src="../assets/media/avatars/150-9.jpg" alt="user" />
                                </div>
                                <!--end::Symbol-->
                                <!--begin::Name-->
                                <div class="d-flex flex-column align-items-start justify-content-center">
                                    <span class="text-gray-900 fs-7 fw-bold lh-1 mb-2">Ana Quil</span>
                                    <span class="text-muted fs-8 fw-bold lh-1">5 days ago</span>
                                </div>
                                <!--end::Name-->
                            </div>
                            <!--end::Author-->
                            <!--begin::Info-->
                            <div class="d-flex align-items-center py-1">
                                <!--begin::Answers-->
                                <a href="../../demo5/dist/apps/devs/question.html#answers"
                                    class="btn btn-sm btn-outline btn-outline-dashed btn-outline-default px-4 me-2">2
                                    Answers</a>
                                <!--end::Answers-->
                                <!--begin::Tags-->
                                <a href="../../demo5/dist/apps/devs/tag.html"
                                    class="btn btn-sm btn-light px-4 me-2">Aspdotnet</a>
                                <!--end::Tags-->
                                <!--begin::Upvote-->
                                <a href="#" class="btn btn-sm btn-flex btn-light px-3" data-bs-toggle="tooltip"
                                    title="Upvote this question" data-bs-dismiss="click">4
                                    <!--begin::Svg Icon | path: icons/duotune/arrows/arr062.svg-->
                                    <span class="svg-icon svg-icon-7ms-2 me-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none">
                                            <path opacity="0.5"
                                                d="M13 9.59998V21C13 21.6 12.6 22 12 22C11.4 22 11 21.6 11 21V9.59998H13Z"
                                                fill="black" />
                                            <path
                                                d="M5.7071 7.89291C5.07714 8.52288 5.52331 9.60002 6.41421 9.60002H17.5858C18.4767 9.60002 18.9229 8.52288 18.2929 7.89291L12.7 2.3C12.3 1.9 11.7 1.9 11.3 2.3L5.7071 7.89291Z"
                                                fill="black" />
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon-->
                                </a>
                                <!--end::Upvote-->
                            </div>
                            <!--end::Info-->
                        </div>
                        <!--end::Foot-->
                    </div>
                    <!--end::Question-->
                    <!--begin::Separator-->
                    <div class="separator separator-dashed border-gray-300 my-8"></div>
                    <!--end::Separator-->
                </div>
                <!--end::Questions-->
                <!--begin::Pagination-->
                <div class="d-flex flex-center mb-0">
                    <a href="#"
                        class="btn btn-icon btn-light btn-active-light-primary h-30px w-30px fw-bold fs-6 mx-2">1</a>
                    <a href="#"
                        class="btn btn-icon btn-light btn-active-light-primary h-30px w-30px fw-bold fs-6 mx-2 active">2</a>
                    <a href="#"
                        class="btn btn-icon btn-light btn-active-light-primary h-30px w-30px fw-bold fs-6 mx-2">3</a>
                    <a href="#"
                        class="btn btn-icon btn-light btn-active-light-primary h-30px w-30px fw-bold fs-6 mx-2">4</a>
                    <a href="#"
                        class="btn btn-icon btn-light btn-active-light-primary h-30px w-30px fw-bold fs-6 mx-2">5</a>
                    <span class="text-muted fw-bold fs-6 mx-2">..</span>
                    <a href="#"
                        class="btn btn-icon btn-light btn-active-light-primary h-30px w-30px fw-bold fs-6 mx-2">19</a>
                </div>
                <!--end::Questions-->
            </div>
            <!--end::Post-->
        </div>
        <!--end::Content-->
        <!--begin::Footer-->
        <div class="footer pt-10 pb-5 d-flex flex-column flex-md-row flex-stack" id="kt_footer">
            <!--begin::Copyright-->
            <div class="text-dark order-2 order-md-1">
                <span class="text-muted fw-bold me-1">2021©</span>
                <a href="https://keenthemes.com" target="_blank" class="text-gray-800 text-hover-primary">Keenthemes</a>
            </div>
            <!--end::Copyright-->
            <!--begin::Menu-->
            <ul class="menu menu-gray-600 menu-hover-primary fw-bold order-1">
                <li class="menu-item">
                    <a href="https://keenthemes.com" target="_blank" class="menu-link px-2">About</a>
                </li>
                <li class="menu-item">
                    <a href="https://keenthemes.com/support" target="_blank" class="menu-link px-2">Support</a>
                </li>
                <li class="menu-item">
                    <a href="https://1.envato.market/EA4JP" target="_blank" class="menu-link ps-2 pe-0">Purchase</a>
                </li>
            </ul>
            <!--end::Menu-->
        </div>
        <!--end::Footer-->
    </div>
    <!--end::Wrapper-->
    <!--begin::Sidebar-->
    <div class="sidebar p-5 px-lg-0 py-lg-11" data-kt-drawer="true" data-kt-drawer-name="sidebar"
        data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="275px"
        data-kt-drawer-direction="end" data-kt-drawer-toggle="#kt_sidebar_toggle">
        <!--begin::Quick Search-->
        <form id="kt_sidebar_search_form" action="../../demo5/dist/apps/devs/search.html"
            class="w-100 position-relative mb-5 mb-lg-10" autocomplete="off">
            <!--begin::Hidden input(Added to disable form autocomplete)-->
            <input type="hidden" />
            <!--end::Hidden input-->
            <!--begin::Icon-->
            <!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
            <span class="svg-icon svg-icon-2 svg-icon-gray-700 position-absolute top-50 translate-middle-y ms-4">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1"
                        transform="rotate(45 17.0365 15.1223)" fill="black" />
                    <path
                        d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z"
                        fill="black" />
                </svg>
            </span>
            <!--end::Svg Icon-->
            <!--end::Icon-->
            <!--begin::Input-->
            <input type="text" class="form-control bg-transparent ps-13 fs-7 h-40px" name="search" value=""
                placeholder="Search" />
            <!--end::Input-->
        </form>
        <!--end::Quick Search-->
        <!--begin::Popular Questions-->
        <div class="card bg-light mb-5 mb-lg-10 shadow-none border-0">
            <!--begin::Header-->
            <div class="card-header align-items-center border-0">
                <!--begin::Title-->
                <h3 class="card-title fw-bolder text-gray-900 fs-3">Popular Questions</h3>
                <!--end::Title-->
            </div>
            <!--end::Header-->
            <!--begin::Body-->
            <div class="card-body pt-0">
                <!--begin::Item-->
                <div class="d-flex mb-5">
                    <!--begin::Arrow-->
                    <!--begin::Svg Icon | path: icons/duotune/general/gen057.svg-->
                    <span class="svg-icon svg-icon-2 mt-0 me-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="black" />
                            <path
                                d="M11.9343 12.5657L9.53696 14.963C9.22669 15.2733 9.18488 15.7619 9.43792 16.1204C9.7616 16.5789 10.4211 16.6334 10.8156 16.2342L14.3054 12.7029C14.6903 12.3134 14.6903 11.6866 14.3054 11.2971L10.8156 7.76582C10.4211 7.3666 9.7616 7.42107 9.43792 7.87962C9.18488 8.23809 9.22669 8.72669 9.53696 9.03696L11.9343 11.4343C12.2467 11.7467 12.2467 12.2533 11.9343 12.5657Z"
                                fill="black" />
                        </svg>
                    </span>
                    <!--end::Svg Icon-->
                    <!--end::Arrow-->
                    <!--begin::Title-->
                    <a href="../../demo5/dist/apps/devs/question.html"
                        class="text-gray-700 text-hover-primary fs-6 fw-bold">How to use Metrponic with Django Framework
                        ?</a>
                    <!--end::Title-->
                </div>
                <!--end::Item-->
                <!--begin::Item-->
                <div class="d-flex mb-5">
                    <!--begin::Arrow-->
                    <!--begin::Svg Icon | path: icons/duotune/general/gen057.svg-->
                    <span class="svg-icon svg-icon-2 mt-0 me-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="black" />
                            <path
                                d="M11.9343 12.5657L9.53696 14.963C9.22669 15.2733 9.18488 15.7619 9.43792 16.1204C9.7616 16.5789 10.4211 16.6334 10.8156 16.2342L14.3054 12.7029C14.6903 12.3134 14.6903 11.6866 14.3054 11.2971L10.8156 7.76582C10.4211 7.3666 9.7616 7.42107 9.43792 7.87962C9.18488 8.23809 9.22669 8.72669 9.53696 9.03696L11.9343 11.4343C12.2467 11.7467 12.2467 12.2533 11.9343 12.5657Z"
                                fill="black" />
                        </svg>
                    </span>
                    <!--end::Svg Icon-->
                    <!--end::Arrow-->
                    <!--begin::Title-->
                    <a href="../../demo5/dist/apps/devs/question.html"
                        class="text-gray-700 text-hover-primary fs-6 fw-bold">When to expect new version of Metronic
                        Laravel ?</a>
                    <!--end::Title-->
                </div>
                <!--end::Item-->
                <!--begin::Item-->
                <div class="d-flex mb-5">
                    <!--begin::Arrow-->
                    <!--begin::Svg Icon | path: icons/duotune/general/gen057.svg-->
                    <span class="svg-icon svg-icon-2 mt-0 me-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="black" />
                            <path
                                d="M11.9343 12.5657L9.53696 14.963C9.22669 15.2733 9.18488 15.7619 9.43792 16.1204C9.7616 16.5789 10.4211 16.6334 10.8156 16.2342L14.3054 12.7029C14.6903 12.3134 14.6903 11.6866 14.3054 11.2971L10.8156 7.76582C10.4211 7.3666 9.7616 7.42107 9.43792 7.87962C9.18488 8.23809 9.22669 8.72669 9.53696 9.03696L11.9343 11.4343C12.2467 11.7467 12.2467 12.2533 11.9343 12.5657Z"
                                fill="black" />
                        </svg>
                    </span>
                    <!--end::Svg Icon-->
                    <!--end::Arrow-->
                    <!--begin::Title-->
                    <a href="../../demo5/dist/apps/devs/question.html"
                        class="text-gray-700 text-hover-primary fs-6 fw-bold">Could not get Metronic Demo 7 working</a>
                    <!--end::Title-->
                </div>
                <!--end::Item-->
                <!--begin::Item-->
                <div class="d-flex mb-5">
                    <!--begin::Arrow-->
                    <!--begin::Svg Icon | path: icons/duotune/general/gen057.svg-->
                    <span class="svg-icon svg-icon-2 mt-0 me-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="black" />
                            <path
                                d="M11.9343 12.5657L9.53696 14.963C9.22669 15.2733 9.18488 15.7619 9.43792 16.1204C9.7616 16.5789 10.4211 16.6334 10.8156 16.2342L14.3054 12.7029C14.6903 12.3134 14.6903 11.6866 14.3054 11.2971L10.8156 7.76582C10.4211 7.3666 9.7616 7.42107 9.43792 7.87962C9.18488 8.23809 9.22669 8.72669 9.53696 9.03696L11.9343 11.4343C12.2467 11.7467 12.2467 12.2533 11.9343 12.5657Z"
                                fill="black" />
                        </svg>
                    </span>
                    <!--end::Svg Icon-->
                    <!--end::Arrow-->
                    <!--begin::Title-->
                    <a href="../../demo5/dist/apps/devs/question.html"
                        class="text-gray-700 text-hover-primary fs-6 fw-bold">I want to get a refund</a>
                    <!--end::Title-->
                </div>
                <!--end::Item-->
                <!--begin::Item-->
                <div class="d-flex">
                    <!--begin::Arrow-->
                    <!--begin::Svg Icon | path: icons/duotune/general/gen057.svg-->
                    <span class="svg-icon svg-icon-2 mt-0 me-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="black" />
                            <path
                                d="M11.9343 12.5657L9.53696 14.963C9.22669 15.2733 9.18488 15.7619 9.43792 16.1204C9.7616 16.5789 10.4211 16.6334 10.8156 16.2342L14.3054 12.7029C14.6903 12.3134 14.6903 11.6866 14.3054 11.2971L10.8156 7.76582C10.4211 7.3666 9.7616 7.42107 9.43792 7.87962C9.18488 8.23809 9.22669 8.72669 9.53696 9.03696L11.9343 11.4343C12.2467 11.7467 12.2467 12.2533 11.9343 12.5657Z"
                                fill="black" />
                        </svg>
                    </span>
                    <!--end::Svg Icon-->
                    <!--end::Arrow-->
                    <!--begin::Title-->
                    <a href="../../demo5/dist/apps/devs/question.html"
                        class="text-gray-700 text-hover-primary fs-6 fw-bold">How to use Metrponic with Rails Framework
                        ?</a>
                    <!--end::Title-->
                </div>
                <!--end::Item-->
            </div>
            <!--end: Card Body-->
        </div>
        <!--end::Popular Questions-->
        <!--begin::Popular Questions-->
        <div class="card bg-light mb-5 mb-lg-10 shadow-none border-0">
            <!--begin::Header-->
            <div class="card-header align-items-center border-0">
                <!--begin::Title-->
                <h3 class="card-title fw-bolder text-gray-900 fs-3">Latest Tutorials</h3>
                <!--end::Title-->
            </div>
            <!--end::Header-->
            <!--begin::Body-->
            <div class="card-body pt-0">
                <!--begin::Item-->
                <div class="d-flex mb-5">
                    <!--begin::Arrow-->
                    <!--begin::Svg Icon | path: icons/duotune/general/gen057.svg-->
                    <span class="svg-icon svg-icon-2 mt-0 me-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="black" />
                            <path
                                d="M11.9343 12.5657L9.53696 14.963C9.22669 15.2733 9.18488 15.7619 9.43792 16.1204C9.7616 16.5789 10.4211 16.6334 10.8156 16.2342L14.3054 12.7029C14.6903 12.3134 14.6903 11.6866 14.3054 11.2971L10.8156 7.76582C10.4211 7.3666 9.7616 7.42107 9.43792 7.87962C9.18488 8.23809 9.22669 8.72669 9.53696 9.03696L11.9343 11.4343C12.2467 11.7467 12.2467 12.2533 11.9343 12.5657Z"
                                fill="black" />
                        </svg>
                    </span>
                    <!--end::Svg Icon-->
                    <!--end::Arrow-->
                    <!--begin::Title-->
                    <a href="../../demo5/dist/apps/devs/question.html"
                        class="text-gray-700 text-hover-primary fs-6 fw-bold">How to use customize Metronoc's SASS</a>
                    <!--end::Title-->
                </div>
                <!--end::Item-->
                <!--begin::Item-->
                <div class="d-flex mb-5">
                    <!--begin::Arrow-->
                    <!--begin::Svg Icon | path: icons/duotune/general/gen057.svg-->
                    <span class="svg-icon svg-icon-2 mt-0 me-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="black" />
                            <path
                                d="M11.9343 12.5657L9.53696 14.963C9.22669 15.2733 9.18488 15.7619 9.43792 16.1204C9.7616 16.5789 10.4211 16.6334 10.8156 16.2342L14.3054 12.7029C14.6903 12.3134 14.6903 11.6866 14.3054 11.2971L10.8156 7.76582C10.4211 7.3666 9.7616 7.42107 9.43792 7.87962C9.18488 8.23809 9.22669 8.72669 9.53696 9.03696L11.9343 11.4343C12.2467 11.7467 12.2467 12.2533 11.9343 12.5657Z"
                                fill="black" />
                        </svg>
                    </span>
                    <!--end::Svg Icon-->
                    <!--end::Arrow-->
                    <!--begin::Title-->
                    <a href="../../demo5/dist/apps/devs/question.html"
                        class="text-gray-700 text-hover-primary fs-6 fw-bold">How to change web font globally</a>
                    <!--end::Title-->
                </div>
                <!--end::Item-->
                <!--begin::Item-->
                <div class="d-flex mb-5">
                    <!--begin::Arrow-->
                    <!--begin::Svg Icon | path: icons/duotune/general/gen057.svg-->
                    <span class="svg-icon svg-icon-2 mt-0 me-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="black" />
                            <path
                                d="M11.9343 12.5657L9.53696 14.963C9.22669 15.2733 9.18488 15.7619 9.43792 16.1204C9.7616 16.5789 10.4211 16.6334 10.8156 16.2342L14.3054 12.7029C14.6903 12.3134 14.6903 11.6866 14.3054 11.2971L10.8156 7.76582C10.4211 7.3666 9.7616 7.42107 9.43792 7.87962C9.18488 8.23809 9.22669 8.72669 9.53696 9.03696L11.9343 11.4343C12.2467 11.7467 12.2467 12.2533 11.9343 12.5657Z"
                                fill="black" />
                        </svg>
                    </span>
                    <!--end::Svg Icon-->
                    <!--end::Arrow-->
                    <!--begin::Title-->
                    <a href="../../demo5/dist/apps/devs/question.html"
                        class="text-gray-700 text-hover-primary fs-6 fw-bold">How to setup dark mode</a>
                    <!--end::Title-->
                </div>
                <!--end::Item-->
                <!--begin::Item-->
                <div class="d-flex mb-5">
                    <!--begin::Arrow-->
                    <!--begin::Svg Icon | path: icons/duotune/general/gen057.svg-->
                    <span class="svg-icon svg-icon-2 mt-0 me-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="black" />
                            <path
                                d="M11.9343 12.5657L9.53696 14.963C9.22669 15.2733 9.18488 15.7619 9.43792 16.1204C9.7616 16.5789 10.4211 16.6334 10.8156 16.2342L14.3054 12.7029C14.6903 12.3134 14.6903 11.6866 14.3054 11.2971L10.8156 7.76582C10.4211 7.3666 9.7616 7.42107 9.43792 7.87962C9.18488 8.23809 9.22669 8.72669 9.53696 9.03696L11.9343 11.4343C12.2467 11.7467 12.2467 12.2533 11.9343 12.5657Z"
                                fill="black" />
                        </svg>
                    </span>
                    <!--end::Svg Icon-->
                    <!--end::Arrow-->
                    <!--begin::Title-->
                    <a href="../../demo5/dist/apps/devs/question.html"
                        class="text-gray-700 text-hover-primary fs-6 fw-bold">Metronic file structure and build
                        tools</a>
                    <!--end::Title-->
                </div>
                <!--end::Item-->
                <!--begin::Item-->
                <div class="d-flex">
                    <!--begin::Arrow-->
                    <!--begin::Svg Icon | path: icons/duotune/general/gen057.svg-->
                    <span class="svg-icon svg-icon-2 mt-0 me-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="black" />
                            <path
                                d="M11.9343 12.5657L9.53696 14.963C9.22669 15.2733 9.18488 15.7619 9.43792 16.1204C9.7616 16.5789 10.4211 16.6334 10.8156 16.2342L14.3054 12.7029C14.6903 12.3134 14.6903 11.6866 14.3054 11.2971L10.8156 7.76582C10.4211 7.3666 9.7616 7.42107 9.43792 7.87962C9.18488 8.23809 9.22669 8.72669 9.53696 9.03696L11.9343 11.4343C12.2467 11.7467 12.2467 12.2533 11.9343 12.5657Z"
                                fill="black" />
                        </svg>
                    </span>
                    <!--end::Svg Icon-->
                    <!--end::Arrow-->
                    <!--begin::Title-->
                    <a href="../../demo5/dist/apps/devs/question.html"
                        class="text-gray-700 text-hover-primary fs-6 fw-bold">Metronic integration with Blazor server
                        side</a>
                    <!--end::Title-->
                </div>
                <!--end::Item-->
            </div>
            <!--end: Card Body-->
        </div>
        <!--end::Popular Questions-->
    </div>
    <!--end::Sidebar-->
</div>
<!--end::Container-->

<?php require './footer.php';?>