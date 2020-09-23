const mix = require('laravel-mix');


mix
    .sass('resources/views/assets/scss/reset.scss', 'public/backend/assets/css/reset.css')
    .sass('resources/views/assets/scss/boot.scss', 'public/backend/assets/css/boot.css')
    .sass('resources/views/assets/scss/login.scss', 'public/backend/assets/css/login.css')
    .sass('resources/views/assets/scss/style.scss', 'public/backend/assets/css/style.css')

    .styles([
        'resources/views/assets/js/datatables/css/jquery.dataTables.min.css',
        'resources/views/assets/js/datatables/css/responsive.dataTables.min.css',
        'resources/views/assets/js/select2/css/select2.min.css',
    ], 'public/backend/assets/css/libs.css')

    .scripts([
        'resources/views/assets/js/jquery.min.js'
    ], 'public/backend/assets/js/jquery.js')

    .scripts([
        'resources/views/assets/js/login.js'
    ], 'public/backend/assets/js/login.js')

    .scripts([
        'resources/views/assets/js/datatables/js/jquery.dataTables.min.js',
        'resources/views/assets/js/datatables/js/dataTables.responsive.min.js',
        'resources/views/assets/js/select2/js/select2.min.js',
        'resources/views/assets/js/select2/js/i18n/pt-BR.js',
        'resources/views/assets/js/jquery.form.js',
        'resources/views/assets/js/jquery.mask.js',
    ], 'public/backend/assets/js/libs.js')

    .scripts([
        'resources/views/assets/js/scripts.js'
    ], 'public/backend/assets/js/scripts.js')

    .copyDirectory('resources/views/assets/js/datatables', 'public/backend/assets/js/datatables')
    .copyDirectory('resources/views/assets/js/select2', 'public/backend/assets/js/select2')
    .copyDirectory('resources/views/assets/js/tinymce', 'public/backend/assets/js/tinymce')

    .copyDirectory('resources/views/assets/css/fonts', 'public/backend/assets/css/fonts')

    .copyDirectory('resources/views/assets/images', 'public/backend/assets/images')

    .options({
        processCssUrls: false
    })

    .version()
;
