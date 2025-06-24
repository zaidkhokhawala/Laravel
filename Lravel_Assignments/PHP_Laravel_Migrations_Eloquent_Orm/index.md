## Migration :
Laravel me database ka structure (tables, columns) ko PHP code se banana.
Jab aap migration banate ho, to aap:
Table bana sakte ho
Table me changes kar sakte ho
Kabhi galti ho jaye to "rollback" kar sakte ho

 ## Migration command:
php artisan make:migration create_products_table

## Ye command ek file banayegi: database/migrations/ folder me.
## Us file me aap table ka structure likhoge:

public function up()
{
    Schema::create('products', function (Blueprint $table) {
        $table->id(); // auto increment id
        $table->string('name'); // product name
        $table->integer('price'); // product price
        $table->timestamps(); // created_at & updated_at
    });
}

## Migration run karne ke liye:  
           php artisan migrate
➡ Isse products table database me ban jayega.



### Discuss how Eloquent ORM simplifies database interactions in Laravel

## ✅ 1. Simple aur Readable Code (SQL ki zarurat nahi)
Laravel me Eloquent ORM aapko SQL likhne ki jagah simple PHP code se data insert, fetch, update, delete karne deta hai.

Example:
Product::create(['name' => 'Mango', 'price' => 100]);

# Ye code peeche se automatic ye SQL chalata hai:
INSERT INTO products (name, price) VALUES ('Mango', 100);
➡ Isse code easy hota hai aur beginner ko bhi samajh me aata hai.

## ✅ 2. Object-Oriented Tarike Se Kaam (Model Based)
Eloquent har table ke liye ek model banata hai. Aap database ki row ko ek object ki tarah treat kar sakte ho.

Example:
$product = Product::find(1);
echo $product->name;
➡ Aapko array handle karne ki ya SELECT * FROM likhne ki zarurat nahi padti.

## ✅ 3. Built-in CRUD & Relationships (Bina likhe sab kaam ready)
Eloquent me CRUD (Create, Read, Update, Delete) ke methods already ready hote hain.
Aapko sirf model se kaam lena hota hai. Plus, tables ke beech ke relations (hasOne, belongsTo) banana bhi bahut easy hota hai.

Update Example:
$product->update(['price' => 200]);

Relationship Example:
public function category()
{
    return $this->belongsTo(Category::class);
}
➡ Multiple tables ke data ko connect karna easy ho jata hai.

