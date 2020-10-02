<?php
    $image = imagecreatefromjpeg('smkn1pdh.jpeg');
    $stamp = imagecreatetruecolor(200, 70);

    imagefilledrectangle($stamp, 0, 0, 199, 169, 0x0000FF);
    imagefilledrectangle($stamp, 9, 9, 190, 60, 0xFFFFFF);

    imagestring($stamp, 5, 20, 20, 'smkn1padaherang', 0x0000FF);
    imagestring($stamp, 3, 20, 40, '@rpl', 0x0000FF);

    $sisi  = 10;
    $bawah = 10;

    $sx = imagesx($stamp);
    $sy = imagesy($stamp);

    imagecopymerge(
        $image, $stamp,
        imagesx($image) - $sx - $sisi,
        imagesy($image) - $sy - $bawah,
        0, 0,
        imagesx($stamp),
        imagesy($stamp),
        70
    );

    imagepng($image, 'smkn1pdh(watermark).png');

    imagedestroy($image);

    print_r('oke');
?>
