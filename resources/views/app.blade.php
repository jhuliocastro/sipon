<!DOCTYPE html>
<html>
  <head>
    <title>Sipon</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    @inertiaHead
    @vite(['resources/js/app.js', "resources/js/Pages/{$page['component']}.vue"])
    @routes
  </head>
  <body>
    @inertia
  </body>
</html>
