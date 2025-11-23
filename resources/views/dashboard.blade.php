@extends('layouts.app')

@section('content')
<div class="progress-section">
    <h2 class="section-title">Progress Pelajaran anda</h2>

    <div class="progress-cards">
        <div class="progress-card" onclick="openLesson('agama')">
            <img src="{{ asset('img/pendidikan agama.jpg') }}" class="card-image" alt="Pendidikan Agama Islam" />
            <div class="card-title">Pendidikan Agama dan Budi Pekerti</div>
            <div class="card-teacher">
                <div class="teacher-avatar">L</div>
                <div class="teacher-name">Lina</div>
            </div>
            <div class="card-meta">
                <span>Lesson 5 of 7</span>
            </div>
        </div>

        <div class="progress-card" onclick="openLesson('IPA')">
            <img src="{{ asset('img/IPA.jpg') }}" class="card-image" alt="IPA" />
            <div class="card-title">Ilmu Pengetahuan Alam</div>
            <div class="card-teacher">
                <div class="teacher-avatar">L</div>
                <div class="teacher-name">Lina</div>
            </div>
            <div class="card-meta">
                <span>Lesson 5 of 7</span>
            </div>
        </div>

        <div class="progress-card" onclick="openLesson('Bahasa inggris')">
            <img src="{{ asset('img/inggris.jpg') }}" class="card-image" alt="bahasa inggris" />
            <div class="card-title">Bahasa Inggris</div>
            <div class="card-teacher">
                <div class="teacher-avatar">L</div>
                <div class="teacher-name">Lina</div>
            </div>
            <div class="card-meta">
                <span>Lesson 5 of 7</span>
            </div>
        </div>

        <div class="progress-card" onclick="openLesson('Pendidikan Jasmani dan Olahraga')">
            <img src="{{ asset('img/pjok.jpg') }}" class="card-image" alt="PJOK" />
            <div class="card-title">Pendidikan Jasmani dan Olahraga</div>
            <div class="card-teacher">
                <div class="teacher-avatar">L</div>
                <div class="teacher-name">Lina</div>
            </div>
            <div class="card-meta">
                <span>Lesson 5 of 7</span>
            </div>
        </div>

        <div class="progress-card" onclick="openLesson('matematika')">
            <img src="{{ asset('img/matematika.jpg') }}" class="card-image" alt="Matematika" />
            <div class="card-title">Matematika</div>
            <div class="card-teacher">
                <div class="teacher-avatar">L</div>
                <div class="teacher-name">Lina</div>
            </div>
            <div class="card-meta">
                <span>Lesson 5 of 7</span>
            </div>
        </div>

        <div class="progress-card" onclick="openLesson('bahasa')">
            <img src="{{ asset('img/bahasa indonesia.jpg') }}" class="card-image" alt="Bahasa Indonesia" />
            <div class="card-title">Bahasa Indonesia</div>
            <div class="card-teacher">
                <div class="teacher-avatar">L</div>
                <div class="teacher-name">Lina</div>
            </div>
            <div class="card-meta">
                <span>Lesson 5 of 7</span>
            </div>
        </div>

        <div class="progress-card" onclick="openLesson('seni budaya')">
            <img src="{{ asset('img/seni budaya.jpg') }}" class="card-image" alt="seni budaya" />
            <div class="card-title">Seni Budaya</div>
            <div class="card-teacher">
                <div class="teacher-avatar">L</div>
                <div class="teacher-name">Lina</div>
            </div>
            <div class="card-meta">
                <span>Lesson 5 of 7</span>
            </div>
        </div>

        <div class="progress-card" onclick="openLesson('informatika')">
            <img src="{{ asset('img/informatika.jpg') }}" class="card-image" alt="informatika" />
            <div class="card-title">Informatika</div>
            <div class="card-teacher">
                <div class="teacher-avatar">L</div>
                <div class="teacher-name">Lina</div>
            </div>
            <div class="card-meta">
                <span>Lesson 5 of 7</span>
            </div>
        </div>
        <div class="progress-card" onclick="openLesson('IPS')">
            <img src="{{ asset('img/informatika.jpg') }}" class="card-image" alt="IPS" />
            <div class="card-title">Ilmu Pengetahuan Sosial</div>
            <div class="card-teacher">
                <div class="teacher-avatar">L</div>
                <div class="teacher-name">Lina</div>
            </div>
            <div class="card-meta">
                <span>Lesson 5 of 7</span>
            </div>
        </div>
    </div>
</div>

