<!--begin::Aside Menu-->
<div class="aside-menu-wrapper flex-column-fluid" id="kt_aside_menu_wrapper">
    <!--begin::Menu Container-->
    <div id="kt_aside_menu" class="aside-menu my-4" data-menu-vertical="1" data-menu-scroll="1" data-menu-dropdown-timeout="500">
        <!--begin::Menu Nav-->
        <ul class="menu-nav">
            <li class="menu-section mt-0 ">
                <h4 class="menu-text">MAIN</h4>
                <i class="menu-icon ki ki-bold-more-hor icon-md"></i>
            </li>
            <li class="menu-item"  aria-haspopup="true">
                <a href="{{ route('dashboard') }}" data-menu="main-menu" id="dashboard" data-url="dashboard" class="menu-link dashboard">
                    <span class="svg-icon menu-icon">
                        <i class="fa fa-poll text-primary"></i>
                    </span>
                    <span class="menu-text">Dashboard</span>
                </a>
            </li>
            <li class="menu-item"  aria-haspopup="true">
                <a href="{{ route('request_quotation_list') }}" data-menu="main-menu" id="request-quotation-list" data-url="request-quotation-list" class="menu-link request-quotation-list">
                    <span class="svg-icon menu-icon">
                        <i class="text-primary far fa-file-alt"></i>
                    </span>
                    <span class="menu-text">Request Quotation List</span>
                </a>
            </li>
            {{-- <li class="menu-item"  aria-haspopup="true">
                <a href="#grade-submissions" data-menu="main-menu" id="grade-submissions" data-url="grade-submissions" class="menu-link">
                    <span class="svg-icon menu-icon">
                        <i class="text-primary far fa-file-alt"></i>
                    </span>
                    <span class="menu-text">Grade Submission</span>
                </a>
            </li>
            <li class="menu-item"  aria-haspopup="true">
                <a href="#grade-submission-logs" data-menu="main-menu" id="grade-submission-logs" data-url="grade-submission-logs" class="menu-link">
                    <span class="svg-icon menu-icon svg-icon-primary">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect x="0" y="0" width="24" height="24"/>
                                <path d="M5,3 L6,3 C6.55228475,3 7,3.44771525 7,4 L7,20 C7,20.5522847 6.55228475,21 6,21 L5,21 C4.44771525,21 4,20.5522847 4,20 L4,4 C4,3.44771525 4.44771525,3 5,3 Z M10,3 L11,3 C11.5522847,3 12,3.44771525 12,4 L12,20 C12,20.5522847 11.5522847,21 11,21 L10,21 C9.44771525,21 9,20.5522847 9,20 L9,4 C9,3.44771525 9.44771525,3 10,3 Z" fill="#000000"/>
                                <rect fill="#000000" opacity="0.3" transform="translate(17.825568, 11.945519) rotate(-19.000000) translate(-17.825568, -11.945519) " x="16.3255682" y="2.94551858" width="3" height="18" rx="1"/>
                            </g>
                        </svg>
                    </span>
                    <span class="menu-text">Grade Submission Logs</span>
                </a>
            </li>
            <li class="menu-item"  aria-haspopup="true">
                <a href="#grade-components" id="grade-components" data-menu="main-menu" data-url="grade-components" class="menu-link">
                    <span class="svg-icon menu-icon svg-icon-primary">
                        <i class="fas fa-list-ul text-primary"></i>
                    </span>
                    <span class="menu-text">Grade Components</span>
                </a>
            </li>
            <li class="menu-item"  aria-haspopup="true">
                <a href="#course-checker" id="course-checker" data-menu="main-menu" data-url="course-checker" class="menu-link">
                    <span class="svg-icon menu-icon svg-icon-primary">
                        <i class="fas fa-list-ul text-primary"></i>
                    </span>
                    <span class="menu-text">Course Checker</span>
                </a>
            </li>
            <li class="menu-item" aria-haspopup="true" data-menu-toggle="hover">
                <a href="#submission-schedule" class="menu-link menu-toggle" id="submission-schedule" data-menu="main-menu">
                    <span class="svg-icon menu-icon">
                        <!--begin::Svg Icon | path:assets/media/svg/icons/Shopping/Barcode-read.svg-->
                        <i class="ki ki-calendar-today text-primary"></i>
                        <!--end::Svg Icon-->
                    </span>
                    <span class="menu-text">Submission Schedule</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="menu-submenu">
                    <i class="menu-arrow"></i>
                    <ul class="menu-subnav">
                        <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                            <a href="#college-schedules" class="menu-link menu-toggle" id="college-schedules" data-menu="sub-menu" data-url="college-schedules">
                                <i class="menu-bullet menu-bullet-dot">
                                    <span></span>
                                </i>
                                <span class="menu-text">College</span>

                            </a>
                        </li>
                        <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                            <a href="#graduate-school-schedules" class="menu-link menu-toggle" id="graduate-school-schedules" data-menu="sub-menu" data-url="graduate-school-schedules">
                                <i class="menu-bullet menu-bullet-dot">
                                    <span></span>
                                </i>
                                <span class="menu-text">Graduate School</span>

                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="menu-item" aria-haspopup="true" data-menu-toggle="hover">
                <a href="javascript:void(0);" class="menu-link menu-toggle" data-menu="main-menu">
                    <span class="svg-icon menu-icon">
                        <!--begin::Svg Icon | path:assets/media/svg/icons/Shopping/Barcode-read.svg-->
                        <i class="fas fa-th text-primary"></i>
                        <!--end::Svg Icon-->
                    </span>
                    <span class="menu-text">Others</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="menu-submenu">
                    <i class="menu-arrow"></i>
                    <ul class="menu-subnav">
                        <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                            <a href="#college-list" class="menu-link menu-toggle" data-menu="sub-menu" data-url="college-list">
                                <i class="menu-bullet menu-bullet-dot">
                                    <span></span>
                                </i>
                                <span class="menu-text">College</span>
                            </a>
                        </li>
                        <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                            <a href="#program-lists" class="menu-link menu-toggle" data-menu="sub-menu" data-url="program-lists">
                                <i class="menu-bullet menu-bullet-dot">
                                    <span></span>
                                </i>
                                <span class="menu-text">Programs</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="menu-section ">
                <h4 class="menu-text">SYSTEM</h4>
                <i class="menu-icon ki ki-bold-more-hor icon-md"></i>
            </li>
            <li class="menu-item"  aria-haspopup="true">
                <a href="#system-logs" data-menu="main-menu" id="system-logs" data-url="system-logs" class="menu-link">
                    <span class="svg-icon menu-icon svg-icon-primary">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect x="0" y="0" width="24" height="24"/>
                                <path d="M5,3 L6,3 C6.55228475,3 7,3.44771525 7,4 L7,20 C7,20.5522847 6.55228475,21 6,21 L5,21 C4.44771525,21 4,20.5522847 4,20 L4,4 C4,3.44771525 4.44771525,3 5,3 Z M10,3 L11,3 C11.5522847,3 12,3.44771525 12,4 L12,20 C12,20.5522847 11.5522847,21 11,21 L10,21 C9.44771525,21 9,20.5522847 9,20 L9,4 C9,3.44771525 9.44771525,3 10,3 Z" fill="#000000"/>
                                <rect fill="#000000" opacity="0.3" transform="translate(17.825568, 11.945519) rotate(-19.000000) translate(-17.825568, -11.945519) " x="16.3255682" y="2.94551858" width="3" height="18" rx="1"/>
                            </g>
                        </svg>
                    </span>
                    <span class="menu-text">System Logs</span>
                </a>
            </li>
            <li class="menu-item"  aria-haspopup="true">
                <a href="system-admin" id="system-admin" data-menu="main-menu" data-url="system-admin" class="menu-link">
                    <span class="svg-icon menu-icon svg-icon-primary">
                        <i class="text-primary flaticon2-avatar"></i>
                    </span>
                    <span class="menu-text">System Admin</span>
                </a>
            </li>
            <li class="menu-item"  aria-haspopup="true">
                <a href="#system-setting" id="system-setting" data-menu="main-menu" data-url="system-setting" class="menu-link">
                    <span class="svg-icon menu-icon svg-icon-primary">
                        <i class="fa fa-cog text-primary"></i>
                    </span>
                    <span class="menu-text">System Settings</span>
                </a>
            </li> --}}

        </ul>
        <!--end::Menu Nav-->
    </div>
    <!--end::Menu Container-->
</div>
<!--end::Aside Menu-->
