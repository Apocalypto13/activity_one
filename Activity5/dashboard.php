use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegistrationController;

Route::resource('dashboard', DashboardController::class);
Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::resource('registration', RegistrationController::class);

<!DOCTYPE html>
<html>
<body>

<h2>Dashboard</h2>
<a href="registration.php">Register</a>
<a href="login.php">Login</a>
<p>Welcome to the dashboard!</p>

</body>
</html>