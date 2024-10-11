<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex">
    <title>Sami Nouidri</title>
    <link id="light-theme" rel="stylesheet" href="{{ asset('css/portfolio-light.css') }}" media="all">
    <link id="dark-theme" rel="stylesheet" href="{{ asset('css/portfolio-dark.css') }}" media="all" disabled>
    <script> 
        const lightThemeUrl = "{{ asset('css/portfolio-light.css') }}";
        const darkThemeUrl = "{{ asset('css/portfolio-dark.css') }}";
    </script>
    <script src="{{ asset('js/scripts.js') }}" defer></script>
    

</head>
<body>
    <div class="container">
        <header>
            <div class="header-content">
                <img src="{{ asset('images/portrait.jpg') }}" alt="Portrait of Sami Nouidri" class="portrait">
                <div class="header-text">
                    <h1>Sami Nouidri</h1>
                    <p>Software Engineer</p>
                    <p>Born on the 01.03.2001</p>
                    <p>Rouges-Terres 15A, 2068 Hauterive, Suisse</p>
                    <p>✆ : 079 929 15 05</p>
                    <p>🖳 : <a href="mailto:sami.nouidri@pm.me" target=”_blank”>sami.nouidri@pm.me</a></p>
                    <p>🖳 : <a href="https://linkedin.com/in/sami-nouidri-03a3b12b8" target=”_blank”>LinkedIn</a></p>
                    <p>🖳 : <a href="https://github.com/saminouidri" target=”_blank”>Github</a></p>
                </div>
            </div>
            </header>
            <h6><i>Built using Laravel with ♥.</i> 
                <button id="dark-mode-toggle" class="dark-toggle">🌙 Dark Mode</button>
            </h6>
            <section class="section-hidden" id="carousel-section">
            <h2>Portfolio</h2>
            <div class="carousel-container">
                <div class="carousel-slide">
                    <h4>Swissmedic DocGenCore</h4>
                    <h6>Stack : Spring Boot, ReactJS, Azure</h6>
                    <a href="https://github.com/saminouidri/swissmedic-docgencore" target="_blank">
                        <img src="{{ asset('images/docgencore.png') }}" alt="DocGenCore">
                    </a>
                    <p>Shared internal service to generate medical documents for third-party applications.</p>
                </div>
                <div class="carousel-slide">
                    <h4>Clarius XPER</h4>
                    <h6>Stack : Delphi Pascal, MSSQL, Python</h6>
                        <img src="{{ asset('images/clariusng.png') }}" alt="DocGenCore">
                    <p>Contributed to building data management software solutions for Fribourg's state office.</p>
                </div>
                <div class="carousel-slide">
                    <h4>Clarius Mobilius</h4>
                    <h6>Stack : Dart, Flutter, Firebase</h6>
                    <a href="https://github.com/saminouidri/daily-round-logger" target="_blank">
                        <img src="{{ asset('images/daily-round.png') }}" alt="DailyRound">
                    </a>
                    <p>An android application, whose aim is to enable employees of industrial sites to conduct daily rounds.</p>
                </div>
                <div class="carousel-slide">
                    <h4>Apollo's Synthesizer</h4>
                    <h6>Stack : C++, Qt</h6>
                    <a href="https://github.com/saminouidri/synthesizer-apollon" target="_blank">
                        <img src="{{ asset('images/synth-apollon.png') }}" alt="SynthApollon">
                    </a>
                    <p>A standalone virtual instrument (VST), with a sampler and a built-in synthesizer with signal modulation capabilities.</p>
                </div>
                <div class="carousel-slide">
                    <h4>Stock Manager</h4>
                    <h6>Stack : Dart, Flutter, Polygon API</h6>
                    <a href="https://github.com/saminouidri/stock-manager" target="_blank">
                        <img src="{{ asset('images/stock-manager.png') }}" alt="StockManager">
                    </a>
                    <p>A portfolio management web application which uses the Polygon API to fetch real-time data from financial markets.</p>
                </div>
                <div class="carousel-slide">
                    <h4>The Machine</h4>
                    <h6>Stack : Python, OpenCV, Dlib</h6>
                    <a href="https://github.com/saminouidri/the-machine" target="_blank">
                        <img src="{{ asset('images/the-machine.png') }}" alt="TheMachine">
                    </a>
                    <p>A proof-of-concept python project to demonstrate various ways of detecting facial features, using artificial intelligence.</p>
                </div>
            </div>
            <button class="carousel-button prev" onclick="moveSlide(-1)" disabled>&#10094;</button>
            <button class="carousel-button next" onclick="moveSlide(1)">&nbsp;&#10095;</button>
        </section>
  
        <br>
        <section class="section-hidden" id="experience-section">
            <h2>Experience</h2>
            <ul class="experience-list">
                <li class="experience-item">
                     <div class="experience-details">
                        <strong>Bachelor's thesis Project</strong><br>
                        Swissmedic, Bern<br>
                        <em>May 2024 – July 2024</em><br>
                        <ul>
                            <li>Completed Bachelor's thesis on-site.<br></li>
                            <li>Developed an internal service for generating various documents & medical certificates, as a Spring Boot API.<br></li>
                            <li>Developed a front-end web application to demonstrate the service, in ReactJS.<br></li>
                            <li>Deployed the service on Azure (AKS) & configured it with Helm and Terraform.</li>
                        </ul>
                    </div>
                    <img src="{{ asset('images/swissmedic.jpg') }}" alt="Swissmedic" class="experience-image">
                   
                </li>
                <li class="experience-item">
                    <div class="experience-details">
                        <strong>Software Developer (Part-time, Seasonal)</strong><br>
                        NPS Information Systems Sàrl, Neuchâtel<br>
                        <em>July 2021 – Present</em><br>
                        <ul>
                            <li>Developed & contributed to data management software solutions in Delphi Pascal (RAD Studio).<br></li>
                            <li>Installation of software solutions on-site & training of end-users.<br></li>
                            <li>Server maintenance of existing solutions (installing SSL certificates, configuring user groups, etc.) - Windows Server 2012<br></li>
                        </ul>
                    </div>
                    <img src="{{ asset('images/nps.jpg') }}" alt="NPS Information Systems" class="experience-image">                   
                </li>
                <li class="experience-item">
                    <div class="experience-details">
                        <strong>Apprentice Electronic Technician</strong><br>
                        Pasan SA Meyer Burger Technologies AG, Neuchâtel<br>
                        <em>February 2020 – August 2021</em><br>
                        <ul>
                            <li>Programmed ATMEL microcontrollers in C & troubleshooting of various internal systems.<br></li>
                            <li>Designed PCBs using Altium Designer & assembled them.<br></li>

                        </ul>
                    </div>
                    <img src="{{ asset('images/pasan.jpg') }}" alt="Pasan SA" class="experience-image">
                </li>
            </ul>
        </section>
        <br>
        <section class="section-hidden" id="education-section">
            <h2>Education</h2>
            <ul>
                <li>
                    <strong>Engineering Graduate, Computer science and communication systems</strong><br>
                    Haute École ARC (HE-Arc), Software Engineering major, Neuchâtel, Suisse<br>
                    <em>September 2021 – to this day</em>
                </li>
                <li>
                    <strong>Swiss Federal VET diploma as Electronic Technician + Federal Vocational Baccalaureate</strong><br>
                    Centre Professionnel du Littoral Neuchâtelois (CPLN-ET), Neuchâtel, Suisse<br>
                    <em>August 2017 – August 2021</em>
                </li>
            </ul>
        </section>
        <br>
        <section class="section-hidden" id="languages-section">
            <h2>Languages</h2>
            <p>Bilingual: French – English</p>
            <p>English: Cambridge First Certificate with advanced proficiency (C1)</p>
            <p>German: A2, Light conversational</p>
        </section>
        <br>
        <section class="section-hidden" id="skills-section">
            <h2>IT Skills</h2>
            <p>DevOps: Microsoft Azure, Kubernetes, Scrum, Atlassian Suite, Sonarqube, Docker Fullstack.</p>
            <p>Languages: Java, C#, C/C++, JavaScript, Python, Dart (Flutter), PHP, Laravel, Django, <br> ReactJS, Flask, VueJS, Kafka, SQL, PostgreSQL, Spring, Hibernate, Firebase, Github Actions.</p>
        </section>
        <br>
        <footer>
            <p>References available upon request.</p>
            <a href="CV.pdf" target="_blank">Download a copy of this CV.</a>
        </footer>
    </div>
</body>
</html>
