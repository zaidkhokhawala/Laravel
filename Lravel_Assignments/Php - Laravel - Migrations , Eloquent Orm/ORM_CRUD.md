## Laravel Admin CRUD using Eloquent ORM - Step by Step

### 🔷 STEP 1: MCR Command Se Model + Migration + Controller Banao

```bash
php artisan make:model Admin -mcr
```

#### ✅ Is command se 3 files banengi:

| Type       | File Path                                           |
| ---------- | --------------------------------------------------- |
| Model      | app/Models/Admin.php                                |
| Migration  | database/migrations/xxxx\_create\_admins\_table.php |
| Controller | app/Http/Controllers/AdminController.php            |

---

### 🔷 STEP 2: Migration Me Table Ka Structure Define Karo

**File:** `database/migrations/xxxx_create_admins_table.php`

```php
public function up()
{
    Schema::create('admins', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->string('email')->unique();
        $table->string('password');
        $table->timestamps();
    });
}
```

#### ✅ Ab migration run karo:

```bash
php artisan migrate
```

---

### 🔷 STEP 3: Model Me \$fillable Fields Define Karo

**File:** `app/Models/Admin.php`

```php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $fillable = ['name', 'email', 'password'];
}
```

---

### 🔷 STEP 4: Routes Setup Karo

**File:** `routes/web.php`

```php
use App\Http\Controllers\AdminController;

Route::resource('admin', AdminController::class);
```

---

### 🔷 STEP 5: Controller Me CRUD Methods Complete Karo

**File:** `app/Http/Controllers/AdminController.php`

```php
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function index()
    {
        $data = Admin::all();
        return view('admin.index', ['data' => $data]);
    }

    public function create()
    {
        return view('admin.create');
    }

    public function store(Request $request)
    {
        Admin::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        return redirect()->route('admin.index');
    }

    public function edit($id)
    {
        $admin = Admin::find($id);
        return view('admin.edit', compact('admin'));
    }

    public function update(Request $request, $id)
    {
        $admin = Admin::find($id);
        $admin->update([
            'name' => $request->name,
            'email' => $request->email
        ]);

        return redirect()->route('admin.index');
    }

    public function destroy($id)
    {
        Admin::destroy($id);
        return redirect()->route('admin.index');
    }
}
```

---

### 🔷 STEP 6: Blade Files Banao

**Folder:** `resources/views/admin/`

#### 🔹 1. index.blade.php

```blade
<h2>Admin List</h2>
<a href="{{ route('admin.create') }}">Add Admin</a>

<table border="1">
    <tr>
        <th>ID</th><th>Name</th><th>Email</th><th>Actions</th>
    </tr>
    @foreach($data as $admin)
    <tr>
        <td>{{ $admin->id }}</td>
        <td>{{ $admin->name }}</td>
        <td>{{ $admin->email }}</td>
        <td>
            <a href="{{ route('admin.edit', $admin->id) }}">Edit</a> |
            <form action="{{ route('admin.destroy', $admin->id) }}" method="POST" style="display:inline">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
```

#### 🔹 2. create.blade.php

```blade
<h2>Add New Admin</h2>

<form action="{{ route('admin.store') }}" method="POST">
    @csrf
    <input type="text" name="name" placeholder="Name"><br>
    <input type="email" name="email" placeholder="Email"><br>
    <input type="password" name="password" placeholder="Password"><br>
    <button type="submit">Create</button>
</form>
```

#### 🔹 3. edit.blade.php

```blade
<h2>Edit Admin</h2>

<form action="{{ route('admin.update', $admin->id) }}" method="POST">
    @csrf
    @method('PUT')
    <input type="text" name="name" value="{{ $admin->name }}"><br>
    <input type="email" name="email" value="{{ $admin->email }}"><br>
    <button type="submit">Update</button>
</form>
```

---

### 📊 Final Output:

Visit in browser:

```bash
http://localhost:8000/admin

This completes the full Laravel Admin CRUD using Eloquent ORM.
