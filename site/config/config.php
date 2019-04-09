<?php

return [
    'debug' => true,
    'panel' =>[
      'install' => true
    ]
];

// Autogit Settings
// https://github.com/pedroborges/kirby-autogit

c::set('autogit',                true);
// c::set('autogit',                false);
c::set('autogit.remote.name',    'origin');
c::set('autogit.remote.branch',  'master');

c::set('autogit.webhook.secret', 'randomStringMonopolioAlphabet');
c::set('autogit.webhook.url',    'autogit');

c::set('autogit.panel.user',     true);
c::set('autogit.user.name',      'Auto Git');
c::set('autogit.user.email',     'autogit@localhost');

c::set('autogit.widget',         true);

c::set('autogit.language',       'en');
c::set('autogit.translation', [
    'site.update'  => 'Changed site options',
    'page.create'  => 'Created page %s',
    'page.update'  => 'Updated page %s',
    'page.delete'  => 'Deleted page %s',
    'page.sort'    => 'Sorted page %s',
    'page.hide'    => 'Hid page %s',
    'page.move'    => 'Moved page %1$s to %2$s',
    'file.upload'  => 'Uploaded file %s',
    'file.replace' => 'Replaced file %s',
    'file.rename'  => 'Renamed file %s',
    'file.update'  => 'Updated file %s',
    'file.sort'    => 'Sorted file %s',
    'file.delete'  => 'Deleted file %s',
]);
