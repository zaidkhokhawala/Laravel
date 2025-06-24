    # Routing in Laravel –

    ---

    ## Routing kya hota hai Laravel me?

    Routing Laravel ka wo system hai jo user ke **URL requests** ko **application ke specific code (controller ya closure)** se connect karta hai. Matlab jab koi user website pe koi URL type karta hai, to routing decide karta hai ki us URL pe kaunsa code chalega aur kya response milega.

    ---

    ## Laravel me Routing kaise kaam karta hai?

    - Laravel me routes `routes/web.php` file me define hote hain.  
    - Har route ek URL pattern hota hai, jiske saath ek function ya controller method link hota hai.  
    - Jab user URL open karta hai, Laravel us URL ko routes ke list me check karta hai.  
    - Jo matching route milta hai, wo usse connected code ko execute karta hai aur user ko response deta hai.  

    ### Example:

    ```php
    Route::get('/home', function () {
        return view('welcome');
    });
    Yeh route jab user /home URL open karega tab welcome view show karega.

    Named Routes kya hote hain?
    Named routes ko hum ek unique naam dete hain taaki hum us route ko easily refer kar saken, chahe URL change ho jaye. Ye bahut useful hota hai jab aapko URL hardcode na karna ho aur future me route URL badal bhi jaye to code break na ho.

    Example of Named Route:
    php
    Copy
    Edit
    Route::get('/user/profile', [UserController::class, 'show'])->name('profile');
    Ab hum URL ke bajaye is route ko is naam se refer kar sakte hain:

    php
  
    $url = route('profile');
    Isse hume /user/profile URL milega bina usse manually type kiye.

    Route Parameters kya hote hain?
    Route parameters dynamic data ko URL me pass karne ka tarika hai. Matlab agar aapko URL me variable part chahiye, jaise user ka ID, to aap route parameters use karte ho.

    Example of Route with parameter:
    php

    Route::get('/user/{id}', function ($id) {
        return "User ID is " . $id;
    });
    Agar user /user/5 URL visit karega, to output hoga: User ID is 5.

    Route Parameters ke types:
    Required parameters: Jo hamesha URL me hona zaroori hai.
    Example: /user/{id}

    Optional parameters: Jo URL me ho bhi sakte hain aur na bhi ho. Iske liye ? lagate hain.
    Example: /user/{name?}

    php

    Route::get('/user/{name?}', function ($name = 'Guest') {
        return "Hello " . $name;
    });
    Agar name nahi diya, to default "Guest" show karega.




