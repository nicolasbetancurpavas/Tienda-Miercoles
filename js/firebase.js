 // Import the functions you need from the SDKs you need
 import { initializeApp } from "https://www.gstatic.com/firebasejs/9.6.10/firebase-app.js";
 import { getAnalytics } from "https://www.gstatic.com/firebasejs/9.6.10/firebase-analytics.js";
 // TODO: Add SDKs for Firebase products that you want to use
 // https://firebase.google.com/docs/web/setup#available-libraries

 // Your web app's Firebase configuration
 // For Firebase JS SDK v7.20.0 and later, measurementId is optional
 const firebaseConfig = {
   apiKey: "AIzaSyD6qDBE0lXcFDqY1cnODb8FxMs9u-x_Z8I",
   authDomain: "nicolastienda-28caf.firebaseapp.com",
   projectId: "nicolastienda-28caf",
   storageBucket: "nicolastienda-28caf.appspot.com",
   messagingSenderId: "117840028216",
   appId: "1:117840028216:web:bcb86f9cfdc51c3d897ccd",
   measurementId: "G-S9LZBHG0EH"
 };

 // Initialize Firebase
 const app = initializeApp(firebaseConfig);
 const analytics = getAnalytics(app);
