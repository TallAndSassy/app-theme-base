<x-tassy::page-_base>
    <div class="tassy::page-guide.components.page-me">
    <x-tassy::header.back.index title="{{$title}}"/>
    <div class="p-10 bg-gray-100">{{$slot}}</div>

    <x-tassy::footer.back.index/>
    </div>
</x-tassy::page-_base>
