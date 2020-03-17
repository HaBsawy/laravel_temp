<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('dashboard.index');
});

Route::group(['prefix' => 'UI_Elements'], function () {

    Route::get('Panel_Wells', function () {
        $active = 'UI_Elements';
        $pageTitle = 'Panel-Wells';
        return view('dashboard.UI_Elements.Panel_Wells', compact('active', 'pageTitle'));
    })->name('Panel_Wells');

    Route::get('Modals', function () {
        $active = 'UI_Elements';
        $pageTitle = 'Modals';
        return view('dashboard.UI_Elements.Modals', compact('active', 'pageTitle'));
    })->name('Modals');

    Route::get('SweetAlerts', function () {
        $active = 'UI_Elements';
        $pageTitle = 'Sweet Alerts';
        return view('dashboard.UI_Elements.SweetAlerts', compact('active', 'pageTitle'));
    })->name('SweetAlerts');

    Route::get('Notifications', function () {
        $active = 'UI_Elements';
        $pageTitle = 'Notifications';
        return view('dashboard.UI_Elements.Notifications', compact('active', 'pageTitle'));
    })->name('Notifications');

    Route::get('Typography', function () {
        $active = 'UI_Elements';
        $pageTitle = 'Typography';
        return view('dashboard.UI_Elements.Typography', compact('active', 'pageTitle'));
    })->name('Typography');

    Route::get('Buttons', function () {
        $active = 'UI_Elements';
        $pageTitle = 'Buttons';
        return view('dashboard.UI_Elements.Buttons', compact('active', 'pageTitle'));
    })->name('Buttons');

    Route::get('Accordion_Toggle', function () {
        $active = 'UI_Elements';
        $pageTitle = 'Accordion/Toggle';
        return view('dashboard.UI_Elements.Accordion_Toggle', compact('active', 'pageTitle'));
    })->name('Accordion_Toggle');

    Route::get('Tabs', function () {
        $active = 'UI_Elements';
        $pageTitle = 'Tabs';
        return view('dashboard.UI_Elements.Tabs', compact('active', 'pageTitle'));
    })->name('Tabs');

    Route::get('ProgressBars', function () {
        $active = 'UI_Elements';
        $pageTitle = 'Progress Bars';
        return view('dashboard.UI_Elements.ProgressBars', compact('active', 'pageTitle'));
    })->name('ProgressBars');

    Route::get('SkillsCounter', function () {
        $active = 'UI_Elements';
        $pageTitle = 'Skills Counter';
        return view('dashboard.UI_Elements.SkillsCounter', compact('active', 'pageTitle'));
    })->name('SkillsCounter');

    Route::get('Pricing', function () {
        $active = 'UI_Elements';
        $pageTitle = 'Pricing';
        return view('dashboard.UI_Elements.Pricing', compact('active', 'pageTitle'));
    })->name('Pricing');

    Route::get('Dropdown', function () {
        $active = 'UI_Elements';
        $pageTitle = 'Dropdown';
        return view('dashboard.UI_Elements.Dropdown', compact('active', 'pageTitle'));
    })->name('Dropdown');

    Route::get('RangeSlider', function () {
        $active = 'UI_Elements';
        $pageTitle = 'Range Slider';
        return view('dashboard.UI_Elements.RangeSlider', compact('active', 'pageTitle'));
    })->name('RangeSlider');

    Route::get('GridStyles', function () {
        $active = 'UI_Elements';
        $pageTitle = 'Grid Styles';
        return view('dashboard.UI_Elements.GridStyles', compact('active', 'pageTitle'));
    })->name('GridStyles');

    Route::get('Bootstrap_UI', function () {
        $active = 'UI_Elements';
        $pageTitle = 'Bootstrap UI';
        return view('dashboard.UI_Elements.Bootstrap_UI', compact('active', 'pageTitle'));
    })->name('Bootstrap_UI');

    Route::get('Bootstrap_Treeview', function () {
        $active = 'UI_Elements';
        $pageTitle = 'Bootstrap Treeview';
        return view('dashboard.UI_Elements.Bootstrap_Treeview', compact('active', 'pageTitle'));
    })->name('Bootstrap_Treeview');

    Route::get('Carousel', function () {
        $active = 'UI_Elements';
        $pageTitle = 'Carousel';
        return view('dashboard.UI_Elements.Carousel', compact('active', 'pageTitle'));
    })->name('Carousel');
});

