const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.styles([
    './resources/assets/vendors/bootstrap/4.1.3/dist/css/bootstrap.min.css',
    './resources/assets/vendors/fontawesome/5.4.1-web/css/all.css',
    './resources/assets/css/welcome.css'
], 'public/css/auth.css');

mix.scripts([
    './resources/assets/vendors/jquery/3.3.1/jquery.slim.min.js',
    './resources/assets/vendors/popper/popper.min.js',
    './resources/assets/vendors/bootstrap/4.1.3/dist/js/bootstrap.min.js',
    //'./resources/assets/vendors/fontawesome/5.4.1-web/js/all.js',
    './resources/assets/js/auth.js'
], 'public/js/auth.js');


mix.styles([
    './resources/assets/vendors/bootstrap/4.1.3/dist/css/bootstrap.min.css',
    './resources/assets/vendors/fontawesome/5.4.1-web/css/all.css',
    './resources/assets/vendors/OwlCarousel2-2.3.4/dist/assets/vendors/owl.carousel.min.css',
    './resources/assets/vendors/OwlCarousel2-2.3.4/dist/assets/vendors/owl.theme.default.min.css',
    './resources/assets/css/home.css'
], 'public/css/home.css');

mix.scripts([
    './resources/assets/vendors/jquery/3.3.1/jquery.slim.min.js',
    './resources/assets/vendors/popper/popper.min.js',
    './resources/assets/vendors/bootstrap/4.1.3/dist/js/bootstrap.min.js',
    './resources/assets/vendors/OwlCarousel2-2.3.4/dist/owl.carousel.min.js',
    './resources/assets/js/home.js'
], 'public/js/home.js');


mix.styles([
    './resources/assets/vendors/bootstrap/4.1.3/dist/css/bootstrap.min.css',
    './resources/assets/vendors/fontawesome/5.4.1-web/css/all.css',
    './resources/assets/css/welcome.css'
], 'public/css/welcome.css');

mix.scripts([
    './resources/assets/vendors/jquery/3.3.1/jquery.slim.min.js',
    './resources/assets/vendors/popper/popper.min.js',
    './resources/assets/vendors/bootstrap/4.1.3/dist/js/bootstrap.min.js'
], 'public/js/welcome.js');


mix.styles([
    './resources/assets/vendors/bootstrap/4.1.3/dist/css/bootstrap.min.css',
    './resources/assets/vendors/mdb/css/mdb.min.css',
    './resources/assets/vendors/bootstrap-tagsinput/src/bootstrap-tagsinput.css',
    './resources/assets/vendors/fontawesome/5.4.1-web/css/all.css',
    './resources/assets/vendors/fontawesome/5.4.1-web/css/v4-shims.min.css',
    './resources/assets/vendors/select2/css/select2.min.css',
    './resources/assets/vendors/datatables/dataTables.bootstrap4.min.css',
    './resources/assets/vendors/fancy/skin-win8/ui.fancytree.css',
    './resources/assets/vendors/switchery/switchery.min.css',
    './resources/assets/vendors/datepicker/daterangepicker.css',
    './resources/assets/vendors/jquery.tagsinput/src/jquery.tagsinput.css',
    './resources/assets/vendors/bootstrap-fileinput/css/fileinput.min.css',
    './resources/assets/vendors/bootstrap-sweetalert/sweet-alert.css',
    './resources/assets/css/pike.css'
], 'public/css/admin.css');

