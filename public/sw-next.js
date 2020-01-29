const staticCacheName = 'site-static-v2';
const dynamicCacheName = 'site-dynamic-v2'
const assets = [
    '/',
    '/index.php',
    '/blog',
    '/css/style.css',
    '/css/app.css',
    '/css/blog-style.css',
    '/css/bootstrap.min.css',
    '/js/app.js',
    '/js/bootstrap.min.js',
    '/js/jquery.min.js',
    '/js/main.js',
    '/js/owl.carousel.min.js',
    '/assets/avatar.png',
    '/assets/vertical.png',
    '/assets/bcr-white.png',
    '/assets/bcr-black.png',
    '/assets/IOEentrance.png',
    '/assets/logo-black.png',
    '/assets/logo-vertical.png',
    '/assets/prabhuhost-black.png',
    '/assets/prabhuhost-white.png',
    '/pages/fallback.html',
    'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css',
    'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js',
    'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js',
    'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js',
    'https://kit.fontawesome.com/2fe76bb6c2.js',
    'https://fonts.googleapis.com/css?family=Anton|Lexend+Deca&display=swap',
    'https://fonts.googleapis.com/css?family=Acme|Lobster|Roboto|Roboto+Mono|Patua+One|Rubik|Sniglet',
    '/assets/icons/icon-144.png',
    'https://kit-free.fontawesome.com/releases/latest/css/free.min.css',
    '/assets/section-2-cover.jpg',
    '/assets/UI-face-1.jpg',
    '/assets/UI-face-4.jpg',
    '/assets/practice.png'

];
// Install serviceworker
self.addEventListener('install', evt => {
    //console.log('Service worker has been installed.')
    evt.waitUntil(
        caches.open(staticCacheName).then(cache => {
            console.log('Caching the assets.');
            cache.addAll(assets);
        })
    )

});
// Activate serviceworker
self.addEventListener('activate', evt => {
    //console.log('Service worker has been activated.');
    evt.waitUntil(
        caches.keys().then(keys => {
            //console.log('keys');
            return Promise.all(keys
                .filter(key => key !== staticCacheName && key !== dynamicCacheName)
                .map(key => caches.delete(key)))
        })
    )
});
// fetch event
self.addEventListener('fetch', evt => {
    //console.log('fetch event', evt)
    evt.respondWith(
        caches.match(evt.request).then(cacheRes => {
            return cacheRes || fetch(evt.request).then(fetchRes => {
                return caches.open(dynamicCacheName).then(cache => {
                    cache.put(evt.request.url, fetchRes);
                    return fetchRes;
                })
            });
        }).catch(() => {
            return caches.match('/pages/fallback.html');
        })
    )
});
