<?php






// Ganti Proxy Jika Ada Yang Mati
$prox = array("103.228.117.244:8080",
"202.125.94.139:1234",
"103.120.152.17:59068",
"103.15.226.124:80",
"103.228.117.244:8080",
"103.110.218.90:8080",
"103.76.253.156:3128",
"104.248.236.12:8080",
"103.9.124.210:8080",
"104.236.248.219:3128",
"104.248.158.130:8080",
"109.111.232.237:6666",
"103.75.34.121:57152",
"113.164.79.177:46281",
"117.239.218.227:3128",
"117.240.238.230:80",
"118.97.180.132:30793",
"119.15.90.178:8080",
"118.69.219.185:55184",
"128.199.91.42:3128",
"134.209.13.153:8080",
"134.209.13.16:8080",
"138.197.128.33:8080",
"138.122.51.87:3128",
"142.93.128.158:8080",
"142.93.195.94:8080",
"142.93.132.238:8080",
"142.93.63.115:8080",
"142.93.132.193:8080",
"142.93.34.45:3128",
"149.56.102.220:3128",
"145.239.169.43:8080");


// Tambahkan Nama Agar Menambah Kemungkinan Email nya
$nama = array("anam",
"ryan",
"bogel",
"yusuf",
"nandif",
"ahmad",
"adolf",
"hitler",
"kadal",
"Jejaka",
"Tutorial",
"kampret",
"andik",
"andika",
"agus",
"bambang",
"budi",
"reni",
"rina",
"fitri",
"anto",
"dedy",
"corbuser",
"lana",
"anwar",
"zahid",
"johan",
"yohan",
"ani",
"kungfu-panda",
"ahmad-dani",
"ken-arok",
"anjay",
"ngono",
"ora-nyongko",
"orangiro",
"sgbteam",
"termuxid",
"macul",
"petruk",
"huda","ngopitruk",
"indosec",
"jokowi",
"prabowo",
"ahmad_bowo",
"ngakak_tenan",
"ahamad-waluyo",
"waloyo",
"lungko_babat",
"opo-mneh",
"earnspin",
"muslimin",
"walmuslimat",
"cryptoblog",
"reza",
"oktaviani",
"imam_benjol",
"ngadimin",
"andi",
"jhon",
"george",
"bram",
"firman",
"muhammad",
"agung",
"lee",
"mark",
"robert",
"johny",
"kadal_goreng");



