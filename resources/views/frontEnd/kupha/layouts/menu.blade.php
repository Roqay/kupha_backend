 @if(Helper::GeneralWebmasterSettings("header_menu_id") >0 )
<?php
// Get list of main menu links
$MenuLinks = \App\Helpers\SiteMenu::List(Helper::GeneralWebmasterSettings("header_menu_id"));

?>

<div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent" style="display: block;">
    <ul class="navbar-nav m-auto">
        @foreach($MenuLinks as $MenuLink)
        <li class="nav-item {{ (@$MenuLink->sub)?"dropdown":"" }}  ">
            <a class="nav-link {{ \App\Helpers\SiteMenu::ActiveLink(url()->current(),@$MenuLink,@$WebmasterSection) }}  {{ (@$MenuLink->sub)?"dropdown-toggle":"" }}
                                 {{ Request::url() == $MenuLink->url ? 'selected-nav' : '' }}"
                 href="{{ @$MenuLink->url }}" id="navbarDropdown"
                 {{(@$MenuLink->sub)? "data-toggle=dropdown"  : ""}}  aria-haspopup="true" aria-expanded="false">
             {!! (@$MenuLink->icon)?"<i class='".@$MenuLink->icon."'></i> ":"" !!}
              {{ @$MenuLink->title }}
             {{-- <i class="ri-arrow-down-s-line"></i> --}}
            </a>

        @if(@$MenuLink->sub)
        <ul class="dropdown-menu" >
                @foreach($MenuLink->sub as $SubLink)
                <li class="nav-item">
                   <a  class="nav-link" href="{{ @$SubLink->url }}"  target="{{ @$SubLink->target }}">
                    {{-- {!! (@$SubLink->icon)?"<i class='".@$SubLink->icon."'></i> ":"" !!}  --}}
                    {{ @$SubLink->title }}
                         </a>
                </li>
                @endforeach
         </ul>
        @endif
    </li>
        @endforeach

    </ul>
    <div class="others-options">
        <ul>
           <?php   ?>
          {{-- <li>
               <div class="navbar-option-item navbar-option-language dropdown language-option">
                   <button class="dropdown-toggle" type="button" id="language1" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="lang-name"> --}}

                            {{-- English --}}
                        {{-- </span> --}}
                    {{-- </button> --}}
                    {{-- <div class="dropdown-menu language-dropdown-menu" aria-labelledby="language1"> --}}
                        {{-- @foreach(Helper::languagesList() as $ActiveLanguage) --}}
                        {{-- <a class="dropdown-item" href="{{ Helper::languageURL($ActiveLanguage->code, @$page_type , @$page_id) }}"> --}}
                            {{-- <img src="assets/images/language/english.png" alt="Image"> --}}
                            {{-- {{ $ActiveLanguage->title }}
                        </a>
                        @endforeach
                    </div>
                </div>
            </li> --}}

            {{-- <li>
                <a class="primary-btn" href="{{url('admin/home')}}">
                    الدخول
                </a>
            </li> --}}
        </ul>
    </div>
</div>
@endif

