<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Muhammad Razan</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Figtree:wght@300;400;500;600;700&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Figtree', sans-serif;
        }

        body {
            background-color: #f9f9f9;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .container {
            width: 100%;
            padding-top: 64px;
            max-width: 1200px;
            padding: 128px 0px;
            text-align: center;
        }

        .header {
            margin-bottom: 50px;
        }

        .section-title {
            color: #007bff;
            font-size: 18px;
            font-weight: 500;
            margin-bottom: 15px;
        }

        .main-title {
            font-size: 32px;
            font-weight: 700;
            color: #333;
            margin-bottom: 8px;
        }

        .description {
            font-size: 18px;
            color: #555;
            line-height: 1.6;
            max-width: 800px;
            margin: 0 auto;
        }

        .cards-container {
            display: grid;
            grid-template-rows: repeat(auto-fit, minmax(120px, 1fr));
            gap: 24px;
            padding: 24px 24px;
            background: rgba(255,255,255,0.6);
            border-radius: 24px;
            box-shadow: 0 8px 32px rgba(0,0,0,0.06);
            margin-top: 32px;
        }

        .card {
            background: rgba(255,255,255,0.85);
            border-radius: 18px;
            box-shadow: 0 2px 12px rgba(0,0,0,0.04);
            padding: 32px 24px;
            border: 1.5px solid #eaeaea;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            transition: transform 0.2s, box-shadow 0.2s;
            position: relative;
            overflow: hidden;
            align-content: center;
            justify-content: center;
        }

        .card-abs {
            background: rgba(255,255,255,0.85);
            border-radius: 18px;
            box-shadow: 0 2px 12px rgba(0,0,0,0.04);
            padding: 32px 24px;
            border: 1.5px solid #eaeaea;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            transition: transform 0.2s, box-shadow 0.2s;
            position: relative;
            overflow: hidden;
            align-content: bottom;
            justify-content: center;
        }

        .card:hover {
            transform: translateY(-2px) scale(1.03);
            box-shadow: 0 8px 32px rgba(187, 187, 187, 0.08);
            border-color: #d6d6d6;
        }

        .card-icon {
            height: 40px;
            margin-bottom: 12px;
        }

        .card-title {
            font-size: 20px;
            font-weight: 500;
            margin-bottom: 10px;
            color: #222;
            text-decoration: none;
        }

        .card-description {
            font-size: 15px;
            color: #666;
            line-height: 1.4;
        }

        .card-link {
            text-decoration: none;
            font-weight: 500;
            transition: color 0.2s ease;
        }

        .card-link:hover {
            color: #d7d7d7;
            text-decoration: underline;
        }

        .background-blur {
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 50%;
            background: radial-gradient(circle at center, rgba(240, 240, 240, 0.6) 0%, rgba(255, 255, 255, 0) 70%);
            z-index: -1;
        }

        .repo-link:hover {
            box-shadow: 0 6px 18px rgba(60, 242, 255, 0.15);
            transform: translateY(-3px) scale(1.03);
        }

        .repo-link:hover img {
            transform: rotate(-12deg) scale(1.15);
        }

        .repo-link {
            display: inline-flex;
            align-items: center;
            border: 1px solid #e0e0e0;
            border-radius: 12px;
            padding: 8px 18px;
            background: #fff;
            text-decoration: none;
            margin-bottom: 24px;
            transition: box-shadow 0.3s, transform 0.3s;
        }
        .repo-link img {
            width: 20px;
            height: 20px;
            margin-right: 12px;
            transition: transform 0.3s;
        }
        .repo-link p {
            margin: 0;
            color: #333;
            font-size: 16px;
        }

        @media (max-width: 768px) {
            .cards-container {
                grid-template-columns: 1fr;
            }
            .main-title {
                font-size: 24px;
            }
        }
    </style>
