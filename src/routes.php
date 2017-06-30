<?php

Route::get('timezones/{timezone?}', 
  'jatin\timezones\TimezonesController@index');
Route::get('demo', 
  'jatin\timezones\TimezonesController@demo');