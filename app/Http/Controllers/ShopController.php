<?php

namespace App\Http\Controllers;

use App\Classes\BaseResponse\BaseResponse;
use App\Enums\ShopStatusEnum;
use App\Http\Requests\StoreShop;
use App\Http\Resources\ShopResource;
use App\Models\Shop;
use App\Models\User;
use Faker\Provider\Base;
use Illuminate\Http\Request;
use Spatie\QueryBuilder\QueryBuilder;

class ShopController extends Controller
{

//    public function shop(User $user, Request $request){
//
//
//        return BaseResponse::make(Shop::create([
//            'user_id' => auth()->id(),
//            'name' => $request->get('name'),
//            'address' => $request->get('address'),
//            'photo' => $request->get('photo'),
//        ]));
//    }

    public function index()
    {
        return ShopResource::collection(
            QueryBuilder::for(Shop::class)
                ->with(['owner'])
                ->allowedSorts(['name'])
                ->allowedFilters(['name'])
                ->cursorPaginate(10)
        );
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


    public function store(StoreShop $request)
    {
        BaseResponse::make(Shop::create($request->validated() + [
//                'user_id' => auth()->id()
                'user_id' => '9484bccd86fe4e2e8bfaac6a818e66e6',
                'shop_status' => ShopStatusEnum::getValue('Closed')
            ]));
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
