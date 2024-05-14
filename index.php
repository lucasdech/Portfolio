<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer">
</head>

<body>

    <!-- debut header -->

    <header id="header" class="">
        <a href="#status">Status</a>
        <a href="#presentation">Contact</a>
        <a href="#projet">Projets</a>
    </header>

    <header id="menu_burger">
        <i class="fa-solid fa-bars fa-2xl menu_burger_icon" style="color: #9e9e9e;"></i>
        <div class="menu_burger_items hidden_div">
            <a href="#status">Status</a>
            <a href="#presentation">Contact</a>
            <a href="#projet">Projets</a>
        </div>
    </header>

    <!-- fin header -->


    <!-- debut status -->

    <section id="status">

        <p class="poste">Développeur web junior</p>

        <div class="status_dispo">
            <div class="status_dot"></div>
            <div>Status recrutement : Disponible</div>
        </div>

    </section>

    <!-- fin status -->


    <!-- debut presentation -->

    <section id="presentation">

        <div>
            <img src="images/IMG_6643.jpg" alt="photo de profil">
        </div>

        <div class="presentation_text">
            <p>Actuellement en formation à Roanne avec Garage404 et Simplon, je recherche un stage dans le développement web pour la période du 9 Septembre 2024 au 8 Novembre 2024.</p>
            <p>lucasdechavanne22@gmail.com</p>
            <p>+33 (0)6 25 92 32 26</p>
            <div class="liens">
                <a href="https://www.linkedin.com/in/lucas-dechavanne/" target="_blank"><i class="fa-brands fa-linkedin fa-2xl" style="color: #4f4f4f;"></i></a>
                <a href="https://github.com/lucasdech" target="_blank"><i class="fa-brands fa-github fa-2xl" style="color: #4f4f4f;"></i></a>
                <a href="CV/CV DECHAVANNE Lucas .pdf" target="_blank"><i class="fa-solid fa-download fa-2xl" style="color: #4f4f4f;"></i></a>
            </div>
        </div>

    </section>

    <!-- fin presentation -->


    <!-- debut contact -->

    <section id="contact">
                    
        <div>
            <p>contact</p>
        </div>

            <form method="post" action="/contact.php">

                <div class="input-group">
                    <input class="input" required type="text" name="firstname">
                    <label class="label" for="firstname">Nom</label>
                </div>

                <div class="input-group">
                    <input class="input" required type="text" name="lastname">
                    <label class="label" for="lastname">Prenom</label>
                </div>

                <div class="input-group">
                    <input class="input" required type="mail" name="mail">
                    <label class="label" for="mail"> Adress e-Mail</label>
                </div>
                
                <div class="input-group">
                    <textarea class="input textarea" required type="text" name="message"></textarea>
                    <label class="label" for="sujet"> Adress e-Mail</label>
                </div>

                <div class="div_btn">
                    <button type="submit" class="btn">Envoyer</button>
                </div>
            </form>

    </section>

    <!-- fin contact -->


    <!-- debut projet -->

    <section id="projet">

        <div class="projet_presentation">
            <p>
                Au cours de mon année de formation axée sur la pratique, j'ai pu réaliser de nombreux projets comme avec les quelques exemples ci dessous.
                J'ai ainsi pu travailler sur différents langages et technologies,
                ce qui m'a permis d'acquérir des compétences tant sur le front-end que le back-end pour créer des sites web responsives de plus en plus robustes et sécurisés.
            </p>
        </div>

        <div class="projet_icons">
            <div class="portfolio__icons">
                <svg height="40px" width="40px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="in-view">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier">
                        <path d="M12 3H9C7.34315 3 6 4.34315 6 6C6 7.65685 7.34315 9 9 9M12 3V9M12 3H15C16.6569 3 18 4.34315 18 6C18 7.65685 16.6569 9 15 9M12 9H9M12 9H15M12 9V15M9 9C7.34315 9 6 10.3431 6 12C6 13.6569 7.34315 15 9 15M15 9C16.6569 9 18 10.3431 18 12C18 13.6569 16.6569 15 15 15C13.3431 15 12 13.6569 12 12C12 10.3431 13.3431 9 15 9ZM12 15H9M12 15V18C12 19.6569 10.6569 21 9 21C7.34315 21 6 19.6569 6 18C6 16.3431 7.34315 15 9 15" stroke="#80808080" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        </path>
                    </g>
                </svg>
                <svg height="40px" width="40px" viewBox="-1 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000" class="in-view">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier">
                        <title>html [#124]</title>
                        <desc>Created with Sketch.</desc>
                        <defs> </defs>
                        <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g id="Dribbble-Light-Preview" transform="translate(-61.000000, -7639.000000)" fill="#80808080">
                                <g id="icons" transform="translate(56.000000, 160.000000)">
                                    <path d="M19.4350881,7485 L19.4279481,7485 L10.8119794,7485 L11.0180201,7487 L19.2300674,7487 C19.109707,7488.752 18.7455658,7492.464 18.6119454,7494.153 L13.99949,7495.451 L13.99949,7495.455 L13.98929,7495.46 L9.37377458,7493.836 L9.05757353,7490 L11.3199411,7490 L11.4800816,7492.063 L13.99337,7493 L13.99949,7493 L16.5086984,7492.1 L16.7667592,7489 L8.95659319,7489 C8.91885306,7488.599 8.43333144,7483.392 8.34867116,7483 L19.6370488,7483 C19.5738086,7483.66 19.5095484,7484.338 19.4350881,7485 L19.4350881,7485 Z M5,7479 L6.63812546,7497.148 L13.98929,7499 L21.3598345,7497.111 L23,7479 L5,7479 Z" id="html-[#124]"> </path>
                                </g>
                            </g>
                        </g>
                    </g>
                </svg>
                <svg height="40px" width="40px" fill="#80808080" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve" stroke="#80808080" class="in-view">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier">
                        <g id="c133de6af664cd4f011a55de6b001b19">
                            <path display="inline" d="M483.111,0.501l-42.59,461.314l-184.524,49.684L71.47,461.815L28.889,0.501H483.111z M397.29,94.302 H255.831H111.866l6.885,55.708h137.08h7.7l-7.7,3.205l-132.07,55.006l4.38,54.453l127.69,0.414l68.438,0.217l-4.381,72.606 l-64.058,18.035v-0.057l-0.525,0.146l-61.864-15.617l-3.754-45.07h-0.205H132.1h-0.202l7.511,87.007l116.423,34.429v-0.062 l0.21,0.062l115.799-33.802l15.021-172.761h-131.03h-0.323l0.323-0.14l135.83-58.071L397.29,94.302z">
                            </path>
                        </g>
                    </g>
                </svg>
                <svg height="40px" width="40px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="in-view">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M4.98488 2C3.61546 2 2.60217 3.19858 2.64753 4.49844C2.69105 5.74725 2.63451 7.36461 2.22732 8.68359C1.81892 10.0064 1.1282 10.8444 0 10.952V12.1666C1.1282 12.2742 1.81892 13.1122 2.22732 14.4351C2.63451 15.754 2.69105 17.3714 2.64753 18.6202C2.60217 19.9199 3.61546 21.1186 4.98508 21.1186H19.0169C20.3864 21.1186 21.3995 19.9201 21.3541 18.6202C21.3106 17.3714 21.3671 15.754 21.7743 14.4351C22.1829 13.1122 22.8718 12.2742 24 12.1666V10.952C22.8718 10.8444 22.1829 10.0064 21.7743 8.68359C21.3671 7.36481 21.3106 5.74725 21.3541 4.49844C21.3995 3.19878 20.3864 2 19.0169 2H4.98468H4.98488ZM16.2712 13.7687C16.2712 15.5586 14.9361 16.6441 12.7206 16.6441H8.94915C8.84127 16.6441 8.7378 16.6012 8.66152 16.5249C8.58523 16.4486 8.54237 16.3452 8.54237 16.2373V6.88136C8.54237 6.77347 8.58523 6.67001 8.66152 6.59372C8.7378 6.51743 8.84127 6.47458 8.94915 6.47458H12.6991C14.5464 6.47458 15.7588 7.47525 15.7588 9.01166C15.7588 10.09 14.9433 11.0555 13.9041 11.2245V11.2809C15.3187 11.4361 16.2712 12.4156 16.2712 13.7687ZM12.3094 7.76407H10.1589V10.8015H11.9701C13.3702 10.8015 14.1423 10.2377 14.1423 9.2299C14.1423 8.28556 13.4784 7.76407 12.3094 7.76407ZM10.1589 12.0068V15.3542H12.3885C13.8462 15.3542 14.6184 14.7692 14.6184 13.6699C14.6184 12.5704 13.8246 12.0066 12.2947 12.0066H10.1589V12.0068Z" fill="#80808080"></path>
                    </g>
                </svg>
                <svg height="40px" width="40px" viewBox="0 0 20 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" fill="#80808080" stroke="#80808080" class="in-view">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier">
                        <title>javascript [#155]</title>
                        <desc>Created with Sketch.</desc>
                        <defs> </defs>
                        <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <g id="Dribbble-Light-Preview" transform="translate(-420.000000, -7479.000000)" fill="#80808080">
                                <g id="icons" transform="translate(56.000000, 160.000000)">
                                    <path d="M379.328,7337.432 C377.583,7337.432 376.455,7336.6 375.905,7335.512 L375.905,7335.512 L377.435,7334.626 C377.838,7335.284 378.361,7335.767 379.288,7335.767 C380.066,7335.767 380.563,7335.378 380.563,7334.841 C380.563,7334.033 379.485,7333.717 378.724,7333.391 C377.368,7332.814 376.468,7332.089 376.468,7330.558 C376.468,7329.149 377.542,7328.075 379.221,7328.075 C380.415,7328.075 381.275,7328.491 381.892,7329.578 L380.429,7330.518 C380.107,7329.941 379.758,7329.713 379.221,7329.713 C378.67,7329.713 378.321,7330.062 378.321,7330.518 C378.321,7331.082 378.67,7331.31 379.476,7331.659 C381.165,7332.383 382.443,7332.952 382.443,7334.814 C382.443,7336.506 381.114,7337.432 379.328,7337.432 L379.328,7337.432 Z M375,7334.599 C375,7336.546 373.801,7337.575 372.136,7337.575 C370.632,7337.575 369.731,7337 369.288,7336 L369.273,7336 L369.266,7336 L369.262,7336 L370.791,7334.931 C371.086,7335.454 371.352,7335.825 371.996,7335.825 C372.614,7335.825 373,7335.512 373,7334.573 L373,7328 L375,7328 L375,7334.599 Z M364,7339 L384,7339 L384,7319 L364,7319 L364,7339 Z" id="javascript-[#155]"> </path>
                                </g>
                            </g>
                        </g>
                    </g>
                </svg>
                <svg height="40px" width="40px" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg" class="in-view">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier">
                        <path fill-rule="nonzero" clip-rule="nonzero" d="M4.84989 2.37195C4.59895 2.51683 4.33488 2.91636 4.30424 3.78785C4.28968 4.20181 3.9423 4.52559 3.52835 4.51103C3.11439 4.49647 2.79061 4.1491 2.80516 3.73514C2.84273 2.66673 3.1806 1.60366 4.09989 1.07291C5.02179 0.540653 6.11484 0.782356 7.06128 1.28727C7.42674 1.48224 7.56495 1.93656 7.36998 2.30201C7.17501 2.66747 6.72069 2.80568 6.35524 2.61072C5.5818 2.1981 5.10158 2.22663 4.84989 2.37195ZM8.87139 3.67284C9.19036 3.40858 9.66315 3.45293 9.92741 3.7719C10.4818 4.44103 11.0136 5.20405 11.4963 6.04018C12.5366 7.84191 13.178 9.68785 13.3509 11.2362C13.4372 12.0091 13.4108 12.7446 13.2303 13.3754C13.0484 14.011 12.6941 14.5863 12.0999 14.9293C11.381 15.3444 10.5509 15.2855 9.79114 15.0089C9.02868 14.7313 8.24395 14.2056 7.49586 13.5228C7.18993 13.2435 7.16831 12.7691 7.44756 12.4632C7.72681 12.1573 8.20119 12.1356 8.50712 12.4149C9.16624 13.0165 9.78567 13.4105 10.3043 13.5994C10.8257 13.7892 11.1537 13.7436 11.3499 13.6303C11.5143 13.5354 11.6797 13.342 11.7882 12.9627C11.8981 12.5787 11.9328 12.0529 11.8602 11.4026C11.7152 10.1045 11.1591 8.45607 10.1973 6.79018C9.75492 6.02396 9.27081 5.33055 8.77232 4.72886C8.50807 4.40989 8.55242 3.93709 8.87139 3.67284Z" fill="#80808080"></path>
                        <path fill-rule="nonzero" clip-rule="nonzero" d="M14.5 8.20557C14.5 7.91581 14.286 7.48735 13.5466 7.02507C13.1954 6.80549 13.0887 6.34276 13.3083 5.99154C13.5279 5.64032 13.9906 5.53361 14.3418 5.75319C15.2483 6.31993 16 7.14407 16 8.20557C16 9.27009 15.2442 10.0958 14.3337 10.663C13.9821 10.882 13.5195 10.7746 13.3005 10.423C13.0815 10.0714 13.189 9.60887 13.5405 9.38985C14.2846 8.92635 14.5 8.4962 14.5 8.20557ZM11.3626 11.0378C11.432 11.4462 11.1572 11.8335 10.7488 11.9029C9.89219 12.0484 8.96547 12.1274 8 12.1274C5.91954 12.1274 4.00018 11.76 2.57286 11.1355C1.86032 10.8238 1.23659 10.4332 0.780529 9.9615C0.320977 9.48616 0 8.89166 0 8.20557C0 7.37549 0.466082 6.68599 1.08548 6.16636C1.70712 5.64485 2.55471 5.22808 3.52013 4.92164C3.91494 4.79633 4.33657 5.01479 4.46189 5.40959C4.5872 5.80439 4.36874 6.22603 3.97394 6.35135C3.12334 6.62134 2.4724 6.96078 2.04954 7.31553C1.62442 7.67217 1.5 7.97899 1.5 8.20557C1.5 8.39536 1.58476 8.6353 1.85895 8.91891C2.13663 9.20613 2.57464 9.49905 3.17409 9.76131C4.37076 10.2848 6.07639 10.6274 8 10.6274C8.88475 10.6274 9.72732 10.5549 10.4976 10.424C10.906 10.3547 11.2933 10.6295 11.3626 11.0378Z" fill="#82828280"></path>
                        <path fill-rule="nonzero" clip-rule="nonzero" d="M4.87192 13.6303C5.12286 13.7752 5.6009 13.8041 6.37095 13.3949C6.73673 13.2005 7.19082 13.3395 7.38519 13.7052C7.57957 14.071 7.44062 14.5251 7.07484 14.7195C6.13079 15.2211 5.04121 15.4601 4.12192 14.9293C3.20003 14.3971 2.86282 13.3296 2.82687 12.2575C2.81299 11.8435 3.13733 11.4967 3.55131 11.4828C3.96529 11.4689 4.31215 11.7932 4.32603 12.2072C4.35541 13.0834 4.62023 13.485 4.87192 13.6303ZM3.98778 9.49712C3.59944 9.35301 3.40145 8.92138 3.54556 8.53304C3.84786 7.71839 4.24274 6.8763 4.72548 6.04018C5.76571 4.23845 7.04361 2.75996 8.29806 1.83609C8.92431 1.37487 9.57441 1.02999 10.211 0.870901C10.8524 0.71059 11.5278 0.729863 12.1219 1.07291C12.8408 1.48795 13.2049 2.23634 13.3452 3.03257C13.486 3.83168 13.4232 4.77409 13.2058 5.7634C13.1169 6.16796 12.7169 6.42388 12.3124 6.33501C11.9078 6.24613 11.6519 5.84612 11.7408 5.44155C11.9322 4.56992 11.9637 3.83647 11.868 3.29288C11.7717 2.7464 11.5681 2.48524 11.3719 2.37195C11.2076 2.27705 10.9574 2.23049 10.5747 2.32614C10.1871 2.42301 9.71442 2.65588 9.18757 3.04388C8.13584 3.81846 6.98632 5.12428 6.02452 6.79018C5.58214 7.55639 5.22369 8.32235 4.95185 9.0549C4.80774 9.44323 4.37611 9.64122 3.98778 9.49712Z" fill="#80808080"></path>
                        <path d="M9.45925 8.06618C9.45925 8.81694 8.85063 9.42556 8.09987 9.42556C7.34911 9.42556 6.7405 8.81694 6.7405 8.06618C6.7405 7.31542 7.34911 6.70681 8.09987 6.70681C8.85063 6.70681 9.45925 7.31542 9.45925 8.06618Z" fill="#80808080"></path>
                    </g>
                </svg>
                <svg height="40px" width="40px" fill="#80808080" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve" stroke="#80808080" class="in-view">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier">
                        <g id="5151e0c8492e5103c096af88a51e2ea6">
                            <path display="inline" d="M401.054,224c3.714,4.115,4.595,11.181,2.653,21.19c-2.029,10.425-5.935,17.862-11.723,22.32 c-5.793,4.458-14.602,6.687-26.432,6.687h-17.849l10.957-56.37h20.103C389.913,217.827,397.34,219.886,401.054,224z M149.754,217.827h-20.103l-10.958,56.37h17.848c11.827,0,20.639-2.229,26.432-6.687c5.789-4.458,9.694-11.896,11.723-22.32 c1.942-10.01,1.06-17.075-2.653-21.19C168.33,219.886,160.903,217.827,149.754,217.827z M511.5,256 c0,74.229-114.393,134.403-255.5,134.403S0.5,330.229,0.5,256c0-74.228,114.393-134.403,255.5-134.403S511.5,181.772,511.5,256z M198.542,265.286c3.04-5.448,5.203-11.461,6.483-18.037c3.102-15.967,0.761-28.403-7.024-37.313 c-7.781-8.91-20.165-13.363-37.136-13.363h-56.423L78.265,331.261h29.342l6.958-35.805h25.134c11.087,0,20.21-1.164,27.372-3.497 c7.161-2.329,13.669-6.233,19.528-11.719C191.514,275.72,195.493,270.738,198.542,265.286z M301.814,295.456l12.181-62.682 c2.479-12.747,0.619-21.971-5.572-27.664c-6.196-5.688-17.449-8.537-33.768-8.537h-25.933l6.961-35.81h-29.11l-26.182,134.692 h29.11l14.996-77.165h23.267c7.448,0,12.317,1.232,14.604,3.698c2.287,2.467,2.773,7.091,1.455,13.869l-11.581,59.598H301.814z M427.011,209.937c-7.78-8.91-20.164-13.363-37.135-13.363h-56.424l-26.178,134.688h29.343l6.957-35.805h25.135 c11.086,0,20.21-1.164,27.371-3.497c7.161-2.329,13.669-6.233,19.528-11.719c4.92-4.521,8.896-9.502,11.943-14.954 c3.044-5.448,5.202-11.461,6.483-18.037C437.137,231.282,434.796,218.846,427.011,209.937z">
                            </path>
                        </g>
                    </g>
                </svg>
                <svg height="40px" width="40px" fill="#80808080" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 512 512" enable-background="new 0 0 512 512" xml:space="preserve" stroke="#80808080" class="in-view">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier">
                        <g id="5151e0c8492e5103c096af88a51f35a1">
                            <path display="inline" d="M255.991,0.5C114.889,0.5,0.5,114.882,0.5,255.985C0.5,397.105,114.889,511.5,255.991,511.5 C397.11,511.5,511.5,397.105,511.5,255.985C511.5,114.882,397.11,0.5,255.991,0.5z M393.788,148.373 c-11.83,0.416-19.993-6.649-20.376-17.391c-0.121-3.941,0.89-7.368,3.597-11.402c2.633-5.16,3.202-5.759,3.136-8.013 c-0.245-6.758-10.463-7.012-13.257-6.883c-38.354,1.272-48.464,53.028-56.656,95.12l-4.009,22.193 c22.082,3.231,37.759-0.752,46.509-6.412c12.31-7.988-3.452-16.205-1.473-25.296c2.029-9.265,10.451-13.739,17.143-13.918 c9.377-0.245,16.072,9.489,15.86,19.357c-0.329,16.322-21.981,38.74-65.293,37.821c-5.273-0.117-10.127-0.495-14.646-1.044 l-8.176,45.102c-7.311,34.133-17.024,80.79-51.795,121.493c-29.87,35.529-60.178,41.031-73.747,41.492 c-25.4,0.874-42.229-12.675-42.841-30.747c-0.582-17.507,14.891-27.071,25.051-27.388c13.549-0.449,22.93,9.373,23.292,20.692 c0.345,9.564-4.653,12.559-7.972,14.363c-2.204,1.784-5.527,3.605-5.402,7.544c0.079,1.68,1.884,5.563,7.522,5.381 c10.741-0.366,17.874-5.677,22.852-9.231c24.739-20.602,34.258-56.53,46.725-121.926l2.611-15.839 c4.259-21.271,8.967-44.974,16.161-68.602c-17.434-13.128-27.892-29.4-51.342-35.767c-16.077-4.37-25.883-0.661-32.77,8.055 c-8.162,10.321-5.455,23.753,2.429,31.629l13.029,14.405c15.96,18.455,24.705,32.813,21.408,52.113 c-5.211,30.847-41.951,54.491-85.379,41.143c-37.073-11.419-44.001-37.667-39.544-52.138c3.926-12.721,14.035-15.124,23.925-12.102 c10.587,3.285,14.741,16.156,11.71,26.023c-0.346,1.057-0.886,2.845-1.988,5.198c-1.234,2.729-3.505,5.119-4.495,8.292 c-2.379,7.768,8.259,13.282,15.67,15.561c16.588,5.106,32.777-3.567,36.878-16.991c3.813-12.338-3.988-20.945-7.224-24.243 l-15.707-16.817c-7.182-8.009-22.98-30.311-15.282-55.364c2.973-9.656,9.24-19.902,18.318-26.689 c19.179-14.288,40.034-16.642,59.896-10.924c25.687,7.386,38.038,24.381,54.048,37.496c8.953-26.269,21.375-51.992,40.047-73.703 c16.867-19.778,39.522-34.096,65.477-34.985c25.936-0.856,45.539,10.899,46.184,29.504 C414.153,132.455,409.604,147.846,393.788,148.373z">
                            </path>
                        </g>
                    </g>
                </svg>
                <svg height="40px" width="40px" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg" fill="#000000" class="in-view">
                    <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                    <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                    <g id="SVGRepo_iconCarrier">
                        <title>file_type_twig</title>
                        <path d="M4.574,5.463c.262.4,2.5-1.608,4.454-1.161,2.061.472,4.014,3.724,4.848,13.7a40.18,40.18,0,0,1,3.541,3.61q.53.614,1.013,1.22a11.847,11.847,0,0,1,.229-1.4,12.3,12.3,0,0,1,1.981-4.4A19.151,19.151,0,0,0,17.272,7.9c-1.03-1.445-4.6-6.478-8.546-5.843C6.182,2.465,4.3,5.054,4.574,5.463Z" style="fill:#78787880"></path>
                        <path d="M24.4,30c-.32-2.567-.448-4.76-.5-6.449-.094-3.232.1-4.541.9-5.756.193-.295,1.288-1.975,2.58-1.863,1.466.128,2.213,2.414,2.362,2.337.175-.09-.36-3.543-2.532-4.431-2.6-1.063-6.312,2.07-7.8,5.154a12.223,12.223,0,0,0-.857,2.81,32.555,32.555,0,0,0-.71,8.2Z" style="fill:#80808080"></path>
                        <path d="M2.238,13.935c.145-.447,2.468-.259,4.54.293,2.5.666,7,2.344,11.651,8.606A12.544,12.544,0,0,1,20.279,30H10.386a21.875,21.875,0,0,0-.175-4.62,14.9,14.9,0,0,0-2.459-7.158C5.441,15.159,2.055,14.5,2.238,13.935Z" style="fill:#78787880"></path>
                        <path d="M17.3,21.323a1.753,1.753,0,1,1-.513-1.24A1.748,1.748,0,0,1,17.3,21.323Z" style="fill: transparent"></path>
                        <path d="M21.975,21.323a1.753,1.753,0,1,1-.513-1.24A1.748,1.748,0,0,1,21.975,21.323Z" style="fill: transparent"></path>
                    </g>
                </svg>
            </div>
        </div>

        <div class="all_project">

            <div class="carte_projet">
                <a href="http://lucasp8-luxuryservice.projets.p8.garage404.com/" target="_blank">
                    <div class="img_projet projet_1"></div>
                </a>
                <div class="all_projet_skills">
                    <p class="etiquettes">Symphony</p>
                    <p class="etiquettes">Twig</p>
                    <p class="etiquettes">MySQL</p>
                </div>
            </div>

            <div class="carte_projet">
                <a href="">
                    <div class="img_projet projet_2"></div>
                </a>
                <div class="all_projet_skills">
                    <p class="etiquettes">Bootstrap</p>
                    <p class="etiquettes">JS</p>
                    <p class="etiquettes">PHP</p>
                    <p class="etiquettes">Figma</p>
                </div>
            </div>

            <div class="carte_projet">
                <a href="http://lucas-shop.projets.p8.garage404.com/" target="_blank">
                    <div class="img_projet projet_3"></div>
                </a>
                <div class="all_projet_skills">
                    <p class="etiquettes">Prestashop</p>
                    <p class="etiquettes">CSS</p>
                </div>
            </div>

            <div class="carte_projet">
                <a href="http://lucas-drumppad.projets.p8.garage404.com/" target="_blank">
                    <div class="img_projet projet_4"></div>
                </a>
                <div class="all_projet_skills">
                    <p class="etiquettes">JS</p>
                </div>
            </div>

            <div class="carte_projet">
                <a href="https://lucas-themountain.projets.p8.garage404.com/" target="_blank">
                    <div class="img_projet projet_5"></div>
                </a>
            </div>

            <div class="carte_projet">
                <a href="https://lucas-comparateurvol.projets.p8.garage404.com/" target="_blank">
                    <div class="img_projet projet_6"></div>
                </a>
            </div>

            <div class="carte_projet">
                <a>
                    <div class="img_projet projet_7"></div>
                </a>
            </div>
        </div>

    </section>

    <!-- fin projet -->


    <script src="index.js"></script>
</body>

</html>