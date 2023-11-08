<!DOCTYPE html>
<html>
  <head>
    <title>Simple Marker</title>
    <!-- The callback parameter is required, so we use console.debug as a noop -->
    <script async src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAtDhN0KSnp-HZai11gX9DPtnODKhznKbA&callback=console.debug&libraries=maps,marker&v=beta">
    </script>
    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      gmp-map {
        height: 100%;
      }

      /* Optional: Makes the sample page fill the window. */
      html,
      body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
    </style>
  </head>
  <body>
    <gmp-map center="11.566040992736816,43.153682708740234" zoom="14" map-id="DEMO_MAP_ID">
      <gmp-advanced-marker position="11.566040992736816,43.153682708740234" title="SECURIT'AS">
      </gmp-advanced-marker>
    </gmp-map>
  </body>
</html>