</head>
<body>
    <div class="background-blur" style="position: fixed; top: 0; left: 0; width: 100vw; height: 100vh; background-image: radial-gradient(circle, #e0e0e0 1px, transparent 1px), radial-gradient(circle, #e0e0e0 1px, transparent 1px); background-size: 30px 30px; background-position: 0 0, 15px 15px; z-index: -1;"></div>
    <div class="container">
        <div class="header">
            <div class="section-title">
                <div style="display: flex; justify-content: center; align-items: center;">
                    <div class="photo-container" style="width: 200px; height: 200px; border-radius: 15%; overflow: hidden; box-shadow: 0 2px 8px rgba(0,0,0,0.08); transition: transform 0.4s; padding: 10px; background: #fff;">
                        <img src="photo.jpg" alt="" style="width: 100%; height: 100%; object-fit: cover; border-radius: 12%; transition: transform 0.4s;">
                    </div>
                </div>
                <script>
                    document.addEventListener('DOMContentLoaded', function() {
                        const sectionTitle = document.querySelector('.section-title');
                        const photoContainer = sectionTitle.querySelector('.photo-container');
                        const img = photoContainer.querySelector('img');
                        if(photoContainer && img) {
                            sectionTitle.addEventListener('mouseenter', function() {
                                photoContainer.style.transform = 'rotate(5deg) scale(1.04)';
                                img.style.transform = 'rotate(1deg) scale(1.04)';
                            });
                            sectionTitle.addEventListener('mouseleave', function() {
                                photoContainer.style.transform = 'rotate(0deg) scale(1)';
                                img.style.transform = 'rotate(0deg) scale(1)';
                            });
                        }
                    });
                </script>
            </div>
            <h3 class="main-title">Muhammad Razan Parisya Putra</h3>
            <p class="description">
                5026231174 | Pemrograman Web (C)
            </p>
        </div>

        <div style="display: flex; align-items: center; justify-content: center; gap: 20px;">
            <a href="https://github.com/mhmdrazn/FEC5026231174" class="repo-link">
                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/github/github-original.svg" alt="GitHub Icon" style="width:20px; height:20px; margin-right:12px; transition: transform 0.3s;">
                <p class="description" style="margin: 0; color: #333; font-size: 16px;">FEC5026231174 Repository</p>
            </a>

            <a href="https://github.com/mhmdrazn/5026231174" class="repo-link">
                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/github/github-original.svg" alt="GitHub Icon" style="width:20px; height:20px; margin-right:12px; transition: transform 0.3s;">
                <p class="description" style="margin: 0; color: #333; font-size: 16px;">5026231174 Repository</p>
            </a>

            <a href="https://github.com/mhmdrazn/mhmdrazn.github.io" class="repo-link">
                <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/github/github-original.svg" alt="GitHub Icon" style="width:20px; height:20px; margin-right:12px; transition: transform 0.3s;">
                <p class="description" style="margin: 0; color: #333; font-size: 16px;">Github.io Repository</p>
            </a>
        </div>

        <div class="cards-container">
            <div style="display: flex; gap: 24px;">
                <a href="{{ url('pertemuan1') }}" class="card" style="text-decoration: none; width: 100%;">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/html5/html5-original.svg" alt="HTML5 Icon" class="card-icon" style="filter: grayscale(0%) brightness(1);">
                    <h2 class="card-title">HTML</h2>
                    <p class="card-description">26 Februari 2025 - Pertemuan 1</p>
                </a>

                <a href="{{ url('pertemuan2') }}" class="card" style="text-decoration: none; width: 100%;">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/css3/css3-original.svg" alt="CSS3 Icon" class="card-icon" style="filter: grayscale(0%) brightness(1);">
                    <h2 class="card-title">CSS</h2>
                    <p class="card-description">05 Februari 2025 - Pertemuan 2</p>
                </a>

                <a href="{{ url('pertemuan3') }}" class="card" style="text-decoration: none; width: 100%;">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/bootstrap/bootstrap-original.svg" alt="Bootstrap Icon" class="card-icon" style="filter: grayscale(0%) brightness(1);">
                    <h2 class="card-title">Bootstraps</h2>
                    <p class="card-description">12 Februari 2025 - Pertemuan 3</p>
                </a>
            </div>

            <div style="display: flex; gap: 24px;">
                <a href="{{ url('pertemuan4') }}" class="card" style="text-decoration: none; width: 100%;">
                    <img src="https://cdn.jsdelivr.net/gh/feathericons/feather@4.28.0/icons/layout.svg" alt="Layout Icon" class="card-icon" style="filter: grayscale(100%) brightness(0.6);">
                    <h2 class="card-title">Layouting</h2>
                    <p class="card-description">19 Maret 2025 - Pertemuan 4</p>
                </a>

                <a href="{{ url('linktree') }}" class="card" style="text-decoration: none; width: 100%;">
                    <img src="https://cdn.jsdelivr.net/gh/simple-icons/simple-icons/icons/linktree.svg" alt="Linktree Icon" class="card-icon" style="filter: grayscale(0%) brightness(1); background: #39e09b; border-radius: 8px;">
                    <h2 class="card-title">Tugas Linktree</h2>
                    <p class="card-description">9 April 2025 - Pertemuan 6</p>
                </a>
            </div>

            <div style="display: flex; gap: 24px;">
                <div class="card-abs" style="text-decoration: none; width: 100%;">
                    <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/javascript/javascript-original.svg" alt="JavaScript Icon" class="card-icon" style="filter: grayscale(0%) brightness(1);">
                    <h2 class="card-title">JavaScript</h2>
                    <p class="card-description">16 April 2025 - Pertemuan 7</p>
                    <div style="margin-top: 16px; display: flex; gap: 12px; width: 100%;">
                        <a href="{{ url('pertemuan7-1') }}" class="card" style="padding: 8px 12px; background: #f7c948; color: #222; border: none; border-radius: 8px; font-weight: 500; text-decoration: none; text-align: center;">
                            Math Operation
                        </a>
                        <a href="{{ url('pertemuan7-2') }}" class="card" style="padding: 8px 12px; background: #6ec1e4; color: #fff; border: none; border-radius: 8px; font-weight: 500; text-decoration: none; text-align: center;">
                            Form Validation
                        </a>
                    </div>
                </div>

                <a href="{{ url('pertemuan8') }}" class="card" style="text-decoration: none; width: 100%;">
                    <img src="https://cdn.jsdelivr.net/gh/feathericons/feather@4.28.0/icons/calendar.svg" alt="Calendar Icon" class="card-icon" style="filter: grayscale(100%) brightness(0.6);">
                    <h2 class="card-title">Boostraps Template (Danantara)</h2>
                    <p class="card-description">23 April 2025 - Pertemuan 8</p>
                </a>

                <a href="{{ url('ets') }}" class="card" style="text-decoration: none; width: 100%;">
                    <img src="https://cdn.jsdelivr.net/gh/feathericons/feather@4.28.0/icons/edit-3.svg" alt="Exam Icon" class="card-icon" style="filter: grayscale(0%) brightness(1);">
                    <h2 class="card-title">ETS</h2>
                    <p class="card-description">8 Mei 2025 - Pertemuan 10</p>
                </a>
            </div>


        </div>
    </div>
</body>
</html>