mix.scripts([
    './resources/assets/vendors/jquery/3.3.1/jquery.min.js',
    './resources/assets/vendors/jquery/3.3.1/jquery-migrate-1.0.0.0.js',
    './resources/assets/js/modernizr.min.js',
    './resources/assets/js/moment.min.js',
    './resources/assets/js/popper.min.js',
    './resources/assets/vendors/bootstrap/4.1.3/dist/js/bootstrap.min.js',
    './resources/assets/vendors/bootstrap-tagsinput/src/bootstrap-tagsinput.js',
    './resources/assets/vendors/mdb/js/mdb.min.js',
    './resources/assets/js/detect.min.js',
    './resources/assets/js/fastclick.js',
    './resources/assets/js/jquery.blockUI.js',
    './resources/assets/js/jquery.nicescroll.js',
    './resources/assets/js/jquery.scrollTo.min.js',
    './resources/assets/vendors/switchery/switchery.min.js',
    './resources/assets/vendors/select2/js/select2.min.js',
    './resources/assets/vendors/laravel-filemanager/js/stand-alone-button.js',
    './resources/assets/vendors/jsvalidation/js/jsvalidation.min.js',
    './resources/assets/vendors/datatables/jquery.dataTables.min.js',
    './resources/assets/vendors/datatables/dataTables.bootstrap4.min.js',
    './resources/assets/vendors/jquery-ui/1.11.4/jquery-ui.min.js',
    './resources/assets/vendors/fancy/src/jquery.fancytree.js',
    './resources/assets/vendors/fancy/src/jquery.fancytree.dnd.js',
    './resources/assets/vendors/fancy/src/jquery.fancytree.table.js',
    './resources/assets/vendors/fancy/src/jquery.fancytree.gridnav.js',
    './resources/assets/vendors/fancy/src/jquery.fancytree.edit.js',
    './resources/assets/vendors/fancy/src/jquery.fancytree.wide.js',
    './resources/assets/vendors/fancy/src/jquery.fancytree.glyph.js',
    './resources/assets/vendors/fancy/src/jquery.fancytree.childcounter.js',
    './resources/assets/vendors/switchery/switchery.min.js',
    './resources/assets/vendors/moment/min/moment.min.js',
    './resources/assets/vendors/moment/locale/es.js',
    './resources/assets/vendors/datepicker/daterangepicker.js',
    './resources/assets/vendors/jquery.tagsinput/src/jquery.tagsinput.js',
    './resources/assets/vendors/bootstrap-fileinput/js/plugins/piexif.min.js',
    './resources/assets/vendors/bootstrap-fileinput/js/plugins/sortable.min.js',
    './resources/assets/vendors/bootstrap-fileinput/js/plugins/purify.min.js',
    './resources/assets/vendors/bootstrap-fileinput/js/fileinput.min.js',
    './resources/assets/vendors/bootstrap-fileinput/themes/fa/theme.js',
    './resources/assets/vendors/bootstrap-sweetalert/sweet-alert.js',
    './resources/assets/vendors/chart.js/chart.min.js',
    //'./resources/assets/vendors/ckeditor/ckeditor.js',
    './resources/assets/js/daterangepicker.js',
    './resources/assets/js/pikeadmin.js',
    './resources/assets/js/tables.js',
    './resources/assets/js/fileinput.js',
    './resources/assets/js/auth.js'
], 'public/js/admin.js');

mix.styles([
    './resources/assets/vendors/bootstrap/4.1.3/dist/css/bootstrap.min.css',
    './resources/assets/vendors/fontawesome/5.4.1-web/css/all.min.css',
    './resources/assets/vendors/jquery-ui/1.11.4/jquery-ui.min.css',
    '/resources/assets/vendors/laravel-filemanager/css/cropper.min.css',
    './resources/assets/vendors/laravel-filemanager/css/dropzone.min.css',
    './resources/assets/vendors/laravel-filemanager/css/mime-icons.min.css',
    './resources/assets/vendors/laravel-filemanager/css/lfm.css'
], 'public/css/lfm.css');

mix.scripts([
    './resources/assets/vendors/jquery/3.3.1/jquery.min.js',
    './resources/assets/vendors/bootstrap/4.1.3/dist/js/bootstrap.min.js',
    './resources/assets/vendors/jquery-ui/1.11.4/jquery-ui.min.js',
    './resources/assets/vendors/laravel-filemanager/js/cropper.min.js',
    './resources/assets/vendors/laravel-filemanager/js/dropzone.min.js',
    //'./resources/assets/vendors/laravel-filemanager/js/lfm.js',
    './resources/assets/vendors/laravel-filemanager/js/stand-alone-button.js',
], 'public/js/lfm.js');


