<?php

// add icons list.
add_filter( 'gkt_icons_list', 'my_gkt_icons' );
function my_gkt_icons( $icons ) {
    $icons['my-icons-pack'] = array(
        'name' => 'MVZ Icons',
        'icons' => array(
            array(
                'keys' => '',
                'svg' => '<svg xmlns="http://www.w3.org/2000/svg" width="66.699" height="76.085" viewBox="0 0 66.699 76.085"><path id="FontAwsome_user-md_" data-name="FontAwsome (user-md)" d="M32.85,37.542A18.771,18.771,0,1,0,14.078,18.771,18.77,18.77,0,0,0,32.85,37.542ZM15.252,62.18a3.52,3.52,0,1,0,3.52-3.52A3.511,3.511,0,0,0,15.252,62.18ZM46.928,42.323v7.186a11.749,11.749,0,0,1,9.386,11.5v6.115a2.354,2.354,0,0,1-1.892,2.3l-4.722.939a1.167,1.167,0,0,1-1.379-.924l-.455-2.3a1.16,1.16,0,0,1,.924-1.379l2.83-.572v-4.18c0-9.21-14.078-9.547-14.078.279V65.2l2.83.572a1.19,1.19,0,0,1,.924,1.379l-.455,2.3a1.19,1.19,0,0,1-1.379.924l-4.575-.616a2.343,2.343,0,0,1-2.024-2.332V61.006a11.761,11.761,0,0,1,9.386-11.5V42.88c-.323.1-.645.161-.968.279a25.37,25.37,0,0,1-16.835,0,16.208,16.208,0,0,0-3.314-.763V54.363a8.212,8.212,0,1,1-4.693,0V42.572A19.659,19.659,0,0,0,0,61.945v6.57a6.578,6.578,0,0,0,6.57,6.57H59.129a6.578,6.578,0,0,0,6.57-6.57v-6.57A19.68,19.68,0,0,0,46.928,42.323Z" transform="translate(0.5 0.5)" fill="#ce0d28" stroke="rgba(0,0,0,0)" stroke-miterlimit="10" stroke-width="1"/></svg>',
            ),
            array(
                'keys' => '',
                'svg' => '<svg xmlns="http://www.w3.org/2000/svg" width="65.699" height="75.085" viewBox="0 0 65.699 75.085"><path id="FontAwsome_user-nurse_" data-name="FontAwsome (user-nurse)" d="M46.841,46.924,32.849,60.913,18.858,46.924A19.665,19.665,0,0,0,0,66.544a8.536,8.536,0,0,0,8.536,8.536H57.162A8.536,8.536,0,0,0,65.7,66.544,19.665,19.665,0,0,0,46.841,46.924ZM32.849,44.578A18.771,18.771,0,0,0,51.62,25.807V9.649a4.693,4.693,0,0,0-3.044-4.4L36.144.593a9.385,9.385,0,0,0-6.59,0L17.123,5.255a4.693,4.693,0,0,0-3.044,4.394V25.807A18.771,18.771,0,0,0,32.849,44.578ZM26.983,10.507a.733.733,0,0,1,.733-.733h3.178V6.6a.733.733,0,0,1,.733-.733h2.443A.733.733,0,0,1,34.8,6.6V9.773h3.178a.733.733,0,0,1,.733.733V12.95a.733.733,0,0,1-.733.733H34.8v3.178a.733.733,0,0,1-.733.733H31.628a.733.733,0,0,1-.733-.733V13.683H27.717a.733.733,0,0,1-.733-.733ZM21.117,23.46H44.581v2.346a11.732,11.732,0,0,1-23.464,0Z" transform="translate(0 0.004)" fill="#ce0d28"/></svg>',
            ),
            array(
                'keys' => '',
                'svg' => '<svg xmlns="http://www.w3.org/2000/svg" width="75.089" height="75.085" viewBox="0 0 75.089 75.085"><path id="FontAwsome_stethoscope_" data-name="FontAwsome (stethoscope)" d="M65.571,16.45A9.384,9.384,0,0,0,61.024,33.96V50.474c0,8.4-7.362,15.252-16.426,15.252-8.8,0-16.015-6.468-16.411-14.548a23.528,23.528,0,0,0,18.743-23V5.392A3.518,3.518,0,0,0,44.1,1.945L34.875.1a3.511,3.511,0,0,0-4.136,2.757l-.469,2.3a3.511,3.511,0,0,0,2.757,4.136l4.5.895v17.8a14.08,14.08,0,1,1-28.158.176V10.2l4.5-.895a3.511,3.511,0,0,0,2.757-4.136l-.455-2.3A3.511,3.511,0,0,0,12.041.112L2.83,1.93A3.533,3.533,0,0,0,0,5.392V28.182a23.5,23.5,0,0,0,18.787,23c.381,13.258,11.806,23.935,25.8,23.935C58.81,75.113,70.4,64.055,70.4,50.474V33.96A9.384,9.384,0,0,0,65.571,16.45ZM65.7,28.182a2.347,2.347,0,1,1,2.347-2.347A2.353,2.353,0,0,1,65.7,28.182Z" transform="translate(0 -0.028)" fill="#ce0d28"/></svg>',
            ),
            array(
                'keys' => '',
                'svg' => '<svg xmlns="http://www.w3.org/2000/svg" width="75.099" height="75.085" viewBox="0 0 75.099 75.085"><path id="FontAwsome_syringe_" data-name="FontAwsome (syringe)" d="M29.532,25.616,37.7,33.8a1.177,1.177,0,0,1,0,1.657l-1.657,1.657a1.177,1.177,0,0,1-1.657,0L26.217,28.93l-6.644,6.644,8.184,8.184a1.177,1.177,0,0,1,0,1.657L26.1,47.073a1.177,1.177,0,0,1-1.657,0l-8.184-8.2-3.872,3.872a11.718,11.718,0,0,0-3.373,9.592l1.041,9.328L.316,71.4a1.177,1.177,0,0,0,0,1.657l1.657,1.657a1.177,1.177,0,0,0,1.657,0l9.724-9.724,9.328,1.041a11.676,11.676,0,0,0,9.592-3.373L58.952,35.985l-19.9-19.9-9.519,9.533Zm45.2-13.684L63.118.316a1.177,1.177,0,0,0-1.657,0L59.8,1.973a1.177,1.177,0,0,0,0,1.657l4.151,4.151L57.31,14.425l-8.3-8.3L46.515,3.631a1.177,1.177,0,0,0-1.657,0L39.886,8.6a1.177,1.177,0,0,0,0,1.657l2.493,2.493,19.9,19.932,2.493,2.493a1.177,1.177,0,0,0,1.657,0L71.4,30.191a1.177,1.177,0,0,0,0-1.657l-10.78-10.78,6.644-6.644,4.151,4.151a1.177,1.177,0,0,0,1.657,0L74.733,13.6a1.2,1.2,0,0,0,0-1.672Z" transform="translate(0.025 0.025)" fill="#ce0d28"/></svg>',
            ),
        ),
    );

    return $icons;
}