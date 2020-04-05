<ul id='category-list'>
    @foreach ($categories as $category)
        <li>
            <a href="#">{{ $category['name'] }}</a>
        </li> 
    @endforeach
</ul>