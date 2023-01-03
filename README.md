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
# Token form
- Function `csrf_token()`
- `<input type="hidden" name="_token" value="<?php echo csrf_token();?>"/>`