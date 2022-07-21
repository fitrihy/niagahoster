@extends('layouts.app')

@section('content')
<style>
    @font-face {
        font-family: MontserratRegular;
        src: url("/assets/fonts/montserrat/Montserrat-Regular.otf") format("opentype");
    }
</style>
<div class="kt-portlet kt-portlet--mobile">
    <div class="kt-portlet__body form">
        <div class="kt-portlet__body">
            <div class="form-group row" style="padding-top:70px">
                <div class="col-lg-6">
                    <h1><b>PHP Hosting</b></h1>
                    <h2>Cepat, handal, penuh dengan modul PHP yang anda butuhkan</h2>
                    <p>
                        Solusi PHP untuk performa yang lebih cepat.
                        Konsumsi memori yang lebih rendah.
                        Support PHP 5.3, PHP 5.4, PHP 5.5, PHP 5.6, PHP 7
                        Fitur Enkripsi IonCube dan Zend Guard Loaders
                    </p>
                </div>
                <div class="col-lg-6" style="text-align:center;">
                    <img alt="Logo" src="/assets/svg/illustration banner PHP hosting-01.svg" height="200px" />
                </div>
            </div>
            <div class="form-group row" style="padding-top:100px">
                <div class="col-lg-4" style="text-align:center;">
                    <img alt="Logo" src="/assets/svg/illustration-banner-PHP-zenguard01.svg" width="300px" height="200px" /><br>
                    PHP Zen Guard Loader
                </div>
                <div class="col-lg-4" style="text-align:center;">
                    <img alt="Logo" src="/assets/svg/icon-composer.svg" width="300px" height="200px" /><br>
                    PHP Composer
                </div>
                <div class="col-lg-4" style="text-align:center;">
                    <img alt="Logo" src="/assets/svg/icon-php-hosting-ioncube.svg" width="300px" height="200px" /><br>
                    PHP ionCube Loader
                </div>
            </div>
            <div class="form-group row" style="padding-top:120px">
                <div class="col-lg-12" style="text-align:center;">
                    <h2><b>Paket Hosting Singapura yang Tepat</b></h2>
                </div>
                <div class="col-lg-12" style="text-align:center;">
                    <h2>Diskon 40% + Domain dan SSL Gratis untuk Anda</h2>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-lg-12" style="text-align:center;">
                    <div class="table-responsive">
                        <table id="dataTableExample" class="table">
                            <tbody>
                                <tr>
                                    @foreach($dataPrice as $key => $price)
                                    <td><h4><b>{{ $price->title }}</b></h4></td>
                                    @endforeach
                                </tr>
                                <tr>
                                    @foreach($dataPrice as $key => $price)
                                    <td>
                                        <s>Rp {{ number_format($price->price) }}</s>
                                        <br>
                                        <h4>Rp <b>{{ number_format($price->discount_price) }}</b>/bln</h4>
                                    </td>
                                    @endforeach
                                </tr>
                                <tr>
                                    @foreach($dataPrice as $key => $price)
                                    <td>
                                        <b>{{ number_format($price->jumlah_user) }}</b> Pengguna Terdaftar
                                    </td>
                                    @endforeach
                                </tr>
                                <tr>
                                    @foreach($dataPrice as $key => $price)
                                    <td>
                                        @php 
                                            $dataFeature = \App\Models\Feature::where('price_id', $price->id)->get();
                                        @endphp
                                        @foreach($dataFeature as $key => $feature)
                                            {!! $feature->feature !!} <br>
                                        @endforeach
                                        <button type="button" class="btn btn-primary btn-md rounded-pill mt-2">{{ $price->btn_title }}</button>
                                    </td>
                                    @endforeach
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="form-group row" style="padding-top:50px">
                <div class="col-lg-12" style="text-align:center;">
                    <h2><b>Powerful dengan limit PHP yang lebih besar</b></h2>
                </div>
            </div>
            
            <div class="form-group row">
                <div class="col-lg-6" style="text-align:center;">
                    <div class="table-responsive">
                        <table id="dataTableExample" class="table">
                            <tbody>
                                <tr>
                                    <td>
                                        <span class="svg-icon svg-icon-primary svg-icon-2x"><!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-05-14-112058/theme/html/demo8/dist/../src/media/svg/icons/Navigation/Check.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <polygon points="0 0 24 0 24 24 0 24"/>
                                                <path d="M6.26193932,17.6476484 C5.90425297,18.0684559 5.27315905,18.1196257 4.85235158,17.7619393 C4.43154411,17.404253 4.38037434,16.773159 4.73806068,16.3523516 L13.2380607,6.35235158 C13.6013618,5.92493855 14.2451015,5.87991302 14.6643638,6.25259068 L19.1643638,10.2525907 C19.5771466,10.6195087 19.6143273,11.2515811 19.2474093,11.6643638 C18.8804913,12.0771466 18.2484189,12.1143273 17.8356362,11.7474093 L14.0997854,8.42665306 L6.26193932,17.6476484 Z" fill="#000000" fill-rule="nonzero" transform="translate(11.999995, 12.000002) rotate(-180.000000) translate(-11.999995, -12.000002) "/>
                                            </g>
                                        </svg><!--end::Svg Icon--></span>
                                        max excecution time 300s</td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="svg-icon svg-icon-primary svg-icon-2x"><!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-05-14-112058/theme/html/demo8/dist/../src/media/svg/icons/Navigation/Check.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <polygon points="0 0 24 0 24 24 0 24"/>
                                                <path d="M6.26193932,17.6476484 C5.90425297,18.0684559 5.27315905,18.1196257 4.85235158,17.7619393 C4.43154411,17.404253 4.38037434,16.773159 4.73806068,16.3523516 L13.2380607,6.35235158 C13.6013618,5.92493855 14.2451015,5.87991302 14.6643638,6.25259068 L19.1643638,10.2525907 C19.5771466,10.6195087 19.6143273,11.2515811 19.2474093,11.6643638 C18.8804913,12.0771466 18.2484189,12.1143273 17.8356362,11.7474093 L14.0997854,8.42665306 L6.26193932,17.6476484 Z" fill="#000000" fill-rule="nonzero" transform="translate(11.999995, 12.000002) rotate(-180.000000) translate(-11.999995, -12.000002) "/>
                                            </g>
                                        </svg><!--end::Svg Icon--></span>
                                        max excecution time 300s</td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="svg-icon svg-icon-primary svg-icon-2x"><!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-05-14-112058/theme/html/demo8/dist/../src/media/svg/icons/Navigation/Check.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <polygon points="0 0 24 0 24 24 0 24"/>
                                                <path d="M6.26193932,17.6476484 C5.90425297,18.0684559 5.27315905,18.1196257 4.85235158,17.7619393 C4.43154411,17.404253 4.38037434,16.773159 4.73806068,16.3523516 L13.2380607,6.35235158 C13.6013618,5.92493855 14.2451015,5.87991302 14.6643638,6.25259068 L19.1643638,10.2525907 C19.5771466,10.6195087 19.6143273,11.2515811 19.2474093,11.6643638 C18.8804913,12.0771466 18.2484189,12.1143273 17.8356362,11.7474093 L14.0997854,8.42665306 L6.26193932,17.6476484 Z" fill="#000000" fill-rule="nonzero" transform="translate(11.999995, 12.000002) rotate(-180.000000) translate(-11.999995, -12.000002) "/>
                                            </g>
                                        </svg><!--end::Svg Icon--></span>
                                        php memory limit 1024 MB</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-lg-6" style="text-align:center;">
                    <div class="table-responsive">
                        <table id="dataTableExample" class="table">
                            <tbody>
                                <tr>
                                    <td>
                                        <span class="svg-icon svg-icon-primary svg-icon-2x"><!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-05-14-112058/theme/html/demo8/dist/../src/media/svg/icons/Navigation/Check.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <polygon points="0 0 24 0 24 24 0 24"/>
                                                <path d="M6.26193932,17.6476484 C5.90425297,18.0684559 5.27315905,18.1196257 4.85235158,17.7619393 C4.43154411,17.404253 4.38037434,16.773159 4.73806068,16.3523516 L13.2380607,6.35235158 C13.6013618,5.92493855 14.2451015,5.87991302 14.6643638,6.25259068 L19.1643638,10.2525907 C19.5771466,10.6195087 19.6143273,11.2515811 19.2474093,11.6643638 C18.8804913,12.0771466 18.2484189,12.1143273 17.8356362,11.7474093 L14.0997854,8.42665306 L6.26193932,17.6476484 Z" fill="#000000" fill-rule="nonzero" transform="translate(11.999995, 12.000002) rotate(-180.000000) translate(-11.999995, -12.000002) "/>
                                            </g>
                                        </svg><!--end::Svg Icon--></span>
                                        post maxsize 128MB</td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="svg-icon svg-icon-primary svg-icon-2x"><!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-05-14-112058/theme/html/demo8/dist/../src/media/svg/icons/Navigation/Check.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <polygon points="0 0 24 0 24 24 0 24"/>
                                                <path d="M6.26193932,17.6476484 C5.90425297,18.0684559 5.27315905,18.1196257 4.85235158,17.7619393 C4.43154411,17.404253 4.38037434,16.773159 4.73806068,16.3523516 L13.2380607,6.35235158 C13.6013618,5.92493855 14.2451015,5.87991302 14.6643638,6.25259068 L19.1643638,10.2525907 C19.5771466,10.6195087 19.6143273,11.2515811 19.2474093,11.6643638 C18.8804913,12.0771466 18.2484189,12.1143273 17.8356362,11.7474093 L14.0997854,8.42665306 L6.26193932,17.6476484 Z" fill="#000000" fill-rule="nonzero" transform="translate(11.999995, 12.000002) rotate(-180.000000) translate(-11.999995, -12.000002) "/>
                                            </g>
                                        </svg><!--end::Svg Icon--></span>
                                        upload file maxsize 128 MB</td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="svg-icon svg-icon-primary svg-icon-2x"><!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-05-14-112058/theme/html/demo8/dist/../src/media/svg/icons/Navigation/Check.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <polygon points="0 0 24 0 24 24 0 24"/>
                                                <path d="M6.26193932,17.6476484 C5.90425297,18.0684559 5.27315905,18.1196257 4.85235158,17.7619393 C4.43154411,17.404253 4.38037434,16.773159 4.73806068,16.3523516 L13.2380607,6.35235158 C13.6013618,5.92493855 14.2451015,5.87991302 14.6643638,6.25259068 L19.1643638,10.2525907 C19.5771466,10.6195087 19.6143273,11.2515811 19.2474093,11.6643638 C18.8804913,12.0771466 18.2484189,12.1143273 17.8356362,11.7474093 L14.0997854,8.42665306 L6.26193932,17.6476484 Z" fill="#000000" fill-rule="nonzero" transform="translate(11.999995, 12.000002) rotate(-180.000000) translate(-11.999995, -12.000002) "/>
                                            </g>
                                        </svg><!--end::Svg Icon--></span>
                                        max input vars 2500</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="form-group row" style="padding-top:50px">
                <div class="col-lg-12" style="text-align:center;">
                    <h2>Semua Paket Hosting Sudah Termasuk</h2>
                </div>
            </div>
            
            <div class="form-group row">
                <div class="col-lg-4" style="text-align:center;">
                    <img alt="Logo" src="/assets/svg/icon PHP Hosting_PHP Semua Versi.svg" height="100px" /><br>
                    <b>PHP Semua Versi</b><br>
                    Pilih mulai dari versi PHP 5.3 s/d PHP 7.<br>Ubah sesuka Anda!
                </div>
                <div class="col-lg-4" style="text-align:center;">
                    <img alt="Logo" src="/assets/svg/icon PHP Hosting_My SQL.svg" height="100px" /><br>
                    <b>MySql Versi 5.6</b><br>
                    Nikmati MySql Versi terbaru, tercepat dan kaya akan fitur.
                </div>
                <div class="col-lg-4" style="text-align:center;">
                    <img alt="Logo" src="/assets/svg/icon PHP Hosting_CPanel.svg" height="100px" /><br>
                    <b>Panel Hosting CPanel</b><br>
                    Kelola website dengan panel canggih yang familiar di Hati Anda.
                </div>
            </div>
            <div class="form-group row">
                <div class="col-lg-4" style="text-align:center;">
                    <img alt="Logo" src="/assets/svg/icon PHP Hosting_garansi uptime.svg" height="100px" /><br>
                    <b>Garansi Uptime 99.9%</b><br>
                    Data center yang mendukung kelangsungan website anda 24/7
                </div>
                <div class="col-lg-4" style="text-align:center;">
                    <img alt="Logo" src="/assets/svg/icon PHP Hosting_InnoDB.svg" height="100px" /><br>
                    <b>Database InnoDB Unlmited</b><br>
                    Jumlah dan ukuran database yang tumbuh sesuai kebutuhan Anda
                </div>
                <div class="col-lg-4" style="text-align:center;">
                    <img alt="Logo" src="/assets/svg/icon PHP Hosting_My SQL remote.svg" height="100px" /><br>
                    <b>Wildcard Remote MySql</b><br>
                    Mendukung s/d 25 max_user_connections dan 100 max_connections
                </div>
            </div>
            
            <div class="form-group row" style="padding-top:50px">
                <div class="col-lg-12" style="text-align:center;">
                    <h2>Mendukung penuh framework laravel</h2>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-lg-6">
                    <p>
                        Tak perlu gunakan dedicated server ataupun VPS yang mahal. Layanan PHP hosting murah kami mendukung penuh framework favorit Anda
                    </p>
                    <span class="svg-icon svg-icon-primary svg-icon-2x"><!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-05-14-112058/theme/html/demo8/dist/../src/media/svg/icons/Navigation/Check.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <polygon points="0 0 24 0 24 24 0 24"/>
                            <path d="M6.26193932,17.6476484 C5.90425297,18.0684559 5.27315905,18.1196257 4.85235158,17.7619393 C4.43154411,17.404253 4.38037434,16.773159 4.73806068,16.3523516 L13.2380607,6.35235158 C13.6013618,5.92493855 14.2451015,5.87991302 14.6643638,6.25259068 L19.1643638,10.2525907 C19.5771466,10.6195087 19.6143273,11.2515811 19.2474093,11.6643638 C18.8804913,12.0771466 18.2484189,12.1143273 17.8356362,11.7474093 L14.0997854,8.42665306 L6.26193932,17.6476484 Z" fill="#000000" fill-rule="nonzero" transform="translate(11.999995, 12.000002) rotate(-180.000000) translate(-11.999995, -12.000002) "/>
                        </g>
                    </svg><!--end::Svg Icon--></span>
                    Install Laravel <strong>1 klik</strong> dengan Softaculous Installer.<br>
                    <span class="svg-icon svg-icon-primary svg-icon-2x"><!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-05-14-112058/theme/html/demo8/dist/../src/media/svg/icons/Navigation/Check.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <polygon points="0 0 24 0 24 24 0 24"/>
                            <path d="M6.26193932,17.6476484 C5.90425297,18.0684559 5.27315905,18.1196257 4.85235158,17.7619393 C4.43154411,17.404253 4.38037434,16.773159 4.73806068,16.3523516 L13.2380607,6.35235158 C13.6013618,5.92493855 14.2451015,5.87991302 14.6643638,6.25259068 L19.1643638,10.2525907 C19.5771466,10.6195087 19.6143273,11.2515811 19.2474093,11.6643638 C18.8804913,12.0771466 18.2484189,12.1143273 17.8356362,11.7474093 L14.0997854,8.42665306 L6.26193932,17.6476484 Z" fill="#000000" fill-rule="nonzero" transform="translate(11.999995, 12.000002) rotate(-180.000000) translate(-11.999995, -12.000002) "/>
                        </g>
                    </svg><!--end::Svg Icon--></span>
                    Mendukung ekstensi <strong>PHP MCrypt</strong>, <strong>phar</strong>, <strong>mbstring</strong>, <strong>json</strong>, dan <strong>fileinfo</strong>.<br>
                    <span class="svg-icon svg-icon-primary svg-icon-2x"><!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-05-14-112058/theme/html/demo8/dist/../src/media/svg/icons/Navigation/Check.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <polygon points="0 0 24 0 24 24 0 24"/>
                            <path d="M6.26193932,17.6476484 C5.90425297,18.0684559 5.27315905,18.1196257 4.85235158,17.7619393 C4.43154411,17.404253 4.38037434,16.773159 4.73806068,16.3523516 L13.2380607,6.35235158 C13.6013618,5.92493855 14.2451015,5.87991302 14.6643638,6.25259068 L19.1643638,10.2525907 C19.5771466,10.6195087 19.6143273,11.2515811 19.2474093,11.6643638 C18.8804913,12.0771466 18.2484189,12.1143273 17.8356362,11.7474093 L14.0997854,8.42665306 L6.26193932,17.6476484 Z" fill="#000000" fill-rule="nonzero" transform="translate(11.999995, 12.000002) rotate(-180.000000) translate(-11.999995, -12.000002) "/>
                        </g>
                    </svg><!--end::Svg Icon--></span>
                    Tersedia <strong>Composer</strong> dan <strong>SSH</strong> untuk menginstal packages pilihan Anda.<br>
                    <p><small>Nb. Composer dan SSH hanya tersedia pada paket Personal dan Bisnis</small></p>
                    <button type="button" class="btn btn-primary btn-lg rounded-pill">Pilih Hosting Anda</button>
                </div>
                <div class="col-lg-6" style="text-align:center;">
                    <img alt="Logo" src="/assets/svg/illustration banner support laravel hosting.svg" height="300px" />
                </div>
            </div>
            
            <div class="form-group row" style="padding-top:70px;">
                <div class="col-lg-12" style="text-align:center;">
                    <h2>Modul Lengkap untuk Menjalankan Aplikasi PHP Anda.</h2>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-lg-2">
                </div>
                <div class="col-lg-8">
                    <div class="form-group row" style="margin-left:50px;">
                        <div class="col-lg-3">
                            <ul class="kt-nav">
                                <li>IcePHP</li>
                                <li>apc</li>
                                <li>apcu</li>
                                <li>apm</li>
                                <li>ares</li>
                                <li>bcmath</li>
                                <li>bcompiler</li>
                                <li>big_int</li>
                                <li>bitset</li>
                                <li>bloomy</li>
                                <li>bz2_filter</li>
                                <li>clamav</li>
                                <li>coin_acceptor</li>
                                <li>crack</li>
                                <li>dba</li>
                            </ul>
                        </div>
                        <div class="col-lg-3">
                            <ul class="kt-nav">
                                <li>IcePHP</li>
                                <li>apc</li>
                                <li>apcu</li>
                                <li>apm</li>
                                <li>ares</li>
                                <li>bcmath</li>
                                <li>bcompiler</li>
                                <li>big_int</li>
                                <li>bitset</li>
                                <li>bloomy</li>
                                <li>bz2_filter</li>
                                <li>clamav</li>
                                <li>coin_acceptor</li>
                                <li>crack</li>
                                <li>dba</li>
                            </ul>
                        </div>
                        <div class="col-lg-3">
                            <ul class="kt-nav">
                                <li>IcePHP</li>
                                <li>apc</li>
                                <li>apcu</li>
                                <li>apm</li>
                                <li>ares</li>
                                <li>bcmath</li>
                                <li>bcompiler</li>
                                <li>big_int</li>
                                <li>bitset</li>
                                <li>bloomy</li>
                                <li>bz2_filter</li>
                                <li>clamav</li>
                                <li>coin_acceptor</li>
                                <li>crack</li>
                                <li>dba</li>
                            </ul>
                        </div>
                        <div class="col-lg-3">
                            <ul class="kt-nav">
                                <li>IcePHP</li>
                                <li>apc</li>
                                <li>apcu</li>
                                <li>apm</li>
                                <li>ares</li>
                                <li>bcmath</li>
                                <li>bcompiler</li>
                                <li>big_int</li>
                                <li>bitset</li>
                                <li>bloomy</li>
                                <li>bz2_filter</li>
                                <li>clamav</li>
                                <li>coin_acceptor</li>
                                <li>crack</li>
                                <li>dba</li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <div class="col-lg-12" style="text-align:center;">
                            <button type="button" class="btn btn-outline-dark btn-lg rounded-pill"><strong>Selengkapnya</strong></button>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="form-group row" style="padding-top:50px;">
                <div class="col-lg-6">
                    <h3>Linux Hosting yang Stabil dengan Teknologi LVE</h3>
                    <p>SuperMicro <b>Intel Xeon 24-Cores</b> server dengan RAM <b>128 GB</b> dan teknologi <b>LVE CloudLinux</b> untuk stabilitas server Anda. Dilengkapi dengan <b>SSD</b> untuk kecepatan <b>MySQL</b> dan caching, Apache load balancer berbasis LiteSpeed Technologies, <b>CageFS</b> security, <b>RAID-10</b> protection dan auto backup untuk keamanan website PHP Anda.</p>
                    <button type="button" class="btn btn-primary btn-lg rounded-pill mt-3">Pilih Hosting Anda</button>
                </div>
                <div class="col-lg-6" style="text-align:center;">
                    <img alt="Logo" src="/assets/images/Image support.png" height="300px" />
                </div>
            </div>
            
            <div class="row" style="background:#f7f7f7;padding:10px;margin-top:50px;">
                <div class="col-lg-6">
                    <p>Bagikan jika Anda menyukai halaman ini</p>
                </div>
                <div class="col-lg-6" style="text-align:center;">
                </div>
            </div>

            <div class="row" style="background:#00a2f3;color:white;padding:80px;">
                <div class="col-lg-10">
                    <h1>Perlu <b>Bantuan?</b> Hubungi kami : <b>0274-5305505</b></h1>
                </div>
                <div class="col-lg-2" style="text-align:right;">
                    <button type="button" class="btn btn-primary btn-lg rounded-pill">Live Chat</button>
                </div>
            </div>
            
            <div class="row" style="background:#303030;color:white;padding:30px;">
                <div class="col-lg-3">
                    <b>Hubungi Kami</b><br>
                    0274-123456<br>
                    Senin-Minggu<br>
                    24 jam non stop<br><br>
                    Jl. selokan mataram monjali<br>
                    karangjati MT 1/304<br>
                    Sindudi, Mlati, Sleman<br>
                    Yogyakarta 55284<br>
                </div>
                <div class="col-lg-3">
                    <b>Layanan</b><br>
                    0274-123456<br>
                    Senin-Minggu<br>
                    24 jam non stop<br><br>
                    Jl. selokan mataram monjali<br>
                    karangjati MT 1/304<br>
                    Sindudi, Mlati, Sleman<br>
                    Yogyakarta 55284<br>
                </div>
                <div class="col-lg-3">
                    <b>Service Hosting</b><br>
                    0274-123456<br>
                    Senin-Minggu<br>
                    24 jam non stop<br><br>
                    Jl. selokan mataram monjali<br>
                    karangjati MT 1/304<br>
                    Sindudi, Mlati, Sleman<br>
                    Yogyakarta 55284<br>
                </div>
                <div class="col-lg-3">
                    <b>Tutorial</b><br>
                    0274-123456<br>
                    Senin-Minggu<br>
                    24 jam non stop<br><br>
                    Jl. selokan mataram monjali<br>
                    karangjati MT 1/304<br>
                    Sindudi, Mlati, Sleman<br>
                    Yogyakarta 55284<br>
                </div>
            </div>
            
            <div class="row" style="background:#303030;color:white;padding:30px;">
                <div class="col-lg-3">
                    <b>Tentang Kami</b><br>
                    0274-123456<br>
                    Senin-Minggu<br>
                    24 jam non stop<br><br>
                    Jl. selokan mataram monjali<br>
                    karangjati MT 1/304<br>
                    Sindudi, Mlati, Sleman<br>
                    Yogyakarta 55284<br>
                </div>
                <div class="col-lg-3">
                    <b>Kenapa Pilih Niagahoster?</b><br>
                    0274-123456<br>
                    Senin-Minggu<br>
                    24 jam non stop<br><br>
                    Jl. selokan mataram monjali<br>
                    karangjati MT 1/304<br>
                    Sindudi, Mlati, Sleman<br>
                    Yogyakarta 55284<br>
                </div>
                <div class="col-lg-3">
                    <b>Newsletter</b><br>
                    0274-123456<br>
                    Senin-Minggu<br>
                    24 jam non stop<br><br>
                    Jl. selokan mataram monjali<br>
                    karangjati MT 1/304<br>
                    Sindudi, Mlati, Sleman<br>
                    Yogyakarta 55284<br>
                </div>
                <div class="col-lg-3">
                </div>
            </div>
            
            <div class="row" style="background:#303030;color:white;padding:30px;">
                <div class="col-lg-12">
                    <p><b>PEMBAYARAN</b></p>
                </div>
                <div class="col-lg-12">
                    Aktivasi Instan dengan epayment. Hosting dan domain langsung aktif!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('addafterjs')
@endsection
