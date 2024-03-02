<?php

function revertStr(string $str) :string
{
    $arr = explode(' ', $str);

    foreach ($arr as $key => $item) {
        $arrNew = mb_str_split($item);
        $arrRevert = mb_str_split(mb_strtolower(preg_replace('/\pP/iu', '', $item)));
        $arrRevertLength = count($arrRevert) - 1;

        for ($i = 0; $i < count($arrNew); $i++) {
            if (ctype_punct($arrNew[$i])) continue;

            if (mb_strtoupper($arrNew[$i]) == $arrNew[$i]) {
                $arrNew[$i] = mb_strtoupper($arrRevert[$arrRevertLength]);
            } else {
                $arrNew[$i] = $arrRevert[$arrRevertLength];
            }

            $arrRevertLength--;
        }
        $arr[$key] = implode($arrNew);

    }

    return implode(' ',$arr);
}

