<?php

namespace App\Http\Controllers\Home;

use App\Models\Order;
use App\Models\Course;
use App\Models\Category;
use App\Models\Formateur;
use Illuminate\Support\Facades\URL;
use App\Http\Controllers\Controller;
use App\Models\CourseEssentielle;
use App\Models\Episode as ModelsEpisode;
use App\Models\Formation;
use App\Models\Prestataire;
use App\Models\Specialite;
use App\Models\TCandidat;
use App\Models\TLibelleSpecialite;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    protected $courseService;
    protected $categoryService;
    protected $teacherService;
    public $codeCommande;


    // public function __construct(CourseService $courseService, CategoryService $categoryService, TeacherService $teacherService)
    // {
    //     $this->courseService = $courseService;
    //     $this->categoryService = $categoryService;
    //     $this->teacherService = $teacherService;
    //     $this->codeCommande = rand(1230, 15000) . 'SAS-FORMATION';
    // }

    // public function detailPrestataire($id)
    // {

    //     $prestataire = Prestataire::find($id);
    //     $listeskills = PerfomancePrestataire::where('prestataire_id', $prestataire->id)->get();
    //     $listeprestations = Prestation::where('prestaire_id', $prestataire->id)->get();
    //     return view('home.detailprestataire', compact('prestataire', 'listeskills', 'listeprestations'));
    // }


    public function home()
    {
        return view('welcome', [
            'listeformations' => Formation::all(),
        ]);
    }

    public function profileCandidat()
    {
        return view('Auth.register');
    }


    public function becomeMembre()
    {
        return view('home.becomemembre');
    }


    public function boutiqueFormateur($slug)
    {
        $ec = Formateur::where('slug', $slug)->first();
        $name =  $ec->fullname;
        $image = $ec->avatar;
        $url = URL::current();
        $shareComponent = \Share::page(
            $url
        )
            ->facebook()
            ->twitter()
            ->linkedin()
            ->telegram()
            ->whatsapp()
            ->reddit();
        $query = Course::where('formateur_id', $ec->id)->get();
        return view('home.boutiqueFormateur', compact('query', 'name', 'image', 'shareComponent'));
    }


    /**
     * Display a listing of the resource.
     */
    public function annuaireFormation()
    {
        return view('home.formation-home', [
            'allCourses' => TCandidat::all(),
            'categories' => TLibelleSpecialite::all(),
            'level' => []
        ]);
    }

    public function detailCommande($id)
    {
        $commande  =  Order::find($id);

        return view('profiledashboard.orders.detail', compact('commande'));
    }


    public function courseByCategory($id)
    {
        $course = Course::where('category_id', $id)->get();
        return view('home.categoryFormation', compact('course'));
    }

    public function commande($id)
    {
        if (Auth::check()) {
            $course = Course::find($id);
        } else {
            return redirect()->route('auth.login');
        }
        return view('payment.payement', compact('course'));
    }


    public function detailCourse($id)
    {
        dd('ss');
        $course = Course::where('slug', $id)->first();
        $listeepisode = ModelsEpisode::where('course_id', '=', $course->id)->get();
        $listeensetielle = CourseEssentielle::where('course_id', '=', $course->id)->get();
        return view('home.detailFormation', compact('course', 'listeepisode', 'listeensetielle'));
    }

    public function annuaireFormateur()
    {
        return view('home.formateur', [
            'allFormateurs' => Prestataire::all(),
            'allTags' => Specialite::all()
        ]);
    }

    public function ordersListe()
    {
        $commande = Order::where('user_id', Auth::user()->id)->get();
        return view('profiledashboard.orders.liste', compact('commande'));
    }
}
