let arrayProd = []; 
  let index = 0;
  let pid = 0;
  let vTotal = [];
  let cont = 0;
  let cont2 = 0;
  
  $(document).ready(function(){
    $(document).on('click','.btnadc', function(){
      var id = $(this).attr("id");
      
      $.ajax({
        url: 'http://127.0.0.1:8000/api/produtos/'+id,
        success: function(data) {     
          pid++;
          array = $.extend({}, {'pid': pid}, {'data':data.data});

          adcProd(array);

          somaValor(arrayProd)

          geraTabela(arrayProd);
        }
      });
    });
  });

function abreModal() {
  $("#myModal").modal({
      show: true
    });

    verTabela();
  }
  
function abreMenu() {
  $("#exampleModal").modal({
      show: true
  });
}  
function adcProd(array){
  arrayProd.push(array);
  addItem(); 
}

function somaValor(arrayProd){
  let soma = 0;
    
    for (let i = 0;i < arrayProd.length; i++){
      soma += arrayProd[i].data.valor;
    }

    valueEdited = soma.toLocaleString('pt-br',{style: 'currency', currency: 'BRL'});

    document.getElementById('valorTotal').innerHTML = valueEdited; 
}

function geraTabela(arrayProd){
  let tbody = document.getElementById('tablesProd');
  tbody = '';

  
  tbody += '<table class="greyGridTable"><thead><tr><th>#</th><th>PRODUTO</th><th>VALOR</th><th>X</th></tr></thead><tbody>';
  
  for(i = 0; i < arrayProd.length; i++){

    
    tbody += '<tr id="'+arrayProd[i].pid+'">';
      tbody += '<td>'+arrayProd[i].pid+'</td>';
      tbody += '<td>'+arrayProd[i].data.descricao+'</td>';
      tbody += '<td>'+arrayProd[i].data.valor.toLocaleString('pt-br',{style: 'currency', currency: 'BRL'})+'</td>';
      tbody += '<td><button id="'+arrayProd[i].pid+'" class="btn removeProd" type="button" class="close" aria-label="Close"><span><i class="fa fa-close"></i></span></button></td>';

  }

  tbody += '</tr>';
  tbody += '</tbody>';
  tbody += '</table>';
  tbody += '<span id="valorTotal" class="checkoutTotal"></span>';
    
    document.getElementById('tablesProd').innerHTML = tbody;

}

$(document).ready(function(){
    $(document).on('click','.removeProd', function(){
      var id = $(this).attr("id");
     //id = document.getElementById(i).innerText;
     
    for(i = 0; i < arrayProd.length; i++){
      
      if(arrayProd[i].pid == id){
        arrayProd.splice(i,1);
          
        }  
        
      }
      geraTabela(arrayProd);
      somaValor(arrayProd);
      rmvItem();
      verTabela();
  });
});

function geraMsg(){
  let link1 = 'https://api.whatsapp.com/send?phone=5585992987225&text=Ol%C3%A1!%20Gostaria%20de%20fazer%20um%20pedido!';
  let link2 = 'https://api.whatsapp.com/send?phone=5585992987225&text=Ol%C3%A1!%20Gostaria%20de%20fazer%20um%20pedido!%20Vou%20querer%3A%20';
  let link = '';
  let prods = '';

  
  if(arrayProd.length == 0){
    link = link1;

    window.open(link);

  }else if(arrayProd.length == 1){
    link += link2;
    for(i = 0; i < arrayProd.length; i++){
  
      prods = arrayProd[i].data.descricao;

      
      link += encodeURIComponent(prods);
    } 
    window.open(link);
  
  }else{
    link += link2;
    for(i = 0; i < arrayProd.length; i++){
  
      prods = arrayProd[i].data.descricao;

      link += encodeURIComponent(prods+' - ');
    }
    link += encodeURIComponent('Observações: ');
    window.open(link);
  }

}

function addItem(){
  cont += 1;

    document.getElementById('cont').innerHTML = cont;
    document.getElementById('cont2').innerHTML = cont;
}

function rmvItem(){
    cont = document.getElementById('cont').innerHTML;
    cont2 = document.getElementById('cont2').innerHTML;
  
    cont -= 1;
    cont2 -= 1;

    document.getElementById('cont').innerHTML = cont;
    document.getElementById('cont2').innerHTML = cont2;
}

function verTabela(){
  if(arrayProd.length < 1){
      msg = '';
      msg += '<p>Não perde tempo, faz logo seu pedido!</p>';
      msg += '<span id="valorTotal" class="checkoutTotal"></span>';
      
      document.getElementById('tablesProd').innerHTML = msg;
    }else{
      geraTabela(arrayProd);
      somaValor(arrayProd);
    }
}