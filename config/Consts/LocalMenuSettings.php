<?php
namespace App\config\Consts;

class LocalMenuSettings
{
    const HEADER_LIST = array(
        [
            "text" => "トップページ",
            "url" => "",
            "class" => "",
            "target" => "",
        ],
        [
            "text" => "働きやすい理由",
            "url" => "/reason",
            "class" => "",
            "target" => "",
        ],
        [
            "text" => "職場紹介",
            "url" => "/workplace",
            "class" => "",
            "target" => "",
        ],
        [
            "text" => "職場見学会",
            "url" => "/webregist",
            "class" => "navItemBg navItemEntry",
            "target" => "",
        ],
        [
            "text" => "求人検索",
            "url" => "/search",
            "class" => "navItemBg navItemSearch",
            "target" => "",
        ],
    );

    const FOOTER_LIST = array(
        [
            "text" => "TOPページ",
            "url" => "/",
            "class" => "one",
            "target" => "",
        ],
        [
            "text" => "求人検索",
            "url" => "/search",
            "class" => "one end",
            "target" => "",
        ],
        [
            "text" => "働きやすい理由",
            "url" => "/reason",
            "class" => "two",
            "target" => "",
        ],
        [
            "text" => "職場紹介",
            "url" => "/workplace",
            "class" => "two",
            "target" => "",
        ],
        [
            "text" => "職場見学会",
            "url" => "/webregist",
            "class" => "two end",
            "target" => "",
        ],
        [
            "text" => "コーポレートサイト",
            "url" => LocalCorporationConst::CORPORATION_URL,
            "class" => "remoteNav",
            "target" => "_blank",
        ],
        [
            "text" => "会社概要",
            "url" => LocalCorporationConst::ABSTRACT_URL,
            "class" => "remoteNav",
            "target" => "_blank",
        ],
    );
}
