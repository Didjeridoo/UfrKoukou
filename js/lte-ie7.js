/* Load this script using conditional IE comments if you need to support IE 7 and IE 6. */

window.onload = function() {
	function addIcon(el, entity) {
		var html = el.innerHTML;
		el.innerHTML = '<span style="font-family: \'icomoon\'">' + entity + '</span>' + html;
	}
	var icons = {
			'icon-home' : '&#xe000;',
			'icon-pencil' : '&#xe001;',
			'icon-droplet' : '&#xe002;',
			'icon-image' : '&#xe003;',
			'icon-paint-format' : '&#xe004;',
			'icon-camera' : '&#xe005;',
			'icon-music' : '&#xe006;',
			'icon-headphones' : '&#xe007;',
			'icon-play' : '&#xe008;',
			'icon-camera-2' : '&#xe009;',
			'icon-dice' : '&#xe00a;',
			'icon-pacman' : '&#xe00b;',
			'icon-spades' : '&#xe00c;',
			'icon-clubs' : '&#xe00d;',
			'icon-diamonds' : '&#xe00e;',
			'icon-pawn' : '&#xe00f;',
			'icon-bullhorn' : '&#xe010;',
			'icon-connection' : '&#xe011;',
			'icon-home-2' : '&#xe012;',
			'icon-home-3' : '&#xe013;',
			'icon-office' : '&#xe014;',
			'icon-newspaper' : '&#xe015;',
			'icon-pencil-2' : '&#xe016;',
			'icon-quill' : '&#xe017;',
			'icon-pen' : '&#xe018;',
			'icon-blog' : '&#xe019;',
			'icon-image-2' : '&#xe01a;',
			'icon-images' : '&#xe01b;',
			'icon-film' : '&#xe01c;',
			'icon-podcast' : '&#xe01d;',
			'icon-feed' : '&#xe01e;',
			'icon-book' : '&#xe01f;',
			'icon-books' : '&#xe020;',
			'icon-library' : '&#xe021;',
			'icon-file' : '&#xe022;',
			'icon-profile' : '&#xe023;',
			'icon-file-2' : '&#xe024;',
			'icon-file-3' : '&#xe025;',
			'icon-file-4' : '&#xe026;',
			'icon-copy' : '&#xe027;',
			'icon-copy-2' : '&#xe028;',
			'icon-copy-3' : '&#xe029;',
			'icon-paste' : '&#xe02a;',
			'icon-paste-2' : '&#xe02b;',
			'icon-paste-3' : '&#xe02c;',
			'icon-stack' : '&#xe02d;',
			'icon-compass' : '&#xe02e;',
			'icon-location' : '&#xe02f;',
			'icon-location-2' : '&#xe030;',
			'icon-pushpin' : '&#xe031;',
			'icon-envelop' : '&#xe032;',
			'icon-address-book' : '&#xe033;',
			'icon-notebook' : '&#xe034;',
			'icon-phone-hang-up' : '&#xe035;',
			'icon-phone' : '&#xe036;',
			'icon-calculate' : '&#xe037;',
			'icon-support' : '&#xe038;',
			'icon-credit' : '&#xe039;',
			'icon-coin' : '&#xe03a;',
			'icon-cart' : '&#xe03b;',
			'icon-cart-2' : '&#xe03c;',
			'icon-cart-3' : '&#xe03d;',
			'icon-ticket' : '&#xe03e;',
			'icon-qrcode' : '&#xe03f;',
			'icon-barcode' : '&#xe040;',
			'icon-tags' : '&#xe041;',
			'icon-tag' : '&#xe042;',
			'icon-folder-open' : '&#xe043;',
			'icon-folder' : '&#xe044;',
			'icon-map' : '&#xe045;',
			'icon-map-2' : '&#xe046;',
			'icon-history' : '&#xe047;',
			'icon-clock' : '&#xe048;',
			'icon-clock-2' : '&#xe049;',
			'icon-alarm' : '&#xe04a;',
			'icon-alarm-2' : '&#xe04b;',
			'icon-bell' : '&#xe04c;',
			'icon-calendar' : '&#xe04d;',
			'icon-stopwatch' : '&#xe04e;',
			'icon-keyboard' : '&#xe04f;',
			'icon-print' : '&#xe050;',
			'icon-calendar-2' : '&#xe051;',
			'icon-screen' : '&#xe052;',
			'icon-laptop' : '&#xe053;',
			'icon-mobile' : '&#xe054;',
			'icon-mobile-2' : '&#xe055;',
			'icon-tablet' : '&#xe056;',
			'icon-tv' : '&#xe057;',
			'icon-cabinet' : '&#xe058;',
			'icon-drawer' : '&#xe059;',
			'icon-drawer-2' : '&#xe05a;',
			'icon-drawer-3' : '&#xe05b;',
			'icon-user' : '&#xe05c;',
			'icon-users' : '&#xe05d;',
			'icon-user-2' : '&#xe05e;',
			'icon-bubbles' : '&#xe05f;',
			'icon-bubbles-2' : '&#xe060;',
			'icon-bubble' : '&#xe061;',
			'icon-bubbles-3' : '&#xe062;',
			'icon-bubbles-4' : '&#xe063;',
			'icon-bubble-2' : '&#xe064;',
			'icon-reply' : '&#xe065;',
			'icon-forward' : '&#xe066;',
			'icon-redo' : '&#xe067;',
			'icon-undo' : '&#xe068;',
			'icon-flip' : '&#xe069;',
			'icon-flip-2' : '&#xe06a;',
			'icon-redo-2' : '&#xe06b;',
			'icon-undo-2' : '&#xe06c;',
			'icon-storage' : '&#xe06d;',
			'icon-upload' : '&#xe06e;',
			'icon-download' : '&#xe06f;',
			'icon-disk' : '&#xe070;',
			'icon-box-remove' : '&#xe071;',
			'icon-box-add' : '&#xe072;',
			'icon-users-2' : '&#xe073;',
			'icon-user-3' : '&#xe074;',
			'icon-user-4' : '&#xe075;',
			'icon-quotes-left' : '&#xe076;',
			'icon-busy' : '&#xe077;',
			'icon-spinner' : '&#xe078;',
			'icon-spinner-2' : '&#xe079;',
			'icon-spinner-3' : '&#xe07a;',
			'icon-spinner-4' : '&#xe07b;',
			'icon-spinner-5' : '&#xe07c;',
			'icon-binoculars' : '&#xe07d;',
			'icon-spinner-6' : '&#xe07e;',
			'icon-zoom-in' : '&#xe07f;',
			'icon-search' : '&#xe080;',
			'icon-zoom-out' : '&#xe081;',
			'icon-expand' : '&#xe082;',
			'icon-contract' : '&#xe083;',
			'icon-expand-2' : '&#xe084;',
			'icon-contract-2' : '&#xe085;',
			'icon-key' : '&#xe086;',
			'icon-key-2' : '&#xe087;',
			'icon-lock' : '&#xe088;',
			'icon-lock-2' : '&#xe089;',
			'icon-meter' : '&#xe08a;',
			'icon-rocket' : '&#xe08b;',
			'icon-leaf' : '&#xe08c;',
			'icon-food' : '&#xe08d;',
			'icon-mug' : '&#xe08e;',
			'icon-glass' : '&#xe08f;',
			'icon-trophy' : '&#xe090;',
			'icon-gift' : '&#xe091;',
			'icon-bars' : '&#xe092;',
			'icon-bars-2' : '&#xe093;',
			'icon-pie' : '&#xe094;',
			'icon-bug' : '&#xe095;',
			'icon-stats' : '&#xe096;',
			'icon-aid' : '&#xe097;',
			'icon-wand' : '&#xe098;',
			'icon-hammer' : '&#xe099;',
			'icon-cog' : '&#xe09a;',
			'icon-cogs' : '&#xe09b;',
			'icon-cog-2' : '&#xe09c;',
			'icon-settings' : '&#xe09d;',
			'icon-wrench' : '&#xe09e;',
			'icon-unlocked' : '&#xe09f;',
			'icon-meter2' : '&#xe0a0;',
			'icon-equalizer' : '&#xe0a1;',
			'icon-dashboard' : '&#xe0a2;',
			'icon-hammer-2' : '&#xe0a3;',
			'icon-fire' : '&#xe0a4;',
			'icon-lab' : '&#xe0a5;',
			'icon-magnet' : '&#xe0a6;',
			'icon-remove' : '&#xe0a7;',
			'icon-remove-2' : '&#xe0a8;',
			'icon-airplane' : '&#xe0a9;',
			'icon-briefcase' : '&#xe0aa;',
			'icon-truck' : '&#xe0ab;',
			'icon-accessibility' : '&#xe0ac;',
			'icon-road' : '&#xe0ad;',
			'icon-target' : '&#xe0ae;',
			'icon-shield' : '&#xe0af;',
			'icon-lightning' : '&#xe0b0;',
			'icon-switch' : '&#xe0b1;',
			'icon-power-cord' : '&#xe0b2;',
			'icon-signup' : '&#xe0b3;',
			'icon-list' : '&#xe0b4;',
			'icon-list-2' : '&#xe0b5;',
			'icon-numbered-list' : '&#xe0b6;',
			'icon-menu' : '&#xe0b7;',
			'icon-star' : '&#xe0b8;',
			'icon-contrast' : '&#xe0b9;',
			'icon-brightness-contrast' : '&#xe0ba;',
			'icon-brightness-medium' : '&#xe0bb;',
			'icon-bookmarks' : '&#xe0bc;',
			'icon-bookmark' : '&#xe0bd;',
			'icon-eye' : '&#xe0be;',
			'icon-eye-blocked' : '&#xe0bf;',
			'icon-eye-2' : '&#xe0c0;',
			'icon-attachment' : '&#xe0c1;',
			'icon-flag' : '&#xe0c2;',
			'icon-link' : '&#xe0c3;',
			'icon-earth' : '&#xe0c4;',
			'icon-globe' : '&#xe0c5;',
			'icon-upload-2' : '&#xe0c6;',
			'icon-download-2' : '&#xe0c7;',
			'icon-upload-3' : '&#xe0c8;',
			'icon-download-3' : '&#xe0c9;',
			'icon-cloud-upload' : '&#xe0ca;',
			'icon-cloud-download' : '&#xe0cb;',
			'icon-cloud' : '&#xe0cc;',
			'icon-tree' : '&#xe0cd;',
			'icon-menu-2' : '&#xe0ce;',
			'icon-star-2' : '&#xe0cf;',
			'icon-star-3' : '&#xe0d0;',
			'icon-heart' : '&#xe0d1;',
			'icon-heart-2' : '&#xe0d2;',
			'icon-heart-broken' : '&#xe0d3;',
			'icon-thumbs-up' : '&#xe0d4;',
			'icon-thumbs-up-2' : '&#xe0d5;',
			'icon-happy' : '&#xe0d6;',
			'icon-happy-2' : '&#xe0d7;',
			'icon-smiley' : '&#xe0d8;',
			'icon-smiley-2' : '&#xe0d9;',
			'icon-tongue' : '&#xe0da;',
			'icon-tongue-2' : '&#xe0db;',
			'icon-sad' : '&#xe0dc;',
			'icon-sad-2' : '&#xe0dd;',
			'icon-wink' : '&#xe0de;',
			'icon-wink-2' : '&#xe0df;',
			'icon-grin' : '&#xe0e0;',
			'icon-grin-2' : '&#xe0e1;',
			'icon-cool' : '&#xe0e2;',
			'icon-cool-2' : '&#xe0e3;',
			'icon-angry' : '&#xe0e4;',
			'icon-angry-2' : '&#xe0e5;',
			'icon-evil' : '&#xe0e6;',
			'icon-evil-2' : '&#xe0e7;',
			'icon-shocked' : '&#xe0e8;',
			'icon-shocked-2' : '&#xe0e9;',
			'icon-confused' : '&#xe0ea;',
			'icon-confused-2' : '&#xe0eb;',
			'icon-neutral' : '&#xe0ec;',
			'icon-neutral-2' : '&#xe0ed;',
			'icon-wondering' : '&#xe0ee;',
			'icon-wondering-2' : '&#xe0ef;',
			'icon-point-up' : '&#xe0f0;',
			'icon-point-right' : '&#xe0f1;',
			'icon-point-down' : '&#xe0f2;',
			'icon-point-left' : '&#xe0f3;',
			'icon-warning' : '&#xe0f4;',
			'icon-notification' : '&#xe0f5;',
			'icon-question' : '&#xe0f6;',
			'icon-info' : '&#xe0f7;',
			'icon-info-2' : '&#xe0f8;',
			'icon-cancel-circle' : '&#xe0f9;',
			'icon-blocked' : '&#xe0fa;',
			'icon-checkmark-circle' : '&#xe0fb;',
			'icon-spam' : '&#xe0fc;',
			'icon-eject' : '&#xe0fd;',
			'icon-close' : '&#xe0fe;',
			'icon-checkmark' : '&#xe0ff;',
			'icon-checkmark-2' : '&#xe100;',
			'icon-spell-check' : '&#xe101;',
			'icon-minus' : '&#xe102;',
			'icon-plus' : '&#xe103;',
			'icon-enter' : '&#xe104;',
			'icon-exit' : '&#xe105;',
			'icon-play-2' : '&#xe106;',
			'icon-pause' : '&#xe107;',
			'icon-stop' : '&#xe108;',
			'icon-backward' : '&#xe109;',
			'icon-forward-2' : '&#xe10a;',
			'icon-play-3' : '&#xe10b;',
			'icon-pause-2' : '&#xe10c;',
			'icon-stop-2' : '&#xe10d;',
			'icon-backward-2' : '&#xe10e;',
			'icon-forward-3' : '&#xe10f;',
			'icon-first' : '&#xe110;',
			'icon-previous' : '&#xe111;',
			'icon-next' : '&#xe112;',
			'icon-arrow-right' : '&#xe113;',
			'icon-arrow-up-left' : '&#xe114;',
			'icon-arrow-up' : '&#xe115;',
			'icon-last' : '&#xe116;',
			'icon-arrow-up-right' : '&#xe117;',
			'icon-arrow-left' : '&#xe118;',
			'icon-arrow-down-left' : '&#xe119;',
			'icon-arrow-down' : '&#xe11a;',
			'icon-arrow-down-right' : '&#xe11b;',
			'icon-arrow-right-2' : '&#xe11c;',
			'icon-arrow-up-right-2' : '&#xe11d;',
			'icon-arrow-up-left-2' : '&#xe11e;',
			'icon-arrow-up-2' : '&#xe11f;',
			'icon-shuffle' : '&#xe120;',
			'icon-loop' : '&#xe121;',
			'icon-loop-2' : '&#xe122;',
			'icon-loop-3' : '&#xe123;',
			'icon-volume-decrease' : '&#xe124;',
			'icon-volume-mute' : '&#xe125;',
			'icon-volume-increase' : '&#xe126;',
			'icon-volume-mute-2' : '&#xe127;',
			'icon-volume-low' : '&#xe128;',
			'icon-volume-medium' : '&#xe129;',
			'icon-volume-high' : '&#xe12a;',
			'icon-arrow-down-right-2' : '&#xe12b;',
			'icon-arrow-down-2' : '&#xe12c;',
			'icon-arrow-down-left-2' : '&#xe12d;',
			'icon-arrow-left-2' : '&#xe12e;',
			'icon-arrow-up-left-3' : '&#xe12f;',
			'icon-arrow-up-3' : '&#xe130;',
			'icon-arrow-up-right-3' : '&#xe131;',
			'icon-arrow-right-3' : '&#xe132;',
			'icon-arrow-down-right-3' : '&#xe133;',
			'icon-arrow-down-3' : '&#xe134;',
			'icon-arrow-down-left-3' : '&#xe135;',
			'icon-arrow-left-3' : '&#xe136;',
			'icon-tab' : '&#xe137;',
			'icon-checkbox-checked' : '&#xe138;',
			'icon-checkbox-unchecked' : '&#xe139;',
			'icon-checkbox-partial' : '&#xe13a;',
			'icon-radio-checked' : '&#xe13b;',
			'icon-radio-unchecked' : '&#xe13c;',
			'icon-crop' : '&#xe13d;',
			'icon-scissors' : '&#xe13e;',
			'icon-filter' : '&#xe13f;',
			'icon-filter-2' : '&#xe140;',
			'icon-font' : '&#xe141;',
			'icon-indent-increase' : '&#xe142;',
			'icon-text-height' : '&#xe143;',
			'icon-text-width' : '&#xe144;',
			'icon-bold' : '&#xe145;',
			'icon-underline' : '&#xe146;',
			'icon-italic' : '&#xe147;',
			'icon-strikethrough' : '&#xe148;',
			'icon-omega' : '&#xe149;',
			'icon-sigma' : '&#xe14a;',
			'icon-table' : '&#xe14b;',
			'icon-table-2' : '&#xe14c;',
			'icon-insert-template' : '&#xe14d;',
			'icon-pilcrow' : '&#xe14e;',
			'icon-left-to-right' : '&#xe14f;',
			'icon-right-to-left' : '&#xe150;',
			'icon-paragraph-left' : '&#xe151;',
			'icon-paragraph-center' : '&#xe152;',
			'icon-paragraph-right' : '&#xe153;',
			'icon-paragraph-justify' : '&#xe154;',
			'icon-paragraph-left-2' : '&#xe155;',
			'icon-paragraph-center-2' : '&#xe156;',
			'icon-paragraph-right-2' : '&#xe157;',
			'icon-paragraph-justify-2' : '&#xe158;',
			'icon-twitter' : '&#xe159;',
			'icon-twitter-2' : '&#xe15a;',
			'icon-twitter-3' : '&#xe15b;',
			'icon-instagram' : '&#xe15c;',
			'icon-facebook' : '&#xe15d;',
			'icon-facebook-2' : '&#xe15e;',
			'icon-facebook-3' : '&#xe15f;',
			'icon-google-drive' : '&#xe160;',
			'icon-google-plus' : '&#xe161;',
			'icon-google-plus-2' : '&#xe162;',
			'icon-google-plus-3' : '&#xe163;',
			'icon-google' : '&#xe164;',
			'icon-google-plus-4' : '&#xe165;',
			'icon-mail' : '&#xe166;',
			'icon-mail-2' : '&#xe167;',
			'icon-mail-3' : '&#xe168;',
			'icon-mail-4' : '&#xe169;',
			'icon-share' : '&#xe16a;',
			'icon-console' : '&#xe16b;',
			'icon-code' : '&#xe16c;',
			'icon-embed' : '&#xe16d;',
			'icon-new-tab' : '&#xe16e;',
			'icon-indent-decrease' : '&#xe16f;',
			'icon-feed-2' : '&#xe170;',
			'icon-feed-3' : '&#xe171;',
			'icon-feed-4' : '&#xe172;',
			'icon-youtube' : '&#xe173;',
			'icon-vimeo' : '&#xe174;',
			'icon-youtube-2' : '&#xe175;',
			'icon-vimeo2' : '&#xe176;',
			'icon-vimeo-2' : '&#xe177;',
			'icon-lanyrd' : '&#xe178;',
			'icon-flickr' : '&#xe179;',
			'icon-flickr-2' : '&#xe17a;',
			'icon-flickr-3' : '&#xe17b;',
			'icon-flickr-4' : '&#xe17c;',
			'icon-picassa' : '&#xe17d;',
			'icon-picassa-2' : '&#xe17e;',
			'icon-dribbble' : '&#xe17f;',
			'icon-dribbble-2' : '&#xe180;',
			'icon-dribbble-3' : '&#xe181;',
			'icon-forrst' : '&#xe182;',
			'icon-forrst-2' : '&#xe183;',
			'icon-deviantart' : '&#xe184;',
			'icon-deviantart-2' : '&#xe185;',
			'icon-steam' : '&#xe186;',
			'icon-skype' : '&#xe187;',
			'icon-soundcloud' : '&#xe188;',
			'icon-soundcloud-2' : '&#xe189;',
			'icon-windows8' : '&#xe18a;',
			'icon-windows' : '&#xe18b;',
			'icon-android' : '&#xe18c;',
			'icon-finder' : '&#xe18d;',
			'icon-apple' : '&#xe18e;',
			'icon-tux' : '&#xe18f;',
			'icon-yahoo' : '&#xe190;',
			'icon-tumblr' : '&#xe191;',
			'icon-tumblr-2' : '&#xe192;',
			'icon-blogger' : '&#xe193;',
			'icon-blogger-2' : '&#xe194;',
			'icon-joomla' : '&#xe195;',
			'icon-wordpress' : '&#xe196;',
			'icon-wordpress-2' : '&#xe197;',
			'icon-github' : '&#xe198;',
			'icon-github-2' : '&#xe199;',
			'icon-github-3' : '&#xe19a;',
			'icon-github-4' : '&#xe19b;',
			'icon-github-5' : '&#xe19c;',
			'icon-steam-2' : '&#xe19d;',
			'icon-reddit' : '&#xe19e;',
			'icon-linkedin' : '&#xe19f;',
			'icon-lastfm' : '&#xe1a0;',
			'icon-lastfm-2' : '&#xe1a1;',
			'icon-delicious' : '&#xe1a2;',
			'icon-stumbleupon' : '&#xe1a3;',
			'icon-stumbleupon-2' : '&#xe1a4;',
			'icon-stackoverflow' : '&#xe1a5;',
			'icon-pinterest' : '&#xe1a6;',
			'icon-pinterest-2' : '&#xe1a7;',
			'icon-xing' : '&#xe1a8;',
			'icon-xing-2' : '&#xe1a9;',
			'icon-flattr' : '&#xe1aa;',
			'icon-foursquare' : '&#xe1ab;',
			'icon-foursquare-2' : '&#xe1ac;',
			'icon-paypal' : '&#xe1ad;',
			'icon-paypal-2' : '&#xe1ae;',
			'icon-paypal-3' : '&#xe1af;',
			'icon-yelp' : '&#xe1b0;',
			'icon-libreoffice' : '&#xe1b1;',
			'icon-file-pdf' : '&#xe1b2;',
			'icon-file-openoffice' : '&#xe1b3;',
			'icon-file-word' : '&#xe1b4;',
			'icon-IcoMoon' : '&#xe1b5;',
			'icon-safari' : '&#xe1b6;',
			'icon-opera' : '&#xe1b7;',
			'icon-firefox' : '&#xe1b8;',
			'icon-IE' : '&#xe1b9;',
			'icon-chrome' : '&#xe1ba;',
			'icon-css3' : '&#xe1bb;',
			'icon-html5' : '&#xe1bc;',
			'icon-html5-2' : '&#xe1bd;',
			'icon-file-css' : '&#xe1be;',
			'icon-file-xml' : '&#xe1bf;',
			'icon-file-powerpoint' : '&#xe1c0;',
			'icon-file-zip' : '&#xe1c1;',
			'icon-file-excel' : '&#xe1c2;'
		},
		els = document.getElementsByTagName('*'),
		i, attr, c, el;
	for (i = 0; ; i += 1) {
		el = els[i];
		if(!el) {
			break;
		}
		attr = el.getAttribute('data-icon');
		if (attr) {
			addIcon(el, attr);
		}
		c = el.className;
		c = c.match(/icon-[^\s'"]+/);
		if (c && icons[c[0]]) {
			addIcon(el, icons[c[0]]);
		}
	}
};