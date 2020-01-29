const staticCacheName = 'site-static';
// Install serviceworker
self.addEventListener('install', evt => {
    //console.log('Service worker has been installed.')
    caches.open(staticCacheName).then(cache, () => {
        cache.addAll()
    })
});
// Activate serviceworker
self.addEventListener('activate', evt => {
    console.log('Service worker has been activated.')
});
// fetch event
self.addEventListener('fetch', evt => {
    console.log('fetch event', evt)
});
