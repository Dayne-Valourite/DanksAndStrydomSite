@props(['display_name' => 'fix_this_name', 'route_name' => 'home'])

<a 
    href="{{route(strtolower($route_name))}}" 
    class="
    {{ Request::is($display_name) ? 
        'bg-gray-500 text-white' : 
        'text-gray-700 hover:bg-gray-700 hover:text-white' 
    }} 
    rounded-md px-3 py-2 text-sm font-medium" 
    aria-current="page">
    {{ucfirst($display_name)}}
</a>