Route::group(['prefix' => 'Forms'], function () {

    Route::get('Form_Element', function () {
        $active = 'Forms';
        $pageTitle = 'Form Element';
        return view('dashboard.Forms.Form_Element', compact('active', 'pageTitle'));
    })->name('Form_Element');

    Route::get('Form_Layout', function () {
        $active = 'Forms';
        $pageTitle = 'Form Layout';
        return view('dashboard.Forms.Form_Layout', compact('active', 'pageTitle'));
    })->name('Form_Layout');

    Route::get('Form_Advanced', function () {
        $active = 'Forms';
        $pageTitle = 'Form Advanced';
        return view('dashboard.Forms.Form_Advanced', compact('active', 'pageTitle'));
    })->name('Form_Advanced');

    Route::get('Form_Mask', function () {
        $active = 'Forms';
        $pageTitle = 'Form Mask';
        return view('dashboard.Forms.Form_Mask', compact('active', 'pageTitle'));
    })->name('Form_Mask');

    Route::get('Form_Picker', function () {
        $active = 'Forms';
        $pageTitle = 'Form Picker';
        return view('dashboard.Forms.Form_Picker', compact('active', 'pageTitle'));
    })->name('Form_Picker');

    Route::get('Form_Validation', function () {
        $active = 'Forms';
        $pageTitle = 'Form Validation';
        return view('dashboard.Forms.Form_Validation', compact('active', 'pageTitle'));
    })->name('Form_Validation');

    Route::get('Form_Wizard', function () {
        $active = 'Forms';
        $pageTitle = 'Form Wizard';
        return view('dashboard.Forms.Form_Wizard', compact('active', 'pageTitle'));
    })->name('Form_Wizard');

    Route::get('Form_X-Editable', function () {
        $active = 'Forms';
        $pageTitle = 'Form X-Editable';
        return view('dashboard.Forms.Form_X-Editable', compact('active', 'pageTitle'));
    })->name('Form_X-Editable');

    Route::get('File_Upload', function () {
        $active = 'Forms';
        $pageTitle = 'File Upload (Dropify)';
        return view('dashboard.Forms.File_Upload', compact('active', 'pageTitle'));
    })->name('File_Upload');

    Route::get('Drozone', function () {
        $active = 'Forms';
        $pageTitle = 'Drozone';
        return view('dashboard.Forms.Drozone', compact('active', 'pageTitle'));
    })->name('Drozone');

    Route::get('Bootstrap_Wyshtml5', function () {
        $active = 'Forms';
        $pageTitle = 'Bootstrap-Wyshtml5';
        return view('dashboard.Forms.Bootstrap_Wyshtml5', compact('active', 'pageTitle'));
    })->name('Bootstrap_Wyshtml5');

    Route::get('Tinymce_Wysihtml5', function () {
        $active = 'Forms';
        $pageTitle = 'Tinymce Wysihtml5';
        return view('dashboard.Forms.Tinymce_Wysihtml5', compact('active', 'pageTitle'));
    })->name('Tinymce_Wysihtml5');

    Route::get('Summernote', function () {
        $active = 'Forms';
        $pageTitle = 'Summernote';
        return view('dashboard.Forms.Summernote', compact('active', 'pageTitle'));
    })->name('Summernote');
});

Route::group(['prefix' => 'Charts'], function () {

    Route::get('Flot_Chart', function () {
        $active = 'Charts';
        $pageTitle = 'Flot Chart';
        return view('dashboard.Charts.Flot_Chart', compact('active', 'pageTitle'));
    })->name('Flot_Chart');

    Route::get('Morris_Chart', function () {
        $active = 'Charts';
        $pageTitle = 'Morris Chart';
        return view('dashboard.Charts.Morris_Chart', compact('active', 'pageTitle'));
    })->name('Morris_Chart');

    Route::get('Chart_Js', function () {
        $active = 'Charts';
        $pageTitle = 'Chart.Js';
        return view('dashboard.Charts.Chart_Js', compact('active', 'pageTitle'));
    })->name('Chart_Js');

    Route::get('Chartist', function () {
        $active = 'Charts';
        $pageTitle = 'Chartist';
        return view('dashboard.Charts.Chartist', compact('active', 'pageTitle'));
    })->name('Chartist');

    Route::get('Easy_Pie_Chart', function () {
        $active = 'Charts';
        $pageTitle = 'Easy Pie Chart';
        return view('dashboard.Charts.Easy_Pie_Chart', compact('active', 'pageTitle'));
    })->name('Easy_Pie_Chart');

    Route::get('Sparkline', function () {
        $active = 'Charts';
        $pageTitle = 'Sparkline';
        return view('dashboard.Charts.Sparkline', compact('active', 'pageTitle'));
    })->name('Sparkline');

    Route::get('Peity_Chart', function () {
        $active = 'Charts';
        $pageTitle = 'Peity Chart';
        return view('dashboard.Charts.Peity_Chart', compact('active', 'pageTitle'));
    })->name('Peity_Chart');
});

