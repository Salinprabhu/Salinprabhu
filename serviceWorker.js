const staticPinoy = "PinoyHeartRadioV1"
const assets = [
  "/",
  "/index.php",
  "/home.php",
  "./css/font-awesome-4.7.0/css/font-awesome.min.css",
  "./css/indexstyle.css",
  "./style.css",
  "./js/jquery-3.6.0.js",
  "./index.js",
  "./player.js",
  "./js/bootstrap.min.js",
  "./mainhome.js",
  "./css/bootstrap.min.css",
  "./image/Djs/ROBOCAT.jpg",
  "./image/carousel/rightbar.gif",
  "./image/Logo.png",
  "./image/carousel/leftbar.gif",
  "./image/carousel/back4.jpg"
];

self.addEventListener("install", installEvent => {
  installEvent.waitUntil(
    caches.open(staticPinoy).then(cache => {
      cache.addAll(assets)
    })
  )
})
self.addEventListener("fetch", fetchEvent => {
    fetchEvent.respondWith(
      caches.match(fetchEvent.request).then(res => {
        return res || fetch(fetchEvent.request)
      })
    )
  })