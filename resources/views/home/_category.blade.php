@php
    $parentCategories=\App\Http\Controllers\HomeController::categorylist();

@endphp
<div class="">
    <nav class="navbar bg-light">
        <ul id="myUL">
            @foreach($parentCategories as $rs)
                @if(count($rs->children))
                    <li><a class="nav-link" href="#" onclick="return false;"><i class="fa fa-plus-square"></i>{{$rs->title}}</a>
                @include("home.categoryTree",[
                                'children'=>$rs->children
                            ])
            </li>
                @else
                    <li class="nav-item"><a class="nav-link" href="{{ route("category",['id'=>$rs->id,'slug'=>$rs->slug]) }}"><i class="fa fa-2x"></i>{{$rs->title}}</a></li>
                @endif
            @endforeach

        </ul>
    </nav>
</div>
<style>
    ul, #myUL {
        list-style-type: none;
    }

    #myUL {
        margin: 0;
        padding: 0;
    }

    .nav-link {
        cursor: pointer;
        -webkit-user-select: none; /* Safari 3.1+ */
        -moz-user-select: none; /* Firefox 2+ */
        -ms-user-select: none; /* IE 10+ */
        user-select: none;
    }

    .nav-link::before {
        color: black;
        display: inline-block;
        margin-right: 6px;
    }

    .nav-link-down::before {
        -ms-transform: rotate(90deg); /* IE 9 */
        -webkit-transform: rotate(90deg); /* Safari */'
    transform: rotate(90deg);
    }

    .nested {
        display: none;
    }

    .active {
        display: block;
    }
</style>
<script>
    var toggler = document.getElementsByClassName("nav-link");
    var i;

    for (i = 0; i < toggler.length; i++) {
        toggler[i].addEventListener("click", function() {
            this.parentElement.querySelector(".nested").classList.toggle("active");
            this.classList.toggle("nav-link-down");
        });
    }
</script>