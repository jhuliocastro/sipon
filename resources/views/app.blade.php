<!DOCTYPE html>
<html>
  <head>
    <title>Sipon</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bm/dt-1.13.1/af-2.5.1/b-2.3.3/b-colvis-2.3.3/b-html5-2.3.3/b-print-2.3.3/date-1.2.0/r-2.4.0/datatables.min.css"/>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/bm/dt-1.13.1/af-2.5.1/b-2.3.3/b-colvis-2.3.3/b-html5-2.3.3/b-print-2.3.3/date-1.2.0/r-2.4.0/datatables.min.js"></script>

    @inertiaHead
    @vite(['resources/js/app.js', "resources/js/Pages/{$page['component']}.vue"])
    @routes
  </head>
  <body>
    @inertia
  </body>
</html>
