@php
    use App\Models\Category;
    $categories = Category::get();
@endphp
<div class="search-area">
    <form action="{{  route('home.search') }}" method="GET">
        @csrf
        <div class="control-group">
            <div class="categories-filter animate-dropdown">
                <select name="category_id" id="" class="form-control" style="border:none; margin-left:10px;">
                    <option value="">Select</option>
                    @foreach ($categories as $category)
                        <option
                        value="{{ $category->id }}"
                        {{ request()->category_id ==  $category->id ? 'selected' : ''}}>{{ $category->title }}</option>
                    @endforeach
                </select>
            </div>
            {{-- <ul class="categories-filter animate-dropdown">
                <li class="dropdown"> <a class="dropdown-toggle" data-toggle="dropdown" href="category.html">Categories <b
                            class="caret"></b></a>
                    <ul class="dropdown-menu" role="menu">

                        <li role="presentation">
                            <a role="menuitem" tabindex="-1" href="category.html">- Clothing</a>
                        </li> 
                        

                            @foreach ($categories as $category)
                                <li value="{{ $category->id }}" style="padding: 5px;">
                                    <a href="#"> {{ $category->title }} </a>
                                </li>
                            @endforeach


                    </ul>
                </li>
            </ul> --}}
                <input class="search-field" placeholder="Search here..." name="search" value="{{ request()->search }}">
                <button class="search-button" type="submit" ></button>
        </div>
    </form>
</div>
