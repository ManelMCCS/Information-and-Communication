
<!DOCTYPE html>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
<html lang="en">
    <head>
      <title>Informação e comunicação</title>  
      <link rel="stylesheet" href="./css/slyle1.css">
    </head>

    <body> 
      <header>
        <div id = "anchor_header">
          <h1><a href="./index.html">Informação e comunicação</a></h1>
        </div>
      </header>

      <nav>
        <div id = "navbar"></div>
      </nav>
      <!--##################CONTENT#######################-->  
      <div class="main_text"; id = "main_text">
        <h2>Contactos</h2>  
        <p>In progress</p>

      </div>
      <!--##################CONTENT#######################-->  
      <script>
        navbar();

        function navbar()
        {
          var x = document.getElementById("main_text");
          var main_subject = x.getElementsByTagName("h2");
          var subsubject = x.getElementsByTagName("h3");

          
          var subjects = ["Início","Internet","subsubjects", "Atrasos na rede", "end", "Camada de aplicação", "subsubjects", "Protocolos", "TCP", "end", "Contactos"];
          var url_subjects = ["index.html","atrasos_na_rede.html","protocolos.html", "tcp.html", "contactos.html"];

          var text = "<hr><ul>";
          var j = 0;
          var sub = 0;

          for (var i = 0; i < subjects.length ;i++) 
          {
            if(subjects[i+1] == "subsubjects")
            {
              text += '<li class="dropdown"> <a ';
              if(main_subject == subjects[i]) text += 'class="active"';
              text += 'href="javascript:void(0)" class="dropbtn">' + subjects[i] + '</a>';
              text += '<div class="dropdown-content">';
              i++;
              sub = 1;
            }
            else if(subjects[i] == "end")
            {
              sub = 0;
              text += '</div></li>';
            }
            else if(sub)
            {
              text +='<a';
              if(subsubject == subjects[i]) text += 'class="active"';
              
              text += ' href="' + url_subjects[j++] + '">' + subjects[i] +'</a>';
            }
            else if(subjects[i] != "end")
            {
              //text += '<li <a ';
              //if(main_subject == subjects[i]) text += 'class="active"';
              text += '<li <a class="active href="' + url_subjects[j++] + '">' + subjects[i] +'</a></li>';
            }
          }
          text += "<hr></ul>";

          document.getElementById("navbar").innerHTML = text;
        }
      </script>
        <footer>
            <hr>
            <p class="footer_text"> <b>Author: </b>Manuel Cerqueira da Silva </p>
            <ul>
              <a href="https://www.linkedin.com/in/manuel-cerqueira-da-silva-9305131b9/"> <img src="./images/logos/iconLinkedin.png" alt="Linkedin" width="40" height="40"></a> <br>
              <a href="https://github.com/ManelMCCS"> <img src="./images/logos/iconGithub.png" alt="Github" title="Github"  width="40" height="40" style="margin-left: 1px;"></a> <br>
            </ul>
        </footer>
        
    </body>



</html>