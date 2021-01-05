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


use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Notification;
use MathParser\StdMathParser;
use MathParser\Interpreting\Evaluator;


Route::get('/info', function () {
    echo Carbon\Carbon::now();
    echo '<br/>';
    echo date("Y-m-d H:i:s");
    echo '<br/>';
    echo phpinfo();
});

Route::get('/', 'HomeController@index');

Auth::routes();
//Broadcast::routes();

Route::get('/eCommerce', 'HomeController@index')->name('eCommerce');
Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['auth']], function () {

    Route::resource('categories', \Catalogue\Categories\CategoryController::class);

    Route::resource('attributes', \Catalogue\Attributes\AttributeController::class);

    Route::resource('attribute-groups', \Catalogue\Attributes\AttributeGroupController::class);

    Route::resource('products', \Catalogue\Products\ProductController::class);

    Route::resource('products/simples', \Catalogue\Products\SimpleProductController::class);

    Route::resource('products/bundles', \Catalogue\Products\BundleProductController::class);

    Route::resource('suppliers', \Stocks\SupplierController::class);

    Route::resource('transactions', \Sales\Transactions\TransactionController::class);

    Route::resource('merchants', \Sales\Merchants\MerchantController::class);

    Route::resource('sales', \Reports\SalesReportController::class);

    Route::resource('orders', \Sales\Orders\OrderController::class);

    Route::post('orders/transactions', 'Sales\Orders\OrderController@pay');

    Route::resource('utilities', \Reports\UtilitiesReportController::class);

    Route::resource('cars', \Sales\ShoppingCarts\CartController::class);

    Route::resource('users', \Users\UserController::class);

    Route::resource('roles', \Users\RoleController::class);

    Route::resource('currencies', \Currencies\CurrencyController::class);

    Route::resource('albums', \Galleries\AlbumController::class);

    Route::resource('pages', \Stores\PageController::class);

    Route::resource('rates', \Currencies\RateController::class);

    Route::resource('templates', \Notifications\TemplateController::class);

    Route::resource('regions', \Delivers\RegionController::class);

    Route::resource('carriers', \Delivers\CarrierController::class);

    Route::resource('fees', \Delivers\FeeController::class);

    Route::resource('formats', \Bookstore\FormatController::class);

    Route::resource('tipologies', \Bookstore\TipologyController::class);


//    Route::resource('notification-types', \Notifications\CustomNotifications\NotificationTypeController::class);

    Route::resource('licenses', \Services\SoftwareLicenses\LicenseDataController::class);

    Route::get('downloads/{shipment}', function ($shipment) {

        $shipment = \Citmatel\Sales\Shipments\Repositories\Shipments::find($shipment);
        $licenseCarrier = new Citmatel\Services\SotwareLicences\Services\LicenseCarrier(new Citmatel\Services\SotwareLicences\Services\LicenseDataServices(new Citmatel\Services\SotwareLicences\Repositories\LicenseDataRepository()));
        $path = $licenseCarrier->deliver($shipment);

        return response()->download(storage_path($path));
    });


    Route::get('logs/search',
        ['as' => 'logs.search', 'uses' => '\Gazatem\Glog\Http\Controllers\GlogController@search']);


});

Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    $middleware = array_merge(\Config::get('lfm.middlewares'), [
        '\UniSharp\LaravelFilemanager\middlewares\MultiUser',
        '\UniSharp\LaravelFilemanager\middlewares\CreateDefaultFolder',
    ]);
    $prefix = \Config::get('lfm.url_prefix', \Config::get('lfm.prefix', 'laravel-filemanager'));
    $as = 'unisharp.lfm.';
    $namespace = '\UniSharp\LaravelFilemanager\controllers';

