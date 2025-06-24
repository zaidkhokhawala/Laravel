

## 📌 1. What is Laravel?

**Laravel** ek open-source PHP framework hai jo mainly **web applications** banane ke liye use hota hai. Iska design **MVC (Model-View-Controller)** architecture ke basis par kiya gaya hai, jisse code maintain karna aur structure banaye rakhna easy hota hai.

Laravel ko **Taylor Otwell** ne 2011 me banaya tha, jiska aim tha PHP development ko modern aur developer-friendly banana.

Laravel ke through aap easily:
- Secure login system
- Database se connected CRUD applications
- REST APIs
- Admin panels
- Complex web portals  
bana sakte ho bina zyada code likhe.

---

## 📖 2. History and Versioning of Laravel

Laravel ka pehla version **Laravel 1** tha, jo 2011 me launch hua. Tab se le kar har saal Laravel ka ek naya major version release hota hai, jisme naye features, better performance aur updated security hoti hai.

### 🔢 Laravel Major Versions Overview

| Version    | Release Year | Highlights                           |
|------------|--------------|--------------------------------------|
| Laravel 1  | 2011         | Basic routing, authentication        |
| Laravel 2  | 2011         | Controller support add hua           |
| Laravel 3  | 2012         | Artisan CLI, Migrations, Bundles     |
| Laravel 4  | 2013         | Composer, full rewrite               |
| Laravel 5  | 2015         | Middleware, Form Requests, Jobs      |
| Laravel 6  | 2019         | Semantic versioning, UI separation   |
| Laravel 7  | 2020         | HTTP client, Blade components        |
| Laravel 8  | 2020         | Jetstream, Model Factory Classes     |
| Laravel 9  | 2022         | Symfony 6, PHP 8 features            |
| Laravel 10 | 2023         | Bug fixes, clean code structure      |
| Laravel 11 | 2024         | Simplified directory, optimized perf |

Laravel ab **semantic versioning** follow karta hai. Har saal February/March me naya major version release hota hai.

---

## 🌟 3. Key Features of Laravel

Laravel me bahut saare aise features hain jo use modern banate hain. Kuch important features niche diye gaye hain:

### ✅ 1. MVC Architecture
Application ko 3 layers me divide karta hai: **Model (Data), View (UI), Controller (Logic)** – jisse code clean aur reusable rehta hai.

### ⚙️ 2. Artisan Command Line
Laravel ka CLI tool – **Artisan** – jiske through aap migration, controller creation, testing etc. kar sakte ho.

### 💾 3. Eloquent ORM
Laravel ka ORM jisme database queries ko object-oriented PHP syntax se likhte hain.

### 🧠 4. Blade Templating Engine
Laravel ka apna fast aur clean templating engine – **Blade** – HTML + PHP code ko handle karta hai.

### 🔐 5. Built-in Authentication & Authorization
Login, register, password reset features by default available hote hain.

### 🧪 6. Testing Support
Laravel me unit aur feature testing ke tools inbuilt hote hain.

### 📬 7. Routing System
Laravel ka routing simple aur readable hai – ek line me route define kar sakte ho.

### 📦 8. Composer Integration
Laravel **Composer** use karta hai – jisse external PHP packages easily install ho jaate hain.

---

## ⚔️ 4. Laravel vs Other PHP Frameworks

Laravel ko compare kiya gaya hai CodeIgniter aur Symfony ke sath:

| Feature            | Laravel            | CodeIgniter       | Symfony          |
|--------------------|--------------------|-------------------|------------------|
| Architecture       | MVC                | MVC               | MVC              |
| Templating Engine  | Blade              | PHP Views         | Twig             |
| ORM                | Eloquent ORM       | No built-in ORM   | Doctrine ORM     |
| CLI Tool           | Artisan CLI        | Basic             | Symfony Console  |
| Learning Curve     | Moderate & Clean   | Easy but outdated | Complex          |
| Authentication     | Built-in           | Manual Setup      | Requires Bundle  |

Laravel beginners aur advanced developers dono ke liye best hai.

---

## ✅ 5. Conclusion

Laravel ne PHP development ko modern aur powerful banaya hai. Iski clean architecture, tools aur active community ki wajah se ye aaj ke time ka **most popular PHP framework** hai.

Laravel seekhna ek smart career move hai agar aap web development me future banana chahte ho, especially as a **PHP developer**.

---

> 📌 _Prepared by: Your Name_  
> 📅 _Date: 31 May 2025_

# Laravel MVC Architecture – 

---

## MVC Architecture kya hota hai?

MVC ka full form hai **Model-View-Controller**. Ye ek design pattern hai jise use karke hum web applications ko 3 alag-alag parts me tod dete hain:

1. **Model** – Data aur business logic ka kaam karta hai  
2. **View** – User interface, yani jo user ko dikhai deta hai  
3. **Controller** – Model aur View ke beech mediator hota hai, user ke input ko handle karta hai aur sahi response deta hai

---

### MVC ka fayda kya hai?

- Code organized rehta hai  
- Development fast aur easy hota hai  
- Alag-alag developers alag parts pe kaam kar sakte hain  
- Maintenance aur debugging asaan hota hai  

---

## Laravel me MVC kaise implement hota hai?

### 1. Model (Data Layer)

- Model database se data fetch karta hai, save karta hai, update karta hai.  
- Laravel me har Model ek PHP class hoti hai jo **Eloquent ORM** use karti hai.  
- Example: Agar aapko students ka data store karna hai, to ek `Student` model banayenge jo `students` table se data lega ya usme data dalega.

```php
// app/Models/Student.php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Student extends Model {
    protected $table = 'students';
    protected $fillable = ['name', 'roll_number', 'marks'];
}
2. View (Presentation Layer)
View wo file hoti hai jo user ko dikhai deti hai, jaise HTML pages.

Laravel me Views Blade templating engine se bante hain, jisme hum PHP aur HTML easily mix kar sakte hain.

Example: Student list dikhane ke liye ek view file students.blade.php hogi jisme data user ko dikhaya jayega.

blade
Copy
Edit
<!-- resources/views/students.blade.php -->
<h1>Students List</h1>
@foreach($students as $student)
    <p>{{ $student->name }} - Roll No: {{ $student->roll_number }}</p>
@endforeach
3. Controller (Logic Layer)
Controller user ke request leta hai, models se data fetch karta hai aur us data ko views ko bhejta hai.

Laravel me controllers app/Http/Controllers folder me hote hain.

Example: StudentController banayenge jo students ke data ko manage karega.

php

// app/Http/Controllers/StudentController.php
namespace App\Http\Controllers;
use App\Models\Student;

class StudentController extends Controller {
    public function index() {
        $students = Student::all();  // Model se data le lo
        return view('students', ['students' => $students]);  // View ko data bhejo
    }
}
Example Flow (Request-Response):
User browser me example.com/students URL open karta hai.

Laravel routing system ye request StudentController@index method ko bhejta hai.

Controller Student model se saare students ka data fetch karta hai.

Controller students.blade.php view ko ye data pass karta hai.

View user ko saare students ke naam aur roll number dikhata hai.


