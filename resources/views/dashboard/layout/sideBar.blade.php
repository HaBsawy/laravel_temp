<?php
/**
 * Created by PhpStorm.
 * User: HaBsawy
 * Date: 23-May-19
 * Time: 13:12
 */
?>

<!-- Start SideBar -->

<aside>

    <!-- Group List -->

    <div class="group-list">
        <h6>MAIN</h6>
        <ul>

            <li class="drop-down {{ $active == 'dashboard' ? 'active' : '' }}">
                <a href="#">
                    <i class="fas fa-home fa-fw"></i>
                    Dashboard
                    <i class="drop fas fa-chevron-right"></i>
                </a>
                <ul class="sub-list">
                    <li class="">
                        <a href="#">Analytical</a>
                    </li>
                    <li>
                        <a href="#">Demographic</a>
                    </li>
                    <li>
                        <a href="#">Project</a>
                    </li>
                    <li>
                        <a href="#">profile</a>
                    </li>
                </ul>
            </li>

            <li class="drop-down">
                <a href="#">
                    <i class="fas fa-shopping-bag fa-fw"></i>
                    E-Commerce
                    <span class="badge badge-pill badge-success float-right">Hot</span>
                </a>
                <ul class="sub-list">
                    <li>
                        <a href="#">Dashboard</a>
                    </li>
                    <li>
                        <a href="#">Products</a>
                    </li>
                    <li>
                        <a href="#">Product Detail</a>
                    </li>
                    <li>
                        <a href="#">Add Product</a>
                    </li>
                    <li>
                        <a href="#">Orders</a>
                    </li>
                    <li>
                        <a href="#">Cart</a>
                    </li>
                    <li>
                        <a href="#">Checkout</a>
                    </li>
                </ul>
            </li>

            <li class="drop-down">
                <a href="#">
                    <i class="fas fa-th fa-fw"></i>
                    Apps
                    <i class="drop fas fa-chevron-right"></i>
                </a>
                <ul class="sub-list">
                    <li>
                        <a href="#">chats</a>
                    </li>
                    <li>
                        <a href="#">calendar</a>
                    </li>
                    <li>
                        <a href="#">weather</a>
                    </li>
                    <li class="drop-down">
                        <a href="#">
                            Email
                            <i class="drop fas fa-chevron-right"></i>
                        </a>
                        <ul class="sub-list2">
                            <li>
                                <a href="#">inbox</a>
                            </li>
                            <li>
                                <a href="#">detail email</a>
                            </li>
                        </ul>
                    </li>
                    <li class="drop-down">
                        <a href="#">
                            Contacts
                            <i class="drop fas fa-chevron-right"></i>
                        </a>
                        <ul class="sub-list2">
                            <li>
                                <a href="#">list</a>
                            </li>
                            <li>
                                <a href="#">cards</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">weather</a>
                    </li>
                    <li>
                        <a href="#">File Manager</a>
                    </li>
                    <li>
                        <a href="#">To Do/Tasklist</a>
                    </li>
                </ul>
            </li>

            <li>
                <a href="#">
                    <i class="fas fa-flag fa-fw"></i>
                    Widgets
                    <span class="badge badge-pill badge-warning float-right">8</span>
                </a>
            </li>

        </ul>
    </div>

    <hr>

    <div class="group-list">
        <h6>COMPONENT</h6>
        <ul>
            <li class="drop-down {{ $active == 'UI_Elements' ? 'active' : '' }}">
                <a href="#">
                    <i class="fas fa-mobile fa-fw"></i>
                    UI Elements
                    <i class="drop fas fa-chevron-right"></i>
                </a>
                <ul class="sub-list">
                    <li class="{{ $pageTitle == 'Panel-Wells' ? 'active' : '' }}">
                        <a href="{{ route('Panel_Wells') }}">Panels & Wells</a>
                    </li>
                    <li class="{{ $pageTitle == 'Modals' ? 'active' : '' }}">
                        <a href="{{ route('Modals') }}">Modals</a>
                    </li>
                    <li class="{{ $pageTitle == 'Sweet Alerts' ? 'active' : '' }}">
                        <a href="{{ route('SweetAlerts') }}">Sweet Alerts</a>
                    </li>
                    <li class="{{ $pageTitle == 'Notifications' ? 'active' : '' }}">
                        <a href="{{ route('Notifications') }}">notifications</a>
                    </li>
                    <li class="{{ $pageTitle == 'Typography' ? 'active' : '' }}">
                        <a href="{{ route('Typography') }}">Typography</a>
                    </li>
                    <li class="{{ $pageTitle == 'Buttons' ? 'active' : '' }}">
                        <a href="{{ route('Buttons') }}">Buttons</a>
                    </li>
                    <li class="{{ $pageTitle == 'Accordion/Toggle' ? 'active' : '' }}">
                        <a href="{{ route('Accordion_Toggle') }}">Accordion / Toggles</a>
                    </li>
                    <li class="{{ $pageTitle == 'Tabs' ? 'active' : '' }}">
                        <a href="{{ route('Tabs') }}">Tabs</a>
                    </li>
                    <li class="{{ $pageTitle == 'Progress Bars' ? 'active' : '' }}">
                        <a href="{{ route('ProgressBars') }}">Progress bars</a>
                    </li>
                    <li class="{{ $pageTitle == 'Skills Counter' ? 'active' : '' }}">
                        <a href="{{ route('SkillsCounter') }}">Skills & Counters</a>
                    </li>
                    <li class="{{ $pageTitle == 'Pricing' ? 'active' : '' }}">
                        <a href="{{ route('Pricing') }}">Pricing Tables</a>
                    </li>
                    <li>
                        <a href="UI%20Elements/checkbox_radio.html">Nestables</a>
                    </li>
                    <li class="{{ $pageTitle == 'Dropdown' ? 'active' : '' }}">
                        <a href="{{ route('Dropdown') }}">Dropdowns</a>
                    </li>
                    <li class="{{ $pageTitle == 'Bootstrap Treeview' ? 'active' : '' }}">
                        <a href="{{ route('Bootstrap_Treeview') }}">Tree View</a>
                    </li>
                    <li class="{{ $pageTitle == 'Carousel' ? 'active' : '' }}">
                        <a href="{{ route('Carousel') }}">Carousel</a>
                    </li>
                    <li class="{{ $pageTitle == 'Range Slider' ? 'active' : '' }}">
                        <a href="{{ route('RangeSlider') }}">Range Slider</a>
                    </li>
                    <li class="{{ $pageTitle == 'Grid Styles' ? 'active' : '' }}">
                        <a href="{{ route('GridStyles') }}">Grid</a>
                    </li>
                    <li class="{{ $pageTitle == 'Bootstrap UI' ? 'active' : '' }}">
                        <a href="{{ route('Bootstrap_UI') }}">Bootstrap UI</a>
                    </li>
                </ul>
            </li>

            <li class="drop-down {{ $active == 'Forms' ? 'active' : '' }}">
                <a href="#">
                    <i class="fas fa-pencil-alt fa-fw"></i>
                    Forms
                    <i class="drop fas fa-chevron-right"></i>
                </a>
                <ul class="sub-list">
                    <li class="{{ $pageTitle == 'Form Element' ? 'active' : '' }}">
                        <a href="{{ route('Form_Element') }}">Basic Forms</a>
                    </li>
                    <li class="{{ $pageTitle == 'Form Layout' ? 'active' : '' }}">
                        <a href="{{ route('Form_Layout') }}">form Layout</a>
                    </li>
                    <li class="{{ $pageTitle == 'Form Advanced' ? 'active' : '' }}">
                        <a href="{{ route('Form_Advanced') }}">Form Advanced</a>
                    </li>
                    <li class="{{ $pageTitle == 'Form Mask' ? 'active' : '' }}">
                        <a href="{{ route('Form_Mask') }}">Form Mask</a>
                    </li>
                    <li class="{{ $pageTitle == 'Form Picker' ? 'active' : '' }}">
                        <a href="{{ route('Form_Picker') }}">Form Picker</a>
                    </li>
                    <li class="{{ $pageTitle == 'Form Validation' ? 'active' : '' }}">
                        <a href="{{ route('Form_Validation') }}">form Validation</a>
                    </li>
                    <li class="{{ $pageTitle == 'Form Wizard' ? 'active' : '' }}">
                        <a href="{{ route('Form_Wizard') }}">Form Wizard</a>
                    </li>
                    <li class="{{ $pageTitle == 'Form X-Editable' ? 'active' : '' }}">
                        <a href="{{ route('Form_X-Editable') }}">X-Editable</a>
                    </li>
                    <li>
                        <a href="forms/form_layouts.html">Cropperjs</a>
                    </li>
                    <li class="{{ $pageTitle == 'File Upload (Dropify)' ? 'active' : '' }}">
                        <a href="{{ route('File_Upload') }}">File Upload</a>
                    </li>
                    <li class="{{ $pageTitle == 'Drozone' ? 'active' : '' }}">
                        <a href="{{ route('Drozone') }}">Dropzone</a>
                    </li>
                    <li class="{{ $pageTitle == 'Bootstrap-Wyshtml5' ? 'active' : '' }}">
                        <a href="{{ route('Bootstrap_Wyshtml5') }}">Bootstrap Wysihtml5</a>
                    </li>
                    <li class="{{ $pageTitle == 'Tinymce Wysihtml5' ? 'active' : '' }}">
                        <a href="{{ route('Tinymce_Wysihtml5') }}">Tinymce Wysihtml5</a>
                    </li>
                    <li class="{{ $pageTitle == 'Summernote' ? 'active' : '' }}">
                        <a href="{{ route('Summernote') }}">summernote</a>
                    </li>
                    <li>
                        <a href="forms/form_layouts.html">typeahead</a>
                    </li>
                </ul>
            </li>

            <li class="drop-down {{ $active == 'Charts' ? 'active' : '' }}">
                <a href="#">
                    <i class="fas fa-chart-pie fa-fw"></i>
                    Charts
                    <i class="drop fas fa-chevron-right"></i>
                </a>
                <ul class="sub-list">
                    <li class="{{ $pageTitle == 'Flot Chart' ? 'active' : '' }}">
                        <a href="{{ route('Flot_Chart') }}">Flot Chart</a>
                    </li>
                    <li class="{{ $pageTitle == 'Morris Chart' ? 'active' : '' }}">
                        <a href="{{ route('Morris_Chart') }}">Morris Chart</a>
                    </li>
                    <li class="{{ $pageTitle == 'Chart.Js' ? 'active' : '' }}">
                        <a href="{{ route('Chart_Js') }}">chartjs</a>
                    </li>
                    <li class="{{ $pageTitle == 'Chartist' ? 'active' : '' }}">
                        <a href="{{ route('Chartist') }}">chartist</a>
                    </li>
                    <li class="{{ $pageTitle == 'Easy Pie Chart' ? 'active' : '' }}">
                        <a href="{{ route('Easy_Pie_Chart') }}">Easy Pie Chart</a>
                    </li>
                    <li class="{{ $pageTitle == 'Sparkline' ? 'active' : '' }}">
                        <a href="{{ route('Sparkline') }}">Sparkline</a>
                    </li>
                    <li class="{{ $pageTitle == 'Peity Chart' ? 'active' : '' }}">
                        <a href="{{ route('Peity_Chart') }}">Peity Chart</a>
                    </li>
                </ul>
            </li>

            <li class="drop-down {{ $active == 'Tables' ? 'active' : '' }}">
                <a href="#">
                    <i class="fas fa-table fa-fw"></i>
                    Tables
                    <i class="drop fas fa-chevron-right"></i>
                </a>
                <ul class="sub-list">
                    <li class="{{ $pageTitle == 'Basic Table' ? 'active' : '' }}">
                        <a href="{{ route('Basic_Table') }}">Basic Table</a>
                    </li>
                    <li class="{{ $pageTitle == 'Bootstrap Table' ? 'active' : '' }}">
                        <a href="{{ route('Bootstrap_Table') }}">Bootstrap Table</a>
                    </li>
                    <li class="{{ $pageTitle == 'Data Table' ? 'active' : '' }}">
                        <a href="{{ route('Data_Table') }}">Data Table</a>
                    </li>
                    <li class="{{ $pageTitle == 'Export' ? 'active' : '' }}">
                        <a href="{{ route('Export') }}">Export Table</a>
                    </li>
                    <li class="{{ $pageTitle == 'RSPV DataTable' ? 'active' : '' }}">
                        <a href="{{ route('RSPV_DataTable') }}">RSPV DataTable</a>
                    </li>
                    <li class="{{ $pageTitle == 'Responsive Table' ? 'active' : '' }}">
                        <a href="{{ route('Responsive_Table') }}">Responsive Table</a>
                    </li>
                    <li class="{{ $pageTitle == 'Editable Table' ? 'active' : '' }}">
                        <a href="{{ route('Editable_Table') }}">Editable Table</a>
                    </li>
                    <li class="{{ $pageTitle == 'Foo Table' ? 'active' : '' }}">
                        <a href="{{ route('Foo_Table') }}">Foo Table</a>
                    </li>
                    <li class="{{ $pageTitle == 'Jsgrid Table' ? 'active' : '' }}">
                        <a href="{{ route('Jsgrid_Table') }}">Jsgrid Table</a>
                    </li>
                </ul>
            </li>

            <li class="drop-down {{ $active == 'Maps' ? 'active' : '' }}">
                <a href="#">
                    <i class="fas fa-map fa-fw"></i>
                    Maps
                    <i class="drop fas fa-chevron-right"></i>
                </a>
                <ul class="sub-list">
                    <li class="{{ $pageTitle == 'Vector Map' ? 'active' : '' }}">
                        <a href="{{ route('Vector_Map') }}">Vector Map</a>
                    </li>
                    <li class="{{ $pageTitle == 'Google Map' ? 'active' : '' }}">
                        <a href="{{ route('Google_Map') }}">Google Map</a>
                    </li>
                </ul>
            </li>

        </ul>
    </div>

    <hr>

    <div class="group-list">
        <h6>FEATURED</h6>
        <ul>
            <li class="drop-down {{ $active == 'Special_Pages' ? 'active' : '' }}">
                <a href="#">
                    <i class="fas fa-folder-open fa-fw"></i>
                    Special Pages
                    <i class="drop fas fa-chevron-right"></i>
                </a>
                <ul class="sub-list">
                    <li class="{{ $pageTitle == 'Blank Page' ? 'active' : '' }}">
                        <a href="{{ route('Blank_Page') }}">Blank Page</a>
                    </li>
                    <li class="drop-down">
                        <a href="#">
                            Authentication
                            <i class="drop fas fa-chevron-right"></i>
                        </a>
                        <ul class="sub-list2">
                            <li>
                                <a href="{{ route('Login') }}">Login</a>
                            </li>
                            <li>
                                <a href="{{ route('SignUp') }}">Register</a>
                            </li>
                            <li>
                                <a href="{{ route('Forgot_Password') }}">Recover Password</a>
                            </li>
                            <li>
                                <a href="{{ route('Reset_Password') }}">Reset Password</a>
                            </li>
                            <li>
                                <a href="{{ route('Lock_Screen') }}">Lock Screen</a>
                            </li>
                        </ul>
                    </li>
                    <li class="drop-down">
                        <a href="#">
                            Invoice
                            <i class="drop fas fa-chevron-right"></i>
                        </a>
                        <ul class="sub-list2">
                            <li>
                                <a href="{{ route('Invoice') }}">Invoice</a>
                            </li>
                            <li>
                                <a href="{{ route('Invoice_Archive') }}">Invoice Archive</a>
                            </li>
                        </ul>
                    </li>
                    <li class="drop-down">
                        <a href="#">
                            error pages
                            <i class="drop fas fa-chevron-right"></i>
                        </a>
                        <ul class="sub-list2">
                            <li>
                                <a href="{{ route('404') }}">Error 404</a>
                            </li>
                            <li>
                                <a href="{{ route('500') }}">Error 500</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="{{ route('Gallery') }}">Gallery</a>
                    </li>
                    <li>
                        <a href="extra_pages/lockscreen.html">Timeline</a>
                    </li>
                    <li>
                        <a href="{{ route('FAQ') }}">FAQ</a>
                    </li>
                </ul>
            </li>

            <li>
                <a href="#">
                    <i class="fas fa-tint fa-fw"></i>
                    Documentation
                </a>
            </li>

            <li class="drop-down">
                <a href="#">
                    <i class="fas fa-share-alt fa-fw"></i>
                    Multi Levels
                    <i class="drop fas fa-chevron-right"></i>
                </a>
                <ul class="sub-list">
                    <li>
                        <a href="#">Link 1</a>
                    </li>
                    <li class="active">
                        <a href="#">Link 2</a>
                    </li>
                    <li>
                        <a href="#">Link 3</a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</aside>

<!-- End SideBar -->
