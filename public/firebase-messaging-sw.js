importScripts('https://www.gstatic.com/firebasejs/4.9.1/firebase-app.js');
importScripts('https://www.gstatic.com/firebasejs/4.9.1/firebase-messaging.js');
/*Update this config*/
  // For Firebase JS SDK v7.20.0 and later, measurementId is optional
// For Firebase JS SDK v7.20.0 and later, measurementId is optional
  const firebaseConfig = {
    apiKey: "AIzaSyBm2XN6ywRUb408SuoN960m-Or3-FzRAAY",
    authDomain: "wyasa-simrs-notification.firebaseapp.com",
    projectId: "wyasa-simrs-notification",
    storageBucket: "wyasa-simrs-notification.appspot.com",
    messagingSenderId: "1011976405810",
    appId: "1:1011976405810:web:25247a63f17c7dac88cd2b",
    measurementId: "G-HL1GLJM4SW"
  };
  firebase.initializeApp(firebaseConfig);

  

const messaging = firebase.messaging();
messaging.setBackgroundMessageHandler(function(payload) {
  console.log('[firebase-messaging-sw.js] Received background message ', payload);
  // Customize notification here
  const notificationTitle = payload.data.title;
  const notificationOptions = {
    body: payload.data.body,
	icon: 'http://localhost/gcm-push/img/icon.png',
	image: 'http://localhost/gcm-push/img/d.png',
	data: {
		    click_action: 'http://localhost/gcm-push/img/d.png'
		    }
  };

  return self.registration.showNotification(notificationTitle,
      notificationOptions);
});
// [END background_handler]

self.addEventListener('notificationclick', function(event){
    let action_click = event.notification.data.click_action;
    event.notification.close();
    
    event.waitUntil()(
        clients.openWindow(action_click)
    )
})

