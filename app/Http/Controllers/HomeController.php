<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('Home');
    }

    public function nouscontacter()
    {
        return view('nous-contacter');
    }

    public function apropos()
    {
        return view('a-propos');
    }

    public function gallery()
    {
        return view('gallery');
    }

    public function nosproduits()
    {
        return view('nos-produits');
    }

    public function login()
    {
        return view('/auth/login');
    }

    public function register()
    {
        return view('/auth/register');
    }
    public function dashboard()
    {
        return view('dashboard');
    }
    public function singleproduct(){
        $url = request('url');
        return view('single-product');
    }
    public function singleproductU(Request $request){
        $url = request('url');
        return view('single-product',['url' => \request('url')]);
    }

    public function profile(){
        return view('/profile/edit');
    }

    public function ajouter(){
        return view('/ajouter');
    }

    public function ajoutPost(Request $request) {
        $request->validate(
            [
                "nom"=>['required'],
                "marque"=>['required'],
                "description"=>['required'],
                "prix"=>['required'],
                "quantite"=>['required']
            ]);
        $path = $request->file('img')->store('images');
        Car::create([
            "nom"=>$request->nom,
            "marque"=>$request->marque,
            "photo"=>$path,
            "description"=>$request->description,
            "prixLocation"=>$request->prix,
            "quantiteDispo"=>$request->quantite
        ]);
        return redirect()->back()->with('statut', 'Voiture ajoutée!');
        // dd($request->all());
    }

    public function read() {
        $lists = Car::all();
        return view('admin.read', ['lists'=>$lists]);
    }

    public function update($id) {
        $car = Car::findOrFail($id);
        return view('admin.update', ['car'=>$car]);
    }

    public function updatePost($id, Request $request) {
        $request->validate(
            [
                "nom"=>['required'],
                "marque"=>['required'],
                "description"=>['required'],
                "prix"=>['required'],
                "quantite"=>['required']
            ]);
        $path = $request->file('img')->store('images');

        Car::where('id', $id)->update([
            "nom"=>$request->nom,
            "marque"=>$request->marque,
            "photo"=>$path,
            "description"=>$request->description,
            "prixLocation"=>$request->prix,
            "quantiteDispo"=>$request->quantite
        ]);
        return redirect()->back()->with('statut', 'Modification effectué!');
    }

    public function delete($id) {
        Car::where('id', $id)->delete();
        return redirect()->back()->with('statut', 'Suppression effectué!');
    }

    public function detail($id) {
        $theCar = Car::findOrFail($id);
        return view('frontend.detail', ['car'=> $theCar]);
    }

    public function detailPost($id, Request $request) {
        $request->validate([
            "debut"=>['required'],
            "fin"=>['required'],
        ]);
        Location::create([
            "dateLocation"=>$request->debut,
            "dateFinLocation"=>$request->fin,
            "restorer"=>0,
            /*"user_id"=>$request,
            "car_id"=>$request,*/
        ]);
        return redirect()->back()->with('statut', 'Votre demande a été approuvée');
    }

    public function offers() {
        $allCars = Car::all();
        return view('frontend.offers', ['allCars' => $allCars]);
    }
}
