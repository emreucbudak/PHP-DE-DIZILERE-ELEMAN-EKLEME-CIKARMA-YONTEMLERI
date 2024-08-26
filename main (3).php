<?php
/******************************************************************************

    Emre Üçbudak Karadeniz Teknik Üniversitesi

*******************************************************************************/
// PHP DIZILERE ELEMAN EKLEME
$dizi = array("Emre","Üçbudak","Karadeniz","Teknik","Üniversitesi");
// array_unshift dizilerde başa ekler
array_unshift($dizi,"Şanlurfa");
echo($dizi[0]."\n");
// array_shift baştaki elemanı kaldırır
array_shift($dizi);
echo($dizi[0]."\n");
// array.pop dizinin sonundaki elemanı kaldırır 
array_pop($dizi);
echo($dizi[3]."\n");
// array_pop sayesinde 4. eleman kalktı ve son eleman 3 oldu
// array_push ile dizinin sonuna eleman eklenir
array_push($dizi,"Trabzon");
echo($dizi[4]);
// unset ile belirtilen indisdeki eleman kaldrılır
unset($dizi[4]);
echo($dizi[4]);
// görüldüğü gibi bir önceki satırda tanımladığımız Trabzon değerini kaldırdı ve bu değer tanımlanmamış hatası verdi
?>
