<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\ChippingCharge;
use App\Models\Product;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $categories = Category::latest('id')->limit(5)->select(['id', 'title', 'category_image'])->get();
        $products = Product::with('category')
            ->latest('id')
            ->select(['id', 'product_name', 'product_image', 'product_slug', 'product_price', 'product_rating', 'category_id'])
            ->paginate(10);
        $sProducts = Product::latest('id')->limit(4)->select(['id', 'product_name', 'product_short_description'])->get();
        $featured_products = Product::where('is_featured', 1)
            ->with('category')
            ->select(['id', 'product_slug', 'product_rating', 'product_image', 'product_name', 'product_price', 'category_id'])
            ->orderBy('product_rating', 'DESC')
            ->limit(4)
            ->get();
        // dd($categories, $featured_products);
        return view('frondend.pages.home', compact('categories', 'featured_products'));
        // return view('frondend.layouts.master');
    }

    public function shopPage()
    {
        $categories = Category::where('is_active', 1)
            ->with('products')
            ->latest('id')
            ->limit(5)
            ->select(['id', 'title', 'slug'])
            ->get();
        //return $categories;

        $allproducts = Product::where('is_active', 1)
            ->with('category')
            ->latest('id')
            ->select(['id', 'product_name', 'product_slug', 'product_image', 'product_price', 'product_rating', 'category_id'])
            ->paginate(12);

        //return $categories;
        //return $allproducts;
        return view('frondend.pages.shop', compact('categories', 'allproducts'));
    }

    public function productDetails($product_slug)
    {

        $product = Product::where('product_slug', $product_slug)
            ->with('category', 'productImages')
            ->first();


        $relatedProducts = Product::whereNot('product_slug', $product_slug)
            ->limit(4)
            ->select(['id', 'product_name', 'product_slug', 'product_price', 'product_rating', 'product_image'])
            ->get();
        //return $relatedProducts;
        $shipping_charge = ChippingCharge::first();

        //return $product;
        // dd($shipping_charge);
        return view('frondend.pages.single-product', compact('product', 'relatedProducts', 'shipping_charge'));
    }

    public function categoryProducts(Request $request, $id = 0)
    {
        // dd($slug);
        // $allproducts = Product::where('is_active', 1)
        //     ->with('category')
        //     ->latest('id')
        //     ->select(['id', 'product_name', 'product_slug', 'product_image', 'product_price', 'product_rating', 'category_id'])
        //     ->paginate(12);

        $slug = Category::where('id', $id)->first();
        $slug = $slug->slug ?? $request->search;

        $allproducts = Product::when($id, function($query) use ($id) {
                    $query->where('category_id', $id);
                })
                ->when($categoryId = $request->category_id, function($query) use ($categoryId) {
                    $query->where('category_id', $categoryId);
                })
                ->when($search = $request->search, function($query) use ($search) {
                    $query->where('product_name', 'like', '%'. $search .'%');
                })
                ->get();

        return view('frondend.pages.category-products', compact('allproducts', 'slug'));
    }
    public function allFeaturedProducts($slug)
    {
        // dd($slug);
        // $allproducts = Product::where('is_active', 1)
        //     ->with('category')
        //     ->latest('id')
        //     ->select(['id', 'product_name', 'product_slug', 'product_image', 'product_price', 'product_rating', 'category_id'])
        //     ->paginate(12);

        $allfeaturedproducts = Product::where('is_featured', 1)->get();
        // dd($allproducts);

        return view('frondend.pages.all-featured-products', compact('allfeaturedproducts'));
    }

    public function search(Request $request)
    {
        dd($request->all());
        $searchTerm = $request->input('q');
        $products = Product::where('name', 'LIKE', "%$searchTerm%")->get();
        dd($products);
    }

    public function allSearch(Request $request)
    {
        print_r("<pre>");
        print_r($request->all());die();
        // return view()
    }
}
