# Laravel API Tutorial — Complete Flow

This tutorial walks through creating a full API endpoint for a "Posts" resource.

### 1. Create model with migration, factory, seeder, and controller
```bash
php artisan make:model Post -mfsc
```
This creates `app/Models/Post.php`, a migration, `database/factories/PostFactory.php`, `database/seeders/PostSeeder.php`, and `app/Http/Controllers/PostController.php`.

### 2. Edit the migration
Define your table columns in `database/migrations/xxxx_create_posts_table.php`:
```php
Schema::create('posts', function (Blueprint $table) {
    $table->id();
    $table->string('title');
    $table->text('body');
    $table->timestamps();
});
```

### 3. Edit the factory
Set dummy data in `database/factories/PostFactory.php`:
```php
'title' => fake()->sentence(),
'body'  => fake()->paragraphs(3, true),
```

### 4. Edit the seeder
Call the factory in `database/seeders/PostSeeder.php`:
```php
\App\Models\Post::factory(20)->create();
```
Then register it in `database/seeders/DatabaseSeeder.php`:
```php
$this->call([PostSeeder::class]);
```

### 4b. Alternative — seed directly with `::create`
Skip the factory and use `Post::create()` in the seeder instead:
```php
use App\Models\Post;

public function run(): void
{
    Post::create(['title' => 'First Post', 'body' => 'Hello world']);
    Post::create(['title' => 'Second Post', 'body' => 'Laravel is great']);
}
```

### 5. Create a form request for validation
```bash
php artisan make:request StorePostRequest
```
Add rules in `app/Http/Requests/StorePostRequest.php`:
```php
public function rules(): array
{
    return [
        'title' => 'required|string|max:255',
        'body'  => 'required|string',
    ];
}
```

### 6. Create an API resource (optional, for response shaping)
```bash
php artisan make:resource PostResource
```
Customize `app/Http/Resources/PostResource.php` to control JSON output.

### 7. Wire up the controller
Edit `PostController` with full CRUD:
```php
use App\Models\Post;
use App\Http\Resources\PostResource;
use App\Http\Requests\StorePostRequest;

public function index()
{
    return PostResource::collection(Post::paginate());
}

public function store(StorePostRequest $request)
{
    $post = Post::create($request->validated());
    return new PostResource($post);
}

public function show(Post $post)
{
    return new PostResource($post);
}

public function update(StorePostRequest $request, Post $post)
{
    $post->update($request->validated());
    return new PostResource($post);
}

public function destroy(Post $post)
{
    $post->delete();
    return response()->noContent();
}
```

### 8. Register routes
In `routes/api.php`:
```php
Route::apiResource('posts', PostController::class);
```
This generates: `GET /posts`, `POST /posts`, `GET /posts/{post}`, `PUT/PATCH /posts/{post}`, `DELETE /posts/{post}`.

### 9. Run migrations and seed
```bash
php artisan migrate:fresh --seed
```

### 10. Verify
```bash
php artisan route:list
```
Start the server (`php artisan serve`) and test the endpoints.
