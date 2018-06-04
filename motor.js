var img = [["home","../img/v3.jpg","../img/v1.jpg"], ["servicios","../img/v2.jpg","../img/atraccion.png","../img/v5.png"],["nosotros","../img/v3.jpg"],["contacto","../img/v5.jpg"],["aviso","../img/v7.jpg"]];
var $htmldoc,doc;
var motor = {
	file:"",
	url:"",
	posImg:0,
	readfile:function(path,index){
		motor.url=path;
		motor.posImg=index;
		if (window.File && window.FileReader && window.FileList && window.Blob) {
			console.log("can read")
		} else {
			alert('The App are not fully supported in this browser.');
		}
		// $.get("readfile.php",{
			// ruta:path
			// }, 
			// function (respuesta) {
				// motor.file = respuesta;				
			// });  	
		var jqxhr = $.get("readfile.php",{ruta:path}, function(respuesta) {
			motor.file = respuesta;	
			console.log("success");
		})
		.done(function() {
			$htmldoc = $(motor.file);
			motor.procesafile()
		})
		.fail(function() {
			alert( "error" );
		});
		$("#step1").hide()
		$("#step2").show()
	},
	procesafile:function(){
		try {
			$("#if").append(motor.file);
		}
		catch(err) {
			console.log("error")
		}
		$.each( $("img"), function( k, v ) {
			var ruta = $(this).attr("src")
			$(this).attr("data-ruta",ruta)
			ruta = "..//" + ruta
			$(this).attr("src",ruta)
		});
		$.each( $("link"), function( k, v ) {
			var ruta = $(this).attr("href")
			if(ruta.substr(0,1) != "/" ){
				$(this).attr("data-ruta",ruta)
				ruta = "..//" + ruta
				$(this).attr("href",ruta)
			}
		});
		$("#if p,#if a,#if li,#if ol,#if address,#if label").attr("contenteditable","true")
		$(".content_CN").attr("contenteditable","false")
		$("#if p,#if a,#if li,#if ol,#if address,#if label").attr("style","border-style:groove")
	},
	imagenes:function(){
		var i = parseInt(this.posImg)
		var html = ''
		$.each( img[i], function( k, v ) {
			if(k!=0){
			html += '<div id="imagen">'
			html += ' <div class="form-group"><label for="exampleInputFile"></label><input id="file" type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp"><small id="fileHelp" class="form-text text-muted"></small></div>'
			html += '<div class="text-justify p-tit">Por favor nombra la imagen: '+img[i][k]+'</div>'
			html += '<button class="boton" onclick="motor.uploadimg()"><a href="javascript:void(0)">CAMBIAR IMAGEN</a></button>'
			html += '<img src="'+img[i][k]+'"></div>'}	
		});
		$("#contenImg").show()
		$("#if").hide()
		$("#Imgfinal").append(html);
	},
	uploadimg:function(file){
	
   
    data = new FormData();
    data.append('file', $('#file')[0].files[0]);

    var imgname  =  $('input[type=file]').val();
     var size  =  $('#file')[0].files[0].size;


    $.ajax({
      url: "uploadimg2.php",
      type: "POST",
      data: data,
      enctype: 'multipart/form-data',
      processData: false,  // tell jQuery not to process the data
      contentType: false   // tell jQuery not to set contentType
    }).done(function(data) {
       alert("se remplazo imagen")

    });
		
	},
	upload:function(file){
		
		$.ajax({
        url: "uploadfile.php",
        type:"post",
        async: false,
        data: {
            file:file,url:motor.url
        },
        success: function(response){   
			alert("subi cambios")
			window.location = 'X0904adminDefPhp.php';
		},
			error:function(xhr, ajaxOptions, thrownError){alert(xhr.responseText); ShowMessage("??? ?? ?????? ??????? ????","fail");alert( "error" );}
		});
		
		// var jqxhr = $.get("upload.php",{file:file,url:motor.url}, function(respuesta) {
			// motor.file = respuesta;	
			// console.log("success");
		// })
		// .done(function() {
			// alert("subi cambios")
		// })
		// .fail(function() {
			// alert( "error" );
		// });
	},
	sendfile:function(){
		$.each( $("img"), function( k, v ) {
			var ruta = $(this).attr("data-ruta")
			$(this).attr("src",ruta)
		});
		$.each( $("link"), function( k, v ) {
			var ruta = $(this).attr("data-ruta")
			if(ruta.substr(0,1) != "/" ){
				$(this).attr("href",ruta)
			}
		});
		$("#if p,#if a,#if li,#if ol,#if address,#if label").attr("contenteditable","false")
		$("#if p,#if a,#if li,#if ol,#if address,#if label").attr("style","border-style:none")
		motor.file = $("#if").html()
		// var data = "data:text/plain;charset=UTF-8," + encodeURIComponent(motor.file);
		var data = motor.file  
		motor.upload(data);
	},
	exit:function(){
	},
	recargar:function(){
		location.reload();
	}
}
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
    document.getElementById("main").style.marginLeft= "0";
}

$(".content_CN").click(function(e){
		e.preventDefault();
	})
	
	