<h2 class="section-title">Mata Pelajaran Anda</h2>
<div class="subjects-grid">
    <div class="subject-card" onclick="openSubject('pengetahuan-alam')">
        <div class="subject-icon">🔬</div>
        <div class="subject-name">Ilmu Pengetahuan Alam</div>
        <div class="subject-desc">
            Mempelajari gejala alam pada aspek fisika, kimia, dan biologi, serta
            memahami fenomena alam sekitar.
        </div>
    </div>

    <div class="subject-card" onclick="openSubject('matematika')">
        <div class="subject-icon">📐</div>
        <div class="subject-name">Matematika</div>
        <div class="subject-desc">
            Menggunakan pola dan hubungan untuk menganalisis situasi matematis
            dan menarik kesimpulan logis.
        </div>
    </div>

    <div class="subject-card" onclick="openSubject('bahasa-inggris')">
        <div class="subject-icon">📚</div>
        <div class="subject-name">Bahasa Inggris</div>
        <div class="subject-desc">
            Mempelajari bahasa Inggris untuk komunikasi internasional dan
            pemahaman lintas budaya.
        </div>
    </div>

    <div class="subject-card" onclick="openSubject('bahasa-indonesia')">
        <div class="subject-icon">🗣️</div>
        <div class="subject-name">Bahasa Indonesia</div>
        <div class="subject-desc">
            Mengenal berbagai bentuk komunikasi Bahasa Indonesia dan menciptakan
            komunikasi yang baik.
        </div>
    </div>

    <div class="subject-card" onclick="openSubject('pengetahuan-sosial')">
        <div class="subject-icon">🌍</div>
        <div class="subject-name">Ilmu Pengetahuan Sosial</div>
        <div class="subject-desc">
            Mempelajari aspek sosial, ekonomi, dan politik dari tingkat lokal
            hingga global dengan pendekatan interdisipliner.
        </div>
    </div>

    <div class="subject-card" onclick="openSubject('penjaskes')">
        <div class="subject-icon">⚽</div>
        <div class="subject-name">Pendidikan Jasmani dan Olahraga</div>
        <div class="subject-desc">
            Belajar aktivitas fisik yang terprogram untuk meningkatkan kesehatan
            dan vitalitas tubuh.
        </div>
    </div>

    <div class="subject-card" onclick="openSubject('seni-budaya')">
        <div class="subject-icon">🎨</div>
        <div class="subject-name">Pendidikan Seni dan Budaya</div>
        <div class="subject-desc">
            Mengekspresikan apresiasi seni melalui pembelajaran berbasis
            kearifan lokal dan nilai estetika budaya.
        </div>
    </div>

    <div class="subject-card" onclick="openSubject('kewarganegaraan')">
        <div class="subject-icon">🏛️</div>
        <div class="subject-name">
            Pendidikan Pancasila dan Kewarganegaraan
        </div>
        <div class="subject-desc">
            Mengajarkan nilai moral dan kebangsaan untuk membentuk warga negara
            yang cerdas dan beretika.
        </div>
    </div>
</div>

<div class="schedule-header">
    <h2 class="section-title">Jadwal Pelajaran</h2>
    <a href="#" class="see-all">see all</a>
</div>

<div class="schedule-grid">
    <div class="schedule-card" onclick="openSchedule('matematika')">
        <img src="{{ asset('img/matematika.jpg') }}" class="schedule-image" alt="Matematika" />
        <div class="schedule-info">
            <div class="schedule-title">Matematika</div>
            <div class="schedule-details">
                <div class="schedule-detail-row">
                    <span class="detail-label">Senin</span>
                </div>
                <div class="schedule-detail-row">
                    <span class="detail-label">Mulai:</span>
                    <span class="detail-value">07:00</span>
                </div>
                <div class="schedule-detail-row">
                    <span class="detail-label">Selesai:</span>
                    <span class="detail-value">08:30</span>
                </div>
            </div>
        </div>
    </div>

    <div class="schedule-card" onclick="openSchedule('Ilmu Pengetahuan Alam')">
        <img src="{{ asset('img/IPA.jpg') }}" class="schedule-image" alt="Bahasa Indonesia" />
        <div class="schedule-info">
            <div class="schedule-title">Ilmu Pengetahuan Alam</div>
            <div class="schedule-details">
                <div class="schedule-detail-row">
                    <span class="detail-label">Senin</span>
                </div>
                <div class="schedule-detail-row">
                    <span class="detail-label">Mulai:</span>
                    <span class="detail-value">08:30</span>
                </div>
                <div class="schedule-detail-row">
                    <span class="detail-label">Selesai:</span>
                    <span class="detail-value">09:45</span>
                </div>
            </div>
        </div>
    </div>

    <div class="schedule-card" onclick="openSchedule('agama')">
        <img src="{{ asset('img/pendidikan agama.jpg') }}" class="schedule-image" alt="Pendidikan Agama" />
        <div class="schedule-info">
            <div class="schedule-title">Pendidikan Agama dan Budi Pekerti</div>
            <div class="schedule-details">
                <div class="schedule-detail-row">
                    <span class="detail-label">Senin</span>
                </div>
                <div class="schedule-detail-row">
                    <span class="detail-label">Mulai:</span>
                    <span class="detail-value">10:00</span>
                </div>
                <div class="schedule-detail-row">
                    <span class="detail-label">Selesai:</span>
                    <span class="detail-value">11:45</span>
                </div>
            </div>
        </div>
    </div>

    <div class="schedule-card" onclick="openSchedule('Bahasa Indonesia')">
        <img src="{{ asset('img/bahasa indonesia.jpg') }}" class="schedule-image" alt="Bahasa indonesia" />
        <div class="schedule-info">
            <div class="schedule-title">Ilmu Pengetahuan Alam</div>
            <div class="schedule-details">
                <div class="schedule-detail-row">
                    <span class="detail-label">Senin</span>
                </div>
                <div class="schedule-detail-row">
                    <span class="detail-label">Mulai:</span>
                    <span class="detail-value">12:30</span>
                </div>
                <div class="schedule-detail-row">
                    <span class="detail-label">Selesai:</span>
                    <span class="detail-value">14:00</span>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection