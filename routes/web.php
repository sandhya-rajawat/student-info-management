    <?php

    use Illuminate\Support\Facades\Route;
    use App\Http\Controllers\TourController;
    use App\Http\Controllers\HomeController;
    use App\Http\Controllers\TimeController;
    use App\Http\Controllers\EventController;
    use App\Http\Controllers\TeacherController;
    use App\Http\Controllers\BlogController;
    use App\Http\Controllers\AuthController;
    use App\Http\Controllers\ProfileController;
    use App\Http\Controllers\PasswordController;
    use App\Http\Controllers\ForgetpasswordController;


    // Auth Routes (Register, Login, OTP, Logout)


    Route::get('signup', [AuthController::class, 'createSignUp'])->name('signup');
    Route::post('signup', [AuthController::class, 'store']);

    Route::get('signin', [AuthController::class, 'createSignIn'])->name('login');
    Route::post('signin', [AuthController::class, 'loginUser']);

    Route::get('/verify-otp', [AuthController::class, 'showOtpForm'])->name('showOtpForm');
    Route::post('/verify-otp', [AuthController::class, 'verifyOtp'])->name('verifyOtp');

    Route::get('signout', [AuthController::class, 'logoutUser']);

    Route::middleware(['auth'])->group(function () {

        Route::get('/tourtext', [TourController::class, 'create']);
        Route::post('/tourtext', [TourController::class, 'store']);

        Route::get('/key-features', [HomeController::class, 'create']);
        Route::post('/key-features', [HomeController::class, 'store']);

        Route::get('/schooltime', [TimeController::class, 'create']);
        Route::post('/schooltime', [TimeController::class, 'store']);

        Route::get('/events', [EventController::class, 'create']);
        Route::post('/events', [EventController::class, 'store']);

        Route::get('/teachers', [TeacherController::class, 'create']);
        Route::post('/teachers', [TeacherController::class, 'store']);

        Route::get('/blog', [BlogController::class, 'create']);
        Route::post('/blog', [BlogController::class, 'store']);

        Route::get('/profile-edit', [ProfileController::class, 'show']);
        Route::put('/profile-edit', [ProfileController::class, 'update']);
        Route::get('/reset-password', [PasswordController::class, 'create']);
        Route::put('/reset-password', [PasswordController::class, 'changePassword']);

    });

    // Public Index Pages
    Route::get('/', [HomeController::class, 'index']);
    Route::get('/school-time', [TimeController::class, 'index']);
    Route::get('/school-events', [EventController::class, 'index']);
    Route::get('school-teachers', [TeacherController::class, 'index']);
    Route::get('school-blog', [BlogController::class, 'index']);

    // User-Profile
// forget

        Route::get('/forget-password',[ForgetpasswordController::class,'create']);