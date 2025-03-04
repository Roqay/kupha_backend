
<div class="social">
    @if(Helper::GeneralSiteSettings('social_link1'))
        <a href="{{Helper::GeneralSiteSettings('social_link1')}}" data-bs-toggle="tooltip" title="Facebook" data-bs-placement="{{ @$tt_position }}"
           target="_blank" class=" d-inline social-facebook"><i
                class="fa fa-facebook"></i></a>
    @endif
    @if(Helper::GeneralSiteSettings('social_link2'))
        <a href="{{Helper::GeneralSiteSettings('social_link2')}}" data-bs-toggle="tooltip" title="Twitter" data-bs-placement="{{ @$tt_position }}"
           target="_blank" class=" d-inline social-x"><i
                class="fa fa-twitter"></i></a>
    @endif
    @if(Helper::GeneralSiteSettings('social_link4'))
        <a href="{{Helper::GeneralSiteSettings('social_link4')}}" data-bs-toggle="tooltip" title="linkedin" data-bs-placement="{{ @$tt_position }}"
           target="_blank" class=" d-inline social-linkedin"><i
                class="fa fa-linkedin"></i></a>
    @endif
    @if(Helper::GeneralSiteSettings('social_link5'))
        <a href="{{Helper::GeneralSiteSettings('social_link5')}}" data-bs-toggle="tooltip" title="Youtube" data-bs-placement="{{ @$tt_position }}"
           target="_blank" class=" d-inline social-youtube"><i
                class="fa fa-youtube"></i></a>
    @endif
    @if(Helper::GeneralSiteSettings('social_link6'))
        <a href="{{Helper::GeneralSiteSettings('social_link6')}}" data-bs-toggle="tooltip" title="Instagram" data-bs-placement="{{ @$tt_position }}"
           target="_blank" class=" d-inline social-instagram"><i
                class="fa fa-instagram"></i></a>
    @endif
    @if(Helper::GeneralSiteSettings('social_link7'))
        <a href="{{Helper::GeneralSiteSettings('social_link7')}}" data-bs-toggle="tooltip" title="Pinterest" data-bs-placement="{{ @$tt_position }}"
           target="_blank" class=" d-inline social-pinterest"><i
                class="fa fa-pinterest"></i></a>
    @endif
    @if(Helper::GeneralSiteSettings('social_link8'))
        <a href="{{Helper::GeneralSiteSettings('social_link8')}}" data-bs-toggle="tooltip" title="Threads" data-bs-placement="{{ @$tt_position }}"
           target="_blank" class=" d-inline social-threads"><i
                class="fa fa-threads"></i></a>
    @endif
    @if(Helper::GeneralSiteSettings('social_link9'))
        <a href="{{Helper::GeneralSiteSettings('social_link9')}}" data-bs-toggle="tooltip" title="Snapchat" data-bs-placement="{{ @$tt_position }}"
           target="_blank" class=" d-inline social-snapchat"><i
                class="fa fa-snapchat"></i></a>
    @endif
</div>
