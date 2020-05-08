<?php

use Illuminate\Database\Seeder;
use App\Producto;
use App\Category;
use App\ProductoImagen;

class ProductoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
     /*factory(Category::class,5)->create();	
     factory(Producto::class,100)->create();
     factory(ProductoImagen::class,150)->create();*/
 


    $categories = factory(Category::class, 2)->create();
    $categories->each(function ($category) {
        $productos= factory(Producto::class, 2)->make();
        $category->productos()->saveMany($productos);
        
        $productos->each(function ($produ) {
            $imagenes = factory(ProductoImagen::class, 1)->make();
            $produ->imagenes()->saveMany($imagenes);

        });
    });

    }
}
