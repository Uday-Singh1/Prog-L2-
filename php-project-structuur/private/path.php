<?php

/*
 * Wat is de project basis.
 */
define("PRIVATE_PATH", dirname(__FILE__));
define("PROJECT_PATH", dirname(PRIVATE_PATH));

/*
 * Wat is verborgen voor de buitenwereld.
 */
define("EDITOR_PATH", PRIVATE_PATH . '/editor');
define("SHARED_PATH", PRIVATE_PATH . '/shared');
define("LIBRARY_PATH", PRIVATE_PATH . '/lib');
define("DATABASE_PATH", PRIVATE_PATH . '/db');
define("FORMS_PATH", SHARED_PATH . '/forms');


/*
 * Wat is zichtbaar voor de buitenwereld.
 */
define("PUBLIC_PATH", PROJECT_PATH . '/public');