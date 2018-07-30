
       function addreq() 
       {
          var fio = $('input[name=fio]').val();
          var adress = $('input[name=adress]').val();
          var dataofstart = $('input[name=dataofstart]').val();
          var status = $('input[name=status]').val();
          var comm = $('input[name=comm]').val();
          // отправляем AJAX запрос
          $.ajax(
             {
                type: "POST",
                url: "http://neww.ua/ondone.php",
                data: {fio:fio,
                       adress:adress,
                       dataofstart:dataofstart,
                       status:status,
                       comm:comm},
                success: function(response) 
                {
                   if(response == true)
                   {
                      console.log(fio + " добавлен!");
                      location.reload();
                   }
                   else
                   console.log("Ошибка в запросе! Сервер вернул вот что: " + response);
                }
             }
             );
       }