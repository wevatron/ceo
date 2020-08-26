// Your web app's Firebase configuration
var firebaseConfig = {
		apiKey: "AIzaSyD6RDtFEHCslYJNLC-fhPDmrn3hHLRzMfQ",
		authDomain: "ceo-2020.firebaseapp.com",
		databaseURL: "https://ceo-2020.firebaseio.com",
		projectId: "ceo-2020",
		storageBucket: "ceo-2020.appspot.com",
		messagingSenderId: "559272465351",
		appId: "1:559272465351:web:22904eaae24873aff1bfe2",
		measurementId: "G-3J7H5NM02Z"
};
// Initialize Firebase
firebase.initializeApp(firebaseConfig);

  let id_video = '';

  var database   = firebase.database();
  var referencia = database.ref("youtube");
  var youtuber   = {};

  referencia.on('value',function(datos) {
	    youtuber=datos.val();
	    $.each(youtuber, function(indice,valor) {
	        id_video = valor;
	        updateYutube(id_video);
	    });
  },function(objetoError){
        console.log('Error read:'+objetoError.code);
  });