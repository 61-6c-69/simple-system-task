<html>
  <head>
    <title><?php echo $arg['title']?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"/>
    <style>
      body{
        background-image: url('assets/bg.jpg');
      }
    </style>
  </head>
  <body class="bg-black text-light">
    <div class="container-fluid">
      <div class="row align-items-center h-100 text-center">
        <div class="col">
          <div class="row">
            <div class="col-12 pb-5">
              <h1><?php echo $arg['title']?></h1>
            </div>
            <div class="col-12">
              <div class="w-50 m-auto">
                <input type="text" id="keywords" class="form-control bg-transparent text-light text-center border-dark rounded-pill" placeholder="Your text..."/>
                <button class="btn btn btn-dark text-light ps-5 pe-5 mt-2 btn-sm" id="search">Search</button>
              </div>
            </div>
            <div class="col-12 row mt-4" id="result"></div>
          </div>
        </div>
      </div>
    </div>
  </body>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script>
    var translate = {'economy': 'اقتصاد', 'sport': 'ورزش', 'political': 'سیاست', 'medicine': 'پزشکی'}
    $(document).ready(function(){
      $('#search').click(function(){
        let keyword = $('#keywords').val()
        if(keywords === ""){
          return;
        }

        $.get('search',{'query': keyword}, function(jdata){
          if(!jdata.ok){
            $('#result').html("خطا در ارسال!")
            return
          }
          let html = ""
          for(let itm in jdata.result){
            html+= "<div class='col-3'><div class='bg-black p-2'>"
            html+= "<h5>"+translate[itm]+"</h5>"
            html+= "<p>"+jdata.result[itm].count+"</p>"
            html+= "<div class='bg-dark border-0 text-light text-center rounded p-1'>["+(jdata.result[itm].words.toString())+"]</div>"
            html+= "</div></div>"
          }
          $('#result').html(html)
        })
      })
    })
  </script>
</html>
