<div
    {{ $attributes->merge([
    'class' => 'tassy::page-guide-components-header-corner-block(app-theme-base) ']
    )}}
    >

<img class='w-5  -mt-4 inline-block mr-0 ' id='theBottomSchoolChaseLogo' src='{{asset('/img/logos/applogolod.png')}}'>
<div class="inline-block leading-4">
    @php
    if (request()->routeIs('admin*') ) {
        $textColor = 'text-gray-200';
    } else {
        $textColor = 'text-gray-800';
    }
    @endphp

<span class="no-underline dim font-bold text-90  {{$textColor}} pl-1  block">SubSite</span>
<span class="no-underline dim text-90  text-sm {{$textColor}} pl-1">by Overlord </span>
</div>


</div>