//
//mix.styles([
//    './resources/assets/vendors/bootstrap-4.1.3/dist/css/bootstrap.min.css',
//    './resources/assets/vendors/fontawesome-free-5.4.1-web/css/all.css',
//    './resources/assets/vendors/fontawesome-free-5.4.1-web/css/v4-shims.min.css',
//    '/resources/assets/vendors/laravel-filemanager/css/cropper.min.css',
//    './resources/assets/vendors/laravel-filemanager/css/lfm.css',
//    './resources/assets/vendors/laravel-filemanager/css/mfb.css',
//    './resources/assets/vendors/laravel-filemanager/css/dropzone.min.css',
//    './resources/assets/vendors/jquery-ui-1.11.4/jquery-ui.min.css'
//], 'public/css/lfm.css');
//
//mix.scripts([
//    './resources/assets/vendors/jquery-3.3.1/jquery.min.js',
//    './resources/assets/vendors/bootstrap-4.1.3/dist/js/bootstrap.min.js',
//    './resources/assets/vendors/bootbox.min.js',
//    './resources/assets/vendors/jquery-ui-1.11.4/jquery-ui.min.js',
//    './resources/assets/vendors/laravel-filemanager/js/cropper.min.js',
//    './resources/assets/vendors/laravel-filemanager/js/jquery.form.min',
//    './resources/assets/vendors/laravel-filemanager/js/dropzone.min.js',
//    './resources/assets/vendors/laravel-filemanager/js/lfm.js',
//    './resources/js/lfm.js',
//], 'public/js/lfm.js');


mix.styles([
    './resources/assets/vendors/bootstrap/4.1.3/dist/css/bootstrap.min.css',
    './resources/assets/vendors/fontawesome/5.4.1-web/css/all.css',
    './resources/assets/vendors/owlcarousel/owl.carousel.min.css',
    './resources/assets/vendors/owlcarousel/owl.theme.default.min.css',
    './resources/assets/css/coming-soon.css',
    './resources/assets/css/footer.css',
    './resources/assets/css/up.css',
    './resources/assets/css/welcome.css',
    './resources/assets/vendors/robinherbots/jquery.inputmask/dist/css/inputmask.css',
    './resources/assets/vendors/bootstrap-sweetalert/sweet-alert.css'
], 'public/css/superfacil.css');

mix.scripts([
    './resources/assets/js/modernizr.min.js',
    './resources/assets/vendors/jquery/3.3.1/jquery.min.js',
    './resources/assets/js/moment.min.js',
    './resources/assets/js/popper.min.js',
    './resources/assets/vendors/bootstrap/4.1.3/dist/js/bootstrap.min.js',
    './resources/assets/js/detect.min.js',
    './resources/assets/js/fastclick.js',
    './resources/assets/js/jquery.blockUI.js',
    './resources/assets/js/jquery.nicescroll.js',
    './resources/assets/js/jquery.scrollTo.min.js',
    './resources/assets/vendors/switchery/switchery.min.js',
    './resources/assets/vendors/owlcarousel/owl.carousel.min.js',
    './resources/assets/vendors/select2/js/select2.min.js',
    './resources/assets/vendors/jsvalidation/js/jsvalidation.min.js',
    './resources/assets/js/auth.js',
    './resources/assets/js/up.js',
    './resources/assets/vendors/robinherbots/jquery.inputmask/dist/min/jquery.inputmask.bundle.min.js',
    './resources/assets/vendors/bootstrap-sweetalert/sweet-alert.js',
    './resources/assets/js/home.js'
], 'public/js/superfacil.js');


mix.styles([
    './resources/assets/vendors/bootstrap/4.1.3/dist/css/bootstrap.min.css',
    './resources/assets/vendors/fontawesome/5.4.1-web/css/all.css',
    './resources/assets/vendors/owlcarousel/owl.carousel.min.css',
    './resources/assets/vendors/owlcarousel/owl.theme.default.min.css',
    './resources/assets/css/coming-soon.css',
    './resources/assets/css/footer.css',
    './resources/assets/css/up.css',
    './resources/assets/vendors/bootstrap-sweetalert/sweet-alert.css',
    './resources/assets/css/asn.css'
], 'public/css/asn.css');

