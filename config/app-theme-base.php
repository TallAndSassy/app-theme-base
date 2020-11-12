<?php


return [
    //-- User Theme
    'baseSectionColor'=>'blue',

    //--Text to Modal--
    'popupInnerText_classes' =>     "text-sm font-medium text-indigo-600",
    'popupInnerText_style' =>   "border-bottom: 1px dotted; text-shadow: 0.5px 0.5px 1px #64748b",
    'popupInnerText_css' =>   "",

    //-- Text to new Page --
    'link_to_classes' => "text-indigo-600  underline",
    'link_to_style' => "",
    'link_to_css' => "",

    //--Link to New Tab--
    'new_tab_classes' => "text-indigo-600  underline",
    'new_tab_style' => "",
    'new_tab_css' => "",

    //--Linkk to New Tab Icon Hint--
    'new_tab_icon_html' => "",
    'new_tab_icon_classes' => "",
    'new_tab_icon_css'=> <<<EOD
    /* --https://stackoverflow.com/questions/1899772/new-window-icon-for-web-accessibility-- */

    a[target="_blank"]::after {
        content: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAoAAAAKCAYAAACNMs+9AAAAQElEQVR42qXKwQkAIAxDUUdxtO6/RBQkQZvSi8I/pL4BoGw/XPkh4XigPmsUgh0626AjRsgxHTkUThsG2T/sIlzdTsp52kSS1wAAAABJRU5ErkJggg==);
        margin: 0 3px 0 5px;
    }
    EOD,

    //-- Link to out program
    'link_to_outside_classes' => 'text-indigo-600  underline',
    'link_to_outside_style' => '',
    'link_to_outside_rightHtml' => '<span class="text-gray-400 text-xs no-underline">⇪</span>',

];