// make sure authenticated
    Route::group(compact('middleware', 'prefix', 'as', 'namespace'), function () {

        // Show LFM
        Route::get('/', [
            'uses' => '\UniSharp\LaravelFilemanager\controllers\LfmController@show',
            'as' => 'show',
        ]);

        // Show integration error messages
        Route::get('/errors', [
            'uses' => '\UniSharp\LaravelFilemanager\controllers\LfmController@getErrors',
            'as' => 'getErrors',
        ]);

        // upload
        Route::any('/upload', [
            'uses' => '\UniSharp\LaravelFilemanager\controllers\UploadController@upload',
            'as' => 'upload',
        ]);

        // list images & files
        Route::get('/jsonitems', [
            'uses' => '\UniSharp\LaravelFilemanager\controllers\ItemsController@getItems',
            'as' => 'getItems',
        ]);

        // folders
        Route::get('/newfolder', [
            'uses' => '\UniSharp\LaravelFilemanager\controllers\FolderController@getAddfolder',
            'as' => 'getAddfolder',
        ]);
        Route::get('/deletefolder', [
            'uses' => '\UniSharp\LaravelFilemanager\controllers\FolderController@getDeletefolder',
            'as' => 'getDeletefolder',
        ]);
        Route::get('/folders', [
            'uses' => '\UniSharp\LaravelFilemanager\controllers\FolderController@getFolders',
            'as' => 'getFolders',
        ]);

        // crop
        Route::get('/crop', [
            'uses' => '\UniSharp\LaravelFilemanager\controllers\CropController@getCrop',
            'as' => 'getCrop',
        ]);
        Route::get('/cropimage', [
            'uses' => '\UniSharp\LaravelFilemanager\controllers\CropController@getCropimage',
            'as' => 'getCropimage',
        ]);
        Route::get('/cropnewimage', [
            'uses' => '\UniSharp\LaravelFilemanager\controllers\CropController@getNewCropimage',
            'as' => 'getCropimage',
        ]);

        // rename
        Route::get('/rename', [
            'uses' => '\UniSharp\LaravelFilemanager\controllers\RenameController@getRename',
            'as' => 'getRename',
        ]);

        // scale/resize
        Route::get('/resize', [
            'uses' => '\UniSharp\LaravelFilemanager\controllers\ResizeController@getResize',
            'as' => 'getResize',
        ]);
        Route::get('/doresize', [
            'uses' => '\UniSharp\LaravelFilemanager\controllers\ResizeController@performResize',
            'as' => 'performResize',
        ]);

        // download
        Route::get('/download', [
            'uses' => '\UniSharp\LaravelFilemanager\controllers\DownloadController@getDownload',
            'as' => 'getDownload',
        ]);

        // delete
        Route::get('/delete', [
            'uses' => '\UniSharp\LaravelFilemanager\controllers\DeleteController@getDelete',
            'as' => 'getDelete',
        ]);

        // Route::get('/demo', 'DemoController@index');
    });

    Route::group(compact('prefix', 'as', 'namespace'), function () {
        // Get file when base_directory isn't public
        $images_url = '/' . \Config::get('lfm.images_folder_name') . '/{base_path}/{image_name}';
        $files_url = '/' . \Config::get('lfm.files_folder_name') . '/{base_path}/{file_name}';
        Route::get($images_url, '\UniSharp\LaravelFilemanager\controllers\RedirectController@getImage')
            ->where('image_name', '.*');
        Route::get($files_url, '\UniSharp\LaravelFilemanager\controllers\RedirectController@getFile')
            ->where('file_name', '.*');
    });

});

Route::get('/', function () {
    return view('stores.superfacil');
});


Route::prefix('internet')->group(function () {
    Route::get('/', function () {
        return view('stores.internet.index');
    });
});

Route::prefix('administre-su-negocio')->group(function () {
    Route::get('/', function () {
        return view('stores.asn.index');
    });
});

Route::prefix('libreria')->group(function () {
    Route::get('/', function () {
        return view('stores.bookstore.index');
    });
});


Route::get('administre-su-negocio/descargas', 'Stores\StoreController@page');

Route::get('administre-su-negocio/{page}', 'Stores\PageController@page');

//Route::get('administre-su-negocio', 'Stores\StoreController@home');

Route::get('pagos-conmutados', 'Stores\Store1Controller@home');

Route::post('administre-su-negocio/payments', 'Stores\StoreController@pay');
Route::post('pagos-conmutados/payments', 'Stores\Store1Controller@pay');


Route::get('notifications-test', function () {

    $notification = new \Citmatel\Notifications\WelcomeNotification();
    Notification::send(\Illuminate\Support\Facades\Auth::user(), $notification);
});


Route::post('/view-template/preview', function () {

    $viewId = \Illuminate\Support\Facades\Request::get('viewId');
    $view = \Citmatel\Notifications\CustomNotifications\Repositories\ViewTemplates::find($viewId);
    if ($view == null) {
        return -1;
    }

    return view($view->view_dir);
});


Route::get('/predi', function () {

    $context = \Citmatel\Notifications\CustomNotifications\Repositories\ContextTemplates::where(['id' => 3])->first();

    dd($context->predicates->items);
});

Route::get('/test', function () {

    dd(config('lfm.valid_file_mimetypes'));

    $http = new GuzzleHttp\Client;
    $response = $http->post('http://localhost:8082/compradetodov5.5/public/oauth/token', [
        'form_params' => [
            'grant_type' => 'client_credentials',
            'client_id' => '3',
            'client_secret' => 'Rcr9zUS2JeHjHmlSqQLI1UVgaFotSvV9KN2UxBo2',
//            'username' => 'admin@citmatel.cu',
//            'password' => 'admin',
            'scope' => '*',
        ],
    ]);

    $token = json_decode((string)$response->getBody(), true)['access_token'];

    return $response;

    $a = new \Citmatel\Delivers\Regions\Repositories\DeliveryRegionRepository();
    dd($a);
    dd($a);
    Log::info('stored',
        ['message' => 'New user Registered', 'id' => 23, 'name' => 'John Doe', 'email' => 'john@example.com']);

    $parser = new StdMathParser();

// Generate an abstract syntax tree
    $AST = $parser->parse('30x/100 + 15');

//// Do something with the AST, e.g. evaluate the expression:
//    $evaluator = new Evaluator();
//
//    $value = $AST->accept($evaluator);
//    echo $value;
    dump($AST);
});

Route::get('publish', function () {
    // Route logic...

    Redis::publish('test-channel', json_encode(['foo' => 'bar']));
    Notification::send(\Illuminate\Support\Facades1\Auth::user(), new \App\Notifications\AccountApproved());
});

Route::get('/clear-cache', function () {
    $exitCode = Artisan::call('cache:clear');
    // return what you want
});