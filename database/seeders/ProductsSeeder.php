<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    

    public function run()
    {
       

        \App\Models\products::create([
           
         



            'code' => '978-84-9872-934-4',
            'name' => 'Silencio',
            'editorial' => 'B de Bolsillo',
            'author' => 'Becca Fitzpatrick',
            'year' => 2011,
            'category' => 'Fantasía romántica',
            'image' => '', 
            'stock' => 50,
            'description' => 'Patch y Nora han superado los secretos que se escondían en el oscuro pasado de Patch..., han atravesado mundos irreconciliables..., se han enfrentado a pruebas sobrecogedoras de traición, lealtad y confianza..., y todo ello por un amor que trasciende los límites entre el cielo y la tierra. Armados con la fe absoluta que tienen el uno en el otro, Patch y Nora se enfrentan ahora a un villano que pretende acabar de una vez y para siempre con cuanto han luchado por conseguir, incluido su amor.',
            'price' => 15.00,
            'sell_price' => 21.00,
            'id_provider' => '1'


        ],[
            'code' => '978-84-9872-932-0',
            'name' => 'Hush Hush',
            'editorial' => 'B de Bolsillo',
            'author' => 'Becca Fitzpatrick',
            'year' => 2009,
            'category' => 'Fantasía romántica',
            'image' => '', 
            'stock' => 30,
            'description' => 'Un juramento sagrado, un ángel caído, un amor prohibido.',
            'price' => 15.00,
            'sell_price' => 21.00,
            'id_provider' => '2'



        ],
        [
            'code' => '978-84-2720-212-2',
            'name' => 'Los Juegos del Hambre',
            'editorial' => 'Molino',
            'author' => 'Suzanne Collins',
            'year' => 2012,
            'category' => 'Accion, Rebeldía',
            'image' => '', 
            'stock' => 20,
            'description' => 'Cuando Katniss Everdeen, una joven de dieciséis años, se presenta voluntaria para ocupar el lugar de su hermana en los juegos, lo entiende como una condena a muerte. Sin embargo, Katniss ya ha visto la muerte de cerca y la supervivencia forma parte de su naturaleza.',
            'price' => 20.00,
            'sell_price' => 30.00,
            'id_provider' => '3'
        ],
        [
            'code' => '978-84-1755-390-6',
            'name' => 'Tienes que mirar',
            'editorial' => 'Impedimenta',
            'author' => 'Anna Starobinets',
            'year' => 2021,
            'category' => 'Drama, Biografia',
            'image' => '', 
            'stock' => 12,
            'description' => 'En 2012, Anna Starobinets descubrió, en una visita rutinaria al médico, que el hijo que esperaba tenía un defecto congénito incompatible con la vida. Lo que comienza siendo la crónica de un embarazo malogrado, acaba convirtiéndose en una verdadera historia de terror.',
            'price' => 15.00,
            'sell_price' => 18.00,
            'id_provider' => '4'
        ],
    
        [
            'code' => '978-84-0101-572-4',
            'name' => 'El Amante Japones',
            'editorial' => 'Plaza & Janes Editores',
            'author' => 'Isabel Allende',
            'year' => 2015,
            'category' => 'Novela, Ficción',
            'image' => '', 
            'stock' => 12,
            'description' => 'La historia de amor entre la joven Alma Velasco y el jardinero japonés Ichimei conduce al lector por un recorrido a través de diversos escenarios que van desde la Polonia de la Segunda Guerra Mundial hasta el San Francisco de nuestros días.',
            'price' => 18.00,
            'sell_price' => 23.50,
            'id_provider' => '5'
        ],
        [
            'code' => '978-84-0814-147-1',
            'name' => 'La Chica del Tren',
            'editorial' => 'Planeta',
            'author' => 'Paula Hawkins',
            'year' => 2015,
            'category' => 'Suspenso, Misterio',
            'image' => '', 
            'stock' => 21,
            'description' => 'Rachel toma siempre el tren de las 8.04 h. Cada mañana lo mismo: el mismo paisaje, las mismas casas… y la misma parada en la señal roja. Son solo unos segundos, pero le permiten observar a una pareja desayunando tranquilamente en su terraza. Siente que los conoce y se inventa unos nombres para ellos: Jess y Jason. Su vida es perfecta, no como la suya. Pero un día ve algo. Sucede muy deprisa, pero es suficiente. ¿Y si Jess y Jason no son tan felices como ella cree? ¿Y si nada es lo que parece?',
            'price' => 18.00,
            'sell_price' => 25.99,
            'id_provider' => '6'
        ],
        [
            'code' => '978-84-1107-070-6',
            'name' => 'La memoria del alambre',
            'editorial' => 'Tusquets Editores',
            'author' => 'Bárbara Blasco',
            'year' => 2022,
            'category' => 'Ficción',
            'image' => '', 
            'stock' => 10,
            'description' => 'Dos chicas adolescentes viven al límite en la Valencia de los últimos años ochenta, justo antes de que la música mákina y las drogas sintéticas arrasen con todo.',
            'price' => 13.00,
            'sell_price' => 15.00,
            'id_provider' => '7'
        ],
        [
            'code' => '978-84-1878-213-8',
            'name' => 'Notas de Suicidio',
            'editorial' => 'La Uña Rota',
            'author' => 'Marc Caellas',
            'year' => 2022,
            'category' => 'Novela, Poesía',
            'image' => '', 
            'stock' => 24,
            'description' => 'Este libro inclasificable no es solo un sumario razonado de notas y cartas escritas por suicidas. Es también una aproximación al pulso que late bajo la decisión extrema de quitarse la vida. Porque ninguna nota redactada antes de un suicidio consumado se escribe en balde.',
            'price' => 20.00,
            'sell_price' => 28.99,
            'id_provider' => '8'
        ],
        

    );
    }
}
