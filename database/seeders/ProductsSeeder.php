<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

     public function run()
     {
         //
         $data = [
             [
                 
                 'code' => '978-84-9872-932-0',
                 'name' => 'Los Juegos del Hambre',
                 'editorial' => 'Molino',
                 'author' => 'Suzanne Collins',
                 'year' => 2012,
                 'category' => 'Acción ,Rebeldía',
                 'image' => 'http://127.0.0.1:8000/api/files/LosJuegosDelHambre.jpg',
                 'stock' => 20,
                 'description' => 'Cuando Katniss Everdeen, una joven de dieciseis años se presenta voluntaria para ocupar el lugar de su hermana en los juegos, lo entiende como una condena a muerte. Sin embargo, Katniss ya ha visto la muerte de cerca y la supervivencia forma parte de su naturaleza.',
                 'price' => '20',
                 'sell_price' => '30',
                 'id_provider' => 2,
                 'rating' => 4
             ],
             [
                 'code' => '978-84-9872-932-0',
                 'name' => 'Hush Hush',
                 'editorial' => 'B de Bolsillo',
                 'author' => 'Becca Fitzpatrick',
                 'year' => 2009,
                 'category' => 'Fantasía romántica',
                 'image' => 'http://127.0.0.1:8000/api/files/HushHush.jpg',
                 'stock' => 30,
                 'description' => 'Un juramento sagrado, un ángel caído, un amor prohibido',
                 'price' => '15',
                 'sell_price' => '21',
                 'id_provider' => 3,
                 'rating' => 4
             ],
             [
                 'code' => '978-84-1755-390-6',
                 'name' => 'Tienes que mirar',
                 'editorial' => 'Impedimenta',
                 'author' => 'Anna Starobinets',
                 'year' => 2021,
                 'category' => 'Drama, Biografia',
                 'image' => 'http://127.0.0.1:8000/api/files/TienesQueMirar.jpg',
                 'stock' => 12,
                 'description' => 'En 2012, Anna Starobinets descubrió, en una visita rutinaria al médico, que el hijo que esperaba tenía un defecto congénito incompatible con la vida. Lo que comienza siendo la crónica de un embarazo malogrado, acaba convirtiéndose en una verdadera historia de terror.',
                 'price' => '15',
                 'sell_price' => '18',
                 'id_provider' => 4,
                 'rating' => 5
             ],
             [
                 
                 'code' => '978-84-9872-934-4',
                 'name' => 'Silencio',
                 'editorial' => 'B de Bolsillo',
                 'author' => 'Becca Fitzpatrick',
                 'year' => 2011,
                 'category' => 'Fantasía romántica',
                 'image' => 'http://127.0.0.1:8000/api/files/Silencio.jpg',
                 'stock' => 50,
                 'description' => 'Patch y Nora han superado los secretos que se escondían en el oscuro pasado de Patch..., han atravesado mundos irreconciliables..., se han enfrentado a pruebas sobrecogedoras de traición, lealtad y confianza..., y todo ello por un amor que trasciende los límites entre el cielo y la tierra. Armados con la fe absoluta que tienen el uno en el otro, Patch y Nora se enfrentan ahora a un villano que pretende acabar de una vez y para siempre con cuanto han luchado por conseguir, incluido su amor.',
                 'price' => '15',
                 'sell_price' => '21',
                 'id_provider' => 1,
                 'rating' => 4
             ],
             [
                 
                 'code' => '978-84-0101-572-4',
                 'name' => 'El Amante Japones',
                 'editorial' => 'Plaza & Janes Editores',
                 'author' => 'Isabel Allende',
                 'year' => 2015,
                 'category' => 'Novela, Ficción',
                 'image' => 'http://127.0.0.1:8000/api/files/ElAmanteJapones.jpeg',
                 'stock' => 12,
                 'description' => 'La historia de amor entre la joven Alma Velasco y el jardinero japones Ichimei conduce al lector por un recorrido a traves de diversos escenarios que van desde la Polonia de la Segunda Guerra Mundial hasta el San Francisco de nuestros días.',
                 'price' => '18',
                 'sell_price' => '23.5',
                 'id_provider' => 4,
                 'rating' => 5
             ],
             [
                 
                 'code' => '978-84-0814-147-1',
                 'name' => 'La Chica del Tren',
                 'editorial' => 'Planeta',
                 'author' => 'Planeta\tPaula Hawkins',
                 'year' => 2015,
                 'category' => 'Suspenso, Misterio',
                 'image' => 'http://127.0.0.1:8000/api/files/LaChicaDelTren.jpg',
                 'stock' => 21,
                 'description' => 'Rachel toma siempre el tren de las 8.04 h. Cada mañana lo mismo : el mismo paisaje, las mismas casas…y la misma parada en la señal roja. Son solo unos segundos, pero le permiten observar a una pareja desayunando tranquilamente en su terraza. Siente que los conoce y se inventa unos nombres para ellos : Jess y Jason. Su vida es perfecta, no como la suya. Pero un día ve algo. Sucede muy deprisa, pero es suficiente. ¿Y si Jess y Jason no son tan felices como ella cree? ¿Y si nada es lo que parece?',
                 'price' => '18',
                 'sell_price' => '25.99',
                 'id_provider' => 3,
                 'rating' => 4
             ],
             [
                 'code' => '978-84-1107-070-6',
                 'name' => 'La memoria del alambre',
                 'editorial' => 'Tusquets Editores',
                 'author' => 'Bárbara Blasco',
                 'year' => 2022,
                 'category' => 'Ficción',
                 'image' => 'http://127.0.0.1:8000/api/files/MemoriaDeAlambre.jpg',
                 'stock' => 10,
                 'description' => 'Dos chicas adolescentes viven al límite en la Valencia de los últimos años ochenta, justo antes de que la música mákina y las drogas sintéticas arrasen con todo.  ',
                 'price' => '13',
                 'sell_price' => '15',
                 'id_provider' => 2,
                 'rating' => 3
             ],
             [
                 'code' => '978-84-1878-213-8',
                 'name' => 'Notas de Suicidio',
                 'editorial' => 'La Uña Rota',
                 'author' => 'Marc Caellas',
                 'year' => 2022,
                 'category' => 'Novela, Poesía',
                 'image' => 'http://127.0.0.1:8000/api/files/NotasDeSuicidio.jpg',
                 'stock' => 24,
                 'description' => 'Este libro inclasificable no es solo un sumario razonado de notas y cartas escritas por suicidas. Es también una aproximación al pulso que late bajo la decisión extrema de quitarse la vida. Porque ninguna nota redactada antes de un suicidio consumado se escribe en balde.',
                 'price' => '20',
                 'sell_price' => '28.99',
                 'id_provider' => 1,
                 'rating' => 5
             ],
             [
                 'code' => '978-84-1821-754-8',
                 'name' => 'La Apelacion',
                 'editorial' => 'Atico de los libros',
                 'author' => 'Janice Hallett',
                 'year' => 2022,
                 'category' => 'Misterio, Ficción',
                 'image' => 'http://127.0.0.1:8000/api/files/LaApelacion.jpg',
                 'stock' => 14,
                 'description' => 'Un asesinato. Quince sospechosos. ¿Puedes descubrir la verdad? En el idílico pueblecito inglés de Lockwood hay un misterio que resolver. Todo empieza con el regreso de dos habitantes del pueblo después de un largo viaje y acaba con una trágica muerte. Aunque se ha enviado a prisión al presunto culpable, el abogado Roderick Tanner sospecha que es inocente y ordena a sus pasantes, Charlotte y Femi, que revisen todas las pruebas del caso.',
                 'price' => '21',
                 'sell_price' => '31',
                 'id_provider' => 4,
                 'rating' => 4
             ],
             [
                 'code' => '978-84-9320-041-1',
                 'name' => 'El Mundo Al Reves',
                 'editorial' => 'Media Vaca',
                 'author' => 'Miguel Calatayud',
                 'year' => 2001,
                 'category' => 'Cuento',
                 'image' => 'http://127.0.0.1:8000/api/files/MundoDelReves.jpg',
                 'stock' => 20,
                 'description' => 'Vivimos en un mundo al revés, no hace falta ser muy listo para darse cuenta de eso. En lugar de trabajar para vivir, que sería lo justo, vivimos para el trabajo; y en lugar de salir al mundo a descubrir de nuevo las cataratas de Iguazú -bonita excursión- esperamos que las cataratas vengan hasta nosotros a través del televisor. Encontraríamos muchos más ejemplos.',
                 'price' => '40',
                 'sell_price' => '45',
                 'id_provider' => 3,
                 'rating' => 5
             ],
             [
                 'code' => '978-84-1952-183-5',
                 'name' => 'En tren con el asesino',
                 'editorial' => 'Duomo Editorial',
                 'author' => 'Alexandra Benedict',
                 'year' => 2023,
                 'category' => 'Misterio',
                 'image' => 'http://127.0.0.1:8000/api/files/EnTrenConElAsesino.JPG',
                 'stock' => 9,
                 'description' => 'En las primeras horas de la víspera de Navidad, el tren nocturno de Londres a las Highlands escocesas descaírrila, y con él, los planes festivos de sus viajeros. Atrapaídos por la nieve en medio de la nada, los pasajeros solo se tienen los unos a los otros, y no todos llegarán a sus celebraciones navideñas. Mientras un asesino intenta acabar con los pasajeros uno a uno, la exdetective Roz Parker no puede resistirse a una última investigación.',
                 'price' => '12',
                 'sell_price' => '19.5',
                 'id_provider' => 1,
                 'rating' => 4
             ],
             [
                 'code' => '978-84-1879-871-9',
                 'name' => 'Fleur. Mi desesperada desición',
                 'editorial' => 'Montena',
                 'author' => 'Ariana Godoy',
                 'year' => 2022,
                 'category' => 'Misterio, Ficción',
                 'image' => 'http://127.0.0.1:8000/api/files/Fleuir.MiDesesperadaDesicion.jpg',
                 'stock' => 50,
                 'description' => 'Una noche es suficiente para que la vida de una persona cambie y se destruya. Despues de sobrevivir al brutal asesinato de su familia, Fleur Dupont decide dedicarse en cuerpo y alma a intentar resolver el puzle que hay en su cabeza. ¿Quien fue capaz de asesinar a sangre fría a sus padres y a su hermana? ¿Por que no recuerda nada? Y, sobre todo, ¿por que solo ella sobrevivió a la matanza familiar?',
                 'price' => '30',
                 'sell_price' => '43.2',
                 'id_provider' => 3,
                 'rating' => 5
             ]
         ];
         DB::table('products')->insert($data); 
     }

    
}
