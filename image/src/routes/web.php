<?php
$route = env('PACKAGE_ROUTE', '').'/images/';
$controller = 'Increment\Common\Image\Http\ImageController@';
Route::post($route.'create', $controller."create");
Route::post($route.'retrieve', $controller."retrieve");
Route::post($route.'update', $controller."update");
Route::post($route.'upload', $controller."upload");
Route::post($route.'upload_base64', $controller."uploadBase64");
Route::post($route.'upload_un_link', $controller."uploadUnLink");
Route::post($route.'delete', $controller."delete");
Route::get($route.'test', $controller."test");

$route = env('PACKAGE_ROUTE', '');
Route::get($route.'/storage/image/{filename}', function ($filename)
{
    $path = storage_path('/app/images/' . $filename);

    if (!File::exists($path)) {
        abort(404);
    }

    $file = File::get($path);
    $type = File::mimeType($path);

    $response = Response::make($file, 200);
    $response->header("Content-Type", $type);

    var_dump($file);

    return 'hello';
});