@props(['route', 'activeClass' => 'bg-blue-500 text-white px-3 py-2 rounded-lg shadow-md flex items-center', 'defaultClass' => 'hover:bg-blue-200 px-3 py-2 hover:rounded-lg hover:shadow-md items-center flex'])

<a href={{ route($route) }} {{$attributes->merge(['class' => request()->routeIs($route) ? $activeClass : $defaultClass]) }}>
    {{ $slot }}
</a>