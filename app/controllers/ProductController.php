<?php

class ProductController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function getIndex()
	{
		$products = Product::orderBy('id','DESC')->get();

		return View::make('products.index')->with('products',$products);
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function getCreate()
	{
		return View::make('products.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$product = new Product;

		$product->articulo = Input::get('articulo');
		$product->categoria = Input::get('categoria');
		$product->id = Input::get('id');
		$product->precio = Input::get('precio');
		$product->impuesto = Input::get('impuesto');
		$product->cantidad = Input::get('cantidad');

		if ($product->save()) {
			Session::flash('message','Guardado correctamente!');
			Session::flash('class','success');
		} else {
			Session::flash('message','Ha ocurrido un error!');
			Session::flash('class','danger');
		}

		return Redirect::to('products/create');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function getShow($id = null)
	{
		$product = Product::find($id);

		return View::make('products.show')->with('product',$product);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function getEdit($id = null)
	{
		$product = Product::find($id);

		return View::make('products.edit')->with('product',$product);
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$product = Product::find($id);

		$product->articulo = Input::get('articulo');
		$product->categoria = Input::get('categoria');
		$product->id = Input::get('id');
		$product->precio = Input::get('precio');
		$product->impuesto = Input::get('impuesto');
		$product->cantidad = Input::get('cantidad');


		if ($product->save()) {
			Session::flash('message','Actualizado correctamente!');
			Session::flash('class','success');
		} else {
			Session::flash('message','Ha ocurrido un error!');
			Session::flash('class','danger');
		}

		return Redirect::to('products/edit/'.$id);
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$product = Product::find($id);

		if ($product->delete()) {
			Session::flash('message','Eliminado correctamente!');
			Session::flash('class','success');
		} else {
			Session::flash('message','Ha ocurrido un error!');
			Session::flash('class','danger');
		}

		return Redirect::to('products');
	}

}