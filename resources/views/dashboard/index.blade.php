@extends('layouts.app')
<style>
    .hero{
        position: relative;
        margin: 0;
        top: 0;
        left: 0;
        height: 100%;
        width: 100%;
        background-position: center;
        background-size: cover;
        background-repeat: no-repeat;
        background-image: linear-gradient(
            rgba(195, 194, 194, 0.4),
            rgba(245, 245, 245, 0.325)
        ),url(/assets/img/grahare.jpg);
    }
    .hero-content{
        justify-content: center;
        display: inline-block;
        align-items: center;
        backdrop-filter: blur(3px);
        padding: 50vh;
        max-height: 100%;
        max-width: 100%;
    }
    .hero-text{
        display: inline-block;
        align-items: center;
    }
    .second-text p{
        font-size: 10px;
        text-align: center;
    }
	.info-boxes {
		display: flex;
        width: 100%;
        grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
        grid-gap: 24px;
        margin-bottom: 100px;
        justify-content: center;
        align-items: center;
	}

    .info-box {
        background: white;
        height: 160px;
        display: flex;
        align-items: center;
        justify-content: flex-start;
        padding: 0 3em;
        border: 1px solid @bgDark;
        border-radius: 5px;
    }
			
    .box-icon {
        svg {
            display: block;
            width: 48px;
            height: 48px;
            
            path,
            circle {
                fill: @colorLight;
            }
        }
    }
			
    .box-content {			
        padding-left: 1.25em;
        white-space: nowrap;
        
        .big {
            display: block;
            font-size: 2em;
            line-height: 150%;
            color: @colorDark;
        }
    }
</style>
@section('content')
<div class="hero">
    <div class="hero-content">
        <div class="hero-text">
            <h1>{{ auth()->user()->name ?? 'Guest' }}, Selamat Datang di </h1><h2>PT. Rekayasa Engineering</h2>
            <p class="second-text">Your Engineering Partner.</p>
        </div>
        <ul class="info-boxes">
            <li class="info-box">
                <div class="box-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M21 20V4a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1v16a1 1 0 0 0 1 1h16a1 1 0 0 0 1-1zm-2-1H5V5h14v14z"/><path d="M10.381 12.309l3.172 1.586a1 1 0 0 0 1.305-.38l3-5-1.715-1.029-2.523 4.206-3.172-1.586a1.002 1.002 0 0 0-1.305.38l-3 5 1.715 1.029 2.523-4.206z"/></svg>
                </div>
                
                <div class="box-content">
                    <span class="big">{{ $totalProduk }}</span>
                    Total Produk
                </div>
            </li>
            <li class="info-box">
                <div class="box-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M21 20V4a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1v16a1 1 0 0 0 1 1h16a1 1 0 0 0 1-1zm-2-1H5V5h14v14z"/><path d="M10.381 12.309l3.172 1.586a1 1 0 0 0 1.305-.38l3-5-1.715-1.029-2.523 4.206-3.172-1.586a1.002 1.002 0 0 0-1.305.38l-3 5 1.715 1.029 2.523-4.206z"/></svg>
                </div>
                
                <div class="box-content">
                    <span class="big">~{{ round($totalStok, 2) }}</span>
                    Rata Rata Stok Tersedia
                </div>
            </li>
            <li class="info-box">
                <div class="box-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M21 20V4a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1v16a1 1 0 0 0 1 1h16a1 1 0 0 0 1-1zm-2-1H5V5h14v14z"/><path d="M10.381 12.309l3.172 1.586a1 1 0 0 0 1.305-.38l3-5-1.715-1.029-2.523 4.206-3.172-1.586a1.002 1.002 0 0 0-1.305.38l-3 5 1.715 1.029 2.523-4.206z"/></svg>
                </div>
                
                <div class="box-content">
                    <span class="big">{{ $totalPickup }}</span>
                    Total Pengambilan
                </div>
            </li>
            <li class="info-box">
                <div class="box-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M21 20V4a1 1 0 0 0-1-1H4a1 1 0 0 0-1 1v16a1 1 0 0 0 1 1h16a1 1 0 0 0 1-1zm-2-1H5V5h14v14z"/><path d="M10.381 12.309l3.172 1.586a1 1 0 0 0 1.305-.38l3-5-1.715-1.029-2.523 4.206-3.172-1.586a1.002 1.002 0 0 0-1.305.38l-3 5 1.715 1.029 2.523-4.206z"/></svg>
                </div>
                
                <div class="box-content">
                    <span class="big">{{ $totalUser }}</span>
                    Total User
                </div>
            </li>
        </ul>
    </div>
</div>
@endsection


