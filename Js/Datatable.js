const table=  new DataTable('#example', {
    processing: true,
    serverSide: true,
    ajax:{
       url:'../Connections/MysqlDatatable.php',
       type: 'POST',
       error: function(err){
        alert("hata olustu" + err);
      }
    }, 
    columns: [
        { 
            data: 'username',
            title:'Username',
        },
        { 
            data: 'password',
            title:'Parola', 
        },
        { 
            data: 'isimler',
            title:'İsim-Soyisim',
        },
        { 
            data: 'dogumTarihi',
            title:'Dogum-Tarihi',
        }
    ]
});

