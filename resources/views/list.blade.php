@extends('layout.layout')

@section ('content')
    <div id="container">
        <section id="content">
            @for ($i = 0; $i < 5; $i++)
                <div class='post'></div>
            @endfor
        </section>

        <aside>
            @include ('partials.category_list')
        </aside>
    </div>
@endsection