Route::group(['prefix' => 'Tables'], function () {

    Route::get('Basic_Table', function () {
        $active = 'Tables';
        $pageTitle = 'Basic Table';
        return view('dashboard.Tables.Basic_Table', compact('active', 'pageTitle'));
    })->name('Basic_Table');

    Route::get('Bootstrap_Table', function () {
        $active = 'Tables';
        $pageTitle = 'Bootstrap Table';
        return view('dashboard.Tables.Bootstrap_Table', compact('active', 'pageTitle'));
    })->name('Bootstrap_Table');

    Route::get('Data_Table', function () {
        $active = 'Tables';
        $pageTitle = 'Data Table';
        return view('dashboard.Tables.Data_Table', compact('active', 'pageTitle'));
    })->name('Data_Table');

    Route::get('Export', function () {
        $active = 'Tables';
        $pageTitle = 'Export';
        return view('dashboard.Tables.Export', compact('active', 'pageTitle'));
    })->name('Export');

    Route::get('RSPV_DataTable', function () {
        $active = 'Tables';
        $pageTitle = 'RSPV DataTable';
        return view('dashboard.Tables.RSPV_DataTable', compact('active', 'pageTitle'));
    })->name('RSPV_DataTable');

    Route::get('Responsive_Table', function () {
        $active = 'Tables';
        $pageTitle = 'Responsive Table';
        return view('dashboard.Tables.Responsive_Table', compact('active', 'pageTitle'));
    })->name('Responsive_Table');

    Route::get('Editable_Table', function () {
        $active = 'Tables';
        $pageTitle = 'Editable Table';
        return view('dashboard.Tables.Editable_Table', compact('active', 'pageTitle'));
    })->name('Editable_Table');

    Route::get('Foo_Table', function () {
        $active = 'Tables';
        $pageTitle = 'Foo Table';
        return view('dashboard.Tables.Foo_Table', compact('active', 'pageTitle'));
    })->name('Foo_Table');

    Route::get('Jsgrid_Table', function () {
        $active = 'Tables';
        $pageTitle = 'Jsgrid Table';
        return view('dashboard.Tables.Jsgrid_Table', compact('active', 'pageTitle'));
    })->name('Jsgrid_Table');
});

Route::group(['prefix' => 'Maps'], function () {

    Route::get('Vector_Map', function () {
        $active = 'Maps';
        $pageTitle = 'Vector Map';
        return view('dashboard.Maps.Vector_Map', compact('active', 'pageTitle'));
    })->name('Vector_Map');

    Route::get('Google_Map', function () {
        $active = 'Maps';
        $pageTitle = 'Google Map';
        return view('dashboard.Maps.Google_Map', compact('active', 'pageTitle'));
    })->name('Google_Map');
});

Route::group(['prefix' => 'Special_pages'], function () {

    Route::get('Blank_Page', function () {
        $active = 'Special_Pages';
        $pageTitle = 'Blank Page';
        return view('dashboard.Special_Pages.Blank_Page', compact('active', 'pageTitle'));
    })->name('Blank_Page');

    Route::get('Login', function () {
        return view('dashboard.Special_Pages.Authentication.Login');
    })->name('Login');

    Route::get('SignUp', function () {
        return view('dashboard.Special_Pages.Authentication.SignUp');
    })->name('SignUp');

    Route::get('Forgot_Password', function () {
        return view('dashboard.Special_Pages.Authentication.Forgot_Password');
    })->name('Forgot_Password');

    Route::get('Reset_Password', function () {
        return view('dashboard.Special_Pages.Authentication.Reset_Password');
    })->name('Reset_Password');

    Route::get('Lock_Screen', function () {
        return view('dashboard.Special_Pages.Authentication.Lock_Screen');
    })->name('Lock_Screen');

    Route::get('404', function () {
        return view('dashboard.Special_Pages.Error_Pages.404');
    })->name('404');

    Route::get('500', function () {
        return view('dashboard.Special_Pages.Error_Pages.500');
    })->name('500');

    Route::get('Invoice', function () {
        $active = 'Special_Pages';
        $pageTitle = 'Invoice';
        return view('dashboard.Special_Pages.Invoice.Invoice', compact('active', 'pageTitle'));
    })->name('Invoice');

    Route::get('Invoice_Archive', function () {
        $active = 'Special_Pages';
        $pageTitle = 'Invoice Archive';
        return view('dashboard.Special_Pages.Invoice.Invoice_Archive', compact('active', 'pageTitle'));
    })->name('Invoice_Archive');

    Route::get('Gallery', function () {
        $active = 'Special_Pages';
        $pageTitle = 'Gallery';
        return view('dashboard.Special_Pages.Gallery', compact('active', 'pageTitle'));
    })->name('Gallery');

    Route::get('FAQ', function () {
        $active = 'Special_Pages';
        $pageTitle = 'FAQ';
        return view('dashboard.Special_Pages.FAQ', compact('active', 'pageTitle'));
    })->name('FAQ');
});
