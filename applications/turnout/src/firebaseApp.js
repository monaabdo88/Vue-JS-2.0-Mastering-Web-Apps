import firebase from 'firebase'
const config = {
    apiKey: "AIzaSyBEZ46uEvzVBsGBb1xu7tmYqQ4OyKvViC4",
    authDomain: "turnout-62597.firebaseapp.com",
    databaseURL: "https://turnout-62597.firebaseio.com",
    projectId: "turnout-62597",
    storageBucket: "turnout-62597.appspot.com",
    messagingSenderId: "29245166511"
  };
  export const firebaseApp = firebase.initializeApp(config)
