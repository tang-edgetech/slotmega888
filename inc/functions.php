<?php
$site_base_url = 'https://slotmega888.app/';
// $site_base_url = 'http://localhost/slotmega888/';
$site_title = 'Slot Mega 888';
if( !empty($page_name) ) {
    $page_prefix = $page_name . ' | ';
}
else {
    $page_prefix = '';
}
$page_title = $page_prefix.' '.$site_title;
$page_url = (empty($_SERVER['HTTPS']) ? 'http' : 'https') . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$icon_share_this = '<svg width="800px" height="800px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M13.803 5.33333C13.803 3.49238 15.3022 2 17.1515 2C19.0008 2 20.5 3.49238 20.5 5.33333C20.5 7.17428 19.0008 8.66667 17.1515 8.66667C16.2177 8.66667 15.3738 8.28596 14.7671 7.67347L10.1317 10.8295C10.1745 11.0425 10.197 11.2625 10.197 11.4872C10.197 11.9322 10.109 12.3576 9.94959 12.7464L15.0323 16.0858C15.6092 15.6161 16.3473 15.3333 17.1515 15.3333C19.0008 15.3333 20.5 16.8257 20.5 18.6667C20.5 20.5076 19.0008 22 17.1515 22C15.3022 22 13.803 20.5076 13.803 18.6667C13.803 18.1845 13.9062 17.7255 14.0917 17.3111L9.05007 13.9987C8.46196 14.5098 7.6916 14.8205 6.84848 14.8205C4.99917 14.8205 3.5 13.3281 3.5 11.4872C3.5 9.64623 4.99917 8.15385 6.84848 8.15385C7.9119 8.15385 8.85853 8.64725 9.47145 9.41518L13.9639 6.35642C13.8594 6.03359 13.803 5.6896 13.803 5.33333Z" fill="#636363"/></svg>';
$icon_backtotop = '<svg xmlns="http://www.w3.org/2000/svg" class="ionicon" viewBox="0 0 512 512"><path d="M342.43 273.77l-74.13-89.09a16 16 0 00-24.6 0l-74.13 89.09A16 16 0 00181.86 300h148.28a16 16 0 0012.29-26.23z"/><path d="M448 256c0-106-86-192-192-192S64 150 64 256s86 192 192 192 192-86 192-192z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"/></svg>';
$icon_whatsapp = '<svg width="360" height="362" viewBox="0 0 360 362" fill="none" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M307.546 52.5655C273.709 18.685 228.706 0.0171895 180.756 0C81.951 0 1.53846 80.404 1.50408 179.235C1.48689 210.829 9.74646 241.667 25.4319 268.844L0 361.736L95.0236 336.811C121.203 351.096 150.683 358.616 180.679 358.625H180.756C279.544 358.625 359.966 278.212 360 179.381C360.017 131.483 341.392 86.4547 307.546 52.5741V52.5655ZM180.756 328.354H180.696C153.966 328.346 127.744 321.16 104.865 307.589L99.4242 304.358L43.034 319.149L58.0834 264.168L54.5423 258.53C39.6304 234.809 31.749 207.391 31.7662 179.244C31.8006 97.1036 98.6334 30.2707 180.817 30.2707C220.61 30.2879 258.015 45.8015 286.145 73.9665C314.276 102.123 329.755 139.562 329.738 179.364C329.703 261.513 262.871 328.346 180.756 328.346V328.354ZM262.475 216.777C257.997 214.534 235.978 203.704 231.869 202.209C227.761 200.713 224.779 199.966 221.796 204.452C218.814 208.939 210.228 219.029 207.615 222.011C205.002 225.002 202.389 225.372 197.911 223.128C193.434 220.885 179.003 216.158 161.891 200.902C148.578 189.024 139.587 174.362 136.975 169.875C134.362 165.389 136.7 162.965 138.934 160.739C140.945 158.728 143.412 155.505 145.655 152.892C147.899 150.279 148.638 148.406 150.133 145.423C151.629 142.432 150.881 139.82 149.764 137.576C148.646 135.333 139.691 113.287 135.952 104.323C132.316 95.5909 128.621 96.777 125.879 96.6309C123.266 96.5019 120.284 96.4762 117.293 96.4762C114.302 96.4762 109.454 97.5935 105.346 102.08C101.238 106.566 89.6691 117.404 89.6691 139.441C89.6691 161.478 105.716 182.785 107.959 185.776C110.202 188.767 139.544 234.001 184.469 253.408C195.153 258.023 203.498 260.782 210.004 262.845C220.731 266.257 230.494 265.776 238.212 264.624C246.816 263.335 264.71 253.786 268.44 243.326C272.17 232.866 272.17 223.893 271.053 222.028C269.936 220.163 266.945 219.037 262.467 216.794L262.475 216.777Z" fill="#25D366"/>
</svg>';
$icon_whatsapp_white = '<svg width="360" height="362" viewBox="0 0 360 362" fill="none" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" clip-rule="evenodd" d="M307.546 52.5655C273.709 18.685 228.706 0.0171895 180.756 0C81.951 0 1.53846 80.404 1.50408 179.235C1.48689 210.829 9.74646 241.667 25.4319 268.844L0 361.736L95.0236 336.811C121.203 351.096 150.683 358.616 180.679 358.625H180.756C279.544 358.625 359.966 278.212 360 179.381C360.017 131.483 341.392 86.4547 307.546 52.5741V52.5655ZM180.756 328.354H180.696C153.966 328.346 127.744 321.16 104.865 307.589L99.4242 304.358L43.034 319.149L58.0834 264.168L54.5423 258.53C39.6304 234.809 31.749 207.391 31.7662 179.244C31.8006 97.1036 98.6334 30.2707 180.817 30.2707C220.61 30.2879 258.015 45.8015 286.145 73.9665C314.276 102.123 329.755 139.562 329.738 179.364C329.703 261.513 262.871 328.346 180.756 328.346V328.354ZM262.475 216.777C257.997 214.534 235.978 203.704 231.869 202.209C227.761 200.713 224.779 199.966 221.796 204.452C218.814 208.939 210.228 219.029 207.615 222.011C205.002 225.002 202.389 225.372 197.911 223.128C193.434 220.885 179.003 216.158 161.891 200.902C148.578 189.024 139.587 174.362 136.975 169.875C134.362 165.389 136.7 162.965 138.934 160.739C140.945 158.728 143.412 155.505 145.655 152.892C147.899 150.279 148.638 148.406 150.133 145.423C151.629 142.432 150.881 139.82 149.764 137.576C148.646 135.333 139.691 113.287 135.952 104.323C132.316 95.5909 128.621 96.777 125.879 96.6309C123.266 96.5019 120.284 96.4762 117.293 96.4762C114.302 96.4762 109.454 97.5935 105.346 102.08C101.238 106.566 89.6691 117.404 89.6691 139.441C89.6691 161.478 105.716 182.785 107.959 185.776C110.202 188.767 139.544 234.001 184.469 253.408C195.153 258.023 203.498 260.782 210.004 262.845C220.731 266.257 230.494 265.776 238.212 264.624C246.816 263.335 264.71 253.786 268.44 243.326C272.17 232.866 272.17 223.893 271.053 222.028C269.936 220.163 266.945 219.037 262.467 216.794L262.475 216.777Z" fill="#ffffff"/>
</svg>';
$icon_telegram_white = '<svg fill="#ffffff" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 24 24" xml:space="preserve">
	<style type="text/css">
		.st0{fill:none;}
	</style>
	<path d="M19.2,4.4L2.9,10.7c-1.1,0.4-1.1,1.1-0.2,1.3l4.1,1.3l1.6,4.8c0.2,0.5,0.1,0.7,0.6,0.7c0.4,0,0.6-0.2,0.8-0.4
		c0.1-0.1,1-1,2-2l4.2,3.1c0.8,0.4,1.3,0.2,1.5-0.7l2.8-13.1C20.6,4.6,19.9,4,19.2,4.4z M17.1,7.4l-7.8,7.1L9,17.8L7.4,13l9.2-5.8
		C17,6.9,17.4,7.1,17.1,7.4z"/>
	<rect y="0" class="st0" width="24" height="24"/>
