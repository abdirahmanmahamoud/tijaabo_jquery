$('#fromreg').submit(function(e){
    e.preventDefault();
    let username = $('#username').val();
    let email = $('#email').val();
    let password = $('#password').val();
    let confirmpassword = $('#confirmpassword').val();
    $('#mess').html('');
    if(password == confirmpassword){
        let send ={
            'username' : username,
            'email' : email,
            'password' : password,
            'dooq' : 'reg'
        }
        $.ajax({
            method : 'POST',
            dataType : 'JSON',
            url :  'kayd.php',
            data :  send,
            success : function(data){
              let status = data.status;
              let per = data.data;
              alerts(status,per);
            },
            error : function(data){
               alerts(data.status,data.data);
            },
         })
    }else{
        alerts(false,'password is malaha');
    }
})
$('#from_lonig').submit(function(e){
    e.preventDefault();
    let username = $('#username').val();
    let password = $('#password').val();
    $('#mess').html('');
        let send ={
            'username' : username,
            'password' : password,
            'dooq' : 'lonig'
        }
        $.ajax({
            method : 'POST',
            dataType : 'JSON',
            url :  'kayd.php',
            data :  send,
            success : function(data){
              let status = data.status;
              let per = data.data;
              alerts(status,per);
            },
            error : function(data){
               alerts(data.status,data.data);
            },
         })
  
})

function alerts(status,mes){
    let mess = $('#mess');
    if(status == true){
        let p = `     <style>
        #pm{
            background-color: #4aec04;
            color: #fff;
        }
    </style>
   <p id="pm">r${mes}</p>`;
   mess.append(p);
   window.location.href = 'index.php';
    }else{
        let p = `     <style>
        #pm{
            background-color: #f72516;
            color: #fff;
        }
    </style>
   <p id="pm">${mes}</p>`;
   mess.append(p);
    }
}