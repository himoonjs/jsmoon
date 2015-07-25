<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />

    <title>Operadoll | Ragdoll and American Curl</title>
        
    <meta name="author" content="Operadoll" />
    <meta name="description" content="Kasvatamme Ragdolleja ja American Curleja pienimuotoisena kotikasvatuksena. Kaikki kissamme ovat ensisijaisesti rakkaita perheenjäseniämme. Kissat ovat meille myös koko perheen yhteinen harrastus. Kasvatuksemme tavoitteena on terveiden, kauniiden ja rodunomaisten kissojen kasvatus.">
    <meta property="og:description" content="Kasvatamme Ragdolleja ja American Curleja pienimuotoisena kotikasvatuksena. Kaikki kissamme ovat ensisijaisesti rakkaita perheenjäseniämme. Kissat ovat meille myös koko perheen yhteinen harrastus. Kasvatuksemme tavoitteena on terveiden, kauniiden ja rodunomaisten kissojen kasvatus."/>   
    <meta property="og:image" content="">    
    <meta property="og:site_name" content="Operadoll">
    <meta property="og:title" content="Operadoll | Ragdoll and American Curl">
    <meta property="og:type" content="website">
    <meta property="og:url" content="http://www.operadoll.com/">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
    <link href='http://fonts.googleapis.com/css?family=Maven+Pro:400,500,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <script src="<?php echo site_url(); ?>/wp-content/themes/operadoll/js/prefixfree.min.js"></script>
    <?php wp_head(); ?>
    <script>
        // Prevent GALLERY menu from clicking, leading users to select sub menus.
        // Solution for problems caused when using :hover on mobile devices.
        $(document).ready(function(){
            $( "li.menu-item-has-children" ).children( "a" ).click(function( event ) {
                event.preventDefault();
                $(this).parent().toggleClass('tap');
            });

            $(function() {
                var pull        = $('#pull');
                    menu        = $('#menu-main-menu');
             
                $(pull).on('click', function(e) {
                    e.preventDefault();
                    menu.slideToggle();
                });
            });

            $(window).resize(function(){
                var w = $(window).width();
                if(w > 320 && menu.is(':hidden')) {
                    menu.removeAttr('style');
                }
            }); 

            var URI = window.location.href;
            if (URI == 'http://localhost:8888/wordpress/en/') {
                $( "#home_title_current_litters").replaceWith("<p class='home_titles' id='home_title_current_litters'>Current Litters</p>");
                $( "#home_title_our_cats").replaceWith("<p class='home_titles' id='home_title_our_cats'>Our Cats</p>");
                $( "#home_title_previous_litters").replaceWith("<p class='home_titles' id='home_title_previous_litters'>Previous Litters</p>");
            }


        });
    </script>