</svg>';

$rtp_games = array(
    array("title" => "Great Blue", "rate" => "96.03", "theme" => "Underwater", "features" => "High volatility, up to 33 free spins, 15x multipliers, wilds"),
    array("title" => "Safari Heat", "rate" => "96.16", "theme" => "African Wildlife", "features" => "15 free games with tripled wins, stacked wilds"),
    array("title" => "Golden Dragon", "rate" => "96.50", "theme" => "Asian Mythology", "features" => "Free spins, multipliers, golden dragon symbols"),
    array("title" => "Aztec Gems", "rate" => "96.52", "theme" => "Ancient Civilization", "features" => "Multipliers, Aztec-themed symbols, frequent bonus features"),
    array("title" => "Buffalo Blitz", "rate" => "95.96", "theme" => "North American Wildlife", "features" => "Stacked symbols, bonus rounds, free games"),
    array("title" => "Highway Kings", "rate" => "94.87", "theme" => "Trucking/Highway", "features" => "Simple gameplay, trucking symbols, bonus features"),
    array("title" => "Robin Hood", "rate" => "95.73", "theme" => "Medieval Adventure", "features" => "Free spins, bonus rounds, Robin Hood theme"),
    array("title" => "Golden Tour", "rate" => "96.15", "theme" => "Golf/Sports", "features" => "Bonus mini-games, sports-themed symbols, multipliers"),
    array("title" => "Ocean King 3", "rate" => "94.92", "theme" => "Oceanic/Fishing Game", "features" => "Multiplayer fish shooting, special bonuses"),
    array("title" => "Long Long Fa", "rate" => "95.48", "theme" => "Chinese Tradition", "features" => "Traditional symbols, bonus features, scatters"),
    array("title" => "Sic Bo", "rate" => "97.00", "theme" => "Dice Game", "features" => "Classic dice game, high RTP"),
    array("title" => "Aladdin Wishes", "rate" => "95.00", "theme" => "Arabian Nights", "features" => "Wilds, scatters, progressive jackpot"),
    array("title" => "5 Fortune", "rate" => "95.00", "theme" => "Chinese Fortune", "features" => "Wild symbols, scatters"),
    array("title" => "Iceland", "rate" => "96.58", "theme" => "Arctic Adventure", "features" => "50 paylines, up to 19 free games, bonus multipliers"),
    array("title" => "Mahjong King", "rate" => "96.95", "theme" => "Mahjong/Asian", "features" => "Mahjong-style slot, multipliers, bonus rounds"),
    array("title" => "Rich Pirates", "rate" => "96.85", "theme" => "Pirate Adventure", "features" => "Pirate-themed adventure, bonus features, free spins"),
    array("title" => "Golden Reel", "rate" => "96.70", "theme" => "Classic Slots", "features" => "Classic slot design, bonus spins, straightforward gameplay"),
    array("title" => "God of War", "rate" => "96.60", "theme" => "Mythology/Battle", "features" => "Epic graphics, battle-themed bonuses, free spins"),
    array("title" => "Poker Online", "rate" => "97.60", "theme" => "Poker/Card", "features" => "Classic poker gameplay, immersive interface, high RTP"),
    array("title" => "Raja Laut", "rate" => "95.00", "theme" => "Underwater", "features" => "Interactive fish-shooting gameplay, multiple bonuses"),
    array("title" => "King Derby", "rate" => "90.50", "theme" => "Horse Racing", "features" => "Realistic racing graphics, frequent scatters, lower RTP"),
    array("title" => "Funky Monkey", "rate" => "94.00", "theme" => "Jungle/Monkey", "features" => "Simple 3-reel slot, single payline, easy to play"),
    array("title" => "Da Sheng Nao Hai", "rate" => "95.00", "theme" => "Oceanic/Fishing Game", "features" => "Shoot fish game, ocean theme, additional prizes"),
    array("title" => "8 Ball Slots", "rate" => "95.00", "theme" => "Billiards", "features" => "Unique graphics, low bet value, high return potential"),
    array("title" => "Seaworld", "rate" => "95.00", "theme" => "Underwater Adventure", "features" => "Multi-reel system, aquatic symbols, wilds, scatters"),
    array("title" => "Fairy Garden", "rate" => "95.00", "theme" => "Fantasy", "features" => "Expanding wilds, free spins with multipliers, magical respin feature"),
    array("title" => "Egyptian Fortunes", "rate" => "95.00", "theme" => "Ancient Egypt", "features" => "Egyptian-themed symbols, bonus features, free spins"),
    array("title" => "Reel Classic", "rate" => "94.00", "theme" => "Classic Slots", "features" => "Nostalgic symbols like cherries, sevens, and bells"),
    array("title" => "God Of Wealth", "rate" => "95.00", "theme" => "Chinese Mythology", "features" => "Divine blessings theme, bonus features, free spins"),
    array("title" => "Fruit Party", "rate" => "94.77", "theme" => "Fruit-Themed", "features" => "Vibrant fruit symbols, bonus features, free spins")
);
?>