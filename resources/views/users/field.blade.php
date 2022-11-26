@extends('layout')

@section('content')
<main class="con">
    @if (isset($user) && !empty($user))
        {{ $user }}
    @endif
    <div class="container mt-4">
        <div class="card ripe-malinka-gradient form-white">
            <div class="card-body">
                <!-- Form register -->
                <form id="user_form" name="user_form" enctype="multipart/form-data" action="{{route('users.store')}}" method="post">
                    <!-- @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif -->
                    @csrf
                    <h2 class="text-center font-up font-bold py-4 white-text">Sign up</h2>
                    <div class="md-form">
                        <label for="first_name">Your name</label>
                        <i class="fa fa-user prefix white-text"></i>
                        <input type="text" id="first_name" name="first_name" class="form-control" pattern="[a-z]" value="{{ (isset($user) && !empty($user) && $user->name != '') ?$user->name: '' }}" >
                        @error('first_name')
                            <div class="alert text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    </br>
                    <div class="md-form">
                        <label for="email">Your email</label>
                        <i class="fa fa-envelope prefix white-text"></i>
                        <input type="text" id="email" name="email" class="form-control" value="{{ (isset($user) && !empty($user) && $user->email != '') ?$user->email: '' }}" >
                        @error('email')
                            <span class="alert text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    </br>
                    @if(!isset($user) && empty($user))
                        <div class="md-form">
                            <label for="password">Your password</label>
                            <i class="fa fa-lock prefix white-text"></i>
                            <input type="password" id="password" name="password" class="form-control">
                            @error('password')
                                <span class="alert text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        </br>
                    @endif
                    <div class="md-form mb-2" id="gender">
                        <!-- <i class="fa fa-lock prefix white-text"></i> -->
                        <label for="gender">Gender</label> 
                        @error('gender')
                            <span class="alert text-danger">{{ $message }}</span>
                        @enderror
                        </br>
                        <input type="radio" class="form-group" name="gender" value="Male" {{ (isset($user) && !empty($user) && $user->gender == 'Male')?'checked': 'checked' }}>Male
                        <input type="radio" class="form-group" name="gender" value="Female" {{ (isset($user) && !empty($user) && $user->gender == 'Female')?'checked': '' }}>Female
                    </div>
                    </br>
                    <div class="md-form">
                        <label for="age">Your Age</label>
                        <!-- <i class="fa fa-lock prefix white-text"></i> -->
                        <i class="fa fa-lock prefix white-text"></i>
                        <input type="number" id="age" name="age" class="form-control" maxlength="3" value="{{ (isset($user) && !empty($user) && $user->age != '') ?$user->age: '' }}">
                        @error('age')
                            <span class="alert text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    </br>
                    <div class="md-form">
                        <label for="profile">Your Profile</label>
                        <!-- <i class="fa fa-lock prefix white-text"></i> -->
                        <i class="fa fa-lock prefix white-text"></i>
                        <input type="file" id="profile" name="profile" class="form-control">
                        @if(isset($user) && !empty($user) && $user->profile != '')
                            @php 
                                $user_full_profile = explode(',',  $user->profile);
                            @endphp
                            <img src="{{ $user_full_profile[1] }}" style="margin-top:10px;" height="100" width="100" />
                            <input type="hidden" name="old_image_name" id="old_image_name" value="{{ $user_full_profile[0] }}" />
                        @endif
                    </div>
                    </br>
                    <div class="text-center">
                        <input type="hidden" name="user_id" id="user_id" value="{{ (isset($user) && $user->id != ''?$user->id:'') }}"/>
                        <input type="hidden" name="action" id="action" value="{{ (isset($user)?'edit':'add') }}"/>
                        <button class="btn btn-success waves-effect waves-light" id="user_submit_btn" type="submit">Submit</button>
                    </div>
                    </br>
                </form>
                <!-- Form register -->
            </div>
        </div>
    </div>
</main>
@endsection

@section('script')
    <script>
        $( document ).ready(function() {
            var action = $("#action").val();
            $("#user_form").validate({
                rules:{
                    first_name: 'required',
                    email: {
                            required: true,
                            email: true,
                    },
                    password: 'required',
                    gender: 'required',
                    profile: { 
                        required: function(){
                            if(action == "add"){
                                return true;
                            }else{
                                return false;
                            }
                        }
                    }
                },
                messages:{
                    first_name: 'First name is required.',
                    email: {
                            required: "Email is required.",
                            email: "Please enter proper email id.",
                    },
                    password: 'Password is required.',
                    gender: 'Please select your gender.',
                    profile: 'Profile is required.'
                },
                errorPlacement: function(error, element) 
                {
                    // console.log(element);
                    if ( element.is(":radio") ) 
                    {
                        error.appendTo( element.parents('.md-form') );
                    }
                    else 
                    { // This is the default behavior 
                        error.insertAfter( element );
                    }
                },
            });

            $("#user_submit_btn").click(function(e) {
                // alert( "Handler for .click() called." );
                e.preventDefault();
                
                var user_id = $("#user_id").val();
                var routeurl = "";
                if(action == "edit"){
                    routeurl = "{{route('users.update')}}";
                }else {
                    routeurl = "{{route('users.store')}}";
                }
                if($("#user_form").valid()){
                    var formData = new FormData($("#user_form")[0]);
                    console.log(Object.fromEntries(formData));
                    $.ajax({
                        url: routeurl,
                        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                        dataType: "JSON",
                        type: "POST",
                        data: formData,
                        cache : false,
                        contentType: false,
                        processData: false,
                        success: function(response) {
                            if($.isEmptyObject(response.error)){
                                // console.log(response.success);
                                window.location = '{{ route('users.index') }}';
                            }else{
                                // console.log(response.error);
                                $.each(response.error,function(i, value){
                                    $("#"+i).after("<label for="+i+" class='error fw-bold'>"+value+"</label>")
                                    // console.log('index: ' + i + ',value: ' + value);
                                });
                            }
                        }
                    });
                }else{
                    console.log("error");
                }
            });
        });
    </script>
@endsection