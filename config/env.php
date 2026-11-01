<?php

return [
    // rutas publicas
    'login' => 'api/app/login',
    'validateUser' => 'api/app/validate-user',
    'registeUser' => 'api/app',
    'changePassword' => 'api/app/change-password',
    'refreshOTP' => 'api/app/refresh-otp',
    'validateEmail' => 'api/app/validate-email',

    //Roles
    'PermittedRoles' => [1, 2], // 1 = Admin, 2 = Profesor
];