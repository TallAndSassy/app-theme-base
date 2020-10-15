<div class="h-16  flex bg-gray-100">
    <div class="w-13 lg:w-36 xl:w-56 px-2 pt-2 bg-gray-100 md:bg-gray-800">
        <x-tassy::header.back.corner-block/>
    </div>
    <div class="hidden md:block  p-3">
        <x-tassy::header.back.title>{{$title}}</x-tassy::header.back.title>
    </div>
    <x-tassy::header.back.menu/>
</div>

@if (request()->routeIs('admin*') )
    <div class=" md:hidden flex bg-gray-100">
        <div class="spacer w-9 pl-1.5 pt-2 "><x-tassy::hamburger class=""/></div>
        <x-tassy::header.back.title class="pl-3">{{$title}}</x-tassy::header.back.title>
    </div>
@elseif (request()->routeIs('me*') )
    <div class=" md:hidden flex items-center justify-center">
        <x-tassy::header.back.title class="text-center">{{$title}}</x-tassy::header.back.title>
    </div>
@else
@endif


