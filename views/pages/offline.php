<?php

// Start session
session_destroy();

// Reset session
session_unset ();

// Destroy session
session_destroy ();

header('Location: login');