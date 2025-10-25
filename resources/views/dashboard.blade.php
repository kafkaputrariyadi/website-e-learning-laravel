@extends('layouts.app-student')

@section('content')
<div class="container">
    <div class="progress-section">
        <h2 class="section-title">Progress Pelajaran anda</h2>
        <div class="progress-cards">
            <div class="progress-card" onclick="openLesson('agama')">
                <img src="{{ asset('img/PAI.jpg') }}" class="card-image" alt="Pendidikan Agama Islam" />
                <div class="card-title">Pendidikan Agama Islam dan Budi Pekerti</div>
                <div class="card-teacher">
                    <div class="teacher-avatar">L</div>
                    <div class="teacher-name">Lina</div>
                </div>
                <div class="card-meta"><span>Lesson 5 of 7</span></div>
            </div>
            <div class="progress-card" onclick="openLesson('matematika')">
                <img src="{{ asset('img/MTK.jpg') }}" class="card-image" alt="Matematika" />
                <div class="card-title">Matematika</div>
                <div class="card-teacher">
                    <div class="teacher-avatar">L</div>
                    <div class="teacher-name">Lina</div>
                </div>
                <div class="card-meta"><span>Lesson 5 of 7</span></div>
            </div>
            <div class="progress-card" onclick="openLesson('bahasa')">
                <img src="{{ asset('img/Bahasa Indo.jpg') }}" class="card-image" alt="Bahasa Indonesia" />
                <div class="card-title">Bahasa Indonesia</div>
                <div class="card-teacher">
                    <div class="teacher-avatar">L</div>
                    <div class="teacher-name">Lina</div>
                </div>
                <div class="card-meta"><span>Lesson 5 of 7</span></div>
            </div>
        </div>
        <div class="nav-arrows">
            <button class="arrow-btn" onclick="scrollProgress(-1)">←</button>
            <button class="arrow-btn" onclick="scrollProgress(1)">→</button>
        </div>
    </div>

    <h2 class="section-title">Mata Pelajaran Anda</h2>
    <div class="subjects-grid">
        <div class="subject-card" onclick="openSubject('pengetahuan-alam')">
            <div class="subject-icon">🔬</div>
            <div class="subject-name">Ilmu Pengetahuan Alam</div>
            <div class="subject-desc">Mempelajari gejala-gejala alam baik pada aspek fisika, kimia, maupun biologi,
                serta memahami fenomena alam sekitar</div>
        </div>
        <div class="subject-card" onclick="openSubject('matematika')">
            <div class="subject-icon">📐</div>
            <div class="subject-name">Matematika</div>
            <div class="subject-desc">Menggunakan pola dan hubungan untuk menganalisis situasi matematis, menarik
                kesimpulan logis</div>
        </div>
        <div class="subject-card" onclick="openSubject('bahasa-inggris')">
            <div class="subject-icon">📚</div>
            <div class="subject-name">Bahasa Inggris</div>
            <div class="subject-desc">Wajib mempelajari bahasa Inggris sesuai dengan standar yang dapat digunakan
                dibidang internasional, dan berkomunikasi</div>
        </div>
        <div class="subject-card" onclick="openSubject('bahasa-indonesia')">
            <div class="subject-icon">🗣️</div>
            <div class="subject-name">Bahasa Indonesia</div>
            <div class="subject-desc">Mengenal berbagai macam komunikasi Bahasa Indonesia yang benar dan menciptakan
                komunikasi yang baik</div>
        </div>
        <div class="subject-card" onclick="openSubject('pengetahuan-sosial')">
            <div class="subject-icon">🌍</div>
            <div class="subject-name">Ilmu Pengetahuan sosial</div>
            <div class="subject-desc">Menelaiti sosial, ekonomi, politik dan tingkat lokal hingga global dengan
                pendekatan interdisipliner dan sklala</div>
        </div>
        <div class="subject-card" onclick="openSubject('penjaskes')">
            <div class="subject-icon">⚽</div>
            <div class="subject-name">Pendidikan Jasmani dan Olahraga</div>
            <div class="subject-desc">Mempelajari aktivitas fisik yang terprogram untuk meningkatkan kualitas kesehatan
                dan vitalitas</div>
        </div>
        <div class="subject-card" onclick="openSubject('seni-budaya')">
            <div class="subject-icon">🎨</div>
            <div class="subject-name">Pendidikan Seni dan Budaya</div>
            <div class="subject-desc">Mengekspresi apresiasi seni melalui pembelajaran seni budaya berdasarkan kearifan
                lokal dan nilai-nilai astetika berbasis budaya</div>
        </div>
        <div class="subject-card" onclick="openSubject('kewarganegaraan')">
            <div class="subject-icon">🏛️</div>
            <div class="subject-name">Pendidikan Pancasila dan kewarganegaraan</div>
            <div class="subject-desc">Mengajari nilai dan moral terhadap negara dalam upaya membentuk warga negara yang
                mampu berinteraksi dengan teknologi</div>
        </div>
    </div>

    <div class="schedule-header">
        <h2 class="section-title">Jadwal Pelajaran</h2>
        <a href="#" class="see-all">Lihat All</a>
    </div>
    <div class="schedule-grid">
        <div class="schedule-card" onclick="openSchedule('matematika')">
            <img src="{{ asset('img/MTK.jpg') }}" class="schedule-image" alt="Matematika" />
            <div class="schedule-info">
                <div class="schedule-time">⏰ 1 jam 30 menit</div>
                <div class="schedule-title">Matematika</div>
                <div class="schedule-details">
                    <div class="schedule-detail-row"><span class="detail-label">Senin</span></div>
                    <div class="schedule-detail-row"><span class="detail-label">Mulai :</span><span
                            class="detail-value">07:00</span></div>
                    <div class="schedule-detail-row"><span class="detail-label">Selesai :</span><span
                            class="detail-value">08:30</span></div>
                </div>
            </div>
        </div>
        <div class="schedule-card" onclick="openSchedule('bahasa-indonesia')">
            <img src="{{ asset('img/Bahasa Indo.jpg') }}" class="schedule-image" alt="Bahasa Indonesia" />
            <div class="schedule-info">
                <div class="schedule-time">⏰ 1 jam 30 menit</div>
                <div class="schedule-title">Bahasa Indonesia</div>
                <div class="schedule-details">
                    <div class="schedule-detail-row"><span class="detail-label">Senin</span></div>
                    <div class="schedule-detail-row"><span class="detail-label">Mulai :</span><span
                            class="detail-value">08:30</span></div>
                    <div class="schedule-detail-row"><span class="detail-label">Selesai :</span><span
                            class="detail-value">09:45</span></div>
                </div>
            </div>
        </div>
        <div class="schedule-card" onclick="openSchedule('agama')">
            <img src="{{ asset('img/PAI.jpg') }}" class="schedule-image" alt="Pendidikan Agama" />
            <div class="schedule-info">
                <div class="schedule-time">⏰ 1 jam 30 menit</div>
                <div class="schedule-title">Pendidikan Agama Islam dan Budi Pekerti</div>
                <div class="schedule-details">
                    <div class="schedule-detail-row"><span class="detail-label">Senin</span></div>
                    <div class="schedule-detail-row"><span class="detail-label">Mulai :</span><span
                            class="detail-value">10:00</span></div>
                    <div class="schedule-detail-row"><span class="detail-label">Selesai :</span><span
                            class="detail-value">11:45</span></div>
                </div>
            </div>
        </div>
        <div class="schedule-card" onclick="openSchedule('ipa')">
            <img src="{{ asset('img/IPA.jpg') }}" class="schedule-image" alt="IPA" />
            <div class="schedule-info">
                <div class="schedule-time">⏰ 1 jam 31 menit</div>
                <div class="schedule-title">Ilmu Pengetahuan Alam</div>
                <div class="schedule-details">
                    <div class="schedule-detail-row"><span class="detail-label">Senin</span></div>
                    <div class="schedule-detail-row"><span class="detail-label">Mulai :</span><span
                            class="detail-value">12:30</span></div>
                    <div class="schedule-detail-row"><span class="detail-label">Selesai :</span><span
                            class="detail-value">14:00</span></div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection