<?php


namespace App\Enums;


class RegionPref
{
    protected static $list = [];

    public function __construct()
    {
        static::$list = [
            Region::Tohoku => [
                Pref::getKey(Pref::hokkaido) => Pref::hokkaido,
                Pref::getKey(Pref::aomori) => Pref::aomori,
                Pref::getKey(Pref::akita) => Pref::akita,
                Pref::getKey(Pref::iwate) => Pref::iwate,
                Pref::getKey(Pref::yamagata) => Pref::yamagata,
                Pref::getKey(Pref::miyagi) => Pref::miyagi,
                Pref::getKey(Pref::fukushima) => Pref::fukushima
            ],
            Region::Kanto => [
                Pref::getKey(Pref::tokyo) => Pref::tokyo,
                Pref::getKey(Pref::kanagawa) => Pref::kanagawa,
                Pref::getKey(Pref::chiba) => Pref::chiba,
                Pref::getKey(Pref::saitama) => Pref::saitama,
                Pref::getKey(Pref::ibaraki) => Pref::ibaraki,
                Pref::getKey(Pref::tochigi) => Pref::tochigi,
                Pref::getKey(Pref::gumma) => Pref::gumma
            ],
            Region::Chubu => [
                Pref::getKey(Pref::aichi) => Pref::aichi,
                Pref::getKey(Pref::niigata) => Pref::niigata,
                Pref::getKey(Pref::toyama) => Pref::toyama,
                Pref::getKey(Pref::ishikawa) => Pref::ishikawa,
                Pref::getKey(Pref::shizuoka) => Pref::shizuoka,
                Pref::getKey(Pref::fukui) => Pref::fukui,
                Pref::getKey(Pref::nagano) => Pref::nagano,
                Pref::getKey(Pref::yamanashi) => Pref::yamanashi,
                Pref::getKey(Pref::gifu) => Pref::gifu
            ],
            Region::Kinki => [
                Pref::getKey(Pref::osaka) => Pref::osaka,
                Pref::getKey(Pref::kyoto) => Pref::kyoto,
                Pref::getKey(Pref::hyogo) => Pref::hyogo,
                Pref::getKey(Pref::nara) => Pref::nara,
                Pref::getKey(Pref::shiga) => Pref::shiga,
                Pref::getKey(Pref::mie) => Pref::mie,
                Pref::getKey(Pref::wakayama) => Pref::wakayama
            ],
            Region::Chugoku => [
                Pref::getKey(Pref::tottori) => Pref::tottori,
                Pref::getKey(Pref::shimane) => Pref::shimane,
                Pref::getKey(Pref::yamaguchi) => Pref::yamaguchi,
                Pref::getKey(Pref::hiroshima) => Pref::hiroshima,
                Pref::getKey(Pref::okayama) => Pref::okayama
            ],
            Region::Shikoku => [
                Pref::getKey(Pref::ehime) => Pref::ehime,
                Pref::getKey(Pref::kanagawa) => Pref::kanagawa,
                Pref::getKey(Pref::kochi) => Pref::kochi,
                Pref::getKey(Pref::tokushima) => Pref::tokushima
            ],
            Region::Kyushu => [
                Pref::getKey(Pref::fukuoka) => Pref::fukuoka,
                Pref::getKey(Pref::saga) => Pref::saga,
                Pref::getKey(Pref::nagasaki) => Pref::nagasaki,
                Pref::getKey(Pref::oita) => Pref::oita,
                Pref::getKey(Pref::miyazaki) => Pref::miyazaki,
                Pref::getKey(Pref::kumamoto) => Pref::kumamoto,
                Pref::getKey(Pref::kagoshima) => Pref::kagoshima,
                Pref::getKey(Pref::okinawa) => Pref::okinawa
            ]
        ];
    }

    public function all()
    {
        return static::$list;
    }

    public function pref($region)
    {
        return static::$list[$region];
    }

    public function region($pref)
    {
        foreach (static::$list as $key)
        {
            if (array_key_exists($pref, $key)) return $key;
        }
    }
}