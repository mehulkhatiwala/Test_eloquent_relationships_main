<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use File;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'gender',
        'age',
        'profile'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected $appends = [
        'full_name'
    ];

    public function tasks()
    {
        // TASK: fix this by adding a parameter
        return $this->hasMany(Task::class,'users_id','id');
    }

    public function comments()
    {
        // Demo
            // class TranslationGroup extends Model {

            //     public function words()
            //     {
            //         return $this->hasManyThrough(
            //         'App\Word', 'App\Translation', 'translation_group_id', 'translation_id');
            //     }
            
            // }
            // Copy Code
            // translation_groups
            //     id - integer
            
            // translations
            //     id - integer
            //     translation_group_id - integer
            
            // words
            //     id - integer
            //     translation_id - integer

        // Demo

        // TASK: add the code here for two-level relationship
        
        // return $this->hasManyThrough(Comment::class, Task::class, 'users_id', 'task_id'); // 
        return $this->hasManyThrough(
                                        Comment::class, 
                                        Task::class,
                                        'users_id', /* Foreign key on tasks table... */
                                        'task_id', /* Foreign key on comments table... */
                                        'id', /* Local key on users table... */
                                        'id' /* Local key on tasks table... */
                                    );
    }

    function getFullNameAttribute()
    {
        return ucwords("{$this->name} Patel");
        // return ucfirst($this->name) . ' ' . ucfirst('Patel');
    }

    // You are probably looking for accessors (getters) and mutators (setters).

    // Example of an accessor (getter) in Laravel:

    // public function getFirstNameAttribute($value)
    // {
    //     return ucfirst($value);
    // }

    // Example of a mutator (setter) in Laravel:

    // public function setFirstNameAttribute($value)
    // {
    //     $this->attributes['first_name'] = strtolower($value);
    // }

    // Example of an accessor (getter) in Laravel:

    public function getProfileAttribute($value)
    {
        $currentURL = url()->current();
        // http://127.0.0.1:8000/users
        // http://127.0.0.1:8000/users/1/edit

        // dd(env('APP_URL')." -- ".env('CHECK_EDIT_URL'));
        // dd($currentURL);
        if (isset($value) && str_contains($currentURL, 'edit')) {
            return $value.",".asset('images/profile/' . $value);
        } else if($value){
            return asset('images/profile/' . $value);
        }else if ($currentURL == 'http://127.0.0.1:8000/users') {
            return asset('no-image.png');
        }
    }

    // Example of a mutator (setter) in Laravel:

    public function setProfileAttribute($value)
    {
        // dd("new-", $value->getClientOriginalName());
        // dd($value);
        if($value){
            $destinationPath = public_path().'/images/profile';
            if(!File::isDirectory($destinationPath)){
                File::makeDirectory($destinationPath, 0777, true, true);
            }
            // $destinationPath = 'images/';
            $profileImage = date('YmdHis')."_profile.".$value->getClientOriginalExtension();
            $value->move($destinationPath, $profileImage);
            $this->attributes['profile'] = $profileImage;
        }
    }

    // public function projects()
    // {
    //     return $this->belongsToMany(Project::class)->withPivot('start_date');
    // }
}
