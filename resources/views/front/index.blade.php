@extends('layouts.app')
@section('title', 'Home')
@section('content')

        
<div id="page-wrapper">

 
    

    <!-- Banner -->
    <section id="banner">
        <div class="inner">
        <a href="#" class="image"><img src="{{ asset('assets/images/wb.png') }}" alt="pt"></a>

            <h2>Wisata Banjarmasin</h2>
            <p>Sistem informasi pariwisata "Wisata Banjarmasin" dirancang untuk menjadi solusi digital yang efektif dalam memberikan informasi lengkap, terorganisir, dan interaktif mengenai destinasi wisata di Kota Banjarmasin.</p>
        </div>
    </section>

    <!-- Wrapper -->
    <section id="wrapper">

        <!-- One -->
        <section id="one" class="wrapper spotlight style1">
            <div class="inner">
                <a href="#" class="image"><img src="{{ asset('assets/images/pt.png') }}" alt="pt"></a>
                <div class="content">
                    <h2 class="major">Wisata Air dan Sungai</h2>
                    <p>Sebagai "Kota Seribu Sungai," Banjarmasin terkenal dengan wisata airnya, terutama Pasar Terapung Lok Baintan dan Pasar Terapung Muara Kuin, di mana pedagang dan pembeli bertransaksi di atas perahu. Pengunjung juga dapat menikmati susur Sungai Martapura untuk merasakan kehidupan masyarakat yang erat kaitannya dengan sungai.</p>
                    <a href="#" class="special">Selengkapnya</a>
                </div>
            </div>
        </section>

        <!-- Two -->
        <section id="two" class="wrapper alt spotlight style2">
            <div class="inner">
                <a href="#" class="image"><img src="{{ asset('assets/images/wsk.png') }}" alt="Pic 02"></a>
                <div class="content">
                    <h2 class="major">Wisata Budaya dan Sejarah</h2>
                    <p>Banjarmasin menyimpan banyak peninggalan sejarah, seperti Museum Wasaka yang menampilkan perjuangan rakyat Kalimantan Selatan dan Masjid Sultan Suriansyah, masjid tertua di Banjarmasin dengan arsitektur khas Banjar. Tempat-tempat ini memberikan wawasan tentang sejarah dan budaya lokal.</p>
                    <a href="#" class="special">Selengkapnya</a>
                </div>
            </div>
        </section>

        <!-- Three -->
        <section id="three" class="wrapper spotlight style3">
            <div class="inner">
                <a href="#" class="image"><img src="{{ asset('assets/images/k.jpg') }}" alt="Pic 03"></a>
                <div class="content">
                    <h2 class="major">Wisata Kuliner</h2>
                    <p>
                    Wisata kuliner di Banjarmasin sangat khas, seperti soto Banjar, ketupat kandangan, dan kue-kue tradisional yang dijual di berbagai sudut kota, termasuk di Kampung Wisata Kuliner Banua Anyar. Kuliner khas Banjarmasin menyajikan rasa autentik yang menjadi daya tarik wisatawan.
                </p>
                    <a href="#" class="special">Selengkapnya</a>
                </div>
            </div>
        </section>

        <!-- Four -->
        <section id="four" class="wrapper alt style1">
            <div class="inner">
                <h2 class="major">Our Profiles</h2>
                
                @forelse ($profiles as $profile)
                    <ul class="">
                        <li>
                            <p class="font-medium text-aktiv-grey">
                                NIM: {{ $profile->nim }}
                            </p>
                        </li>
                        <li>
                            <h3 class="font-semibold text-lg leading-[27px] break-words">
                                Nama: {{ $profile->nama }}
                            </h3>
                        </li>
                        <li>
                            <p class="font-medium text-aktiv-grey">
                                Email: {{ $profile->email }}
                            </p>
                        </li>
                        <li>
                            <p class="font-medium text-aktiv-grey">
                                Kelas: {{ $profile->kelas }}
                            </p>
                        </li>
                        <li>
                            <p class="font-medium text-aktiv-grey">
                                https://github.com/{{ $profile->github }}
                            </p>
                        </li>
                        <li>
                            <p class="font-medium text-aktiv-grey">
                                Desktripsi: {{ $profile->bio }}
                            </p>

                        </li>
                    </ul>
                    <hr>
                @empty
                    <p>Belum ada data kategori</p>
                @endforelse
            </div>
                <section class="features" style="display: flex; justify-content: space-around">
                    @forelse ($profiles as $profile)
                        <article style="max-width: 30%">
                            <a href="#" class="image"><img src="{{ asset('storage/'. $profile->photo) }}" alt="Pic 04"></a>
                            <h3 class="major">{{ $profile->nama }}</h3>
                            <p>NIM : {{ $profile->nim }}</p>
                            <p>Kelas : {{ $profile->kelas }}</p>
                            <p>Email : {{ $profile->email }}</p>
                            <p>GitHub : {{ $profile->github }}</p>
                        </article>
                    @empty
                        <p>Belum ada data profile</p>
                    @endforelse
                    {{-- <article>
                        <a href="#" class="image"><img src="{{ asset('assets/images/rahmi.jpg') }}" alt="Pic 05"></a>
                        <h3 class="major">Rahmi Najwa</h3>
                        <p>NIM : C050423019</p>
                        <p>Kelas : SIKC-3B</p>
                        <p>Email : rahminajwa978@gmail.com</p>
                        <p>GitHub : RaiNajwaa948</p>                       
                        
                    </article> --}}
                    {{-- <p>Kami memiliki keahlian dalam pengembangan backend menggunakan PHP dengan framework Laravel, pengembangan frontend menggunakan HTML, CSS, dan JavaScript, serta pengembangan aplikasi mobile native di platform Android menggunakan Java dan Kotlin. Kami berkomitmen memberikan solusi terbaik melalui teknologi yang kami kuasai.</p> --}}
                </section>
                    
            </div>
        </section>

        

    </section>

    <!-- Footer -->
    <section id="footer">
        <div class="inner">
            <h2 class="major">Make Review</h2>
            <p>Berbagi pengalaman wisata Anda dengan menulis ulasan! Baca komentar, penilaian bintang, dan rekomendasi tentang tempat wisata, seperti suasana, layanan, dan kebersihan. Anda juga bisa memberikan ulasan pribadi untuk membantu wisatawan lain membuat keputusan sebelum berkunjung. Ayo, bantu sesama wisatawan dengan berbagi pengalaman Anda!</p>
            <form method="post" action="#">
                <div class="fields">
                    <div class="field">
                        <label for="name">Nama</label>
                        <input type="text" name="name" id="name" />
                    </div>
                    <div class="field">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" />
                    </div>
                    <div class="field">
                        <label for="message">Ulasan</label>
                        <textarea name="message" id="message" rows="4"></textarea>
                    </div>
                </div>
                <ul class="actions">
                    <li><input type="submit" value="Kirim Ulasan" /></li>
                </ul>
            </form>
            <a href="#" >All Reviews >>></a>
            <ul class="copyright">
                <li>&copy; Copyright 2022-2024 Rafita & Rahmi(Project Besar).UAS PBW .</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
            </ul>
        </div>
    </section>

    

</div>
@endsection

@push('after-scripts')
<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>
@endpush
