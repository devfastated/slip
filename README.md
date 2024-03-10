# README
 Udemy - Master Laravel 10 for Beginners & Intermediate 2024

# Project 1 [TASK LIST - BASIC CRUD]


# 1. Installed fresh laravel app

# 2. Installed Livewire

# 3. Practice Laravel and Livewire (2 weeks)


# Learned Routing 

1. Route::get('/', function(){
     return 'Hello World';
})->name('welcome'); 

# Passing function to another function 

Route::get('/login', function(){
     //functions pa na pwede ipuno
     return redirect()->route('welcome');
});

2. Parameters in function

Route::get('/newpage/{id}', function($id){
     return 'Hello' . $id . 'world';
});



#
