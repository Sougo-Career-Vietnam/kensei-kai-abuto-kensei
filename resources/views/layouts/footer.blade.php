@php
/** @var \App\Models\FEnt\FEntPage $page */
$frontendSettings = $page->fEntConfig->frontendSettings;
$corporations = $page->fEntConfig->corporations;

$imgSrc = '';
$imgSrcSP = '';
if(isset($frontendSettings['footer']['corpInfo']['type']) || isset($frontendSettings['logo'])){

    if(isset($frontendSettings['footer']['corpInfo']['type'])){
        $imgSrc = $frontendSettings['footer']['corpInfo']['pcImg'];
        $imgSrcSP = $frontendSettings['footer']['corpInfo']['spImg'];
    }elseif(isset($frontendSettings['logo'])){
        $imgSrc = $frontendSettings['logo'];
        $imgSrcSP = $frontendSettings['logo'];
    }

    $needle   = '/';
    $pos = strpos($imgSrc, $needle);
    if($pos === false){ // スラッシュを含まないURLは想定しないためURLなし
        $imgSrc = '';
    }elseif($pos === 0){ // システム内の相対パスのためURL生成
        $imgSrc = url($imgSrc);
    }
    $pos = strpos($imgSrcSP, $needle);
    if($pos === false){ // スラッシュを含まないURLは想定しないためURLなし
        $imgSrcSP = '';
    }elseif($pos === 0){ // システム内の相対パスのためURL生成
        $imgSrcSP = url($imgSrcSP);
    }
}
@endphp

<div id="cmnFooter">
    <footer id="footer" class="footer">
        <div id="pageTop" class="pageTop">
            <a href="#" class="pageTopAnchor">
{{--                <i class="fas fa-arrow-up"></i>--}}
                {{-- <i class="fas fa-chevron-up"></i> --}}
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="12" viewBox="0 0 20 12">
                    <path id="Icon_ionic-ios-arrow-down" data-name="Icon ionic-ios-arrow-down" d="M10,8.383,17.566.441a1.376,1.376,0,0,1,2.019,0,1.566,1.566,0,0,1,0,2.125l-8.569,9a1.379,1.379,0,0,1-1.971.044L.417,2.571A1.539,1.539,0,0,1,0,1.509,1.539,1.539,0,0,1,.417.447a1.376,1.376,0,0,1,2.019,0Z" transform="translate(20 12) rotate(180)" fill="#6d9eeb"/>
                  </svg>
                <span>PAGE<br>
                    TOP</span>
            </a>
        </div><!-- #pageTop -->
        <div id="searchJobsBtn" class="SPdisp">
            <p class="searchJobsBtn-bnr">
                <a href="{{route('search')}}">
                    <span class="en">SEARCH JOBS</span>
                    <span class="ja">お仕事検索</span>
                </a>
            </p>
        </div><!-- #searchJobsBtn -->
        <div class="footerLayout">
            @if(isset($frontendSettings['footer']['corpInfo']) || isset($corporations[0]))
            <div class="footerCorpInfo">
                @if(isset($frontendSettings['footer']['displayTitle']) && $frontendSettings['footer']['displayTitle'])
                <div class="footerTitle">
                @if(isset($frontendSettings['footer']['corpInfo']['type']) || isset($frontendSettings['logo']))
                    @if(isset($frontendSettings['footer']['corpInfo']['type']))
                        @if($frontendSettings['footer']['corpInfo']['type'] == 'text')
                            <span>
                            {{$frontendSettings['footer']['corpInfo']['text'] ?? $corporations[0]['corpFullName'] ?? ''}}
                            </span>
                        @endif
                        @if($frontendSettings['footer']['corpInfo']['type'] == 'image' && isset($frontendSettings['footer']['corpInfo']['pcImg']))
{{--                            <img src="{{$imgSrc ?? ''}}" alt="{{$frontendSettings['footer']['corpInfo']['text'] ?? $corporations[0]['corpFullName'] ?? ''}}">--}}
                            <picture>
                                <source media="(max-width: 767px)" srcset="{{$imgSrcSP ?? ''}} 2x">
                                <source media="(min-width: 768px)" srcset="{{$imgSrc ?? ''}} 2x">
                                <img class="sizes" src="{{$imgSrc ?? ''}}" alt="{{$frontendSettings['footer']['corpInfo']['text'] ?? $corporations[0]['corpFullName'] ?? ''}}">
                            </picture>
                        @endif
                    @elseif(isset($frontendSettings['logo']))
                        <img src="{{$frontendSettings['logo'] ?? ''}}" alt="{{$frontendSettings['footer']['corpInfo']['text'] ?? $corporations[0]['corpFullName'] ?? ''}}">
                    @endif
                @endif
                </div>
                @endif
                @if(isset($frontendSettings['footer']['displayAddress']) && $frontendSettings['footer']['displayAddress'])
                <div class="footerAddress">
                    @php
                        $footerZipCode = $frontendSettings['footer']['corpInfo']['zipCode'] ?? $corporations[0]['zip'] ?? '';
                        $footerAddress = $frontendSettings['footer']['corpInfo']['address'] ?? $corporations[0]['address'] ?? '';
                        $footerTel = $frontendSettings['footer']['corpInfo']['tel'] ?? $corporations[0]['tel'] ?? '';
                        $footerFax = $frontendSettings['footer']['corpInfo']['fax'] ?? $corporations[0]['fax'] ?? '';
                    @endphp
                    @if($footerZipCode)
                        <p>{{$footerZipCode}}</p>
                    @endif
                    @if($footerAddress)
                        <p>{!! nl2br(e($footerAddress)) !!}</p>
                    @endif
                    @if($footerTel)
                        <p>TEL：{{$footerTel}}</p>
                    @endif
                    @if($footerFax)
                        <p>FAX：{{$footerFax}}</p>
                    @endif
                </div>
                @endif
                @if(isset($frontendSettings['footer']['displayCopyright']) && $frontendSettings['footer']['displayCopyright'])
                <p class="copyright">
                    <small>&#169; {{$corporations[0]['corpFullName']??$frontendSettings['title'] ?? ''}}&nbsp;&nbsp;&nbsp;All rights reserved.</small>
                </p>
                @endif
            </div>
            @endif

            @if((isset($frontendSettings['footer']['displayNavigation']) && $frontendSettings['footer']['displayNavigation']) && isset($frontendSettings['footer']['nav']))
            <nav class="footerRemoteNav">
                @php
                $blankRemoteNavTargetList = array();
                @endphp
                <ul class="footerRemoteNavList">
                    @foreach($frontendSettings['footer']['nav'] as $item)
                        @if(isset($item['class']) && $item['class'] === 'remoteNav')
                            @php
                                $blankRemoteNavTargetList[] = $item;
                            @endphp
                            @continue
                        @endif
                        <x-navigation.footerNavItem :navItem="$item" />
                    @endforeach
                </ul>
                @if(count($blankRemoteNavTargetList) > 0)
                <ul class="footerBlankRemoteNavList">
                @foreach($blankRemoteNavTargetList as $item)
                    <x-navigation.footerNavItem :navItem="$item" />
                @endforeach
                </ul>
                @endif
            </nav>
            @endif
        </div>
    </footer>
</div>
