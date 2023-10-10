const CACHE_NAME = 'my-cache-v1';

const urlsToCache = [
  '/',
  '/css/style.css',
  '/js/app.js',
  '/offline.html',
  '/images/notification-icon.png',
  '/images/notification-badge.png',
  // Agrega aquí más recursos que deseas almacenar en caché
];

self.addEventListener('install', event => {
  event.waitUntil(
    caches.open(CACHE_NAME)
      .then(cache => cache.addAll(urlsToCache))
  );
});

self.addEventListener('activate', event => {
  event.waitUntil(
    caches.keys().then(cacheNames => {
      return Promise.all(
        cacheNames.map(cacheName => {
          if (cacheName !== CACHE_NAME) {
            return caches.delete(cacheName);
          }
        })
      );
    })
  );
});

self.addEventListener('fetch', event => {
  event.respondWith(
    caches.match(event.request)
      .then(response => {
        return response || fetch(event.request);
      })
      .catch(() => {
        return caches.match('/offline.html');
      })
  );
});

self.addEventListener('message', event => {
  if (event.data && event.data.action === 'skipWaiting') {
    self.skipWaiting();
  }
});

self.addEventListener('push', event => {
  const options = {
    body: event.data.text(),
    icon: '/images/notification-icon.png',
    badge: '/images/notification-badge.png'
  };

  event.waitUntil(
    self.registration.showNotification('Notificación Push', options)
  );
});

self.addEventListener('notificationclick', event => {
  event.notification.close();
  clients.openWindow('https://tupagina.com');
});

// Más funcionalidades personalizadas aquí...
