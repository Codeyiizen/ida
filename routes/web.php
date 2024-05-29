<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// Route::group(['prefix'=>'{local}'], function(){  
//     Route::get('/', function () { 
//         return view('welcome');
//     })->middleware('setLocale');
// });


  Route::get('/', function () {  
    $data = session('data');  
    return view('welcome');
});

Route::get('/route-cache', function () {  
  $exitCode = Artisan::call('config:cache');
  // return what you want
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'home'])->name('home');
Route::get('/contact-us', [App\Http\Controllers\HomeController::class, 'contactUs'])->name('contactus');
Route::get('/disclaimer', [App\Http\Controllers\HomeController::class, 'disclaimer'])->name('disclaimer');
Route::get('/developed', [App\Http\Controllers\HomeController::class, 'developed'])->name('developed');
Route::get('/health-status', [App\Http\Controllers\HomeController::class, 'healthStatus'])->name('health-status');
Route::get('/pub', [App\Http\Controllers\HomeController::class, 'pub'])->name('pub');

//iron-deficiency-anaemia
Route::get('/iron-deficiency-anaemia', [App\Http\Controllers\HomeController::class, 'ironDeficiencyAnaemia'])->name('iron-deficiency-anaemia');
Route::get('/yoga-poses-managing-anaemia', [App\Http\Controllers\HomeController::class, 'yogaPosesManagingAnaemia'])->name('yoga-poses-managing-anaemia');
Route::get('/disease-management-through-diet', [App\Http\Controllers\HomeController::class, 'diseaseManagementThroughDiet'])->name('disease-management-through-diet');
Route::get('know-iron-deficiency-anaemia', [App\Http\Controllers\HomeController::class, 'knowIronDeficiencyAnaemia'])->name('know-iron-deficiency-anaemia');

//causes-anaemia
Route::get('causes-anaemia', [App\Http\Controllers\HomeController::class, 'causesAnaemia'])->name('causes-anaemia');
Route::get('lack-iron-rich-diet', [App\Http\Controllers\HomeController::class, 'lackIronRichDiet'])->name('lack-iron-rich-diet');
Route::get('blood-loss', [App\Http\Controllers\HomeController::class, 'bloodLoss'])->name('blood-loss');
Route::get('pregnancy', [App\Http\Controllers\HomeController::class, 'pregnancy'])->name('pregnancy');
Route::get('disease-treatments', [App\Http\Controllers\HomeController::class, 'diseaseTreatments'])->name('disease-treatments');

//symptoms-anaemia
Route::get('symptoms-anaemia', [App\Http\Controllers\HomeController::class, 'smptomsAnaemia'])->name('symptoms-anaemia');
Route::get('dizziness-tiredness', [App\Http\Controllers\HomeController::class, 'dizzinessTiredness'])->name('dizziness-tiredness');
Route::get('unusual-heartbeat', [App\Http\Controllers\HomeController::class, 'unusualHeartbeat'])->name('unusual-heartbeat');
Route::get('shortness-breath', [App\Http\Controllers\HomeController::class, 'shortnessBreath'])->name('shortness-breath');
Route::get('inability-concentrate', [App\Http\Controllers\HomeController::class, 'inabilityConcentrate'])->name('inability-concentrate');
Route::get('lowered-resistance-infections', [App\Http\Controllers\HomeController::class, 'loweredResistanceInfections'])->name('lowered-resistance-infections');
Route::get('loss-appetite', [App\Http\Controllers\HomeController::class, 'lossAppetite'])->name('loss-appetite');
Route::get('whiteness-inner-portion-eyelid', [App\Http\Controllers\HomeController::class, 'whitenessInnerPortionEyelid'])->name('whiteness-inner-portion-eyelid');
Route::get('brittle-nail', [App\Http\Controllers\HomeController::class, 'brittleNail'])->name('brittle-nail');
Route::get('angular-stomatitis', [App\Http\Controllers\HomeController::class, 'angularStomatitis'])->name('angular-stomatitis');
Route::get('fatigue', [App\Http\Controllers\HomeController::class, 'fatigue'])->name('fatigue');
Route::get('whiteness-nails-palms', [App\Http\Controllers\HomeController::class, 'whitenessNailsPalms'])->name('whiteness-nails-palms');
Route::get('headaches', [App\Http\Controllers\HomeController::class, 'headaches'])->name('headaches');

