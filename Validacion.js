//on llama eventos:
$(document).on("ready",Inicio);
function Inicio()
{
  //me traigo el boton de mujer por Id
  $(".btn-info").click(function(event){
    var status = $(this).attr('id');
    console.log(status);
    if(status == "BtnSx1")
    {
      $( "#BtnSx1" ).css( "border", "1px solid blue");
      $( "#Genero" ).val("M");
       //$("#BtnSx2").attr("disabled",true);
    }
    else if (status == "BtnSx2")
     {
      $( "#BtnSx2" ).css( "border", "1px solid blue");
      $( "#Genero" ).val("F");
    }
    //declaro variable
  //  var SxM="Mujer";
    //pruebo y sale dos  veces
  //  console.log(SxM);
  //sss  alert(SxM);
  });
  //Validar meses:
  $(".btn-meses").click(function(event)
  {
      var Selectt=$(this).attr('id');
      console.log('entra en validar meses');
      if (Selectt=="Uno")
      {
        //Accion:
        $( "#Uno" ).css( "border", "1px solid blue");
        $( "#MiMes" ).val("1-3 Meses");
      }
      else if (Selectt == "MaTres")
       {
        $( "#MaTres" ).css( "border", "1px solid blue");
        $( "#MiMes" ).val("3-6 meses");
      }
      else if (Selectt == "MaSeis")
       {
        $( "#MaSeis" ).css( "border", "1px solid blue");
        $( "#MiMes" ).val("mas de 6 meses");
      }

  });

  $(".btn-finan").click(function(event)
  {
        var Opcion=$(this).attr('id');
        console.log("Finanzas");
        if (Opcion=="Ca1")
        {
          $( "#Ca1" ).css( "border", "1px solid blue");
          $( "#FnSon" ).val("12 meses");
        }
        else if (Opcion=="Ca2")
        {
          $( "#Ca2" ).css( "border", "1px solid blue");
          $( "#FnSon" ).val("36 meses");
        }
        else if (Opcion=="Ca3")
        {
          $( "#Ca2" ).css( "border", "1px solid blue");
          $( "#FnSon" ).val("60 meses");
        }
  });

  $("#checkbox").click(function() {  //que hace esto??,guardar en una variable  el si y si no el no
          if($("#checkbox").is(':checked')) {
            //  alert("Está activado");
              //  $( "#FnSon" ).val("Si");
          } else {
            //  alert("No está activado");
                //$( "#FnSon" ).val("No");
          }
      });



}
