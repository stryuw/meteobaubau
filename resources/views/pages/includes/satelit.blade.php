<section class="space--xxs">
    <a id="observasi" class="in-page-link"></a>
    <div class="container">
        <div class="row text-block">
            <div class="col-md-12">
                <h3><strong>Observasi Cuaca dan Iklim</strong></h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <article class="feature feature-1">
                    <a href="#" class="block"> <img alt="Image" class="img--fullwidth cover-gambar" src="https://cdn.bmkg.go.id/DataMKG/MEWS/angin/streamline_d1.jpg"> </a>
                    <div class="p-2"> <span> {{$hari->addDay(1)->format('d M Y')}}</span>
                        <h5>Prakiraan Angin dan Cuaca</h5>
                    </div>
                </article>
            </div>
            <div class="col-md-3">
                <article class="feature feature-1">
                    <a href="#" class="block"> <img alt="Image" class="img--fullwidth cover-gambar" src="https://cdn.bmkg.go.id/DataMKG/MEWS/maritim/gelombang_maritim.png"> </a>
                    <div class="p-2"> <span> {{date('d M Y')}}</span>
                        <h5>Prakiraan Tinggi Gelombang</h5>
                    </div>
                </article>
            </div>
            <div class="col-md-3">
                <article class="feature feature-1">
                    <a href="#" class="block"> <img alt="Image" class="img--fullwidth cover-gambar" src="https://inderaja.bmkg.go.id/IMAGE/HIMA/H08_EH_Sultra.png"> </a>
                    <div class="p-2"> <span> {{date('d M Y - h:i') . 'UTC'}}</span>
                        <h5>Citra Satelit Himawari EH</h5>
                    </div>
                </article>
            </div>
            <div class="col-md-3">
                <article class="feature feature-1">
                    <a href="#" class="block"> <img alt="Image" class="img--fullwidth cover-gambar" src="https://cdn.bmkg.go.id/DataMKG/MEWS/ibf/Timur_d2.jpg"> </a>
                    <div class="p-2"> <span> {{$hari->format('d M Y')}}</span>
                        <h5>Prakiraan Cuaca Berbasis Dampak</h5>
                    </div>
                </article>
            </div>
            <div class="col-md-3">
                <article class="feature feature-1">
                    <a href="#" class="block"> <img alt="Image" class="img--fullwidth cover-gambar" src="https://cdn.bmkg.go.id/DataMKG/CEWS/pch/pch.bulan.1.cond1.png"> </a>
                    <div class="p-2"> <span> {{ $hari->format('M Y') }}</span>
                        <h5>Prakiraan Curah Hujan</h5>
                    </div>
                </article>
            </div>
            <div class="col-md-3">
                <article class="feature feature-1">
                    <a href="#" class="block"> <img alt="Image" class="img--fullwidth cover-gambar" src="https://cdn.bmkg.go.id/DataMKG/MEWS/spartan/36_indonesia_ffmc_01.png"> </a>
                    <div class="p-2"> <span> {{ $hari->format('d M Y') }}</span>
                        <h5>Potensi Kebakaran Hutan</h5>
                    </div>
                </article>
            </div>
            <div class="col-md-3">
                <article class="feature feature-1">
                    <a href="#" class="block"> <img alt="Image" class="img--fullwidth cover-gambar" src="http://satelit.bmkg.go.id/Trajektori/Asap.PNG"> </a>
                    <div class="p-2"> <span> {{date('d M Y - h:i') . 'UTC'}}</span>
                        <h5>Citra Sebaran Asap Kebakaran Hutan</h5>
                    </div>
                </article>
            </div>
            <div class="col-md-3">
                <article class="feature feature-1">
                    <a href="#" class="block"> <img alt="Image" class="img--fullwidth cover-gambar" src="https://inderaja.bmkg.go.id/Radar/KEND_SingleLayerCRefQC.png"> </a>
                    <div class="p-2"> <span> {{date('d M Y - h:i') . 'UTC'}}</span>
                        <h5>Citra Radar Kendari</h5>
                    </div>
                </article>
            </div>
        </div>
    </div>
</section>