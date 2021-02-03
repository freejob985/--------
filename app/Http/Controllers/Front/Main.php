<?php
namespace App\Http\Controllers\front;

use App\blog;
use App\blog_sections;
use App\component;
use App\contact;
use App\customers;
use App\Http\Controllers\Controller;
use App\instagram;
use App\opinions;
use App\recent;
use App\section_work;
use App\services;
use App\skills;
use App\slide;
use App\we;
use App\works;
use Illuminate\Support\Facades\Input;
use Symfony\Component\HttpFoundation\Request;

class Main extends Controller
{
    public function index()
    {
        $slide = slide::slide_();
        $customers = customers::customers_();
        $section_work = section_work::section_work_();
        $works = works::works_();
        $blog = blog::blog_();
        $works_home = works::works_home();
        $recent = recent::recent_();
    //    dd($recent);
          $services = services::services_();
        visits("الرئسية");
        $component = component::component__();

        return view('Front.index', compact('slide', 'customers', 'section_work', 'works','services', 'blog', 'works_home', 'recent', 'component'));
    }
    public function About()
    {
        visits("معلومات عنا");
        $component = component::component__();
        $opinions = opinions::opinions_();
        $skills = skills::skills_();
        return view('Front.about', compact('opinions', 'skills', 'component'));
    }
    public function Services()
    {
        visits("الخدمات");
        $services = services::services_();
        $component = component::component__();
        $we = we::we_();
        $skills = skills::skills_();
        $customers = customers::customers_();
        return view('Front.services', compact('component', 'we', 'skills', 'services', 'customers'));
    }
    public function Portfolio()
    {
        visits("الاعمال");
        $works = works::works_();
        $component = component::component__();
        $section_work = section_work::section_work_();
        return view('Front.portfolio', compact('component', 'section_work', 'works'));
    }
    public function Blog()
    {
        visits("المدونة");
        $locale = locale();
        $blog = blog::orderBy('id', 'DESC')->where('Language', locale())->paginate(3);
        $component = component::component__();
        $blog_sections = blog_sections::take(5)->where('Language', $locale)->orderBy('id', 'DESC')->get();
        $instagram = instagram::take(4)->orderBy('id', 'DESC')->get();
        $blog_res = blog::take(5)->orderBy('id', 'DESC')->where('Language', $locale)->get();
        return view('Front.blog', compact('blog', 'component', 'blog_sections', 'instagram', 'blog_res'));
    }
    public function Contact()
    {
        visits("الاتصال ");
        // dd(Session::get('locale'));
        $component = component::component__();
        return view('Front.contact', compact('component'));
    }
    public function Contact_send(Request $request)
    {
        if (contact::contact_send($request) == true) {
            return redirect()->back()->with('alert-success', 'The data was saved successfully');
        }
    }
    public function blog_serch(Request $request)
    {

    }
    public function signel_blog($id)
    {
        $locale = locale();
        $blog = blog::findOrFail($id);
        $component = component::component__();
        $blog_sections = blog_sections::take(5)->where('Language', $locale)->orderBy('id', 'DESC')->get();
        $instagram = instagram::take(4)->orderBy('id', 'DESC')->get();
        $blog_res = blog::take(5)->orderBy('id', 'DESC')->where('Language', $locale)->get();
        return view('Front.sing_blog', compact('blog', 'component', 'blog_sections', 'instagram', 'blog_res'));
    }

}
