<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

final class CourseCategory extends Enum
{
    const all = "";
    const dock = "人間ドック";
    const braindock = "脳ドック";
    const pet = "PET検診";
    const heartdock = "心臓ドック";
    const ladydock = "レディースドック";
    const ladycheck = "婦人科検診";
    const breastcheck = "乳がん検診";
    const uteruscheck = "子宮がん検診";
    const stomachcheck = "胃がん検診";
    const coloncheck = "大腸がん検診";
    const lungcheck = "肺がん検診";
    const checkup = "健康診断";
    const mensdock = "メンズドック";
}
