<div>
    <div class="h-16  flex bg-gray-100">
        @if (request()->routeIs('admin*') )
            <div class="w-13 lg:w-36 xl:w-56 px-2 pt-2 bg-gray-100 md:bg-gray-900">
                <x-tassy::header.back.corner-block/>
            </div>
            <div class="hidden md:block  p-3">
                <x-tassy::header.back.title>{{$title}}</x-tassy::header.back.title>
            </div>
        @else
             <div class="w-13 lg:w-36 xl:w-56 px-2 pt-2 bg-gray-100 md:bg-gray-100">
                <x-tassy::header.back.corner-block/>
            </div>
        @endif
        <x-tassy::header.back.menu/>
    </div>

    @if (request()->routeIs('admin*') )

    @else
        <div class=" flex items-center justify-center bg-gray-100">
            <x-tassy::header.back.title class="text-center">{{$title}}</x-tassy::header.back.title>
        </div>
    @endif
</div>


