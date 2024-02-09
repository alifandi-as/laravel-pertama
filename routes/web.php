<?php

use App\Services\UserService;
use App\Helpers\Aritmatika;
use App\Helpers\Validation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use App\Repositories\UserRepository;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;
use \Illuminate\Support\Facades\Session;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\SessionController;


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
    return view('welcome');
});

// Route::get('/beranda',function(){
//     return view('beranda.v1.home');
// });

Route::get('/beranda',[
    BerandaController::class,
    'index'
]);

Route::get('/profile',function(){
    return 'PROFILE';
});

Route::get('/profile/saya',function(){
    return 'PROFILE SAYA';
});

Route::get('/product/',function(){
    return 'PROFILE SAYA';
});

Route::controller(UserController::class)
    ->prefix('users')
    ->group(function(){
        Route::get('/', 'index');
        Route::get('/create', 'create');
        Route::get('/store', 'store');
        Route::get('/update', 'update');
        Route::get('/delete', 'delete');
        Route::get('/index_qb', 'index_qb');
        Route::get('/create_qb', 'create_qb');
        Route::get('/update_qb', 'update_qb');
        Route::get('/delete_qb', 'delete_qb');
    });

Route::get('/helper', function(){
    if(session('errors')){
        return session('errors');
        // return view('beranda');
    }
    // return sumNumber(2, 2);
    return Aritmatika::sum(1, 2);
});

Route::get('/tes', function(Request $request){
    // CODING DI CONTROLLER
    $request->validate([
        'user_id' => 'required',
        'email' => 'required|email'
        // 'email' => ['required', 'email']
    ]);

    // CODING DI BAWAH AKAN JALAN
    // simpan data, edit delete
});

Route::get('/auth', function(){
    return "PROFILE";
})->middleware('auth-middleware');

Route::get('/set-session', function(){
    $name = $_GET['name'];
    $value = $_GET['value'];

    Session::put($name,$value);
    echo $name;
    echo $value;
});

// Route::get('/set-session', function(){
//     $name = $_GET['name'];
//     $value = $_GET['value'];

//     Session::put($name,$value);
//     echo $name;
//     echo $value;
// });

// Route::get('/get-session', function(){
//     $name = $_GET['name'];
//     $value = $_GET['value'];

//     Session::get($name,$value);
//     echo $name;
//     echo $value;
// });

Route::get('/get-session', [SessionController::class, 'getSession']);
Route::get('/set-session', [SessionController::class, 'setSession']);

Route::get('/hello/{name}/{age}/{address}',function($name, $age, $address){
    return "Hello $name ";
});

Route::get('user',[UserController::class,'index']);
Route::get('user/create',[UserController::class,'create']);
Route::get('user/edit/id',[UserController::class,'edit']);
Route::post('user/store',[UserController::class,'store']);
Route::patch('user/update/id',[UserController::class,'update']);
Route::delete('user/destroy/id',[UserController::class,'destroy']);

Route::controller(UserController::class)
->prefix('/user')
->middleware(['auth-middleware'])
->group(function(){
    Route::get('/','index');
    Route::get('/create','create');
    Route::get('/edit/id','edit');
    Route::post('/store','store');
    Route::patch('/update/id','update');
    Route::delete('/destroy/id','destroy');
});

Route::view('shopee','shopee');

Route::get('sopi',function(){
    return view('shopee-v2');
});

Route::get('/localization/{bahasa}',function($bahasa){
    App::setLocale($bahasa);
    return __('beranda.welcome2');
});

Route::get('validate_helper',function(Request $request){
    Validation::validate_date($request);
});

Route::get('/validate_middleware', function(){
})->middleware('validation-middleware');

Route::get('hash',function(){
    $password = "123456";
    $encryptedPassword = Hash::make($password);

    return ["$encryptedPassword" => $encryptedPassword,
            "CHECK" => Hash::check('abcdef', $encryptedPassword)];
});

Route::get('/encrypt', function(){
    $plainText = "Selamat Pagi";
    $encrypted = encrypt($plainText);

    $decrypted = decrypt($encrypted);

    return [
        '$plainText' => $plainText,
        '$encrypted' => $encrypted,
        '$decrypted' => $decrypted
    ];
});

Route::get('/login', function(){
    return view("login");
});

Route::get('/user-data', function(){
    return view("user-data");
})->middleware('login-middleware');

// Route::get('/homepage', function(Request $request){
//     if($request->lang){
//         App::setLocale($request->lang);
//     }
//     return view("homepage");
// });

Route::prefix('homepage')->group(function(){
    Route::get('',function(Request $request){
        if($request->lang){
            App::setLocale($request->lang);
        }
        return view("homepage");
    });
    Route::get('articles',function(Request $request){
        if($request->lang){
            App::setLocale($request->lang);
        }
        return view("articles");
    });
});

// Route::get('/articles', function(){
//     return view("articles");
// });

Route::view('file-upload','file-upload');

Route::post('post-file-upload', function(Request $request){
    // dd($request->profile);
    $upload = Storage::put('image',$request->profile);
    return asset("storage/{$upload}");
});

Route::get('/beranda',[
    BerandaController::class,
    'index'
]);

Route::get('/tes',function(){
    return "Sample-Route";
});
Route::get('/tugas10/repository/detail',function(){
    return UserRepository::listAllUsersDetail();
});

Route::get('/tugas10/repository/name',function(){
    return UserRepository::listAllUsersName();
});

Route::get('/tugas10/service/detail',function(){
    return UserService::listAllUsersDetail();
});

$username = "kelas_industri";
$password = "2024";
Route::get('/basic-auth', function(Request $request){
    return $request->header();
});

Route::get('/tugas10/service/name',function(){
    return UserService::listAllUsersName();
});