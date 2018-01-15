Route::get('/check', function ()
{
    dd(DB::connection()->getDatabaseName());
});
