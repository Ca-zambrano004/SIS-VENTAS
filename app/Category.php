<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    public static $mensaje = [
        'nombre.required' => 'Es obligatorio ingresar un nombre de la categoria.',
        'nombre.min' => 'El nombre de la categoria debe contener minimo 4 caracteres.',
        'nombre.unique' => 'El nombre de la categoria ya se encuentra registrado, verifique e intente nuevamente.',
        'descripcion.required' => 'Es obligatorio ingresar la descripcion de la categoria.',
        'descripcion.max' => 'La descripcion corta de la categoria debe contener miximo 250 caracteres.',
    ];

    public static $reglas = [
        'nombre' => 'required|min:4|unique:categories',
        'descripcion' => 'required|max:250',
    ];


    protected $fillable = ['nombre', 'descripcion'];


    public function productos()
    {
        //una categoria tiene varios productos
        return $this->hasMany(Producto::class);
    }


    public function getDestacadaImageUrlAttribute()
    {
        if ($this->imagen)
            return '/imagenes/categorias/' . $this->imagen;

        //else
        $PrimerProducto = $this->productos()->first();
        if ($PrimerProducto)
            return $PrimerProducto->destacada_image_url;

        return '/imagenes/default.jpg';
    }
}
