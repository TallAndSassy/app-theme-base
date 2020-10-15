<div class="
            tassy::page-guide-components-header-corner-block

            ">

<img class='w-5  -mt-6 inline-block mr-0 ' id='theBottomSchoolChaseLogo' src='{{asset('/img/logos/applogolod.png')}}'>
<div class="inline-block">
    @php
    if (request()->routeIs('admin*') ) {
        $textColor = 'text-gray-200';
    } elseif (request()->routeIs('me*') ) {
        $textColor = 'text-gray-800';
    } else {
    }
    @endphp

<span class="no-underline dim font-bold text-90  {{$textColor}} pl-2 block">SubSite</span>
<span class="no-underline dim text-90  text-sm {{$textColor}} pl-2">by Overloard </span>
</div>


</div>
