<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

# Create project and run dev

-   Open terminal
-   Create project `composer create-project laravel/laravel your-project-name`
-   Run : `cd public` => `php -S localhost:8080` => http://localhost:8080/ or `php artisan serve`

# Routes

-   Path file : routes/web.php
-   `Route::get('/home', function () {
    return View("home");
});`
-   home : Home.blade.php
-   Nhận request với phương thức : 
`Route::method(routes, callback)`
- Method get ,post => nhận từ form , put ,patch , delete
- Custom form `<input type="hidden" name="_method" value="DELETE"/>`
-   Nhận nhiều request cùng lúc thông qua mảng : 
`Route::match(["get","post"],path,callback);`
- `Route::any(path , callback)` => đối với tất cả request
- Dùng request : `use Illuminate\Http\Request;`
- Khai báo request : `Route::any(path,function(Request $request){return $request->method()})`
- `::redirect(path , redirectTo , status)` => nhận request sau đó chuyển hướng tới redirectTo , status => 404 ,200 ,...
- `::view(path , view)` => nhan request rồi render ra views
- Group => parent/children : `Route::prefix("parent")->group(function(){Route::get("children",callback)})`
- `::get("/path/{id}",function($id){return $id})`
- `::get("/path/{slug}-{id}.html",function($slug,$id){return $id.$slug})`
- Xử lí tham số `get...($id,$slug)...->where(['id'=>'pattern(regular expression)'])`
- Đặt tên  `->name("admin.rename")` =>views : `<a href="<?php echo route('admin.rename') ?>">Link</a>`

- Route to controller : `Route::get(routes,"namespace controller\classControllerName\actions")` 
- Route to controller : `Route::get(routes,[ControllerName::class,'action'])` =>`use App\Http\Controllers\ControllerName`

# Controller
- Create new controller : `php artisan make:controller NameController`
- `class ControllerName extends Controller{}`
- `public function actionName(){........}`
- Tương tác với routes : `Route::get(routes,[ControllerName::class,'action'])` =>`use App\Http\Controllers\ControllerName`
- Tương tác với views : `public function actionName(){return view("folder/file....")}`
- Create new controller resource : `php artisan make:controller NameController --resource` => `Route::resource(path,ControllerName::class)` => Tự tạo các action
- GET => /path => index
- GET => /path/create =>create
- POST => /path => store
- GET => /path/{path} => show
- GET => /path/{path}/edit => edit
- PUT/PATCH => /path/{path} => update
- DELETE => /path/{path} => destroy

# Middleware
- Xử lí trung gian để trước khi tới controller (VD : login ->chuyển hướng ,...)
- Create Middleware : `php artisan make:middleware MiddleWareName`
- File Http/Kernel.php => Add => `protected $middleware = [..., \namespace Middleware\MiddleWareName::class]`
- `$middlewareGroups = ["web"=>....=> chạy khi truy cập web,"api"=>....=> chạy khi truy cập api]` => đưa namespace vào
- Đăng kí middleware : `$routeMiddleware = ["name"=> \...\File\NameMiddleware::class]` => `Route::middleware('name')->prefix....` or `->middleware('name')`

# Token form
- Function `csrf_token()`
- `<input type="hidden" name="_token" value="<?php echo csrf_token();?>"/>` or `<?php echo csrf_field()?>