mix.scripts([
    './resources/assets/js/modernizr.min.js',
    './resources/assets/vendors/jquery/3.3.1/jquery.min.js',
    './resources/assets/js/moment.min.js',
    './resources/assets/js/popper.min.js',
    './resources/assets/vendors/bootstrap/4.1.3/dist/js/bootstrap.min.js',
    './resources/assets/js/detect.min.js',
    './resources/assets/js/fastclick.js',
    './resources/assets/js/jquery.blockUI.js',
    './resources/assets/js/jquery.nicescroll.js',
    './resources/assets/js/jquery.scrollTo.min.js',

    './resources/assets/vendors/switchery/switchery.min.js',
    './resources/assets/vendors/owlcarousel/owl.carousel.min.js',
    './resources/assets/vendors/jsvalidation/js/jsvalidation.min.js',
    './resources/assets/js/up.js',
    './resources/assets/js/asn.js'
], 'public/js/asn.js');


mix.styles([
    './resources/assets/vendors/bootstrap/4.1.3/dist/css/bootstrap.min.css',
    './resources/assets/vendors/bootstrap/4.1.3/dist/css/bootstrap-grid.min.css',
    './resources/assets/vendors/owlcarousel/owl.carousel.min.css',
    './resources/assets/vendors/owlcarousel/owl.theme.default.min.css',
    './resources/assets/css/footer.css',
    './resources/assets/css/bookstore.css'
], 'public/css/bookstore.css');

mix.scripts([
    './resources/assets/js/modernizr.min.js',
    './resources/assets/vendors/fontawesome/5.4.1-web/js/solid.js',
    './resources/assets/vendors/fontawesome/5.4.1-web/js/fontawesome.js',
    './resources/assets/vendors/jquery/3.3.1/jquery.slim.min.js',
    './resources/assets/js/popper.min.js',
    './resources/assets/vendors/bootstrap/4.1.3/dist/js/bootstrap.min.js',
    './resources/assets/js/detect.min.js',
    './resources/assets/js/fastclick.js',
    './resources/assets/js/jquery.blockUI.js',
    './resources/assets/js/jquery.nicescroll.js',
    './resources/assets/js/jquery.scrollTo.min.js',
    './resources/assets/vendors/switchery/switchery.min.js',
    './resources/assets/vendors/owlcarousel/owl.carousel.min.js',
    './resources/assets/js/bookstore.js'
], 'public/js/bookstore.js');


mix.styles([
    './resources/assets/vendors/bootstrap/4.1.3/dist/css/bootstrap.min.css',
    './resources/assets/vendors/fontawesome/5.4.1-web/css/all.css',
    './resources/assets/vendors/owlcarousel/owl.carousel.min.css',
    './resources/assets/vendors/owlcarousel/owl.theme.default.min.css',
    './resources/assets/css/coming-soon.css',
    './resources/assets/css/footer.css',
    './resources/assets/css/grancomercial.css'
], 'public/css/grancomercial.css');

mix.scripts([
    './resources/assets/js/modernizr.min.js',
    './resources/assets/vendors/jquery/3.3.1/jquery.min.js',
    './resources/assets/js/moment.min.js',
    './resources/assets/js/popper.min.js',
    './resources/assets/vendors/bootstrap/4.1.3/dist/js/bootstrap.min.js',
    './resources/assets/js/detect.min.js',
    './resources/assets/js/fastclick.js',
    './resources/assets/js/jquery.blockUI.js',
    './resources/assets/js/jquery.nicescroll.js',
    './resources/assets/js/jquery.scrollTo.min.js',
    './resources/assets/vendors/switchery/switchery.min.js',
    './resources/assets/vendors/owlcarousel/owl.carousel.min.js',
    './resources/assets/vendors/select2/js/select2.min.js',
    './resources/assets/vendors/jsvalidation/js/jsvalidation.min.js',
    './resources/assets/vendors/robinherbots/jquery.inputmask/dist/min/jquery.inputmask.bundle.min.js',
    './resources/assets/js/auth.js',
    './resources/assets/js/bookstore.js',
    './resources/assets/js/home.js'
], 'public/js/grancomercial.js');