</head>
<body>
    <div id="container">
    <div id="header_wrapper">
        <div id="language_setting">
            <a href="<?php echo str_replace('//', '/', str_replace('/en/', '', '/wordpress' . '/' . get_relative_permalink( get_permalink() ) ) ); ?>">FI</a>
            <a href="<?php echo str_replace('/en/en/', '/en/', '/wordpress' . '/' . 'en' . get_relative_permalink( get_permalink() ) ); ?>">EN</a>
        </div>
        <div class="section group header">
            <div class="col span_1_of_3" id="header_logo">
                <header id="svg_logo_wrapper">
                    <svg id="svg_logo"
                       xmlns:dc="http://purl.org/dc/elements/1.1/"
                       xmlns:cc="http://creativecommons.org/ns#"
                       xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
                       xmlns:svg="http://www.w3.org/2000/svg"
                       xmlns="http://www.w3.org/2000/svg"
                       xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd"
                       xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape"
                       id="svg2"
                       version="1.1"
                       inkscape:version="0.91 r13725"
                       width="318.06122"
                       height="134.52534"
                       viewBox="0 0 318.06124 134.52534"
                       sodipodi:docname="logowithtitle_stacked.svg">
                      <metadata
                         id="metadata8">
                        <rdf:RDF>
                          <cc:Work
                             rdf:about="">
                            <dc:format>image/svg+xml</dc:format>
                            <dc:type
                               rdf:resource="http://purl.org/dc/dcmitype/StillImage" />
                            <dc:title></dc:title>
                          </cc:Work>
                        </rdf:RDF>
                      </metadata>
                      <defs
                         id="defs6" />
                      <sodipodi:namedview
                         pagecolor="#ffffff"
                         bordercolor="#666666"
                         borderopacity="1"
                         objecttolerance="10"
                         gridtolerance="10"
                         guidetolerance="10"
                         inkscape:pageopacity="0"
                         inkscape:pageshadow="2"
                         inkscape:window-width="1440"
                         inkscape:window-height="847"
                         id="namedview4"
                         showgrid="false"
                         inkscape:zoom="2.49"
                         inkscape:cx="121.8192"
                         inkscape:cy="57.977493"
                         inkscape:window-x="-2"
                         inkscape:window-y="0"
                         inkscape:window-maximized="0"
                         inkscape:current-layer="layer2"
                         showguides="true"
                         inkscape:guide-bbox="true"
                         fit-margin-top="0"
                         fit-margin-left="0"
                         fit-margin-right="0"
                         fit-margin-bottom="0">
                        <inkscape:grid
                           type="xygrid"
                           id="grid4234"
                           originx="-258.53298"
                           originy="-456.37602" />
                        <sodipodi:guide
                           position="4.2523488,99.993613"
                           orientation="0,1"
                           id="guide4252" />
                      </sodipodi:namedview>
                      <g
                         inkscape:groupmode="layer"
                         id="layer1"
                         inkscape:label="sketch"
                         style="display:inline"
                         transform="translate(-258.53299,-9.8486143)" />
                      <g
                         inkscape:groupmode="layer"
                         id="layer2"
                         inkscape:label="font"
                         transform="translate(-258.53299,-9.8486143)">
                        <path
                           style="fill:none;fill-rule:evenodd;stroke:#294571;stroke-width:8.08180714;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1"
                           d="m 315.16174,47.852071 c 0,0 5.19451,-6.003656 -5.02912,-6.749477 -4.4636,-0.325609 -9.10813,1.79235 -8.01747,6.860484 1.0907,5.068116 12.0002,9.40643 21.7736,6.296034 9.77326,-3.110397 6.59138,-11.184428 6.59138,-11.184428 -0.46496,-5.965411 -12.3752,-13.330399 -20.47643,-13.050998 -12.44029,0.429044 -21.67371,9.392425 -22.79469,17.479068 -1.73138,12.490059 7.97965,21.318397 21.22204,27.805857 15.92975,7.803986 39.93277,10.663328 60.32621,8.611811 13.74011,-1.382183 25.52031,-7.444782 35.1138,-13.423233 6.45025,-4.019616 14.00413,-14.414288 14.00413,-14.414288 0,0 8.3512,10.395399 14.70429,14.65616 8.86219,5.943441 16.64498,10.092624 32.25114,12.751845 15.10871,2.574444 68.06114,4.910667 71.14243,-10.429587 2.18868,-10.896423 -18.07494,-11.265388 -19.26157,-27.388011 -0.67564,-9.179928 7.78606,-14.788702 15.86606,-15.499065 11.03523,0.315098 16.20427,5.597794 17.90675,11.400087 2.36505,8.060486 -5.84854,12.253989 -14.6384,13.486722 -44.30455,6.213503 -58.60476,-37.860426 -117.55115,-41.145132 -13.82194,-0.251154 -29.5345,1.300721 -32.41811,5.996352 -2.80138,4.562014 3.10803,11.698086 10.30212,16.129898 14.29752,8.807845 34.09478,9.913193 38.73916,-5.739449 0.34686,-5.14159 -2.78921,-7.125123 -16.84497,-7.304524 -10.56587,-0.153393 -17.42156,1.446381 -12.65051,5.945489 6.64484,5.007705 9.41496,0.993365 9.41496,0.993365"
                           id="path4213"
                           inkscape:connector-curvature="0"
                           sodipodi:nodetypes="cszzsssaaacsssscsacsscccc" />
                        <path
                           style="fill:#294571"
                           d="m 316.01637,113.33365 0,-31.040333 5.50715,0 c 5.26704,0 5.50717,-3.11898 5.50717,-0.622338 0,2.117728 3.56342,2.462158 4.98499,1.824995 3.77323,-1.691173 8.02838,1.568607 10.6447,3.282861 3.98099,2.608463 6.35241,8.951633 6.37135,17.042435 0.0218,9.32929 -1.47363,14.21773 -5.61701,18.3611 -3.3566,3.3566 -3.58435,3.42361 -9.90979,2.91586 l -6.47424,-0.51969 0,8.77754 0,8.77755 -4.44862,1.12016 c -2.44671,0.6161 -4.92495,1.12018 -5.50715,1.12018 -0.72111,0 -1.05855,-9.89505 -1.05855,-31.04034 z m 18.87442,2.93455 c 2.28402,-2.45162 3.1542,-6.20992 3.1542,-13.62309 0,-9.502239 -4.33364,-14.071713 -9.18319,-9.682939 -1.55551,1.407703 -1.83111,3.261502 -1.83111,12.316009 0,10.96596 0.66858,13.06198 4.16644,13.06198 0.96983,0 2.63198,-0.93238 3.69366,-2.07196 z m -54.54165,7.64262 c -3.88526,-1.69098 -7.81262,-6.7799 -9.41221,-12.19598 -0.75385,-2.55238 -1.06289,-8.08117 -0.81159,-14.518862 0.6491,-16.629368 5.60982,-24.915673 14.91612,-24.915673 3.14094,0 3.15453,0.02179 1.54579,2.477011 -2.75367,4.202645 -4.67314,13.605087 -4.80904,23.556819 -0.19643,14.384135 3.06708,21.526105 8.89109,19.457665 5.4411,-1.93243 8.87465,-14.04654 8.07427,-28.487191 -0.7649,-13.801038 -5.348,-20.114649 -14.46879,-19.932027 -13.22341,0.26476 -21.68339,12.018481 -16.80945,23.353946 0.729,1.695482 0.5008,1.82461 -2.10036,1.188488 -4.79056,-1.171537 -6.93665,-4.031605 -6.82806,-9.099632 0.36071,-16.830943 31.64461,-26.254212 44.17606,-13.306619 4.66958,4.824638 6.50283,10.104554 7.05433,20.316912 0.83809,15.519193 -3.56832,27.354573 -11.73559,31.521193 -4.63596,2.36512 -12.9586,2.63995 -17.68257,0.58395 z m 78.83144,-0.22469 c -5.12278,-2.60718 -7.41182,-8.60412 -6.95995,-18.23387 0.62551,-13.329883 6.17949,-20.155041 16.40119,-20.155041 6.4507,0 9.30342,2.051403 10.1429,7.293783 1.19818,7.482318 -4.15158,14.456948 -12.43213,16.208148 -2.91609,0.61671 -3.18762,0.96529 -2.61911,3.36224 1.06402,4.48591 3.25459,6.17877 7.99543,6.17877 3.39204,0 5.06733,-0.65983 7.82673,-3.08261 l 3.51087,-3.08259 0.27883,-13.188542 0.27885,-13.188547 5.75749,-0.300295 c 5.29502,-0.276166 5.75748,-0.129616 5.75748,1.824948 l 0,2.125242 2.63829,-2.075273 c 5.4924,-4.320319 12.38123,-1.690198 12.38123,4.727118 0,5.398487 -4.60623,6.23484 -8.51107,1.545352 -1.88262,-2.260922 -2.13759,-2.309672 -4.25552,-0.813744 -2.17043,1.532982 -2.25293,2.157571 -2.25293,17.054661 l 0,15.46339 -6.0078,0 -6.00781,0 0,-3.55174 0,-3.55173 -4.05291,3.25698 c -3.42164,2.74972 -5.02016,3.30799 -10.26334,3.58443 -4.42849,0.23348 -7.18492,-0.16852 -9.60672,-1.40108 z m 12.59796,-25.171575 c 2.87675,-6.885027 -1.87408,-12.633024 -5.17137,-6.256787 -1.71833,3.322926 -3.57116,11.688902 -2.76685,12.493192 1.25378,1.25381 6.54569,-2.90359 7.93822,-6.236405 z m 47.24448,25.148805 c -4.9189,-3.05278 -6.38181,-6.91738 -6.37393,-16.83817 0.008,-9.983672 1.99154,-15.40531 7.10903,-19.430717 2.85536,-2.246022 11.73324,-2.999689 12.90982,-1.095951 0.34037,0.550714 1.06943,1.0013 1.62014,1.0013 0.55071,0 0.72284,-0.450586 0.38247,-1.0013 -0.38655,-0.625452 1.65843,-1.001303 5.44806,-1.001303 l 6.0669,0 0,15.484941 c 0,13.73023 0.19856,15.58899 1.75227,16.40315 1.03233,0.54094 2.71645,0.55443 4.09884,0.0328 2.14609,-0.8097 2.29232,-1.29151 1.71157,-5.63916 -1.25911,-9.42622 2.51913,-21.126223 7.87734,-24.393653 3.37887,-2.060406 9.61933,-2.48012 12.66224,-0.851604 1.83996,0.98472 1.93677,0.635323 1.93677,-6.990026 0,-8.860362 -0.64111,-8.077522 7.7601,-9.475674 l 3.25422,-0.541583 0,22.504234 c 0,21.434396 0.0986,22.602936 2.07599,24.580246 1.87263,1.87263 2.2895,1.93341 4.25552,0.62034 1.91313,-1.27772 2.13732,-2.19452 1.83408,-7.50024 -0.82676,-14.465166 5.76319,-24.237944 16.33876,-24.230079 6.82611,0.0049 11.06365,2.671616 12.64775,7.958775 1.1965,3.993573 2.19977,4.643152 5.3213,3.445309 1.32572,-0.508726 0.45541,-2.680965 1.58386,-12.949436 1.39341,-12.679653 0.39791,-26.354387 5.67045,-20.481975 0,0 2.91691,2.390735 5.8445,6.509451 l 0.26873,23.251846 c 0.24911,21.555289 0.40568,23.325139 2.14589,24.256489 1.43186,0.7663 2.49648,0.51751 4.48748,-1.04858 l 2.61027,-2.05325 0,-21.409918 0,-21.409932 3.75488,-0.603715 c 2.06517,-0.332047 4.7687,-0.811629 6.0078,-1.06575 l 2.25293,-0.462042 0,23.514428 c 0,21.377359 0.15921,23.597879 1.75227,24.432649 2.67877,1.40369 5.88424,-0.33718 7.11347,-3.86333 1.35288,-3.8809 3.78503,-3.48445 3.33462,0.54354 -0.82152,7.34707 -5.73947,11.48374 -13.65258,11.48374 -4.50716,0 -8.56078,-2.41975 -8.56078,-5.11025 0,-0.60776 -1.59275,0.29342 -3.53941,2.0026 -2.84502,2.49797 -4.42945,3.10765 -8.07625,3.10765 -2.49526,0 -5.44653,-0.48685 -6.55837,-1.0819 -3.22564,-1.72632 -4.8559,-7.1063 -4.8559,-16.02484 0,-7.97291 -0.0516,-8.14556 -2.25294,-7.5556 -1.23912,0.33207 -2.59087,0.60991 -3.00391,0.61745 -0.41302,0.008 -0.76085,2.60453 -0.77297,5.77114 -0.028,7.28827 -2.78373,13.54759 -7.17922,16.30567 -4.59222,2.88155 -13.71036,2.36524 -17.26891,-0.97783 l -2.46893,-2.31944 -3.12875,2.63267 c -4.46984,3.76111 -11.07176,3.70183 -14.90741,-0.13393 l -2.76653,-2.76652 -2.72653,2.76652 c -3.70914,3.76355 -9.77585,3.8232 -15.18956,0.14932 -2.40356,-1.63109 -3.99935,-2.18905 -4.2354,-1.48088 -0.64206,1.9262 -5.90911,4.09807 -9.93833,4.09807 -4.17016,0 -8.28293,-2.26551 -8.28293,-4.56264 0,-2.02777 -0.44461,-1.84781 -3.85116,1.55873 -2.42583,2.42584 -3.83766,2.99877 -7.33645,2.97726 -2.3829,-0.0144 -5.51633,-0.76132 -6.96317,-1.65925 z m 94.70546,-5.9452 c 0.89148,-0.34209 2.23989,-1.81905 2.99648,-3.28213 1.70161,-3.29053 2.33179,-12.00062 0.93563,-12.93194 -1.78344,-1.18969 -2.41916,-4.259601 -1.31093,-6.330405 1.28371,-2.39862 -0.32693,-4.86996 -3.17387,-4.86996 -2.99789,0 -5.21639,5.660365 -5.69046,14.518865 -0.37942,7.09013 -0.1783,8.32676 1.7507,10.76399 2.42952,3.06959 2.25896,2.98865 4.49245,2.13158 z m -80.56228,-2.37744 c 0.63071,-1.17844 0.95321,-6.62097 0.7862,-13.26724 l -0.28315,-11.269103 -2.77197,-0.318606 c -2.4136,-0.277416 -3.02563,0.240375 -4.73417,4.005203 -2.18419,4.812911 -2.77435,17.539096 -0.96969,20.911116 1.41768,2.64891 6.54342,2.60946 7.97278,-0.0614 z m 41.22723,0.34099 c 1.55709,-1.40913 1.83111,-3.26394 1.83111,-12.39366 0,-8.164157 -0.34832,-11.025602 -1.45384,-11.943099 -2.28089,-1.892971 -4.7666,-0.839747 -7.003,2.967248 -2.52114,4.291704 -2.97811,18.596681 -0.68258,21.367741 1.75715,2.12115 4.96555,2.12193 7.30831,0.001 z"
                           id="path4248"
                           inkscape:connector-curvature="0"
                           sodipodi:nodetypes="ccssssssscccssccsssssssssssssssssssssssssssssscccsscssssscccccssssscsccscscscsscssssscscsscsssscscscccsscssssssssssccssscsscsssssscccssscsssscscsssccsssscc" />
                      </g>
                    </svg>

                </header>
            </div>
            <div class="col span_2_of_3">
                <nav id="nav">
                    <?php wp_nav_menu( array(
                        'theme_location' => 'header-menu',
                        'items_wrap' => '<ul id="menu-main-menu">%3$s</ul><a href="#" id="pull">MENU</a>' )
                    ); ?>
                </nav>
            </div>
        </div>
        </div>