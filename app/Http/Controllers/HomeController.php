<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cookie;
use App;
use App\Models\phones;

class HomeController extends Controller
{
    public function home(){
        return view('dashboard');
    }

    public function contactUs(){
        return view('contact-us');
    }

    public function disclaimer(){
        return view('disclaimer');
    }

    public function developed(){
        return view('developed');
    }

    public function healthStatus(){
        return view('health-status');
    }

    public function pub(){ 
        return view('pub.welcome');
    }

    public function ironDeficiencyAnaemia(){
        return view('iron-deficiency-anaemia');
    }
    
    public function yogaPosesManagingAnaemia(){
        return view('yoga-poses-managing-anaemia');
    }

    public function diseaseManagementThroughDiet(){
        return view('disease-management-through-diet');
    }
        
    public function knowIronDeficiencyAnaemia(){
        return view('iron-deficiency-anaemia.know-iron-deficiency-anaemia');
    }

    //causes-anaemia
    public function causesAnaemia(){
        return view('iron-deficiency-anaemia.causes-anaemia');
    }
    
    public function lackIronRichDiet(){
        return view('iron-deficiency-anaemia.lack-iron-rich-diet');
    }

    public function bloodLoss(){
        return view('iron-deficiency-anaemia.blood-loss');
    }

    public function pregnancy(){
        return view('iron-deficiency-anaemia.pregnancy');
    }

    public function diseaseTreatments(){
        return view('iron-deficiency-anaemia.disease-treatments');
    }
     
    
//symptoms-anaemia
public function smptomsAnaemia(){
    return view('iron-deficiency-anaemia.symptoms-anaemia');
}

public function dizzinessTiredness(){
    return view('iron-deficiency-anaemia.dizziness-tiredness');
}

public function unusualHeartbeat(){
    return view('iron-deficiency-anaemia.unusual-heartbeat');
}

public function shortnessBreath(){
    return view('iron-deficiency-anaemia.shortness-breath');
}

public function inabilityConcentrate(){
    return view('iron-deficiency-anaemia.inability-concentrate');
}

public function loweredResistanceInfections(){
    return view('iron-deficiency-anaemia.lowered-resistance-infections');
}

public function losAppetite(){
    return view('iron-deficiency-anaemia.loss-appetite');
}     

public function whitenessInnerPortionEyelid(){
    return view('iron-deficiency-anaemia.whiteness-inner-portion-eyelid');
}                    
                       
public function brittleNail(){
    return view('iron-deficiency-anaemia.brittle-nail');
}  

public function angularStomatitis(){
    return view('iron-deficiency-anaemia.angular-stomatitis');
} 

public function fatigue(){
    return view('iron-deficiency-anaemia.fatigue');
} 

public function whitenessNailsPalms(){
    return view('iron-deficiency-anaemia.whiteness-nails-palms');
}  

public function headaches(){
    return view('iron-deficiency-anaemia.headaches');
}  
//prevention-anaemia
public function preventionAnaemia(){
    return view('iron-deficiency-anaemia.prevention-anaemia');
}  

public function eatDietRichIron(){
    return view('iron-deficiency-anaemia.eat-diet-rich-in-iron');
}

public function increaseYourVitaminFolateIntake(){
    return view('iron-deficiency-anaemia.increase-your-vitamin-folate-intake');
}

public function cookUsingIronPotsPans(){
    return view('iron-deficiency-anaemia.cook-using-iron-pots-pans');
}

public function avoidDrinkingCoffeeTeaMeals(){
    return view('iron-deficiency-anaemia.avoid-drinking-coffee-tea-meals');
}
  
public function treatCauseBloodLoss(){
    return view('iron-deficiency-anaemia.treat-cause-blood-loss');
}

//disease-management-through-diet.blade
public function locallyAvailableIronVitaminRichFood(){
    return view('disease-management-through-diet.locally-available-iron-vitamin-rich-food');
}

public function dietTips(){
    return view('disease-management-through-diet.diet-tips');
}

public function drugsInstruction(){
    return view('disease-management-through-diet.drugs-instruction');
}

public function foodsAvoid(){
    return view('disease-management-through-diet.foods-avoid');
}

public function dietPlanAnaemiaPatient(){
    return view('disease-management-through-diet.diet-plan-anaemia-patient');
}
     
//diet-plan-anaemia-patient
public function vegetariansDay1(){
    return view('disease-management-through-diet.vegetarians-day1');
}

public function vegetariansDay2(){
    return view('disease-management-through-diet.vegetarians-day2');
}

public function vegetariansDay3(){
    return view('disease-management-through-diet.vegetarians-day3');
}

public function vegetariansDay4(){
    return view('disease-management-through-diet.vegetarians-day4');
}

public function vegetariansDay5(){
    return view('disease-management-through-diet.vegetarians-day5');
}

public function vegetariansDay6(){
    return view('disease-management-through-diet.vegetarians-day6');
}

public function vegetariansDay7(){
    return view('disease-management-through-diet.vegetarians-day7');
}

public function NonVegetariansDay1(){
    return view('disease-management-through-diet.non-vegetarians-day1');
}

public function NonVegetariansDay2(){
    return view('disease-management-through-diet.non-vegetarians-day2');
}

public function NonVegetariansDay3(){
    return view('disease-management-through-diet.non-vegetarians-day3');
}

public function NonVegetariansDay4(){
    return view('disease-management-through-diet.non-vegetarians-day4');
}

public function NonVegetariansDay5(){
    return view('disease-management-through-diet.non-vegetarians-day5');
}

public function NonVegetariansDay6(){
    return view('disease-management-through-diet.non-vegetarians-day6');
}

public function NonVegetariansDay7(){
    return view('disease-management-through-diet.non-vegetarians-day7');
}

//yoga-poses-managing-anaemia
public function pawanmuktasana(){
    return view('yoga-poses-managing-anaemia.pawanmuktasana');
}

public function sarvangasana(){
    return view('yoga-poses-managing-anaemia.sarvangasana');
}

public function suryaNamaskar(){
    return view('yoga-poses-managing-anaemia.surya-namaskar');
}

public function viparitaKarani(){
    return view('yoga-poses-managing-anaemia.viparita-karani');
}

    


    public function lang_change(Request $request)
    {
        App::setLocale($request->lang);
        session()->put('locale', $request->lang);  
        return redirect()->back();
    }

  public function savePhone(Request $request){ 
    $request->validate([
        'mobile' => 'required|required',
    ]);

    $phone = new phones;
    $phone->phone = $request->mobile;
    $phone->save();
    return redirect()->route('health-status');

  }

}