<?php
function betweenDays($awal, $akhir)
{
    $tanggal = array();
    $awal = new DateTime($awal);
    $akhir = new DateTime($akhir);
    
    while ($awal <= $akhir) {
        $tanggal[] = $awal->format('Y-m-d');
        $awal->add(new DateInterval('P1D'));
    }
    return implode(',', $tanggal);
}
echo betweenDays('2019-05-25', '2019-05-31');
?>