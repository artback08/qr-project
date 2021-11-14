Route::name('user')->group(function(){
Route::view('/private', 'private')->middleware('auuth')->name('private');
});
