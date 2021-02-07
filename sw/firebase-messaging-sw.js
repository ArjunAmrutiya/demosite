importScripts('https://www.gstatic.com/firebasejs/7.14.6/firebase-app.js');
importScripts('https://www.gstatic.com/firebasejs/7.14.6/firebase-messaging.js');

var firebaseConfig = {
  apiKey: "AIzaSyCILjDHFNFdX7OqFPZQiLS7GzqAgZUNXpk",
  authDomain: "pushnotify-48cb7.firebaseapp.com",
  databaseURL: "https://pushnotify-48cb7-default-rtdb.firebaseio.com",
  projectId: "pushnotify-48cb7",
  storageBucket: "pushnotify-48cb7.appspot.com",
  messagingSenderId: "247935303064",
  appId: "1:247935303064:web:3a3fe95677608853c6bfed",
  measurementId: "G-SQK7LVM379",
};

firebase.initializeApp(firebaseConfig);
const messaging=firebase.messaging();

messaging.setBackgroundMessageHandler(function (payload) {
    console.log(payload);
    const notification=JSON.parse(payload);
    const notificationOption={
        body:notification.body,
        icon:notification.icon
    };
    return self.registration.showNotification(payload.notification.title,notificationOption);
});