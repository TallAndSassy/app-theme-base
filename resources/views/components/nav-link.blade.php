
{{--    <x-jet-nav-link href="{{$href}}" :active="$isRouteZO">--}}
{{--        {{$name}}--}}
{{--    </x-jet-nav-link>--}}
{{--     @props(['active'])--}}
@php
$isBack = (request()->routeIs('user*') || request()->routeIs('me*') || request()->routeIs('admin*') || request()->routeIs('teams*'));
if ($isBack) {
    $bgColor =  "bg-gray-100";
} else {
    $bgColor =  "bg-gray-50";
}

$classes = ($isActive ?? false)
            ? $bgColor.'  inline-flex items-center px-2 pt-1 border-b-2 border-indigo-400 font-medium leading-5 text-gray-900 focus:outline-none focus:border-indigo-700 transition duration-150 ease-in-out'
            : $bgColor.' inline-flex items-center px-2 pt-1 border-b-2 border-transparent  font-medium leading-5 text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
   {{$pretty}}
</a>

