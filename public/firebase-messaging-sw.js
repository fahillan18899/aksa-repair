importScripts('https://www.gstatic.com/firebasejs/9.14.0/firebase-app-compat.js')
importScripts('https://www.gstatic.com/firebasejs/9.14.0/firebase-messaging-compat.js')


const firebaseConfig = {
  apiKey: "AIzaSyA0md7L4kCUzhja7dnAxpiYN_KzVfZl0o8",
  authDomain: "wyasa-notif.firebaseapp.com",
  projectId: "wyasa-notif",
  storageBucket: "wyasa-notif.appspot.com",
  messagingSenderId: "458907715979",
  appId: "1:458907715979:web:f718256ae1736fddaa078e",
  measurementId: "G-3S820797YB"
};

firebase.initializeApp(firebaseConfig);

const messaging = firebase.messaging();

messaging.onBackgroundMessage(function (payload) {
  console.log('[firebase-messaging-sw.js] Received background message ', payload);
  // Customize notification here        
  const notificationTitle = payload.data.title;
  const notificationOptions = {
    body: payload.data.body,
    icon: payload.data.icon,
  };

  self.registration.showNotification(notificationTitle, notificationOptions);
  self.addEventListener('notificationclick', function (event) {
    const clickedNotification = event.notification
    clickedNotification.close();
    event.waitUntil(
      clients.openWindow(payload.data.click_action)
    )
  })
}); 
