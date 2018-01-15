Route::get('/checkDB', function ()
{
    dd(DB::connection()->getDatabaseName());
});