//prevention-anaemia
Route::get('prevention-anaemia', [App\Http\Controllers\HomeController::class, 'preventionAnaemia'])->name('prevention-anaemia');
Route::get('eat-diet-rich-in-iron', [App\Http\Controllers\HomeController::class, 'eatDietRichIron'])->name('eat-diet-rich-in-iron');
Route::get('increase-your-vitamin-folate-intake', [App\Http\Controllers\HomeController::class, 'increaseYourVitaminFolateIntake'])->name('increase-your-vitamin-folate-intake');
Route::get('cook-using-iron-pots-pans', [App\Http\Controllers\HomeController::class, 'cookUsingIronPotsPans'])->name('cook-using-iron-pots-pans');
Route::get('avoid-drinking-coffee-tea-meals', [App\Http\Controllers\HomeController::class, 'avoidDrinkingCoffeeTeaMeals'])->name('avoid-drinking-coffee-tea-meals');
Route::get('treat-cause-blood-loss', [App\Http\Controllers\HomeController::class, 'treatCauseBloodLoss'])->name('treat-cause-blood-loss');
   

//disease-management-through-diet.blade
Route::get('locally-available-iron-vitamin-rich-food', [App\Http\Controllers\HomeController::class, 'locallyAvailableIronVitaminRichFood'])->name('locally-available-iron-vitamin-rich-food');
Route::get('diet-tips', [App\Http\Controllers\HomeController::class, 'dietTips'])->name('diet-tips');
Route::get('drugs-instruction', [App\Http\Controllers\HomeController::class, 'drugsInstruction'])->name('drugs-instruction');
Route::get('foods-avoid', [App\Http\Controllers\HomeController::class, 'foodsAvoid'])->name('foods-avoid');
Route::get('diet-plan-anaemia-patient', [App\Http\Controllers\HomeController::class, 'dietPlanAnaemiaPatient'])->name('diet-plan-anaemia-patient');
      
//diet-plan-anaemia-patient
Route::get('vegetarians-day1', [App\Http\Controllers\HomeController::class, 'vegetariansDay1'])->name('vegetarians-day1');
Route::get('vegetarians-day2', [App\Http\Controllers\HomeController::class, 'vegetariansDay2'])->name('vegetarians-day2');
Route::get('vegetarians-day3', [App\Http\Controllers\HomeController::class, 'vegetariansDay3'])->name('vegetarians-day3');   
Route::get('vegetarians-day4', [App\Http\Controllers\HomeController::class, 'vegetariansDay3'])->name('vegetarians-day4');  
Route::get('vegetarians-day5', [App\Http\Controllers\HomeController::class, 'vegetariansDay5'])->name('vegetarians-day5'); 
Route::get('vegetarians-day6', [App\Http\Controllers\HomeController::class, 'vegetariansDay6'])->name('vegetarians-day6'); 
Route::get('vegetarians-day7', [App\Http\Controllers\HomeController::class, 'vegetariansDay7'])->name('vegetarians-day7');  

Route::get('non-vegetarians-day1', [App\Http\Controllers\HomeController::class, 'NonVegetariansDay1'])->name('non-vegetarians-day1');
Route::get('non-vegetarians-day2', [App\Http\Controllers\HomeController::class, 'NonVegetariansDay2'])->name('non-vegetarians-day2');
Route::get('non-vegetarians-day3', [App\Http\Controllers\HomeController::class, 'NonVegetariansDay3'])->name('non-vegetarians-day3');   
Route::get('non-vegetarians-day4', [App\Http\Controllers\HomeController::class, 'NonVegetariansDay3'])->name('non-vegetarians-day4');  
Route::get('non-vegetarians-day5', [App\Http\Controllers\HomeController::class, 'NonVegetariansDay5'])->name('non-vegetarians-day5'); 
Route::get('non-vegetarians-day6', [App\Http\Controllers\HomeController::class, 'NonVegetariansDay6'])->name('non-vegetarians-day6'); 
Route::get('non-vegetarians-day7', [App\Http\Controllers\HomeController::class, 'NonVegetariansDay7'])->name('non-vegetarians-day7'); 

//yoga-poses-managing-anaemia
Route::get('pawanmuktasana', [App\Http\Controllers\HomeController::class, 'pawanmuktasana'])->name('pawanmuktasana');
Route::get('sarvangasana', [App\Http\Controllers\HomeController::class, 'sarvangasana'])->name('sarvangasana');
Route::get('surya-namaskar', [App\Http\Controllers\HomeController::class, 'suryaNamaskar'])->name('surya-namaskar');
Route::get('viparita-karani', [App\Http\Controllers\HomeController::class, 'viparitaKarani'])->name('viparita-karani');

Route::get('/getcooke', [App\Http\Controllers\HomeController::class, 'getcookie']);

Route::get('lang/change', [App\Http\Controllers\HomeController::class, 'change'])->name('changeLang');
// Route::get('lang/home', [App\Http\Controllers\HomeController::class, 'index']);

Route::get('index', [App\Http\Controllers\HomeController::class, 'index']);
Route::get('change/lang', [App\Http\Controllers\HomeController::class, 'lang_change'])->name('langChange');


Route::post('save/phone', [App\Http\Controllers\HomeController::class, 'savePhone'])->name('savePhone');
Route::post('calculate/bmi', [App\Http\Controllers\HomeController::class, 'calculateBmi'])->name('calculate-bmi');

