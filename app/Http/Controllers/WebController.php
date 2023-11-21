<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\products;

class WebController extends Controller{
    public function index(){
        return view("PruebaUsuario");
    }
    public function store(Request $request)
    {
        $user = new User();

        $user->username = $request->input('username');
        $user->email = $request->input('email');
        $user->password = $request->input('password');
        $user->name = $request->input('name');
        $user->age = $request->input('age');
        $user->gender = true;
        $user->photo = $request->input('photo');
        $user->country = $request->input('country');
        $user->address = $request->input('address');
        $user->send_address = $request->input('send_address');
        $user->refer_code = "A";
        $user->role = 0;

        $user->save();

    // return response()->json($info);


}

//mostrar usuarios
public function getAllUsersInfo()
{
    $users = User::all();

    if ($users->isEmpty()) {
        return response()->json(['error' => 'No hay usuarios disponibles'], 404);
    }

    return response()->json($users, 200);
}





public function saveProduct(Request $request)
    {

        $request->validate([
            'code' => 'required|string',
            'name' => 'required|string',
            'category' => 'required|string',
            'image' => 'required|string',
            'stock' => 'required|integer',
            'price' => 'required|numeric',
            'sell_price' => 'required|numeric',
            'thumbnail' => 'required|string',
            'id_provider' => 'required|exists:providers,id',
        ]);

        $imageUrl = $request->input('image');
        $thumbnailUrl = $request->input('thumbnail');

        $product = products::create([
            'code' => $request->input('code'),
            'name' => $request->input('name'),
            'category' => $request->input('category'),
            'image' => $imageUrl,
            'stock' => $request->input('stock'),
            'price' => $request->input('price'),
            'sell_price' => $request->input('sell_price'),
            'thumbnail' => $thumbnailUrl,
            'id_provider' => $request->input('id_provider'),
        ]);

        return response()->json($product, 200);
    }

//eliminar



public function countries()
{

    $paises = [
        ["nombre" => "Afganistán"],
        ["nombre" => "Albania"],
        ["nombre" => "Alemania"],
        ["nombre" => "Andorra"],
        ["nombre" => "Angola"],
        ["nombre" => "Antigua y Barbuda"],
        ["nombre" => "Arabia Saudita"],
        ["nombre" => "Argelia"],
        ["nombre" => "Argentina"],
        ["nombre" => "Armenia"],
        ["nombre" => "Australia"],
        ["nombre" => "Austria"],
        ["nombre" => "Azerbaiyán"],
        ["nombre" => "Bahamas"],
        ["nombre" => "Bahréin"],
        ["nombre" => "Bangladés"],
        ["nombre" => "Barbados"],
        ["nombre" => "Bélgica"],
        ["nombre" => "Belice"],
        ["nombre" => "Benín"],
        ["nombre" => "Bielorrusia"],
        ["nombre" => "Birmania (Myanmar)"],
        ["nombre" => "Bolivia"],
        ["nombre" => "Bosnia y Herzegovina"],
        ["nombre" => "Botsuana"],
        ["nombre" => "Brasil"],
        ["nombre" => "Brunéi"],
        ["nombre" => "Bulgaria"],
        ["nombre" => "Burkina Faso"],
        ["nombre" => "Burundi"],
        ["nombre" => "Bután"],
        ["nombre" => "Cabo Verde"],
        ["nombre" => "Camboya"],
        ["nombre" => "Camerún"],
        ["nombre" => "Canadá"],
        ["nombre" => "Catar"],
        ["nombre" => "Chad"],
        ["nombre" => "Chile"],
        ["nombre" => "China"],
        ["nombre" => "Chipre"],
        ["nombre" => "Colombia"],
        ["nombre" => "Comoras"],
        ["nombre" => "Corea del Norte"],
        ["nombre" => "Corea del Sur"],
        ["nombre" => "Costa de Marfil"],
        ["nombre" => "Costa Rica"],
        ["nombre" => "Croacia"],
        ["nombre" => "Cuba"],
        ["nombre" => "Dinamarca"],
        ["nombre" => "Dominica"],
        ["nombre" => "Ecuador"],
        ["nombre" => "Egipto"],
        ["nombre" => "El Salvador"],
        ["nombre" => "Emiratos Árabes Unidos"],
        ["nombre" => "Eritrea"],
        ["nombre" => "Eslovaquia"],
        ["nombre" => "Eslovenia"],
        ["nombre" => "España"],
        ["nombre" => "Estados Unidos"],
        ["nombre" => "Estonia"],
        ["nombre" => "Etiopía"],
        ["nombre" => "Filipinas"],
        ["nombre" => "Finlandia"],
        ["nombre" => "Fiyi"],
        ["nombre" => "Francia"],
        ["nombre" => "Gabón"],
        ["nombre" => "Gambia"],
        ["nombre" => "Georgia"],
        ["nombre" => "Ghana"],
        ["nombre" => "Granada"],
        ["nombre" => "Grecia"],
        ["nombre" => "Guatemala"],
        ["nombre" => "Guinea"],
        ["nombre" => "Guinea-Bisáu"],
        ["nombre" => "Guinea Ecuatorial"],
        ["nombre" => "Guyana"],
        ["nombre" => "Haití"],
        ["nombre" => "Honduras"],
        ["nombre" => "Hungría"],
        ["nombre" => "India"],
        ["nombre" => "Indonesia"],
        ["nombre" => "Irak"],
        ["nombre" => "Irán"],
        ["nombre" => "Irlanda"],
        ["nombre" => "Islandia"],
        ["nombre" => "Islas Marshall"],
        ["nombre" => "Islas Salomón"],
        ["nombre" => "Israel"],
        ["nombre" => "Italia"],
        ["nombre" => "Jamaica"],
        ["nombre" => "Japón"],
        ["nombre" => "Jordania"],
        ["nombre" => "Kazajistán"],
        ["nombre" => "Kenia"],
        ["nombre" => "Kirguistán"],
        ["nombre" => "Kiribati"],
        ["nombre" => "Kuwait"],
        ["nombre" => "Laos"],
        ["nombre" => "Lesoto"],
        ["nombre" => "Letonia"],
        ["nombre" => "Líbano"],
        ["nombre" => "Liberia"],
        ["nombre" => "Libia"],
        ["nombre" => "Liechtenstein"],
        ["nombre" => "Lituania"],
        ["nombre" => "Luxemburgo"],
        ["nombre" => "Macedonia del Norte"],
        ["nombre" => "Madagascar"],
        ["nombre" => "Malasia"],
        ["nombre" => "Malaui"],
        ["nombre" => "Maldivas"],
        ["nombre" => "Malí"],
        ["nombre" => "Malta"],
        ["nombre" => "Marruecos"],
        ["nombre" => "Mauricio"],
        ["nombre" => "Mauritania"],
        ["nombre" => "México"],
        ["nombre" => "Micronesia"],
        ["nombre" => "Moldavia"],
        ["nombre" => "Mónaco"],
        ["nombre" => "Mongolia"],
        ["nombre" => "Montenegro"],
        ["nombre" => "Mozambique"],
        ["nombre" => "Namibia"],
        ["nombre" => "Nauru"],
        ["nombre" => "Nepal"],
        ["nombre" => "Nicaragua"],
        ["nombre" => "Níger"],
        ["nombre" => "Nigeria"],
        ["nombre" => "Noruega"],
        ["nombre" => "Nueva Zelanda"],
        ["nombre" => "Omán"],
        ["nombre" => "Países Bajos"],
        ["nombre" => "Pakistán"],
        ["nombre" => "Palaos"],
        ["nombre" => "Panamá"],
        ["nombre" => "Papúa Nueva Guinea"],
        ["nombre" => "Paraguay"],
        ["nombre" => "Perú"],
        ["nombre" => "Polonia"],
        ["nombre" => "Portugal"],
        ["nombre" => "Reino Unido"],
        ["nombre" => "República Centroafricana"],
        ["nombre" => "República Checa"],
        ["nombre" => "República Democrática del Congo"],
        ["nombre" => "República Dominicana"],
        ["nombre" => "Ruanda"],
        ["nombre" => "Rumanía"],
        ["nombre" => "Rusia"],
        ["nombre" => "Samoa"],
        ["nombre" => "San Cristóbal y Nieves"],
        ["nombre" => "San Marino"],
        ["nombre" => "San Vicente y las Granadinas"],
        ["nombre" => "Santa Lucía"],
        ["nombre" => "Santo Tomé y Príncipe"],
        ["nombre" => "Senegal"],
        ["nombre" => "Serbia"],
        ["nombre" => "Seychelles"],
        ["nombre" => "Sierra Leona"],
        ["nombre" => "Singapur"],
        ["nombre" => "Siria"],
        ["nombre" => "Somalia"],
        ["nombre" => "Sri Lanka"],
        ["nombre" => "Suazilandia"],
        ["nombre" => "Sudáfrica"],
        ["nombre" => "Sudán"]
    ];

    return response()->json($paises, 200);
}


}




