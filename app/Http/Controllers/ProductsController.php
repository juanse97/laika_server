<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = '[{
            "id":1,
            "img":"https://laikapp.s3.amazonaws.com/images_products/1_3305_COLLAR_MENTA_LAIKA_PERRO_1280X960.jpg",
            "name":"Collar Menta Laika Perro ** Entrega en 2 Días Hábiles **",
            "price_now":"10.620",
            "price_old":"9.676",
            "price_suscription":"9.676",
            "sizes": ["S","M","L"]
        },
        {
            "id":2,
            "img":"https://laikapp.s3.amazonaws.com/images_products/2_4457_COLLAR_ROSADO_LAIKA_PERRO_471X341.jpg",
            "name":"Collar Rosado Laika Perro ** Entrega en 2 Días Hábiles **",
            "price_now":"10.620",
            "price_old":"11.800",
            "price_suscription":"9.676",
            "sizes": ["S","M","L"]
        },
        {
            "id":4,
            "img":"https://laikapp.s3.amazonaws.com/dev_images_products/16121_121961_ZeeDog____Cama_Bed_Najima_1639064378_300x300.jpg",
            "name":"ZeeDog - Cama Para Perros Bed Najima.",
            "price_now":"291.600",
            "price_old":"324.000",
            "price_suscription":"265.680",
            "sizes": ["SMALL"]
        },
        {
            "id":5,
            "img":"https://s3.us-east-1.amazonaws.com/laikapp/images_products/10ea470d75cbb51a8bb86b925b53d885.jpg",
            "name":"Hills Canine Treats Chicken",
            "price_now":"16.800",
            "price_old":0,
            "price_suscription":"14.280",
            "sizes": ["85 GR"]
        }]';
        return $products;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