$user = array("Android/5.1; Bermi/1.40.1; Manufacturer/OPPO; Model/A1603; Gaoiscoolman",
"Android Phone / Chrome 62 [Mobile]: Mozilla/5.0 (Linux; Android 7.0; SM-G935P Build/NRD90M) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202 Mobile Safari/537.36",
"Android Phone / Chrome 60 [Mobile]: Mozilla/5.0 (Linux; Android 7.0; SM-G935P Build/NRD90M) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.78 Mobile Safari/537.36",
"Android Phone / Chrome 67 [Mobile]: Mozilla/5.0 (Linux; Android 9; Pixel 2 XL Build/PPP3.180510.008; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/67.0.3396.87 Mobile",
"Android Phone / Chrome 65 [Mobile]: Mozilla/5.0 (Linux; Android 7.0; SM-G935P Build/NRD90M) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.162 Mobile Safari/537.36",
"Android Phone / Chrome 59 [Mobile]: Mozilla/5.0 (Linux; Android 7.0; SM-G935P Build/NRD90M) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/59.0.3071.92 Mobile Safari/537.36",
"Android Phone / Chrome 51 [Mobile]: Mozilla/5.0 (Linux; Android 6.0.1; SM-G935P Build/MMB29M; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/51.0.2704.81 Mobile Safari/537.36",
"Android Phone / Chrome 55 [Mobile]: Mozilla/5.0 (Linux; Android 6.0.1; SM-G935P Build/MMB29M; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/55.0.2883.91 Mobile Safari/537.36",
"Android Phone / Chrome 58 [Mobile]: Mozilla/5.0 (Linux; Android 6.0.1; SM-G935P Build/MMB29M) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.83 Mobile Safari/537.36",
"Android Phone / Chrome 67 [Mobile]: Mozilla/5.0 (Linux; Android 9; Pixel 2 XL Build/PPP3.180510.008; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/67.0.3396.87 Mobile",
"Android Phone / Chrome 67 [Mobile]: Mozilla/5.0 (Linux; Android 9; Pixel 2 XL Build/PPP3.180510.008; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/67.0.3396.87 Mobile",
"Android Phone / Chrome 58 [Mobile]: Mozilla/5.0 (Linux; Android 7.0; SM-G935P Build/NRD90M; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/58.0.3029.83 Mobile Safari/537.36 [FB_IAB/FB4A;FBAV/134.0.0.25.91;]",
"Android Phone / Chrome 58 [Mobile]: Mozilla/5.0 (Linux; Android 6.0.1; SM-G935P Build/MMB29M; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/50.0.2661.86 Mobile Safari/537.36",
"Android Phone / Chrome 56 [Mobile]: Mozilla/5.0 (Linux; Android 7.0; SM-G935P Build/NRD90M; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/56.0.2924.87 Mobile Safari/537.36 [FB_IAB/MESSENGER;FBAV/121.0.0.15.70;]",
"Android Phone / Chrome 62 [Mobile]: Mozilla/5.0 (Linux; Android 7.0; SM-G935P Build/NRD90M) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202.73 Mobile Safari/537.36",
"Android Phone / Chrome 58 [Mobile]: Mozilla/5.0 (Linux; Android 8.0; Nexus 6P Build/OPP3.170518.006) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.121 Mobile Safari/537.36",
"Android Phone / Android Browser [Mobile]: Mozilla/5.0 (Linux; U; Android 8.1.0; zh-cn; Redmi Note 5 Build/OPM1.171019.011) AppleWebKit/533.1 (KHTML, like Gecko) Mobile Safari/533.1",
"Android Phone / Android Browser [Mobile]: Mozilla/5.0 (Linux; U; Android 8.1.0; zh-cn; CLT-AL01 Build/HUAWEICLT-AL01) AppleWebKit/533.1 (KHTML, like Gecko) Mobile Safari/533.1",
"Android Phone / Chrome 58 [Mobile]: Mozilla/5.0 (Linux; Android 8.0.0; Pixel XL Build/OPP3.170518.006) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/59.0.3071.125 Mobile Safari/537.36",
"Android Phone / Android Browser [Mobile]: Mozilla/5.0 (Linux; U; Android 8.1.0; zh-cn; ONEPLUS A5010 Build/OPM1.171019.011) AppleWebKit/533.1 (KHTML, like Gecko) Mobile Safari/533.1",
"Android Phone / Chrome 64 [Mobile]: Mozilla/5.0 (Linux; Android 8.0.0; SM-G960F Build/R16NW) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.137 Mobile Safari/537.36",
"Android Phone / Chrome 60 [Mobile]: Mozilla/5.0 (Linux; Android 8.0.0; Pixel Build/OPP3.170518.006) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.66 Mobile Safari/537.36",
"Android Phone / Android Browser [Mobile]: Mozilla/5.0 (Linux; U; Android 8.1.0; zh-cn; vivo X21A Build/OPM1.171019.011) AppleWebKit/533.1 (KHTML, like Gecko) Mobile Safari/533.1",
"Android Phone / Chrome 67 [Mobile]: Mozilla/5.0 (Linux; Android 9; Pixel 2 XL Build/PPP3.180510.008; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/67.0.3396.87 Mobile Safari/537.36",
"Android Phone / Chrome 62 [Mobile]: Mozilla/5.0 (Linux; Android 8.0.0; Nexus 6P Build/OPR5.170623.011) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202.84 Mobile Safari/537.36",
"Android Phone / Chrome 67 [Mobile]: Mozilla/5.0 (Linux; Android 9; Pixel 2 XL Build/PPP3.180510.008; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/67.0.3396.87 Mobile",
"Android Phone / Chrome 63 [Mobile]: Mozilla/5.0 (Linux; Android 9.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3237.0 Mobile Safari/537.36",
"Android Phone / Chrome 63 [Mobile]: Mozilla/5.0 (Linux; Android 8.0.0; Nexus 6P Build/OPR5.170623.007) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.98 Mobile Safari/537.36",
"Android Phone / Chrome 62 [Mobile]: Mozilla/5.0 (Linux; Android 9.0.0; Pixel XL Build/OPP3.170518.006) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202.0 Mobile Safari/537.36",
"Android Phone / Chrome 62 [Mobile]: Mozilla/5.0 (Linux; Android 8.0.0; SM-G965F Build/R16NW) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.109 Mobile Safari/537.36",
"Android Phone / Chrome 62 [Mobile]: Mozilla/5.0 (Linux; Android 8.1.99; Build/PPP2.180412.013) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.87 Mobile Safari/537.36",
"Android Phone / Android Browser [Mobile]: Mozilla/5.0 (Linux; Android 8.0.0; SM-A520F Build/R16NW) AppleWebKit/537.36 (KHTML, like Geck",
"Android Phone / Chrome 61 [Mobile]: Mozilla/5.0 (Linux; Android 7.0; SM-G935P Build/NRD90M) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.81 Mobile Safari/537.36",
"Android Phone / Chrome 61 [Mobile]: Mozilla/5.0 (Linux; Android 7.0; SM-G935P Build/NRD90M; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/65.0.3325.109 Mobile Safari/537.36",
"Android Phone / Chrome 44 [Mobile]: Mozilla/5.0 (Linux; Android 7.0; SM-G935P Build/NRD90M; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/44.0.2403.119 Mobile Safari/537.36 ACHEETAHI/1",
"Android Phone / Chrome 55 [Mobile]: Mozilla/5.0 (Linux; Android 7.0; SM-G935P Build/NRD90M; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/55.0.2883.91 Mobile Safari/537.36 Liebao",
"Android Phone / Orca [Mobile]: Mozilla/5.0 (Linux; Android 7.0; SM-G935P Build/NRD90M; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/62.0.3202.84 Mobile Safari/537.36 [FB_IAB/Orca-Android;FBAV/144.0.0.22.136;]",
"Android Phone / Chrome 48 [Mobile]: Mozilla/5.0 (Linux; Android 6.0.1; SM-G935P Build/MMB29M; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/48.0.2564.106 Mobile Safari/537.36",
"Android Phone / Chrome 61 [Mobile]: Mozilla/5.0 (Linux; Android 7.0; SM-G935P Build/NRD90M; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/61.0.3163.98 Mobile Safari/537.36 [FB_IAB/MESSENGER;FBAV/140.0.0.43.91;]",
"Android Phone / Chrome 61 [Mobile]: Mozilla/5.0 (Linux; Android 6.0.1; SM-G935P Build/MMB29M; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/54.0.2840.85 Mobile Safari/537.36 Mobile/1 EtsyInc/4.56.0 Android/1",
"Android Phone / Chrome 61 [Mobile]: Mozilla/5.0 (Linux; Android 7.0; SM-G935P Build/NRD90M; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/57.0.2987.132 Mobile Safari/537.36",
"Android Phone / Chrome 64 [Mobile]: Mozilla/5.0 (Linux; Android 7.0; SM-G935P Build/NRD90M) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.186 Mobile Safari/537.36",
"Android Phone / Chrome 62 [Mobile]: Mozilla/5.0 (Linux; Android 7.0; SM-G935P Build/NRD90M; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/62.0.3202.84 Mobile Safari/537.36",
"Android Phone / Chrome 66 [Mobile]: Mozilla/5.0 (Linux; Android 8.1; SM-G935P Build/NRD90M) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.158 Mobile Safari/537.36",
"Android Phone / Chrome 63 [Mobile]: Mozilla/5.0 (Linux; Android 7.0; SM-G935P Build/NRD90M; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/63.0.3239.111 Mobile Safari/537.36~Real Appeal-8.0.0",
"Android Phone / Chrome 66 [Mobile]: Mozilla/5.0 (Linux; Android 8.1; SM-G935P Build/NRD90M) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.106 Mobile Safari/537.36",
"Android Phone / Opera 37.8 [Mobile]: Mozilla/5.0 (Linux; Android 6.0.1; SM-G935P Build/MMB29M) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/50.0.2661.94 Mobile Safari/537.36 OPR/37.8.2192.106015",
"Android Phone / Chrome 64 [Mobile]: Mozilla/5.0 (Linux; Android 7.0; SM-G935P Build/NRD90M) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64 Mobile Safari/537.36",
"Android Phone / Chrome 61 [Mobile]: Mozilla/5.0 (Linux; Android 7.0; SM-G935P Build/NRD90M; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/61.0.3163.98 Mobile Safari/537.36",
"Android Phone / Chrome 64 [Mobile]: Mozilla/5.0 (Linux; Android 8.0; SM-G935P Build/NRD90M) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64 Mobile Safari/537.36",
"Android Phone / Firefox 58 [Mobile]: Mozilla/5.0 (Linux; Android 8.0; SM-G935P Build/NRD90M) Gecko/20100101 Firefox/58.0.1",
"Android Phone / Chrome 64 [Mobile]: Mozilla/5.0 (Linux; Android 7.0; SM-G935P Build/NRD90M) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/59.0.3071.92 Mobile Safari/537.36",
"Android Phone / Samsung Browser 5.4 [Mobile]: Mozilla/5.0 (Linux; Android 7.0; SAMSUNG SM-G935P Build/NRD90M) AppleWebKit/537.36 (KHTML, like Gecko) SamsungBrowser/5.4 Chrome/51.0.2704.106 Mobile Safari/537.36",
"Android Phone / Samsung Browser 6.2 [Mobile]: Mozilla/5.0 (Linux; Android 7.0; SAMSUNG SM-G935P Build/NRD90M) AppleWebKit/537.36 (KHTML, like Gecko) SamsungBrowser/6.2 Chrome/56.0.2924.87 Mobile Safari/537.36",
"Android Phone / Samsung Browser 5 [Mobile]: Mozilla/5.0 (Linux; Android 7.0; SAMSUNG SM-G935P Build/NRD90M) AppleWebKit/537.36 (KHTML, like Gecko) SamsungBrowser/5.0 Chrome/51.0.2704.106 Mobile Safari/537.36",
"Android Phone / Samsung Browser 6.4 [Mobile]: Mozilla/5.0 (Linux; Android 7.0; SAMSUNG SM-G935P Build/NRD90M) AppleWebKit/537.36 (KHTML, like Gecko) SamsungBrowser/6.4 Chrome/56.0.2924.87 Mobile Safari/537.36",
"Android Phone / Chrome 61 [Mobile]: Mozilla/5.0 (Linux; Android 7.0; SM-G935P Build/NRD90M) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/61.0.3163.98 Mobile Safari/537.36",
"Android Phone / Chrome 61 [Mobile]: Mozilla/5.0 (Linux; Android 7.0; SM-G935P Build/NRD90M) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.158 Mobile Safari/537.36",
"Android Phone / Chrome 62 [Mobile]: Mozilla/5.0 (Linux; Android 7.0; SM-G935P Build/NRD90M) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202.84 Mobile Safari/537.36",
"Android Phone / Chrome 64 [Mobile]: Mozilla/5.0 (Linux; Android 7.0; SM-G935P Build/NRD90M) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.137 Mobile Safari/537.36",
"Android Phone / Chrome 59 [Mobile]: Mozilla/5.0 (Linux; Android 8.1; SM-G935P Build/NRD90M) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/59.0.3071.92 Mobile Safari/537.36",
"Android Phone / Chrome 67 [Mobile]: Mozilla/5.0 (Linux; Android 8.1.99; Qualcore 1030 4G Build/LMY47D) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.81 Safari/537.36",
"Android Phone / Chrome 66 [Mobile]: Mozilla/5.0 (Linux; Android 8.1.99; BQS_4504_Nice Build/LMY47I) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.126 Mobile Safari/537.36",
"Android Phone / Chrome 64 [[Mobile]: Mozilla/5.0 (Linux; Android 8.1.99; Huawei Y301A1 Build/HuaweiY301A1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.137 Mobile Safari/537.36",
"Android Phone / Chrome 68 [Mobile]: Mozilla/5.0 (Linux; Android 8.1.99; Build/PPP2.180412.013) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/68.0.3434.0 Mobile Safari/537.36",
"Android Phone / Internet Explorer [Mobile]: Mozilla/5.0 (Mobile; Windows Phone 8.1; Android 4.0; ARM; Trident/7.0; Touch; rv:11.0; IEMobile/11.0; NOKIA; Lumia 625) like iPhone OS 7_0_3 Mac OS X AppleWebKit/537 (KHTML, like Gecko) Mobile Safari/",
"Android Phone / Chrome 66 [Mobile]: Mozilla/5. (Android 8.) AppleWebKit/538 Chrome/66",
"Android Phone / UC Browser 10.9 [Mobile]: Mozilla/5.0 (Linux; U; Android 8.0.2; en-US; REMI GAPLE V6 Build/GETUK_OS) AppleWebKit/534.30 (KHTML, like Gecko) Version/4.0 UCBrowser/10.9.0.731 U3/0.8.0 Mobile Safari/534.30",
"Android Phone / UC Browser 10.9 [Mobile]: Mozilla/5.0 (Linux; U; Android 8.0.2; en-US; Lenovo A536 Build/KOT49H) AppleWebKit/534.30 (KHTML, like Gecko) Version/4.0 UCBrowser/10.9.0.731 U3/0.8.0 Mobile Safari/534.30",
"Android Phone / Firefox 62 [Mobile]: Mozilla/5.0 (Android 8.1.1; Mobile; rv:62.0) Gecko/62.0 Firefox/62.0",
"Android Phone / Chrome 68 [Mobile]: Mozilla/5.0 (Linux; Android 8.1.1; SM-J700M Build/NRD90M) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/68.0.3440.8 Mobile Safari/537.36",
"Android Phone / Chrome 66 [Mobile]: Mozilla/5.0 (Linux; Android 8.1.1; Nexus 5 Build/M4B30Z) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/66.0.3359.158 Mobile Safari/537.36",
"Android Phone / Firefox 62 [Mobile]: Mozilla/5.0 (Android 8.1.1; Mobile; rv:60.0.1) Gecko/60.0 Firefox/60.0.1",
"Android Phone / Chrome 67 [Mobile]: Mozilla/5.0 (Linux; Android 9; Pixel 2 XL Build/PPP4.180612.004; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/67.0.3396.87 Mobile Safari/537.36",
"Android Phone / Chrome 67 [Mobile]: Mozilla/5.0 (Linux; Android 9) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Focus/5.2 Chrome/67.0.3396.87 Mobile Safari/537.36",
"Android Phone / Chrome 61 [Mobile]: Mozilla/5.0 (Linux; Android 12.5; Marvel Xcore7 Build/LMY47I; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/61.0.3163.98 Mobile Safari/537.36",
"Android Phone / Chrome 61 [Mobile]: com.zhihu.android/Futureve/5.19.1 Mozilla/5.0 (Linux; Android 8.0.0; MHA-AL00 Build/HUAWEIMHA-AL00; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/61.0.3163.98 Mobile Safari/537.36",
"Apple iPhone / Safari 11 [Mobile]: Mozilla/5.0 (iPhone; CPU iPhone OS 11_2_5 like Mac OS X) AppleWebKit/604.5.6 (KHTML, like Gecko) Version/11.0 Mobile/15D60 Safari/604.1Android Phone / Chrome 62 [Android 7.0]: Mozilla/5.0 (Linux; Android 7.0; SM-G935P Build/NRD90M) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202 Mobile Safari/537.36",
"Android Phone / Chrome 60 [Mobile]: Mozilla/5.0 (Linux; Android 7.0; SM-G935P Build/NRD90M) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.78 Mobile Safari/537.36",
"Android Phone / Chrome 67 [Mobile]: Mozilla/5.0 (Linux; Android 9; Pixel 2 XL Build/PPP3.180510.008; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/67.0.3396.87 Mobile",
"Android Phone / Chrome 65 [Mobile]: Mozilla/5.0 (Linux; Android 7.0; SM-G935P Build/NRD90M) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/65.0.3325.162 Mobile Safari/537.36",
"Android Phone / Chrome 59 [Mobile]: Mozilla/5.0 (Linux; Android 7.0; SM-G935P Build/NRD90M) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/59.0.3071.92 Mobile Safari/537.36",
"Android Phone / Chrome 51 [Mobile]: Mozilla/5.0 (Linux; Android 6.0.1; SM-G935P Build/MMB29M; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/51.0.2704.81 Mobile Safari/537.36",
"Android Phone / Chrome 55 [Mobile]: Mozilla/5.0 (Linux; Android 6.0.1; SM-G935P Build/MMB29M; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/55.0.2883.91 Mobile Safari/537.36",
"Android Phone / Chrome 58 [Mobile]: Mozilla/5.0 (Linux; Android 6.0.1; SM-G935P Build/MMB29M) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.83 Mobile Safari/537.36",
"Android Phone / Chrome 67 [Mobile]: Mozilla/5.0 (Linux; Android 9; Pixel 2 XL Build/PPP3.180510.008; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/67.0.3396.87 Mobile",
"Android Phone / Chrome 67 [Mobile]: Mozilla/5.0 (Linux; Android 9; Pixel 2 XL Build/PPP3.180510.008; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/67.0.3396.87 Mobile",
"Android Phone / Chrome 58 [Mobile]: Mozilla/5.0 (Linux; Android 7.0; SM-G935P Build/NRD90M; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/58.0.3029.83 Mobile Safari/537.36 [FB_IAB/FB4A;FBAV/134.0.0.25.91;]",
"Android Phone / Chrome 58 [Mobile]: Mozilla/5.0 (Linux; Android 6.0.1; SM-G935P Build/MMB29M; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/50.0.2661.86 Mobile Safari/537.36",
"Android Phone / Chrome 56 [Mobile]: Mozilla/5.0 (Linux; Android 7.0; SM-G935P Build/NRD90M; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/56.0.2924.87 Mobile Safari/537.36 [FB_IAB/MESSENGER;FBAV/121.0.0.15.70;]",
"Android Phone / Chrome 62 [Mobile]: Mozilla/5.0 (Linux; Android 7.0; SM-G935P Build/NRD90M) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202.73 Mobile Safari/537.36",
"Android Phone / Chrome 58 [Mobile]: Mozilla/5.0 (Linux; Android 8.0; Nexus 6P Build/OPP3.170518.006) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.121 Mobile Safari/537.36",
"Android Phone / Android Browser [Mobile]: Mozilla/5.0 (Linux; U; Android 8.1.0; zh-cn; Redmi Note 5 Build/OPM1.171019.011) AppleWebKit/533.1 (KHTML, like Gecko) Mobile Safari/533.1",
"Android Phone / Android Browser [Mobile]: Mozilla/5.0 (Linux; U; Android 8.1.0; zh-cn; CLT-AL01 Build/HUAWEICLT-AL01) AppleWebKit/533.1 (KHTML, like Gecko) Mobile Safari/533.1",
"Android Phone / Chrome 58 [Mobile]: Mozilla/5.0 (Linux; Android 8.0.0; Pixel XL Build/OPP3.170518.006) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/59.0.3071.125 Mobile Safari/537.36",
"Android Phone / Android Browser [Mobile]: Mozilla/5.0 (Linux; U; Android 8.1.0; zh-cn; ONEPLUS A5010 Build/OPM1.171019.011) AppleWebKit/533.1 (KHTML, like Gecko) Mobile Safari/533.1",
"Android Phone / Chrome 64 [Mobile]: Mozilla/5.0 (Linux; Android 8.0.0; SM-G960F Build/R16NW) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/64.0.3282.137 Mobile Safari/537.36",
"Android Phone / Chrome 60 [Mobile]: Mozilla/5.0 (Linux; Android 8.0.0; Pixel Build/OPP3.170518.006) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/60.0.3112.66 Mobile Safari/537.36",
"Android Phone / Android Browser [Mobile]: Mozilla/5.0 (Linux; U; Android 8.1.0; zh-cn; vivo X21A Build/OPM1.171019.011) AppleWebKit/533.1 (KHTML, like Gecko) Mobile Safari/533.1",
"Android Phone / Chrome 67 [Mobile]: Mozilla/5.0 (Linux; Android 9; Pixel 2 XL Build/PPP3.180510.008; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Chrome/67.0.3396.87 Mobile Safari/537.36",
"Android Phone / Chrome 62 [Mobile]: Mozilla/5.0 (Linux; Android 8.0.0; Nexus 6P Build/OPR5.170623.011) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/62.0.3202.84 Mobile Safari/537.36");


?>