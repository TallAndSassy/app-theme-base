<x-tassy::page-_base>
   <style>
        /* Nicer Drop-Down --BEGIN- */


        /* Make detail reveals go smoother
        https://codepen.io/morewry/pen/gbJvy
        */
        details[open] .jDetails_body {
            animation-name: invisiblyGrowFontSize, fadeIn;
            animation-duration: 500ms, 200ms;
            animation-delay: 0ms, 300ms;
        }

        /* add wrapper, continue with font-size */
        @keyframes invisiblyGrowFontSize {
            0% {
                /*font-size: 0;*/
                max-height: 0px;
                opacity: 0;
            }
            100% {
                /*font-size: 1em;*/
                max-height: 999px;
                opacity: 0;
            }
        }

        @keyframes fadeIn {
            0% {
                opacity: 0;
            }
            100% {
                opacity: 1;
            }
        }



        /* Fancy right-side discloser */
        details[open] .jDetails_summary_discloser {
            transform: scale(-1, 1)  rotate(-90deg);
            /*transform: ;*/
            transition: transform 500ms ease-in-out;
            /*animation-duration: 500ms, 200ms;*/
            /*animation-delay: 0ms, 300ms;*/
          /*  transform: scale(-1, 1);*/
          /*color: #1c87c9;*/
          /*-moz-transform: scale(-1, 1);*/
          /*-webkit-transform: scale(-1, 1);*/
          /*-o-transform: scale(-1, 1);*/
          /*-ms-transform: scale(-1, 1);*/
          /*transform: scale(-1, 1);*/
        }
        details .jDetails_summary_discloser {
            /*transform: scale(-1, 1)  rotate(-90deg);*/
            /*transform: ;*/
            transition: transform 300ms ease-in-out;
            /*animation-duration: 500ms, 200ms;*/
            /*animation-delay: 0ms, 300ms;*/
          /*  transform: scale(-1, 1);*/
          /*color: #1c87c9;*/
          /*-moz-transform: scale(-1, 1);*/
          /*-webkit-transform: scale(-1, 1);*/
          /*-o-transform: scale(-1, 1);*/
          /*-ms-transform: scale(-1, 1);*/
          /*transform: scale(-1, 1);*/
        }

        /* Left This puts reveal on far right... in Tall2 5/30/20', we're only
        playing for 'right' reveals so this is net relevant yet */
        /*https://stackoverflow.com/questions/56758098/how-to-position-detail-marker-to-come-after-summary */
        details.jDetailsFarRight {
            min-width: -webkit-fit-content;
            min-width: -moz-fit-content;
            min-width: fit-content;
        }

        .jDetailsFarRight summary {
            position: relative;
            min-width: -webkit-fit-content;
            min-width: -moz-fit-content;
            min-width: fit-content;
            cursor: pointer;
        }

        details.jDetailsFarRight summary::-webkit-details-marker {
            position: absolute;
            right: 0;
            top: 30%;
            z-index: 1;
        }

        /* Nicer Drop-Down --BEGIN- */

    </style>
    <div class="h-screen flex overflow-hidden bg-gray-100" x-data="{ open: false }">
        <!-- Off-canvas menu for mobile, show/hide based on off-canvas menu state. -->
        <div class="md:hidden" x-show="open"
             @click.away="open = false">
            <div class="fixed inset-0 flex z-40">
                <!--
                  Off-canvas menu overlay, show/hide based on off-canvas menu state.

                  Entering: "transition-opacity ease-linear duration-300"
                    From: "opacity-0"
                    To: "opacity-100"
                  Leaving: "transition-opacity ease-linear duration-300"
                    From: "opacity-100"
                    To: "opacity-0"
                -->
                <div @click="open = false" class="fixed inset-0">
                    <div class="absolute inset-0 bg-gray-600 opacity-75"></div>
                </div>
                <!--
                  Off-canvas menu, show/hide based on off-canvas menu state.

                  Entering: "transition ease-in-out duration-300 transform"
                    From: "-translate-x-full"
                    To: "translate-x-0"
                  Leaving: "transition ease-in-out duration-300 transform"
                    From: "translate-x-0"
                    To: "-translate-x-full"
                -->
                <div @click="open = false" class="relative flex-1 flex flex-col max-w-xs w-full bg-gray-800">
                    <div class="absolute top-0 right-0 -mr-14 p-1">
                        <button
                            class="flex items-center justify-center h-12 w-12 rounded-full focus:outline-none focus:bg-gray-600"
                            aria-label="Close sidebar">
                            <svg class="h-6 w-6 text-white" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M6 18L18 6M6 6l12 12"/>
                            </svg>
                        </button>
                    </div>
                    <div class="flex-1 h-0 pt-3 pb-4 overflow-y-auto">
                           <x-tassy::header.back.corner-block-inner class="pl-4"/>
{{--                        <div class="flex-shrink-0 flex items-center px-4">--}}
{{--                            <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/workflow-logo-on-dark.svg"--}}
{{--                                 alt="Workflow">--}}
{{--                        </div>--}}
{{--                        <nav class="mt-5 px-2 space-y-1">--}}
{{--                            <a href="#"--}}
{{--                               class="group flex items-center px-2 py-2 text-base leading-6 font-medium rounded-md text-white bg-gray-900 focus:outline-none focus:bg-gray-700 transition ease-in-out duration-150">--}}
{{--                                <!-- Heroicon name: home -->--}}
{{--                                <svg--}}
{{--                                    class="mr-4 h-6 w-6 text-gray-300 group-hover:text-gray-300 group-focus:text-gray-300 transition ease-in-out duration-150"--}}
{{--                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"--}}
{{--                                    stroke="currentColor">--}}
{{--                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"--}}
{{--                                          d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"/>--}}
{{--                                </svg>--}}
{{--                                Dashboard--}}
{{--                            </a>--}}

{{--                            <a href="#"--}}
{{--                               class="group flex items-center px-2 py-2 text-base leading-6 font-medium rounded-md text-gray-300 hover:text-white hover:bg-gray-700 focus:outline-none focus:text-white focus:bg-gray-700 transition ease-in-out duration-150">--}}
{{--                                <!-- Heroicon name: users -->--}}
{{--                                <svg--}}
{{--                                    class="mr-4 h-6 w-6 text-gray-400 group-hover:text-gray-300 group-focus:text-gray-300 transition ease-in-out duration-150"--}}
{{--                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"--}}
{{--                                    stroke="currentColor">--}}
{{--                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"--}}
{{--                                          d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"/>--}}
{{--                                </svg>--}}
{{--                                Team--}}
{{--                            </a>--}}

{{--                            <a href="#"--}}
{{--                               class="group flex items-center px-2 py-2 text-base leading-6 font-medium rounded-md text-gray-300 hover:text-white hover:bg-gray-700 focus:outline-none focus:text-white focus:bg-gray-700 transition ease-in-out duration-150">--}}
{{--                                <!-- Heroicon name: folder -->--}}
{{--                                <svg--}}
{{--                                    class="mr-4 h-6 w-6 text-gray-400 group-hover:text-gray-300 group-focus:text-gray-300 transition ease-in-out duration-150"--}}
{{--                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"--}}
{{--                                    stroke="currentColor">--}}
{{--                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"--}}
{{--                                          d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z"/>--}}
{{--                                </svg>--}}
{{--                                Projects--}}
{{--                            </a>--}}

{{--                            <a href="#"--}}
{{--                               class="group flex items-center px-2 py-2 text-base leading-6 font-medium rounded-md text-gray-300 hover:text-white hover:bg-gray-700 focus:outline-none focus:text-white focus:bg-gray-700 transition ease-in-out duration-150">--}}
{{--                                <!-- Heroicon name: calendar -->--}}
{{--                                <svg--}}
{{--                                    class="mr-4 h-6 w-6 text-gray-400 group-hover:text-gray-300 group-focus:text-gray-300 transition ease-in-out duration-150"--}}
{{--                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"--}}
{{--                                    stroke="currentColor">--}}
{{--                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"--}}
{{--                                          d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>--}}
{{--                                </svg>--}}
{{--                                Calendar--}}
{{--                            </a>--}}

{{--                            <a href="#"--}}
{{--                               class="group flex items-center px-2 py-2 text-base leading-6 font-medium rounded-md text-gray-300 hover:text-white hover:bg-gray-700 focus:outline-none focus:text-white focus:bg-gray-700 transition ease-in-out duration-150">--}}
{{--                                <!-- Heroicon name: inbox -->--}}
{{--                                <svg--}}
{{--                                    class="mr-4 h-6 w-6 text-gray-400 group-hover:text-gray-300 group-focus:text-gray-300 transition ease-in-out duration-150"--}}
{{--                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"--}}
{{--                                    stroke="currentColor">--}}
{{--                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"--}}
{{--                                          d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"/>--}}
{{--                                </svg>--}}
{{--                                Documents--}}
{{--                            </a>--}}

{{--                            <a href="#"--}}
{{--                               class="group flex items-center px-2 py-2 text-base leading-6 font-medium rounded-md text-gray-300 hover:text-white hover:bg-gray-700 focus:outline-none focus:text-white focus:bg-gray-700 transition ease-in-out duration-150">--}}
{{--                                <!-- Heroicon name: chart-bar -->--}}
{{--                                <svg--}}
{{--                                    class="mr-4 h-6 w-6 text-gray-400 group-hover:text-gray-300 group-focus:text-gray-300 transition ease-in-out duration-150"--}}
{{--                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"--}}
{{--                                    stroke="currentColor">--}}
{{--                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"--}}
{{--                                          d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>--}}
{{--                                </svg>--}}
{{--                                Reports--}}
{{--                            </a>--}}
{{--                        </nav>--}}

                    </div>
                    <div class="flex-shrink-0 flex bg-gray-700 p-4">
                        Mobile config section
                    </div>
                </div>
                <div class="flex-shrink-0 w-14">
                    <!-- Force sidebar to shrink to fit close icon -->
                </div>
            </div>
        </div>

        <!-- Static sidebar for desktop -->
        <div class="hidden md:flex md:flex-shrink-0">
            <div class="flex flex-col w-64">
                <!-- Sidebar component, swap this element with another sidebar if you like -->
                <div class="flex flex-col h-0 flex-1 bg-gray-800">
                    <div class="flex-1 flex flex-col pt-5 pb-4 overflow-y-auto">
                        <x-tassy::header.back.corner-block-inner class="pl-4"/>
                        <livewire:tassy::livewire.sidenav/>

                    </div>
                    <div class="flex-shrink-0 flex bg-gray-700 p-4">
                        <a href="#" class="flex-shrink-0 w-full group block">
                            <div class="flex items-center">
                                <div>
                                    <img class="inline-block h-9 w-9 rounded-full"
                                         src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                         alt="">
                                </div>
                                <div class="ml-3">
                                    <p class="text-sm leading-5 font-medium text-white">
                                        Tom Cook
                                    </p>
                                    <p class="text-xs leading-4 font-medium text-gray-300 group-hover:text-gray-200 transition ease-in-out duration-150">
                                        View profile
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        {{--  <div class="flex flex-col w-0 flex-1 overflow-hidden">--}}
        <div class="md:hidden pl-1 pt-1 sm:pl-3 sm:pt-3">
            <button @click="open = true"
                    class="-ml-0.5 -mt-0.5 h-12 w-12 inline-flex items-center justify-center rounded-md text-gray-500 hover:text-gray-900 focus:outline-none focus:bg-gray-200 transition ease-in-out duration-150"
                    aria-label="Open sidebar">
                <!-- Heroicon name: menu -->
                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                     stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                </svg>
            </button>
        </div>

        <main class="flex-1  relative z-0 overflow-y-auto focus:outline-none" tabindex="0">
            <div class="flex flex-col h-screen justify-between bg-gray-100">
                {{--                Header--}}
                <div class="h-16  flex bg-gray-100 ">
                    <div class="hidden sm:block p-3  ">
                        <x-tassy::header.back.title>{{$title}}  </x-tassy::header.back.title>
                    </div>

                    <x-tassy::header.back.menu class="lg:pt-1"/>

                </div>
                <x-tassy::header.back.title class="sm:hidden">{{$title}}  </x-tassy::header.back.title>

                <main class="mb-auto  bg-gray-100">
                    <div class="p-0 sm:p-3 h-full">{{$slot}}</div>
                </main>

                <x-tassy::footer.back.index/>

            </div>


</x-tassy::page-_base>
