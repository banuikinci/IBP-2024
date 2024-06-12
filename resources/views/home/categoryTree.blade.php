<ul class="nested">
    @foreach($children as $subcategory)
        @if(count($subcategory->children))
            <li><a class="nav-link" href="#" onclick="return false;"><i class="fa fa-plus-square"></i>{{ $subcategory->title }}</a>
            @include("home.categoryTree",[
                                    'children'=>$subcategory->children
                                ])
            </li>
        @else
            <li class="nav-item"><a class="nav-link" href="{{ route("category",['id'=>$subcategory->id,'slug'=>$subcategory->slug]) }}">{{ $subcategory->title }}</a></li>
        @endif
    @endforeach

</ul>