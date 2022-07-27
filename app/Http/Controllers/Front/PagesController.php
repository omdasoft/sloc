<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    //return index page
    public function index(){ return view('front.index'); }
    //return about us page
    public function about(){ return view('front.about'); }
    //return slco-goals page
    public function goals(){ return view('front.slco-goals'); }
    //return accreditation Conditions page
    public function accreditationConditions(){ return view('front.accreditation-conditions');}
    //return training center standards
    public function trainingCenterStandards(){ return view('front.training-center-standards');}
    //return exam center standards
    public function examCenterStandards(){ return view('front.exam-center-standards');}
    //return trainer standards
    public function trainerStandards(){ return view('front.trainer-standards');}
    //return training cnt procedures
    public function trainingcntProcedures(){ return view('front.trainingcnt-procedures');}
    //return exam cnt procedures
    public function examcntProcedures(){ return view('front.examcnt-procedures');}
    //return trainers procedures
    public function trainersProcedures(){ return view('front.trainers-procedures');}
    //return skill card procedures
    public function skillcardProcedures(){ return view('front.skillcard-procedures');}
    //return get exam procedures
    public function getexamProcedures(){ return view('front.getexam-procedures');}
    //return faqs page
    public function faqs(){ return view('front.faqs'); }
    //return accredited training centers
    public function accreditedTrainingCenters(){ return view('front.accredited-training-centers'); }
    //return accredited exam centers
    public function accreditedExamCenters(){ return view('front.accredited-exam-centers'); }
    //return accredited exam centers
    public function sitemap(){ return view('front.sitemap'); }
    //return imageshow
    public function imageshow(){ return view('front.imageshow'); }
    //return contact us
    public function contactUs(){ return view('front.contact-us'); }
    //return contact us
    public function videos(){ return view('front.videos'); }
    //return procedures
    public function procedures(){return view('front.procedures');}
    //return fees
    public function fees(){return view('front.fees');}
    //return news
    public function news(){return view('front.news');}
    //return slco centers
    public function slcoCenters(){return view('front.slco-centers');}
    //return legislations
    public function legislations(){return view('front.legislations');}
    //return curricula
    public function curricula(){return view('front.curricula');}
    //return slco students
    public function slcoStudents(){return view('front.slco-students');}
    //return slco business
    public function slcoBusiness(){return view('front.slco-business');}
    //return slco employees
    public function slcoEmployees(){return view('front.slco-employees');}
    //return exam system
    public function examSystem(){return view('front.exam-system');}
    //return intro page
    public function intro(){return view('front.intro');}
    //return operating page
    public function operating(){return view('front.operating');}


    




    



}
