<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 2000 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[OP.GG](https://op.gg)**
- **[WebReinvent](https://webreinvent.com/?utm_source=laravel&utm_medium=github&utm_campaign=patreon-sponsors)**
- **[Lendio](https://lendio.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).











ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

preg_replace('/[^a-zA-Z0-9_ -]/s',' ',str_replace(' ', '_', $row['seller_display_name']));

July :
    
    02-07-2022 :-
        attend overtime
    03-07-2022 :-
        not attend overtime
    04-07-2022 :-
        working on 9:44 checkin
        check out 6:44

    05-07-2022 :- 
        working on 9:37 checkin
        working on  checkout


    12-07-2022 :-
        cart some issue on model (base.tpl)
        rating add all view pages (index,seller,product,add to cart view)
        all seller/shop rating show data get & view (seller page)
        seller like/dislike add (seller page)
        product wishlist add or remove issue
        seller page view all category option 
    
    13-07-2022 :-
        - user site = index.php = wishlist add & remove not show on this page 
        - seller & admin site = return policy & days & type add, update & view on add product
        - seller & admin site = return policy & days & type add, update & view on copy product
        - seller & admin site = return policy & days & type add, update & view on existing product

    14-07-2022 :-
        - seller = required for shipping

    15-07-2022 :-
        - seller = required for shipping (save proccess)
        - seller = add-edit product while required shipping & show error save step 2 -- one subattribute seleced of one attribute 
        - User = cart_count not proper show 

    18-07-2022 :- 
        - User :- cart page some link add (cart_listing)
        - User :- product page add review show, add, edit  
        - User :- product review like or dislike
        - Seller :- copy product issue 

    19-07-2022 :- 
        - seller :- copy product api
        - some issue handle 

    20-07-2022 :- 
        - seller :- copy product api

    21-07-2022 :-
        - seller :- add, edit, copy, existing product (season,) field add on products table
            step-2
                season

            step - 3
                product_display_area
                product_order_type

            step - 4
                product_return_days
                product_return_type

        - seller api :- same above changes in seller api [SellerRegister, Mouseller, SellerCategoryBrandList]
        - onlinepayement api new create
        - sellerRegister api error solved

    22-07-2022 :- 
        - seller api :- add, edit, copy, existing product (season,) field add on products table (completed)
            SellerAddProductTab1
            SellerAddProductTab2
            SellerAddProductTab3
            SellerAddProductTab4
            SellerEditProductTab1
            SellerEditProductTab2
            SellerEditProductTab3
            SellerEditProductTab4

        - getseason, getproductordertype, getreturntype, getreturndays api new create 
        - loginverify page 
        - cart page count not proper
        - 4:00 pm to 6:30 pm leave & unpaid leave half day - 2:00 pm to 6:30 pm
    
    23-07-2022 :-
        - 2x leave beacuse not approve leave by hr.

    25-07-2022 :-
        - Seller api - New api create
            SeasonList
            SellerProductOrderTypeList
            SellerReturnTypeAcceptedList
            SellerReturnDaysList
            SellerContactExist
            exsting product add 

        - seller site - copy product htmllink not change 
        - User site - whishlist & add to cart change globally 

    26-07-2022 :-
        - seller api 
            getdata of all selected product details [ SeasonList,SellerProductOrderTypeList,SellerReturnTypeAcceptedList,SellerReturnDaysList]
            existing product 
        - seller -
            existing product add [ category add first message show ]

    27-07-2022 :- 
        - seller api 
            existing product [ hold ]
            api changes brand add all step
        - seller -
            Delhivery ready to ship insert & pickup changes cron [ bulk pickup cron run ] 

    28-07-2022 :-
        - seller - 
            Delhivery ready to ship insert & pickup changes cron [ bulk pickup cron run ] 
        - user add to cart - app & web field value mismatch

    29-07-2022 :-
        seller api -
            existing product add
            SellerFAQCategoryList
            invoice generate & mail sent on onlinepayement api

    30-07-2022 :- 
        seller api :-
            invoice generate & mail sent on onlinepayement api 
        -> Q-- subscription amount insert in table without gst or with gst like paid_amount = 2094 or paid_amount = (2094 - 0)+cgst+sgst+igst 
            existing product add

        Seller :-
            subscription payment date not proper & invoice add & view path change 

    01-08-2022 :- 
        seller api -
            holding exsting peoduct add - SearchExistingProductsByLUPC()
            add existing product in copy product
        User :
            mobile_verified field check in user loginverify
        
    02-08-2022 :-
        Seller  api - 
            add existing product in copy product
            brand concept view ( karanbhai ) 
        User - 
            deactive user login not proper work

    03-08-2022 :- 
        Seller api -
            add existing product in copy product
            brand view follow

        heroes -
            Cron meeting
            designation add & edit one field 
    
    04-08-2022 :-
        seller api -


        heroes -
            overtime permission changes 
            Mask leave tab & all employee 540 minutes add on checkout time in db ( HR - mask_leave_add (permission check status) )
            check out button not show on 10:30 pm
            checkin button show check conditions

    05-08-2022 :- 
        heroes - 
            overtime permission changes 
            checkin button show check conditions
        
    08-08-2022 :-
        heroes - 
            salary cron
            checkin button show check conditions
        
    09-08-2022 :-
        heroes -
            salary cron
        Seller -
            subscription invoice not create

    10-08-2022 :-
        heroes - 
            recalculate salary button add salary cron
            
    12-08-2022 :- 
        heroes - 
            testing all working 
            sidebar some condition add for check in & check out not proper

    13-08-2022 :-
        heroes -
            edit_check , generateemployeesalary, mass_leave

        seller - 
            brand changes

        Admin - 
            gst [bank detail] - upload pdf file allow [ karanbhai issue ]

    15-08-2022 :-
        seller -
            brand changes
        
        User website testing


    16-08-2022 :- 
        seller -
            brand change

        User - 
            seller_product category select not work

    17-08-2022 :-
        saroli bridge breckdown so leave on this date

    18-08-2022 :-
        seller :-
            add product - required shipping not work proper
            brand - working all changes
            order - ready to ship - not button not proper -- waybill no issue

    19-08-2022 :-
        seller api -
            add product - 1st step - in DB product_id = 0 add 

        seller - 
            add product - required shipping not work proper
            brand - working all changes

    22-08-2022 :-
        seller -
            brand changes   
            validation
            
        User - 
            cart
    
    23-08-2022 :-
        seller -
            brand changes
        
    24-08-2022 :-
        seller - 
            brand changes

        Admin -
            seller detail -> SLA update -> all old entry remove automatically [ updateSeller() ]

        heroes -
            leave not apply
        
    25-08-2022 -
        seller -
            brand changes

        heroes - 
            leave

    26-08-2022 -
        seller - 
            brand changes
            Login page – password remember not work. 

        seller API - 
            changes

    27-08-2022 -
        seller API -
            changes
            subscription flow add in api

        Admin 
            LS00006 seller account not active -- seller data not save 

    29-08-2022 -
        seller API -
            changes
            subscription invoice download & send mail in api

    30-08-2022 -
        seller API -
            changes
            existing copy product thumb not generate and not insert in db [solved]
            package status change
            seller_name -- special character issue on view images


-- RESTART --

    01-11-2022 -
        seller :-
            - see all website & testing
        
    02-11-2022 -
        seller :-
            - product page -> buy now option with pincode not proper check & disable

    03-11-2022 -
        testing website
        check api

    04-11-2022 -
        User -
            - password validation add
            - forgot password new functinality

    07-11-2022 -
        User -
            - forgot password functinality
            - searching

    08-11-2022 -
        - searching new
        User -
            - category select -> categories filter
            - search on searchbox -> search categories filter 
            - change password -> new & current password check in php

    09-11-2022 - 
        - User -
            - change password -> new & current password check in php
        - Test Websites 
    
    10-11-2022 - 
        - API :-
            - productSearch :- total_pages variable add in this api
        - Test Websites
        - search

    11-11-2022 -
        - Seller :-
            - Seller Panel Dashboard SLA Breach count does not include Pickup orders
            - Also give a orders list on dashboard which are breaching the SLA Compliance on click of the counter above.
        - User :-
            - add to cart pickup time not proper add & show 
    
    12-11-2022 -
        - User :-
            - add to cart one field in db 
            - add pickup order -> dispatch_date not proper add, readytopickup field add null, pickup_date field add in oqwd table
            - forgot password mail -> password sent minimum 8 character & success message not show
        
        - Seller :-
            - payment gateway issue by karanveer

        APIs -
            - - add pickup order -> dispatch_date not proper add, readytopickup field add null, pickup_date field add in oqwd table

    14-11-2022 -
        - Seller :- 
            - registration first time -> payment gateway issue by karanveer
            - pickup order all list table field name change 

        - APIs :-
            - sellerLogin api check
            - click readyForPickup -> download bill not working
            - new api make -> SubscriptionPay()  -  insert data in table subscription
            - onlinepayement api change

    15-11-2022 -
        - APIs :-
            - getTrackYourOrder api - change [ static data ] pending order tracking & dynamic data
            - postcode empty error in api
            - addBrandStep5 check
            
        - User :-
            - product return 2 entry insert in DB

    16-11-2022 - 
        - APIs :-
            - user site - getTrackYourOrder() tracking not proper show & date

        Seller :-
            - viewSubOrder page postcode not show
            - Return tacking order

        User :-
            - Return tacking order
            - forgot password msg error
            - change password

    17-11-2022 -
        - User :-
            - product return 2 entry in DB
            - orderDetails button show

    18-11-2022 -
        - laravel
        - testing

    21-11-2022 -
        - laravel 

    22-11-2022 -
        - laravel

    23-11-2022 -
        - User -
            - customer review not proper in product page
            - first time set password 
        
        - seller -  
            - seller dashboard (Upcoming Onday for Delivery / Pickup) show color not show proper

    24-11-2022 -
        - testing 
        - laravel

    25-11-2022 -
        - testing
        - laravel

    26-11-2022 -
        - testing
        - laravel

    28-11-2022 -
        - testing   
            - Select your address model not open

        - seller 
            - brand add 5 step any one compasory & last select yes then last 3 option add

    29-11-2022 -
        - seller 
            - brand add 5 step any one compasory & last select yes then last 3 option add
        - new project

    30-11-2022 -
        - new project
        - laravel & aws git

    01-12-2022 -
        - new project
        - laravel & aws git

    02-12-2022 -
        - new project
        - laravel & aws git

        Lunch break time - 23 min (23+15+0 = 42 min)
        Tea break time - 15 min
        over time - 0 min

        checkin time - 10:02 AM (32+90 = 122-7 = 115-42 = 73 min) ---- 73 min baki
        checkout time - 5:07 pm

        leave on 5:10 pm - 1 hour cover
    
    05-12-2022 -
        - laravel & aws git
        - Advertise - 
            - DB & Api

        Lunch break time - 19 min (19+15+1 = 35 min) ----  
        Tea break time - 15 min
        over time - 1 min

        checkin time - 9:29 AM 
        checkout time - FORGOT

    06-12-2022 - 
        - LARAVEL -
            - get all data using external api 
        
        - advertisement -
            - all seller data get of first time register with logo

        Lunch break time - 26 min (26+15 = 41 min)
        Tea break time - 15 min
        over time - 

        checkin time - 9:28 AM 
        checkout time - 6:34 pm

    07-12-2022 -
        - advertisement -
            - all seller data get of first time register
            - JWT implement

        -  Tea break time - 15 min

    08-12-2022 -
        - advertise - 
            - jwt not woring in my PC
            - apis working

    09-12-2022 -    
        - UL leave
    
    10-12-2022 -
        - UL leave

    12-12-2022 -
        - Adevrtise :-
            - apis
            - mail send
        
    13-12-2022 -
        - Advertise :-
            - apis - ( pincodeByCity, cityByState, getStates, isEmailExistAd )
            - mail send ( working )

    14-12-2022 -
        - Advertise :-
            - apis - ( create campaign apis start )
            - mail send (completed) 

    15-12-2022 - 
        - Advertise :-
            - apis - ( create campaign apis start )
            - multiple images upload of base64 url (completed)
            - external css link on mail blade file

    16-12-2022 -
        - Advertise :-
            - apis - ( create campaign apis start )
        
    19-12-2022 -    
        - Adevrtise :-
            - apis - ( create campaign apis )
    
    20-12-2022 -
        - Advertise :-
            - apis - ( create campaign apis )

    21-12-2022 -
        - Advertise :-
            - apis - ( create campaign apis )

    22-12-2022 -
        - Adevrtise :-
            - apis - ( create campaign apis )























## Nital Patel ##

$inputs = $request->all();

// $advertiser = Advertiser::whereId(auth()->user()->id)->find();
// dd(auth()->user()->toArray());
auth()->user()->email = $this->stringEncryption('decrypt',auth()->user()->email);
auth()->user()->contact_mobile = $this->stringEncryption('decrypt',auth()->user()->contact_mobile);

$inputs['email'] = $this->stringEncryption('encrypt',$inputs['email']);


###### Nital Patel Documents ########

## ---------------------------------------- Run with host & post ---------------------

php artisan serve --host=192.168.29.41 --port=8000

## ---------------------------------------- Extension for laravel -----------------------

-> Laravel Artisan - Run Laravel Artisan commands within Visual Studio Code

-> Laravel Snippets - Laravel snippets for Visual Studio Code (Support Laravel 5 and above)


## ---------------------------------------- Existing project run in another Pc --------------------

1. Set up with web server(php,mysql).

2. If you had copied vendor folder than you should delete after copied to your new windows system and run command 
    ----- composer update to avoid any composer related issues like paths,versions and compatibility.

3. configure your .env according to your project

    DB_CONNECTION=mysql // DEFAULT DB_HOST=127.0.0.1 // DEFAULT DB_PORT=3306 // DEFAULT DB_DATABASE=YOUR_DB_NAME DB_USERNAME=YOUR_DB_USERNAME DB_PASSWORD=YOUR_DB_PASSWORD

4. After that you need to run migrate for tables creation.

    php artisan migrate

5. You can now run your project :

    php artisan serve --host=192.168.29.41 --port=8000


## ---------------------------------------- Model, controller, resource, make -------------------------

    php artisan make:model Todo -a
        Or
    php artisan make:model Todo -all

    -> Other Options

        -c, --controller Create a new controller for the model

        -f, --factory Create a new factory for the model

        --force Create the class even if the model already exists

        -m, --migration Create a new migration file for the model

        -s, --seed Create a new seeder file for the model

        -p, --pivot Indicates if the generated model should be a custom intermediate table model

        -r, --resource Indicates if the generated controller should be a resource controller


## ---------------------------------------- Validation ------------------------------------------------------------------------------

    -> https://laravel.com/docs/4.2/validation

        use Illuminate\Support\Facades\Validator;

        $inputs = $request->all();
        
        $rules = array(
                    'name' => 'required|string|max:255',
                    'email' => 'required|string|email|max:255|unique:users',
                    'password' => 'required|string|min:6',
                );

        $messages = array(
                        'name.required' => 'this field is required',
                        'name.max' => 'maximum 20 character',
                        'email' => 'this field is required',
                        'password' => 'this field is required',
                    );

        $validation = Validator::make($inputs, $rules, $messages);

        if ($validation->fails()) {
            // return response()->json($validator->errors());
            return response()->json([
                'status' => 'error',
                'message' => 'Something went wrong.',
                'data' => $validation->errors() // $validator->errors()->first()
            ]);
        }
    
    -> custom Rules add in validation rules :
        use Illuminate\Validation\Rule;

        $rules = array(
            'advertiser_id' => 'required',
            'campaign_name' => ['required',
                Rule::unique('campaigns')->where(function($query) use ($inputs) {
                    $query->where('advertiser_id', '=', $inputs['advertiser_id']); // ->where('id', '<>', $inputs['id']);
                })
            ], // campaign_name check - where( 'advertiser_id', '=', $advertiser_id ) - advertise id and [ where('id', '<>', $inputs['id']) -> ignore id // use update time ]
            'campaign_type' => 'required',
            'keywords' => 'required',
        );

    -> Edit data check ( pass id ignore of edit time )
        $rules = array(
            'advertiser_id' => 'required',
            'campaign_name' => 'required|unique:campaigns,campaign_name,'.$id.',id', // where( 'id', '<>', $id ) - - ignore id and campaign_name check
            'campaign_type' => 'required',
            'keywords' => 'required',
        );

## ---------------------------------------- Extranal api run in project -----------------------------

    -> api.php -
        Route::post('/externalAPI', [AuthController::class, 'externalAPI']);
        Route::post('/externalAPIWithParam', [AuthController::class, 'externalAPIWithParam']);
    
    -> controller -
        use Illuminate\Support\Facades\Http;

        public function externalAPI(Request $request)
        {
            $seller_api_key = env('seller_api_key');
            $api_response = Http::post('https://alphago.letmegrab.in/APIs/sellerapi.php?action=SeasonList&api_key='.$seller_api_key);
            return $jsonData = $api_response->json();
            // dd($jsonData);
        }

        public function externalAPIWithParam(Request $request)
        {
            // dd($request->product_id);
            $api_response = Http::post('https://alphago.letmegrab.in/APIs/sellerapi.php?action=SellerEmailExist', [
                'email_id' => $request->email_id,
            ]);
            return $jsonData = $api_response->json();
            // dd($jsonData);
        }


## ---------------------------------------- Upload images using another project url -----------------------------------

    -> api.php -
        Route::post('/getSellerData', [AuthController::class, 'getSellerData']);

    -> controller -
        use Image;
        use Illuminate\Support\Facades\Http;
        use Illuminate\Support\Facades\File;

        public function getSellerData(Request $request)
        {
            // dd($request->product_id);
            $api_response = Http::post('https://alphago.letmegrab.in/APIs/sellerapi.php?action=sellerDetailForAdvertAPI', [
                'seller_email' => $request->email,
            ]);
            $jsonData = $api_response->json();
            $seller_logo = $jsonData['data']['seller_logo'];
            $seller_uid = $jsonData['data']['seller_uid'];

            $path = env('seller_logo_path').$seller_uid.env('seller_logo_folder').$seller_logo;
            $extension = pathinfo($path, PATHINFO_EXTENSION);
            $filename = $jsonData['data']['seller_uid']."_". strtotime("now")."_".'logo.'.$extension;
            
            $logo_path = public_path('images/');
            if(!File::isDirectory($logo_path)){
                File::makeDirectory($logo_path, 0777, true, true);
            }
            Image::make($path)->save($logo_path.$filename);
            $jsonData['data']['seller_logo_url'] = asset('images/').$filename;
            // dd($filename);
            return $jsonData;
        }


## ---------------------------------------- Route except/ignore and only/apply/accept in middleware and resource route -------------------------------

    -> syntax :- ____( ____,  ['except' => ['login','register','externalAPI','externalAPIWithParam','getSellerData']]);
        $this->middleware('auth:api', ['except' => ['login','register','externalAPI','externalAPIWithParam','getSellerData']]);

    -> syntax :- ____( ____,  ['only' => ['logout','refresh']]);
       $this->middleware('auth:api', ['only' => ['logout','refresh']]); 


## ---------------------------------------- Authenticate --------------------------------------------------
    
    1. multiple authentication in laravel 9 
        - https://www.itsolutionstuff.com/post/laravel-9-multi-auth-create-multiple-authentication-in-laravelexample.html
        - https://techvblogs.com/blog/multiple-authentication-guards-laravel-9

        Auth::guard('api')->attempt() ( multiple auth guard check & attept )

    2. multiple role-based authentication in laravel 9
        - https://masteringbackend.com/posts/multiple-role-based-authentication-in-laravel/
    
    3. jwt authentication in laravel 9
        - https://www.positronx.io/laravel-jwt-authentication-tutorial-user-login-signup-api/
            - composer install change 
                --> composer require tomfordrumm/jwt-auth:dev-develop
            - run with & show command then in this link
                --> php artisan jwt:secret

    4. passport authentication in laravel 9 (Oauth2)
        - https://www.itsolutionstuff.com/post/laravel-9-rest-api-with-passport-authentication-tutorialexample.html
        - https://www.tutsmake.com/laravel-9-rest-api-with-passport-authentication-tutorial/

        Auth::attempt() ( multiple auth guard )


    5. Sanctum authentication (Oauth0)

    #### -----------  JWT ----------- ####
        - https://www.positronx.io/laravel-jwt-authentication-tutorial-user-login-signup-api/
        - composer install change 
            --> composer require tomfordrumm/jwt-auth:dev-develop

## ---------------------------------------- Middleware check two way -----------------------------------------------
    1. auth:api
        $this->middleware('auth:api', ['except' => ['login', 'register']]);
        auth authentication changes in 
            - App\Http\Middleware\Authenticate;
                - changes 
                protected function redirectTo($request)
                {
                    if (! $request->expectsJson()) {
                        // return route('login');
                        abort(response()->json('Unauthorized advertiser', 403));
                    }
                }

    2. guest:api
        $this->middleware('guest:api', ['except' => ['login', 'register']]);
        guest authentication changes in
            - App\Http\Middleware\RedirectIfAuthenticated;
                - changes 
                public function handle(Request $request, Closure $next, ...$guards)
                {
                    $guards = empty($guards) ? [null] : $guards;
                
                    foreach ($guards as $guard) {
                        if (Auth::guard($guard)->check()) {
                            // dd("test");
                            return $next($request);
                            // return redirect(RouteServiceProvider::HOME);
                        }else{ 
                            return response()->json(["status"=> "error",
                                    "result"=> false,
                                    "message"=> "unauthentication"
                                ], 401);
                        }
                    }
                }


## ---------------------------------------- Mail send ------------------------------------- 

    -> https://www.tutsmake.com/laravel-9-send-email-example-tutorial/

    -> with parameter - 
        - App\Mail\ForgotPasswordMail ->
            return new Content(
                view: 'emails.forgot_password',
                with: [
                    'orderName' => 'T-shirt - Clothing', // $this->order->name
                    'orderPrice' => '1000', // $this->order->price
                ],
            );

    -> send mail code :
        - app\Http\Controllers\mailSendController ->
            use App\Mail\ForgotPasswordMail;
            use Mail;
            public function send_mail()
            {
                // send mail
                    try {
                        Mail::to('nital@yopmail.com')->send(new NotifyMail());
                        return $response = array('success' => true, 'message' => "Great! Successfully send in your mail");
                    } catch (Exception $ex) {
                        // Debug via $ex->getMessage();
                        return $response = array('success' => false, 'errors' => $errors);
                    }
                // send mail
            }

    -> data pass in mail blade file :
        - controller file ->
            $data = array(
                    'name' => $name, //user's data
                    'email' => $email,
                    'phone' => $phone,
                    'data' => $data, //other stuffs in the form 
            );

            - without attechment :
                Mail::to($email)->send(new pricequote($data));

            - with attechment, CC, BCC & without mail file :
                - https://www.itsolutionstuff.com/post/how-to-send-email-with-attachment-in-laravelexample.html

                // with attechment
                    $data["email"] = "nital@yopmail.com";
                    $data["title"] = "From LMG Company";
                    $data["body"] = "This is Demo";
                    $data["No"] = "LMG101";
                    $data["Name"] = "Nital Patel";
                    $data["data"] = $isExist;

                    $files = [
                        public_path('attechment_demo/manifest_LS00007_20221115043251.pdf'),
                        public_path('attechment_demo/20220803112553568024431894.jpg'),
                    ];

                    $data["cc"] = [
                        'name1@yopmail.com',
                        'name2@yopmail.com'
                    ];

                    $data["bcc"] = [
                        'name4@yopmail.com',
                        'name5@yopmail.com'
                    ];
            
                    Mail::send('emails.forgot_password', $data, function($message)use($data, $files) {
                        $message->to($data["email"], $data["email"])
                                ->subject($data["title"])
                                ->cc($data["cc"])
                                ->bcc($data["bcc"]);
            
                        foreach ($files as $file){
                            $message->attach($file);
                        }
                        
                    });
                // with attechment

        - Mail file ->
            public function __construct($data) // $data
            {
                $this->data = $data;
            }

            public function content()
            {
                return new Content(
                    view: 'emails.forgot_password',
                    with: [
                        'Name' => 'Nital Patel', // $this->order->name
                        'No' => '101', // $this->order->price
                        'data' => $this->data
                    ],
                );
            }

        - blade file ->
            <p>No : {{$No}}</p>
            <p>Name : {{$Name}}</p>
            <p>Email : {{$data->email}}</p>
            @if(!is_null($data->lmg_seller_id))
                <p>Seller Id : {{$data->lmg_seller_id}}</p>
            @endif

    -> external css link in mail blade file :
        - https://ralphjsmit.com/laravel-emails-tailwind-css
        - https://tailwindcss.com/docs/guides/laravel#mix
        - https://dev.to/sureshramani/how-to-install-tailwind-css-3-in-laravel-9-with-vite-3-4hl1

        1. Using Vite :
            --> Terminal :
                - npm install -D tailwindcss postcss autoprefixer
                - npx tailwindcss init -p
            --> Add root directory -> tailwind.config.js :
                const defaultTheme = require('tailwindcss/defaultTheme');
                const colors = require('tailwindcss/colors')
                
                module.exports = {
                    content: [
                        './resources/views/emails/forgot_password.blade.php',
                    ],
                    theme: {
                        screens: {
                            'xxs': '375px',
                            'xs': '475px',
                            ...defaultTheme.screens,
                        },
                        fontFamily: {
                            'sans': ['"DM Sans"', 'system-ui'],
                            'filament': ['DM Sans', ...defaultTheme.fontFamily.sans],
                            'serif': ['Georgia', 'ui-serif'],
                            'display': ['"PP Eiko"', 'system-ui'],
                            'mono': ["JetBrains Mono", 'monospace']
                        },
                        extend: {
                            colors: {
                                danger: colors.rose,
                                primary: colors.sky,
                                success: colors.lime,
                                warning: colors.yellow,
                            },
                        },
                    },
                    plugins: [
                        require('@tailwindcss/forms'),
                        require('@tailwindcss/typography'),
                    ],
                }
            --> ./resources/css/ -> mail.css :
                @tailwind base;
                @tailwind components;
                @tailwind utilities;
            --> Terminal : npm run dev
            --> ./resources/view/emails -> forgot_password_mail.blade.php

        2. Using Laravel Mix :
            https://gist.github.com/mtvbrianking/a4f24c132f83f2d59828b95c77920147

## ---------------------------------------- Multiple images uploads -------------------------------------------------

    -> images upload of local directory 
        - controller->saveFunction() :
            if($request->hasFile('mobile_images'))
            {
                $allowedfileExtension=['jpeg','jpg','png'];
                $files = $request->file('mobile_images');
                foreach($files as $file){
                    $filename = $file->getClientOriginalName();
                    $extension = $file->getClientOriginalExtension();
                    $check = in_array($extension,$allowedfileExtension);
                    //dd($check);
                    if($check)
                    {
                        foreach ($request->mobile_images as $photo) {
                            $filename = $photo->store('mobile_images');
                            CampaignImages::create([
                                'campaign_id' => $inputs['id'],
                                'image' =>  $filename,
                                'image_type' => 2
                            ]);
                        }
                        dd("Upload Successfully");
                    }
                    else
                    {
                        dd('<div class="alert alert-warning"><strong>Warning!</strong> Sorry Only Upload png , jpg , jpeg</div>');
                    }
                }
            }
        
    -> base64 images upload of local directory
        - controller->saveFunction() :
            if(isset($inputs['web_images']) && $inputs['web_images'] != NULL && $inputs['web_images'] != '' && count($inputs['web_images']) > 0 )
            {
                $upload_path = public_path("campaign_images");
                
                $files = $inputs['web_images'];
                foreach($files as $key => $image_64){
                    // upload base64 image with condition
                        $fileData = $this->base64_image_upload($upload_path, $image_64, 'campaign_img_');
                        // dd($fileData);
                    // upload base64 image with condition
                    if($fileData['result']){
                        // store in db
                            CampaignImages::create([
                                'campaign_id' => $inputs['id'],
                                'image' =>  $fileData['file_name'],
                                'image_type' => 1
                            ]);
                        // store in db
                        // echo "update".$key;
                    }else{
                        return response()->json($fileData);
                    }
                }
            }

            public function check_size($base64string){
                $file_size = 2097152; //8000000
                $size = @getimagesize($base64string);
                if($size['bits'] >= $file_size){
                    return array(
                        "status"=> "fail",
                        "result"=> false,
                        "message"=> "File too large. File must be less than 2 megabytes!"
                    );
                    // print_r(json_encode(array('status' =>false,'message' => 'File too large. File must be less than 2 megabytes!')));exit;
                }
                return true;
            }
            
            public function check_dir($path){
                if (!file_exists($path)) {
                    mkdir($path, 0777, true);
                    return true;
                }
                return true;
            }
            
            public function check_file_type($base64string){
                $mime_type = @mime_content_type($base64string);
                $allowed_file_types = ['image/png', 'image/jpeg', 'application/jpg']; //  'application/pdf'
                if (! in_array($mime_type, $allowed_file_types)) {
                    // File type is NOT allowed
                    return array(
                        "status"=> "fail",
                        "result"=> false,
                        "message"=> "Invalid file type. Only JPG, JPEG and PNG types are accepted."
                    );
                // print_r(json_encode(array('status' =>false,'message' => 'File type is NOT allowed !')));exit;
                }
                return true;
            }

            function is_base64($str){
                // Check if there are valid base64 characters
            // if (!preg_match('/^[a-zA-Z0-9\/\r\n+]*={0,2}$/', $s)) return false;
                // Decode the string in strict mode and check the results
                try
                {
                    $str = preg_replace('#^data:image/\w+;base64,#i', '', preg_replace('/\s+/', '', $str));
                
                    // dd($str);
                    $decoded = base64_decode($str);
            
                    if ( base64_encode($decoded) == $str ) {
                        return true;
                    }
                    else {
                        return false;
                    }
                }
                catch(Exception $e)
                {
                    // If exception is caught, then it is not a base64 encoded string
                    return false;
                }
            }

            public function base64_image_upload($path, $base64string, $pre_image_name){
                if( $this->is_base64($base64string) == true ){  
                    // $base64string = "data:image/jpeg;base64,".$base64string;
                    $this->check_size($base64string);
                    $this->check_dir($path);
                    $this->check_file_type($base64string);
                    
                    /*=================uploads=================*/
                    list($type, $base64string) = explode(';', $base64string);
                    list(,$extension)          = explode('/',$type);
                    list(,$base64string)       = explode(',', $base64string);
                    $fileName                  = uniqid($pre_image_name).'_'.date('Y_m_d').'.'.$extension;
                    $base64string              = base64_decode($base64string);
                    
                    // upload
                        file_put_contents($path.'/'.$fileName, $base64string);
                        // Storage::disk('public')->put($imageName, base64_decode($image));
                    // upload
                    return array(
                        "status"=> "success",
                        "result"=> true,
                        "message"=> "successfully upload !",
                        'file_name'=>$fileName,
                        'with_path'=>$path.'/'.$fileName
                    );
                }else{
                    return array(
                        "status"=> "fail",
                        "result"=> false,
                        "message"=> "This Base64 String not allowed !"
                    );
                }
            }

## ---------------------------------------- Custom Casting [ string to array convertor use like setImageAttribute & getImageAttribute ] ------------------------------------

    - php artisan make:cast Keywords
        - create app/cast/keywords file 
    - app/cast/keywords file :
        - get & set code change
            - public function get($model, string $key, $value, array $attributes)
                {
                    return json_decode($value);
                }
            - public function set($model, string $key, $value, array $attributes)
                {
                    return explode(',', $inputs['keywords']);
                }
    - model add :
        use App/Cast/Keywords;
        protected $casts = [
            // 'keywords' => "array"
            'keywords' => Keywords::class,
        ];


## ---------------------------------------- Laravel error handling -----------------------------------------------

Website site Error Handling :
    - .env :
        APP_DEBUG=true (change) APP_DEBUG=false OR #APP_DEBUG=true
    
Api site Error Handling :
    -   try {
            $all_data = Advertiser::where('status1', 1)->get();
            // $all_data = Advertiser::get();

            if(!is_null($all_data) && count($all_data) > 0){
                return response()->json([
                    "status"=> "success",
                    "result"=> true,
                    "message"=> "Campaign types retrived successfully.",
                    "data" => $all_data
                ]);
            }else{
                return response()->json([
                    "status"=> "fail",
                    "result"=> false,
                    "message"=> "Campaign types retrived not successfully."
                ], 422);
            }
        } catch (Exception $e) {
            // dd($e->getCode());
            return response()->json([
                "status"=> "fail",
                "result"=> false,
                "message"=> "Something went wrong.",
                "laravel_message"=> $e->getMessage(),
            ], 500);
            
        }

    - structure :
        try {
            // add code
            success - error code :- 200 // run 
            error - error code :- 442 // records not found
        } catch (Exception $e) {
            return response()->json([
                "status"=> "fail",
                "result"=> false,
                "message"=> "Something went wrong.",
                // "laravel_message"=> $e->getMessage(),
            ], 500);
        }




